<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //Table Name
    protected $table = 'offers';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;
}
