<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'coupon_code',
        'coupon_amount',
        'coupon_amount_type',
        'coupon_expire_date',
        'coupon_status'
    ];
    protected $primaryKey = 'coupon_id';
    protected $table = 'tbl_coupon';
}
