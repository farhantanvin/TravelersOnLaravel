<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //protected $table = "user_table";
    protected $table = "admin_message";
    protected $primaryKey = "id";
    public $timestamps = false;

    //const CREATED_AT = "create_time";
    //const UPDATED_AT = "updated_time";
}
