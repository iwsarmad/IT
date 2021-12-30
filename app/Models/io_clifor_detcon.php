<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_detcon extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','TIPO_CLIFOR','COD_CLIFOR','ID_CONTATTO','TIPO_CONTATTO','PREF','COGNOME_NOME','NOME','INDIRIZZO','CAP','CITTA','PR','ORARIO_LAVORO','TELEFONO1','TELEFONO2','CELLULARE1','CELLULARE2','TELEF_CASA','FAX','EMAIL1','EMAIL2','ALTRO_INDIRIZZO1','ALTRO_INDIRIZZO2','NOTE','DAT_ULT_MOD
'
    ];
}
