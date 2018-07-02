<?php

namespace App;

use DB;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
