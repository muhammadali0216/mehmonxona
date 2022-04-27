<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_item extends Model
{
    use HasFactory;
    protected $fillable=[
        'nameUz',
        'nameEn',
        'nameRu',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function rooms(){
        return $this->belongsToMany(Room::class, 'product_filters');
    }
}
