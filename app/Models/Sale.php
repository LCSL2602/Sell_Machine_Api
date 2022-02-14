<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'spare_parts',
        'detail_machine',
        'price',
        'aditional',
        'user_id',
        'customer_id',
        'vendor_id',
        'sale_status_id',
        'type_machine_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }
    
    public function vendor(){
        return $this->belongsTo('App\Models\Vendor','vendor_id','id');
    }
    
    public function sale_status(){
        return $this->belongsTo('App\Models\Sale_Status','sale_status_id','id');
    }
    
    public function type_machine(){
        return $this->belongsTo('App\Models\Type_Machine','type_machine_id','id');
    }
    
}
