<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Client extends Model
{
    use HasFactory,HasRoles;

    protected $guarded=[];

    public function user(){
        return $this->belongsTo(Client::class);


    }


}
