<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    public $table = 'usuarios';

    protected $fillable = [
        'username',
        'email',
        'password_id'
    ];

    public function passwords() {
        return $this->belongsTo(Passwords::class, 'password_id');
    }
}
