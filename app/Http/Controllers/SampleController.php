<?php
    
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\User;
    use Illuminate\Support\Facades\DB;

    class SampleController extends Controller {
    
        public function addRecord()
        {
            DB::table('users')->insert([
                'email' => 'example1@example.com',
                'name'=> 'Sample User 1',
                'password' => bcrypt('password1')
            ]);
            
            DB::table('users')->insert([
                'email' => 'example2@example.com',
                'name' => 'Sample User 2',
                'password' => bcrypt('password2')
            ]);
    
            // レコード3
            DB::table('users')->insert([
                'email' => 'example3@example.com',
                'name' => 'Sample User 3',
                'password' => bcrypt('password3')
            ]);

            return "REcords added successfully!";
        }
    }