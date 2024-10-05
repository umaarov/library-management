<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone',
    ];

    protected $hidden = [
        'password',
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function importLogs()
    {
        return $this->hasMany(ImportLog::class);
    }
}
