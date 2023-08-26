<?php

namespace App\Models;

use App\Traits\FilterUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, FilterUser;

    protected $fillable = [
        'user_id',
        'name',
    ];


}
