<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'data_added',
        'bug_id',
        //'added_by',

    ];

    public function member() {
        return $this->belongsTo(Member::class);
    }
    public function bug()
    {
        return $this->belongsTo(Bug::class);
    }
}
