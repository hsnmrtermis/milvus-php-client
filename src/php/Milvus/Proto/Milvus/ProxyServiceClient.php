<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Milvus;

/**
 */
class ProxyServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Milvus\Proto\Milvus\RegisterLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterLink(\Milvus\Proto\Milvus\RegisterLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.ProxyService/RegisterLink',
        $argument,
        ['\Milvus\Proto\Milvus\RegisterLinkResponse', 'decode'],
        $metadata, $options);
    }

}
