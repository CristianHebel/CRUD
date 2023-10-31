<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacenes';
    public function productos()
    {
        return $this->hasMany(Producto::class, 'almacen_id');
    }

    protected $fillable = ['nombre'];
}
