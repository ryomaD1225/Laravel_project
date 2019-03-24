<?php

use Illuminate\Database\Seeder;

class Condition_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //中間テーブルのseeder
         $condition_user = [
            [ 
              'condition_id' => 1,
              'user_id' => 1,
            ],
            [ 
              'condition_id' => 2,
              'user_id' => 1,
            ],
            [ 
              'condition_id' => 3,
              'user_id' => 1,
            ],
            [ 
              'condition_id' => 4,
              'user_id' => 1,
            ],
            [ 
              'condition_id' => 5,
              'user_id' => 2,
            ],
            [ 
              'condition_id' => 6,
              'user_id' => 2,
            ],
            [ 
              'condition_id' => 7,
              'user_id' => 2,
            ],
            [ 
              'condition_id' => 8,
              'user_id' => 2,
            ],
        ];
        DB::table('condition_user')->insert($condition_user);
    }
}
