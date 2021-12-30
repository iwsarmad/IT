<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_testdoc extends Model
{
    use HasFactory;
    protected $table='io_art_ultacqs';
    protected $fillable=['CHIAVE','COD_DITTA','CELLULARE','TIPO_CLIFOR','COD_CLIFOR','COD_TIPODOC','COD_STIPODOC','FLGDAEVADERE','DATA_DOC','NUMREG','TIPODOC','TIPO','SOTTOTIPO','DATAREG','SEZIONALE','NUMDOC','DOCORIG','DEPOSITO','COD_VALUTA','VALUTA','TOTALEDOC','DATACONS','SCADENZE','ESTCONT','TIPOSTATO_DOC','DESSTATO_DOC','DATA_FATT','NUM_FATT','NOTE_DOC','DATA_CONSEGNA','DAT_ULT_MOD','NUM_DOC','DES_NOTE','DES_DOC'];
}
