<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[
        'photo1',
        'photo2',
        'photo3',
        'price',
        'area',
        'room_id',
        'bed_id',
        'checkbox',
        'number',
        'title',
        'body'
    ];
    public function roomnumber(){
        return $this->belongsTo(RoomNumber::class, 'room_id');
    }
    public function bednumber(){
        return $this->belongsTo(BedNumber::class, 'bed_id');
    }
}
