<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
        // function testing($id){
        //         return "The Id is $id";
        // }
        function testing($id){
            //Take get $id sent from the route
            //return "a view" view('view Name',get all the varibles in this function and make it accessable in view); 
            return view('testing',get_defined_vars());
    }
}
