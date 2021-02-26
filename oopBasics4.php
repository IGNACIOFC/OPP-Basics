<?php



class Device {
    public $memory;
    public $screenSize;

    function __construct($memory, $screenSize)
    {
        $this->memory = $memory;
        $this->screenSize = $screenSize;
    }
}

interface DeviceRepository {
    function create(Device $device);
    function findById($deviceId);
}

class MemoryRepository implements DeviceRepository
{
    
}