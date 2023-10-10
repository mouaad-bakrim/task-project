<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
        'destinataire',
        'data_envoi',
        'member_id'

    ];

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
