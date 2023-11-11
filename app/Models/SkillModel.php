<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillModel extends Model
{
    use HasFactory;
    protected $table = "skill";
    protected $fillable = [
        'bidang',
        'bagian',
        'ahli',
        'deskripsi',

    ];
}

