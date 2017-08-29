<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = array(
            [
                'name' => 'Playera 1',
                'slug' => 'playera-1',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/USB_LINK2_front__rgb_web.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Playera 2',
                'slug' => 'playera-2',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/493001_001.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => '6-Pin to 9-Pin Deutsch Adapter (1 Meter)',
                'slug' => '6pin-to-9pin-deutch-adapter-1-meter',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/404002_001.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Playera 4',
                'slug' => 'playera-4',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/USB_LINK2_front__rgb_web.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Playera 5',
                'slug' => 'playera-5',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/USB_LINK2_front__rgb_web.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Playera 6',
                'slug' => 'playera-6',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/USB_LINK2_front__rgb_web.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Playera 7',
                'slug' => 'playera-7',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/USB_LINK2_front__rgb_web.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Playera 8',
                'slug' => 'playera-9',
                'description' => 'Lorem Ipson Dolor, pasao a cacaashhashjhsahjjjkasa'
                . 'jjsahhjsaoicjajsahuihuhoaossas',
                'extract' => 'lorenaoosau ahhsaooa bla blab lalblba',
                'price' => 275.00,
                'image' => 'https://www.nexiq.com/NexiqAssets/ProductImage/USB_LINK2_front__rgb_web.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ]
        );
        
        Product::insert($data);
    }

}