<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::create([
        //     'name' => 'superAdmin',
        //     'role' => 'superadmin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin')
        // ]);

        \App\Models\Aboutus::create([
            'judul' => 'Tentang Kami',
            'deskripsi' => 'aokwoakwoakwokaowkokw',
            'gambar' => 'post-images/slider/JW1YY5WbmNTPDkGtL87DZ919EXTv7Nx5MT1FHZfe.jpg'
        ]);

        \App\Models\Konfigurasi::create([
            'title' => 'OnlineShop',
            'favicon' => 'post-images/slider/E2lkepMnn3bB0688xsfWP0cKLRt65GnDSsV22y8a.png',
            'metadata' => 'oakwokawokaw',
            'deskripsi' => 'OnlineShop kami merupakan onlineshop dengan transaksi dan penjualanyang aman dan terjangkau',
            'logo_header' => 'post-images/slider/I2UnWbni60oabrWQvRoi7tNvwYYeWFMDHP9cUsH7.png',
            'logo_footer' => 'post-images/slider/hs52sZgmlJYjvuxEhAb5uzP7LFyt1e0UHijkuRt3.png',
            'alamat' => 'CQCH+VMQ, Jl. Terapi Raya, RT.03/RW.19, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16111',
            'no_telp' => '6285776125559',
            'email' => 'onlineshop@gmail.com',
        ]);

        \App\Models\Meta::create([
            'keywords' => 'test',
            'search_engine' => 'test', 
            'author' => 'test',
            'deskripsi' => 'test',
            'website' => 'test'
        ]);

        \App\Models\Iklan::create([
            'gambar' => 'post-images/slider/7KreCw2gMKCn1nmywjXSUel3LEgvMw1qlMaB1tZW.png',
            'judul' => 'All new Sport',
            'harga' => '34000',
        ]);

    }
}
