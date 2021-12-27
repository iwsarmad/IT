<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessInvites extends Model
{
    use HasFactory;
    protected $fillable=[
        'COGNOME_NOME'
        ,'NOME'
        ,'EMAIL1'
    ];
}
