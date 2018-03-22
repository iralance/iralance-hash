<?php

    class IralanceHashTest extends \PHPUnit\Framework\TestCase {
        public $hash;

        public function setup(){
            $this->hash = new \IralanceHash\IralanceHash();
        }

        /** @test */
        public function checkMd5Make(){
            $password = md5('123456');
            $password1 = $this->hash->make('123456');
            $this->assertEquals($password,$password1);
        }

        public function testMd5Check(){
            $result = $this->hash->check('123456',$this->hash->make('123456'));
            $this->assertTrue($result);
        }
    }