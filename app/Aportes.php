<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aportes extends Model
{
    protected $table = 'schema_aportes.aportes';
    protected $fillable = ['titulo_aporte','procedimiento_aporte','url_archivo_aporte','tipo_aporte_id','procedimiento_aporte'];
    protected $guarded = ['id'];
}
