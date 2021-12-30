<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_valute extends Model
{
    use HasFactory;
    protected $fillable=['CHIAVE','COD_DITTA','COD_VALUTA','DES_VALUTA','SIMBOLO','FLG_PREF','DAT_ULT_MOD
'];
}
