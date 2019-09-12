# paymentapp
paymentapp microservice

##installation  

git clone https://github.com/vlinsky/paymentapp.git  
cd paymentapp  
composer install  
docker-compose up  

##REST API

Process order payment /payment/order/{orderId}/  
     method : POST  
     params :  
     	token - user access token  
     	userId - user id  
    	 return : json with payment staus  