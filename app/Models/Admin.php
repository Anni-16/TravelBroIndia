<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    public function admin_login($data)
    {
        $exists = DB::table('admin')
            ->where('email', '=',  $data['email'])
            ->where('password', '=', $data['password'])
            ->exists();
        if ($exists) {
            $newdata  = DB::table('admin')
                ->where('email', '=',  $data['email'])
                ->where('password', '=', $data['password'])
                ->first();
        } else {
            $newdata = [];
        }
        return $newdata;
    }
}
