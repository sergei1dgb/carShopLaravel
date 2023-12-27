<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresenceModel extends Model
{
    use HasFactory;
    protected $table = "presences";
    public function products(){
        return $this->hasMany(ProductModel::Class, 'presence_id', 'id');
    }
}
