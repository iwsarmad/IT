<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_custom_fields extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','NOME','VALORE','TIPO','CHIAVE_PADRE','CONTESTO','VISUAL_MASK','COD_EXT','ORDINAMENTO','TIPO_DATO','DAT_ULT_MOD'
    ];
}
