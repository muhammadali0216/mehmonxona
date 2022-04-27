<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable=[
        'room_id',
        'photos'
    ];
    public function room(){
        return $this->belongsTo(Room::class);
    }
}
