<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $data =
            [
                'name' => 'Admin',
                'email' => 'admin@itg.ac.id',
                'nim' => '0',
                'prodi_id' => 1,
                'role_id' => '1',
                'password' => bcrypt('admin2153'),
                'graduation_year'=> 9999
            ];
            User::insert($data);
    }
}
