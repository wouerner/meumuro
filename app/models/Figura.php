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
	 public function opinioes()
   {
        return $this->belongsToMany('Artista','opinioes')->withPivot('opiniao');
   }
}
