<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("table_admin")->insert([
            [
                "username" => "bukayosaka",
                "password" => Hash::make("123"),
                "name" => "saka",
                "email" => "bukayosaka@gmail.com",
                "phone" => "0324242",
                "img" => "havert.jpg",
                "DOB" => "2000-05-09",
                "sex" => "Nam",
                "address" => "London / England"
            ],
                [
                    "username" => "gabrielmartinelli",
                    "password" => Hash::make("123"),
                    "name" => "martinelli",
                    "email" => "nnguyendat72@gmail.com",
                    "phone" => "02212",
                    "img" => "havert.jpg",
                    "DOB" => "2001-02-04",
                    "sex" => "Khác",
                    "address" => "RioDeJanero / Brazil"
                ],
            [
                "username" => "KaiHavert",
                "password" => Hash::make("123"),
                "name" => "Havert",
                "email" => "kaihavert@gmail.com",
                "phone" => "03431",
                "img" => "havert.jpg",
                "DOB" => "1999-01-09",
                "sex" => "Nam",
                "address" => "Munich / Germany"
            ]
        ]);
    }
}
