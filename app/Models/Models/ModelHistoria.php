<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHistoria extends Model
{
    protected $table='tcc_historia';
    protected $fillable=['id_user', 'id_requisito', 'id_elicitacao', 'necessidade', 'solucao', 'cenario_teste', 'especificacao', 'status'];

    public function relUsers()
    {
        return $this->hasOne(related: 'App\Models\User', foreignKey: 'id', localKey: 'id_user');
    } 

    public function relRequisito()
    {
        return $this->hasOne(related: 'App\Models\Models\ModelRequisito', foreignKey: 'id', localKey: 'id_requisito');
    } 

    public function relElicitacao()
    {
        return $this->hasOne(related: 'App\Models\Models\ModelElicitacao', foreignKey: 'id', localKey: 'id_elicitacao');
    } 

}
