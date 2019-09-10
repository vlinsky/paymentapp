<?php
namespace App\Payment;

/**
 * PaymetnStatus
 * 
 * static class, describe payment available statuses
 */
class PaymentStatus
{
   public const STATUS_CONFIRMED = 'confirmed';
   public const STATUS_DECLINED = 'declined';
}