<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("tbl_products")->insert([
            [
                "product_name" => "Sản Phẩm 1",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "100",
                "quantity" => "100",
                "sold" => "30",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "1"
            ],
            [
                "product_name" => "Sản Phẩm 11",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "110",
                "quantity" => "110",
                "sold" => "20",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "1"
            ],
            [
                "product_name" => "Sản Phẩm 111",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "111",
                "quantity" => "111",
                "sold" => "21",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "1"
            ],
            [
                "product_name" => "Sản Phẩm 1111",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "1",
                "quantity" => "12",
                "sold" => "1",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "1"
            ],
            [
                "product_name" => "Sản Phẩm 2",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "200",
                "quantity" => "200",
                "sold" => "30",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "2"
            ],
            [
                "product_name" => "Sản Phẩm 222",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "22",
                "quantity" => "22",
                "sold" => "2",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "2"
            ],
            [
                "product_name" => "Sản Phẩm 2222",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "222",
                "quantity" => "222",
                "sold" => "32",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "2"
            ],
            [
                "product_name" => "Sản Phẩm 22",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "220",
                "quantity" => "220",
                "sold" => "30",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "2"
            ],
            [
                "product_name" => "Sản Phẩm 3",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "320",
                "quantity" => "320",
                "sold" => "30",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "3"
            ],
            [
                "product_name" => "Sản Phẩm 33",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "330",
                "quantity" => "330",
                "sold" => "30",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "3"
            ],
            [
                "product_name" => "Sản Phẩm 333",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "32",
                "quantity" => "32",
                "sold" => "30",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "3"
            ],
            [
                "product_name" => "Sản Phẩm 3333",
                "description" => "Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.",
                "price" => "330",
                "quantity" => "330",
                "sold" => "30",
                "img" => "iphone-15.webp",
                "category_id" => "1",
                "seller_id" => "3"
            ]
        ]);
    }
}
