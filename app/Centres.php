<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centres extends Model
{
    //Table Name
    protected $table = 'centres';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;
}
