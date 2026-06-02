<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Customer extends Model
{
    protected $table = 'customers';
    public function allUsers()
    {
        return DB::table('customers')->where('status', 1)->get(); // Adjust `status` condition if needed
    }


    // For register function
    public function register($data)
    {
        $data = DB::table('customers')
            ->insert($data);
        return $data;
    }

    
    // For login function 
    public function login($data)
    {
        $exists = DB::table('customers')
            ->where('email', '=',  $data['email'])
            ->where('password', '=', $data['password'])
            ->where('role', '=', $data['role'])
            ->exists();
        if ($exists) {
            $newdata  = DB::table('customers')
                ->where('email', '=',  $data['email'])
                ->where('password', '=', $data['password'])
                ->where('role', '=', $data['role'])
                ->first();
        } else {
            $newdata = [];
        }
        return $newdata;
    }

}
