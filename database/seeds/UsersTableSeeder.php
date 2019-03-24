<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ユーザー情報登録処理
        $users = [
            [ 
              'name' => 'テストユーザー1',
              'email' => 'test1@test.jp',
              'password' => Hash::make('testtest')
            ],
            [ 
              'name' => 'キシモト',
              'email' => 'kishimoto@gmail.com',
              'password' => Hash::make('19890118')
            ],
            [ 
              'name' => 'リョウマ',
              'email' => 'ryoma@gmail.com',
              'password' => Hash::make('19890118')
            ],
        ];
        DB::table('users')->insert($users);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
}
