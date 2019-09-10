<?php
namespace App\Payment;

use App\Payment\OrderInterface;

/**
 * Order class
 * 
 * mocked, describe billing order object
 */
class Order implements OrderInterface
{
    private $orderId;
    private $userId;
    
    public function __construct(int $orderId, int $userId)
    {
        $this->orderId = $orderId;
        $this->userId = $userId;
    }
    
    /**
     * Get order price
     * 
     * @return number
     */
    public function getPrice()
    {
        return rand(0, 28)/10;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \App\Orders\OrderInterface::setStatus()
     */
    public function setStatus(): void
    {
        
    }
}