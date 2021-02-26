<?php
class Device{
    public $serialNumber;
    public $memory;

    function __construct($serialNumber, $memory) {
        $this->serialNumber = $serialNumber;
        $this->memory = $memory;
    }

    public function getSerialNumber() {
       return $this->serialNumber;
    }
    public function setSerialNumber($serialNumber){
        return $this->serialNumber = $serialNumber;
    }

    public function getMemory() {
        return $this->memory;
    }
    public function setMemory($memory) {
        return $this->memory = $memory;
    }
}

class Mobile extends Device {
    public $signal = true;

    function __construct($serialNumber, $memory, $signal) {
        parent::__construct($serialNumber, $memory);
        $this->signal = $signal;  
    }

    function getSignal(){
        return $this->signal;
    }
    function setSignal($signal) {
        $this->signal = $signal;
    }
}

class Tablet extends Device {
    public $bigScreen = true;

    function __construct($serialNumber, $memory, $bigScreen) {
        parent::__construct($serialNumber, $memory);
        $this->bigScreen = $bigScreen;
    }

    public function getBigScreen() {
        return $this->bigScreen;
    }

    public function setBigScreen($bigScreen) {
        return $this->bigScreen = $bigScreen;
    }
}

