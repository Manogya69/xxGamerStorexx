<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/ad_group_ad_label.proto

namespace Google\Ads\GoogleAds\V11\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A relationship between an ad group ad and a label.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.AdGroupAdLabel</code>
 */
class AdGroupAdLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the ad group ad label.
     * Ad group ad label resource names have the form:
     * `customers/{customer_id}/adGroupAdLabels/{ad_group_id}~{ad_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The ad group ad to which the label is attached.
     *
     * Generated from protobuf field <code>optional string ad_group_ad = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_ad = null;
    /**
     * Immutable. The label assigned to the ad group ad.
     *
     * Generated from protobuf field <code>optional string label = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the ad group ad label.
     *           Ad group ad label resource names have the form:
     *           `customers/{customer_id}/adGroupAdLabels/{ad_group_id}~{ad_id}~{label_id}`
     *     @type string $ad_group_ad
     *           Immutable. The ad group ad to which the label is attached.
     *     @type string $label
     *           Immutable. The label assigned to the ad group ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\AdGroupAdLabel::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the ad group ad label.
     * Ad group ad label resource names have the form:
     * `customers/{customer_id}/adGroupAdLabels/{ad_group_id}~{ad_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the ad group ad label.
     * Ad group ad label resource names have the form:
     * `customers/{customer_id}/adGroupAdLabels/{ad_group_id}~{ad_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The ad group ad to which the label is attached.
     *
     * Generated from protobuf field <code>optional string ad_group_ad = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroupAd()
    {
        return isset($this->ad_group_ad) ? $this->ad_group_ad : '';
    }

    public function hasAdGroupAd()
    {
        return isset($this->ad_group_ad);
    }

    public function clearAdGroupAd()
    {
        unset($this->ad_group_ad);
    }

    /**
     * Immutable. The ad group ad to which the label is attached.
     *
     * Generated from protobuf field <code>optional string ad_group_ad = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Immutable. The label assigned to the ad group ad.
     *
     * Generated from protobuf field <code>optional string label = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLabel()
    {
        return isset($this->label) ? $this->label : '';
    }

    public function hasLabel()
    {
        return isset($this->label);
    }

    public function clearLabel()
    {
        unset($this->label);
    }

    /**
     * Immutable. The label assigned to the ad group ad.
     *
     * Generated from protobuf field <code>optional string label = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

}

