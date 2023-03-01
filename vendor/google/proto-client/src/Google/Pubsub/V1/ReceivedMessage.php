<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message and its corresponding acknowledgment ID.
 *
 * Generated from protobuf message <code>google.pubsub.v1.ReceivedMessage</code>
 */
class ReceivedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     */
    private $ack_id = '';
    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     */
    private $message = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     * @return string
     */
    public function getAckId()
    {
        return $this->ack_id;
    }

    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAckId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ack_id = $var;

        return $this;
    }

    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     * @return \Google\Pubsub\V1\PubsubMessage
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     * @param \Google\Pubsub\V1\PubsubMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Pubsub\V1\PubsubMessage::class);
        $this->message = $var;

        return $this;
    }

}

