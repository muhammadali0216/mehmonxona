<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category_item;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'nameUz',
        'nameEn',
        'nameRu'
    ];
    protected $table="categories";

    public function items(){
        return $this->hasMany(Category_item::class,'category_id','id');
    }
}
