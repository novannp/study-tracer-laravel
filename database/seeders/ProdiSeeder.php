<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Prodi::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Teknik Informatika'],
            ['name' => 'Teknik Industri'],
            ['name' => 'Teknik Sipil'],
            ['name' => 'Sistem Informasi'],
        ];

        foreach ($data as $value) {
            Prodi::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
