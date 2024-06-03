<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class client extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password', 'contact_info', 'payment_info'];


    protected $hidden = [
        'password', // Hide the password field when serializing the model
    ];

    /**
     * Automatically hash the password when setting it.
     *
     * @param string $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 29abd5a4e331204e6883eb18cc27968263fcfcaa
