<?php

// kategorie
$categories = [
    'computers' => [
        'title' => 'Počítače',
        'categories' => [           // druha uroven kategorii
            'desktops' => [
                'title' => 'Stolní PC'
            ],
            'laptops' => [
                'title' => 'Notebooky'
            ],
            'multimedia' => [
                'title' => 'Multimediální centra'
            ],
        ]
    ],
    'phones' => [
        'title' => 'Mobilní telefony',
        'categories' => [           // druha uroven kategorii
            'ios' => [
                'title' => 'iOs'
            ],
            'android' => [
                'title' => 'Android'
            ],
        ]
    ],
    'hardware' => [
        'title' => 'Komponenty'
    ],
];

// vyrobci/znacky
$manufacturers = [
    'apple' => 'Apple',
    'dell' => 'Dell',
    'asus' => 'Asus',
    'wd' => 'Western digital',
    'google' => 'Google',
];

// nejprodavanejsi
$topSellers = [11, 12, 2, 4, 5];

// sleva
$sales = [0, 9, 10, 15, 1, 5];

// produkty
$products = [
    0 => [
        'title' => 'WD Red 4TB',
        'categories' => ['hardware'],
        'description' => 'Pevný disk 3.5", SATA III, maximální rychlost přenosu 180 MB/s, cache 256 MB, 5400 ot/min',
        'manufacturer' => 'wd',
        'price' => 2280,
        'price_vat' => 2759,
        'images' => [
            '1.jpg',
        ],
        'parameters' => [
            'Typ úložiště' => 'HDD',
            'Kapacita úložiště' => '4 000 GB (4 TB)',
            'Použití' => 'Do počítače, Datová uložiště, Interní',
        ],
        'related' => [
        ],
    ],
    1 => [
        'title' => 'Google Chromecast Google TV',
        'categories' => ['computers', 'multimedia'],
        'description' => 'Multimediální centrum - s podporou 4K Ultra HD, operační systém Android OS, Bluetooth a Wi-Fi, HDMI 2.0, v balení dálkový ovladač',
        'manufacturer' => 'google',
        'price' => 1817,
        'price_vat' => 2199,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
        ],
        'parameters' => [
            'Podporované rozlišení' => '4K Ultra HD',
            'Operační systém' => 'Android OS',
            'Rozhraní' => 'HDMI 2.0',
            'Konektivita' => 'Bluetooth, Wi-Fi',
        ],
        'related' => [
            0,
        ],
    ],
    2 => [
        'title' => 'Mac mini M1 2020',
        'categories' => ['computers', 'desktops'],
        'description' => 'Mini počítač Apple M1, Apple M1 8jádrová GPU, RAM 16GB, SSD 512 GB, Bez mechaniky, HDMI, 2× USB 3.2, MAC OS',
        'manufacturer' => 'apple',
        'price' => 28091,
        'price_vat' => 33990,
        'images' => [
            '1.jpg',
        ],
        'parameters' => [
            'Řada procesoru' => 'Apple Silicon',
            'Typ sestavy' => 'Mini PC',
            'Model procesoru' => 'Apple M1',
            'Počet jader procesoru' => '8x',
        ],
        'related' => [
            0,
            9,
        ],
    ],
    3 => [
        'title' => 'Dell OptiPlex 3080 Micro MFF',
        'categories' => ['computers', 'desktops'],
        'description' => 'Mini počítač Intel Core i5 10500T Comet Lake 3.8 GHz, Intel HD Graphics 630, RAM 8GB DDR4, SSD 256 GB, Bez mechaniky, Wi-Fi, HDMI a DisplayPort, 4× USB 3.2, 2× USB 2.0, typ skříně: Micro Tower, myš a klávesnice, Windows 10 Pro, (NBD)',
        'manufacturer' => 'dell',
        'price' => 13215,
        'price_vat' => 15990,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
        ],
        'parameters' => [
            'Řada procesoru' => 'Intel Core i5',
            'Operační systém' => 'Windows 10 Pro',
            'Typ sestavy' => 'Mini PC',
        ],
        'related' => [
            9,
            0,
        ],
    ],
    4 => [
        'title' => 'ASUS ROG Strix G35CZ-CZ013T Star Black',
        'categories' => ['computers', 'desktops'],
        'description' => 'Herní PC Intel Core i7 10700KF Comet Lake 5.1 GHz, NVIDIA GeForce RTX 2060 SUPER 8GB, RAM 16GB DDR4, SSD 1000 GB, Bez mechaniky, Wi-Fi, HDMI a DisplayPort, 4× USB 3.2, 2× USB 2.0, typ skříně: Big Tower, Windows 10 Home',
        'manufacturer' => 'asus',
        'price' => 41314,
        'price_vat' => 49990,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
            '8.jpg',
            '9.jpg',
            '10.jpg',
        ],
        'parameters' => [
            'Řada procesoru' => 'Intel Core i7',
            'Operační systém' => 'Windows 10 Home',
            'Typ sestavy' => 'Herní',
            'Paměť grafické karty' => '8 GB',
            'Model grafické karty' => 'NVIDIA GeForce RTX 2060 SUPER',
            'Typ úložiště' => 'SSD',
            'Velikost operační paměti RAM' => '16 GB',
        ],
        'related' => [
            10,
            0,
            13,
        ],
    ],
    5 => [
        'title' => 'Macbook Air 13" M1 CZ Vesmírně šedý 2020',
        'categories' => ['computers', 'laptops'],
        'description' => 'MacBook - Apple M1, 13.3" IPS lesklý 2560 × 1600 , RAM 16GB, Apple M1 7jádrová GPU, SSD 256GB, podsvícená klávesnice, webkamera, USB-C, čtečka otisků prstů, WiFi 6, 49,9 Wh baterie, Hmotnost 1,25 kg, MAC OS',
        'manufacturer' => 'apple',
        'price' => 29744,
        'price_vat' => 35990,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
        ],
        'parameters' => [
            'SSD Kapacita' => '256 GB (0,26 TB)',
            'Velikost operační paměti RAM' => '16 GB',
            'Čip grafické karty' => 'Apple M1 7jádrová GPU',
            'Intel Optane' => 'Ne',
        ],
        'related' => [
            11,
            12,
        ],
    ],
    6 => [
        'title' => 'Dell Vostro 3500',
        'categories' => ['computers', 'laptops'],
        'description' => 'Notebook - Intel Core i7 1165G7 Tiger Lake, 15.6" IPS matný 1920 × 1080, RAM 8GB DDR4, NVIDIA GeForce MX330 2GB, SSD 512GB, numerická klávesnice, webkamera, USB 3.2 Gen 1, USB-C, WiFi 5, 42 Wh baterie, Hmotnost 1,78 kg, Windows 10 Pro (NBD)',
        'manufacturer' => 'dell',
        'price' => 20488,
        'price_vat' => 24790,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
        ],
        'parameters' => [
        ],
        'related' => [
            9,
            13,
            15,
        ],
    ],
    7 => [
        'title' => 'Dell XPS 13 (9310) Silver',
        'categories' => ['computers', 'laptops'],
        'description' => 'Notebook - Intel Core i7 1165G7 Tiger Lake, 13.4" IPS antireflexní 1920 × 1200, RAM 16GB LPDDR4, Intel Iris Xe Graphics, SSD 1000GB, podsvícená klávesnice, webkamera, čtečka otisků prstů, WiFi 6, 52 Wh baterie, Hmotnost 1,2 kg, Intel EVO, Windows 10 Pro (NBD)',
        'manufacturer' => 'dell',
        'price' => 44950,
        'price_vat' => 54390,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
        ],
        'parameters' => [
            'SSD Kapacita' => '1 000 GB (1 TB)',
            'Velikost operační paměti RAM' => '16 GB',
            'Čip grafické karty' => 'Intel Iris Xe Graphics',
            'Frekvence procesoru' => '2,8 GHz (2 800 MHz)',
        ],
        'related' => [
            9,
            15,
        ],
    ],
    8 => [
        'title' => 'Asus Vivobook 15 M570DD-DM001T Black ',
        'categories' => ['computers', 'laptops'],
        'description' => 'Notebook - AMD Ryzen 5 3500U, 15.6" IPS antireflexní 1920 × 1080, RAM 8GB DDR4, NVIDIA GeForce GTX 1050 2GB, SSD 512GB, numerická klávesnice, podsvícená klávesnice, webkamera, USB 3.2 Gen 1, USB-C, WiFi 5, 48 Wh baterie, Hmotnost 1,96 kg, Windows 10 Home',
        'manufacturer' => 'asus',
        'price' => 14868,
        'price_vat' => 17990,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
        ],
        'parameters' => [
            'SSD Kapacita' => '512 GB (0,51 TB)',
            'Velikost operační paměti RAM' => '8 GB',
            'Čip grafické karty' => 'NVIDIA GeForce GTX 1050',
        ],
        'related' => [
            9,
        ],
    ],
    9 => [
        'title' => 'DELL externí DVD-RW',
        'categories' => ['hardware'],
        'description' => 'Externí vypalovačka DVD-RW, formát DVD a CD',
        'manufacturer' => 'dell',
        'price' => 1239,
        'price_vat' => 1499,
        'images' => [
            '1.jpg',
            '2.jpg',
        ],
        'parameters' => [
            'Typ mechaniky' => 'DVD-RW',
            'Rychlost čtení CD' => '24',
            'Rychlost čtení DVD' => '8',
        ],
        'related' => [
        ],
    ],
    10 => [
        'title' => 'ASUS PCE-N15',
        'categories' => ['hardware'],
        'description' => 'WiFi síťová karta 802.11n až 300Mbps, PCIe x1',
        'manufacturer' => 'asus',
        'price' => 549,
        'price_vat' => 549,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
        ],
        'parameters' => [
            'WiFi' => '802.11n, 802.11g, 802.11b',
        ],
        'related' => [
        ],
    ],
    11 => [
        'title' => 'iPhone SE 64GB černá 2020',
        'categories' => ['phones', 'ios'],
        'description' => 'Mobilní telefon - 4,7" IPS 1334 × 750, procesor Apple A13 Bionic 6jádrový, RAM 3 GB, interní paměť 64 GB, zadní fotoaparát 12 Mpx (f/1,8), přední fotoaparát 7 Mpx, optická stabilizace, GPS, Glonass, NFC, LTE, Lightning port, čtečka otisků, voděodolný dle IP67, single SIM + eSIM, neblokovaný, rychlé nabíjení 18W, bezdrátové nabíjení, iOS 13',
        'manufacturer' => 'apple',
        'price' => 10736,
        'price_vat' => 12990,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
        ],
        'parameters' => [
            'Úhlopříčka displeje' => '4,7"',
            'Rozlišení displeje' => '1334 × 750',
            'Operační systém' => 'iOS',
        ],
        'related' => [
            12,
            13,
        ],
    ],
    12 => [
        'title' => 'iPhone 12 Pro 128GB tichomořsky modrá',
        'categories' => ['phones', 'ios'],
        'description' => 'Mobilní telefon - 6,1" OLED 2532 × 1170, procesor Apple A14 Bionic 6jádrový, interní paměť 128 GB, zadní fotoaparát s optickým zoomem 12 Mpx (f/1,6) + 12 Mpx (f/2) + 12 Mpx (f/2,4), přední fotoaparát 12 Mpx, optická stabilizace, GPS, Glonass, NFC, LTE, 5G, UWB, Lightning port, voděodolný dle IP68, single SIM + eSIM, neblokovaný, rychlé nabíjení 20W, bezdrátové nabíjení 15W, baterie 2815 mAh, iOS 14',
        'manufacturer' => 'apple',
        'price' => 24785,
        'price_vat' => 29990,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
        ],
        'parameters' => [
            'Úhlopříčka displeje' => '6,1"',
            'Rozlišení displeje' => '2532 × 1170',
            'Operační systém' => 'iOS',
            'Konfigurace karet' => 'Single SIM + eSIM',
        ],
        'related' => [
            11,
        ],
    ],
    13 => [
        'title' => 'Asus ROG Phone 5 12GB/256GB černá',
        'categories' => ['phones', 'android'],
        'description' => 'Mobilní telefon - 6,78" AMOLED 2448 × 1080, 144Hz, procesor Qualcomm Snapdragon 888 8jádrový, RAM 12 GB, interní paměť 256 GB, zadní fotoaparát 64 Mpx (f/1,8) + 13 Mpx (f/2,4) + 5 Mpx (f/2), přední fotoaparát 24 Mpx, elektronická stabilizace, GPS, Glonass, NFC, LTE, 5G, Jack (3,5mm) a USB-C, čtečka otisků v displeji, dual SIM, neblokovaný, rychlé nabíjení 65W, baterie 6000 mAh, Android 11',
        'manufacturer' => 'asus',
        'price' => 19826,
        'price_vat' => 23990,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
            '8.jpg',
            '9.jpg',
            '10.jpg',
        ],
        'parameters' => [
            'Úhlopříčka displeje' => '6,78"',
            'Rozlišení displeje' => '2448 × 1080',
            'Operační systém' => 'Android',
            'Konfigurace karet' => 'Dual SIM',
        ],
        'related' => [
            11,
            12,
        ],
    ],
    14 => [
        'title' => 'Google Pixel 4a černá',
        'categories' => ['phones', 'android'],
        'description' => 'Mobilní telefon 5,8" OLED 2340 × 1080, procesor Qualcomm Snapdragon 730 8jádrový, RAM 6 GB, interní paměť 128 GB, zadní fotoaparát 12 Mpx (f/1,7), přední fotoaparát 8 Mpx, optická a elektronická stabilizace, GPS, Glonass, NFC, LTE, Jack (3,5mm) a USB-C, čtečka otisků, single SIM, rychlé nabíjení 18W, baterie 3140 mAh, Android 10, UK distribuce',
        'manufacturer' => 'google',
        'price' => 9496,
        'price_vat' => 11490,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
            '8.jpg',
            '9.jpg',
            '10.jpg',
        ],
        'parameters' => [
            'Úhlopříčka displeje' => '6,78"',
            'Rozlišení displeje' => '2448 × 1080',
            'Operační systém' => 'Android',
            'Konfigurace karet' => 'Dual SIM',
        ],
        'related' => [
            15,
        ],
    ],
    15 => [
        'title' => 'Google Pixel 4 64GB bílá',
        'categories' => ['phones', 'android'],
        'description' => 'Mobilní telefon - 5,7" P-OLED 2280 × 1080, procesor Qualcomm Snapdragon 855 8jádrový, RAM 6 GB, interní paměť 64 GB, zadní fotoaparát s optickým zoomem 12,2 Mpx (f/1,7) + 16 Mpx (f/2,4), přední fotoaparát 8 Mpx, optická stabilizace, GPS, Glonass, NFC, LTE, USB-C, voděodolný dle IP68, single SIM + eSIM, rychlé nabíjení 18W, bezdrátové nabíjení, baterie 2800 mAh, Android 10',
        'manufacturer' => 'google',
        'price' => 12140,
        'price_vat' => 14689,
        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
        ],
        'parameters' => [
            'Úhlopříčka displeje' => '5,7"',
            'Rozlišení displeje' => '2280 × 1080',
            'Operační systém' => 'Android',
            'Operační paměť' => '6 GB',
        ],
        'related' => [
            14,
            13,
        ],
    ],
];