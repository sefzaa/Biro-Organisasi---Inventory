<?php
 
namespace Database\Seeders;
 
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
 
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'level' => 'admin',
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'biro',
        //     'email' => 'biro@gmail.com',
        //     'password' => Hash::make('biro'),
        //     'level' => 'biro',
        // ]);
       

        
    }
}