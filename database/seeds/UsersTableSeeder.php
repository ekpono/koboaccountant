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
        DB::table('users')->insert([
            'name' => 'Ubong Ita',
            'email' => 'business@koboaccountant.com',
            'password' => bcrypt('koboadmin'),
        ]);
    }
}
