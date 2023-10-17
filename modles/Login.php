<?php

class Login
{
    public $id;
    public $username;
    public $password;
    public $email;
    public $address;
    public $tel;
    public $role;

    public function __construct($id, $username, $password,  $email, $address, $tel, $role)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->address = $address;
        $this->tel = $tel;
        $this->role = $role;
    }
}
class Role
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}
