<?php

namespace Database\Seeders;

use App\Models\Pengujian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pengujiansseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengujian::create(['tipe' => 'verbal','soal' => 'SINONIM CERCA','a' => 'potongan kain','b' => 'umpatan','c' => 'sulaman','d' => 'terjatuh','jawaban' => 'umpatan','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'SINONIM ABERASI','a' => 'pengikisan','b' => 'pemisahan','c' => 'penggerusan','d' => 'penyimpangan','jawaban' => 'penyimpangan','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'ANTONIM TETIRAN','a' => 'asli','b' => 'amatiran','c' => 'palsu','d' => 'petir','jawaban' => 'asli','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'ANTONIM LECO','a' => 'cebol','b' => 'mungil','c' => 'kerdil','d' => 'raksasa','jawaban' => 'raksasa','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'ANTONIM SAHIH','a' => 'cacat','b' => 'benar','c' => 'modern','d' => 'tepat','jawaban' => 'cacat','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'JARI : CINCIN =','a' => 'pintu:rumah','b' => 'kaki:sepatu','c' => 'tangan:tilang','d' => 'anting:giwang','jawaban' => 'kaki:sepatu','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'RATU : MAHKOTA','a' => 'nelayan:sampan','b' => 'juara:medali','c' => 'sarjana:toga','d' => 'pegawai:dasi','jawaban' => 'sarjana:toga','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'SINONIM KENYAL','a' => 'potongan kain','b' => 'umpatan','c' => 'sulaman','d' => 'terjatuh','jawaban' => 'umpatan','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'SINONIM KOPONG','a' => 'potongan kain','b' => 'umpatan','c' => 'sulaman','d' => 'terjatuh','jawaban' => 'umpatan','gambar' => '-',]);
        Pengujian::create(['tipe' => 'verbal','soal' => 'Kata manakan yang berbeda dari kelompok kata berikut','a' => 'Birmingham','b' => 'Turin','c' => 'Liverpool','d' => 'London','jawaban' => 'Turin','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'Menyampaikan informasi, ide, perasaan dengan cara yang sederhana dan mudah dimengerti','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'Mampu menginterpretasikan sesuatu, termasuk menerjemahkannya ke dalam bahasa lain','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'Membuat orang lain menjadi bersemangat dan tertarik dengan cerita yang kita ceritakan','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'mudah mengekspresikan sesuatu dengan mudah melalu ucapan atau tulisan','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'senang bermain kata, misalnya permainan teka teki silang','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'bisa berdebat kata-kata dengan baik','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'suka berbicara ketika ada masalah, menjelaskan solusi, dan bertanya jawab?','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'secara teratur menambah pembendahaeaan kata dengan belajar kata-kata baru','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'mempunyai pembendaharaan kata yang luas dan dapat mengungkapkan diri dengan baik dengan menggunakan kata-kata tersebut','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'bahasa','soal' => 'mudah mengingat melodi atau lirik dari lagu maupun puisi','a' => 'ya','b' => 'tidak','c' => '-','d' => '-','jawaban' => '-','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Tulang manusia di bentuk dari 18% berat total manusia, berapa kilogram berat tulang tersebut jika berat seseorang 75 kg','a' => '13,5','b' => '12','c' => '61,5','d' => '63','jawaban' => '13,5','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Jika x+y+z = 18 dan y x z = y² + y, berapakah (x+2y)/2?','a' => '8,5','b' => '9,5','c' => '10','d' => '11','jawaban' => '8,5','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => '5, 8, 13, 21, 34, 55, 89, 144, …','a' => '203','b' => '213','c' => '223','d' => '233','jawaban' => '233','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => '6, 11, 21, …, 81, 9, 14, 24, 44, …','a' => '31 dan 64','b' => '36 dan 74','c' => '41 dan 84','d' => '46 dan 94','jawaban' => '41 dan 84','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Suatu seri: 100-4-90-7-80 seri selanjutnya adalah…','a' => '11','b' => '10','c' => '9','d' => '8','jawaban' => '10','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Suatu seri: 9-5-1-2-10-6-2-3-11 -7- seri selanjutnya adalah…','a' => '3','b' => '4','c' => '12','d' => '7','jawaban' => '3','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Suatu seri: 2-1-2-1-3-3-3-4-4- seri selanjutnya adalah…','a' => '3,4,7','b' => '4,5,7','c' => '5,4,7','d' => '6,4,5','jawaban' => '5,4,7','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Suatu seri: 13-14-13-14-11-12-11-12-15-16-15-16-13 seri selanjutnya adalah…','a' => '11,15,13','b' => '12,16,14','c' => '14,13,14','d' => '14,15,13','jawaban' => '14,13,14','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Suatu Deret b-m-n-d-o-p-… deret selanjutnya adalah…','a' => 'g','b' => 'q','c' => 'r','d' => 'f','jawaban' => 'r','gambar' => '-',]);
        Pengujian::create(['tipe' => 'numerik','soal' => 'Suatu Deret G-H-I-M-N-J-K-L-M-N... deret selanjutnya adalah…','a' => 'M-N','b' => 'N-M','c' => 'O-P','d' => 'P-O','jawaban' => 'M-N','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'Usaha untuk menentang dominasi kekuasan adalah…','a' => 'makar','b' => 'membangkang','c' => 'kritis','d' => 'disosiasi','jawaban' => 'makar','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'Antonim dari aktif adalah…','a' => 'dinamis','b' => 'statis','c' => 'pasif','d' => 'kreatif','jawaban' => 'pasif','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'antonim dari canggih adalah…','a' => 'ruwet','b' => 'kompleks','c' => 'berbelit-belit','d' => 'sederhana','jawaban' => 'sederhana','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'Mobil : bensin = …','a' => 'pelari:istirahat','b' => 'pelari:makanan','c' => 'pelari:sepatu','d' => 'pelari:lintasan','jawaban' => 'pelari:makanan','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'penulis : komputer = …','a' => 'pemburu:senapan','b' => 'nelayan:ikan','c' => 'penyanyi:kaser','d' => 'guru:murid','jawaban' => 'pemburu:senapan','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'Flash disk : data = …','a' => 'dompet:uang','b' => 'komputer:disker','c' => 'waktu:arloji','d' => 'rokok:asbak','jawaban' => 'dompet:uang','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'Semua pegawai negeri berpakaian seragam. Sebagian pegawai negeri menggunakan dasi…','a' => 'sebagian pegawai negeri bersepatu','b' => 'sebagian pegawai negeri berseragam dan berdasi','c' => 'sebagian pegawai negeri berseragam tapi tidak bersepatu','d' => 'sebagian pegawai negeri berjas','jawaban' => 'sebagian pegawai negeri berseragam dan berdasi','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'Semua dokter dapat membuat resep. Beberapa dokter ahli kandungan adalah penggemar lukisan…','a' => 'semua dokter adalah dokter kandungan','b' => 'semua dokter adalah penggemar lukisan','c' => 'penggemar lukisan pasti dokter kandungan','d' => 'beberapa dokter kandungan yang dapat membuat resep adalah penggemar lukisan','jawaban' => 'beberapa dokter kandungan yang dapat membuat resep adalah penggemar lukisan','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => 'Semua perempuan suka bunga mawar. Semua bunga mawar berduri…','a' => 'tidak ada bunga mawar yang disukai perempuan yang tidak berdiri','b' => 'semua perempuan takut duri','c' => 'tidak dapat ditarik kesimpulan','d' => 'jika tidak berduri bunga mawar tidak disukai perempuan','jawaban' => 'tidak ada bunga mawar yang disukai perempuan yang tidak berdiri','gambar' => '-',]);
        Pengujian::create(['tipe' => 'skolastik','soal' => '1 , ... , 5, 9, 25, 27, 125, 81, ... , 243','a' => '1,325','b' => '3,625','c' => '5,243','d' => '7,343','jawaban' => '1,325','gambar' => '-',]);
    }
}
