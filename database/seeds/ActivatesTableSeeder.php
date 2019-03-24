<?php

use Illuminate\Database\Seeder;

class ActivatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $activates = [
            [ 'activate_name' => '公開中'],
            [ 'activate_name' => '受付中'],
            [ 'activate_name' => '非公開'],
        ];
        DB::table('activates')->insert($activates);
    }
}
