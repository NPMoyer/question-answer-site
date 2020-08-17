<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('placeholders')->insert(array(
            array(
              'placeholder_text' => 'Why eat animals when we can just eat plants?'
            ),
            array(
                'placeholder_text' => 'What\'s the most difficult thing about being vegan?'
            ),
            array(
                'placeholder_text' => 'Why is it essential to press your tofu?'
            ),
        ));
    }
}
