<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) { 
            DB::table('barangs')->insert([
                'nama_barang' => $faker->text(50),
                'harga' => $faker->numberBetween(10, 1000),
                'stok' => $faker->numberBetween(1, 100),
                'id_suplier' => $faker->uuid, 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
