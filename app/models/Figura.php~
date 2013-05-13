<?php 
class Figura extends Eloquent 
{
protected $table = 'figuras';
public $timestamps = false;

	 public function artista()
   {
        return $this->belongsTo('Artista');
   }
	 public function categoria()
   {
        return $this->belongsTo('CategoriaFigura');
   }
}
