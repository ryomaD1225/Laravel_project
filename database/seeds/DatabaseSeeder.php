<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // 各テーブルへのデータの流し込みを呼び出す
        $this->call(AuthoritiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ActivatesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ConditionsTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(Condition_userTableSeeder::class);
    }
}
