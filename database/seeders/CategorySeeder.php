<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("table_category")->insert([
            [
                "category_name" => "Điện thoại",
            ],
            [
                "category_name" => "Máy Tinh"
            ],
            [
                "category_name" => "Điện Tử"
            ],
            [
                "category_name" => "Thời Trang"
            ],
            [
                "category_name" => "Phụ kiện"
            ],
            [
                "category_name" => "Mỹ Phẩm"
            ],
            [
                "category_name" => "Sức khỏe"
            ],
            [
                "category_name" => "Đồ gia dụng"
            ],
            [
                "category_name" => "Đồ chơi"
            ],
            [
                "category_name" => "Thực phẩm"
            ],
            [
                "category_name" => "Văn Phòng Phẩm"
            ],
            [
                "category_name" => "Trang trí"
            ]
          
        ]);
    }
}
