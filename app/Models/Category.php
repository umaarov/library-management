<?php
/**
 * Created by PhpStorm.
 * User: hsuma
 * Date: 10/5/2024
 * Time: 12:30 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
