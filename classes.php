<?php
    include "credentials/credentials.php";
    
    class Bank {
        public $naam;
        public $rekening;
        public $totaalBedrag;
        
        function __construct($naam, $rekening, $totaalBedrag) {
            $this->naam = $naam;
            $this->totaalBedrag = $totaalBedrag;
            $this->rekening = $rekening;
        }
        
        function saldoBijhouden(){
            
        }
        function geldBijmaken(){
            
        }   
    }
    
    class Gebruiker {
        public $naam;
        public $email;
        public $wachtwoord;
        public $rechten;
        
        function __construct($naam, $email, $wachtwoord, $rechten) {
            $this->naam=$naam;
            $this->email=$email;
            $this->wachtwoord=$wachtwoord;
            $this->rechten=$rechten;
        }
        function accountMaken(){
            
        }
        function inloggen(){
            
        }
        function rekeningOpenen(){
            
        }
        function rekeningSluiten(){
            
        }
        function geldStorten(){
            
        }
    }
    
    class Rekening {
        public $saldo;
        public $rekeningNummer;
        public $pincode;
        public $user_id;
        
        function __construct($rekeningNummer, $pincode, $saldo, $user_id) {
            $this->rekeningNummer = $rekeningNummer;
            $this->pincode = $pincode;   
            $this->saldo = $saldo;
            $this->user_id= $user_id;
        }
    }
    
    class Transactie {
        public $bedrag;
        public $rekeningOntvanger;
        public $rekeningVerzender;
        public $opmerking;
        public $pincode;
        
        function __construct($bedrag, $rekeningOntvanger, $rekeningVerzender, $opmerking) {
            $this->bedrag = $bedrag;
            $this->rekeningOntvanger = $rekeningOntvanger;
            $this->rekeningVerzender = $rekeningVerzender;
            $this->opmerking = $opmerking;
            $this->pincode = $pincode;
        }
        
        function overSchrijven(){
            
        }
    }