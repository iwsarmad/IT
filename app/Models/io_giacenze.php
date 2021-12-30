<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_giacenze extends Model
{
    use HasFactory;
    protected $fillable=['CHIAVE','COD_DITTA','COD_ARTICOLO','COD_DEPOSITO','DESC_DEPOSITO','GIACENZA','DISPONIBILITA','UM1','DAT_ULT_MOD
'];
}
