<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class akun_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
        'username' => 'admin',
        'role' => 'admin',
        'password' => bcrypt('admin123')
            ],
        [
        'username' => 'student',
        'role' => 'student',
        'password' => bcrypt('student123')
        ]
        
            
            ];
            foreach ($user as $key => $value) {
                User::create($value);
             }
    }
}
