<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectVersion extends Model
{
    use HasFactory;
    protected $fillable = [
       'numer_version',
        'date_publication',
        'description'
    ];

    public function project() {
        return $this->belongsTo(Project::class);
    }

}
