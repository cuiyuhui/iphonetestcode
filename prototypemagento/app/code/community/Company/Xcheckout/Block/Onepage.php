<?php
require_once 'Mage/core/Checkout/Block/Onepage.php';
class Company_Xcheckout_Block_Onepage extends Mage_Checkout_Block_Onepage_Abstract {
	/**
	 * Get 'one step checkout' step data
	 *
	 * @return array
	 */
	public function getSteps() {
		echo 'here';exit;
		$steps = array ();
		$stepCodes = $this->_getStepCodes ();
		
		if ($this->isCustomerLoggedIn ()) {
			$stepCodes = array_diff ( $stepCodes, array (
					'login' 
			) );
		}
		
		foreach ( $stepCodes as $step ) {
			$steps [$step] = $this->getCheckout ()->getStepData ( $step );
		}
		
		return $steps;
	}
	
	/**
	 * Get active step
	 *
	 * @return string
	 */
	public function getActiveStep() {
		echo 'here';exit;
		return $this->isCustomerLoggedIn () ? 'billing' : 'login';
	}
}