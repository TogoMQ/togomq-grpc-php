<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Mq\V1;

/**
 * Services
 *
 */
class MqServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function PubMessage($metadata = [], $options = []) {
        return $this->_bidiRequest('/mq.v1.MqService/PubMessage',
        ['\Mq\V1\PubMessageResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function SubMessage($metadata = [], $options = []) {
        return $this->_bidiRequest('/mq.v1.MqService/SubMessage',
        ['\Mq\V1\SubMessageResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \Mq\V1\CountMessagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Mq\V1\CountMessagesResponse>
     */
    public function CountMessages(\Mq\V1\CountMessagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mq.v1.MqService/CountMessages',
        $argument,
        ['\Mq\V1\CountMessagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Mq\V1\HealthCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Mq\V1\HealthCheckResponse>
     */
    public function HealthCheck(\Mq\V1\HealthCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mq.v1.MqService/HealthCheck',
        $argument,
        ['\Mq\V1\HealthCheckResponse', 'decode'],
        $metadata, $options);
    }

}
