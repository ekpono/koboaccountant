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
        // DB::table('users')->update([
        //     'name' => 'Ubong Ita',
        //     'email' => 'business@koboaccountant.com',
        //     'password' => bcrypt('koboadmin'),
        // ]);
        // DB::table('users')->update([
        //     'name' => 'Ekpono Ita2',
        //     'email' => 'buss@koboaccountant.com',
        //     'password' => bcrypt('koboadmin'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'Ekpono Josep Ambrose',
        //     'email' => 'busis@koboaccountant.com',
        //     'password' => bcrypt('koboadmin'),
        // ]);
        DB::table('users')->insert([
            'name' => 'Ekpono Josep Ambrose',
            'email' => 'busis@koaccountant.com',
            'password' => bcrypt('koboadmin'),
        ]);
    }
}
