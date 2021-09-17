<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Role;
class Rolecontroller extends Controller
{
    public function Create(Type $var = null)
    {
        $roles=[
       ['name'=>"HEAD"],
       ['name'=>"MANAGER"],
       ['name'=>"STAFF"],
       ['name'=>"ADMIN"],
       ['name'=>"CASHIER"],
       ['name'=>"GUARD"], ];

    Role::insert($roles);

    }

}
