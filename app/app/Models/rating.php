<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;
    protected $fillable = ['therapist_id', 'client_id', 'rating_value', 'comments'];
    public function therapist()
    {
        return $this->belongsTo(Therapist::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
