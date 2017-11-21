<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Student;
use App\Score;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'小美',
            'email'=>'mei@gmail.com',
            'password'=>bcrypt('mei')
        ]);
        $student=Student::create([
            'use_id'=>$user->id,
            'no'=>'s5234567890',
            'tel'=>'09123456789'
        ]);
        $score=Score::create([
            'student_id'=>$student->id,
            'chinese'=>60,
            'english'=>60,
            'math'=>60,
            'total'=>180
        ]);
    }
}
