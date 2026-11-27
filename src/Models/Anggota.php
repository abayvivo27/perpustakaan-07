<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\Timestampable;

class Anggota
{
    use Timestampable;

    public function __construct(
        public string $nama,
    ) {
        $this->touch();
    }
}
