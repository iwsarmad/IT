<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_art_ultven extends Model
{
    use HasFactory;
    
    protected $fillable=['CHIAVE','COD_DITTA','COD_ART','PROG','VALUTA','PRZ','DATA_DOC','NUM_DOC','COD_CLFOR','DAT_ULT_MOD'];
}
