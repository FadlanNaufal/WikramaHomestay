<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Pelanggan;
use App\kamar;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');


        for ($i=0; $i < 20 ; $i++) { 
        	Pelanggan::create([
        		'name'=>$faker->name,
        		'email'=>'pelanggan'.$i.'@ngendongin.com',
        		'password'=>Hash::make('pelanggan'.$i),
        		'alamat'=>$faker->address,

        	]);
        }

        for ($i=0; $i < 5 ; $i++) { 
            

            kamar::create([
                'nomor_kamar'=>$i,
                'nama_kamar'=>$faker->name,
                'kapasitas_kamar'=>4,
                'kelas_kamar'=>'vvip',
                'harga'=>200000,
                'file_gambar'=>$faker->address,
                'keterangan'=>$faker->city
            ]);


            kamar::create([
                'nomor_kamar'=>6 + $i,
                'nama_kamar'=>$faker->name,
                'kapasitas_kamar'=>4,
                'kelas_kamar'=>'vip',
                'harga'=>200000,
                'file_gambar'=>$faker->address,
                'keterangan'=>$faker->city
            ]);


            kamar::create([
                'nomor_kamar'=>11 + $i,
                'nama_kamar'=>$faker->name,
                'kapasitas_kamar'=>4,
                'kelas_kamar'=>'regular',
                'harga'=>200000,
                'file_gambar'=>$faker->address,
                'keterangan'=>$faker->city
            ]);

        }

    }
}
