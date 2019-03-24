<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $statuses = [
            [ 'status_name' => '依頼'],
            [ 'status_name' => '受注'],
            [ 'status_name' => '配達中'],
            [ 'status_name' => '受取人不在'],
            [ 'status_name' => '配達完了'],
        ];
        DB::table('statuses')->insert($statuses);
    }
}
