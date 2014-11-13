Google Play In App Billing Verification 
===================================
for Google API Version 3
===================================
A simple PHP library for verifying responses from the Google Play In-App billing service. By verifying responses signed using public-key cryptography you can check whether a user has genuinely purchased your application.

You can use this library to validate in app billing responses before allowing a user to download files from your server or access restricted content. It is PEAR compliant (PSR-0) and can easily be integrated with your server-side applications.

The only requirements for this library are PHP compiled with OpenSSL support, and a PHP version of 4.0.4 or higher. PHP5 works too. 

---

Original repo: http://code.google.com/p/android-market-license-verification/

*Please note that this code isn't working for unknown reasons. The given response data for the openssl_verify verification should be correct as taken from the API description.*

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
