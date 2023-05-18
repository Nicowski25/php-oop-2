<?php
class Computer
{

    public $motherboard;
    public $cpu;
    public $gpu;
    public $ram;
    public $alimentation;
    public $storage;

    public function __construct(string $motherboard, string $cpu, string $gpu, string $ram, string $alimentation, string $storage)
    {
        $this->motherboard = $motherboard;
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->ram = $ram;
        $this->alimentation = $alimentation;
        $this->storage = $storage;
    }

    public function getType()
    {
        return 'Computer';
    }

    public function getMotherboard()
    {
        return $this->motherboard;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getGpu()
    {
        return $this->gpu;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function getAlimentation()
    {
        return $this->alimentation;
    }

    public function getStorage()
    {
        return $this->storage;
    }
}
