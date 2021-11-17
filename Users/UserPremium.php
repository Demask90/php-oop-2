<?php

    require_once __DIR__ . '/UserDeliver.php';

    class UserPremium extends User{

        public $levUser;
        public $discount = 1;

        function __construct($_levUser, $_discount)
        {   
            $this->levUser = $_levUser;
            $this->discount = $_discount;
            if($_levUser = 1){
                $this->discount = 5;
            }elseif($_levUser = 2 ){
                $this->discount = 8;
            }elseif($_levUser = 3){
                $this->discount = 10;
            }else {
                $this->discount = 0;
            }
        }

    function getLevUser() {
        return $this->levUser;
    }
    function setLevUser($_levUser) {
            $this->levUser = $_levUser;
    }
    
    function getDiscount() {
            return $this->discount;
    }
    function setDiscount($_discount) {
            $this->discount = $_discount;
    }
    }
