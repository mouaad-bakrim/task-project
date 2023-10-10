<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'data_echeance',
        'statut',
        //'assigne_a',
        'project_id'
    ];
    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function members() {
        return $this->belongsToMany(Member::class);
    }

   /* public function members() {
        return $this->belongsToMany(Member::class)
            ->withPivot('assigne_a')
            ->withTimestamps(); // Si vous souhaitez utiliser des horodatages pour la table pivot
    }*/
}
