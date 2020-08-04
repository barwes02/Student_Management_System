<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Students
        DB::table('students')->insert([
            'cne' => 'F4500',
            'firstName' => 'Danika',
            'lastName' => 'Woodley',
            'age' => 10,
            'speciality' => 'Art',
        ]);
        DB::table('students')->insert([
            'cne' => 'F4522',
            'firstName' => 'Seth',
            'lastName' => 'Whittington',
            'age' => 10,
            'speciality' => 'Computer Science',
        ]);
        DB::table('students')->insert([
            'cne' => 'F4545',
            'firstName' => 'Elinor',
            'lastName' => 'Winters',
            'age' => 12,
            'speciality' => 'Technology',
        ]);
        DB::table('students')->insert([
            'cne' => 'F4587',
            'firstName' => 'Anees',
            'lastName' => 'Reyes',
            'age' => 14,
            'speciality' => 'Technology',
        ]);
        DB::table('students')->insert([
            'cne' => 'F4593',
            'firstName' => 'Aisling',
            'lastName' => 'Eastwood',
            'age' => 10,
            'speciality' => 'Sport',
        ]);
        DB::table('students')->insert([
            'cne' => 'F4565',
            'firstName' => 'Eman',
            'lastName' => 'Tyler',
            'age' => 12,
            'speciality' => 'Music',
        ]);
        DB::table('students')->insert([
            'cne' => 'E34985',
            'firstName' => 'Tehya',
            'lastName' => 'Barnes',
            'age' => 12,
            'speciality' => 'Music',
        ]);
        DB::table('students')->insert([
            'cne' => 'G9345',
            'firstName' => 'Vincenzo',
            'lastName' => 'Ireland',
            'age' => 13,
            'speciality' => 'Technology',
        ]);
        DB::table('students')->insert([
            'cne' => 'F4501',
            'firstName' => 'Yasemin',
            'lastName' => 'Simon',
            'age' => 12,
            'speciality' => 'Art',
        ]);
        DB::table('students')->insert([
            'cne' => 'F4550',
            'firstName' => 'Hanan',
            'lastName' => 'Firth',
            'age' => 11,
            'speciality' => 'Technology',
        ]);
    }
}
