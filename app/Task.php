<?php

namespace App;

use DB;
use App\User;
use App\Topic;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }
}
