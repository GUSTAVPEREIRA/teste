<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $table = 'produto';
  protected $fillable = ['nome','id','categoria_id'];
  public $timestamps = false;

  public function categoria(){
    return $this->belongsTo(Categoria::class);
  }
}
