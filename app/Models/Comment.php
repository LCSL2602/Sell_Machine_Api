<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'sale_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function sale(){
        return $this->belongsTo('App\Models\Sale','sale_id','id');
    }
    
}
