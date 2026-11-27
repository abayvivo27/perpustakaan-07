<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Anggota;
use App\Models\Buku;
use App\Traits\Timestampable;

class Peminjaman
{
    use Timestampable;

    public function __construct(
        public Anggota $anggota,
        public Buku $buku,
    ) {
        $this->touch();
    }

    public function prosesPinjam(): string
    {
        if (!$this->buku->tersedia) {
            return "Gagal: Buku \"{$this->buku->judul}\" sedang dipinjam.";
        }

        $this->buku->tersedia = false;

        return "Berhasil: {$this->anggota->nama} meminjam \"{$this->buku->judul}\" pada {$this->getCreatedAt()}.";
    }
}
