<?php
namespace Ecomatic\Customervalidationoverride\Model;

class Quote extends \Magento\Quote\Model\Quote
{

    public function getCustomerIsGuest()
    {
        $customer = $this->getCustomer();
        if ($customer) {
            return is_null($customer->getId());
        }

        return $this->_getData(self::KEY_CUSTOMER_IS_GUEST);
    }

}
