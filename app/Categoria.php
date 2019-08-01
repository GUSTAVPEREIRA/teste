<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categoria';
  protected $fillable = ['nome','id'];
  public $timestamps = false;
  public function produto(){
    return $this->hasMany(Produto::class);
  }
}
