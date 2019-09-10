<?php
namespace App\Payment;

/**
 * BillingInterface
 */
interface  BillingInterface
{
    /**
     * Bill user
     * 
     * @param UserInterface $user
     * @return bool
     */
    public function billUser(UserInterface $user) : string;
}