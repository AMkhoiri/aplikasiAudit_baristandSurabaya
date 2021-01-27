<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table= 'roles';

    protected $fillable= ['nama','display','keterangan'];

    
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
