<?php

    class washingMachines extends product {
        
        public $rpm;
        public $loadType;

        function __construct($_prodtuctPrice, $_productor, $_productModel, $_productColor, $_energyRating, $_productConsumption, $_productDimension, $_productCapacity, $_rpm, $_loadType)
        {
                parent::__construct($_prodtuctPrice, $_productor, $_productModel, $_productColor, $_energyRating, $_productConsumption, $_productDimension, $_productCapacity);
                $this->rpm = $_rpm;
                $this->loadType = $_loadType;
        }

        function getRpm() {
                return $this->rpm;
        }
        function setRpm($_rpm) {
                $this->rpm = $_rpm;
        }

        function getLoadType() {
                return $this->loadType;
        }
        function setLoadType($_loadType) {
                $this->loadType = $_loadType;
        }

    }
        
        $myWashingMachine = new washingMachines(399, 'Indesit', 'BWE 71283X W IT N', 'white', 'D', 500, [85,60,58], 7, 1200, 'front-load');
        var_dump($myWashingMachine);
