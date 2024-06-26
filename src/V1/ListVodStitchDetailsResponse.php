<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for VideoStitcherService.listVodStitchDetails.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.ListVodStitchDetailsResponse</code>
 */
class ListVodStitchDetailsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A List of stitch Details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.VodStitchDetail vod_stitch_details = 1;</code>
     */
    private $vod_stitch_details;
    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Video\Stitcher\V1\VodStitchDetail>|\Google\Protobuf\Internal\RepeatedField $vod_stitch_details
     *           A List of stitch Details.
     *     @type string $next_page_token
     *           The pagination token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * A List of stitch Details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.VodStitchDetail vod_stitch_details = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVodStitchDetails()
    {
        return $this->vod_stitch_details;
    }

    /**
     * A List of stitch Details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.VodStitchDetail vod_stitch_details = 1;</code>
     * @param array<\Google\Cloud\Video\Stitcher\V1\VodStitchDetail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVodStitchDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Stitcher\V1\VodStitchDetail::class);
        $this->vod_stitch_details = $arr;

        return $this;
    }

    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

