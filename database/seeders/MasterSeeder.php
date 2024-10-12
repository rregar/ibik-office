<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Modules\Masters\Faculty;
use App\Models\Modules\Masters\Prodi;
use App\Models\Modules\Masters\Unit;
use App\Models\Modules\Masters\LetterType;
use App\Models\Modules\Masters\LetterClassification;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        Faculty::insert([
            ['name' => 'Fakultas Bisnis', 'created_at' => $now],
            ['name' => 'Fakultas Informatika & Pariwisata', 'created_at' => $now],
            ['name' => 'Fakultas Vokasi', 'created_at' => $now],
        ]);

        Prodi::insert([
            ['faculty_id' => 1, 'name' => 'S1 Akuntansi', 'created_at' => $now],
            ['faculty_id' => 1, 'name' => 'S1 Manajemen', 'created_at' => $now],
            ['faculty_id' => 1, 'name' => 'S1 Biokewirausahaan', 'created_at' => $now],
            ['faculty_id' => 2, 'name' => 'S1 Sistem Informasi', 'created_at' => $now],
            ['faculty_id' => 2, 'name' => 'S1 Teknologi Informasi', 'created_at' => $now],
            ['faculty_id' => 2, 'name' => 'S1 Pariwisata', 'created_at' => $now],
            ['faculty_id' => 3, 'name' => 'D3 Akuntansi Bisnis Digital', 'created_at' => $now],
            ['faculty_id' => 3, 'name' => 'D3 Perbankan & Keuangan Digital', 'created_at' => $now],
            ['faculty_id' => 3, 'name' => 'D3 Bisnis Digital', 'created_at' => $now],
        ]);

        Unit::insert([
            ['description' => null, 'name' => 'Rektor', 'created_at' => $now],
            ['description' => 'Bidang Akademik', 'name' => 'Wakil Rektor I', 'created_at' => $now],
            ['description' => 'Bidang Keuangan, Sumber Daya & Sistem Informasi', 'name' => 'Wakil Rektor II', 'created_at' => $now],
            ['description' => 'Bidang Kemahasiswaan', 'name' => 'Wakil Rektor III', 'created_at' => $now],
            ['description' => 'Fakultas Bisnis', 'name' => 'Dekan', 'created_at' => $now],
            ['description' => 'Fakultas Informatika & Pariwisata', 'name' => 'Dekan', 'created_at' => $now],
            ['description' => 'Vokasi', 'name' => 'Dekan', 'created_at' => $now],
            ['description' => 'Pascasarjana', 'name' => 'Dekan', 'created_at' => $now],
            ['description' => null, 'name' => 'BAUM', 'created_at' => $now],
            ['description' => null, 'name' => 'Manajemen Aset', 'created_at' => $now],
            ['description' => null, 'name' => 'HRD', 'created_at' => $now],
            ['description' => null, 'name' => 'Sekretariat', 'created_at' => $now],
            ['description' => null, 'name' => 'Marketing', 'created_at' => $now],
            ['description' => null, 'name' => 'IIT', 'created_at' => $now],
            ['description' => null, 'name' => 'BAAK', 'created_at' => $now],
            ['description' => null, 'name' => 'BAPSI', 'created_at' => $now],
            ['description' => null, 'name' => 'Keuangan', 'created_at' => $now],
            ['description' => null, 'name' => 'LPPM', 'created_at' => $now],
            ['description' => null, 'name' => 'Perpustakaan', 'created_at' => $now],
            ['description' => null, 'name' => 'CDC', 'created_at' => $now],
            ['description' => null, 'name' => 'Pojok BEI', 'created_at' => $now],
            ['description' => null, 'name' => 'PPM', 'created_at' => $now],
            ['description' => null, 'name' => 'PPA', 'created_at' => $now],
            ['description' => null, 'name' => 'BPN', 'created_at' => $now],
            ['description' => null, 'name' => 'Organisasi Mahasiswa', 'created_at' => $now],
            ['description' => null, 'name' => 'Labolatorium', 'created_at' => $now],
        ]);        

        LetterType::insert([
            ['name' => 'Rahasia', 'created_at' => $now],
            ['name' => 'Segera', 'created_at' => $now],
            ['name' => 'Penting', 'created_at' => $now],
            ['name' => 'Biasa', 'created_at' => $now],
        ]);

        LetterClassification::insert([
            ['name' => 'Akademik', 'created_at' => $now],
            ['name' => 'Keuangan', 'created_at' => $now],
            ['name' => 'Kemahasiswaan', 'created_at' => $now],
            ['name' => 'Umum', 'created_at' => $now],
        ]);
    }
}
