<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_clifor_note extends Model
{
    use HasFactory;
    protected $fillable=['CHIAVE','COD_DITTA','TIPO_CLIFOR','COD_CLIFOR','PROGRESSIVO','TIPO_NOTA','NOTA','DAT_ULT_MOD'];
}
