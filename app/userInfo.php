<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userInfo extends Model
{
    protected $table = "user_info";
    //protected $primaryKey = "clg_id";
    //protected $fillable = ['age', 'contact', 'address'];
    protected $guarded = [];
    // public $timestamps = false;
}
