<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class InsLead extends Model
{
    protected $table = 'InsLead';
    public $fillable = ['profession_numb','email','ins_type'];

}
