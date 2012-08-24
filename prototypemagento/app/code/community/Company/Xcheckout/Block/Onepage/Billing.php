<?php
require_once 'Mage/Checkout/Block/Onepage/Billing.php';
class Company_Xcheckout_Block_Onepage_Billing extends Mage_Checkout_Block_Onepage_Abstract
{
	protected function _construct()
	{
		$this->getCheckout()->setStepData('billing', array(
				'label'     => Mage::helper('checkout')->__('Billing Information3'),
				'is_show'   => $this->isShow()
		));
	
		if ($this->isCustomerLoggedIn()) {
			$this->getCheckout()->setStepData('billing', 'allow', true);
		}
		parent::_construct();
	}
}
