<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/stitch_details.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a stitched ad.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.AdStitchDetail</code>
 */
class AdStitchDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ad break ID of the processed ad.
     *
     * Generated from protobuf field <code>string ad_break_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ad_break_id = '';
    /**
     * Required. The ad ID of the processed ad.
     *
     * Generated from protobuf field <code>string ad_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ad_id = '';
    /**
     * Required. The time offset of the processed ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ad_time_offset = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ad_time_offset = null;
    /**
     * Optional. Indicates the reason why the ad has been skipped.
     *
     * Generated from protobuf field <code>string skip_reason = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $skip_reason = '';
    /**
     * Optional. The metadata of the chosen media file for the ad.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> media = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $media;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ad_break_id
     *           Required. The ad break ID of the processed ad.
     *     @type string $ad_id
     *           Required. The ad ID of the processed ad.
     *     @type \Google\Protobuf\Duration $ad_time_offset
     *           Required. The time offset of the processed ad.
     *     @type string $skip_reason
     *           Optional. Indicates the reason why the ad has been skipped.
     *     @type array|\Google\Protobuf\Internal\MapField $media
     *           Optional. The metadata of the chosen media file for the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\StitchDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ad break ID of the processed ad.
     *
     * Generated from protobuf field <code>string ad_break_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAdBreakId()
    {
        return $this->ad_break_id;
    }

    /**
     * Required. The ad break ID of the processed ad.
     *
     * Generated from protobuf field <code>string ad_break_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAdBreakId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_break_id = $var;

        return $this;
    }

    /**
     * Required. The ad ID of the processed ad.
     *
     * Generated from protobuf field <code>string ad_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAdId()
    {
        return $this->ad_id;
    }

    /**
     * Required. The ad ID of the processed ad.
     *
     * Generated from protobuf field <code>string ad_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAdId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_id = $var;

        return $this;
    }

    /**
     * Required. The time offset of the processed ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ad_time_offset = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getAdTimeOffset()
    {
        return $this->ad_time_offset;
    }

    public function hasAdTimeOffset()
    {
        return isset($this->ad_time_offset);
    }

    public function clearAdTimeOffset()
    {
        unset($this->ad_time_offset);
    }

    /**
     * Required. The time offset of the processed ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ad_time_offset = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setAdTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->ad_time_offset = $var;

        return $this;
    }

    /**
     * Optional. Indicates the reason why the ad has been skipped.
     *
     * Generated from protobuf field <code>string skip_reason = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSkipReason()
    {
        return $this->skip_reason;
    }

    /**
     * Optional. Indicates the reason why the ad has been skipped.
     *
     * Generated from protobuf field <code>string skip_reason = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSkipReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->skip_reason = $var;

        return $this;
    }

    /**
     * Optional. The metadata of the chosen media file for the ad.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> media = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Optional. The metadata of the chosen media file for the ad.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> media = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMedia($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->media = $arr;

        return $this;
    }

}

