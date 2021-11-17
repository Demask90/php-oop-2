<?php

require_once __DIR__ . '/../Users/UserDeliver.php';
require_once __DIR__ . '/../Users/UserPremium.php';

    class User{
        use UserDeliver;

        public $userName;
        public $userSurname;
        public $shippingAddress;
        public $billingAddress;
        public $userCity;
        public $userCountry;
        public $dateOfBirth;
        public $registrationDate;
        
        
        function __construct($_userName, $_userSurname, $_shippingAddress, $_billingAddress, $_userCity, $_userCountry, $_dateOfBirth)
        {
            $this->userName = $_userName;
            $this->userSurname = $_userSurname;
            $this->shippingAddress = $_shippingAddress;
            $this->billingAddress = $_billingAddress;
            $this->userCity = $_userCity;
            $this->userCountry = $_userCountry;
            $this->dateOfBirth = $_dateOfBirth;
            $this->registrationDate = date('d/m/Y');
        }

        function setUserName($_userName) {
            $this->userName = $_userName;
        }
        function getUsername(){
            return $this->userName;
        }
        
        function setSurname($_userSurname) {
            $this->userSurname = $_userSurname;
        }
        function getSurname() {
            return $this->userSurname;
        }

        function setUserCountry($_userCountry) {
            $this->userCountry = $_userCountry;
        }
        function getUserCountry() {
            return $this->userCountry;
        }

        function setUserCity($_userCity) {
            $this->userCity = $_userCity;
        }
        function getUserCity() {
            return $this->userCity;
        }

        function setShippingAddress($_shippingAddress) {
            $this->shippingAddress = $_shippingAddress;
        }
        function getShippingAddress() {
            return $this->shippingAddress;
        }

        function setBillingAddress($_billingAddress) {
            $this->billingAddress = $_billingAddress;
        }
        
        function getBillingAddress() {
            return $this->billingAddress;
        }

        function setRegistrationDate() {
            $this->registrationDate = date('d/m/Y');
        }
        function getRegistrationDate() {
            return $this->registrationDate;
        }

        function setDateBirth($_dateOfBirth) {
            $this->dateOfBirth = $_dateOfBirth;
        }
        function getDateBirth() {
            return $this->dateOfBirth;
        }

        

    }

