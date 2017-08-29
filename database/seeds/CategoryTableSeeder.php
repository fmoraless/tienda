<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = array(
            [
                'name' => 'Super heroes',
                'slug' => 'super-heroes',
                'description' => 'Lorem Ipson Dolor, pasao a caca',
                'color' => '#440022'
            ],
            [
                'name' => 'Geek',
                'slug' => 'geek',
                'description' => 'Lorem Ipson Dolor, pasao a caca',
                'color' => '#445500'
            ]
        );
        
        Category::insert($data);
    }

}
