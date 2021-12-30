<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_blo extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','TIPO_CLIFOR','COD_CLIFOR','COD_BLOCCO','TIPO_BLOCCO','NOTA_BLOCCO','DATA_BLOCCO','DAT_ULT_MOD'
    ];
}
