<?php
namespace App\Payment;

/**
 * User class
 * 
 * mocked, contain info about user and his payment history
 */
class User implements UserInterface
{
    /**
     * user id
     * 
     * @var int
     */
    private $userId;
    
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \App\Payment\UserInterface::canPay()
     */
    public function canPay(float $sum) : int
    {
        return rand(0, 1);
    }
}