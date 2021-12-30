<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_dest extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','TIPO_CLIFOR','COD_CLIFOR','PREFERENZIALE','COD_DEST','RAG_SOC_DEST','INDIRIZZO','CAP','CITTA','PROVINCIA','STAMPA_PREF_DOC','TELEFONO','CELLULARE','MAIL','FAX','NOTE_DEST','DAT_ULT_MOD'
    ];
}
