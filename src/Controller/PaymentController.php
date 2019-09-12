<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Config\ResponseStatus;
use App\Utils\Response;
use App\Payment\DefaultPayment;
use App\Payment\Order;
use App\Payment\User;

class PaymentController extends AbstractController
{
    /**
     * Process order payment REST api
     * 
     * usage : /payment/order/{orderId}/
     * method : POST 
     * params : 
     *      token - user access token
     *      userId - user id
     *      
     * @Route("/payment/order/{orderId}/", name="orderpayment", methods={"POST"})
     */
    public function processPayment($orderId, Request $request, LoggerInterface $logger)
    {
        try {
            $output = ['status'=>ResponseStatus::STATUS_OK];
            
            $token = $request->get("token");
            $userId = $request->get("userId");
            //check that token belong to user with userId
            //btw we make auth on order service and payment service can be opened only it
            $payment = new DefaultPayment(new Order($orderId, $userId));
            $output['order']['status'] = $payment->billUser(new User($userId));
            
            return new Response($output);
        } catch (\Exception $e) {
            $output['status'] = ResponseStatus::STATUS_ERROR;
            $output['error'] = 'internal error';
            
            return new Response($output, 500);
        }
    }
}