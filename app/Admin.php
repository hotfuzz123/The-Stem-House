<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public $timestamps = false;
    protected $fillable = [
        'admin_name', 'admin_email', 'admin_phone', 'admin_password'
    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'tbl_admin';

    public function roles(){
        return $this->belongsToMany('App\Roles');
    }

    public function getAuthPassword(){
        return $this->admin_password;
    }
}