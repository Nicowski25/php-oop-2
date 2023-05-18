<?php

require_once __DIR__ .'/computer.php';

class Desktop extends Computer
{
    public function __construct(string $motherboard, string $cpu, string $gpu, string $ram, string $alimentation, string $storage, public string $keyboard, public string $mouse, public string $monitor)
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

    public function getKeyboard()
    {
        return $this->keyboard;
    }

    public function getMouse()
    {
        return $this->mouse;
    }

    public function getMonitor()
    {
        return $this->monitor;
    }

}
