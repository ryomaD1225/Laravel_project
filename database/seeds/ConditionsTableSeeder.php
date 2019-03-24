<?php

use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Condition情報登録処理
        $conditions = [
            [ 
              'start_time' => '2019-12-12T12:12 ',
              'end_time' => '2019-12-12T12:12',
              'category_id' => 1,
              'activate_id' => 1,
              'desc'=>''
            ],
            [ 
              'start_time' => '2019-12-12T12:12 ',
              'end_time' => '2019-12-12T12:12 ',
              'category_id' => 2,
              'activate_id' => 1,
              'desc'=>''
            ],
            [ 
              'start_time' => '2019-12-12T12:12 ',
              'end_time' => '2019-12-12T12:12 ',
              'category_id' => 3,
              'activate_id' => 1,
              'desc'=>''
            ],
            [ 
              'start_time' => '2019-12-12T12:12 ',
              'end_time' => '2019-12-12T12:12 ',
              'category_id' => 4,
              'activate_id' => 1,
              'desc'=>''
            ],
            [ 
              'start_time' => '2019-12-12T12:12 ',
              'end_time' => '2019-12-12T12:12 ',
              'category_id' => 1,
              'activate_id' => 1,
              'desc'=>''
            ],
            [ 
              'start_time' => '2019-12-12T12:12 ',
              'end_time' => '2019-12-12T12:12 ',
              'category_id' => 2,
              'activate_id' => 1,
              'desc'=>''
            ],
            [ 
              'start_time' => '2019-12-12T12:12 ',
              'end_time' => '2019-12-12T12:12 ',
              'category_id' => 3,
              'activate_id' => 1,
              'desc'=>''
            ],
            [ 
              'start_time' => '2019-12-12T12:12',
              'end_time' => '2019-12-12T12:12',
              'category_id' => 4,
              'activate_id' => 1,
              'desc'=>''
            ],
        ];
        DB::table('conditions')->insert($conditions);
        
        
        
        
        
        
    }
}
