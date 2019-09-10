<?php
namespace App\Payment;

/**
 * Default payment class
 * 
 * mocked, called when no other payment method specified
 */
class DefaultPayment implements BillingInterface
{   
    /**
     * Order object
     * @var Order
     */
    private $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \App\Payment\BillingInterface::billUser()
     */
    public function billUser(UserInterface  $user) : string
    {
        if ($user->canPay($this->order->getPrice())) {
            return PaymentStatus::STATUS_CONFIRMED;
        } else {
            return PaymentStatus::STATUS_DECLINED;
        }
    }
}