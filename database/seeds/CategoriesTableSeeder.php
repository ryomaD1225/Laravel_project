<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [ 'category_name' => 'Door To Door'],
            [ 'category_name' => 'Door To Station'],
            [ 'category_name' => 'Station To Station'],
            [ 'category_name' => 'Station To Door'],
        ];
        DB::table('categories')->insert($categories);
    }
}
