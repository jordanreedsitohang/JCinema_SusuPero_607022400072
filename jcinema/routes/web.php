<?php

use Illuminate\Support\Facades\Route;
use App\Models\Rating;
use App\Models\Order;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| DATA FILM (SATU SUMBER)
|--------------------------------------------------------------------------
*/
function getFilms()
{
    return [

        [
            'id' => 1,
            'judul' => 'Superman',
            'poster' => 'https://www.razorfine.com/wp-content/uploads/2025/07/superman-2025-poster2.jpg',
            'deskripsi' => 'Superman harus mendamaikan warisan alien Kryptonian-nya dengan latar belakangnya sebagai manusia, yaitu sebagai reporter Clark Kent. Sebagai perwujudan kebenaran, keadilan, dan nilai-nilai kemanusiaan, ia segera mendapati dirinya berada di dunia yang memandang hal-hal tersebut sebagai sesuatu yang ketinggalan zaman.',
            'durasi' => 129,
            'genre' => 'Superhero, Aksi, Petualangan, dan Fiksi Ilmiah'
        ],
        [
            'id' => 2,
            'judul' => 'Godzilla Minus One',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BY2MzOWZlYmYtM2NiOC00YWE5LWExYjUtODRmY2U2OGJmMzY0XkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Seorang pilot kamikaze yang dihantui rasa bersalah karena selamat mencari penebusan ketika monster raksasa yang gagal ia bunuh berubah bentuk akibat radiasi dari uji coba bom atom dan mengepung Jepang pasca-perang.',
            'durasi' => 181,
            'genre' => 'Action'
        ],
        [
            'id' => 3,
            'judul' => 'Pacific Rim',
            'poster' => 'https://i.ebayimg.com/images/g/ryMAAOSwYLVmaW1L/s-l1200.jpg',
            'deskripsi' => 'Saat perang antara umat manusia dan makhluk laut mengerikan berkecamuk, seorang mantan pilot dan seorang peserta pelatihan dipasangkan untuk mengoperasikan senjata khusus yang tampaknya usang dalam upaya putus asa untuk menyelamatkan dunia dari kiamat.',
            'durasi' => 169,
            'genre' => 'Sci-Fi'
        ],
        [
            'id' => 4,
            'judul' => 'Transformers: Age of Extinction',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMjE1OTMyODA5M15BMl5BanBnXkFtZTgwMjc2MDk3MTE@._V1_.jpg',
            'deskripsi' => 'Ketika umat manusia bersekutu dengan seorang pemburu hadiah dalam pengejaran Optimus Prime, Autobot meminta bantuan kepada seorang mekanik dan keluarganya.',
            'durasi' => 148,
            'genre' => 'Thriller'
        ],
        [
            'id' => 5,
            'judul' => 'Batman v Superman: Dawn of Justice',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZTJkYjdmYjYtOGMyNC00ZGU1LThkY2ItYTc1OTVlMmE2YWY1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Batman dimanipulasi oleh Lex Luthor untuk takut pada Superman. Sementara itu, keberadaan Superman memecah belah dunia dan dia dijebak atas tuduhan pembunuhan selama krisis internasional. Para pahlawan berkonflik dan memaksa Wonder Woman yang netral untuk muncul kembali.',
            'durasi' => 122,
            'genre' => 'Drama'
        ],
        [
            'id' => 6,
            'judul' => 'The Batman',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYmNlZjNiYjgtOWZmMy00ZGQ5LTkzNDUtMTQ3Mzc3YjEwOTc0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Ketika seorang pembunuh berantai sadis mulai membunuh tokoh-tokoh politik penting di Gotham, Batman terpaksa menyelidiki korupsi tersembunyi di kota itu dan mempertanyakan keterlibatan keluarganya.',
            'durasi' => 176,
            'genre' => 'Action'
        ],
        [
            'id' => 7,
            'judul' => 'Transformers: Rise of the Beasts',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZTVkZWY5MmItYjY3OS00OWY3LTg2NWEtOWE1NmQ4NGMwZGNlXkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Selama tahun 90-an, faksi Transformers baru - Maximals - bergabung dengan Autobots sebagai sekutu dalam pertempuran untuk Bumi.',
            'durasi' => 155,
            'genre' => 'Sci-Fi'
        ],
        [
            'id' => 8,
            'judul' => 'Jurassic World',
            'poster' => 'https://image.tmdb.org/t/p/original/rhr4y79GpxQF9IsfJItRXVaoGs4.jpg',
            'deskripsi' => 'Sebuah taman hiburan baru, yang dibangun di lokasi asli Jurassic Park, menciptakan dinosaurus hibrida hasil rekayasa genetika, Indominus Rex, yang melarikan diri dari penangkaran dan melakukan pembantaian.',
            'durasi' => 180,
            'genre' => 'Drama'
        ],
        [
            'id' => 9,
            'judul' => 'How to Train Your Dragon',
            'poster' => 'https://image.tmdb.org/t/p/original/53dsJ3oEnBhTBVMigWJ9tkA5bzJ.jpg',
            'deskripsi' => 'Ketika ancaman kuno membahayakan baik Viking maupun naga di pulau Berk, persahabatan antara Hiccup, seorang Viking yang cerdas, dan Toothless, seekor naga Night Fury, menjadi kunci bagi kedua spesies untuk membangun masa depan baru bersama.',
            'durasi' => 101,
            'genre' => 'Action'
        ],
        [
            'id' => 10,
            'judul' => 'Avengers: Age of Ultron',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BODBhYTg1NGQtNGVmNS00ZTdiLThjYTYtZDFkNzRiNTZmNDZjXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Ketika Tony Stark dan Bruce Banner mencoba menghidupkan kembali program penjaga perdamaian yang tidak aktif bernama Ultron, segalanya menjadi kacau dan terserah pada para pahlawan terkuat Bumi untuk menghentikan Ultron yang jahat dari melaksanakan rencana mengerikannya.',
            'durasi' => 141,
            'genre' => 'Action'
        ],

        [
            'id' => 11,
            'judul' => 'Avengers: Infinity War',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_.jpg',
            'deskripsi' => 'Para Avengers dan sekutu mereka harus rela mengorbankan segalanya dalam upaya mengalahkan Thanos yang perkasa sebelum serangan dahsyat dan kehancurannya mengakhiri alam semesta',
            'durasi' => 144,
            'genre' => 'Action'
        ],
        [
            'id' => 12,
            'judul' => 'Man of Steel',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMDdhY2M5NjItMWUwZi00MGRhLTgyMWItZTViMzNkYjkxOGI2XkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Seorang anak alien dievakuasi dari dunianya yang sekarat dan dikirim ke Bumi untuk hidup di antara manusia. Kedamaiannya terancam ketika para penyintas lain dari planet asalnya menyerang Bumi.',
            'durasi' => 113,
            'genre' => 'Action'
        ],
        [
            'id' => 13,
            'judul' => 'Zack Snyders Justice League',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNDA0MzM5YTctZTU2My00NGQ5LWE2NTEtNDM0MjZmMDBkOTZkXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Bertekad untuk memastikan bahwa pengorbanan terakhir Superman tidak sia-sia, Bruce Wayne merekrut tim manusia super untuk melindungi dunia dari ancaman dahsyat yang akan datang.',
            'durasi' => 148,
            'genre' => 'Action'
        ],
        [
            'id' => 14,
            'judul' => 'The Flash',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZDU4MGExZGEtMWRlMC00NjRhLThhZGQtMGIxMDFlNjE5MWVlXkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Barry Allen menggunakan kecepatan supernya untuk mengubah masa lalu, tetapi upayanya untuk menyelamatkan keluarganya menciptakan dunia tanpa pahlawan super, memaksanya untuk berpacu demi hidupnya untuk menyelamatkan masa depan.',
            'durasi' => 115,
            'genre' => 'Fantasy'
        ],
        [
            'id' => 15,
            'judul' => 'Rampage',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMzJjZjE0MDktMGEzYy00ZDY1LWJlNjYtYWNlZmFhZWMyMTQ4XkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Ketika tiga hewan berbeda terinfeksi patogen berbahaya, seorang primatolog dan seorang ahli genetika bekerja sama untuk menghentikan mereka menghancurkan Chicago.',
            'durasi' => 134,
            'genre' => 'Action'
        ],
        [
            'id' => 16,
            'judul' => 'The Incredible Hulk',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNTRkMGJmNDgtODc4MC00NjI2LTljZTgtZWJmNjZkZTg3ZmE0XkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Bruce Banner, seorang ilmuwan yang buron dari Pemerintah AS, harus menemukan obat untuk monster yang berubah menjadi dirinya setiap kali ia kehilangan kendali emosi.',
            'durasi' => 136,
            'genre' => 'Sci-Fi'
        ],
        [
            'id' => 17,
            'judul' => 'Godzilla',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BODE2NTdmMmYtY2U1OS00MjExLWIwNjQtYjQ5NTA0ZDZmZjZiXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Dunia dilanda kemunculan makhluk-makhluk mengerikan, tetapi mungkin hanya salah satu dari mereka yang dapat menyelamatkan umat manusia.',
            'durasi' => 162,
            'genre' => 'Sci-Fi'
        ],
        [
            'id' => 18,
            'judul' => 'Godzilla: King of the Monsters',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMDVhMjk2OGUtYzYxNS00NzBjLTk5YTItYzI0ZjgzNjY1NmI0XkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Badan kriptozoologi Monarch berhadapan dengan serangkaian monster berukuran raksasa, termasuk Godzilla yang perkasa, yang bertarung melawan Mothra, Rodan, dan musuh bebuyutannya, King Ghidorah yang berkepala tiga.',
            'durasi' => 112,
            'genre' => 'Horror'
        ],
        [
            'id' => 19,
            'judul' => 'Godzilla vs. Kong',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMmI2NDdmODEtODllNi00NzcwLWI4N2EtNmM5MTE1MDhlMWVlXkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Babak epik selanjutnya dalam Monsterverse sinematik mempertemukan dua ikon terbesar dalam sejarah perfilman—Godzilla yang menakutkan dan Kong yang perkasa—dengan nasib umat manusia yang dipertaruhkan.',
            'durasi' => 135,
            'genre' => 'Horror'
        ],
        [
            'id' => 20,
            'judul' => 'Godzilla x Kong: The New Empire',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYWIwYTE5NTItOTdhNS00YmUyLWI1YTUtOTBmZmE4ZjRjODY2XkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Dua raksasa purba, Godzilla dan Kong, berbenturan dalam pertempuran epik saat manusia mengungkap asal-usul mereka yang saling terkait dan hubungan mereka dengan misteri Pulau Tengkorak.',
            'durasi' => 132,
            'genre' => 'Drama'
        ],

        [
            'id' => 21,
            'judul' => 'Venom',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNTYwMDg5MDItNjhmZi00NmVmLThjNWItMmNkMjVkMWRhNzI2XkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Seorang reporter yang gagal terikat dengan entitas alien, salah satu dari banyak simbion yang telah menginvasi Bumi. Namun makhluk itu menyukai Bumi dan memutuskan untuk melindunginya.',
            'durasi' => 119,
            'genre' => 'War'
        ],
        [
            'id' => 22,
            'judul' => 'Sonic the Hedgehog 3',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYTY3MWZjOTMtMzEwMS00OTcyLWI4MmEtODQwNjllYzZmMWJmXkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Sonic, Knuckles, dan Tails bersatu kembali melawan musuh baru yang tangguh, Shadow, seorang penjahat misterius dengan kekuatan yang belum pernah mereka hadapi sebelumnya. Karena kemampuan mereka kalah jauh, Tim Sonic harus mencari aliansi yang tak terduga.',
            'durasi' => 155,
            'genre' => 'Action'
        ],
        [
            'id' => 23,
            'judul' => 'Aquaman and the Lost Kingdom',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYjQ1ZTUzMWMtY2VkNS00ZDRjLWEwODYtYmFkMWJiNTQxMDUzXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Black Manta ingin membalas dendam kepada Aquaman atas kematian ayahnya. Dengan kekuatan Trisula Hitam, ia menjadi musuh yang tangguh. Untuk mempertahankan Atlantis, Aquaman menjalin aliansi dengan saudaranya yang dipenjara. Mereka harus melindungi kerajaan tersebut.',
            'durasi' => 152,
            'genre' => 'Action'
        ],
        [
            'id' => 24,
            'judul' => 'The Amazing Spider-Man 2',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMzMzOTc2Mzg2OV5BMl5BanBnXkFtZTgwOTc2MDk5MDE@._V1_.jpg',
            'deskripsi' => 'Ketika New York dikepung oleh Oscorp, Spider-Man harus menyelamatkan kota yang telah ia sumpahi untuk lindungi, serta orang-orang yang dicintainya.',
            'durasi' => 120,
            'genre' => 'Action'
        ],
        [
            'id' => 25,
            'judul' => 'Thunderbolts*',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYWE2NmNmYTItZGY0ZC00MmY2LTk1NDAtMGUyMGEzMjcxNWM0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Setelah terjebak dalam perangkap maut, tim antihero yang tidak biasa ini harus menjalankan misi berbahaya yang akan memaksa mereka untuk menghadapi sisi tergelap masa lalu mereka.',
            'durasi' => 142,
            'genre' => 'Drama'
        ],
        [
            'id' => 26,
            'judul' => 'Shang-Chi and the Legend of the Ten Rings',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZmY5MDcyNzAtYzg3MC00MGNlLTg3OGItNmRjYThkZGVlNzAyXkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Shang-Chi, ahli Kung Fu berbasis senjata, terpaksa menghadapi masa lalunya setelah terseret ke dalam organisasi Sepuluh Cincin.',
            'durasi' => 142,
            'genre' => 'Drama'
        ],
        [
            'id' => 27,
            'judul' => 'Guardians of the Galaxy Vol. 3',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BOTJhOTMxMmItZmE0Ny00MDc3LWEzOGEtOGFkMzY4MWYyZDQ0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Masih berduka atas kehilangan Gamora, Peter Quill mengumpulkan timnya untuk membela alam semesta dan salah satu anggota mereka - sebuah misi yang bisa berarti akhir dari Guardians jika tidak berhasil.',
            'durasi' => 178,
            'genre' => 'Fantasy'
        ],
        [
            'id' => 28,
            'judul' => 'Deadpool 2',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNzczMjUwMzk0M15BMl5BanBnXkFtZTgwNjY4OTQ3NDM@._V1_.jpg',
            'deskripsi' => 'Wade Wilson (alias Deadpool), seorang tentara bayaran mutan bermulut kotor, mengumpulkan tim yang terdiri dari sesama mutan nakal untuk melindungi seorang anak laki-laki dengan kemampuan khusus dari Cable, seorang cyborg brutal yang mampu melakukan perjalanan waktu.',
            'durasi' => 143,
            'genre' => 'Adventure'
        ],
        [
            'id' => 29,
            'judul' => 'Black Adam',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZmI4YTgxOGQtNzU5MS00OTIyLThmMDQtZjljMWFjZDU0YTQ0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'deskripsi' => 'Hampir 5.000 tahun setelah ia dianugerahi kekuatan maha dahsyat para dewa Mesir—dan dipenjara dengan cepat—Black Adam dibebaskan dari makam dunianya, siap untuk melepaskan bentuk keadilan uniknya di dunia modern.',
            'durasi' => 124,
            'genre' => 'Adventure'
        ],
        [
            'id' => 30,
            'judul' => 'The Suicide Squad',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BM2ZmNjgzNzItMDdkMS00NzJlLTllMTYtZDEzZjZmZTkxY2RiXkEyXkFqcGc@._V1_.jpg',
            'deskripsi' => 'Para penjahat super Harley Quinn, Bloodsport, Peacemaker, dan sejumlah narapidana gila di penjara Belle Reve bergabung dengan Satuan Tugas X yang sangat rahasia dan mencurigakan saat mereka diantar ke pulau terpencil Corto Maltese yang dipenuhi musuh.',
            'durasi' => 113,
            'genre' => 'Sci-Fi'
        ],

    ];
}

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $films = getFilms();
    $rekomendasi = array_slice($films, 0, 7);
    return view('home', compact('films', 'rekomendasi'));
});

/*
|--------------------------------------------------------------------------
| DETAIL FILM
|--------------------------------------------------------------------------
*/
Route::get('/films/{id}', function ($id) {
    $film = collect(getFilms())->firstWhere('id', (int) $id);
    if (!$film) abort(404);
    $film = (object) $film;

    $ratings = Rating::where('film_id', $id)->get();
    $avgRating = Rating::where('film_id', $id)->avg('rating');
    $totalRating = Rating::where('film_id', $id)->count();

    return view('film_detail', compact('film', 'ratings', 'avgRating', 'totalRating'));
});

/*
|--------------------------------------------------------------------------
| JADWAL
|--------------------------------------------------------------------------
*/
Route::get('/films/{id}/schedule', function ($id) {
    $film = collect(getFilms())->firstWhere('id', (int) $id);
    if (!$film) abort(404);
    return view('schedule', ['film' => (object)$film]);
});

/*
|--------------------------------------------------------------------------
| ORDER & RATING
|--------------------------------------------------------------------------
*/
Route::get('/order/{id}', fn ($id) => view('order', compact('id')));
Route::post('/order', [OrderController::class, 'store']);
Route::get('/summary', [OrderController::class, 'summary']);
Route::get('/order/{id}/delete', [OrderController::class, 'destroy']);

Route::post('/rating', [RatingController::class, 'store']);
Route::post('/rating/{id}/update', [RatingController::class, 'update']);
Route::get('/rating/{id}/delete', [RatingController::class, 'destroy']);
