<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class klausul extends Model
{
   protected $table = 'klausul';
   protected $fillable = ['klausul','dokumen'];
     public $timestamps = false;
}
