<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public $timestamps = true;

    protected $guard = 'admin';
    protected $fillable = [
        'admin_name', 'admin_email', 'admin_phone', 'admin_type', 'admin_image'
    ];

    protected $hidden = [
        'admin_password', 'remember_token',
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
