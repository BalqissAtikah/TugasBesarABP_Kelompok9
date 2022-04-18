<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DestinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinasi')->insert([
            ['namadestinasi' => 'Gunung Bromo',
            'pulau'=> 'Jawa',
            'lokasi' => 'Jawa Timur',
            'deskripsi' => 'Gunung Bromo adalah salah satu gunung api yang masih aktif di Indonesia
            Gunung yang memiliki ketinggian 2.392 meter di atas permukaan laut ini merupakan destinasi andalan Jawa Timur. 
            Gunung Bromo berdiri gagah dikelilingi kaldera atau lautan pasir seluas 10 kilometer persegi.
            Wisatawan yang berkunjung ke Gunung Bromo akan disambut oleh pemandangan yang indah. 
            Salah satu hal yang terkenal dari Gunung Bromo adalah golden sunrise-nya. 
            Pasalnya, Gunung Bromo dinobatkan sebagai tempat yang menawarkan pemandangan matahari terbit terbaik di Pulau Jawa.
            Sesaat setelah momen matahari terbit berakhir, wisatawan akan kembali disuguhkan pemandangan yang tak kalah indanya, yaitu pemandangan negeri di atas awan.'],
            
            ['namadestinasi' => 'Monumen Nasional ',
            'pulau'=> 'Jawa',
            'lokasi' => ' Jakarta Pusat',
            'deskripsi' => 'Monumen Nasional atau yang disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter yang didirikan untuk mengenang perlawanan 
            dan perjuangan rakyat Indonesia untuk merebut kemerdekaan dari pemerintahan kolonial Hindia Belanda. Pembangunan monumen ini dimulai pada tanggal 17 Agustus 1961 
            di bawah perintah presiden Soekarno dan dibuka untuk umum pada tanggal 12 Juli 1975. Tugu ini dimahkotai lidah api yang dilapisi lembaran emas 
            yang melambangkan semangat perjuangan yang menyala-nyala dari rakyat Indonesia'],
            
            ['namadestinasi' => 'Taman Margasatwa Ragunan',
            'lokasi'=> 'Ragunan, Pasar Minggu, Jakarta Selatan',
            'pulau'=> 'Jawa',
            'deskripsi' => 'Taman Margasatwa Ragunan atau juga disebut Kebun Binatang Ragunan adalah sebuah Kebun binatang seluas 140 hektare ini didirikan pada tahun 1864. 
            Di dalamnya terdapat berbagai koleksi yang terdiri dari 295 spesies dan 4040 spesimen. Ragunan sempat ditutup selama sekitar tiga minggu sejak 19 September 2005 
            karena hewan-hewan di dalamnya ada yang terinfeksi flu burung, tetapi dibuka kembali pada 11 Oktober 2005.
            Kebun binatang ini memiliki banyak spesies hewan yang langka antara lain kakatua, orangutan, gorila, anoa dan gajah'],

            ['namadestinasi' => 'Farm House Lembang',
            'lokasi'=> 'Kec. Lembang, Kabupaten Bandung Barat',
            'pulau'=> 'Jawa',
            'deskripsi' => 'Farm House Lembang adalah destinasi wisata yang menawarkan sebuah kawasan wisata terpadu berkonsep perkebunan dan peternakan ala Eropa yang populer dengan sebutan Farm House. 
            Daya tarik wisata Farm House Lembang selanjutnya adalah di tempat wisata ini terdapat area bangunan para kurcaci atau Rumah Hobbit. 
            Design bangunannya dibuat semirip mungkin sesuai dengan apa yang biasa anda lihat di film Hobbiton Movie Set yaitu mungil, 
            sehingga setiap pengunjung yang masuk ke Rumah Hobbit di Farm House Susu Lembang ini harus membungkukan badan.'],

            ['namadestinasi' => 'Dieng Plateau',
            'lokasi'=> 'Wonosobo,Jawa Tengah',
            'pulau'=> 'Jawa',
            'deskripsi' => 'Dihyang merupakan kawasan budaya dan pegunungan di pulau Jawa di provinsi Jawa Tengah. Mencakup wilayah agraris yang memiliki iklim tropis dengan tingkat curah hujan tinggi. 
            Karena terletak pada ±2.000 meter di atas permukaan laut dan dihimpit oleh pegunungan, sehingga udaranya cukup dingin. Wilayah Dieng meliputi Dieng Kulon di Banjarnegara 
            dan Dieng Wetan di Wonosobo, wilayah ini dikenal sebagai kawasan budaya Jawa pegunungan. Sebelah barat berbatasan dengan Jawa Barat, sebelah utara berbatasan dengan wilayah pantai utara Pekalongan dan Batang, 
            di sebelah timur berbatasan dengan Temanggung dan Magelang, dan ke selatan berbatasan dengan Kebumen. Dieng adalah salah satu daerah penghasil sayur-sayuran terbesar di Jawa Tengah, 
            dengan sebagian besar wilayahnya merupakan pegunungan dan di dominasi tanaman sayur. Kondisi iklim dan cuaca di wilayah ini sangat mendukung dilakukannya aktifitas pertanian, 
            sehingga sebagian besar masyarakat Dieng bermata pencarian sebagai petani'],

            ['namadestinasi' => 'Puncak Jaya',
            'lokasi'=> 'Papua',
            'pulau'=> 'Papua',
            'deskripsi' => 'Puncak Jaya Wijaya atau Piramida Carstensz ialah sebuah puncak tertinggi yang menjadi bagian dari Pegunungan Barisan Sudirman yang terdapat di Provinsi Papua, Indonesia. 
            Puncak Jaya atau Piramida Carstensz mempunyai ketinggian 4.884 mdpl dan di sekitarnya terdapat gletser dengan nama yang sama yakni gletser Carstensz, satu-satunya gletser tropika di Indonesia, 
            yang tersisa dan secara perlahan mulai menipis akibat pemanasan global. Puncak ini merupakan gunung tertinggi di Indonesia kawasan Oceania. Puncak Jaya adalah salah satu dari tujuh puncak tertinggi di dunia. '],

            ['namadestinasi' => 'Teluk Triton Kaimana',
            'lokasi'=> 'Kabupaten Kaimana, Papua Barat',
            'pulau'=> 'Papua',
            'deskripsi' => 'Teluk Triton adalah sebuah teluk yang terkenal dengan sebutan "Kota Senja Kaimana". Kawasan ini dikenal dengan keindahan bawah air, kekayaan biota, serta warisan budayanya yang bersejarah 
            hal ini yang menyebabkan teluk ini dijuluki "The Lost Paradise" oleh para wisatawan. Teluk ini merupakan potensi objek wisata baru yang ada di Papua yang tidak kalah indah dengan Raja Ampat, 
            yang sudah lebih dulu menjadi tujuan wisata yang bertaraf internasional. Seperti sebagian besar wisata bahari di Indonesia yang terkenal dengan keindahan dan kekayaan bawah lautnya, 
            Teluk Triton juga menyimpan berbagai macam keindahan dan kekayaan alam yang dapat memukau mata para wisatawan yang berkunjung kesana.'],

            ['namadestinasi' => 'Air Terjun Anenderat',
            'lokasi'=> 'Kabupaten Tambrauw, Papua Barat',
            'pulau'=> 'Papua',
            'deskripsi' => 'Air terjun Anenderat atau sering disebut juga air terjun tujuh tingkat adalah tempat wisata alam berupa air terjun yang berada di kampung Siakwa, distrik Miyah, kabupaten Tambrauw, Papua Barat, Indonesia. 
            Lokasinya di Distrik Miyah. Distrik ini berada di bagian perut Kabupaten Tambrauw, 3 jam ditempuh dari Fef, ibu kota kabupaten. Air terjun ini tersohor dengan panorama alam yang indah, udara yang segar, dan suasana yang sejuk. 
            Air terjun ini mengalir dan bermuara sampai sungai Aifat. Kawasan di sekitar ini juga digunakan sebagai lokasi upacara adat bagi masyarakat setempat.'],

            ['namadestinasi' => 'Pantai Base-G',
            'lokasi'=> 'Sebelah utara Kota Jayapura, Papua',
            'pulau'=> 'Papua',
            'deskripsi' => 'Pantai Base G atau juga dikenal sebagai Tanjung Ria terletak disebelah utara Kota Jayapura, Papua. Pantai Base G berlokasi sekitar 10 km dari Kota Jayapura di Distrik Jayapura Utara. 
            Pantai Base G dapat dikunjungi dengan menggunakan berbagai jenis kendaraan dengan waktu tempuh kurang lebih 20 menit dari kota, dengan akses jalan beraspal. Apabila pengunjung mengambil patokan Bandara Sentani, 
            waktu tempuh darat sekitar 1,5 jam. Nama Base G berasal dari sejarahnya yang dahulu merupakan basis militer dengan nama Base G Camp pada masa Perang Dunia II. Kawasan Pantai Base G mempunyai luas sekitar 90 ha, 
            panjang garis pantai 6-15 meter, dengan lebar pantai belakang 15-40 meter, lebar perairan 150-400 meter'],


            ['namadestinasi' => 'Pantai Lhok Mee',
            'lokasi'=> 'Desa Lamreh, Kabupaten Aceh Besar',
            'pulau'=> 'Sumatera',
            'deskripsi' => 'Merupakan salah satu pantai dengan pasir putih yang indah. Keunikan lain dari Pantai Lhok Mee  adalah pohon-pohon besar dan kecil yang tumbuh di perairan pantai. Hal inilah yang menjadi daya tarik pengunjung, 
            terbukti dengan banyaknya wisatawan yang ingin menggunakan pohon sebagai background untuk berfoto. Bagi yang ragu atau lupa membawa bekal, jangan khawatir. Tempat ini juga menawarkan berbagai macam makanan ringan dan minuman. 
            Pengelola juga menawarkan pondok-pondok kayu bagi pengunjung yang ingin bersantai dan menikmati keindahan alam eksotis Pantai Lhok Me. Setelah bermain di pantai atau mandi di pantai, 
            Anda dapat dengan cepat membersihkan dan  mengganti pakaian di lokasi yang  disediakan oleh pengelola objek wisata di Pantai Lhok Me.'],

            ['namadestinasi' => 'Danau Toba',
            'lokasi'=> 'Sumatera Utara',
            'pulau'=> 'Sumatera',
            'deskripsi' => 'Danau Toba yang memiliki luas lebih kurang 1.145 kilometer persegi dan kedalaman 450 meter. Destinasi wisata alam ini sebenarnya lebih mirip dengan lautan. Tak heran karena Danau Toba adalah danau terbesar di Asia Tenggara 
            dan salah satu danau terdalam di dunia. Di lokasi objek wisata Danau Toba ini, para pengunjung maupun wisatawan dapat menikmati kegiatan berkayak atau naik sampan dengan memilih tiga jenis rute jelajah danau Tongging-Silalahi, 
            Tongging-Samosir atau Lingkaran Utara. Alamnya yang menakjubkan juga membuat Danau Toba ditetapkan UNESCO sebagai Toba Caldera.'],

            ['namadestinasi' => 'Danau maninjau',
            'pulau'=> 'Sumatera',
            'lokasi'=> 'Kabupaten Agam, provinsi Sumatra Barat',
            'deskripsi' => 'Danau yang menawarkan keindahannya ini mempunyai panjang kurang lebih 16 km dan lebar 7 km. Danau ini dinobatkan sebagai danau terluas nomor sebelas di Indonesia. 
            Tempat ini berada di ketinggian 465 mdpl dan memiliki kedalaman kurang lebih 165 meter. Tempat ini memang memiliki pemandangan alam yang sempurna. Apalagi ada pegunungan dan perbukitan yang mengelilinya. 
            Menjadikan objek wisata ini mempunyai daya magis yang luar biasa. Siapa pun yang datang ke tempat ini bisa dibikin tidak bisa move on. Untuk pulang rasanya sangat berat dan terlebih enggan.
            Kondisi airnya sangat tenang dan membuat hati terasa nyaman. Benar-benar tempat yang paling cocok untuk menikmati kesendirian dan membutuhkan inspirasi yang lebih.'],
       
            ['namadestinasi' => 'Pantai Kuta',
            'pulau'=> 'Bali',
            'lokasi'=> 'Kecamatan Kuta, sebelah selatan Kota Denpasar, Bali',
            'deskripsi' => 'Pantai Kuta adalah sebuah tempat pariwisata yang terletak di Kecamatan Kuta, sebelah selatan Kota Denpasar. Daerah ini merupakan sebuah tujuan wisata turis mancanegara 
            dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam sebagai lawan dari pantai Sanur. 
            Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.'],

            ['namadestinasi' => 'Pura Luhur Uluwatu',
            'pulau'=> 'Bali',
            'lokasi'=> 'wilayah Desa Adat Pecatu, Kecamatan Kuta Selatan, Kabupaten Badung',
            'deskripsi' => 'Pura yang terletak di ujung barat daya pulau Bali di atas anjungan batu karang yang terjal dan tinggi serta menjorok ke laut 
            ini merupakan Pura Sad Kayangan yang dipercaya oleh orang Hindu sebagai penyangga dari 9 mata angin. Pura ini pada mulanya digunakan menjadi tempat memuja seorang pendeta suci dari abad ke-11 
            bernama Empu Kuturan. Ia menurunkan ajaran Desa Adat dengan segala aturannya. Pura ini juga dipakai untuk memuja pendeta suci berikutnya, yaitu Dang Hyang Nirartha, yang datang ke Bali pada akhir tahun 1550 
            dan mengakhiri perjalanan sucinya dengan apa yang dinamakan Moksa atau Ngeluhur di tempat ini. Kata inilah yang menjadi asal nama Pura Luhur Uluwatu. Pura Uluwatu terletak pada ketinggian 97 meter dari permukaan laut. 
            Di depan pura terdapat hutan kecil yang disebut alas kekeran, berfungsi sebagai penyangga kesucian pura. Pura Uluwatu mempunyai beberapa pura pesanakan, yaitu pura yang erat kaitannya dengan pura induk. 
            Pura pesanakan itu yaitu Pura Bajurit, Pura Pererepan, Pura Kulat, Pura Dalem Selonding dan Pura Dalem Pangleburan. '],

            ['namadestinasi' => 'Pura Goa Lawah',
            'pulau'=> 'Bali',
            'lokasi'=> 'Desa Pasinggahan, Kecamatan Dawan, Kabupaten Klungkung, Bali',
            'deskripsi' => 'Pura Goa Lawah dikenal masyarakat karena adanya sebuah gua pada bagian utama pura ini, yang didalamnya terdapat sekumpulan kelelawar. Pura ini juga menjadi titik fokus Perang Kusamba, 
            sebuah perang antara Tentara Kerajaan Hindia Belanda yang dipimpin oleh Mayor Jenderal Andreas Victor Michiels melawan rakyat Klungkung yang dipimpin oleh Dewa Agung Istri Kanya. '],
       
        ]);
    }
}