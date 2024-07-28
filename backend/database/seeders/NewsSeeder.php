<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::insert([
            [
                'id' => (string) Str::uuid(),
                'title' => 'Jalan Desa',
                'content' => 'Selain itu, jalan desa juga mempermudah distribusi hasil pertanian, memfasilitasi mobilitas penduduk, dan mendukung kegiatan ekonomi lokal. Dengan adanya jalan desa yang baik, kualitas hidup masyarakat desa dapat meningkat, karena mereka memiliki akses yang lebih mudah ke fasilitas kesehatan, pendidikan, dan pasar. Oleh karena itu, pemeliharaan dan perbaikan jalan desa menjadi prioritas penting untuk pembangunan desa yang berkelanjutan.'
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Pusat Pemerintahan Desa',
                'content' => 'Pusat pemerintahan desa merupakan tempat berkumpulnya pemerintahan desa dan masyarakat dalam melaksanakan berbagai kegiatan seperti rapat, musyawarah, dan sebagainya. Tempat ini juga berfungsi sebagai pusat informasi dan koordinasi bagi warga desa, di mana berbagai program pembangunan dan pelayanan publik direncanakan dan diimplementasikan.'
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Sekolah',
                'content' => 'Sekolah merupakan sarana pendidikan yang penting bagi masyarakat desa. Sekolah di desa berfungsi untuk memberikan pendidikan dan meningkatkan taraf hidup masyarakat desa. Dengan adanya sekolah, anak-anak desa mendapatkan kesempatan untuk belajar berbagai ilmu pengetahuan yang dapat membantu mereka dalam mengembangkan potensi diri.'
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Masjid',
                'content' => 'Masjid merupakan tempat ibadah yang penting bagi masyarakat desa. Masjid di desa berfungsi sebagai tempat berkumpulnya masyarakat dalam melaksanakan ibadah. Selain itu, masjid juga sering menjadi pusat kegiatan sosial dan pendidikan. Di dalam masjid, anak-anak dan orang dewasa bisa belajar mengaji, mendengarkan ceramah agama, dan mengikuti berbagai program keagamaan yang bermanfaat.'
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Lapangan Olahraga',
                'content' => 'Dengan adanya lapangan olahraga, masyarakat desa memiliki tempat untuk beraktivitas fisik, menjaga kesehatan, serta meningkatkan keterampilan dalam berbagai cabang olahraga. Selain itu, lapangan olahraga juga menjadi pusat kegiatan sosial dan budaya bagi masyarakat desa, di mana mereka dapat berkumpul, berinteraksi, dan mempererat tali persaudaraan melalui berbagai kegiatan yang diadakan di lapangan tersebut.'
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Wisata',
                'content' => 'Desa Dompyong Kulon merupakan destinasi wisata yang menawarkan pesona alam yang indah dan kehidupan pedesaan yang autentik di Kabupaten Cirebon. Wisatawan dapat menikmati kegiatan seperti berjalan-jalan santai menikmati pemandangan sawah hijau, mengunjungi peternakan tradisional, dan berinteraksi dengan penduduk setempat untuk memahami kehidupan sehari-hari di pedesaan.Selain itu, Desa Dompyong Kulon juga menawarkan berbagai produk lokal yang khas, seperti kerajinan tangan dan makanan tradisional. Para pengunjung dapat berbelanja sebagai oleh-oleh atau bahkan belajar langsung cara membuatnya dari para pengrajin lokal.'
            ]
        ]);
    }
}
