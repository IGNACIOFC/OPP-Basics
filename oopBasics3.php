<?php

abstract class Device {
    public $id;
    public $serialNo;

    function __construct($id, $serialNo)
    {
        $this->id = $id;
        $this->serialNo = $serialNo; 
    }
    abstract function getDetail($deviceId);

    public function getId() {
        return $this->id;
    }

    public function getSerialNo() {
        return $this->serialNumber;
    }
}

class Mobile extends Device {

    function __construct($id, $serialNo)
    {
        parent::__construct($id, $serialNo);   
    }

    public function getDetail($deviceId)
    {
        $this->id = $deviceId;

        return "the model is ".$this->id;
    }
}

$iphone = new Mobile("Iphone X", 1234435);

echo $iphone->getDetail("Iphone 11");