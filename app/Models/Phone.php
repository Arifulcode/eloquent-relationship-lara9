<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Phone extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
         // if you are not same using model name/if you want to change different name use
        //comment code structure two model and change db table column name
        //return $this->belongsTo(User::class,'user_id/change_column_name');
    }
}
