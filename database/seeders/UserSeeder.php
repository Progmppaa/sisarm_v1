<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'root',
            'name'=>'root',
            'last_name'=>'root',
            'email'=>'root@serviarmagnb.gob.ve',
            'password'=>bcrypt('123456789')
        ])->assignRole('root');

        User::create([
            'username'=>'admin',
            'name'=> 'admin',
            'last_name'=>'admin',
            'email'=>'admin@serviarmagnb.gob.ve',
            'password'=> bcrypt('admin')
        ])->assignRole('admin');

        User::create([
            'username'=>'user',
            'name'=> 'user',
            'last_name'=>'armamento',
            'email'=>'armamento@serviarmagnb.gob.ve',
            'password'=> bcrypt('armamento')
        ])->assignRole('armamento');
    }
}
