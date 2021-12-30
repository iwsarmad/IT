<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_citta extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','CODICE','DESCRIZIONE','CAP','PROVINCIA','DAT_ULT_MOD'
    ];
}
