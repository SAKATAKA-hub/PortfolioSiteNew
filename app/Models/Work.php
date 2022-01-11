<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'title','body','image','app_path','introduction_path','github_path','order','publishing'
    ];

}

