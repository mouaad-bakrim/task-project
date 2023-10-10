<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'data_debut',
        'data_fin',
        'statut',
        'github_link'
    ];
    public function projectVersion() {
        return $this->hasMany(ProjectVersion::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }public function backup()
    {
        return $this->hasMany(Backup::class);
    }public function bug()
    {
        return $this->hasMany(Bug::class);
    }
}


