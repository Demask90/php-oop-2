<?php

    class Oven extends product {
                    
        public $temperature;

        function __construct($_prodtuctPrice, $_productor, $_productModel, $_productColor, $_energyRating, $_productConsumption, $_productDimension, $_productCapacity, $_temperature)
        {
            parent::__construct($_prodtuctPrice, $_productor, $_productModel, $_productColor, $_energyRating, $_productConsumption, $_productDimension, $_productCapacity);
            $this->temperature = $_temperature;
        }

        function getTemperature() {
            return $this->temperature;
        }
        function setTemperature($_temperature) {
            $this->temperature = $_temperature;
        }

    }
    $myOven = new Oven(299, 'Indesit', 'BKE 8546Y W IT N', 'inox', 'A+', 500, [55,40,58], 7, 250);
    var_dump($myOven);

