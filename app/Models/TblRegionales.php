<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblRegionales extends Model
{
    use HasFactory;
    protected $table = 'tbl_regionales';
    protected $primaryKey = 'Codigo';
    protected $fillable = ['reg_Denominacion'];
}
