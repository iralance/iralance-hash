<?php
namespace IralanceHash;

class Md5Hasher {
    /**
     * @param $value
     * @param string $salt
     * @return string
     */
    public function make($value, $salt = '') {
        return hash('md5', $value . $salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param string $salt
     * @return bool
     */
    public function check($value, $hashValue, $salt = '') {
        return hash('md5', $value . $salt) == $hashValue;
    }
}