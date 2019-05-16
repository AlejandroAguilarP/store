<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $admin = new App\User();
        $admin->nombre = 'Administrador';
        $admin->email = 'alan@gmail.com';
        $admin->rol = 'Admin';
        $admin->codigo = '2125';
        $admin->email_verified_at = now();
        $admin->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $admin->remember_token = Str::random(10);
        $admin->save();

        $admin = new App\User();
        $admin->nombre = 'Alex';
        $admin->email = 'alex@gmail.com';
        $admin->rol = 'Usuario';
        $admin->codigo = '2127';
        $admin->email_verified_at = now();
        $admin->password = Hash::make('hola123'); // hola123
        $admin->remember_token = Str::random(10);
        $admin->save();
    }
}
