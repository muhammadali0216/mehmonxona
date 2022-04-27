<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[
        'price',
        'checkbox',
        'number',
        'titleUz',
        'titleEn',
        'titleRu',
        'bodyUz',
        'bodyEn',
        'bodyRu',
        'slug'
    ];
    public function category(){
        return $this->belongsToMany(Category_item::class, 'product_filters');
    }
    public function photos(){
        return $this->hasMany(Photo::class, 'room_id');
    }
}
