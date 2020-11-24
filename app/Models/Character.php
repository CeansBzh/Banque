<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'sex',
        'nutri_score',
        'story'
    ];

    /**
     * Get the user that owns the character.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
