<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guru')->insert([
            
            array(
                'image' =>'/img/org4.png',
                'nama' => 'Alli',
                'nama2' => 'ALLI',
                'mapel' => 'Matematika',
                'mapel2' => 'Aljabar',
                'mapel3' => 'Aritmatika',
                'mapel4' => 'Matematika lanjutan',
                'mapel5' => 'Kulkulus',
                'intro' => 'Sudah berpengalaman mengajar camp buat kelas ...',
                'intro2' => 'Sudah berpengalaman mengajar camp buat kelas UTBK, Kedinasan, CPNS, dan TPB ITB.',
                'meet' => 'Melalui aplikasi Online',
                'tentang' => 'Saya adalah mahasiswa pengajaran matematika ITB yang sudah berkecimpung di dunia perbimbelan cukup lama. Saya memiliki bahan ajar yang cukup banyak yang sayangnya hanya digunakan dan ditujukan kesedikit siswa karena beberapa waktu lalu sempat vakum untuk mengejar perkuliahan. Namun sekarang saya memiliki banyak waktu luang untuk kembali mengajar. Yang bisa saya janjikan: ketepatan waktu, profesionalitas yang tinggi, integritas, dan kemampuan mengajar yang saya yakini siswa paham apa yang saya maksud karena teknik mengajar saya yang berorientasi ke siswa.',
                'tentang_2' => 'Artinya saya akan mengajar mulai dari mana pengetahuan siswa saya saat ini. Agar dia mengerti yang saya ajarkan.',
                'tentang_3' => 'Teknik mengajar saya lebih berorientasi pada siswa. Saya akan mengajar materi yang dibutuhkan siswa. Artinya saya akan mencari tahu kemampuan siswa sudah sejauh mana, dan apa yang perlu diketahui oleh siswa untuk menambah pengetahuannya di dalam subjeck yang dia butuhkan untuk mengejar targetnya.',
                'tentang_4' => 'Saya bisa mengajar berbagai tingkatan, berbekal pengalaman saya mengajar untuk sekolah kedinasan, anak yang sedang berjuang di UTBK, dan siswa CPNS di beberapa bimbel besar sebagai pengajar tetap maupun freelance.',
                'tarif' => 'Rp75.000',
                'tarif2' => 'Rp75.000/jam',
                'tarif3' => '5 jam: Rp375.000',
                'tarif4' => '10 jam: Rp750.000',
                'tarif5' => 'Rp75.000',
                'waktu' => '8 jam',
                'jumlah_murid' => '50',
                'sd' => '',
                'smp' => '',
                'sma' => 'Sekolah Menengah Atas (SMA) Kelas XII.Sekolah Menengah Kejuruan (SMK). Dan Lainnya',
              
            ),


            array(
                'image' =>'/img/org1.png',
                'nama' => 'Adiarja',
                'nama2' => 'ADIARJA',
                'mapel' => 'Bahasa Inggris',
                'mapel2' => '',
                'mapel3' => '',
                'mapel4' => '',
                'mapel5' => '',
                'intro' => 'Belajar Bahasa Inggris
                menjadi lebih mudah,
                nyaman dan ...',
                'intro2' => 'Belajar Bahasa Inggris
                menjadi lebih mudah,
                nyaman dan menyenangkan
                bersama mentor 12 tahun
                pengalaman.',
                'meet' => 'Melalui aplikasi Zoom',
                'tentang' => 'Mau belajar bahasa Inggris? Ayo belajar bareng bersama saya~
                Gak ada kata terlambat untuk belajar bahasa inggris.',
                'tentang_2' => 'Saya sudah memeberikan materi bahasa inggris selama 2
                tahun. Pengalaman yang saya miliki pun hanya dari pelajaran
                bahasa inggris disekolah saya dulu yang sekarang saya menjadi
                guru bahasa inggris di SMK Raden Umar Said Kudus.',
                'tentang_3' => ' Sampai saat ini saya sudah mengajar beberapa anak baik
                secara privat maupun secara group.',
                'tentang_4' => '   Saya mengedepankan hubungan intrapersonal yang baik
                antara tutor dan pelajar sehingga pelajar memiliki kepercayaan
                diri untuk belajar.',
                'tarif' => 'Rp120.000',
                'tarif2' => 'Rp120.000/jam',
                'tarif3' => '5 jam: Rp575.000',
                'tarif4' => '10 jam: Rp1.150.000',
                'tarif5' => 'Rp75.000',
                'waktu' => '6 jam',
                'jumlah_murid' => '21',
                'sd' => 'Sekolah Dasar', 
                'smp' => 'Sekolah Menengah Pertama',
                'sma' => 'Sekolah Menengah Atas',
            ),

         
            

            array(
                'image' =>'/img/org2.png',
                'nama' => 'Jessica',
                'nama2' => 'JESSICA',
                'mapel' => 'Bahasa Jepang',
                'mapel2' => 'Pemahaman tertulis - Bahasa Jepang',
                'mapel3' => 'Pemahaman lisan - Bahasa Jepang',
                'mapel4' => '',
                'mapel5' => '',
                'intro' => 'Belajar Bahasa Jepang bisa dilakukan dengan cara ...',
                'intro2' => 'Belajar Bahasa Jepang bisa dilakukan dengan cara yang menyenangkan jika kamu menemukan orang yang tepat.',
                'meet' => 'Melalui aplikasi Online',
                'tentang' => 'Saya adalah alumni Prodi Pendidikan Bahasa Jepang Universitas Negeri Semarang yang menempuh pendidikan S1 hanya dengan 7 semester.
                Pernah mengajar di salah satu SMA Negeri di Semarang. Selain di superprof saya juga menjadi tentor bahasa Jepang di Hi bahasa, universitar123 dan Teman Pengajar. Saya bekerja sebagai Staff selain itu saya juga pernah bekerja sebagai staff Administrasi dan Pengajar di salah satu LPK Bahasa Jepang yang berada di Jawa Tengah. Saat ini saya memiliki siswa dari usia 6 tahun - 56 tahun. Saya bukan ahli Bahasa Jepang tapi, saya akan selalu berusaha memaksimalkan ilmu yang saya punya.',
                'tentang_2' => 'Belajar bahasa Jepang tidak akan membosankan jika kalian menemukan guru dan metode belajar yang tepat mari menemukan metode yang cocok untuk belajar bahasa Jepang bersama materi yang ingin dipelajari bisa didiskusikan bersama belajar bahasa jepang bisa dilakukan privat atau kelompok',
                'tentang_3' => '',
                'tentang_4' => '',
                'tarif' => 'Rp60.000',
                'tarif2' => 'Rp60.000/jam',
                'tarif3' => '5 jam: Rp375.000',
                'tarif4' => '10 jam: Rp750.000',
                'tarif5' => 'Rp60.000',
                'waktu' => '4 jam',
                'jumlah_murid' => '51',
                'sd' => 'Sekolah Dasar',
                'smp' => 'Sekolah Menengah Pertama',
                'sma' => 'Sekolah Menengah Atas',
               
            ),

            





        ]);

    }
}
