<?php 
class CategoriaFigura extends Eloquent 
{
protected $table = 'categoria_figuras';
public $timestamps = false;

	 public function figura()
   {
        return $this->belongsTo('Figura');
   }
}
