<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_Model_Model extends Model
{
    use HasFactory;
    protected $table = "car__models";

    public function products(){
        return $this->hasMany(ProductModel::Class, 'car_model_id', 'id');
    }
}
