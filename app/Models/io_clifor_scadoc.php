<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_scadoc extends Model
{
    use HasFactory;
    protected $fillable=['CHIAVE','COD_DITTA','NUM_REG','COD_RATA','DAT_SCAD','IMPORTO','NETTO_PREV','DES_TIPO','DES_STATO','DES_TIPO_PRES','DES_OPERAZIONE','FLG_DA_LIB','FLG_SOSP','DES_BANCA_AGENZIA','TIPO_CLIFOR','COD_CLIFOR','DATA_DOC','NUM_DOC','COD_VALUTA','DAT_ULT_MOD
'];
}
