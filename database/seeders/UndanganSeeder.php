<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UndanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('undangans')->insert([
            'name' => 'Modern Minimalisiqie',
            'description' => 'Modern Minimalisique adalah undangan yang dibuat dengan desain minimalis dan modern, cocok untuk kamu yang ingin mengadakan acara pernikahan dengan tema minimalis dan modern, dengan harga yang terjangkau.',
            'price' => 100000,
            'slug' => 'undangan1',
            'image' => 'thumb-u1-1.png',
            'image2' => 'thumb-u1-2.png',
            'image3' => 'thumb-u1-3.png',
            'image4' => 'thumb-u1-4.png',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);

        DB::table('undangans')->insert([
            'name' => 'BUAT BIKIN TEMPLATE',
            'description' => 'edit file undangan/undangan-wip.blade.php untuk merubah isi dari template ini, kemudian jika sudah selesai copy isi file ke file blade baru di folder undangan.',
            'price' => 0,
            'slug' => 'undangan-wip',
            'image' => 'none.png',
            'image2' => 'none.png',
            'image3' => 'none.png',
            'image4' => 'none.png',
            'paket' => 'Work In Progress',
            'kategori' => 'Wedding'
        ]);

        DB::table('undangans')->insert([
            'name' => 'Elegante',
            'description' => 'Elegante adalah undangan yang dibuat dengan desain elegan dan mewah, cocok untuk kamu yang ingin mengadakan acara pernikahan dengan tema elegan dan mewah, dengan harga yang terjangkau.',
            'price' => 100000,
            'slug' => 'undangan2',
            'image' => 'thumb-u2-1.png',
            'image2' => 'thumb-u2-2.png',
            'image3' => 'thumb-u2-3.png',
            'image4' => 'thumb-u2-4.png',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);
        DB::table('undangans')->insert([
            'name' => 'Dummy',
            'description' => 'Dummy adalah undangan yang dibuat dengan desain elegan dan mewah, cocok untuk kamu yang ingin mengadakan acara pernikahan dengan tema elegan dan mewah, dengan harga yang terjangkau.',
            'price' => 100000,
            'slug' => 'undangan2',
            'image' => 'thumb-u2-1.png',
            'image2' => 'thumb-u2-2.png',
            'image3' => 'thumb-u2-3.png',
            'image4' => 'thumb-u2-4.png',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);
        DB::table('undangans')->insert([
            'name' => 'Dummy2',
            'description' => 'Dummy adalah undangan yang dibuat dengan desain elegan dan mewah, cocok untuk kamu yang ingin mengadakan acara pernikahan dengan tema elegan dan mewah, dengan harga yang terjangkau.',
            'price' => 100000,
            'slug' => 'undangan1',
            'image' => 'thumb-u1-1.png',
            'image2' => 'thumb-u1-2.png',
            'image3' => 'thumb-u1-3.png',
            'image4' => 'thumb-u1-4.png',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);
    }
}
