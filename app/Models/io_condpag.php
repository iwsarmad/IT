<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_condpag extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','CODICE','DESCRIZIONE','DAT_ULT_MOD'
    ];
}
