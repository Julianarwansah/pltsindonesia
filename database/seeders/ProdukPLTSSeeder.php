<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProdukPLTSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get category IDs
        $offGridId = DB::table('kategori_produk')->where('slug', 'plts-off-grid')->value('id');
        $onGridId = DB::table('kategori_produk')->where('slug', 'plts-on-grid')->value('id');

        $products = [
            [
                'kategori_id' => $offGridId,
                'nama_produk' => 'Pembangkit Listrik Tenaga Surya OFF Grid',
                'slug' => 'pembangkit-listrik-tenaga-surya-off-grid',
                'deskripsi_lengkap' => $this->getOffGridDescription(),
                'gambar_utama' => null,
                'meta_title' => 'Pembangkit Listrik Tenaga Surya OFF Grid - PLTS Mandiri',
                'meta_description' => 'Sistem PLTS Off Grid mandiri dengan baterai untuk kebutuhan listrik 24/7 tanpa PLN. Cocok untuk lokasi terpencil, villa, dan daerah tanpa akses PLN.',
                'meta_keywords' => 'plts off grid, pembangkit listrik tenaga surya, solar panel off grid, listrik mandiri, baterai solar',
                'og_image' => null,
                'canonical_url' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kategori_id' => $onGridId,
                'nama_produk' => 'Paket PLTS On Grid Industrial',
                'slug' => 'paket-plts-on-grid-industrial',
                'deskripsi_lengkap' => $this->getOnGridIndustrialDescription(),
                'gambar_utama' => null,
                'meta_title' => 'Paket PLTS On Grid Industrial - Solusi Energi Pabrik & Industri',
                'meta_description' => 'Sistem PLTS On Grid untuk kebutuhan industri skala besar. Hemat biaya listrik pabrik, gedung komersial, dan fasilitas bisnis dengan net metering.',
                'meta_keywords' => 'plts on grid industrial, solar panel pabrik, plts industri, hemat listrik pabrik, net metering industrial',
                'og_image' => null,
                'canonical_url' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kategori_id' => $onGridId,
                'nama_produk' => 'Paket PLTS On Grid Residential',
                'slug' => 'paket-plts-on-grid-residential',
                'deskripsi_lengkap' => $this->getOnGridResidentialDescription(),
                'gambar_utama' => null,
                'meta_title' => 'Paket PLTS On Grid Residential - Panel Surya Rumah Tinggal',
                'meta_description' => 'Sistem PLTS On Grid untuk rumah tinggal. Hemat tagihan listrik PLN hingga 100% dengan net metering. Tanpa baterai, investasi terjangkau.',
                'meta_keywords' => 'plts on grid residential, solar panel rumah, plts rumah tinggal, hemat listrik rumah, net metering',
                'og_image' => null,
                'canonical_url' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($products as $product) {
            DB::table('produk')->updateOrInsert(
                ['slug' => $product['slug']],
                $product
            );
        }
    }

    private function getOffGridDescription()
    {
        return '
<div class="prose max-w-none">
    <h2>Spesifikasi Produk</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Spesifikasi</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr><td class="border border-gray-300 px-4 py-2">1</td><td class="border border-gray-300 px-4 py-2">Type 0</td><td class="border border-gray-300 px-4 py-2">1000 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">2</td><td class="border border-gray-300 px-4 py-2">Luasan 0</td><td class="border border-gray-300 px-4 py-2">± 8 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">3</td><td class="border border-gray-300 px-4 py-2">Energy production 0</td><td class="border border-gray-300 px-4 py-2">± 1.050 kWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">4</td><td class="border border-gray-300 px-4 py-2">Type 1</td><td class="border border-gray-300 px-4 py-2">1500 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">5</td><td class="border border-gray-300 px-4 py-2">Luasan 1</td><td class="border border-gray-300 px-4 py-2">± 10 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">6</td><td class="border border-gray-300 px-4 py-2">Energy production 1</td><td class="border border-gray-300 px-4 py-2">± 2.050 kWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">7</td><td class="border border-gray-300 px-4 py-2">Type 2</td><td class="border border-gray-300 px-4 py-2">3000 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">8</td><td class="border border-gray-300 px-4 py-2">Luasan 2</td><td class="border border-gray-300 px-4 py-2">± 20 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">9</td><td class="border border-gray-300 px-4 py-2">Energy production 2</td><td class="border border-gray-300 px-4 py-2">± 4.101 kWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">10</td><td class="border border-gray-300 px-4 py-2">Type 3</td><td class="border border-gray-300 px-4 py-2">5000 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">11</td><td class="border border-gray-300 px-4 py-2">Luasan 3</td><td class="border border-gray-300 px-4 py-2">± 36 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">12</td><td class="border border-gray-300 px-4 py-2">Energy production 3</td><td class="border border-gray-300 px-4 py-2">± 6.9 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">13</td><td class="border border-gray-300 px-4 py-2">Type 4</td><td class="border border-gray-300 px-4 py-2">10 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">14</td><td class="border border-gray-300 px-4 py-2">Luasan 4</td><td class="border border-gray-300 px-4 py-2">± 82 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">15</td><td class="border border-gray-300 px-4 py-2">Energy production 4</td><td class="border border-gray-300 px-4 py-2">± 13.80 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">16</td><td class="border border-gray-300 px-4 py-2">Type 5</td><td class="border border-gray-300 px-4 py-2">20 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">17</td><td class="border border-gray-300 px-4 py-2">Luasan 5</td><td class="border border-gray-300 px-4 py-2">± 160 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">18</td><td class="border border-gray-300 px-4 py-2">Energy production 5</td><td class="border border-gray-300 px-4 py-2">± 27.30 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">19</td><td class="border border-gray-300 px-4 py-2">Type 6</td><td class="border border-gray-300 px-4 py-2">30 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">20</td><td class="border border-gray-300 px-4 py-2">Luasan 6</td><td class="border border-gray-300 px-4 py-2">± 240 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">21</td><td class="border border-gray-300 px-4 py-2">Energy production 6</td><td class="border border-gray-300 px-4 py-2">± 41.04 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">22</td><td class="border border-gray-300 px-4 py-2">Type 7</td><td class="border border-gray-300 px-4 py-2">50 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">23</td><td class="border border-gray-300 px-4 py-2">Luasan 7</td><td class="border border-gray-300 px-4 py-2">± 420 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">24</td><td class="border border-gray-300 px-4 py-2">Energy production 7</td><td class="border border-gray-300 px-4 py-2">± 68.40 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">25</td><td class="border border-gray-300 px-4 py-2">Type 8</td><td class="border border-gray-300 px-4 py-2">100 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">26</td><td class="border border-gray-300 px-4 py-2">Luasan 8</td><td class="border border-gray-300 px-4 py-2">± 800 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">27</td><td class="border border-gray-300 px-4 py-2">Energy production 8</td><td class="border border-gray-300 px-4 py-2">± 138.00 MWh</td></tr>
            </tbody>
        </table>
    </div>
    <p class="text-sm text-gray-600 italic mt-2">*Spesifikasi dapat berubah sesuai dengan ketersediaan dan perkembangan teknologi</p>

    <h2 class="mt-8">Deskripsi</h2>
    <p>Kategori Paket PLTS Off Grid menghadirkan sistem pembangkit listrik tenaga surya yang bekerja sepenuhnya tanpa koneksi ke jaringan PLN. Dengan dukungan baterai sebagai penyimpanan energi, sistem ini mampu menyediakan listrik 24 jam MESKIPUN berada di lokasi terpencil atau daerah yang sering mengalami pemadaman.</p>
    
    <p>Paket ini ideal untuk rumah pedesaan, kebun, villa, peternakan, proyek lapangan, hingga kebutuhan cadangan listrik mandiri. Setiap paket dirancang lengkap—mulai dari panel surya, baterai, inverter, hingga perangkat pendukung lainnya—sehingga lebih praktis, efisien, dan siap digunakan.</p>
    
    <p>Dengan teknologi modern, daya tahan tinggi, dan kualitas yang terjamin, PLTS Off Grid menjadi solusi terbaik bagi pengguna yang menginginkan kemandirian energi sepenuhnya tanpa bergantung pada PLN.</p>
</div>';
    }

    private function getOnGridIndustrialDescription()
    {
        return '
<div class="prose max-w-none">
    <h2>Spesifikasi Produk</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Spesifikasi</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr><td class="border border-gray-300 px-4 py-2">1</td><td class="border border-gray-300 px-4 py-2">Type 0</td><td class="border border-gray-300 px-4 py-2">10 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">2</td><td class="border border-gray-300 px-4 py-2">Luasan 0</td><td class="border border-gray-300 px-4 py-2">± 82 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">3</td><td class="border border-gray-300 px-4 py-2">Energy production 0</td><td class="border border-gray-300 px-4 py-2">± 13.80 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">4</td><td class="border border-gray-300 px-4 py-2">Type 1</td><td class="border border-gray-300 px-4 py-2">20 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">5</td><td class="border border-gray-300 px-4 py-2">Luasan 1</td><td class="border border-gray-300 px-4 py-2">± 160 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">6</td><td class="border border-gray-300 px-4 py-2">Energy production 1</td><td class="border border-gray-300 px-4 py-2">± 27.30 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">7</td><td class="border border-gray-300 px-4 py-2">Type 2</td><td class="border border-gray-300 px-4 py-2">30 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">8</td><td class="border border-gray-300 px-4 py-2">Luasan 2</td><td class="border border-gray-300 px-4 py-2">± 240 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">9</td><td class="border border-gray-300 px-4 py-2">Energy production 2</td><td class="border border-gray-300 px-4 py-2">± 41.04 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">10</td><td class="border border-gray-300 px-4 py-2">Type 3</td><td class="border border-gray-300 px-4 py-2">50 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">11</td><td class="border border-gray-300 px-4 py-2">Luasan 3</td><td class="border border-gray-300 px-4 py-2">± 420 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">12</td><td class="border border-gray-300 px-4 py-2">Energy production 3</td><td class="border border-gray-300 px-4 py-2">± 68.40 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">13</td><td class="border border-gray-300 px-4 py-2">Type 4</td><td class="border border-gray-300 px-4 py-2">100 kWp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">14</td><td class="border border-gray-300 px-4 py-2">Luasan 4</td><td class="border border-gray-300 px-4 py-2">± 800 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">15</td><td class="border border-gray-300 px-4 py-2">Energy production 4</td><td class="border border-gray-300 px-4 py-2">± 138.00 MWh</td></tr>
            </tbody>
        </table>
    </div>
    <p class="text-sm text-gray-600 italic mt-2">*Spesifikasi dapat berubah sesuai dengan ketersediaan dan perkembangan teknologi</p>

    <h2 class="mt-8">Deskripsi</h2>
    <p>Paket PLTS On Grid Industrial adalah solusi energi surya yang dirancang khusus untuk kebutuhan listrik skala besar seperti pabrik, industri, gedung komersial, dan fasilitas bisnis lainnya. Sistem ini memanfaatkan energi matahari untuk menghasilkan listrik yang langsung digunakan untuk operasional, sehingga mampu mengurangi ketergantungan pada PLN dan menekan biaya listrik bulanan secara signifikan.</p>
    
    <p>Dengan kapasitas yang besar serta teknologi inverter on grid berstandar internasional, sistem PLTS ini mampu menghasilkan energi stabil yang dapat bekerja paralel dengan PLN. Ketika produksi energi melebihi kebutuhan, kelebihannya dapat diekspor kembali ke jaringan listrik (net metering) sesuai regulasi.</p>
    
    <p>Instalasi dilakukan oleh tim profesional bersertifikasi, dilengkapi panel surya berkualitas tinggi, struktur mounting kuat, serta monitoring real-time. Cocok untuk industri yang ingin menekan biaya operasional sekaligus mendukung energi hijau dan keberlanjutan.</p>
</div>';
    }

    private function getOnGridResidentialDescription()
    {
        return '
<div class="prose max-w-none">
    <h2>Spesifikasi Produk</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Spesifikasi</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr><td class="border border-gray-300 px-4 py-2">1</td><td class="border border-gray-300 px-4 py-2">Type 0</td><td class="border border-gray-300 px-4 py-2">1000 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">2</td><td class="border border-gray-300 px-4 py-2">Luasan 0</td><td class="border border-gray-300 px-4 py-2">± 8 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">3</td><td class="border border-gray-300 px-4 py-2">Solar panel 0</td><td class="border border-gray-300 px-4 py-2">4 Panel</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">4</td><td class="border border-gray-300 px-4 py-2">Energy production 0</td><td class="border border-gray-300 px-4 py-2">± 1.050 kWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">5</td><td class="border border-gray-300 px-4 py-2">Type 1</td><td class="border border-gray-300 px-4 py-2">1500 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">6</td><td class="border border-gray-300 px-4 py-2">Luasan 1</td><td class="border border-gray-300 px-4 py-2">± 10 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">7</td><td class="border border-gray-300 px-4 py-2">Solar panel 1</td><td class="border border-gray-300 px-4 py-2">5-6 Panel</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">8</td><td class="border border-gray-300 px-4 py-2">Energy production 1</td><td class="border border-gray-300 px-4 py-2">± 2.050 kWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">9</td><td class="border border-gray-300 px-4 py-2">Type 2</td><td class="border border-gray-300 px-4 py-2">3000 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">10</td><td class="border border-gray-300 px-4 py-2">Luasan 2</td><td class="border border-gray-300 px-4 py-2">± 20 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">11</td><td class="border border-gray-300 px-4 py-2">Solar panel 2</td><td class="border border-gray-300 px-4 py-2">10-12 Panel</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">12</td><td class="border border-gray-300 px-4 py-2">Energy production 2</td><td class="border border-gray-300 px-4 py-2">± 4.101 kWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">13</td><td class="border border-gray-300 px-4 py-2">Type 3</td><td class="border border-gray-300 px-4 py-2">5000 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">14</td><td class="border border-gray-300 px-4 py-2">Luasan 3</td><td class="border border-gray-300 px-4 py-2">± 36 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">15</td><td class="border border-gray-300 px-4 py-2">Solar panel 3</td><td class="border border-gray-300 px-4 py-2">18-20 Panel</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">16</td><td class="border border-gray-300 px-4 py-2">Energy production 3</td><td class="border border-gray-300 px-4 py-2">± 6.90 MWh</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">17</td><td class="border border-gray-300 px-4 py-2">Type 4</td><td class="border border-gray-300 px-4 py-2">10000 Wp</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">18</td><td class="border border-gray-300 px-4 py-2">Luasan 4</td><td class="border border-gray-300 px-4 py-2">± 72 m²</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">19</td><td class="border border-gray-300 px-4 py-2">Solar panel 4</td><td class="border border-gray-300 px-4 py-2">34-39 Panel</td></tr>
                <tr><td class="border border-gray-300 px-4 py-2">20</td><td class="border border-gray-300 px-4 py-2">Energy production 4</td><td class="border border-gray-300 px-4 py-2">± 13.80 MWh</td></tr>
            </tbody>
        </table>
    </div>
    <p class="text-sm text-gray-600 italic mt-2">*Spesifikasi dapat berubah sesuai dengan ketersediaan dan perkembangan teknologi</p>

    <h2 class="mt-8">Deskripsi</h2>
    <p>Paket PLTS On Grid Residential adalah solusi hemat energi berbasis tenaga surya untuk rumah tinggal yang ingin mengurangi tagihan listrik PLN tanpa perlu baterai. Dengan sistem ini, energi matahari dikonversi menjadi listrik dan langsung digunakan untuk kebutuhan rumah tangga. Kelebihannya, ketika produksi listrik berlebih, energi akan otomatis diekspor ke jaringan PLN melalui skema net metering, sehingga menghasilkan pengurangan tagihan listrik bulanan.</p>
    
    <p>Sistem ini dirancang dengan panel surya berkualitas tinggi, inverter on-grid standar internasional, serta instalasi yang aman dan bersertifikasi. Cocok untuk rumah modern yang ingin lebih efisien, ramah lingkungan, dan mendukung energi hijau.</p>
</div>';
    }
}
