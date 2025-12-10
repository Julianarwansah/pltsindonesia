<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'nama_kategori' => 'PLTS On-Grid',
                'slug' => 'plts-on-grid',
                'deskripsi' => 'Sistem panel surya yang terhubung langsung ke jaringan PLN. Hemat biaya listrik dan bisa ekspor kelebihan daya ke PLN.',
                'meta_title' => 'PLTS On-Grid - Hemat Listrik dengan Solar Panel Terhubung PLN',
                'meta_description' => 'Solusi PLTS On-Grid terbaik untuk rumah dan bisnis. Hemat tagihan listrik hingga 100% dengan sistem terhubung PLN tanpa baterai.',
                'meta_keywords' => 'plts on grid, panel surya on grid, solar panel pln, hemat listrik, net metering',
                'gambar' => null, // Placeholder or path to image if available
                'urutan' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_kategori' => 'PLTS Off-Grid',
                'slug' => 'plts-off-grid',
                'deskripsi' => 'Sistem mandiri yang tidak terhubung ke PLN. Cocok untuk lokasi terpencil atau ingin sepenuhnya independen.',
                'meta_title' => 'PLTS Off-Grid - Listrik Mandiri Tanpa PLN',
                'meta_description' => 'Sistem PLTS Off-Grid mandiri dengan baterai. Solusi listrik untuk daerah terpencil, pulau, atau villa tanpa akses PLN.',
                'meta_keywords' => 'plts off grid, panel surya mandiri, listrik tenaga surya baterai, solar panel daerah terpencil',
                'gambar' => null,
                'urutan' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_kategori' => 'PLTS Hybrid',
                'slug' => 'plts-hybrid',
                'deskripsi' => 'Kombinasi terbaik dari On-Grid dan Off-Grid. Terhubung PLN dengan backup baterai untuk keandalan maksimal.',
                'meta_title' => 'PLTS Hybrid - Listrik Hemat & Anti Padam',
                'meta_description' => 'Sistem PLTS Hybrid menggabungkan koneksi PLN dan backup baterai. Efisiensi tinggi dan tetap nyala saat mati lampu.',
                'meta_keywords' => 'plts hybrid, panel surya hybrid, solar panel backup baterai, listrik anti padam',
                'gambar' => null,
                'urutan' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($categories as $category) {
            DB::table('kategori_produk')->updateOrInsert(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
