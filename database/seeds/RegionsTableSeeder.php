<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Regions情報登録処理
            $regions = [
                [ 
                  'condition_id' => 1,
                  'departure_lat' =>null,
                  'departure_lon' =>null,
                  'departure_add1' => '千葉県',
                  'departure_add2' => '松戸市',
                  'departure_add3' => '新松戸',
                  'departure_station' => null,
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => '東京都',
                  'arrival_add2' => '江東区',
                  'arrival_add3' => '森下',
                  'arrival_station' =>null
                ],
                [ 
                  'condition_id' => 2,
                  'departure_lat' =>null,
                  'departure_lon' =>null,
                  'departure_add1' => '千葉県',
                  'departure_add2' => '松戸市',
                  'departure_add3' => '新松戸',
                  'departure_station' => null,
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => null,
                  'arrival_add2' => null,
                  'arrival_add3' => null,
                  'arrival_station' => '東京駅'
                ],
                [ 
                  'condition_id' => 3,
                  'departure_lat' => null,
                  'departure_lon' => null,
                  'departure_add1' => null,
                  'departure_add2' => null,
                  'departure_add3' => null,
                  'departure_station' => '千葉駅',
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => null,
                  'arrival_add2' => null,
                  'arrival_add3' => null,
                  'arrival_station' => '東京駅'
                ],
                [ 
                  'condition_id' => 4,
                  'departure_lat' => null,
                  'departure_lon' => null,
                  'departure_add1' => null,
                  'departure_add2' => null,
                  'departure_add3' => null,
                  'departure_station' => '千葉駅',
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => '東京都',
                  'arrival_add2' => '江東区',
                  'arrival_add3' => '森下',
                  'arrival_station' => null
                ],
                [ 
                  'condition_id' => 5,
                  'departure_lat' => null,
                  'departure_lon' => null,
                  'departure_add1' => '神奈川県',
                  'departure_add2' => '横浜市青葉区',
                  'departure_add3' => '荏田町',
                  'departure_station' => null,
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => '東京都',
                  'arrival_add2' => '江東区',
                  'arrival_add3' => '森下',
                  'arrival_station' => null
                ],
                [ 
                  'condition_id' => 6,
                  'departure_lat' => null,
                  'departure_lon' => null,
                  'departure_add1' => '神奈川県',
                  'departure_add2' => '横浜市青葉区',
                  'departure_add3' => '荏田町',
                  'departure_station' => null,
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => null,
                  'arrival_add2' => null,
                  'arrival_add3' => null,
                  'arrival_station' => '東京駅'
                ],
                [ 
                  'condition_id' => 7,
                  'departure_lat' => null,
                  'departure_lon' => null,
                  'departure_add1' => null,
                  'departure_add2' => null,
                  'departure_add3' => null,
                  'departure_station' => '神奈川駅',
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => null,
                  'arrival_add2' => null,
                  'arrival_add3' => null,
                  'arrival_station' => '東京駅'
                ],
                [ 
                  'condition_id' => 8,
                  'departure_lat' => null,
                  'departure_lon' => null,
                  'departure_add1' => null,
                  'departure_add2' => null,
                  'departure_add3' => null,
                  'departure_station' => '神奈川駅',
                  'arrival_lat' => null,
                  'arrival_lon' => null,
                  'arrival_add1' => '東京都',
                  'arrival_add2' => '江東区',
                  'arrival_add3' => '森下',
                  'arrival_station' => null
                ]
            ];
            DB::table('regions')->insert($regions);
    
    }
}
