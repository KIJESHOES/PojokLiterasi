<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;
use Illuminate\Contracts\Support\Htmlable;

class Login extends BaseLogin
{
    // Di beberapa versi parent: public function getHeading(): string|Htmlable
    // Kita samakan visibility & return type agar kompatibel di semua versi.
    public function getHeading(): string|Htmlable
    {
        return ''; // kosongkan heading biar tulisan "Laravel" hilang
    }
}