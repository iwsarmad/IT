<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_art_ultacq extends Model
{
    // CHIAVE','COD_DITTA','COD_ART','PROG','VALUTA','PRZ','DATA_DOC','NUM_DOC','COD_CLFOR','TIPO_DOC','DAT_ULT_MOD
    use HasFactory;
 //   protected $table='io_art_ultacqs';
    protected $fillable=[
        'CHIAVE','COD_DITTA','COD_ART','PROG','VALUTA','PRZ','DATA_DOC','NUM_DOC','COD_CLFOR','TIPO_DOC','DAT_ULT_MOD'
    ];
}
