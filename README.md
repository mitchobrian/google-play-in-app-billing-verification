## PHP Google Play In App Billing Verification 
## for Google API Version 3


A simple PHP library for verifying responses from the Google Play In-App billing service. By verifying responses signed using public-key cryptography you can check whether a user has genuinely purchased your application.

You can use this library to validate in app billing responses before allowing a user to download files from your server or access restricted content. It is PEAR compliant (PSR-0) and can easily be integrated with your server-side applications.

The only requirements for this library are PHP compiled with OpenSSL support, and a PHP version of 4.0.4 or higher. PHP5 works too. 


---


## Test UI

There is simple small test UI for public usage. Have look:

http://www.palmomedia.de/google-play-in-app-billing-verification/samples/


---


Original repo: 

http://code.google.com/p/android-market-license-verification/


---


## Important Information 

*The given response data from the google in app billing API should not be manipulated in any case. The order of the structured JSON is important for the ssl verification with the given signature.*
```
{ 
   "orderId":"12999763169054705758.1371079406387615", 
   "packageName":"com.example.app",
   "productId":"exampleSku",
   "purchaseTime":1345678900000,
   "purchaseState":0,
   "developerPayload":"bGoa+V7g/yqDXvKRqq+JTFn4uQZbPiQJo4pf9RzJ",
   "purchaseToken":"rojeslcdyyiapnqcynkjyyjh"
 }
```


---


For further information look at:

http://developer.android.com/google/play/billing/billing_integrate.html

Stackoverflow:

http://stackoverflow.com/questions/5645418/android-in-app-purchase-server-signature-verification-using-php-openssl

Original source code issue:

https://code.google.com/p/android-market-license-verification/issues/detail?id=4&thanks=4&ts=1415802161

And the php openssl documentation:

http://php.net/manual/en/function.openssl-verify.php

Or another github example: 

https://gist.github.com/prime31/4750744
