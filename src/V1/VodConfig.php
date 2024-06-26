<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/vod_configs.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata used to register VOD configs.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.VodConfig</code>
 */
class VodConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the VOD config, in the form of
     * `projects/{project}/locations/{location}/vodConfigs/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. Source URI for the VOD stream manifest.
     *
     * Generated from protobuf field <code>string source_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $source_uri = '';
    /**
     * Required. The default ad tag associated with this VOD config.
     *
     * Generated from protobuf field <code>string ad_tag_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ad_tag_uri = '';
    /**
     * Optional. Google Ad Manager (GAM) metadata.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GamVodConfig gam_vod_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $gam_vod_config = null;
    /**
     * Output only. State of the VOD config.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Options for fetching source manifests and segments.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.FetchOptions source_fetch_options = 8;</code>
     */
    protected $source_fetch_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the VOD config, in the form of
     *           `projects/{project}/locations/{location}/vodConfigs/{id}`.
     *     @type string $source_uri
     *           Required. Source URI for the VOD stream manifest.
     *     @type string $ad_tag_uri
     *           Required. The default ad tag associated with this VOD config.
     *     @type \Google\Cloud\Video\Stitcher\V1\GamVodConfig $gam_vod_config
     *           Optional. Google Ad Manager (GAM) metadata.
     *     @type int $state
     *           Output only. State of the VOD config.
     *     @type \Google\Cloud\Video\Stitcher\V1\FetchOptions $source_fetch_options
     *           Options for fetching source manifests and segments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VodConfigs::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the VOD config, in the form of
     * `projects/{project}/locations/{location}/vodConfigs/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the VOD config, in the form of
     * `projects/{project}/locations/{location}/vodConfigs/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Source URI for the VOD stream manifest.
     *
     * Generated from protobuf field <code>string source_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSourceUri()
    {
        return $this->source_uri;
    }

    /**
     * Required. Source URI for the VOD stream manifest.
     *
     * Generated from protobuf field <code>string source_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_uri = $var;

        return $this;
    }

    /**
     * Required. The default ad tag associated with this VOD config.
     *
     * Generated from protobuf field <code>string ad_tag_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAdTagUri()
    {
        return $this->ad_tag_uri;
    }

    /**
     * Required. The default ad tag associated with this VOD config.
     *
     * Generated from protobuf field <code>string ad_tag_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAdTagUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_tag_uri = $var;

        return $this;
    }

    /**
     * Optional. Google Ad Manager (GAM) metadata.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GamVodConfig gam_vod_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Video\Stitcher\V1\GamVodConfig|null
     */
    public function getGamVodConfig()
    {
        return $this->gam_vod_config;
    }

    public function hasGamVodConfig()
    {
        return isset($this->gam_vod_config);
    }

    public function clearGamVodConfig()
    {
        unset($this->gam_vod_config);
    }

    /**
     * Optional. Google Ad Manager (GAM) metadata.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GamVodConfig gam_vod_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Video\Stitcher\V1\GamVodConfig $var
     * @return $this
     */
    public function setGamVodConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\GamVodConfig::class);
        $this->gam_vod_config = $var;

        return $this;
    }

    /**
     * Output only. State of the VOD config.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the VOD config.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Stitcher\V1\VodConfig\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Options for fetching source manifests and segments.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.FetchOptions source_fetch_options = 8;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\FetchOptions|null
     */
    public function getSourceFetchOptions()
    {
        return $this->source_fetch_options;
    }

    public function hasSourceFetchOptions()
    {
        return isset($this->source_fetch_options);
    }

    public function clearSourceFetchOptions()
    {
        unset($this->source_fetch_options);
    }

    /**
     * Options for fetching source manifests and segments.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.FetchOptions source_fetch_options = 8;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\FetchOptions $var
     * @return $this
     */
    public function setSourceFetchOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\FetchOptions::class);
        $this->source_fetch_options = $var;

        return $this;
    }

}

