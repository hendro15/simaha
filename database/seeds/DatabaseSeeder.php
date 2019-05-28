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
        // $this->call(UsersTableSeeder::class);
        DB::table('mahasiswas')->insert([
            'nim'=>'5302411176',
            'nama'=>'Hendro Eko Prabowo',
            'alamat'=>'Kab. Rembang',
            'prodi'=>'Pend. TIK',
        ]);

    }
}
