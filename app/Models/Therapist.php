<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;



class Therapist extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($therapist) {
            $therapist->password = Hash::make($therapist->password);
        });
    }
    protected $fillable = ['name', 'email', 'password', 'bio', 'specialization', 'contact_info','features'];
}