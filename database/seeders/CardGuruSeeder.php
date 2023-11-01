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



            array(
                'image' =>'/img/org3.jpeg',
                'nama' => 'Valencia',
                'nama2' => 'VALENCIA',
                'mapel' => 'Menyanyi',
                'mapel2' => 'Pelatihan vokal',
                'mapel3' => 'Teori musik',
                'mapel4' => '',
                'mapel5' => '',
                'intro' => 'Mengajarkan bernyanyi / Pelatihan Vokal tanpa harus ...',
                'intro2' => 'Mengajarkan bernyanyi / Pelatihan Vokal tanpa harus menghilangkan karakter vocal. Sebelumnya saya sudah pernah mengajar di 2 lembaga musik di Kota Malang dan beberapa privat ke rumah rumah.',
                'meet' => 'Melalui aplikasi Online',
                'tentang' => 'Saya singer wedding dari 2012 hingga saat ini / sebelumnya saya pernah mengajar di 2 lembaga sekolah musik di kota Malang serta privat ke rumah rumah',
                'tentang_2' => '',
                'tentang_3' => 'Metode pengajaran saya berfokus ke karakter suara yang di miliki tiap tiap murid. Tanpa harus membaca not balok. Disini yang diutamakan adalah setiap murid bisa bernyanyi dengan teknik yang benar.',
                'tentang_4' => '
                Cara berpenampilan di panggung,
                Ekspresi dalam menyanyikan lagu,
                Teknik vocal,
                Cara mengatasi gugup panggun,
                Cara memegang mic dll 
                ',
                'tarif' => 'Rp100.000',
                'tarif2' => 'Rp100.000/jam',
                'tarif3' => '5 jam:  Rp500,000',
                'tarif4' => '10 jam: Rp1,000,000',
                'tarif5' => 'Rp100.000',
                'waktu' => '4 jam',
                'jumlah_murid' => '50',
                'sd' => 'Pemula,Tahun Pertama,Tahun Ke-2,Tahun Ke-3,Tahun Ke-4,Anak-anak,Lainnya',
                'smp' => '',
                'sma' => '',
               
            ),



            array(
                'image' =>'/img/org5.png',
                'nama' => 'Shinta',
                'nama2' => 'SHINTA',
                'mapel' => 'Bahasa Mandarin',
                'mapel2' => 'Kosa kata - Bahasa Cina',
                'mapel3' => 'Pemahaman lisan - Bahasa Cina',
                'mapel4' => '',
                'mapel5' => '',
                'intro' => 'Guru bersertifikat HSK & HSKK, alumni ...',
                'intro2' => 'Guru bersertifikat HSK & HSKK, alumni di STBA PIA Medan jurusan Sastra China. Saya sangat termotivasi untuk mengajarkan ilmu - ilmu yang telah saya pelajari pada murid yang memiliki minat semangat belajar.',
                'meet' => 'Melalui aplikasi Online',
                'tentang' => 'Tuntutlah ilmu sampai ke Negeri China .
                Artinya Cari dan tuntutlah ilmu sejauh apa pun ilmu itu berada.',
                'tentang_2' => '
                Pendidikan Formal :
                • Mahasiswa jurusan sastra China STBA PIA Medan tahun 2017 - 2021
                • SMA Sutomo 1 (Jurusan IPS 2014 - 2017)
                • TK - SD - SMP Sutomo 1 Medan

                Pengalaman Kerja :
                • 2018 - sekarang sebagai Guru bahasa Mandarin
                • 2011 - sekarang sebagai Guru les private SD
                • 2010 sebagai Guru les private TK
                ',
                'tentang_3' => 'Metode pengajaran saya adalah dengan buku-buku yang telah saya sediakan, dalam pengajaran saya akan mengajarkan membaca, menulis, menggambar, mendengar, berdialog, menghapal, bercerita, dan juga akan diberikan soal- soal untuk tes kemampuan murid tersebut, dan masih banyak lagi metode - metode pengajaran lainnya yang akan saya ajarkan dengan tips-tips supaya anda tidak merasa kesulitan dan bosan.',
                'tentang_4' => '
                 
                ',
                'tarif' => 'Rp90,000',
                'tarif2' => 'Rp90,000/jam',
                'tarif3' => '5 jam: Rp450,000',
                'tarif4' => '10 jam:Rp900,000',
                'tarif5' => 'Rp90,000',
                'waktu' => '4 jam',
                'jumlah_murid' => '50',
                'sd' => 'Pemula,Tahun Pertama,Tahun Ke-2,Tahun Ke-3,Tahun Ke-4,Anak-anak,Lainnya',
                'smp' => '',
                'sma' => '',
               
            ),


            array(
                'image' =>'/img/org6.png',
                'nama' => 'Shinta',
                'nama2' => 'SHINTA',
                'mapel' => 'Akuntansi',
                'mapel2' => '',
                'mapel3' => '',
                'mapel4' => '',
                'mapel5' => '',
                'intro' => 'Lulusan Predikat Summa Cumlaude Jurusan Akuntansi...',
                'intro2' => 'Lulusan Predikat Summa Cumlaude Jurusan Akuntansi Universitas Indonesia (Accounting FEB UI 2016) Menawarkan Privat Akuntansi',
                'meet' => 'Melalui aplikasi Online',
                'tentang' => '
                Saya merupakan alumni dari jurusan akuntansi Universitas Indonesia. Saya berhasil menyelesaikan pendidikan saya dengan predikat Summa Cumlaude (GPA : 3,88) di Fakultas Ekonomi dan Bisnis Universitas Indonesia dan nilai A di semua mata kuliah yang saya ajarkan. Saya pernah mengisi materi untuk pelatihan para peserta Olimpiade Sains Provinsi Jambi untuk subjek Ekonomi dan memberikan privat kepada junior di kampus ketika mendekati masa UTS dan UAS. Saya juga memiliki pengalaman sebagai asisten dosen untuk mata kuliah Pengantar Akuntansi dan Akuntansi Manajemen dengan total siswa mencapai 150 orang. Sebagai tambahan, saya telah menyelesaikan kursus Brevet Perpajakan A&B di IAI (Ikatan Akuntan Indonesia).
                ',
                'tentang_2' => '
                Materi yang saya cover :
                Akuntansi dasar bagi pemula, Pengantar Akuntansi, Akuntasi Keuangan 1 dan 2, Akuntansi Biaya, dan Akuntansi Manajemen
                ',
                'tentang_3' => 'Materi yang saya sampaikan akan menyesuaikan dengan permintaan para siswa (by request). Sesi dapat diisi dengan pemaparan materi secara mendalam maupun berdiskuski bersama dalam mengerjakan soal-soal, baik pekerjaan rumah maupun soal-soal untuk persiapan mengikuti ujian atau tes. Materi dan soal akan menyesuaikan dengan kebutuhan para siswa. Bisa menggunakan PPT/soal yang diberikan oleh siswa maupun PPT/soal yang saya miliki.',
                'tentang_4' => '',
                'tarif' => 'Rp150,000',
                'tarif2' => 'Rp150,000/jam',
                'tarif3' => '5 jam: Rp700,000',
                'tarif4' => '10 jam: Rp1,350,000',
                'tarif5' => 'Rp150,000',
                'waktu' => '2 jam',
                'jumlah_murid' => '50',
                'sd' => 'Sekolah Dasar (SD)',
                'smp' => 'Sekolah Menengah Pertama (SMP)',
                'sma' => 'Sekolah Menengah Atas (SMA) sampai
                Diploma-4 (D4),Sarjana,Diploma-3 (D3)
                ',
               
            ),



            

            





        ]);

    }
}
