<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  
  protected $table = 'note';

  /*
  * o array $guarded guarda os campos que você não quer que sejam preenchidos automaticamente
	*	como não temos nenhum dado sensível na nossa nota, deixei vazio, para não proteger nenhum campo
	* você -- PRECISA -- declarar como array vazio
  */
  protected $guarded = [];

}
