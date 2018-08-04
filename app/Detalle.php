<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table='detalle_ingreso';
    protected $primaryKey='iddetalle_ingreso';

    public $timestamps=false;


    protected $fillable =[
    	'idingreso',
    	'id_articulo',
        'cantidad',
    	'precio_compra',
        'precio_venta'
    ];
    
    protected $guarded =[
    ];
}
