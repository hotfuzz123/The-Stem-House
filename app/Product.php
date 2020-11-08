<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_slug',
        'category_id',
        'product_desc',
        'product_content',
        'product_price',
        'product_image',
        'product_status'
    ];
    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product';

    public function cateproduct() {
        return $this->belongsTo('App\CateProduct');
    }
}
