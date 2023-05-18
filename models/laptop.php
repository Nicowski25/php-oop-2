<?php

require_once __DIR__ .'/computer.php';
class Laptop extends Computer
{
    public function __construct(public string $motherboard, public string $cpu, public string $gpu, public string $ram, public string $alimentation, public string $storage, public string $ports, public string $batterymAh)
    {
        parent::__construct($motherboard, $cpu, $gpu, $ram, $alimentation, $storage);
        $this->ports = $ports;
        $this->batterymAh = $batterymAh;
    }

    public function getType()
    {
        return 'Laptop';
    }
}
