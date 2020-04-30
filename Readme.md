# Readme

The Sports Engine Publication Component (SEPC) is the component to which clients connect in order to get the Sports Engine data.

We provide a PHP-based connector which knows how to connect to and communicate with the SEPC.

Current version: `0.1.20-dev`

## Installation

The connector can be found in the public Packagist repository under the `oddsmatrix/sepc-connector` name.
To install, just run `composer require oddsmatrix/sepc-connector` in the root of your Composer based project.

###### Note
Before the actual release, in order to be able to run the `composer require` command the following steps must 
be followed:
* Clone the `sepc-connector-php` repository
* Add the `repositories` entry in the `composer.josn` file at the root of your project if it's not already there.
For the SEPC library entry:
    * Set the repository type to `vcs`
    * Set the url of the repository as a path to your local `sepc-connector-php` clone
* Add the `minimum-stability` entry in the `composer.json` file and set it to `dev`

~~~~
{
    "type": "project",
    "license": "proprietary",
    "repositories": [{
        "type": "vcs",
        "url": "/<path_to_your_project>/sepc-connector-php"
    }],
    "minimum-stability": "dev",
    "require": {
        "php": "^7.2.5",
        "ext-ctype": "*",
        "ext-iconv": "*",
        "oddsmatrix/sepc-connector": "dev-master",
...
~~~~

Run `composer require oddsmatrix/sepc-connector`. 

The `"oddsmatrix/sepc-connector": "dev-master",` line should now show up in your `composer.json`.

## Usage
The SEPC Connector can be used in 3 modes:
* PUSH - Direct Socket connection to the Sports Engine. This configuration provides the fastest updates as the SE
constantly pushes updates.
* PULL - Retrieves data using the HTTP protocol. Friendlier with spotty internet connection, update rate is 1/30s
* Preserved-state PULL - Same as PULL, but allows for saving state (authentication/dump completion status) 
between requests. This is useful when you want to poll the SE from a `supervisor` or a `serverless function`.

### PUSH
#### 1. Create the `SEPCCredentials`
Refer to the common section.

#### 2. Instantiate the `SEPCPushConnector` class
~~~
use OM\OddsMatrix\SEPC\Connector\SEPCPushConnector;

$connector = new SEPCPushConnector(
            $credentials,
            $logger
        );
~~~

#### 3. Connect
For socket connections use port 7000.
```
$connector->connect("sept.oddsmatrix.com", 7000);
```
#### 4. Poll for updates
```
/** @var SDQLResponse|null $response */
$response = $connector->getNextData();
```

### Preserved state PUSH
#### 1. Create the `SEPCCredentials`
Refer to the common section.

#### 2. Retrieve the persisted state file
We will use the same `SDQLSerializer` for serializing and deserializing the persisted state.
```
$stateFilePath = ...;
$serializer = SDQLSerializerProvider::getSerializer();
$state = null;

try {
    $stateFileContent = file_get_contents($stateFilePath);
    if (false !== $stateFileContent) {
        $state = $serializer->deserialize($stateFileContent, PersistableConnectionState::class, 'xml');
    }
} catch (\Exception $e) {
    ...
}
```

In case there is no state to be read, we will create a new empty state.
```
if (is_null($state)) {
    $state = new PersistableConnectionState();
}
```

#### 3. Create the connector
For socket connections use port 7000.
```
$connector = new SEPCPushConnector(
            $credentials,
            $this->_logger,
            $state
        );
```
#### 4. Connect
```
$connector->autoconnect("sept.oddsmatrix.com", 7000);
```
#### 5. Poll the connector for data
```
/** @var SDQLResponse|null $response */
$response = $connector->getNextData();
```
#### 6. Persist the updated state after every poll
```
file_put_contents($stateFilePath, $serializer->serialize($connector->getConnectionState(), 'xml'));
```
#### (Optional) Keeping the process alive with `supervisor`
It is important to set the supervisor directory argument first. (which sets the CWD)
Here is an example supervisor config for a Symfony application.
Supervisor configuration files should reside in `/etc/supervisor.d/` and should have a
`.ini` extension.
Note that `stderr` and `stdout` forwarding make sense only if the logging interface prints to console.
```
[program:push-persisted-state]
directory=$HOME/sepc-connector-test
command=$HOME/sepc-connector-test/bin/console sepc:push -vv --state-file-path=$HOME/sepc-state.xml
autostart=true
startsecs=60
startretries=5
autorestart=true
stopsignal=KILL
stdout_logfile=/var/log/sepc/push_stdout.log
stderr_logfile=/var/log/sepc/push_stderr.log
stdout_logfile_maxbytes=1GB
stderr_logfile_maxbytes=1GB
```
### PULL
#### 1. Create `SEPCCredentials`
Refer to the common section.

#### 2. Instantiate the `SEPCPullConnector` class
```
$connector = new SEPCPullConnector(
            $credentials,
            $this->_logger
        );
```
#### 3. Connect
For HTTP connections use port 8081.
```
$connector->connect("http://sept.oddsmatrix.com", 8081);
```
#### 4. Poll for updates
```
/** @var SDQLResponse|null $response */
$response = $connector->getNextData();
```

### Preserved-state PULL
#### 1. Create `SEPCCredentials`
Refer to the common section.

#### 2. Implement a persistable version of the `SEPCConnectionStateInterface`
Here is an example of a persistable version of the connection state interface that
can be serialized and deserialized using JMS Serializer.

In this example we will use this persistable connection state in order to save 
the state on the filesystem between subsequent invocations.

Note that we've also added a request counter to this persistable connection state. It is 
not necessary, just for logging purposes.

```
<?php


namespace App\Entity;


/**
 * Class PersistableConnectionState
 *
 * @Serializer\XmlRoot(name="PersistableConnection")
 */
class PersistableConnectionState implements SEPCConnectionStateInterface
{

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionId")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionSpecificationName")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionSpecificationName;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("port")
     * @Serializer\XmlAttribute()
     */
    private $_port;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("host")
     * @Serializer\XmlAttribute()
     */
    private $_host;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("initialDataDumpComplete")
     * @Serializer\XmlAttribute()
     */
    private $_initialDataDumpComplete = false;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     * @Serializer\XmlAttribute()
     */
    private $_count = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastBatchUuid")
     * @Serializer\XmlAttribute()
     */
    private $_lastBatchUuid;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionChecksum")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionChecksum;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("resumable")
     * @Serializer\XmlAttribute()
     */
    private $_resumable = false;

    /**
     * @return string
     */
    public function getSubscriptionId(): string
    {
        return $this->_subscriptionId;
    }

    /**
     * @param string $subscriptionId
     * @return PersistableConnectionState
     */
    public function setSubscriptionId(string $subscriptionId): PersistableConnectionState
    {
        $this->_subscriptionId = $subscriptionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionSpecificationName(): string
    {
        return $this->_subscriptionSpecificationName;
    }

    /**
     * @param string $subscriptionSpecificationName
     * @return PersistableConnectionState
     */
    public function setSubscriptionSpecificationName(string $subscriptionSpecificationName): PersistableConnectionState
    {
        $this->_subscriptionSpecificationName = $subscriptionSpecificationName;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->_port;
    }

    /**
     * @param int $port
     * @return PersistableConnectionState
     */
    public function setPort(int $port): PersistableConnectionState
    {
        $this->_port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->_host;
    }

    /**
     * @param string $host
     * @return PersistableConnectionState
     */
    public function setHost(string $host): PersistableConnectionState
    {
        $this->_host = $host;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInitialDataDumpComplete(): bool
    {
        return $this->_initialDataDumpComplete;
    }

    /**
     * @param bool $initialDataDumpComplete
     * @return PersistableConnectionState
     */
    public function setInitialDataDumpComplete(bool $initialDataDumpComplete): PersistableConnectionState
    {
        $this->_initialDataDumpComplete = $initialDataDumpComplete;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    /**
     * @param int $count
     * @return PersistableConnectionState
     */
    public function setCount(int $count): PersistableConnectionState
    {
        $this->_count = $count;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastBatchUuid(): ?string
    {
        return $this->_lastBatchUuid;
    }

    /**
     * @param string|null $lastBatchUuid
     * @return PersistableConnectionState
     */
    public function setLastBatchUuid(?string $lastBatchUuid): PersistableConnectionState
    {
        $this->_lastBatchUuid = $lastBatchUuid;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionChecksum(): ?string
    {
        return $this->_subscriptionChecksum;
    }

    /**
     * @param string|null $subscriptionChecksum
     * @return PersistableConnectionState
     */
    public function setSubscriptionChecksum(?string $subscriptionChecksum): PersistableConnectionState
    {
        $this->_subscriptionChecksum = $subscriptionChecksum;
        return $this;
    }

    /**
     * @return bool
     */
    public function isResumable(): bool
    {
        return $this->_resumable;
    }

    /**
     * @param bool $resumable
     * @return PersistableConnection
     */
    public function setResumable(bool $resumable): PersistableConnection
    {
        $this->_resumable = $resumable;
        return $this;
    }
}
```
#### 3. Connect
This phase is required only if the connection has never been established or it has expired.
Keep in mind that not polling the connection for 30 minutes will result in an expired token.

For this example, we'll be using the same serializer that handles request serialization in an XML format.
```
$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();
```

Finding the file containing the connection state data or not will dictate if we will create a new connection.
```
 /** @var PersistableConnectionState $connectionState */
$connectionState = null;
try {
    $connectionStateData = file_get_contents(self::connectionStatePath);
    $connectionState = $serializer->deserialize($connectionStateData, PersistableConnectionState::class, 'xml');
} catch (\Exception $e) {
    $this->_logger->warning("$e");
}
```


Calling `connect()` is required only when a connection state is absent. Otherwise it will overwrite the 
current state.
```
if (null == $connectionState) {
    $connector = new SEPCPullConnector($credentials, $this->_logger, new PersistableConnectionState());
    $connector->connect("http://sept.oddsmatrix.com", 8081);
    $connectionState = $connector->getConnectionState();
} else {
    $connector = new SEPCPullConnector($credentials, $this->_logger, $connectionState);
}
```

#### 4. Poll for updates using the persistable `SEPCConnectionStateInterface` implementation
Once a valid connection state is available and a connector object has been instantiated, we can run the 
`getNextData()` method once.
```
/** @var SDQLResponse|null $response */
$response = $connector->getNextData();
```
It is important to persist the updated state afterwards.
```
file_put_contents(self::connectionStatePath, $serializer->serialize($connectionState, 'xml'));
```

### Common section
#### Creating the `SEPCCredentials` class
```
use OM\OddsMatrix\SEPC\Connector\SEPCCredentials;

$credentials = new SEPCCredentials("<subscription_specification_name>");
```
#### Using the `getNextData()` response
The `SDQLResponse` class is a wrapper around any response that can be received from the SE.
Any HTTP request coming from the Pull connector or any message received via the Push connection
will deserialize into an object of this class.

If the message contains a batch of the initial data dump, the individual entities can be 
found under:
```
/** var \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse $sdqlResponse */
$entities = $sdqlResponse->getInitialData()->getEntities();
```

If the message contains an update batch, the individual entity updates can be found under:
```
/** var \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse $sdqlResponse */
$entities = $sdqlResponse->getDataUpdates();
```

The `$entities` object will contain a list of objects specific to every SportsModel entity.

#### Stopping the session
Calling the `disconnect()` method of any connector will send the SE an unsubscribe request.
```
/** @var SDQLResponse|null $response */
$response = $connector->disconnect();
```
It is important to also invalidate the persisted connection state when unsubscribing.

#### Logging
Logging can be enabled by passing the optional second parameter in any 
SEPC Connector constructor.
The second parameter must implement the `Psr\Log\LoggerInterface`.
Passing `null` as a second parameter is valid.
