<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelElicitacao extends Model
{
    protected $table='tcc_elicitacao';
    protected $fillable=['titulo','tipo','setor_envolvido','data_reuniao','conteudo', 'id_user'];

    public function relUsers()
    {
        return $this->hasOne(related: 'App\Models\User', foreignKey: 'id', localKey: 'id_user');
    }

    public function relHistoria()
    {
        return $this->hasMany(related: 'App\Models\Models\ModelHistoria', foreignKey: 'id_requisito');
    }

    public function relElicitacao()
    {
        return $this->hasMany(related: 'App\Models\Models\ModelHistoria', foreignKey: 'id_elicitacao');
    } 


}
