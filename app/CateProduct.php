<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateProduct extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'category_name',
        'slug_category_product',
        'meta_keywords',
        'category_desc',
        'category_status'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_product';


    public function product(){
        return $this->hasMany('App\Product', 'category_id');
    }

}
