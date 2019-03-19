<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = "aboutus";
    protected $guarded = ["id"];
    public $timestamps = false;

}
