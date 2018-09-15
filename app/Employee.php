<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //Table Name
    protected $table = 'employees';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;
}
