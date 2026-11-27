<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\Timestampable;

class Buku
{
    use Timestampable;

    public function __construct(
        public string $judul,
        public bool $tersedia = true,
    ) {
        $this->touch();
    }
}
