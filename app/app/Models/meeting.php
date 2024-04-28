<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    use HasFactory;
    protected $fillable = [
        'therapist_id', 'client_id', 'start_time', 'end_time', 'client_name',
        'client_email', 'duration', 'meeting_type', 'status', 'note'
    ];
    public function therapist()
    {
        return $this->belongsTo(Therapist::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
