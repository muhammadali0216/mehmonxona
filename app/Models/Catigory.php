<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    protected $table="catigories";

    public function items(){
        return $this->hasMany(Catigory_item::class,'catigory_id','id');
    }
}
