<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tematica extends Model
{
    use HasFactory;

    protected $table = 'TBL_EJES_TEMATICOS';

    private $primarykey = 'EJE_ID';

    protected $fillable = ['EJE_NOMBRE', 'EJE_ICONO', 'EJE_BORRADO'];
}
