<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $adminUser = \App\Models\User::first();

        Article::updateOrCreate([
            'title' => 'Materi Obat Aman',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/MateriObatAman.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Modul Farmakovigilans Tingkat Dasar',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/ModulFarmakovigilansTingkatDasar.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Modul Farmakovigilans Tingkat Menengah',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/ModulFarmakovigilansTingkatMenengah.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'MADOL DAN SEJENISNYA',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/MADOLDANSEJENISNYA.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Tips Konsumen Cerdas Memilih Obat Aman',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/TipsKonsumenCerdasMemilihObatAman.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'KIE tentang Sadar Obat Aman',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/KIEtentangSadarObatAman.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Lindungi Diri dan Keluarga dengan Cerdas Memilih Obat',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/LindungiDiridanKeluargadenganCerdasMemilihObat.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Konsumen Cerdas, Kenali Obat dan Penyalahgunaannya',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Obat/KonsumenCerdas,KenaliObatdanPenyalahgunaannya.pdf', // path relatif di storage/app/public
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);


        // Artikel untuk kategori Pangan
        Article::updateOrCreate([
            'title' => 'Implementasi Perizinan Berusaha OSS Berbasis Risiko',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Implementasi Perizinan Berusaha OSS Berbasis Risiko.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Kiat Memilih Pangan Jajanan Anak Sekolah',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Kiat Memilih Pangan Jajanan Anak Sekolah.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Izin Penerapan CPPOB',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Izin Penerapan CPPOB.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Buku Inovasi Mei 2023',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Buku Inovasi Mei 2023.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Buku Inovasi September 2024',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Buku Inovasi September 2024.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Registrasi Produk',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Registrasi Produk.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Pemenuhan Komitmen',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Pemenuhan Komitmen .pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Label Pangan Olahan',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Label Pangan Olahan.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Simulasi Akun ereg RBA',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Simulasi Akun ereg RBA.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Pedoman Mitigasi Risiko Penggunaan Bahan Penolong Nitrogen Cair pada Pangan Olahan',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Pangan/Pedoman Mitigasi Risiko Penggunaan Bahan Penolong Nitrogen Cair pada Pangan Olahan.pdf', // path relatif di storage/app/public
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        // Artikel untuk kategori Kosmetik
        Article::updateOrCreate([
            'title' => 'Kategori Kosmetik',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Kosmetik/Kategori Kosmetik.pdf', // path relatif di storage/app/public
            'category_id' => 3,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Penerapan CPKB di Industri Kosmetik',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Kosmetik/Penerapan CPKB di Industri Kosmetik.pdf', // path relatif di storage/app/public
            'category_id' => 3,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Tata Cara Pengurusan Perizinan Fasilitas Kosmetik ok',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Kosmetik/Tata Cara Pengurusan Perizinan Fasilitas Kosmetik ok.pdf', // path relatif di storage/app/public
            'category_id' => 3,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Persyaratan Teknis Bahan Kosmetika',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Kosmetik/Persyaratan Teknis Bahan Kosmetika.pdf', // path relatif di storage/app/public
            'category_id' => 3,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Regulasi Tata Cara Notifikasi Kosmetik',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Kosmetik/Regulasi Tata Cara Notifikasi Kosmetik.pdf', // path relatif di storage/app/public
            'category_id' => 3,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Tata Cara Pengajuan Notifikasi Kosmetik',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/Kosmetik/Tata Cara Pengajuan Notifikasi Kosmetika.pdf', // path relatif di storage/app/public
            'category_id' => 3,
            'user_id' => $adminUser->id,
        ]);

        // Artikel untuk kategori ObatTradisional
        Article::updateOrCreate([
            'title' => 'HASIL BAHAN BAKU DAN PENGAWASAN MUTU',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/HASIL BAHAN BAKU DAN PENGAWASAN MUTU.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Higiene, Sanitasi dan Dokumentasi OBA_Dit PMPU OTSKK',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Higiene, Sanitasi dan Dokumentasi OBA_Dit PMPU OTSKK.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Materi Daftar Ulang',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Materi Daftar Ulang.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Materi Dr. Apt. Kintoko, M.Sc_RASIONALISASI KOMPOSISI OBAT BAHAN ALAMI',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Materi Dr. Apt. Kintoko, M.Sc_RASIONALISASI KOMPOSISI OBAT BAHAN ALAMI.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Materi Dr.rer.nat.  Yosi Bayu Murti, MSi, Apt_Teknologi Formulasi Obat Bahan Alam',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Materi Dr.rer.nat.  Yosi Bayu Murti, MSi, Apt_Teknologi Formulasi Obat Bahan Alam.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Materi Dra. Kristiana Haryati, Apt., M.K.M_Regulasi dan Ketentuan Formulasi Obat Bahan Alam',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Materi Dra. Kristiana Haryati, Apt., M.K.M_Regulasi dan Ketentuan Formulasi Obat Bahan Alam.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Materi Permasalahan dan Solusi Registrasi OT OK',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Materi Permasalahan dan Solusi Registrasi OT OK.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Materi Persyaratan Mutu OT OK dan',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Materi Persyaratan Mutu OT OK dan.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Monitoring dan Evaluasi Data Pendampingan OTOK UMKM',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Monitoring dan Evaluasi Data Pendampingan OTOK UMKM.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Overview Registrasi OBA dan OK',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Overview Registrasi OBA dan OK.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Pengenalan sistem Asrot Pemanfaatan akun fasilitator dan pengenalan pendaftaran akun perusahaan',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Pengenalan sistem Asrot Pemanfaatan akun fasilitator dan pengenalan pendaftaran akun perusahaan.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Peraturan _ Proses Registrasi Produk OTSK',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Peraturan _ Proses Registrasi Produk OTSK.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Prinsip Denah UMKM OBA Bogor',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Prinsip Denah UMKM OBA Bogor.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Registrasi Highrisk OTOKSK',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Registrasi Highrisk OTOKSK.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Registrasi Khusus Ekspor',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Registrasi Khusus Ekspor.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Registrasi OT Lowrisk',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Registrasi OT Lowrisk.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Registrasi OTSK Komposisi Tertentu',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Registrasi OTSK Komposisi Tertentu.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Registrasi Variasi',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Registrasi Variasi.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Sertifikasi CPOTB Bertahap terintegrasi OSS RBA Bogor',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Sertifikasi CPOTB Bertahap terintegrasi OSS RBA Bogor.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Tata Cara Registrasi Iklan OTSK',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Tata Cara Registrasi Iklan OTSK.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::updateOrCreate([
            'title' => 'Tata Cara Registrasi Produk OTSK',
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/ObatTradisional/Tata Cara Registrasi Produk OTSK.pdf', // path relatif di storage/app/public
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        // Artikel untuk kategori SuplemenKesehatan

        // Artikel untuk kategori MateriFKP
        Article::create([
            'title' => 'Paparan - ZI',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori MateriFKP.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/MateriFKP/Paparan - ZI.pdf',
            'category_id' => 6,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Paparan Pembukaan FKP Bogor',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori MateriFKP.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/MateriFKP/Paparan Pembukaan FKP Bogor.pdf',
            'category_id' => 6,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Pengembangan Pelayanan Publik BPOM',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori MateriFKP.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/MateriFKP/Pengembangan Pelayanan Publik BPOM.pdf',
            'category_id' => 6,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'PPT FKP Balai POM di Bogor',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori MateriFKP.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/MateriFKP/PPT FKP Balai POM di Bogor.pdf',
            'category_id' => 6,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'KKN',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori MateriFKP.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'pdf' => 'articles-pdf/MateriFKP/KKN.pdf',
            'category_id' => 6,
            'user_id' => $adminUser->id,
        ]);
    }
}
