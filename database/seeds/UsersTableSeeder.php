<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Ubong Ita',
        //     'email' => 'business@koboaccountant.com',
        //     'password' => bcrypt('koboadmin'),
        // ]);
        
        // DB::table('users')->insert([
        //     'name' => 'Lynda Nmaram',
        //     'email' => 'lynda@koboaccountant.com',
        //     'password' => bcrypt('20021989lynda.'),
        // ]);
         DB::table('users')->insert([
            'name' => 'Ekpono Ambrose',
            'email' => 'ekponoambrose@gmail.com',
            'password' => bcrypt('Udoudo@2011'),
        ]);
    }
}
