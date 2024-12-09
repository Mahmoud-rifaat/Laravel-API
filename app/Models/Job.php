<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    // all the attributes that are allowed for mass assignment
    protected $fillable = [
        'title',
        'salary'
    ];
}
