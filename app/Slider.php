<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'slider_name',
        'slider_desc',
        'slider_image',
        'slider_status'
    ];
    protected $primaryKey = 'slider_id';
    protected $table = 'tbl_slider';
}
