<?php 
class Figura extends Eloquent 
{
protected $table = 'figuras';
public $timestamps = false;

	 public function artista()
   {
        return $this->belongsTo('Artista');
   }
}
