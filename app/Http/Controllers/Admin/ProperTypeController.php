<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProperTypeController extends Controller
{
      // This Method will Show property type page
      public function PropertyType(){
        // $propertytype = PropertyType::orderBy('id', 'desc')->get();
        //   return view('admin.amenities-type',[
        //     'amenitiestype' => $amenitiestype
        //   ]); 
          
          return view('admin.property-type');

      }
}
