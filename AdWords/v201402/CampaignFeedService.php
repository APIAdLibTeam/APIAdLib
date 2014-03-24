<?php
/**
 * Contains all client objects for the CampaignFeedService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

/** Required classes. **/
require_once dirname(__FILE__) ."/../Lib/AdWordsSoapClient.php";

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ApiError";

  /**
   * @access public
   * @var string
   */
  public $fieldPath;

  /**
   * @access public
   * @var string
   */
  public $trigger;

  /**
   * @access public
   * @var string
   */
  public $errorString;

  /**
   * @access public
   * @var string
   */
  public $ApiErrorType;
  private $_parameterMap = array(
    "ApiError.Type" => "ApiErrorType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Base class for exceptions.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ApplicationException {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ApplicationException";

  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * @access public
   * @var string
   */
  public $ApplicationExceptionType;
  private $_parameterMap = array(
    "ApplicationException.Type" => "ApplicationExceptionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($message = null, $ApplicationExceptionType = null) {
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }

}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * Errors returned when Authentication failed.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthenticationError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthenticationError";

  /**
   * @access public
   * @var tnsAuthenticationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("AuthorizationError", FALSE)) {
/**
 * Errors encountered when trying to authorize a user.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthorizationError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthorizationError";

  /**
   * @access public
   * @var tnsAuthorizationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("CampaignFeed", FALSE)) {
/**
 * CampaignFeeds are used to link a feed to a campaign using a matching function,
 * making the feed's feed items available in the campaign's ads for substitution.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeed {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignFeed";

  /**
   * @access public
   * @var integer
   */
  public $feedId;

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var Function
   */
  public $matchingFunction;

  /**
   * @access public
   * @var integer[]
   */
  public $placeholderTypes;

  /**
   * @access public
   * @var tnsCampaignFeedStatus
   */
  public $status;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($feedId = null, $campaignId = null, $matchingFunction = null, $placeholderTypes = null, $status = null) {
    $this->feedId = $feedId;
    $this->campaignId = $campaignId;
    $this->matchingFunction = $matchingFunction;
    $this->placeholderTypes = $placeholderTypes;
    $this->status = $status;
  }

}}

if (!class_exists("CampaignFeedError", FALSE)) {
/**
 * Represents an error for the CampaignFeedService.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignFeedError";

  /**
   * @access public
   * @var tnsCampaignFeedErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ClientTermsError", FALSE)) {
/**
 * Error due to user not accepting the AdWords terms of service.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ClientTermsError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ClientTermsError";

  /**
   * @access public
   * @var tnsClientTermsErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("CollectionSizeError", FALSE)) {
/**
 * Errors associated with the size of the given collection being
 * out of bounds.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CollectionSizeError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CollectionSizeError";

  /**
   * @access public
   * @var tnsCollectionSizeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("DatabaseError", FALSE)) {
/**
 * Errors that are thrown due to a database access problem.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DatabaseError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DatabaseError";

  /**
   * @access public
   * @var tnsDatabaseErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("DateRange", FALSE)) {
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DateRange {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DateRange";

  /**
   * @access public
   * @var string
   */
  public $min;

  /**
   * @access public
   * @var string
   */
  public $max;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($min = null, $max = null) {
    $this->min = $min;
    $this->max = $max;
  }

}}

if (!class_exists("DistinctError", FALSE)) {
/**
 * Errors related to distinct ids or content.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DistinctError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DistinctError";

  /**
   * @access public
   * @var tnsDistinctErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("EntityCountLimitExceeded", FALSE)) {
/**
 * Signals that an entity count limit was exceeded for some level.
 * For example, too many criteria for a campaign.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityCountLimitExceeded extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityCountLimitExceeded";

  /**
   * @access public
   * @var tnsEntityCountLimitExceededReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $enclosingId;

  /**
   * @access public
   * @var integer
   */
  public $limit;

  /**
   * @access public
   * @var string
   */
  public $accountLimitType;

  /**
   * @access public
   * @var integer
   */
  public $existingCount;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->accountLimitType = $accountLimitType;
    $this->existingCount = $existingCount;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("EntityNotFound", FALSE)) {
/**
 * An id did not correspond to an entity, or it referred to an entity which does not belong to the
 * customer.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityNotFound extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityNotFound";

  /**
   * @access public
   * @var tnsEntityNotFoundReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("FeedFunction", FALSE)) {
/**
 * Represents a function where its operator is applied to its argument operands
 * resulting in a return value. It has the form
 * (Operand... Operator Operand...). The type of the return value depends on
 * the operator being applied and the type of the operands.
 * 
 * <p class="special">Operands per function is limited to <b>20</b>.</p>
 * 
 * <p>Here is a code example:</p>
 * 
 * <pre><code>
 * 
 * // For example "feed_attribute == 30" can be represented as:
 * FeedId feedId = (FeedId of Feed associated with feed_attribute)
 * FeedAttributeId feedAttributeId = (FeedAttributeId of feed_attribute)
 * Function function = new Function();
 * function.setLhsOperand(
 * Arrays.asList((Operand) new FeedAttributeOperand(feedId, feedAttributeId)));
 * function.setOperator(Operator.IN);
 * function.setRhsOperand(
 * Arrays.asList((Operand) new ConstantOperand(30L)));
 * 
 * // Another example matching on multiple values:
 * "feed_item_id IN (10, 20, 30)" can be represented as:
 * 
 * Function function = new Function();
 * function.setLhsOperand(
 * Arrays.asList((Operand) new RequestContextOperand(ContextType.FEED_ITEM_ID)));
 * function.setOperator(Operator.IN);
 * function.setRhsOperand(Arrays.asList(
 * (Operand) new ConstantOperand(10L), new ConstantOperand(20L), new ConstantOperand(30L)));
 * </code></pre>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FeedFunction {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Function";

  /**
   * @access public
   * @var tnsFunctionOperator
   */
  public $operator;

  /**
   * @access public
   * @var FunctionArgumentOperand[]
   */
  public $lhsOperand;

  /**
   * @access public
   * @var FunctionArgumentOperand[]
   */
  public $rhsOperand;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operator = null, $lhsOperand = null, $rhsOperand = null) {
    $this->operator = $operator;
    $this->lhsOperand = $lhsOperand;
    $this->rhsOperand = $rhsOperand;
  }

}}

if (!class_exists("FunctionError", FALSE)) {
/**
 * Errors that indicate issues with the function.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FunctionError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "FunctionError";

  /**
   * @access public
   * @var tnsFunctionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("IdError", FALSE)) {
/**
 * Errors associated with the ids.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class IdError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "IdError";

  /**
   * @access public
   * @var tnsIdErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class InternalApiError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "InternalApiError";

  /**
   * @access public
   * @var tnsInternalApiErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ListReturnValue", FALSE)) {
/**
 * Base list return value type.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ListReturnValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ListReturnValue";

  /**
   * @access public
   * @var string
   */
  public $ListReturnValueType;
  private $_parameterMap = array(
    "ListReturnValue.Type" => "ListReturnValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($ListReturnValueType = null) {
    $this->ListReturnValueType = $ListReturnValueType;
  }

}}

if (!class_exists("NotEmptyError", FALSE)) {
/**
 * Errors corresponding with violation of a NOT EMPTY check.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NotEmptyError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NotEmptyError";

  /**
   * @access public
   * @var tnsNotEmptyErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("NullError", FALSE)) {
/**
 * Errors associated with violation of a NOT NULL check.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NullError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NullError";

  /**
   * @access public
   * @var tnsNullErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("FunctionArgumentOperand", FALSE)) {
/**
 * An operand that can be used in a function expression.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FunctionArgumentOperand {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "FunctionArgumentOperand";

  /**
   * @access public
   * @var string
   */
  public $FunctionArgumentOperandType;
  private $_parameterMap = array(
    "FunctionArgumentOperand.Type" => "FunctionArgumentOperandType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($FunctionArgumentOperandType = null) {
    $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
  }

}}

if (!class_exists("Operation", FALSE)) {
/**
 * This represents an operation that includes an operator and an operand
 * specified type.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Operation {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Operation";

  /**
   * @access public
   * @var tnsOperator
   */
  public $operator;

  /**
   * @access public
   * @var string
   */
  public $OperationType;
  private $_parameterMap = array(
    "Operation.Type" => "OperationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operator = null, $OperationType = null) {
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }

}}

if (!class_exists("OperationAccessDenied", FALSE)) {
/**
 * Operation not permitted due to the invoked service's access policy.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OperationAccessDenied extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "OperationAccessDenied";

  /**
   * @access public
   * @var tnsOperationAccessDeniedReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("OrderBy", FALSE)) {
/**
 * Specifies how the resulting information should be sorted.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OrderBy {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "OrderBy";

  /**
   * @access public
   * @var string
   */
  public $field;

  /**
   * @access public
   * @var tnsSortOrder
   */
  public $sortOrder;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($field = null, $sortOrder = null) {
    $this->field = $field;
    $this->sortOrder = $sortOrder;
  }

}}

if (!class_exists("Page", FALSE)) {
/**
 * Contains the results from a get call.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Page {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Page";

  /**
   * @access public
   * @var integer
   */
  public $totalNumEntries;

  /**
   * @access public
   * @var string
   */
  public $PageType;
  private $_parameterMap = array(
    "Page.Type" => "PageType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($totalNumEntries = null, $PageType = null) {
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }

}}

if (!class_exists("Paging", FALSE)) {
/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Paging {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Paging";

  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var integer
   */
  public $numberResults;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($startIndex = null, $numberResults = null) {
    $this->startIndex = $startIndex;
    $this->numberResults = $numberResults;
  }

}}

if (!class_exists("Predicate", FALSE)) {
/**
 * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Predicate {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Predicate";

  /**
   * @access public
   * @var string
   */
  public $field;

  /**
   * @access public
   * @var tnsPredicateOperator
   */
  public $operator;

  /**
   * @access public
   * @var string[]
   */
  public $values;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($field = null, $operator = null, $values = null) {
    $this->field = $field;
    $this->operator = $operator;
    $this->values = $values;
  }

}}

if (!class_exists("QueryError", FALSE)) {
/**
 * A QueryError represents possible errors for query parsing and execution.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QueryError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QueryError";

  /**
   * @access public
   * @var tnsQueryErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $message = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->message = $message;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("QuotaCheckError", FALSE)) {
/**
 * Encapsulates the errors thrown during developer quota checks.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QuotaCheckError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QuotaCheckError";

  /**
   * @access public
   * @var tnsQuotaCheckErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RangeError", FALSE)) {
/**
 * A list of all errors associated with the Range constraint.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RangeError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RangeError";

  /**
   * @access public
   * @var tnsRangeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RateExceededError", FALSE)) {
/**
 * Signals that a call failed because a measured rate exceeded.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RateExceededError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RateExceededError";

  /**
   * @access public
   * @var tnsRateExceededErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $rateName;

  /**
   * @access public
   * @var string
   */
  public $rateScope;

  /**
   * @access public
   * @var integer
   */
  public $retryAfterSeconds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->rateName = $rateName;
    $this->rateScope = $rateScope;
    $this->retryAfterSeconds = $retryAfterSeconds;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ReadOnlyError", FALSE)) {
/**
 * Errors from attempting to write to read-only fields.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ReadOnlyError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ReadOnlyError";

  /**
   * @access public
   * @var tnsReadOnlyErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RejectedError", FALSE)) {
/**
 * Indicates that a field was rejected due to compatibility issues.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RejectedError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RejectedError";

  /**
   * @access public
   * @var tnsRejectedErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RequestContextOperand", FALSE)) {
/**
 * An operand in a function referring to a value in the request context.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequestContextOperand extends FunctionArgumentOperand {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequestContextOperand";

  /**
   * @access public
   * @var tnsRequestContextOperandContextType
   */
  public $contextType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($contextType = null, $FunctionArgumentOperandType = null) {
    parent::__construct();
    $this->contextType = $contextType;
    $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
  }

}}

if (!class_exists("RequestError", FALSE)) {
/**
 * Encapsulates the generic errors thrown when there's an error with user
 * request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequestError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequestError";

  /**
   * @access public
   * @var tnsRequestErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RequiredError", FALSE)) {
/**
 * Errors due to missing required field.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequiredError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequiredError";

  /**
   * @access public
   * @var tnsRequiredErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("Selector", FALSE)) {
/**
 * A generic selector to specify the type of information to return.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Selector {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Selector";

  /**
   * @access public
   * @var string[]
   */
  public $fields;

  /**
   * @access public
   * @var Predicate[]
   */
  public $predicates;

  /**
   * @access public
   * @var DateRange
   */
  public $dateRange;

  /**
   * @access public
   * @var OrderBy[]
   */
  public $ordering;

  /**
   * @access public
   * @var Paging
   */
  public $paging;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null) {
    $this->fields = $fields;
    $this->predicates = $predicates;
    $this->dateRange = $dateRange;
    $this->ordering = $ordering;
    $this->paging = $paging;
  }

}}

if (!class_exists("SelectorError", FALSE)) {
/**
 * Represents possible error codes for {@link Selector}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SelectorError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SelectorError";

  /**
   * @access public
   * @var tnsSelectorErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("SizeLimitError", FALSE)) {
/**
 * Indicates that the number of entries in the request or response exceeds the system limit.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SizeLimitError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SizeLimitError";

  /**
   * @access public
   * @var tnsSizeLimitErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Defines the required and optional elements within the header of a SOAP request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SoapRequestHeader {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SoapHeader";

  /**
   * @access public
   * @var string
   */
  public $clientCustomerId;

  /**
   * @access public
   * @var string
   */
  public $developerToken;

  /**
   * @access public
   * @var string
   */
  public $userAgent;

  /**
   * @access public
   * @var boolean
   */
  public $validateOnly;

  /**
   * @access public
   * @var boolean
   */
  public $partialFailure;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
    $this->clientCustomerId = $clientCustomerId;
    $this->developerToken = $developerToken;
    $this->userAgent = $userAgent;
    $this->validateOnly = $validateOnly;
    $this->partialFailure = $partialFailure;
  }

}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Defines the elements within the header of a SOAP response.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SoapResponseHeader {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SoapResponseHeader";

  /**
   * @access public
   * @var string
   */
  public $requestId;

  /**
   * @access public
   * @var string
   */
  public $serviceName;

  /**
   * @access public
   * @var string
   */
  public $methodName;

  /**
   * @access public
   * @var integer
   */
  public $operations;

  /**
   * @access public
   * @var integer
   */
  public $responseTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null) {
    $this->requestId = $requestId;
    $this->serviceName = $serviceName;
    $this->methodName = $methodName;
    $this->operations = $operations;
    $this->responseTime = $responseTime;
  }

}}

if (!class_exists("StringLengthError", FALSE)) {
/**
 * Errors associated with the length of the given string being
 * out of bounds.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class StringLengthError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "StringLengthError";

  /**
   * @access public
   * @var tnsStringLengthErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * The single reason for the authentication failure.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthenticationErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthenticationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AuthorizationErrorReason", FALSE)) {
/**
 * The reasons for the database error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthorizationErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthorizationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("CampaignFeedStatus", FALSE)) {
/**
 * Status of the CampaignFeed.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignFeed.Status";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("CampaignFeedErrorReason", FALSE)) {
/**
 * Error reasons.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignFeedError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ClientTermsErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ClientTermsError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("CollectionSizeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CollectionSizeErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CollectionSizeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ConstantOperandConstantType", FALSE)) {
/**
 * The types of constant operands.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ConstantOperandConstantType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ConstantOperand.ConstantType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("DatabaseErrorReason", FALSE)) {
/**
 * The reasons for the database error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DatabaseErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DatabaseError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("DistinctErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DistinctErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DistinctError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("EntityCountLimitExceededReason", FALSE)) {
/**
 * Limits at various levels of the account.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityCountLimitExceededReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityCountLimitExceeded.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("EntityNotFoundReason", FALSE)) {
/**
 * The specified id refered to an entity which either doesn't exist or is not accessible to the
 * customer. e.g. campaign belongs to another customer.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityNotFoundReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityNotFound.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("FunctionOperator", FALSE)) {
/**
 * Operators that can be used in functions.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FunctionOperator {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Function.Operator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("FunctionErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FunctionErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "FunctionError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("IdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class IdErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "IdError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class InternalApiErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "InternalApiError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NotEmptyErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NotEmptyError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NullErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NullError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("OperationAccessDeniedReason", FALSE)) {
/**
 * The reasons for the operation access error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OperationAccessDeniedReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "OperationAccessDenied.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("Operator", FALSE)) {
/**
 * This represents an operator that may be presented to an adsapi service.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Operator {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Operator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("PredicateOperator", FALSE)) {
/**
 * Defines the valid set of operators.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PredicateOperator {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Predicate.Operator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("QueryErrorReason", FALSE)) {
/**
 * The reason for the query error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QueryErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QueryError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
/**
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QuotaCheckErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QuotaCheckError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RangeErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RangeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RateExceededErrorReason", FALSE)) {
/**
 * The reason for the rate exceeded error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RateExceededErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RateExceededError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ReadOnlyErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ReadOnlyErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ReadOnlyError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RejectedErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RejectedErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RejectedError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RequestContextOperandContextType", FALSE)) {
/**
 * Campaign Id in the request context.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequestContextOperandContextType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequestContextOperand.ContextType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RequestErrorReason", FALSE)) {
/**
 * Error reason is unknown.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequestErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequestError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequiredErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequiredError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("SelectorErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SelectorErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SelectorError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("SizeLimitErrorReason", FALSE)) {
/**
 * The reasons for Ad Scheduling errors.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SizeLimitErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SizeLimitError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("SortOrder", FALSE)) {
/**
 * Possible orders of sorting.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SortOrder {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SortOrder";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class StringLengthErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "StringLengthError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("CampaignFeedServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of CampaignFeeds that meet the selector criteria.
 * 
 * @param selector Determines which CampaignFeeds to return. If empty all
 * Campaign feeds are returned.
 * @return The list of CampaignFeeds.
 * @throws ApiException Indicates a problem with the request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedServiceGet {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var Selector
   */
  public $selector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($selector = null) {
    $this->selector = $selector;
  }

}}

if (!class_exists("CampaignFeedServiceGetResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedServiceGetResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CampaignFeedPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($rval = null) {
    $this->rval = $rval;
  }

}}

if (!class_exists("CampaignFeedServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Adds, sets or removes CampaignFeeds.
 * 
 * @param operations The operations to apply.
 * @return The resulting Feeds.
 * @throws ApiException Indicates a problem with the request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedServiceMutate {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CampaignFeedOperation[]
   */
  public $operations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operations = null) {
    $this->operations = $operations;
  }

}}

if (!class_exists("CampaignFeedServiceMutateResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedServiceMutateResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CampaignFeedReturnValue
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($rval = null) {
    $this->rval = $rval;
  }

}}

if (!class_exists("Query", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of {@link CampaignFeed}s inside a {@link CampaignFeedPage} that matches
 * the query.
 * 
 * @param query The SQL-like AWQL query string.
 * @throws ApiException when there are one or more errors with the request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Query {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var string
   */
  public $query;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($query = null) {
    $this->query = $query;
  }

}}

if (!class_exists("QueryResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QueryResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CampaignFeedPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($rval = null) {
    $this->rval = $rval;
  }

}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ApiException extends ApplicationException {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ApiException";

  /**
   * @access public
   * @var ApiError[]
   */
  public $errors;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($errors = null, $message = null, $ApplicationExceptionType = null) {
    parent::__construct();
    $this->errors = $errors;
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }

}}

if (!class_exists("CampaignFeedOperation", FALSE)) {
/**
 * Operation used to create or mutate a CampaignFeed.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedOperation extends Operation {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignFeedOperation";

  /**
   * @access public
   * @var CampaignFeed
   */
  public $operand;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operand = null, $operator = null, $OperationType = null) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }

}}

if (!class_exists("CampaignFeedReturnValue", FALSE)) {
/**
 * The result of a call to {@link CampaignFeedService#mutate}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedReturnValue extends ListReturnValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignFeedReturnValue";

  /**
   * @access public
   * @var CampaignFeed[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($value = null, $ListReturnValueType = null) {
    parent::__construct();
    $this->value = $value;
    $this->ListReturnValueType = $ListReturnValueType;
  }

}}

if (!class_exists("ConstantOperand", FALSE)) {
/**
 * A constant operand in a matching function.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ConstantOperand extends FunctionArgumentOperand {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ConstantOperand";

  /**
   * @access public
   * @var tnsConstantOperandConstantType
   */
  public $type;

  /**
   * @access public
   * @var integer
   */
  public $longValue;

  /**
   * @access public
   * @var boolean
   */
  public $booleanValue;

  /**
   * @access public
   * @var double
   */
  public $doubleValue;

  /**
   * @access public
   * @var string
   */
  public $stringValue;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($type = null, $longValue = null, $booleanValue = null, $doubleValue = null, $stringValue = null, $FunctionArgumentOperandType = null) {
    parent::__construct();
    $this->type = $type;
    $this->longValue = $longValue;
    $this->booleanValue = $booleanValue;
    $this->doubleValue = $doubleValue;
    $this->stringValue = $stringValue;
    $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
  }

}}

if (!class_exists("FeedAttributeOperand", FALSE)) {
/**
 * Represents a feed attribute reference to use in a function.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FeedAttributeOperand extends FunctionArgumentOperand {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "FeedAttributeOperand";

  /**
   * @access public
   * @var integer
   */
  public $feedId;

  /**
   * @access public
   * @var integer
   */
  public $feedAttributeId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($feedId = null, $feedAttributeId = null, $FunctionArgumentOperandType = null) {
    parent::__construct();
    $this->feedId = $feedId;
    $this->feedAttributeId = $feedAttributeId;
    $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
  }

}}

if (!class_exists("FunctionOperand", FALSE)) {
/**
 * A function operand in a matching function.
 * Used to represent nested functions.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FunctionOperand extends FunctionArgumentOperand {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "FunctionOperand";

  /**
   * @access public
   * @var Function
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($value = null, $FunctionArgumentOperandType = null) {
    parent::__construct();
    $this->value = $value;
    $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
  }

}}

if (!class_exists("NullStatsPage", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NullStatsPage extends Page {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NullStatsPage";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($totalNumEntries = null, $PageType = null) {
    parent::__construct();
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }

}}

if (!class_exists("CampaignFeedPage", FALSE)) {
/**
 * The result of a call to {@link CampaignFeedService#get}. Contains a list of
 * associations between campaign and feeds.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedPage extends NullStatsPage {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignFeedPage";

  /**
   * @access public
   * @var CampaignFeed[]
   */
  public $entries;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($entries = null) {
    parent::__construct();
    $this->entries = $entries;
  }

}}

if (!class_exists("CampaignFeedService", FALSE)) {
/**
 * CampaignFeedService
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignFeedService extends AdWordsSoapClient {

  const SERVICE_NAME = "CampaignFeedService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/CampaignFeedService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/CampaignFeedService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "CampaignFeed" => "CampaignFeed",
    "CampaignFeedError" => "CampaignFeedError",
    "CampaignFeedOperation" => "CampaignFeedOperation",
    "CampaignFeedPage" => "CampaignFeedPage",
    "CampaignFeedReturnValue" => "CampaignFeedReturnValue",
    "ClientTermsError" => "ClientTermsError",
    "CollectionSizeError" => "CollectionSizeError",
    "ConstantOperand" => "ConstantOperand",
    "DatabaseError" => "DatabaseError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "EntityNotFound" => "EntityNotFound",
    "FeedAttributeOperand" => "FeedAttributeOperand",
    "Function" => "FeedFunction",
    "FunctionError" => "FunctionError",
    "FunctionOperand" => "FunctionOperand",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "ListReturnValue" => "ListReturnValue",
    "NotEmptyError" => "NotEmptyError",
    "NullError" => "NullError",
    "NullStatsPage" => "NullStatsPage",
    "FunctionArgumentOperand" => "FunctionArgumentOperand",
    "Operation" => "Operation",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OrderBy" => "OrderBy",
    "Page" => "Page",
    "Paging" => "Paging",
    "Predicate" => "Predicate",
    "QueryError" => "QueryError",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RejectedError" => "RejectedError",
    "RequestContextOperand" => "RequestContextOperand",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "Selector" => "Selector",
    "SelectorError" => "SelectorError",
    "SizeLimitError" => "SizeLimitError",
    "SoapHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "CampaignFeed.Status" => "CampaignFeedStatus",
    "CampaignFeedError.Reason" => "CampaignFeedErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
    "ConstantOperand.ConstantType" => "ConstantOperandConstantType",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "Function.Operator" => "FunctionOperator",
    "FunctionError.Reason" => "FunctionErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "Predicate.Operator" => "PredicateOperator",
    "QueryError.Reason" => "QueryErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestContextOperand.ContextType" => "RequestContextOperandContextType",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "SortOrder" => "SortOrder",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "get" => "CampaignFeedServiceGet",
    "getResponse" => "CampaignFeedServiceGetResponse",
    "mutate" => "CampaignFeedServiceMutate",
    "mutateResponse" => "CampaignFeedServiceMutateResponse",
    "query" => "Query",
    "queryResponse" => "QueryResponse",
  );


  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = self::$classmap;
    parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
        self::WSDL_NAMESPACE);
  }
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of CampaignFeeds that meet the selector criteria.
   * 
   * @param selector Determines which CampaignFeeds to return. If empty all
   * Campaign feeds are returned.
   * @return The list of CampaignFeeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function get($selector) {
    $args = new CampaignFeedServiceGet($selector);
    $result = $this->__soapCall("get", array($args));
    return $result->rval;
  }
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Adds, sets or removes CampaignFeeds.
   * 
   * @param operations The operations to apply.
   * @return The resulting Feeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function mutate($operations) {
    $args = new CampaignFeedServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($args));
    return $result->rval;
  }
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of {@link CampaignFeed}s inside a {@link CampaignFeedPage} that matches
   * the query.
   * 
   * @param query The SQL-like AWQL query string.
   * @throws ApiException when there are one or more errors with the request.
   */
  public function query($query) {
    $args = new Query($query);
    $result = $this->__soapCall("query", array($args));
    return $result->rval;
  }
}}