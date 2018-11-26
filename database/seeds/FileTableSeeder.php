<?php

use Illuminate\Database\Seeder;

class FileTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $files = factory(File::class, 5)->create();
        
        // factory(App\File::class, 4)->create()->each(function($u) {
        //     $u->issues()->save(factory(App\Issues::class)->make());
        // });
    }
}
