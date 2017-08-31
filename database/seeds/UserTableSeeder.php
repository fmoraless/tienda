<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
            'name' => 'Francisco',
            'last_name' => 'Morales',
            'email' => 'fmorales@kaufmann.cl',
            'user' => 'fmorales',
            'password' => \Hash::make('123456'),
            'type' => 'admin',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
             [
            'name' => 'Claudia',
            'last_name' => 'Sanchez',
            'email' => 'csanchez@mail.com',
            'user' => 'csanchez',
            'password' => \Hash::make('123456'),
            'type' => 'user',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
            [
            'name' => 'Jorge',
            'last_name' => 'Ortiz',
            'email' => 'jortiz@kaufmann.cl',
            'user' => 'jortiz',
            'password' => \Hash::make('123456'),
            'type' => 'user',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
             [
            'name' => 'Marcela',
            'last_name' => 'Guzman',
            'email' => 'mguzman@mail.com',
            'user' => 'mguzman',
            'password' => \Hash::make('123456'),
            'type' => 'user',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
            [
            'name' => 'Lorena',
            'last_name' => 'Pedraza',
            'email' => 'lpedraza@kaufmann.cl',
            'user' => 'lpedraza',
            'password' => \Hash::make('123456'),
            'type' => 'user',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
             [
            'name' => 'Hernan',
            'last_name' => 'Diaz',
            'email' => 'hdiaz@mail.com',
            'user' => 'hdiaz',
            'password' => \Hash::make('123456'),
            'type' => 'user',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
            [
            'name' => 'Bernardo',
            'last_name' => 'Cisterna',
            'email' => 'bcisterna@kaufmann.cl',
            'user' => 'bcisterna',
            'password' => \Hash::make('123456'),
            'type' => 'user',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
             [
            'name' => 'Valeria',
            'last_name' => 'Soto',
            'email' => 'vsoto@mail.com',
            'user' => 'vsoto',
            'password' => \Hash::make('123456'),
            'type' => 'user',
            'active' => 1,
            'address' => 'San Cosme 290, Cuauthemoc, DF',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
            
        );
        
        User::insert($data);
    }
}
