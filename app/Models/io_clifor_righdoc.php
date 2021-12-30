<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_righdoc extends Model
{
    use HasFactory;
    protected $fillable=['CHIAVE','COD_DITTA','NUM_REG','PRG_RIGA','COD_RIGA','DES_RIGA','COD_ART','COD_UM','QTA','PRZ_LORDO','PRZ_NETTO','COD_VALUTA','IMPORTO','SC_1','SC_2','DATA_CONFERMA','TIPO_CLIFOR','COD_CLIFOR','COD_ART','DAT_ULT_MOD'];
}
