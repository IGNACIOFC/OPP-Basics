<?php
class Device{
    public $serialNumber;

}

class Mobile extends Device {
    public $signal = true;
}

class Tablet extends Device {
    public $bigScreen = true;
}

