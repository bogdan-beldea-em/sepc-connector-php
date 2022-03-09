<?php


namespace OM\OddsMatrix\SEPC\Connector;


use OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException;
use OM\OddsMatrix\SEPC\Connector\Exception\SocketException;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;
use Psr\Log\LoggerInterface;

class SEPCPushConnector
{
    /**
     * @var SEPCPushConnection
     */
    private $_connection;

    /**
     * @var SEPCCredentials
     */
    private $_credentials;

    /**
     * @var LoggerInterface
     */
    private $_logger;

    /**
     * @var SEPCConnectionStateInterface|null
     */
    private $_state;

    /**
     * SEPCPushConnector constructor.
     * @param SEPCCredentials $_credentials
     * @param LoggerInterface|null $_logger
     * @param SEPCConnectionStateInterface|null $_state
     */
    public function __construct(SEPCCredentials $_credentials, LoggerInterface $_logger = null, ?SEPCConnectionStateInterface $_state = null)
    {
        $this->_credentials = $_credentials;
        $this->_logger = $_logger;
        $this->_state = $_state;
    }

    /**
     * @param string $host
     * @param int $port
     * @return SEPCPushConnection|null
     * @throws ConnectionException
     * @throws SocketException
     */
    public function connect(string $host, int $port): ?SEPCPushConnection
    {
        $this->_connection = new SEPCPushConnection(
            $this->_credentials,
            $this->_state,
            $this->_logger
        );

        $this->_connection->connect($host, $port);

        return $this->_connection;
    }

    /**
     * @return SEPCPullConnection|null
     * @throws ConnectionException
     * @throws SocketException
     */
    public function reconnect(): ?SEPCPushConnection
    {
        $this->_connection = new SEPCPushConnection(
            $this->_credentials,
            $this->_state,
            $this->_logger
        );

        $this->_connection->reconnect();

        return $this->_connection;
    }

    /**
     * @param string $host
     * @param int $port
     * @return SEPCPushConnection|null
     * @throws ConnectionException
     * @throws SocketException
     */
    public function autoconnect(string $host = null, int $port = null): ?SEPCPushConnection
    {
        if (!is_null($host)) {
            $this->_state->setHost($host);
        }

        if (!is_null($port)) {
            $this->_state->setPort($port);
        }

        if (is_null($this->_state->getHost())) {
            LogUtil::logE($this->_logger, "Connection host must be part of the connection state or passed as a parameter to autoconnect().");
            throw new ConnectionException("HOST cannot be null");
        }

        if (is_null($this->_state->getPort())) {
            LogUtil::logE($this->_logger, "Connection port must be part of the connection state or passed as a parameter to autoconnect().");
            throw new ConnectionException("PORT cannot be null");
        }

        if ($this->_state->isResumable()) {
            return $this->reconnect();
        } else {
            return $this->connect($this->_state->getHost(), $this->_state->getPort());
        }
    }

    /**
     * @return SDQLResponse|null
     * @throws ConnectionException
     * @throws Exception\SEPCException
     * @throws SocketException
     */
    public function getNextData(): ?SDQLResponse
    {
        try {
            if (null === $this->_connection) {
                $this->_connection = $this->reconnect();
            }
            return $this->_connection->getNextData();
        } catch (SocketException|ConnectionException $e) {
            LogUtil::logI($this->_logger, "$e\n Reconnecting...");
            try {
                sleep(5);
                $this->_connection = $this->autoconnect();
            } catch (SocketException|ConnectionException $e) {
                LogUtil::logC($this->_logger, "Error trying to reconnect: $e");
                throw $e;
            }
        }

        return null;
    }

    public function disconnectForced(): void
    {
        $this->_connection->disconnectForced();
        $this->_connection = null;
    }

    /**
     * @return SDQLResponse|null
     * @throws ConnectionException
     * @throws SocketException
     */
    public function disconnect(): ?SDQLResponse
    {
        $response = $this->_connection->disconnect();
        $this->_connection = null;

        return $response;
    }

    /**
     * @return SEPCConnectionStateInterface
     */
    public function getConnectionState(): SEPCConnectionStateInterface
    {
        return $this->_connection->getConnectionState();
    }
}