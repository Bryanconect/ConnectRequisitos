<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelRequisito extends Model
{
    protected $table='tcc_requisito';
    protected $fillable=['programa','ativo'];

    public function relHistoria()
    {
        return $this->hasMany(related: 'App\Models\Models\ModelHistoria', foreignKey: 'id_requisito');
    }

    
}
