<?php
require 'oopBasics1y2.php';

class DeviceManager {

    public function getDeviceSerialNumber(Device $device) {
        return $device->getSerialNumber();
    }
}

$iphone = new Mobile(12451, "64GB", true);
$ipad = new Tablet(1234, "128GB", true);
$deviceManager = new DeviceManager;

echo $deviceManager->getDeviceSerialNumber($iphone);

