<?php
Class User{
    private $email;
    private $password;
    public function __construct($email, $password)
    {
      $this->email = $email;
      $this->password = $password;
    }
    public function setEmail($email)
    {
      $this->email-$email;
    }
    public function setPassword($password)
    {
      $this->password= $password;
    }
    public function getEmail()
    {
      return $this->email;
    }
    public function getPassword()
    {
      return $this->password;
    }
}

$user1 = new user('Maingocanh@gmail.com','12345678' );
$user2 = new user('Hoanganh@gmail.com','12345679' );
$user3 = new user('Nguyenha@gmail.com','12345677' );

$user_arr = array($user1, $user2, $user3);

?>