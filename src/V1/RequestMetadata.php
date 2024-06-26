<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/ad_tag_details.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for an ad request.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.RequestMetadata</code>
 */
class RequestMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The HTTP headers of the ad request.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct headers = 1;</code>
     */
    protected $headers = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $headers
     *           The HTTP headers of the ad request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\AdTagDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The HTTP headers of the ad request.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct headers = 1;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    public function hasHeaders()
    {
        return isset($this->headers);
    }

    public function clearHeaders()
    {
        unset($this->headers);
    }

    /**
     * The HTTP headers of the ad request.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct headers = 1;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setHeaders($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->headers = $var;

        return $this;
    }

}

