<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Clothes;
use App\Adress;
use App\Image;
use App\service;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     // factory(Adress::class  ,20)-> create();
      factory( Clothes::class ,20)-> create();
      factory( User::class   , 20)-> create();
      factory( Image::class  , 20)-> create();
    //  factory( service::class  ,20)-> create();
        // $this->call(UsersTableSeeder::class);
    }
}
