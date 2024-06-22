<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passwords extends Model
{
    use HasFactory;

    public $table = 'usuarios';

    protected $fillable = [
        'hash_content',
    ];

    public function usuarios() {
        return $this->hasMany(Usuarios::class, 'password_id');
    }
}
