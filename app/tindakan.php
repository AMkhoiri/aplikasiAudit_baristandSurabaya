<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tindakan extends Model
{
    protected $table = 'tindakan';
    public $primaryKey = 'id_tindakan';
    protected $dates= [
    'created_at',
    'updated_at',
    'waktu_kirim'
];
// protected $dateFormat = 'Y-m-d H:i:sO';
    
}
