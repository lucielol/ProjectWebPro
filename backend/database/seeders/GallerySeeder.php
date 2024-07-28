<?php

namespace Database\Seeders;

use App\Models\GalleryModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sourceDir = base_path('image/gallery');
        $destinationDir = storage_path('app/public/image/gallery');

        if (!File::exists($destinationDir)) {
            File::makeDirectory($destinationDir, 0755, true);
        }

        $files = [
            ['source' => 'Jalan.jpg', 'alt' => 'Jalan Desa'],
            ['source' => 'Masjid.jpg', 'alt' => 'Masjid'],
            ['source' => 'Pemerintahan.jpg', 'alt' => 'Pusat Pemerintahan'],
            ['source' => 'Sekolah.jpeg', 'alt' => 'Sekolah'],
            ['source' => 'LapanganOlahraga.jpg', 'alt' => 'Lapangan Olahraga'],
            ['source' => 'Wisata.png', 'alt' => 'Wisata'],
        ];

        foreach ($files as $file) {
            $sourcePath = $sourceDir . '/' . $file['source'];
            $destinationPath = $destinationDir . '/' . $file['source'];

            if (file_exists($sourcePath)) {
                File::copy($sourcePath, $destinationPath);
            }

            GalleryModel::updateOrCreate(
                ['img' => $file['source']],
                ['alt' => $file['alt']]
            );
        }
    }
}