<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory;

    protected $table = 'sessions';
    public $incrementing = false; // Non-incrementing, karena kita menggunakan UUID
    protected $keyType = 'string'; // Tipe primary key adalah string

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Menghasilkan UUID saat membuat sesi
        });
    }

    protected $fillable = ['payload', 'last_activity'];
}
