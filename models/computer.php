<?php
class Computer
{

    protected $motherboard;
    protected $cpu;
    protected $gpu;
    protected $ram;
    protected $alimentation;
    protected $storage;

    public function __construct(string $motherboard, string $cpu, string $gpu, string $ram, string $alimentation, string $storage)
    {
        $this->motherboard = $motherboard;
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->ram = $ram;
        $this->alimentation = $alimentation;
        $this->storage = $storage;
    }
}