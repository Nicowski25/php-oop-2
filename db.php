<?php

require_once __DIR__ . '/models/computer.php';
require_once __DIR__ . '/models/desktop.php';
require_once __DIR__ . '/models/laptop.php';

$computers = [
    new Desktop('MSI MPG B550', 'AMD Ryzen 5 5500', 'GeForce Gigabyte RTX 3060 ', '16GB', 'ASUS ROG Strix 5000W', 'SSD 1TB', 'Razer BlackWidow V3', 'Razer DeathAdder V2', 'Samsung Ls24C312'),
    new Laptop('ASUS ROG STRIX B450-F', 'AMD Ryzen 7 5700', 'ASUS ROG -STRIX-RTX4090', '8GB', 'ASUS ROG Strix 650W', 'SSD 1TB', '6', '2000'),
    new Desktop('Gigabyte B760', 'Intel Core i9-10980XE', 'GEFORCE RTX 3060 12 GB', '64GB', 'ASUS ROG Strix 750W', 'SEAGATE BARRACUDA HDD 1 TB',  'Razer BlackWidow V3', 'Razer DeathAdder V2', 'Samsung Ls24C312'),
];
