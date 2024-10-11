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
            ['name' => 'Rektor', 'created_at' => $now],
            ['name' => 'Wakil Rektor I', 'created_at' => $now],
            ['name' => 'Wakil Rektor II', 'created_at' => $now],
            ['name' => 'Wakil Rektor III', 'created_at' => $now],
            ['name' => 'Dekan', 'created_at' => $now],
            ['name' => 'BAUM', 'created_at' => $now],
            ['name' => 'Manajemen Aset', 'created_at' => $now],
            ['name' => 'HRD', 'created_at' => $now],
            ['name' => 'Sekretariat', 'created_at' => $now],
            ['name' => 'Marketing', 'created_at' => $now],
            ['name' => 'IIT', 'created_at' => $now],
            ['name' => 'BAAK', 'created_at' => $now],
            ['name' => 'BAPSI', 'created_at' => $now],
            ['name' => 'Keuangan', 'created_at' => $now],
            ['name' => 'LPPM', 'created_at' => $now],
            ['name' => 'Perpustakaan', 'created_at' => $now],
            ['name' => 'CDC', 'created_at' => $now],
            ['name' => 'Pojok BEI', 'created_at' => $now],
            ['name' => 'PPM', 'created_at' => $now],
            ['name' => 'PPA', 'created_at' => $now],
            ['name' => 'BPN', 'created_at' => $now],
            ['name' => 'Organisasi Mahasiswa', 'created_at' => $now],
            ['name' => 'Labolatorium', 'created_at' => $now],
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
