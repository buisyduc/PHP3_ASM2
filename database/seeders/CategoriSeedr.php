<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
                ['name'=>'apple'],
                ['name'=>'sam sung'],
                ['name'=>'oppo'],
                ['name'=>'nokia'],
                ['name'=>'xiaomi'],
                ['name'=>'realme']
        ]);
    }
}
