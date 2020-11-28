<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateCourse extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'category_name',
        'slug_category_course',
        'meta_keywords',
        'category_desc',
        'category_status'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_course';

    
    public function course(){
        return $this->hasMany('App\Course', 'category_id');
    }
}
