<?php


$success = file_get_contents("http://sept.oddsmatrix.com:8081/xmlfeed?requestType=SubscribeRequest&subscriptionSpecificationName=test");
echo gzdecode($success);