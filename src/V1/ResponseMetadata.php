<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/ad_tag_details.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for the response of an ad request.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.ResponseMetadata</code>
 */
class ResponseMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Error message received when making the ad request.
     *
     * Generated from protobuf field <code>string error = 1;</code>
     */
    protected $error = '';
    /**
     * Headers from the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct headers = 2;</code>
     */
    protected $headers = null;
    /**
     * Status code for the response.
     *
     * Generated from protobuf field <code>string status_code = 3;</code>
     */
    protected $status_code = '';
    /**
     * Size in bytes of the response.
     *
     * Generated from protobuf field <code>int32 size_bytes = 4;</code>
     */
    protected $size_bytes = 0;
    /**
     * Total time elapsed for the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 5;</code>
     */
    protected $duration = null;
    /**
     * The body of the response.
     *
     * Generated from protobuf field <code>string body = 6;</code>
     */
    protected $body = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $error
     *           Error message received when making the ad request.
     *     @type \Google\Protobuf\Struct $headers
     *           Headers from the response.
     *     @type string $status_code
     *           Status code for the response.
     *     @type int $size_bytes
     *           Size in bytes of the response.
     *     @type \Google\Protobuf\Duration $duration
     *           Total time elapsed for the response.
     *     @type string $body
     *           The body of the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\AdTagDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * Error message received when making the ad request.
     *
     * Generated from protobuf field <code>string error = 1;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Error message received when making the ad request.
     *
     * Generated from protobuf field <code>string error = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Headers from the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct headers = 2;</code>
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
     * Headers from the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct headers = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setHeaders($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->headers = $var;

        return $this;
    }

    /**
     * Status code for the response.
     *
     * Generated from protobuf field <code>string status_code = 3;</code>
     * @return string
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Status code for the response.
     *
     * Generated from protobuf field <code>string status_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_code = $var;

        return $this;
    }

    /**
     * Size in bytes of the response.
     *
     * Generated from protobuf field <code>int32 size_bytes = 4;</code>
     * @return int
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * Size in bytes of the response.
     *
     * Generated from protobuf field <code>int32 size_bytes = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt32($var);
        $this->size_bytes = $var;

        return $this;
    }

    /**
     * Total time elapsed for the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Total time elapsed for the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * The body of the response.
     *
     * Generated from protobuf field <code>string body = 6;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * The body of the response.
     *
     * Generated from protobuf field <code>string body = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;

        return $this;
    }

}

