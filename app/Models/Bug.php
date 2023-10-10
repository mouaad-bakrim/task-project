<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;
    protected $fillable = [
        'priorite',
        'description',
        'data_fin',
        'statut',
        'project_id',
       // 'fixed_by',
        //'created_by'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
