<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DumpsMaps extends Model
{
    use HasFactory;
    protected $fillable=[
        "FileName",
        "CronText"
    ];
}
