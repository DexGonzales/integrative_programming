<?php

class Acct
{
    public $name;
    public $username;
    public $email;

    function __construct($name,$username, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;

    }
}

class User extends Acct
{
    function addFriend()
    {
        echo "{$this->name}. Added a friend <br>";
    }
    function postStatus()
    {
        echo "{$this->name}. Posted a status";
    }
}

$ass=new User('Don Dexter', 'dx11g', 'gonzalesdy12@yahoo.com');
$ass->addFriend();
$ass->postStatus();

?>