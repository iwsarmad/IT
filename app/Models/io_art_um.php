<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_art_um extends Model
{
    use HasFactory;
    protected $fillable=[
        'CHIAVE','COD_DITTA','COD_ART','UM','DESC_UM','FAT_CONV','TIPO_UM','FLG_DEFAULT','DAT_ULT_MOD
    '];
}
