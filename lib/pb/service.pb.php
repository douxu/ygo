<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace Ygoservice;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Request extends \Google\Protobuf\Internal\Message
{
    private $method = '';
    private $params;

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams(&$var)
    {
        $this->params = $var;
    }

}

class Reply extends \Google\Protobuf\Internal\Message
{
    private $response = '';

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse($var)
    {
        GPBUtil::checkString($var, True);
        $this->response = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af4010a0d736572766963652e70726f746f120979627365727669636522" .
    "780a0752657175657374120e0a066d6574686f64180120012809122e0a06" .
    "706172616d7318022003280b321e2e7962736572766963652e5265717565" .
    "73742e506172616d73456e7472791a2d0a0b506172616d73456e74727912" .
    "0b0a036b6579180120012809120d0a0576616c75651802200128093a0238" .
    "0122190a055265706c7912100a08726573706f6e7365180120012809323b" .
    "0a09594253657276696365122e0a0443616c6c12122e7962736572766963" .
    "652e526571756573741a102e7962736572766963652e5265706c79220062" .
    "0670726f746f33"
));

