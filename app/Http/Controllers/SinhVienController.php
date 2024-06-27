<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    //
    public function infomation()
    {
        $SinhVien = [
            [
                'id' => 'PH44242',
                'name' => 'Nguyễn Thị Minh Nguyệt',
                'major' => 'Web development',
                'age' => 20,
                'phonenumber' => '0986751085',
                'address' => 'Hà Nội'
            ]
           

        ];
        return view('list-sv')->with([
            'SinhVien' => $SinhVien
        ]);
    }
}