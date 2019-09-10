<?php
namespace App\Payment;

/**
 * UserInterface
 * 
 * each class descrided billing user should implement this interface
 */
interface UserInterface
{
    /**
     * Check if user can pay or not
     * 
     * @param float $sum
     * @return int
     */
    public function canPay(float $sum) : int;
}