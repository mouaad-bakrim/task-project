<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'widgets',
        'configuration',
        'member_id'
    ];
    public function member() {
        return $this->belongsTo(Member::class);
    }

}

