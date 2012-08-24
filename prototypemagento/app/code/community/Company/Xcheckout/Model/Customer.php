<?php
class Company_Xcheckout_Model_Customer extends Mage_Customer_Model_Customer 
{
	
	public function getName()
	{
		return parent::getName()."aa";
	}
	
	// override existing method
	public function validate(){
		
		// Define new validate rules. From now magento call this validate method
		// instead of existing method
		
		// return $errors;
		return true;
	}
	
	// You can create new method as you needed.
	public function newMethod() {
		
		// function logic
	}
}