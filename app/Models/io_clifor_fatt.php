<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_fatt extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','TIPO_CLIFOR','COD_CLIFOR','ANNO','MESE','COD_VALUTA','FATTURATO','DAT_ULT_MOD
'
    ];
}
