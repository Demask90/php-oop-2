  <?php

    require_once __DIR__ . '/UserPremium.php';

    trait UserDeliver
    {
        public $shippingCost;
        public $cc_circuit;
        public $cc_number;
        public $cc_expiration;
        public $cc_cvc;

        function setCreditCard($_cc_circuit, $_cc_number, $_cc_cvc, $_cc_expiration){
            $_cc_circuit = strtolower($_cc_circuit);
            if((($_cc_circuit == 'visa' || $_cc_circuit == 'mastercard' ) && strlen((string)$_cc_number) == 16 && strlen((string)$_cc_cvc) == 3 && $_cc_expiration > date('d/m/Y'))){
                $this->cc_circuit = $_cc_circuit;
                $this->cc_number = $_cc_number;
                $this->cc_cvc = $_cc_cvc;
                $this->cc_expiration = $_cc_expiration;
            }else{
                throw new Exception("Errore nell'inserimento della carta di credito. Assicurarsi che sia Visa o Mastercard, che abbia 16 cifre, il CVC deve avere 3 cifre, non deve essere scaduta");
            }
        }

        function getCreditCard(){
            return $this->cc_brand;
            return $this->cc_number;
            return $this->cc_cvc;
            return $this->cc_expiration;
        }
        

        function setShippingCosts($_shippingCost){
            $this->shippingAddress = $_shippingCost;
        }
        function getShippingCost(){
            return $this->shippingCost;
        }

    }
    


?>