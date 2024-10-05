<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportLog extends Model
{
    protected $fillable = [
        'admin_id', 'file_name', 'total_records', 'success_count', 'failure_count',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
