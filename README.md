# paymentapp
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fvlinsky%2Fpaymentapp.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Fvlinsky%2Fpaymentapp?ref=badge_shield)

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

## License
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fvlinsky%2Fpaymentapp.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2Fvlinsky%2Fpaymentapp?ref=badge_large)