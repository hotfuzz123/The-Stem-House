<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'course_name',
        'course_slug',
        'category_id',
        'course_desc',
        'course_content',
        'course_price',
        'course_image',
        'course_status'
    ];
    protected $primaryKey = 'course_id';
    protected $table = 'tbl_course';


    public function catecourse() {
        return $this->belongsTo('App\Catecourse');
    }
}
