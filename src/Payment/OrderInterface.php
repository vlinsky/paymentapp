<?php
namespace App\Payment;

/**
 * OrderInterface
 *
 */
interface OrderInterface
{
    /**
     * Set order status
     * 
     * @return float
     */
    public function setStatus() : void;
}