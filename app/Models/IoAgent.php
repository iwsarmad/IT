<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IoAgent extends Model
{
    use HasFactory;
    protected $fillable=[
        "DES_AGENTE",
        "COD_AGENTE",
        "COD_DITTA",
        "CHIAVE"
    ];
}
