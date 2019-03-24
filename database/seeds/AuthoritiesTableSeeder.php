<?php

use Illuminate\Database\Seeder;

class AuthoritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authorities = [
            [ 'auth_name' => '仮会員'],
            [ 'auth_name' => '一般会員'],
            [ 'auth_name' => '配達会員'],
            [ 'auth_name' => '退会'],
            [ 'auth_name' => '管理者']
        ];
        DB::table('authorities')->insert($authorities);
    }
}
