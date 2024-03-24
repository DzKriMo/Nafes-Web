<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'therapist_id', 'amount', 'payment_method', 'transaction_id'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'user_id');
    }

    public function therapist()
    {
        return $this->belongsTo(Therapist::class);
    }
}
