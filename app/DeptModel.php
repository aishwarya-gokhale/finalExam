<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptModel extends Model
{
    //

    public $timestamps = false;
    protected $table = 'staffdirectory';
    protected $fillable = ['id','fname','lname', 'email','department','profile'];

}
