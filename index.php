<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Anggota;
use App\Models\Buku;
use App\Services\Peminjaman;

$buku = new Buku('Clean Code & OOP PHP');
$anggota = new Anggota('M. Fitriannur Akbar');
$peminjaman = new Peminjaman($anggota, $buku);

echo $peminjaman->prosesPinjam() . "\n";
echo "Timestamp Buku: {$buku->getCreatedAt()}\n";
echo "Timestamp Anggota: {$anggota->getCreatedAt()}\n";
