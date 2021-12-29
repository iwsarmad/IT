<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_agenti extends Model
{
    use HasFactory;
    protected $table='io_agentis';
    protected $fillable=[
        'CHIAVE', 'COD_DITTA', 'COD_AGENTE', 'DES_AGENTE'
 ];
}
