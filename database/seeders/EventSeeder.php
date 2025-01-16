<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategory_events')->insert([
            [
                'name' => 'Musik',
                'photo_path' => 'uploads/photos/event-musik.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Olahraga',
                'photo_path' => 'uploads/photos/event-budaya.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Budaya',
                'photo_path' => 'uploads/photos/event-olahraga.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('events')->insert([
            [
                'title' => 'Ngebel Ultra',
                'photo_path' => 'uploads/photos/01JHQ68EQR8NYGN1V3894RE91F.jpeg',
                'description' => '<p>Ngebel Ultra 2024 akan menghadirkan salah satu ajang lari lintas alam paling menarik di Indonesia pada 25 Agustus mendatang. Mengambil tempat di Telaga Ngebel yang eksotis, acara ini mengundang pelari dari berbagai penjuru untuk merasakan keindahan alam Ponorogo sambil menaklukkan berbagai kategori perlombaan.</p><p>Mengusung konsep <em>sport tourism</em>, Ngebel Ultra 2024 menawarkan empat kategori lari yang masing-masing menghadirkan tantangan unik. Dari kategori 5K yang relatif pendek hingga 50K yang ekstrem, setiap kategori dirancang untuk menguji ketahanan fisik sekaligus memberikan pengalaman alam yang memukau. Telaga Ngebel yang terletak di kaki Gunung Wilis, dikelilingi oleh pepohonan hijau dan udara pegunungan yang sejuk, menjadi latar yang sempurna untuk acara ini.</p><p>Kategori 5K adalah pilihan bagi pelari yang baru memulai atau yang ingin menikmati lari santai dengan pemandangan yang indah. Peserta akan berlari di sekitar Telaga Ngebel dengan total elevasi 75 meter dan <em>cut-off time</em> (COT) 2 jam. Dengan biaya pendaftaran Rp205 ribu, setiap pelari akan mendapatkan <em>jersey</em> <em>finisher, </em>medali, <em>tote bag</em>, BIB, <em>refreshment</em>, dan e-sertifikat sebagai fasilitas lomba.</p><p>Bagi mereka yang mencari tantangan lebih, kategori 15K menawarkan pengalaman yang lebih kompleks. Peserta akan melewati desa-desa sekitar Telaga Ngebel, termasuk Desa Sahang dan Desa Wagir Lor, dengan total elevasi 643 meter dan COT 6 jam. Rute ini dilengkapi dengan dua <em>water station</em> dan satu <em>checkpoint</em>. Dengan biaya pendaftaran Rp305 ribu, fasilitas yang diberikan mencakup <em>jersey finisher</em>, medali, <em>tote bag</em>, <em>tumbler, chip</em> RFID, BIB, <em>refreshment,</em> e-sertifikat, dan makanan setelah <em>finish</em>.</p><p>Kategori 30K menjadi pilihan yang tepat bagi pelari berpengalaman yang ingin menghadapi tantangan lebih besar. Dengan pendaftaran sebesar Rp405 ribu, pelari akan menempuh rute yang melintasi beberapa desa dan menghadapi total elevasi 1.845 meter dalam waktu 9 jam. Rute ini memiliki lima <em>water station</em> dan satu <em>checkpoint</em>. Dengan biaya pendaftaran Rp405 ribu, peserta akan mendapatkan <em>jersey finisher</em>, medali, <em>tote bag</em>, <em>tumbler, chip</em> RFID, BIB, <em>refreshment,</em> e-sertifikat, dan makanan setelah <em>finish</em>.</p><p>Untuk pelari yang benar-benar mencari tantangan maksimal, kategori 50K adalah pilihan yang sempurna. Peserta akan menghadapi rute ekstrem dengan total elevasi 3.006 meter dan COT 12 jam. Rute ini meliputi beberapa desa dan memiliki tujuh <em>water station</em> dan dua <em>checkpoint</em>. Biaya pendaftarannya Rp555 ribu dengan fasilitas serupa kategori 15K dan 30K.</p><p>Pendaftaran untuk Ngebel Ultra 2024 telah dibuka dan akan ditutup bila kuota terpenuhi. Calon peserta dapat melakukan registrasi secara <em>offline</em> di berbagai lokasi di Ponorogo atau melalui situs resmi Ngebel Ultra di <a href="https://ngebelultra.com/">ngebelultra.com</a>.</p><p>Selain menjadi ajang lari yang menantang, Ngebel Ultra 2024 juga memberikan kesempatan bagi peserta untuk menikmati keindahan alam sekitar serta berinteraksi dengan masyarakat setempat. Acara ini diharapkan dapat meningkatkan kunjungan wisatawan dan memberikan dampak positif bagi perekonomian masyarakat lokal.</p>',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Run Madan',
                'photo_path' => 'uploads/photos/01JHQ6GSVA3X03ACVJ7KF6JWDX.jpeg',
                'description' => '<p>Hai Runners, sudah siap ikut RUNMadhan 2025????<br><br>Yuk sambut bulan Suci Ramadhan 1446H dengan mengikuti event lari virtual sambil berbagi <a href="https://www.instagram.com/explore/tags/runmadhan2025/">#RUNMadhan2025</a>, yang akan berlangsung mulai tanggal 1 - 20 Februari 2025<br><br>Kategori yang bisa kamu pilih:<br><br>?10K Multiple Run<br>? 30K Multiple Run<br>? 99K Multiple Run<br><br>*Setiap kategori yang kamu ambil sudah include paket berbuka puasa Ramadhan 1446H loh?<br><br>Pendaftaran sudah bisa dilakukan di tanggal 1 - 31 Januari 2025 melalui aplikasi GERAK yang bisa kamu download di Play Store/Apps Store, atau melalui link berikut ini: join.gerak.asia/events/runmadhanbmh1446h<br><br>Biaya pendaftaran? GRATISS!!<br><br>Segera daftar dan ajak teman serta keluargamu untuk meramaikan event <a href="https://www.instagram.com/explore/tags/runmadhan2025/">#RUNMadhan2025</a>!???<br><br>Lari Bersama, Berbagi Makna bersama<br><br>Jangan lupa follow <a href="https://www.instagram.com/bmh_ponorogo/">@bmh_ponorogo</a> untuk program kebaikan lain nya<br><br><a href="https://www.instagram.com/explore/tags/bmh/">#BMH</a> <a href="https://www.instagram.com/explore/tags/runmadhan/">#RUNMadhan</a> <a href="https://www.instagram.com/explore/tags/virtualrun/">#virtualRun</a> <a href="https://www.instagram.com/explore/tags/eventrunning/">#eventrunning</a><br><a href="https://www.instagram.com/explore/tags/bmhjatim/">#bmhjatim</a><br><a href="https://www.instagram.com/explore/tags/bmhponorogo/">#bmhponorogo</a><br><a href="https://www.instagram.com/explore/tags/ponorogoupdate/">#ponorogoupdate</a> <a href="https://www.instagram.com/explore/tags/ponorogo/">#ponorogo</a></p>',
                'category_id' => 2, // Assuming "Sports" category ID is 2
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Singphoria',
                'photo_path' => 'uploads/photos/01JHQ6KVF6A6EQ6Q32PXBRK3RR.jpeg',
                'description' => '<p>Singphoria mempersembahkan <a href="https://www.instagram.com/Singphoriapnrg/">@Singphoriapnrg</a> 18-19 Mei 2024 ???<br><br>LINEUP DAY 1<br>18 MEI 2024 ( harga promo 55rb )<br>- NDX AKA<br>- KELUD PRODUCTION || DJ TANTI<br>- PRISA<br><br>LINEUP DAY 2<br>19 MEI 2024 ( harga promo 50rb )<br>- REBELLION ROSE<br>- Karna Mereka<br>- PRISA<br><br>Kamu bisa beli online di singphoria.com atau nanti Sore Jam 16.00, Yang di Madiun bisa CODan<br><br>1.Teras Wedangan<br>Jl Taman Praja No 65<br>kecamatan taman kelurahan pandean<br>Kota madiun<br><br>2.Angkringan Mreneo ae<br>Jl.Setia Budi No 78<br>Kota Madiun<br><br>Jangan sampai skip yaaa, harga udh mau naik nih ??<br><br>?? HATI-HATI PENIPUAN ??<br><br>? Singphoria Ponorogo<br>? 18-19 Mei 2024<br>? Stadion Batoro Katong<br>?? 081228555516<br>? www.singphoria.com<br><br><a href="https://www.instagram.com/explore/tags/singphoria/">#Singphoria</a> <a href="https://www.instagram.com/explore/tags/singphoriaid/">#SingphoriaID</a> <a href="https://www.instagram.com/explore/tags/singphoriaponorogo/">#SingphoriaPonorogo</a> <a href="https://www.instagram.com/explore/tags/ponorogo/">#Ponorogo</a> <a href="https://www.instagram.com/explore/tags/eventponorogo/">#EventPonorogo</a> <a href="https://www.instagram.com/explore/tags/wonogiri/">#wonogiri</a> <a href="https://www.instagram.com/explore/tags/eventwonogiri/">#eventwonogiri</a></p>',
                'category_id' => 1, // Assuming "Technology" category ID is 3
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Ponorogo Fest',
                'photo_path' => 'uploads/photos/01JHQ6QRZCNHCZQW1TBDKW7BGJ.jpeg',
                'description' => '<p>? H-1 menuju konser festival yang ditunggu-tunggu! Suasana semakin mendekat dan semarak. Terima kasih untuk semua yang telah berkontribusi. Persiapkan diri kalian untuk hari yang spektakuler di Event Ponorogo Music Fest! ??"<br><br>Pantau terus akun sosmed kami, jangan sampai ketinggalan keseruannya nanti??<br><br>______________________________________________<br><br>Instagram:<br><br><a href="https://www.instagram.com/explore/tags/ponorogomusicfest/">#ponorogomusicfest</a><br><a href="https://www.instagram.com/explore/tags/nontonkonser/">#nontonkonser</a><br><a href="https://www.instagram.com/explore/tags/musikponorogo/">#musikponorogo</a><br><a href="https://www.instagram.com/explore/tags/ponorogokonser/">#ponorogokonser</a><br><a href="https://www.instagram.com/explore/tags/konsermusik/">#konsermusik</a><br><a href="https://www.instagram.com/explore/tags/ponorogoupdate/">#ponorogoupdate</a><br><a href="https://www.instagram.com/explore/tags/ponorogopictures/">#ponorogopictures</a><br><a href="https://www.instagram.com/explore/tags/galeryponorogo/">#galeryponorogo</a><br><a href="https://www.instagram.com/explore/tags/infoponorogo/">#infoponorogo</a><br><a href="https://www.instagram.com/explore/tags/ponorogojalanjalan/">#ponorogojalanjalan</a></p>',
                'category_id' => 1, // Assuming "Technology" category ID is 3
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Grebeg Suro 2024',
                'photo_path' => 'uploads/photos/01JHQ6YE7EEVDDCPVAQAT9M65K.jpeg',
                'description' => "<p>Ponorogo - Masyarakat Ponorogo memiliki tradisi yang menarik untuk memperingati Tahun Baru Islam. Tradisi tersebut biasa disebut Grebeg Suro Ponorogo.<br>Pemerintah Kabupaten (Pemkab) Ponorogo kembali menggelar acara itu pada tahun 2024. Berbagai pertunjukan seni budaya khas Ponorogo, seperti Reog Ponorogo, Kirap Pusaka, dan berbagai lomba, akan menghibur para pengunjung di acara tersebut.<br>Grebeg Suro Ponorogo 2024 sendiri akan berlangsung dari 18 Juni hingga 28 Juli 2024.</p><p>Rangkaian Acara Grebeg Suro Ponorogo 2024<br>Dikutip akun Instagram @grebegsuro.png2024, tercatat ada 33 event atau kegiatan yang menyemarakkan Grebeg Suro Ponorogo 2024. Adapun berikut daftar lengkapnya.<br><br>1. Istighosah &amp; Doa Bersama: 18 Juni 2024, pukul 19.00 WIB, di Pandopo Agung Kabupaten Ponorogo<br>2. Halaqoh &amp; Sima'an Al Quran: 19 Juni 2024, pukul 05.00 WIB, di Pandopo Agung Kabupaten Ponorogo<br><br>3. Lomba Lukis Tentang Ponorogo: 22-23 Juni 2024, pukul 07.00 WIB, di Pandopo Agung Kabupaten Ponorogo<br><br>4. Pameran Bonsai PPBI Grebeg Bonsai Bumi Reog: 22-28 Juni 2024, pukul 08.00-22.00 WIB, di Halaman Depan Pandopo Agung Kabupaten Ponorogo<br><br>5. Lomba Mocopat (Pepadi): 24-25 Juni 2024, pukul 08.00 WIB, di Ruang Pertemuan Kantor Bappeda Litbang Kabupaten Ponorogo<br><br>6. Upacara Pembukaan Grebeg Suro, Festival Reog Remaja (FRR) XX, dan Festival Nasional Reog Ponorogo (FNRP) XXIX Tahun 2024: 27 Juni 2024, pukul 19.00 WIB, di Panggung Utama Aloon-Aloon Kabupaten Ponorogo<br><br>7. Grebeg Suro Adventure Offroad VI (GSAO): 27-30 Juni 2024, pukul 08.00 WIB, di Depan Pintu Stadio Bathoro Katong<br><br>8. Pementasan Festival Reog Remaja (FRR) XX Tahun 2024: 28 Juni-1 Juli 2024, pukul 19.00 WIB, di Panggung Utama Aloon-Aloon Kabupaten Ponorogo<br><br>9. Pameran Bonsai Samandiman Bonsai Club Tahun 2024: 28 Juni-5 Juli 2024, pukul 08.00 WIB, di Area Patung Macam &amp; Air Mancur<br><br>10. Pameran Seni Rupa Sor Zhamboe: 28 Juni-5 Juli 2024, pukul 10.00-22.00 WIB, di Gedung Graha Kridha Praja Kabupaten Ponorogo dan Rumah Ndoro Tondo<br><br>11. Bupati Cup Esport Indonesia: 29 Juni 2024, pukul 07.00 WIB, di Gedung Sasana Praja Kabupaten Ponorogo<br><br>12. Mini Track: 29-30 Juni 2024, pukul 06.00 WIB, di Paseban Aloon-Aloon Ponorogo<br><br>13. Pacuan Kuda (Pordasi): 29-30 Juni 2024, pukul 13.00 WIB dan 09.00 WIB, di Lapangan Selatan RSUD<br><br>14. Lomba Burung Perkutut (P3SI Penda Ponorogo): 30 Juni 2024, pukul 07.00 WIB, di Gatangan P3SI Penda Kabupaten Ponorogo<br><br>15. Lomba &amp; Pameran Burung Berkicau Reog Bird Club: 30 Juni 2024, pukul 08.00 WIB, di Taman Wengker<br><br>16. Pementasan Festival Nasional Reog Ponorogo (FNRP) XXIX Tahun 2024: 3 Juni-6 Juli 2024, pukul 19.00 WIB, di Panggung Utama Aloon-Aloon Kabupaten Ponorogo<br><br>17. Pagelaran Pusaka Kiai Tunggul Nogo: 3-6 Juli 2024, pukul 08.00 WIB dan 19.00 WIB, di Padepokan Kiai Tunggul Nogo dan Pandopo Agung Ponorogo<br><br>18. Ziarah Makam: 4 Juli 2024, pukul 06.00 WIB, di Makam Batoro Kathong, Makam Tajug, Masjid Agung Ponorogo, Makam Astana Srandhil, dan Taman Makam Pahlawan<br><br>19. Bedol Pusaka Didahuluhi Dengan Macapat: 5 Juli 2024, pukul 23.00 WIB, di dari Pringgitan ke Kota Lama<br><br>20. Kirap Pusaka, Pawai Lintas Sejarah &amp; Jamasan Pusaka: 6 Juli 2024, pukul 13.00 WIB, di Kota Lama hingga Aloon-Aloon Ponorogo<br><br>21. Music On The Street Dua Tempat: 6 Juli 2024, pukul 19.00 WIB, di Pertigaan Ngepos &amp; Depan WOW PNG<br><br>22. Laku Tirakatan Malam 1 Suro: 6 Juli 2024, pukul 19.00 WIB, di Kecamatan Babadan, Pulung, Balong, dan Kauman<br><br>23. Upacara Penutupan Grebeg Suro &amp; Pengumuman Hasil Festival Reog Remaja (FRR) XX &amp; Festival Nasional Reog Ponorogo (FNRP) XXIX 2024: 6 Juli 2024, pukul 19.00 WIB, di Panggung Utama Aloon-Aloon Kabupaten Ponorogo<br><br>24. Pagelaran Wayang (Pepadi): 6 Juli 2024, pukul 20.00 WIB, di Pendopo Kabupaten Ponorogo<br><br>25. Larungan Telaga Ngebel: 6-7 Juli 2024, pukul 05.00 WIB dan 08.00 WIB, di Telaga Ngebel, Kabupaten Ponorogo<br><br>26. Event Sepeda Unto: 7 Juli 2024, pukul 06.00 WIB, di Paseban Aloon-Aloon Ponorogo<br><br>27. Festival Jamu Se-Kabupaten Ponorogo: 11 Juli 2024, pukul 08.00 WIB, di Kampus Kesehatan Akafarma Sunan Giri Ponorogo<br><br>28. Caf Mampiro Festival: 12-14 Juli 2024, pukul 08.00 WIB, di Taman Wisata Ngembang dan Desa Wisata Klepu, Soko Ponorogo<br><br>29. Grebeg Suro Adventure Trail: 14 Juli 2024, pukul 08.00 WIB, di Sirkuit Ban Blunder Sewelut Babadan Ponorogo<br><br>30. Akafarma Bersholawat: 17 Juli 2024, pukul 19.00 WIB, di Kampus Kesehatan Akafarma Sunan Giri Ponorogo<br><br>31. Grebeg Otomotif Komunitas Otomotif Ponorogo (Kompor): 21 Juli 2024, pukul 12.00-23.00 WIB, di Sirkuit Ban Blunder Sewelut Babadan Ponorogo<br><br>32. Grebeg Tutup Suro: 22-27 Juli 2024 di Bantarangin<br><br>33. Festival Layang Layang Pelayang Ponorogo Bersatu: 28 Juli 2024, pukul 09.00-16.00 WIB, di Sirkuit Ban Blunder Sewelut Babadan Ponorogo<br><br></p>",
                'category_id' => 1, // Assuming "Technology" category ID is 3
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Culture Fest',
                'photo_path' => 'uploads/photos/01JHQ73HT8BPTG4ZPT37XQ65RC.jpeg',
                'description' => '<p>CULTURE FEST &amp; SOUND OF PONOROGO 2024 DAY 1??<br><br>?? Jangan lewatkan informasi penting seputar event dan rangkaian acara HUT Ponorogo. Follow Instagram kami di <a href="https://www.instagram.com/lochomotivponorogo/">@lochomotivponorogo</a> untuk update terbaru dan tetap terhubung dengan semua momen istimewa ini.<br><br><a href="https://www.instagram.com/explore/tags/hutponorogo528/">#HUTPonorogo528</a> <a href="https://www.instagram.com/explore/tags/lochomotivponorogo/">#Lochomotivponorogo</a> <a href="https://www.instagram.com/explore/tags/celebrateponorogo/">#CelebratePonorogo</a> <a href="https://www.instagram.com/explore/tags/culturefest/">#CultureFest</a> <a href="https://www.instagram.com/explore/tags/jarananthek/">#JarananThek</a> <a href="https://www.instagram.com/explore/tags/reyogponorogo/">#ReyogPonorogo</a> <a href="https://www.instagram.com/explore/tags/harijadiponorogo/">#HariJadiPonorogo</a><br><a href="https://www.instagram.com/explore/tags/comingsoon/">#ComingSoon</a> <a href="https://www.instagram.com/explore/tags/eventponorogo/">#EventPonorogo</a> <a href="https://www.instagram.com/explore/tags/creativeservice/">#CreativeService</a> <a href="https://www.instagram.com/explore/tags/serenadelangittembaga/">#serenadelangittembaga</a></p>',
                'category_id' => 1, // Assuming "Technology" category ID is 3
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
