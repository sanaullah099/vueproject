<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('contacts')->truncate();
         DB::table('contacts')->insert([
         	[
        	'name'=>'sana',
        	'email'=>'sana@gmail.com',
        	'bio'=>'about bio',
        	'contact_no'=>'03444214099',
        	'designation'=>'web dev',
        	'image'=>'image not found'
        	],
        	[
        	'name'=>'arsalan',
        	'email'=>'sana@gmail.com',
        	'bio'=>'about bio',
        	'contact_no'=>'03444214099',
        	'designation'=>'web dev',
        	'image'=>'image not found'
        	],
        	[
        	'name'=>'sikander',
        	'email'=>'sana@gmail.com',
        	'bio'=>'about bio',
        	'contact_no'=>'03444214099',
        	'designation'=>'web dev',
        	'image'=>'image not found'
        	],
        	[
        	'name'=>'Ali',
        	'email'=>'sana@gmail.com',
        	'bio'=>'about bio',
        	'contact_no'=>'03444214099',
        	'designation'=>'web dev',
        	'image'=>'image not found'
        	]
        ]);
    }
}
