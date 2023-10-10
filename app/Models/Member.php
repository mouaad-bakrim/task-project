<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'role',
        'mot_de_passe'
    ];


    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function dashboard()
    {
        return $this->hasOne(Dashboard::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function bug()
    {
        return $this->hasMany(Bug::class);
    }

    /**  public function tasks() {
     * return $this->belongsToMany(Task::class)
     * ->withPivot('assigne_a')
     * ->withTimestamps(); // Si vous souhaitez utiliser des horodatages pour la table pivot
     * }*/

}
