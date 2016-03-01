<?php

use Illuminate\Database\Seeder;

class ContentTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('content_tables')->insert([
            'title' => str_random(10),
            'content' => 'Samsung may have "accidentally" released leaks regarding the galaxy S7 device,
            in their latest advert they have shown that the s7 device is set to be waterproof.
            Although, nothing much has changed on their origional design, there is nothing 
            confirmed about the specification of the handset just yet.',
            'featured_img' => '/assets/article/img/test.jpg',
        ]);
    }
}
