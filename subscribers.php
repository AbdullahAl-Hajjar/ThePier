<?php
   class subscribers
   {
   
       private $name;
       private $phone;
       private $email;
       private $referral;



       function __construct($name, $phone, $email, $referral)
       {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->referral = $referral;
       }
       
       
       public function getName()
       {
        return $this->name;
       }
       
       public function setName($name)
       {
        $this->name = $name;
       }
    
       public function getPhone()
       {
        return $this->phone;
       }
       
       public function setPhone($phone)
       {
        $this->phone = $phone;
       }
     
       public function getEmail()
       {
        return $this->email;
       }
    
       public function  setEmail($email)
       {
        $this->email = $email;
       }
       
       public function getreferral()
       {
        return $this->referral;
       }
    
       public function setreferral($referral)
       {
        $this->referral = $referral;
       }
    }


?>
    
    
    