<?php

  class SecureData {
    private $string; 
    function __construct($string){
      $this->string = $string; 
    }
    public function encrypt($status){
      $encrypt_method = "AES-256-CBC";
      $secret_key = 'Loona';
      $secret_iv = 'BlockBerryCreative';
      $key = hash('sha256', $secret_key);
      $iv = substr(hash('sha256',$secret_iv),0,16); 

      if($status){
        $output = openssl_encrypt($this->string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($this->string);
        return urlencode($output);
      }else{
        $output = openssl_decrypt($this->string, $encrypt_method, $key, 0, $iv);
        $output = base64_decode($this->string);
        return urldecode($output);
      }
    }
  }

?>