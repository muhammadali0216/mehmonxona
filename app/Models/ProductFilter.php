<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
class ProductFilter extends Model
{
    use HasFactory;
    protected $fillable=[
        'room_id',
        'category_item_id',

    ];
    public function rooms(){
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function items(){
        return $this->belongsTo(Category_item::class, 'category_item_id');
    }

}
