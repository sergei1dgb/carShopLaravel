<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ProductModel extends Model
{
    protected $table = 'products';
    use Searchable;

    public function car_model(){
        return $this->belongsTo(Car_Model_Model::Class, 'car_model_id', 'id');
    }

    public function color_model(){
        return $this->belongsTo(ColorModel::Class, 'color_id', 'id');
    }

    public function presence_model(){
        return $this->belongsTo(PresenceModel::Class, 'presence_id', 'id');
    }
}
