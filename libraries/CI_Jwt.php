<?php
defined('BASEPATH') OR exit('No direct script access allowed');



require_once APPPATH . 'third_party/JWT.php';

class CI_Jwt{
  public $key='HUAHAHAHA';
  public $header = '{"alg":"HS256","typ":"JWT"}';

  function jwt_encode($data)
  {
      $payload=json_encode($data);
      $JWT = new JWT;
      return $JWT->encode($this->header, $payload, $this->key);
  }
  function jwt_decode($token)
  {
      $JWT = new JWT;
      return json_decode($JWT->decode($token, $this->key));
  }
}
