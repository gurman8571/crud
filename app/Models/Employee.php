<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class employee extends Model
{
    use HasFactory;
  
    use SoftDeletes;

   

    //public function getnameAttribute($value)
    //{
    //       
    //  
    //    return "$value ,$this->city";
    //}
    public function setnameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
    public function Country()
    {
        return $this->belongsTo(Country::class);
        
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class,'employee_role');
    }
}
