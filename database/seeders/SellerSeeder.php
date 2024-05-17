<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("tbl_sellers")->insert([
            [
                "name" => "Thành Đạt",
                "username" => "nnguyendat",
                "email" => "nnguyendat@gmail.com",
                "password" =>  Hash::make('123'),
                "phone" => "032481631",
                "sex" => "Nam",
                "img" => "havert.jpg",
                "DOB" => "2004-02-07",
                "address" => "Hoang Huu Nam / Thu Duc",
                "name_company" => "Điện máy xanh",
                "type_business" => "individual",
            ],
            [
                "name" => "Phú Thảo",
                "username" => "pphuthao",
                "email" => "pphuthao@gmail.com",
                "password" =>  Hash::make('123'),
                "phone" => "0423121",
                "sex" => "Nữ",
                "img" => "havert.jpg",
                "DOB" => "2003-01-17",
                "address" => "Bùi Viện / Quận 1",
                "name_company" => "Thế giới di động",
                "type_business" => "enterprise",
            ],
            [
                "name" => "Nguyễn Thành Đạt",
                "username" => "nnguyen",
                "email" => "nnguyendat72@gmail.com",
                "password" =>  Hash::make('123'),
                "phone" => "011131231",
                "sex" => "Nam",
                "img" => "havert.jpg",
                "DOB" => "2001-01-03",
                "address" => "Hoang Huu Nam / Thu Duc2",
                "name_company" => "Thế giới manh động",
                "type_business" => "individual",
            ]
        ]);
    }
}
