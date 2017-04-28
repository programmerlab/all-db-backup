<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        if (Schema::hasTable('admin'))
        {
            DB::table('admin')->insert([ 
                'name'  =>  'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456')
            ]);
        } 

         
    }
}
