<?php
/**
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.
 *
 * It is also available through the world-wide-web at this URL:
 * https://github.com/MG2Innovations/google-play-license-verification/blob/master/LICENSE
 */

/**
 * A representation of the data returned by the Google Play In-App Billing service
 *
 * @category   GooglePlay
 * @package    GooglePlay_Licensing
 */
class GooglePlayResponseData
{
    
	/**
	 * @var array
	 */
    protected $_order;

    /**
     * @param string $responseData
     */
    public function  __construct($responseData)
    {
         if (!is_string($responseData)) {
            throw new GooglePlayInvalidArgumentException("Invalid response data, expected string");
         }

         $this->_order = new GooglePlayOrder(json_decode($responseData));
    }

    /**
     * Get the array of orders
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->_order;
    }
}
