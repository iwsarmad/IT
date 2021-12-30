<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_age extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','TIPO_CLIFOR','COD_CLIFOR','COD_AGE','RAGSOC_AGE','PREFERENZIALE','DAT_ULT_MOD'

    ];
}
