<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'birthday',
        'phone',
        'curriculum_vitae',
        'school',
        'study_field',
        'interest',
        'entrepreuneuship_lover',
        'entrepreuneuship_level',
    ];

}