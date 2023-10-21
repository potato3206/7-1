<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => '古谷優衣',
                'last_name' => '古谷',
                'first_name' => '優衣',
                'birthday' => date('2002-07-31'),
                'gender' => '女',
                'phone_number' => '08012341234',
                'email' => '1234@gmail.com',
                'hourly_wage' => '1100',
                'created_at' => new DateTime(),
                'updated_at' => new Datetime(),
    ]);
        
    }
    
}
