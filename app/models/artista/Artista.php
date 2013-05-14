<?php 
class Artista extends Eloquent 
{
   protected $table = 'artistas';
   public $timestamps = false;

	 public function figura()

   {
        return $this->hasMany('Figura');
	 }

	 public function user()
   {
        return $this->belongsTo('User');
   }
	 public function opinioes()
   {
        return $this->belongsToMany('Figura','opinioes');
   }
}
