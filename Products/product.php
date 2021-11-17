<?php
        class product {
                public $prodtuctPrice;
                public $productor;
                public $productModel;
                public $productColor;
                public $energyRating;
                public $productConsumption;
                public $productDimension;
                public $productCapacity;

                function __construct($_prodtuctPrice, $_productor, $_productModel, $_productColor, $_energyRating, $_productConsumption, $_productDimension, $_productCapacity) {
                        $this->prodtuctPrice = $_prodtuctPrice;
                        $this->productor = $_productor;
                        $this->productModel = $_productModel;
                        $this->productColor = $_productColor;
                        $this->energyRating = $_energyRating;
                        $this->productConsumption = $_productConsumption;
                        $this->productDimension = $_productDimension;
                        $this->productCapacity = $_productCapacity;
                }

                function getprodtuctPrice() {
                        return $this->prodtuctPrice;
                }

                function setprodtuctPrice($_prodtuctPrice) {
                        $this->prodtuctPrice = $_prodtuctPrice;
                }
                
                function getProductor() {
                        return $this->productor;
                }
                function setProductor($_productor) {
                        $this->productor = $_productor;
                }

                function getproductModel() {
                        return $this->productModel;
                }
                function setproductModel($_productModel) {
                        $this->productModel = $_productModel;
                }

                function getproductColor() {
                        return $this->productColor;
                }
                function setproductColor($_productColor) {
                        $this->productColor = $_productColor;
                }

                function getEnergyRating() {
                        return $this->energyRating;
                }
                function setEnergyRating($_energyRating) {
                        $this->energyRating = $_energyRating;
                }

                function getproductConsumption() {
                        return $this->productConsumption;
                }
                function setproductConsumption($_productConsumption) {
                        $this->productConsumption = $_productConsumption;
                }

                function getproductDimension(){
                        return $this->productDimension;
                }
                function setproductDimension($_productDimension) {
                        $this->productDimension = $_productDimension;
                }

                function getproductCapacity(){
                        return $this->productCapacity;
                }
                function setproductCapacity($_productCapacity) {
                        $this->productCapacity = $_productCapacity;
                }
                
        }

