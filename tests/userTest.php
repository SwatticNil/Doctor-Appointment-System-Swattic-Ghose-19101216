<?php

class userTest extends \PHPUnit\Framework\TestCase{
    protected $user;
    public function testSignUpandLogin(){
        $this->user = new \App\user;

        $this->user->signUp(147,147,"Lucifer","Barny","widowed","1999-05-12","male","Wall Street",796544123,"luciferbarny@gmail.com");

        $this->assertEquals($this->user->login(147,147),True);
}
}
?>