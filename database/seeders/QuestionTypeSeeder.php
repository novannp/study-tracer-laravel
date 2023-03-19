<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        QuestionType::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['type' => 'Pilihan Ganda',],
            ['type' => 'Multiple Choice',],
            ['type' => 'Text Input',],
        ];
        foreach ($data as $value) {
            QuestionType::insert([
                'type' => $value['type'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
