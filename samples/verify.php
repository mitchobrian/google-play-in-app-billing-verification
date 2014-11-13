<?php
/**
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://code.google.com/p/android-market-license-verification/source/browse/trunk/LICENSE
 */

set_include_path(get_include_path() . PATH_SEPARATOR . '../library');

require_once 'library/GooglePlay/InAppBilling/GooglePlayResponseData.php';
require_once 'library/GooglePlay/InAppBilling/GooglePlayResponseValidator.php';
require_once 'library/GooglePlay/InAppBilling/GooglePlayInvalidArgumentException.php';
require_once 'library/GooglePlay/InAppBilling/GooglePlayOrder.php';
require_once 'library/GooglePlay/InAppBilling/GooglePlayRuntimeException.php';

//Your key, copy and paste from https://market.android.com/publish/editProfile
define('PUBLIC_KEY', '');
//Your app's package name, e.g. com.example.yourapp
define('PACKAGE_NAME', '');

//The given response from Google Play, should look likes this:
/* '{
   "orderId":"12999763169054705758.1371079406387615",
   "packageName":"com.example.app",
   "productId":"exampleSku",
   "purchaseTime":1345678900000,
   "purchaseState":0,
   "developerPayload":"bGoa+V7g/yqDXvKRqq+JTFn4uQZbPiQJo4pf9RzJ",
   "purchaseToken":"rojeslcdyyiapnqcynkjyyjh"
 }' */
// http://developer.android.com/google/play/billing/billing_integrate.html
$responseData = '';
//The signature provided with the response data (Base64)
$signature = '';

//if you wish to inspect or use the response data, you can create
//a response object and pass it as the first argument to the Validator's verify method
//$response = new AndroidMarket_Licensing_ResponseData($responseData);
//$valid = $validator->verify($response, $signature);

$validator = new AndroidMarket_Licensing_ResponseValidator(PUBLIC_KEY, PACKAGE_NAME);
$valid = $validator->verify($responseData, $signature);

var_dump($valid);


$responseData = trim($responseData);
