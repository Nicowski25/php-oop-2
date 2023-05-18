<?php

require_once __DIR__ .'/computer.php';

class Desktop extends Computer
{
    public function __construct(public string $motherboard, public string $cpu, public string $gpu, public string $ram, public string $alimentation, public string $storage, public string $keyboard, public string $mouse, public string $monitor)
    {
        parent::__construct($motherboard, $cpu, $gpu, $ram, $alimentation, $storage);
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
        $this->monitor = $monitor;
    }

    public function getType()
    {
        return 'Desktop';
    }

}
