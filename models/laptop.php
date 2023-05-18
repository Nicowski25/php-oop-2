<?php

require_once __DIR__ .'/computer.php';
class Laptop extends Computer
{
    public function __construct(string $motherboard, string $cpu, string $gpu, string $ram, string $alimentation, string $storage, public string $ports, public string $batterymAh)
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
