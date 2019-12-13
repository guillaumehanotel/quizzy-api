<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {


        \DB::table('artists')->delete();

        \DB::table('artists')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Angèle',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/552961bfdb3d9ed86af6a4630d6d377d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:22',
                    'updated_at' => '2019-11-20 22:42:22',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Vitaa',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b651312f733b5e3e84f930b63ca1bbf5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:22',
                    'updated_at' => '2019-11-20 22:42:22',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Slimane',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f2631af18b281faf5e8fdac9e876df21/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:22',
                    'updated_at' => '2019-11-20 22:42:22',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Ed Sheeran',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2a03fcb312d1fe3825f81a94c5d70741/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:23',
                    'updated_at' => '2019-11-20 22:42:23',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Céline Dion',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e89cdd01e8fd49d0ab914387418d10ec/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:24',
                    'updated_at' => '2019-11-20 22:42:24',
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Sia',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/636f9751c8c0f987d856d40f12693eb5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:24',
                    'updated_at' => '2019-11-20 22:42:24',
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Maroon 5',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/459dfa4c1f2d710a7e97e70c15bb12a0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:25',
                    'updated_at' => '2019-11-20 22:42:25',
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Johnny Hallyday',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5e97118111f7dab5302ed5fb8d5c4ad5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:26',
                    'updated_at' => '2019-11-20 22:42:26',
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Camila Cabello',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7545c1cf7251e889585191fb5ace2da3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:26',
                    'updated_at' => '2019-11-20 22:42:26',
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Shawn Mendes',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/92d39e0c63920be6f045377334d69ac8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:42:27',
                    'updated_at' => '2019-11-20 22:56:31',
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Ariana Grande',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0719cb42b0b06111594604402ba085a5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:27',
                    'updated_at' => '2019-11-20 22:42:27',
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Clara Luciani',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b1df5b9f42dc59adb28f04bec17e40d0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:28',
                    'updated_at' => '2019-11-20 22:42:28',
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Rihanna',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7d514d87a45a59d6094e028d750f3039/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:28',
                    'updated_at' => '2019-11-20 22:42:28',
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Christophe Maé',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/11d57498663fb0bcd3c6b0db9139046a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:29',
                    'updated_at' => '2019-11-20 22:42:29',
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'The Black Eyed Peas',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/98269f898d9a37dabb2b73e04efc1405/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:29',
                    'updated_at' => '2019-11-20 22:42:29',
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Renaud',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7fb8883264e8b6f598a55e3d88aacc04/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:30',
                    'updated_at' => '2019-11-20 22:42:30',
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'J Balvin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7c27c3677091e67a00fe10c8d8ad1932/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:42:31',
                    'updated_at' => '2019-11-20 22:57:27',
                ),
            17 =>
                array(
                    'id' => 18,
                    'name' => 'Jean-Louis Aubert',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/85a801a26cc474c3c95418d7385ef2bf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:32',
                    'updated_at' => '2019-11-20 22:42:32',
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => 'Kendji Girac',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dc1a330a218ae0f99e48b91f4693144c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:32',
                    'updated_at' => '2019-11-20 22:42:32',
                ),
            19 =>
                array(
                    'id' => 20,
                    'name' => 'Michael Jackson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/86b13342a65ffe06fa151ce353a7b278/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:33',
                    'updated_at' => '2019-11-20 22:42:33',
                ),
            20 =>
                array(
                    'id' => 21,
                    'name' => 'Beyoncé',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/129da72a39febe3247483ae2270739dd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:34',
                    'updated_at' => '2019-11-20 22:42:34',
                ),
            21 =>
                array(
                    'id' => 22,
                    'name' => 'Selena Gomez',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f2c427eadb27156eaec66132c4d1b06f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:34',
                    'updated_at' => '2019-11-20 22:42:34',
                ),
            22 =>
                array(
                    'id' => 23,
                    'name' => 'Calogero',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/74621221bb26745a6fe8ceefbbface05/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:35',
                    'updated_at' => '2019-11-20 22:42:35',
                ),
            23 =>
                array(
                    'id' => 24,
                    'name' => 'Sam Smith',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d42e724e123eb5c97865bc117c936d38/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:36',
                    'updated_at' => '2019-11-20 22:42:36',
                ),
            24 =>
                array(
                    'id' => 25,
                    'name' => 'Dua Lipa',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e6a04d735093a46dcc8be197681d1199/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:37',
                    'updated_at' => '2019-11-20 22:42:37',
                ),
            25 =>
                array(
                    'id' => 26,
                    'name' => 'Ava Max',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ab24ffa77a8aca22871f24e36186b38a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:37',
                    'updated_at' => '2019-11-20 22:42:37',
                ),
            26 =>
                array(
                    'id' => 27,
                    'name' => 'Justin Bieber',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3e2ffac57dbc16621978cd175aa3878b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:38',
                    'updated_at' => '2019-11-20 22:42:38',
                ),
            27 =>
                array(
                    'id' => 28,
                    'name' => 'Kygo',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/df5ebed126f2e7402769782dae1e8c68/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:42:39',
                    'updated_at' => '2019-11-20 22:44:28',
                ),
            28 =>
                array(
                    'id' => 29,
                    'name' => 'Adele',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/22c83631d238c4e21800a75a79c54c61/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:39',
                    'updated_at' => '2019-11-20 22:42:39',
                ),
            29 =>
                array(
                    'id' => 30,
                    'name' => 'Trois Cafés Gourmands',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6a185a3ff4fb525f59f16b5c40bf41c5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:40',
                    'updated_at' => '2019-11-20 22:42:40',
                ),
            30 =>
                array(
                    'id' => 31,
                    'name' => 'P!nk',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/874ede04c616a86dcaf793aa3283ca63/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:41',
                    'updated_at' => '2019-11-20 22:42:41',
                ),
            31 =>
                array(
                    'id' => 32,
                    'name' => 'Elton John',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/86e18a448593a4c28ef0a75d2ad888ec/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:41',
                    'updated_at' => '2019-11-20 22:42:41',
                ),
            32 =>
                array(
                    'id' => 33,
                    'name' => 'Xxxtentacion',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/62e6edfaf5461eeb5b7310903229607a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:42',
                    'updated_at' => '2019-11-20 22:42:42',
                ),
            33 =>
                array(
                    'id' => 34,
                    'name' => 'Alain Souchon',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0e97a724f6ca4bb29f073fe093270b36/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:43',
                    'updated_at' => '2019-11-20 22:42:43',
                ),
            34 =>
                array(
                    'id' => 35,
                    'name' => 'ZAYN',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/418bd334e48d49e0a00259950acddd69/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:44',
                    'updated_at' => '2019-11-20 22:42:44',
                ),
            35 =>
                array(
                    'id' => 36,
                    'name' => 'Stromae',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/657264c62071008afa7535e7f2390ae2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:44',
                    'updated_at' => '2019-11-20 22:42:44',
                ),
            36 =>
                array(
                    'id' => 37,
                    'name' => 'Bruno Mars',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/25d38ffc3fd6a36ac71a08ff6ed90fa2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:45',
                    'updated_at' => '2019-11-20 22:42:45',
                ),
            37 =>
                array(
                    'id' => 38,
                    'name' => 'Therapie TAXI',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c559fea05c0c17a7b0de856ee9bdf2f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:45',
                    'updated_at' => '2019-11-20 22:42:45',
                ),
            38 =>
                array(
                    'id' => 39,
                    'name' => 'Vianney',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3c62763ff6b0bcbbbf7c894c4244c571/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:46',
                    'updated_at' => '2019-11-20 22:42:46',
                ),
            39 =>
                array(
                    'id' => 40,
                    'name' => 'LSD',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/70d0eb7c7f6a101c0229b2c572ad341c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:47',
                    'updated_at' => '2019-11-20 22:42:47',
                ),
            40 =>
                array(
                    'id' => 41,
                    'name' => 'Jonas Brothers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b44f810dbc8e290925514360ffb21882/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:42:47',
                    'updated_at' => '2019-11-20 22:56:31',
                ),
            41 =>
                array(
                    'id' => 42,
                    'name' => 'Michel Sardou',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b9457446054559e0e124faf471bda457/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:48',
                    'updated_at' => '2019-11-20 22:42:48',
                ),
            42 =>
                array(
                    'id' => 43,
                    'name' => 'Katy Perry',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/24fe428816bfe09b9a9d6e3da68bf908/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:49',
                    'updated_at' => '2019-11-20 22:42:49',
                ),
            43 =>
                array(
                    'id' => 44,
                    'name' => 'Pomme',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/610b9ab7c7531c804bf7754f6430ef15/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:50',
                    'updated_at' => '2019-11-20 22:42:50',
                ),
            44 =>
                array(
                    'id' => 45,
                    'name' => 'Charles Aznavour',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cb4efb957e6042d018bb6f44c4402fb3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:50',
                    'updated_at' => '2019-11-20 22:42:50',
                ),
            45 =>
                array(
                    'id' => 46,
                    'name' => 'Taylor Swift',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/254e356010a50dd4dababc4b50856a55/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:51',
                    'updated_at' => '2019-11-20 22:42:51',
                ),
            46 =>
                array(
                    'id' => 47,
                    'name' => 'Eddy de Pretto',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/454715339062053dc6a6e4c2c5f692c3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:52',
                    'updated_at' => '2019-11-20 22:42:52',
                ),
            47 =>
                array(
                    'id' => 48,
                    'name' => 'The Police',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5b4796f1d81da41fa45db0eda8d51b04/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:53',
                    'updated_at' => '2019-11-20 22:42:53',
                ),
            48 =>
                array(
                    'id' => 49,
                    'name' => 'Alec Benjamin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/df2790e3b0469732e1cc11a23271a7d7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:53',
                    'updated_at' => '2019-11-20 22:42:53',
                ),
            49 =>
                array(
                    'id' => 50,
                    'name' => 'Justin Timberlake',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2352e031a18241b9d944f1b2a72231cc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 1,
                    'created_at' => '2019-11-20 22:42:54',
                    'updated_at' => '2019-11-20 22:42:54',
                ),
            50 =>
                array(
                    'id' => 51,
                    'name' => 'Bobby McFerrin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/23a451598f5e91e81b66bf45c3f0ca70/250x250-000000-80-0-0.jpg',
                    'genre_id' => 2,
                    'created_at' => '2019-11-20 22:42:55',
                    'updated_at' => '2019-11-20 22:42:55',
                ),
            51 =>
                array(
                    'id' => 52,
                    'name' => 'Norman Greenbaum',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1b1eb0c54558ddc93f2696995ddf448c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 2,
                    'created_at' => '2019-11-20 22:42:56',
                    'updated_at' => '2019-11-20 22:42:56',
                ),
            52 =>
                array(
                    'id' => 53,
                    'name' => 'Dakota Staton',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 2,
                    'created_at' => '2019-11-20 22:42:56',
                    'updated_at' => '2019-11-20 22:42:56',
                ),
            53 =>
                array(
                    'id' => 54,
                    'name' => 'Chris Heria',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 2,
                    'created_at' => '2019-11-20 22:42:57',
                    'updated_at' => '2019-11-20 22:42:57',
                ),
            54 =>
                array(
                    'id' => 55,
                    'name' => 'Peter Schilling',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e03ff39994c7782d1937a3d564eb3290/250x250-000000-80-0-0.jpg',
                    'genre_id' => 2,
                    'created_at' => '2019-11-20 22:42:57',
                    'updated_at' => '2019-11-20 22:42:57',
                ),
            55 =>
                array(
                    'id' => 56,
                    'name' => 'Bobby Helms',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2f7d1ef52e57a1e4e7244a9427bdda00/250x250-000000-80-0-0.jpg',
                    'genre_id' => 2,
                    'created_at' => '2019-11-20 22:42:58',
                    'updated_at' => '2019-11-20 22:42:58',
                ),
            56 =>
                array(
                    'id' => 57,
                    'name' => 'Gil Scott-Heron & Brian Jackson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b54d1a4075ed7e5db95462d6a3501212/250x250-000000-80-0-0.jpg',
                    'genre_id' => 2,
                    'created_at' => '2019-11-20 22:42:59',
                    'updated_at' => '2019-11-20 22:42:59',
                ),
            57 =>
                array(
                    'id' => 58,
                    'name' => 'Jul',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4ad5a1a6eebec66da3db5796d947be01/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:42:59',
                    'updated_at' => '2019-11-20 22:42:59',
                ),
            58 =>
                array(
                    'id' => 59,
                    'name' => 'Ninho',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/14b6d64846cf8ba2669eecad6a899e5a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:42:59',
                    'updated_at' => '2019-11-20 22:42:59',
                ),
            59 =>
                array(
                    'id' => 60,
                    'name' => 'Lomepal',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/bcf25807dd3e29b8622a1101dae0edbf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:00',
                    'updated_at' => '2019-11-20 22:43:00',
                ),
            60 =>
                array(
                    'id' => 61,
                    'name' => 'Djadja & Dinaz',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/df73aebd3afe8c55f0f94f3bc029a7eb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:01',
                    'updated_at' => '2019-11-20 22:43:01',
                ),
            61 =>
                array(
                    'id' => 62,
                    'name' => 'Nekfeu',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0c093e137a288db8d08133ecf092c213/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:01',
                    'updated_at' => '2019-11-20 22:43:01',
                ),
            62 =>
                array(
                    'id' => 63,
                    'name' => 'Niska',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f03af182a46b9f16be9c3a16d0771286/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:02',
                    'updated_at' => '2019-11-20 22:43:02',
                ),
            63 =>
                array(
                    'id' => 64,
                    'name' => 'Gambi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c53181f2df2414414dd1e21f505b28de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:03',
                    'updated_at' => '2019-11-20 22:43:03',
                ),
            64 =>
                array(
                    'id' => 65,
                    'name' => 'PNL',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9277fdce45b79945918c24f69cb6e8e3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:03',
                    'updated_at' => '2019-11-20 22:43:03',
                ),
            65 =>
                array(
                    'id' => 66,
                    'name' => 'Vald',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c7532cc5ccd57803912edbd5646ac5f4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:04',
                    'updated_at' => '2019-11-20 22:43:04',
                ),
            66 =>
                array(
                    'id' => 67,
                    'name' => 'Soprano',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c188b3b652009ca1f644656fce77be43/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:06',
                    'updated_at' => '2019-11-20 22:43:06',
                ),
            67 =>
                array(
                    'id' => 68,
                    'name' => 'PLK',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3a2117da0acdf3d87659626d8f0e6528/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:06',
                    'updated_at' => '2019-11-20 22:43:06',
                ),
            68 =>
                array(
                    'id' => 69,
                    'name' => 'Koba LaD',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f751972549afa17afec71375014ec9ca/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:07',
                    'updated_at' => '2019-11-20 22:43:07',
                ),
            69 =>
                array(
                    'id' => 70,
                    'name' => '47Ter',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6943595db1e3a00dadcb44b6beccc58f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:08',
                    'updated_at' => '2019-11-20 22:43:08',
                ),
            70 =>
                array(
                    'id' => 71,
                    'name' => 'Moha La Squale',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1ddfb94bbf38693aed5cadcfea8174ed/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:09',
                    'updated_at' => '2019-11-20 22:43:09',
                ),
            71 =>
                array(
                    'id' => 72,
                    'name' => 'RK',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/dcbea83207e04905fbeaf48b302609df/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:10',
                    'updated_at' => '2019-11-20 22:43:10',
                ),
            72 =>
                array(
                    'id' => 73,
                    'name' => 'Booba',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b354e3298214e7146a05b663f10b6346/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:11',
                    'updated_at' => '2019-11-20 22:43:11',
                ),
            73 =>
                array(
                    'id' => 74,
                    'name' => 'Damso',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f1a596b126611260994271ce4cb54bb0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:11',
                    'updated_at' => '2019-11-20 22:43:11',
                ),
            74 =>
                array(
                    'id' => 75,
                    'name' => 'Sch',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e55561d16ad01452f3be48b0f936c3a8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:12',
                    'updated_at' => '2019-11-20 22:43:12',
                ),
            75 =>
                array(
                    'id' => 76,
                    'name' => 'Naza',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ab2977cf947fc17283f74098bd6547d4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:13',
                    'updated_at' => '2019-11-20 22:43:13',
                ),
            76 =>
                array(
                    'id' => 77,
                    'name' => 'Larry',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2c525d476ef03306bbbf680da1c5a045/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:14',
                    'updated_at' => '2019-11-20 22:43:14',
                ),
            77 =>
                array(
                    'id' => 78,
                    'name' => 'Maes',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e67d67cf17dbf73471cbc4ce3e0f735a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:14',
                    'updated_at' => '2019-11-20 22:43:14',
                ),
            78 =>
                array(
                    'id' => 79,
                    'name' => 'Naps',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/206044023d59462e7393913242066821/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:15',
                    'updated_at' => '2019-11-20 22:43:15',
                ),
            79 =>
                array(
                    'id' => 80,
                    'name' => 'Lorenzo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/95ab840232a0ad7bbbd4d796ecd24056/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:16',
                    'updated_at' => '2019-11-20 22:43:16',
                ),
            80 =>
                array(
                    'id' => 81,
                    'name' => 'Orelsan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/640e021fabe66e4f866a18d3c1406689/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:17',
                    'updated_at' => '2019-11-20 22:43:17',
                ),
            81 =>
                array(
                    'id' => 82,
                    'name' => 'DTF',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5de73c8fb339c35335925e06a29fb8db/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:18',
                    'updated_at' => '2019-11-20 22:43:18',
                ),
            82 =>
                array(
                    'id' => 83,
                    'name' => 'Niro',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/98bd75fb93ca88b493b93605fdf9b38f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:18',
                    'updated_at' => '2019-11-20 22:43:18',
                ),
            83 =>
                array(
                    'id' => 84,
                    'name' => 'Lefa',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/773c3a6d0d4da7c09e7add90645d79cf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:19',
                    'updated_at' => '2019-11-20 22:43:19',
                ),
            84 =>
                array(
                    'id' => 85,
                    'name' => 'Vegedream',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/46b6fcc8dfc5abfc44d6117c6a1ca178/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:20',
                    'updated_at' => '2019-11-20 22:43:20',
                ),
            85 =>
                array(
                    'id' => 86,
                    'name' => 'Zola',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f15f6574907e123d971b15fea4ac6d24/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:21',
                    'updated_at' => '2019-11-20 22:43:21',
                ),
            86 =>
                array(
                    'id' => 87,
                    'name' => 'Rilès',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/06108c1fdee9ec0b3990fc0db64caf63/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:22',
                    'updated_at' => '2019-11-20 22:43:22',
                ),
            87 =>
                array(
                    'id' => 88,
                    'name' => 'Eva',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4e6141d3c1165a33c36861d1c7554375/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:23',
                    'updated_at' => '2019-11-20 22:43:23',
                ),
            88 =>
                array(
                    'id' => 89,
                    'name' => 'Lacrim',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/133332a97ee5928b122b38f809bd0b91/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:23',
                    'updated_at' => '2019-11-20 22:43:23',
                ),
            89 =>
                array(
                    'id' => 90,
                    'name' => 'Alkpote',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e9f7bfb63221b4a46e4d12152a28ff60/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:24',
                    'updated_at' => '2019-11-20 22:43:24',
                ),
            90 =>
                array(
                    'id' => 91,
                    'name' => 'Kanye West',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/89c7cfe83e93bc2cee952eb73ec84913/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:25',
                    'updated_at' => '2019-11-20 22:43:25',
                ),
            91 =>
                array(
                    'id' => 92,
                    'name' => 'Eminem',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0707267475580b1b82f4da20a1b295c6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:26',
                    'updated_at' => '2019-11-20 22:43:26',
                ),
            92 =>
                array(
                    'id' => 93,
                    'name' => 'Bigflo & Oli',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6402914a93016eac94f880898d26e8b7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:27',
                    'updated_at' => '2019-11-20 22:43:27',
                ),
            93 =>
                array(
                    'id' => 94,
                    'name' => 'Leto',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b8c80dca893ef757807211fa859cd12e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:28',
                    'updated_at' => '2019-11-20 22:43:28',
                ),
            94 =>
                array(
                    'id' => 95,
                    'name' => 'Kalash',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a82621bfb5864774de52f5734af1c424/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:29',
                    'updated_at' => '2019-11-20 22:43:29',
                ),
            95 =>
                array(
                    'id' => 96,
                    'name' => 'Post Malone',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/718942059d7b35b22a40da0d23554e8d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:29',
                    'updated_at' => '2019-11-20 22:43:29',
                ),
            96 =>
                array(
                    'id' => 97,
                    'name' => 'Sadek',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1a76a01cf4e2ed442b077b8c9d662973/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:30',
                    'updated_at' => '2019-11-20 22:43:30',
                ),
            97 =>
                array(
                    'id' => 98,
                    'name' => 'Rémy',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9dd0f9b560f232a8efa263f2edd840ec/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:31',
                    'updated_at' => '2019-11-20 22:43:31',
                ),
            98 =>
                array(
                    'id' => 99,
                    'name' => 'Heuss L\'enfoiré',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c1950d01eb6f6100c1296fa4199329f7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:32',
                    'updated_at' => '2019-11-20 22:43:32',
                ),
            99 =>
                array(
                    'id' => 100,
                    'name' => 'Soolking',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/59888ae39076cd2887b9b62723f5e5fa/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:33',
                    'updated_at' => '2019-11-20 22:43:33',
                ),
            100 =>
                array(
                    'id' => 101,
                    'name' => 'Columbine',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/edb317972de2527eacf88c4d7510c532/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:33',
                    'updated_at' => '2019-11-20 22:43:33',
                ),
            101 =>
                array(
                    'id' => 102,
                    'name' => 'Jok\'air',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2f11dddd908252f110daf90d8dc204f5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:34',
                    'updated_at' => '2019-11-20 22:43:34',
                ),
            102 =>
                array(
                    'id' => 103,
                    'name' => 'Travis Scott',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c188e6a66583e0d63a8cbb3b3143e042/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:35',
                    'updated_at' => '2019-11-20 22:43:35',
                ),
            103 =>
                array(
                    'id' => 104,
                    'name' => 'Kaaris',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3c6387a6c492920b9fce3a2b0843aafb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:36',
                    'updated_at' => '2019-11-20 22:43:36',
                ),
            104 =>
                array(
                    'id' => 105,
                    'name' => 'Dosseh',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e80b5d8898657431eca5b0c2be55472d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:37',
                    'updated_at' => '2019-11-20 22:43:37',
                ),
            105 =>
                array(
                    'id' => 106,
                    'name' => 'KIKESA',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/780494eae72e0029c68ea38981dd71be/250x250-000000-80-0-0.jpg',
                    'genre_id' => 3,
                    'created_at' => '2019-11-20 22:43:38',
                    'updated_at' => '2019-11-20 22:43:38',
                ),
            106 =>
                array(
                    'id' => 107,
                    'name' => 'Queen',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/67bcf7c29a0654a435bd24af7be8868c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:39',
                    'updated_at' => '2019-11-20 22:43:39',
                ),
            107 =>
                array(
                    'id' => 108,
                    'name' => 'Saez',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a7fad4b82f618e2e7e930b8554c835d4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:39',
                    'updated_at' => '2019-11-20 22:43:39',
                ),
            108 =>
                array(
                    'id' => 109,
                    'name' => 'The Beatles',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e7f8aad6226980723164ee42e171bd17/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:40',
                    'updated_at' => '2019-11-20 22:43:40',
                ),
            109 =>
                array(
                    'id' => 110,
                    'name' => 'Coldplay',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/04cf6c8a81a23e65663e7362d98d5ad9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:43:41',
                    'updated_at' => '2019-11-20 22:45:56',
                ),
            110 =>
                array(
                    'id' => 111,
                    'name' => 'The Rolling Stones',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2ceac184bc846327f60c5b0d4247cc7a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:42',
                    'updated_at' => '2019-11-20 22:43:42',
                ),
            111 =>
                array(
                    'id' => 112,
                    'name' => 'Indochine',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/32ffb6c0d5c4ec75abd3807e39ff8daa/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:43',
                    'updated_at' => '2019-11-20 22:43:43',
                ),
            112 =>
                array(
                    'id' => 113,
                    'name' => 'Pink Floyd',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/72e579f46ccc702997c57eaa992df82e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:44',
                    'updated_at' => '2019-11-20 22:43:44',
                ),
            113 =>
                array(
                    'id' => 114,
                    'name' => 'U2',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/edc3ee765289d41a98fde2fafa78f0fa/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:45',
                    'updated_at' => '2019-11-20 22:43:45',
                ),
            114 =>
                array(
                    'id' => 115,
                    'name' => 'David Bowie',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2c768882b5736fe66e925e42d88003f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:45',
                    'updated_at' => '2019-11-20 22:43:45',
                ),
            115 =>
                array(
                    'id' => 116,
                    'name' => 'Nirvana',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3ec5542ff520ee74e2befdaba32ef2ef/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:46',
                    'updated_at' => '2019-11-20 22:43:46',
                ),
            116 =>
                array(
                    'id' => 117,
                    'name' => 'Dire Straits',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f19a27ddc443e92820e1350f8dabe7df/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:47',
                    'updated_at' => '2019-11-20 22:43:47',
                ),
            117 =>
                array(
                    'id' => 118,
                    'name' => 'Led Zeppelin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6acd3b5eedc37b4070aad2855ae0b6e6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:48',
                    'updated_at' => '2019-11-20 22:43:48',
                ),
            118 =>
                array(
                    'id' => 119,
                    'name' => 'Noir Désir',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ed51acdd7c5f9a78c403b99a9c5be489/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:49',
                    'updated_at' => '2019-11-20 22:43:49',
                ),
            119 =>
                array(
                    'id' => 120,
                    'name' => 'Jain',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2fc7da18afbd0e41393c46309aa218f8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:50',
                    'updated_at' => '2019-11-20 22:43:50',
                ),
            120 =>
                array(
                    'id' => 121,
                    'name' => 'Supertramp',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b344db2267e11a4fb9214ced2a845b78/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:50',
                    'updated_at' => '2019-11-20 22:43:50',
                ),
            121 =>
                array(
                    'id' => 122,
                    'name' => 'Louise Attaque',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/47e56e632fef2f1ef018fd6ab81b5151/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:43:51',
                    'updated_at' => '2019-11-20 22:46:03',
                ),
            122 =>
                array(
                    'id' => 123,
                    'name' => 'Scorpions',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7f0a7c2d00d314cb51a891d8ff244a89/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:52',
                    'updated_at' => '2019-11-20 22:43:52',
                ),
            123 =>
                array(
                    'id' => 124,
                    'name' => 'The Offspring',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d2d4e21f1eac8e5cb220621961909be2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:53',
                    'updated_at' => '2019-11-20 22:43:53',
                ),
            124 =>
                array(
                    'id' => 125,
                    'name' => 'Bruce Springsteen',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/60b35d0b5a4c49e561c3732499c50e02/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:54',
                    'updated_at' => '2019-11-20 22:43:54',
                ),
            125 =>
                array(
                    'id' => 126,
                    'name' => 'The Doors',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/94d0bdcebb2840d36ccf63e9edde540a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:55',
                    'updated_at' => '2019-11-20 22:43:55',
                ),
            126 =>
                array(
                    'id' => 127,
                    'name' => 'Fall Out Boy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1f3b89358abeb848a600827446bccbe4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:56',
                    'updated_at' => '2019-11-20 22:43:56',
                ),
            127 =>
                array(
                    'id' => 128,
                    'name' => 'Phil Collins',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/206b79a942ee278de023a9d3cd732f87/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:57',
                    'updated_at' => '2019-11-20 22:43:57',
                ),
            128 =>
                array(
                    'id' => 129,
                    'name' => 'Macklemore',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/05f641adbfea9526116737ee6fb751b9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:58',
                    'updated_at' => '2019-11-20 22:43:58',
                ),
            129 =>
                array(
                    'id' => 130,
                    'name' => 'Téléphone',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/515ab34a37147cc6ba275294b58bb3c8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:58',
                    'updated_at' => '2019-11-20 22:43:58',
                ),
            130 =>
                array(
                    'id' => 131,
                    'name' => 'The Clash',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/82a5fe6ba783cf618d5394ae0b8129b9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:43:59',
                    'updated_at' => '2019-11-20 22:43:59',
                ),
            131 =>
                array(
                    'id' => 132,
                    'name' => 'Eagles',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/371444a32dc3a3ea03c05702b04bd71e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:00',
                    'updated_at' => '2019-11-20 22:44:00',
                ),
            132 =>
                array(
                    'id' => 133,
                    'name' => 'Creedence Clearwater Revival',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3854c0eca16431e26987bf515f83d364/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:01',
                    'updated_at' => '2019-11-20 22:44:01',
                ),
            133 =>
                array(
                    'id' => 134,
                    'name' => 'Aerosmith',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8cc31f77a84d05a5b9ecc9bd1b941350/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:02',
                    'updated_at' => '2019-11-20 22:44:02',
                ),
            134 =>
                array(
                    'id' => 135,
                    'name' => 'Nickelback',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/90a001f1a4f4edb4e71c9bcfa57952dd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:03',
                    'updated_at' => '2019-11-20 22:44:03',
                ),
            135 =>
                array(
                    'id' => 136,
                    'name' => 'Placebo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9d485997cfa5d4eeb7895cb56cfa2c76/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:44:04',
                    'updated_at' => '2019-11-20 22:46:06',
                ),
            136 =>
                array(
                    'id' => 137,
                    'name' => 'London Grammar',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c5a98595c9c37b2c39c0b29d7dbb3ccb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:05',
                    'updated_at' => '2019-11-20 22:44:05',
                ),
            137 =>
                array(
                    'id' => 138,
                    'name' => 'Depeche Mode',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/48acc384982382ad4d520baf29f29309/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:05',
                    'updated_at' => '2019-11-20 22:44:05',
                ),
            138 =>
                array(
                    'id' => 139,
                    'name' => 'Rag\'n\'Bone Man',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9065ba52718a166c7d7f215ace3cf7d2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:06',
                    'updated_at' => '2019-11-20 22:44:06',
                ),
            139 =>
                array(
                    'id' => 140,
                    'name' => 'Shaka Ponk',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/02e237973b38db56e35e9eac2ab9671a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:08',
                    'updated_at' => '2019-11-20 22:44:08',
                ),
            140 =>
                array(
                    'id' => 141,
                    'name' => 'Kyo',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8b06ae1ed1c9d56e88d929b5cd110e7b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:08',
                    'updated_at' => '2019-11-20 22:44:08',
                ),
            141 =>
                array(
                    'id' => 142,
                    'name' => 'Eddy Mitchell',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ab1988f65082d9beec23be341eab275f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:09',
                    'updated_at' => '2019-11-20 22:44:09',
                ),
            142 =>
                array(
                    'id' => 143,
                    'name' => 'Ben Harper',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3a8c793f1e55569d570e99283b98045b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:10',
                    'updated_at' => '2019-11-20 22:44:10',
                ),
            143 =>
                array(
                    'id' => 144,
                    'name' => 'Rammstein',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d05f4f98703d86e3f1c9a9f6711ea3f3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:44:11',
                    'updated_at' => '2019-11-20 22:53:31',
                ),
            144 =>
                array(
                    'id' => 145,
                    'name' => 'Guns N\' Roses',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/36821a35c8d702edb842d8208530045f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:12',
                    'updated_at' => '2019-11-20 22:44:12',
                ),
            145 =>
                array(
                    'id' => 146,
                    'name' => 'The Cranberries',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8e57c9fe64a7d1c3ed241e16f4c0f154/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:13',
                    'updated_at' => '2019-11-20 22:44:13',
                ),
            146 =>
                array(
                    'id' => 147,
                    'name' => 'Oasis',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/394cacc228c90493a3ebbd7d0896c43e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:44:14',
                    'updated_at' => '2019-11-20 22:46:12',
                ),
            147 =>
                array(
                    'id' => 148,
                    'name' => 'Christine and the Queens',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/04f8ea39d3fa74f6b1b5c6f4da310983/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:15',
                    'updated_at' => '2019-11-20 22:44:15',
                ),
            148 =>
                array(
                    'id' => 149,
                    'name' => 'Lenny Kravitz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5687721fc3a05cf67f9cd81310f93ff9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:16',
                    'updated_at' => '2019-11-20 22:44:16',
                ),
            149 =>
                array(
                    'id' => 150,
                    'name' => 'Jacques Dutronc',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2afb61e39d90965eddf6d5b31c6740cb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:17',
                    'updated_at' => '2019-11-20 22:44:17',
                ),
            150 =>
                array(
                    'id' => 151,
                    'name' => 'R.E.M.',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3a7f353f78c9a2cb48c50ea554d877d7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:18',
                    'updated_at' => '2019-11-20 22:44:18',
                ),
            151 =>
                array(
                    'id' => 152,
                    'name' => 'Neil Young',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bdcc1dcee778e55db22c7d0ab011f964/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:19',
                    'updated_at' => '2019-11-20 22:44:19',
                ),
            152 =>
                array(
                    'id' => 153,
                    'name' => 'Bon Jovi',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/82e7bfbfdaa43aa40581f347b8dfe0e2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:20',
                    'updated_at' => '2019-11-20 22:44:20',
                ),
            153 =>
                array(
                    'id' => 154,
                    'name' => 'ZZ Top',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/098262d70eda66423e63c263d7781788/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:21',
                    'updated_at' => '2019-11-20 22:44:21',
                ),
            154 =>
                array(
                    'id' => 155,
                    'name' => 'Jimi Hendrix',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2deec542fc75d5691434c407ee077ff7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:22',
                    'updated_at' => '2019-11-20 22:44:22',
                ),
            155 =>
                array(
                    'id' => 156,
                    'name' => 'Foo Fighters',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/54c324b8651addd8c400de22f9dac5c8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 4,
                    'created_at' => '2019-11-20 22:44:23',
                    'updated_at' => '2019-11-20 22:44:23',
                ),
            156 =>
                array(
                    'id' => 157,
                    'name' => 'David Guetta',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e21bc6e42211c589982c2d7994cd53f4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:24',
                    'updated_at' => '2019-11-20 22:44:24',
                ),
            157 =>
                array(
                    'id' => 158,
                    'name' => 'DJ Snake',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/02b4b508aa974d5f6e8348e2186dd49f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:25',
                    'updated_at' => '2019-11-20 22:44:25',
                ),
            158 =>
                array(
                    'id' => 159,
                    'name' => 'Calvin Harris',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fa57fb13c77a51c68374f9e98686ee7d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:25',
                    'updated_at' => '2019-11-20 22:44:25',
                ),
            159 =>
                array(
                    'id' => 160,
                    'name' => 'Regard',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/094819cde9839e3be197a7e896e58f81/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:26',
                    'updated_at' => '2019-11-20 22:44:26',
                ),
            160 =>
                array(
                    'id' => 161,
                    'name' => 'Martin Garrix',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c53b684dc60abbde2a50afe9a524c863/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:27',
                    'updated_at' => '2019-11-20 22:44:27',
                ),
            161 =>
                array(
                    'id' => 162,
                    'name' => 'The Chainsmokers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/61871746a326aa46f5444dd69482364a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:29',
                    'updated_at' => '2019-11-20 22:44:29',
                ),
            162 =>
                array(
                    'id' => 163,
                    'name' => 'Avicii',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/82e214b0cb39316f4a12a082fded54f6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:29',
                    'updated_at' => '2019-11-20 22:44:29',
                ),
            163 =>
                array(
                    'id' => 164,
                    'name' => 'Bakermat',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8b7c157c83b2a9a1e74f4329c185add3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:30',
                    'updated_at' => '2019-11-20 22:44:30',
                ),
            164 =>
                array(
                    'id' => 165,
                    'name' => 'Jonas Blue',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bea868dc21f05d239541f90b537cfed1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:31',
                    'updated_at' => '2019-11-20 22:44:31',
                ),
            165 =>
                array(
                    'id' => 166,
                    'name' => 'Tyga',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a405e8b450afc46844b8fe0ff8c86fa3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:32',
                    'updated_at' => '2019-11-20 22:44:32',
                ),
            166 =>
                array(
                    'id' => 167,
                    'name' => 'Meduza',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/200e3743bf24361fb70e59d63d0261dd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:33',
                    'updated_at' => '2019-11-20 22:44:33',
                ),
            167 =>
                array(
                    'id' => 168,
                    'name' => 'GOODBOYS',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5848b98f7c214461e1fbcd77e0549dab/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:33',
                    'updated_at' => '2019-11-20 22:44:33',
                ),
            168 =>
                array(
                    'id' => 169,
                    'name' => 'Gabry Ponte',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/13cf5dad420735113c944961c98b8080/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:34',
                    'updated_at' => '2019-11-20 22:44:34',
                ),
            169 =>
                array(
                    'id' => 170,
                    'name' => 'LUM!X',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/affc71e8ef5ee11816c385d40f362a51/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:35',
                    'updated_at' => '2019-11-20 22:44:35',
                ),
            170 =>
                array(
                    'id' => 171,
                    'name' => 'Bebe Rexha',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c32f7d77f4b027384f92b5825cd7e7d6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:35',
                    'updated_at' => '2019-11-20 22:44:35',
                ),
            171 =>
                array(
                    'id' => 172,
                    'name' => 'Daft Punk',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f2bc007e9133c946ac3c3907ddc5d2ea/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:36',
                    'updated_at' => '2019-11-20 22:44:36',
                ),
            172 =>
                array(
                    'id' => 173,
                    'name' => 'SAINt JHN',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9de1ee6fef57af3f981f0835d4e48d22/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:37',
                    'updated_at' => '2019-11-20 22:44:37',
                ),
            173 =>
                array(
                    'id' => 174,
                    'name' => 'Tiësto',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b6ff15612b6ef51e5a552e4bd6abefd6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:37',
                    'updated_at' => '2019-11-20 22:44:37',
                ),
            174 =>
                array(
                    'id' => 175,
                    'name' => 'Dimitri Vegas & Like Mike',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4f8c9095b35ae79c8f8c236c0f6a13c5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:44:38',
                    'updated_at' => '2019-11-20 22:46:36',
                ),
            175 =>
                array(
                    'id' => 176,
                    'name' => 'Armin van Buuren',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b0f38796da86ebd57507e9fbed1c614b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:39',
                    'updated_at' => '2019-11-20 22:44:39',
                ),
            176 =>
                array(
                    'id' => 177,
                    'name' => 'Marshmello',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b9e931b12e626ad72990763df6ce0ad0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:40',
                    'updated_at' => '2019-11-20 22:44:40',
                ),
            177 =>
                array(
                    'id' => 178,
                    'name' => 'Jax Jones',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bbdb8680e0e63b6ec99257d753d96a97/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:41',
                    'updated_at' => '2019-11-20 22:44:41',
                ),
            178 =>
                array(
                    'id' => 179,
                    'name' => 'Alan Walker',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/79d384488d390e65a6c27a95c431627e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:42',
                    'updated_at' => '2019-11-20 22:44:42',
                ),
            179 =>
                array(
                    'id' => 180,
                    'name' => 'Younotus',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d9fdccd2716c8955e9861d856563fd9a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:43',
                    'updated_at' => '2019-11-20 22:44:43',
                ),
            180 =>
                array(
                    'id' => 181,
                    'name' => 'R3HAB',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9ffd911e8714bc4a2190c1f1f5b8cb51/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:44',
                    'updated_at' => '2019-11-20 22:44:44',
                ),
            181 =>
                array(
                    'id' => 182,
                    'name' => 'Robin Schulz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/72f073a5829b368025b49c460b4b1918/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:45',
                    'updated_at' => '2019-11-20 22:44:45',
                ),
            182 =>
                array(
                    'id' => 183,
                    'name' => 'Janieck',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e217b7248c777c0157bf72a35ad3910c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:46',
                    'updated_at' => '2019-11-20 22:44:46',
                ),
            183 =>
                array(
                    'id' => 184,
                    'name' => 'Senex',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:46',
                    'updated_at' => '2019-11-20 22:44:46',
                ),
            184 =>
                array(
                    'id' => 185,
                    'name' => 'Becky Hill',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fed7749767c4d18edce01fd4ef30bb77/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:46',
                    'updated_at' => '2019-11-20 22:44:46',
                ),
            185 =>
                array(
                    'id' => 186,
                    'name' => 'Clean Bandit',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/27949a901dcbdf7e1beec0d8df67db07/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:44:47',
                    'updated_at' => '2019-11-20 22:46:39',
                ),
            186 =>
                array(
                    'id' => 187,
                    'name' => 'Martin Solveig',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c4a08c692723fa041ebbd4bc08c2e7bd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:48',
                    'updated_at' => '2019-11-20 22:44:48',
                ),
            187 =>
                array(
                    'id' => 188,
                    'name' => 'Oliver Heldens',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fd587dfb0676388e355597b901a9618a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:49',
                    'updated_at' => '2019-11-20 22:44:49',
                ),
            188 =>
                array(
                    'id' => 189,
                    'name' => 'Whitney Houston',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7d7916383f536969db91430a2707d3c0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:50',
                    'updated_at' => '2019-11-20 22:44:50',
                ),
            189 =>
                array(
                    'id' => 190,
                    'name' => 'Dayvi',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:51',
                    'updated_at' => '2019-11-20 22:44:51',
                ),
            190 =>
                array(
                    'id' => 191,
                    'name' => 'Victor Cardenas',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:52',
                    'updated_at' => '2019-11-20 22:44:52',
                ),
            191 =>
                array(
                    'id' => 192,
                    'name' => 'RITA ORA',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/763ba565a79eca633721305f26a7fbfe/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:52',
                    'updated_at' => '2019-11-20 22:44:52',
                ),
            192 =>
                array(
                    'id' => 193,
                    'name' => 'Klingande',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6eae566d0c41f55050c23c1d4963fbe6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:53',
                    'updated_at' => '2019-11-20 22:44:53',
                ),
            193 =>
                array(
                    'id' => 194,
                    'name' => 'Anitta',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ad340e941d6b7f0560c7b44f2b49aa62/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:54',
                    'updated_at' => '2019-11-20 22:44:54',
                ),
            194 =>
                array(
                    'id' => 195,
                    'name' => 'Sean Paul',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/043332be51a1a67cb0a363ea88475a41/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:55',
                    'updated_at' => '2019-11-20 22:44:55',
                ),
            195 =>
                array(
                    'id' => 196,
                    'name' => 'ZEDD',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3baf95e2b11dde7e4babb8f91b351a1f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:56',
                    'updated_at' => '2019-11-20 22:44:56',
                ),
            196 =>
                array(
                    'id' => 197,
                    'name' => 'Riton',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dde627ca390b51912113b569934d1bf5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:57',
                    'updated_at' => '2019-11-20 22:44:57',
                ),
            197 =>
                array(
                    'id' => 198,
                    'name' => 'Afro Bros',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a17db4abb50c2eee136de8c9e32150ed/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:58',
                    'updated_at' => '2019-11-20 22:44:58',
                ),
            198 =>
                array(
                    'id' => 199,
                    'name' => 'The Prince Karma',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4d4c1e2c6313949567e9a7f7ad5ff7e3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:59',
                    'updated_at' => '2019-11-20 22:44:59',
                ),
            199 =>
                array(
                    'id' => 200,
                    'name' => 'Rudimental',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/abfcd7f603ee6f912547973ffe23f648/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:44:59',
                    'updated_at' => '2019-11-20 22:44:59',
                ),
            200 =>
                array(
                    'id' => 201,
                    'name' => 'Natti Natasha',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/102ed300c9caa4cbf1c57fd6a4f223b9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:45:00',
                    'updated_at' => '2019-11-20 22:57:35',
                ),
            201 =>
                array(
                    'id' => 202,
                    'name' => 'Bastille',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/da6f3c060a1abf8127ff8b13b4469094/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:45:01',
                    'updated_at' => '2019-11-20 22:45:01',
                ),
            202 =>
                array(
                    'id' => 203,
                    'name' => 'Dynoro',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7c92f4d57ae16865003eed59750104d9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:45:02',
                    'updated_at' => '2019-11-20 22:45:02',
                ),
            203 =>
                array(
                    'id' => 204,
                    'name' => 'Sam Feldt',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/13d64a553d552d5578716fffe09a4599/250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:45:02',
                    'updated_at' => '2019-11-20 22:45:02',
                ),
            204 =>
                array(
                    'id' => 205,
                    'name' => 'Gigi D\'Agostino',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 5,
                    'created_at' => '2019-11-20 22:45:03',
                    'updated_at' => '2019-11-20 22:45:03',
                ),
            205 =>
                array(
                    'id' => 206,
                    'name' => 'Dadju',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/61a87825fecc214738541d721dcfa475/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:04',
                    'updated_at' => '2019-11-20 22:45:04',
                ),
            206 =>
                array(
                    'id' => 207,
                    'name' => 'Aya Nakamura',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2857052d2e956f97ba6a16d01df17208/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:05',
                    'updated_at' => '2019-11-20 22:45:05',
                ),
            207 =>
                array(
                    'id' => 208,
                    'name' => 'Imen Es',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2c7e635a23278e605067e4f6228ee1be/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:06',
                    'updated_at' => '2019-11-20 22:45:06',
                ),
            208 =>
                array(
                    'id' => 209,
                    'name' => 'Jorja Smith',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/835aaac0c7ed2d50700b62a6ceaee10f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:06',
                    'updated_at' => '2019-11-20 22:45:06',
                ),
            209 =>
                array(
                    'id' => 210,
                    'name' => 'The Weeknd',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f7f0229f30d4455077fec80abba15583/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:07',
                    'updated_at' => '2019-11-20 22:45:07',
                ),
            210 =>
                array(
                    'id' => 211,
                    'name' => 'Alicia Keys',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/435ab760970351808a9910b23e235220/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:08',
                    'updated_at' => '2019-11-20 22:45:08',
                ),
            211 =>
                array(
                    'id' => 212,
                    'name' => 'Tayc',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3a5e459682e426f9bdece1c51159fc18/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:08',
                    'updated_at' => '2019-11-20 22:45:08',
                ),
            212 =>
                array(
                    'id' => 213,
                    'name' => 'Amy Winehouse',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d6321fa097d4fd7386ec838c3cbad8a6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:09',
                    'updated_at' => '2019-11-20 22:45:09',
                ),
            213 =>
                array(
                    'id' => 214,
                    'name' => 'Khalid',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6b53baa35974d47fb234bfff1e7bc8d6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:10',
                    'updated_at' => '2019-11-20 22:45:10',
                ),
            214 =>
                array(
                    'id' => 215,
                    'name' => 'Joe Dwet File',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a181252f8edc1a1a73d957c9adcd3b48/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:11',
                    'updated_at' => '2019-11-20 22:45:11',
                ),
            215 =>
                array(
                    'id' => 216,
                    'name' => 'Chris Brown',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ed15b84067164aa25701fdd30cc34d33/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:12',
                    'updated_at' => '2019-11-20 22:45:12',
                ),
            216 =>
                array(
                    'id' => 217,
                    'name' => 'Marwa Loud',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/73f12f5b4628cc9e6f8c7f06e886ad98/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:13',
                    'updated_at' => '2019-11-20 22:45:13',
                ),
            217 =>
                array(
                    'id' => 218,
                    'name' => 'Tory Lanez',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b8e85a7253963a57fd8631ccaf589781/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:14',
                    'updated_at' => '2019-11-20 22:45:14',
                ),
            218 =>
                array(
                    'id' => 219,
                    'name' => 'John Legend',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/44b349be503be9bd58f72bc5caa4e284/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:15',
                    'updated_at' => '2019-11-20 22:45:15',
                ),
            219 =>
                array(
                    'id' => 220,
                    'name' => 'Doja Cat',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ab0743e3dd9735db7c0ec8097496a2cb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:16',
                    'updated_at' => '2019-11-20 22:45:16',
                ),
            220 =>
                array(
                    'id' => 221,
                    'name' => 'Ali Gatie',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/51dd25727f6a9f33e4df50ae4e589eca/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:17',
                    'updated_at' => '2019-11-20 22:45:17',
                ),
            221 =>
                array(
                    'id' => 222,
                    'name' => 'Stevie Wonder',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b8138428e7b0ce78843106b4b83d4e77/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:17',
                    'updated_at' => '2019-11-20 22:45:17',
                ),
            222 =>
                array(
                    'id' => 223,
                    'name' => 'Usher',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f926975878fb67d20b98a0904a251f36/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:18',
                    'updated_at' => '2019-11-20 22:45:18',
                ),
            223 =>
                array(
                    'id' => 224,
                    'name' => 'ABBA',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cc274255979c9d2d935a97f9c8092c86/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:19',
                    'updated_at' => '2019-11-20 22:45:19',
                ),
            224 =>
                array(
                    'id' => 225,
                    'name' => 'Summer Walker',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ff5f09ec12ac3e56ee11773f200fdb12/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:20',
                    'updated_at' => '2019-11-20 22:45:20',
                ),
            225 =>
                array(
                    'id' => 226,
                    'name' => 'Otis Redding',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9415a63b57a1a56d2477f255ab92d6da/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:21',
                    'updated_at' => '2019-11-20 22:45:21',
                ),
            226 =>
                array(
                    'id' => 227,
                    'name' => 'Sade',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/61ef9f8e27a31325d45f8623fe3000c6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:22',
                    'updated_at' => '2019-11-20 22:45:22',
                ),
            227 =>
                array(
                    'id' => 228,
                    'name' => 'Jacquees',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/89a97e7bf17eedaaedd62f7f333c3b9f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:23',
                    'updated_at' => '2019-11-20 22:45:23',
                ),
            228 =>
                array(
                    'id' => 229,
                    'name' => 'Lynda',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a9dca4af146fc82a4cd553912f6051dc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:24',
                    'updated_at' => '2019-11-20 22:45:24',
                ),
            229 =>
                array(
                    'id' => 230,
                    'name' => 'James Brown',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/82077ca45461fd62988e7ba91a90a014/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:25',
                    'updated_at' => '2019-11-20 22:45:25',
                ),
            230 =>
                array(
                    'id' => 231,
                    'name' => 'Ne-Yo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/43629621c5698f48d28a3c335223cda3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:26',
                    'updated_at' => '2019-11-20 22:45:26',
                ),
            231 =>
                array(
                    'id' => 232,
                    'name' => 'Fugees',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5f05472a1a71afdee55efce697fa359a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:27',
                    'updated_at' => '2019-11-20 22:45:27',
                ),
            232 =>
                array(
                    'id' => 233,
                    'name' => 'Mary J. Blige',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ac0e5c2a7fa62aa9d8aa87e3cd66fe3c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:28',
                    'updated_at' => '2019-11-20 22:45:28',
                ),
            233 =>
                array(
                    'id' => 234,
                    'name' => 'Shy\'m',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/47088e8a34ab8b7b45a247d09ddf2e83/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:28',
                    'updated_at' => '2019-11-20 22:45:28',
                ),
            234 =>
                array(
                    'id' => 235,
                    'name' => 'Sensey\'',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:29',
                    'updated_at' => '2019-11-20 22:45:29',
                ),
            235 =>
                array(
                    'id' => 236,
                    'name' => 'Bryson Tiller',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/37602e59710509fa126782e86ef9b0c9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:30',
                    'updated_at' => '2019-11-20 22:45:30',
                ),
            236 =>
                array(
                    'id' => 237,
                    'name' => 'Joji',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b498276952b013dcf4fc00dd50cb156c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:31',
                    'updated_at' => '2019-11-20 22:45:31',
                ),
            237 =>
                array(
                    'id' => 238,
                    'name' => 'Jessie Reyez',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7e99d165d635b7e8d74def8c4f78259e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:32',
                    'updated_at' => '2019-11-20 22:45:32',
                ),
            238 =>
                array(
                    'id' => 239,
                    'name' => 'T-Pain',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3ca1402cee3996233fd2ebc944407181/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:33',
                    'updated_at' => '2019-11-20 22:45:33',
                ),
            239 =>
                array(
                    'id' => 240,
                    'name' => 'Daniel Caesar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ebbf6761cf15e905c67d102180d586a7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:34',
                    'updated_at' => '2019-11-20 22:45:34',
                ),
            240 =>
                array(
                    'id' => 241,
                    'name' => 'R. Kelly',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/98b30cc07b019c40b0c52517d9dd75c4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:35',
                    'updated_at' => '2019-11-20 22:45:35',
                ),
            241 =>
                array(
                    'id' => 242,
                    'name' => 'Ciara',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8581662e425edad8b869386216cba438/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:35',
                    'updated_at' => '2019-11-20 22:45:35',
                ),
            242 =>
                array(
                    'id' => 243,
                    'name' => 'Ella Mai',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cefc0a45931b930df17a080784b0380b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:37',
                    'updated_at' => '2019-11-20 22:45:37',
                ),
            243 =>
                array(
                    'id' => 244,
                    'name' => 'Anderson .Paak',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0f9dc219acab54ef70b1df30dbb584a9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:37',
                    'updated_at' => '2019-11-20 22:45:37',
                ),
            244 =>
                array(
                    'id' => 245,
                    'name' => 'Akon',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/dafed3b722037eba7b0c015d47f62e7c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:39',
                    'updated_at' => '2019-11-20 22:45:39',
                ),
            245 =>
                array(
                    'id' => 246,
                    'name' => 'Mahalia',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6caf99bdd009650825cf406a9121431c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:39',
                    'updated_at' => '2019-11-20 22:45:39',
                ),
            246 =>
                array(
                    'id' => 247,
                    'name' => '6lack',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4ce545645b5ae44ba451c10d9c720285/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:40',
                    'updated_at' => '2019-11-20 22:45:40',
                ),
            247 =>
                array(
                    'id' => 248,
                    'name' => 'Jhené Aiko',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6205c13d1e2aa6f4e6823bd2fbba9d97/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:41',
                    'updated_at' => '2019-11-20 22:45:41',
                ),
            248 =>
                array(
                    'id' => 249,
                    'name' => 'Jeremih',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/13e365aee900296e0082ba4624fb9b5e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:42',
                    'updated_at' => '2019-11-20 22:45:42',
                ),
            249 =>
                array(
                    'id' => 250,
                    'name' => 'Mr. Probz',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8ab10d86c36803ecd27f497e0b97e063/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:43',
                    'updated_at' => '2019-11-20 22:45:43',
                ),
            250 =>
                array(
                    'id' => 251,
                    'name' => 'Barry White',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/632fe78be40a27a7f2273edd7b5dd79c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:44',
                    'updated_at' => '2019-11-20 22:45:44',
                ),
            251 =>
                array(
                    'id' => 252,
                    'name' => 'H.E.R.',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5d62fd6afd427c956c82730175bab341/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:45',
                    'updated_at' => '2019-11-20 22:45:45',
                ),
            252 =>
                array(
                    'id' => 253,
                    'name' => 'Masego',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7f7ec6ca0b325787fdd3a791889c6c55/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:46',
                    'updated_at' => '2019-11-20 22:45:46',
                ),
            253 =>
                array(
                    'id' => 254,
                    'name' => 'Mario',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d1be58541949168b996f7f886f4fca50/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:47',
                    'updated_at' => '2019-11-20 22:45:47',
                ),
            254 =>
                array(
                    'id' => 255,
                    'name' => 'Ya Levis',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6b77266375fc964b39e32a5e7ecb7cae/250x250-000000-80-0-0.jpg',
                    'genre_id' => 6,
                    'created_at' => '2019-11-20 22:45:48',
                    'updated_at' => '2019-11-20 22:45:48',
                ),
            255 =>
                array(
                    'id' => 256,
                    'name' => 'Tones and I',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/16f79833aec91a2ececef591007948a5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:49',
                    'updated_at' => '2019-11-20 22:45:49',
                ),
            256 =>
                array(
                    'id' => 257,
                    'name' => 'Billie Eilish',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0b6ecc0e0e717681c8d7da4c9b48a8f5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:49',
                    'updated_at' => '2019-11-20 22:45:49',
                ),
            257 =>
                array(
                    'id' => 258,
                    'name' => 'Imagine Dragons',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a9087f289c3bd826eb8c8bd48cd11f1e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:50',
                    'updated_at' => '2019-11-20 22:45:50',
                ),
            258 =>
                array(
                    'id' => 259,
                    'name' => 'Lil Nas X',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e645a215208b825df07277d80299758d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:51',
                    'updated_at' => '2019-11-20 22:45:51',
                ),
            259 =>
                array(
                    'id' => 260,
                    'name' => 'Muse',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/63757df9ce706df3d57b9faf86eb0af4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:52',
                    'updated_at' => '2019-11-20 22:45:52',
                ),
            260 =>
                array(
                    'id' => 261,
                    'name' => 'Lewis Capaldi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/433eff954f3a209dfe87707d19934ac8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:53',
                    'updated_at' => '2019-11-20 22:45:53',
                ),
            261 =>
                array(
                    'id' => 262,
                    'name' => 'Red Hot Chili Peppers',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8f9531ea8dc34b2fb80a97520a12f2a3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:53',
                    'updated_at' => '2019-11-20 22:45:53',
                ),
            262 =>
                array(
                    'id' => 263,
                    'name' => 'Linkin Park',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4eb6517a096da2ccd8768f1513593cb8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:55',
                    'updated_at' => '2019-11-20 22:45:55',
                ),
            263 =>
                array(
                    'id' => 264,
                    'name' => 'Radiohead',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/034e367b7cb2bbf804e7e50d51e74abf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:56',
                    'updated_at' => '2019-11-20 22:45:56',
                ),
            264 =>
                array(
                    'id' => 265,
                    'name' => 'Twenty One Pilots',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a740717ce9b332a850c5bdfece316dc9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:57',
                    'updated_at' => '2019-11-20 22:45:57',
                ),
            265 =>
                array(
                    'id' => 266,
                    'name' => 'Lana Del Rey',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/df76fa73a458af753cbe9e5ae64a33cd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:58',
                    'updated_at' => '2019-11-20 22:45:58',
                ),
            266 =>
                array(
                    'id' => 267,
                    'name' => 'Arctic Monkeys',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9886f58e9ec2227a595afe3af923ec2f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:45:59',
                    'updated_at' => '2019-11-20 22:45:59',
                ),
            267 =>
                array(
                    'id' => 268,
                    'name' => 'Green Day',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ea15e157c48dd7cc28f3e1fe3ac029a8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:00',
                    'updated_at' => '2019-11-20 22:46:00',
                ),
            268 =>
                array(
                    'id' => 269,
                    'name' => 'Dennis Lloyd',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/71ca5a96fd682b906bcf0d5fab163b24/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:01',
                    'updated_at' => '2019-11-20 22:46:01',
                ),
            269 =>
                array(
                    'id' => 270,
                    'name' => 'FAUVE',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4178406e49e25e90ec6282ea564a1409/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:01',
                    'updated_at' => '2019-11-20 22:46:01',
                ),
            270 =>
                array(
                    'id' => 271,
                    'name' => 'The Cure',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8c29e776dd20a54272e26666d5fd756d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:02',
                    'updated_at' => '2019-11-20 22:46:02',
                ),
            271 =>
                array(
                    'id' => 272,
                    'name' => 'Agnes Obel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/42e833c85f79980a3ba4a9a8cee6404c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:05',
                    'updated_at' => '2019-11-20 22:46:05',
                ),
            272 =>
                array(
                    'id' => 273,
                    'name' => 'Cigarettes After Sex',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/118aff69f2726ade1aefc00781ed5400/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:06',
                    'updated_at' => '2019-11-20 22:46:06',
                ),
            273 =>
                array(
                    'id' => 274,
                    'name' => 'alt-J',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7e8ec653cb4f5c3cc8b1912440f11429/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:07',
                    'updated_at' => '2019-11-20 22:46:07',
                ),
            274 =>
                array(
                    'id' => 275,
                    'name' => 'The FAIM',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a67854ebd5fe2ba2c559bde348ec3a22/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:08',
                    'updated_at' => '2019-11-20 22:46:08',
                ),
            275 =>
                array(
                    'id' => 276,
                    'name' => 'Tame Impala',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/20db25cdc0b83f4600c1c5bd2a5d7a4b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:09',
                    'updated_at' => '2019-11-20 22:46:09',
                ),
            276 =>
                array(
                    'id' => 277,
                    'name' => 'Dominic Fike',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ab7058a95b9a2f97622b502362e69229/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:10',
                    'updated_at' => '2019-11-20 22:46:10',
                ),
            277 =>
                array(
                    'id' => 278,
                    'name' => 'NKD',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:10',
                    'updated_at' => '2019-11-20 22:46:10',
                ),
            278 =>
                array(
                    'id' => 279,
                    'name' => 'Pixies',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/53bfadf58e9567bc0979d40bcbd5c2b0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:10',
                    'updated_at' => '2019-11-20 22:46:10',
                ),
            279 =>
                array(
                    'id' => 280,
                    'name' => 'The Black Keys',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0de5e4174ab8ed26c39f4d4c86b3c2d3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:11',
                    'updated_at' => '2019-11-20 22:46:11',
                ),
            280 =>
                array(
                    'id' => 281,
                    'name' => 'Halsey',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8353fb9433a9daa5d66ce52a28ec891b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:13',
                    'updated_at' => '2019-11-20 22:46:13',
                ),
            281 =>
                array(
                    'id' => 282,
                    'name' => 'Lykke Li',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1491cdb2e50c010bfbfebb24018fdf64/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:14',
                    'updated_at' => '2019-11-20 22:46:14',
                ),
            282 =>
                array(
                    'id' => 283,
                    'name' => 'Panic! At the Disco',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/32352e6c865d06eead1d78abb012e227/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:14',
                    'updated_at' => '2019-11-20 22:46:14',
                ),
            283 =>
                array(
                    'id' => 284,
                    'name' => 'The Lumineers',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3ced46e5f0d3df4eab3a57c2dc94f16f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:15',
                    'updated_at' => '2019-11-20 22:46:15',
                ),
            284 =>
                array(
                    'id' => 285,
                    'name' => 'Portugal. The Man',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5e4067820fb792242a22193e7459508f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:17',
                    'updated_at' => '2019-11-20 22:46:17',
                ),
            285 =>
                array(
                    'id' => 286,
                    'name' => 'M83',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4d6f153601cf2f506b358c5dce148f52/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:18',
                    'updated_at' => '2019-11-20 22:46:18',
                ),
            286 =>
                array(
                    'id' => 287,
                    'name' => 'Foals',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/31c835fc9329b800fe4eb6a702c02ecd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:19',
                    'updated_at' => '2019-11-20 22:46:19',
                ),
            287 =>
                array(
                    'id' => 288,
                    'name' => 'The xx',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/528ff26d78d261804810d8a77953a7f5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:19',
                    'updated_at' => '2019-11-20 22:46:19',
                ),
            288 =>
                array(
                    'id' => 289,
                    'name' => 'Florence + The Machine',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7fa361bc6201b3edae6b74c08da3922f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:20',
                    'updated_at' => '2019-11-20 22:46:20',
                ),
            289 =>
                array(
                    'id' => 290,
                    'name' => 'Isaac Delusion',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cef17cbed1f5f8f794fadaec0af0ee2e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:21',
                    'updated_at' => '2019-11-20 22:46:21',
                ),
            290 =>
                array(
                    'id' => 291,
                    'name' => 'Hozier',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4970da41372f40bb2d85b71d41c359e8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:22',
                    'updated_at' => '2019-11-20 22:46:22',
                ),
            291 =>
                array(
                    'id' => 292,
                    'name' => 'Soso Maness',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3400cc35862cc7b6ba9ab5380c0efa95/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:23',
                    'updated_at' => '2019-11-20 22:46:23',
                ),
            292 =>
                array(
                    'id' => 293,
                    'name' => 'Moriarty',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f2c64f4fba5dff1ab2764bd4c5d2e7f4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:46:23',
                    'updated_at' => '2019-11-20 22:47:16',
                ),
            293 =>
                array(
                    'id' => 294,
                    'name' => 'AaRON',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f2eb2ca2587e5e3a0a3e8936c3828226/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:24',
                    'updated_at' => '2019-11-20 22:46:24',
                ),
            294 =>
                array(
                    'id' => 295,
                    'name' => 'Vance Joy',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/65be7d4b43661ce131f6bbd01a710884/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:25',
                    'updated_at' => '2019-11-20 22:46:25',
                ),
            295 =>
                array(
                    'id' => 296,
                    'name' => 'Arcade Fire',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0703e8e50373d950c7523869352a83c9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:26',
                    'updated_at' => '2019-11-20 22:46:26',
                ),
            296 =>
                array(
                    'id' => 297,
                    'name' => 'Tove Lo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/17ccd7da6a23da59066bef76cb89dbb7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:27',
                    'updated_at' => '2019-11-20 22:46:27',
                ),
            297 =>
                array(
                    'id' => 298,
                    'name' => 'STUPEFLIP',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8a0db002f854ed9b12c105621bc400df/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:28',
                    'updated_at' => '2019-11-20 22:46:28',
                ),
            298 =>
                array(
                    'id' => 299,
                    'name' => 'Vampire Weekend',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9e6559537b6a3419e4956b3222862ab7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:29',
                    'updated_at' => '2019-11-20 22:46:29',
                ),
            299 =>
                array(
                    'id' => 300,
                    'name' => 'Kings of Leon',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b47ea45ba88984c0a8efba93086a257b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:30',
                    'updated_at' => '2019-11-20 22:46:30',
                ),
            300 =>
                array(
                    'id' => 301,
                    'name' => 'Lorde',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a8fd86102049aa87cfe2c075a8a48972/250x250-000000-80-0-0.jpg',
                    'genre_id' => 7,
                    'created_at' => '2019-11-20 22:46:31',
                    'updated_at' => '2019-11-20 22:46:31',
                ),
            301 =>
                array(
                    'id' => 302,
                    'name' => 'Major Lazer',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/847e0144bf03cd9240e01a16f3baed73/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:32',
                    'updated_at' => '2019-11-20 22:46:32',
                ),
            302 =>
                array(
                    'id' => 303,
                    'name' => 'The Avener',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c15df060ed9deffeece4821371766a2f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:33',
                    'updated_at' => '2019-11-20 22:46:33',
                ),
            303 =>
                array(
                    'id' => 304,
                    'name' => 'Petit Biscuit',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c6bad4f2d149419927f19ac1be34f830/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:33',
                    'updated_at' => '2019-11-20 22:46:33',
                ),
            304 =>
                array(
                    'id' => 305,
                    'name' => 'Ofenbach',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3eaabb2bfff43d50db2080c57ad1475a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:34',
                    'updated_at' => '2019-11-20 22:46:34',
                ),
            305 =>
                array(
                    'id' => 306,
                    'name' => 'FKJ',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3b1d7da294e9833dd39a3fb1795868d0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:36',
                    'updated_at' => '2019-11-20 22:46:36',
                ),
            306 =>
                array(
                    'id' => 307,
                    'name' => 'Flume',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/88985ef4ee04371eeca38040ac5dbb53/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:37',
                    'updated_at' => '2019-11-20 22:46:37',
                ),
            307 =>
                array(
                    'id' => 308,
                    'name' => 'Parov Stelar',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4e7af3a92bf2df785d210fd9690e4c2e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:38',
                    'updated_at' => '2019-11-20 22:46:38',
                ),
            308 =>
                array(
                    'id' => 309,
                    'name' => 'Anne-Marie',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/193bca66c5fa26692c1a181c970922bb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:40',
                    'updated_at' => '2019-11-20 22:46:40',
                ),
            309 =>
                array(
                    'id' => 310,
                    'name' => 'Disclosure',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/db52a7c96b2e5d4928f22d2593ea1858/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:41',
                    'updated_at' => '2019-11-20 22:46:41',
                ),
            310 =>
                array(
                    'id' => 311,
                    'name' => 'The Blaze',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/75913a5334e5a418c8cab6eaa87426d0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:42',
                    'updated_at' => '2019-11-20 22:46:42',
                ),
            311 =>
                array(
                    'id' => 312,
                    'name' => 'Fakear',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/aa7ede011b8d7b44a8b211f63d9d00f5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:42',
                    'updated_at' => '2019-11-20 22:46:42',
                ),
            312 =>
                array(
                    'id' => 313,
                    'name' => 'JP Cooper',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2ff97227cd27713ef22729aaf3877795/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:43',
                    'updated_at' => '2019-11-20 22:46:43',
                ),
            313 =>
                array(
                    'id' => 314,
                    'name' => 'Polo & Pan',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e146e0af22b8a09f131756c7863eac3c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:44',
                    'updated_at' => '2019-11-20 22:46:44',
                ),
            314 =>
                array(
                    'id' => 315,
                    'name' => 'Synapson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0830911caab99ecb31fa733d5ee483b6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:45',
                    'updated_at' => '2019-11-20 22:46:45',
                ),
            315 =>
                array(
                    'id' => 316,
                    'name' => 'Kavinsky',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/94ea8599c4da718f3bce9b3f3d63c8bd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:46',
                    'updated_at' => '2019-11-20 22:46:46',
                ),
            316 =>
                array(
                    'id' => 317,
                    'name' => 'Caravan Palace',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c5223283e653acd89458c6f3865c5f5f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:47',
                    'updated_at' => '2019-11-20 22:46:47',
                ),
            317 =>
                array(
                    'id' => 318,
                    'name' => 'Lost Frequencies',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5876cafffe21256efdaf47fca19a2694/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:48',
                    'updated_at' => '2019-11-20 22:46:48',
                ),
            318 =>
                array(
                    'id' => 319,
                    'name' => 'Chinese Man',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d3653b8d5608f93f8e190668d679bec4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:49',
                    'updated_at' => '2019-11-20 22:46:49',
                ),
            319 =>
                array(
                    'id' => 320,
                    'name' => 'Hippie Sabotage',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ffe81ade25fe9a48943924296e5cc8c0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:50',
                    'updated_at' => '2019-11-20 22:46:50',
                ),
            320 =>
                array(
                    'id' => 321,
                    'name' => 'Grandbrothers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6b93f216d23bafd126c1c5d1d65d45a8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:51',
                    'updated_at' => '2019-11-20 22:46:51',
                ),
            321 =>
                array(
                    'id' => 322,
                    'name' => 'Kadebostany',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c6be3af1427e1c6237c834727915be31/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:52',
                    'updated_at' => '2019-11-20 22:46:52',
                ),
            322 =>
                array(
                    'id' => 323,
                    'name' => 'Møme',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fc057f47239cb7860c14b0946f43cace/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:53',
                    'updated_at' => '2019-11-20 22:46:53',
                ),
            323 =>
                array(
                    'id' => 324,
                    'name' => 'Gaullin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bc3cadb1464e3cf6ad554e946e39d47c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:54',
                    'updated_at' => '2019-11-20 22:46:54',
                ),
            324 =>
                array(
                    'id' => 325,
                    'name' => 'Massive Attack',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/892ad73f7062c7ef1dcae1bdc19256d1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:54',
                    'updated_at' => '2019-11-20 22:46:54',
                ),
            325 =>
                array(
                    'id' => 326,
                    'name' => 'French 79',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/38ab952a60fe627fa9ce2567df757369/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:55',
                    'updated_at' => '2019-11-20 22:46:55',
                ),
            326 =>
                array(
                    'id' => 327,
                    'name' => 'Deluxe',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ff7af5f8aa7e7bf40676a4df6f73c4be/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:56',
                    'updated_at' => '2019-11-20 22:46:56',
                ),
            327 =>
                array(
                    'id' => 328,
                    'name' => 'Nick Waterhouse',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c8e65ac909c196b3eaab164821ac5258/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:57',
                    'updated_at' => '2019-11-20 22:46:57',
                ),
            328 =>
                array(
                    'id' => 329,
                    'name' => 'Paul Kalkbrenner',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d3180b33575d922741dd974f629b0a8c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:58',
                    'updated_at' => '2019-11-20 22:46:58',
                ),
            329 =>
                array(
                    'id' => 330,
                    'name' => 'Justice',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/46773214a3a3e074822aa2c5b489619d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:46:59',
                    'updated_at' => '2019-11-20 22:46:59',
                ),
            330 =>
                array(
                    'id' => 331,
                    'name' => 'Eliza Doolittle',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7abc39594d11544590104893e67023dc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:00',
                    'updated_at' => '2019-11-20 22:47:00',
                ),
            331 =>
                array(
                    'id' => 332,
                    'name' => 'Thylacine',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e15f28c36a8bde02d393e3934c3fd981/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:00',
                    'updated_at' => '2019-11-20 22:47:00',
                ),
            332 =>
                array(
                    'id' => 333,
                    'name' => 'Rone',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6f2223c9dbb9679b506522b189df2d72/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:01',
                    'updated_at' => '2019-11-20 22:47:01',
                ),
            333 =>
                array(
                    'id' => 334,
                    'name' => 'Ehrling',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:02',
                    'updated_at' => '2019-11-20 22:47:02',
                ),
            334 =>
                array(
                    'id' => 335,
                    'name' => 'Bonobo',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/29a99852d6599a199ecfe4defcbdc428/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:03',
                    'updated_at' => '2019-11-20 22:47:03',
                ),
            335 =>
                array(
                    'id' => 336,
                    'name' => 'Phoebe Killdeer',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:04',
                    'updated_at' => '2019-11-20 22:47:04',
                ),
            336 =>
                array(
                    'id' => 337,
                    'name' => 'Breakbot',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b6d61d53e4eb93c0b25e1604b52fc0af/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:05',
                    'updated_at' => '2019-11-20 22:47:05',
                ),
            337 =>
                array(
                    'id' => 338,
                    'name' => 'C2C',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7d254524979cd2a356c80f9ea1ddaa50/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:06',
                    'updated_at' => '2019-11-20 22:47:06',
                ),
            338 =>
                array(
                    'id' => 339,
                    'name' => 'Jungle',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0170d3fd4352a26d44f7d511e77560e7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:07',
                    'updated_at' => '2019-11-20 22:47:07',
                ),
            339 =>
                array(
                    'id' => 340,
                    'name' => 'The Prodigy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4d884e6864623a3446040eaa8e9fb18d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:07',
                    'updated_at' => '2019-11-20 22:47:07',
                ),
            340 =>
                array(
                    'id' => 341,
                    'name' => 'Gesaffelstein',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8cd190957345d47d5cbc19cd29e265d5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:08',
                    'updated_at' => '2019-11-20 22:47:08',
                ),
            341 =>
                array(
                    'id' => 342,
                    'name' => 'Worakls',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/606fcef34f4200a7f6adcf7315d8a46b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:09',
                    'updated_at' => '2019-11-20 22:47:09',
                ),
            342 =>
                array(
                    'id' => 343,
                    'name' => 'Bas',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/542758cb8b0ef7fbd1dd52c59015eec2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:10',
                    'updated_at' => '2019-11-20 22:47:10',
                ),
            343 =>
                array(
                    'id' => 344,
                    'name' => 'SebastiAn',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0151acdea8a8d5f8e3aefabf6f034575/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:11',
                    'updated_at' => '2019-11-20 22:47:11',
                ),
            344 =>
                array(
                    'id' => 345,
                    'name' => 'Archive',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f6a0c4e3b17f469b563b6e91f2f57750/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:12',
                    'updated_at' => '2019-11-20 22:47:12',
                ),
            345 =>
                array(
                    'id' => 346,
                    'name' => 'Salut C\'est Cool',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4f20a4e60d2f7714990f32106c98e401/250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:13',
                    'updated_at' => '2019-11-20 22:47:13',
                ),
            346 =>
                array(
                    'id' => 347,
                    'name' => 'Kina',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 8,
                    'created_at' => '2019-11-20 22:47:14',
                    'updated_at' => '2019-11-20 22:47:14',
                ),
            347 =>
                array(
                    'id' => 348,
                    'name' => 'Tracy Chapman',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3eafc198236143dc16dd680265d7f43c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:15',
                    'updated_at' => '2019-11-20 22:47:15',
                ),
            348 =>
                array(
                    'id' => 349,
                    'name' => 'Simon & Garfunkel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a718393c6ae2ffe0f751ab2ff901340c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:17',
                    'updated_at' => '2019-11-20 22:47:17',
                ),
            349 =>
                array(
                    'id' => 350,
                    'name' => 'Alela Diane',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/764059521c2ce350f142507e1606a7d1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:18',
                    'updated_at' => '2019-11-20 22:47:18',
                ),
            350 =>
                array(
                    'id' => 351,
                    'name' => 'First Aid Kit',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0de3be6f3b799bd3e7152ab08036e8eb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:19',
                    'updated_at' => '2019-11-20 22:47:19',
                ),
            351 =>
                array(
                    'id' => 352,
                    'name' => 'Roseaux',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/eb2c2fa746dd6a6c74f237eee489aa5c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:20',
                    'updated_at' => '2019-11-20 22:47:20',
                ),
            352 =>
                array(
                    'id' => 353,
                    'name' => 'Hugo Barriol',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4fe6d47a8975c029a425a539a14e609e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:20',
                    'updated_at' => '2019-11-20 22:47:20',
                ),
            353 =>
                array(
                    'id' => 354,
                    'name' => 'Blanco White',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b1c294b748dea1f7b4632b17caf9ac39/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:21',
                    'updated_at' => '2019-11-20 22:47:21',
                ),
            354 =>
                array(
                    'id' => 355,
                    'name' => 'Jil Is Lucky',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/41ec416e6ffe637c159638fe67abb727/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:21',
                    'updated_at' => '2019-11-20 22:47:21',
                ),
            355 =>
                array(
                    'id' => 356,
                    'name' => 'Radical Face',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9e0d7a7de9e6effede2ea522afaaa6a5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:22',
                    'updated_at' => '2019-11-20 22:47:22',
                ),
            356 =>
                array(
                    'id' => 357,
                    'name' => 'Tunng',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8aadde4984a32a4a28049ddca7df0f6b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:23',
                    'updated_at' => '2019-11-20 22:47:23',
                ),
            357 =>
                array(
                    'id' => 358,
                    'name' => 'The Dead South',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c5c2d3a82230522c350c4d68cc0ebf71/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:24',
                    'updated_at' => '2019-11-20 22:47:24',
                ),
            358 =>
                array(
                    'id' => 359,
                    'name' => 'Laura Marling',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d5a4fa6baa16f1e3f5e912be4a774301/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:25',
                    'updated_at' => '2019-11-20 22:47:25',
                ),
            359 =>
                array(
                    'id' => 360,
                    'name' => 'José González',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e91b079e99e96c4eb96d63acafbce6de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:26',
                    'updated_at' => '2019-11-20 22:47:26',
                ),
            360 =>
                array(
                    'id' => 361,
                    'name' => 'Mariee Sioux',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0df79dcfd635a4623cf194d6012193e0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:27',
                    'updated_at' => '2019-11-20 22:47:27',
                ),
            361 =>
                array(
                    'id' => 362,
                    'name' => 'Johnny Flynn',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d685d47fe65ea3fbf2fa85eb948b4cf2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:27',
                    'updated_at' => '2019-11-20 22:47:27',
                ),
            362 =>
                array(
                    'id' => 363,
                    'name' => 'Theodore Paul & Gabriel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:28',
                    'updated_at' => '2019-11-20 22:47:28',
                ),
            363 =>
                array(
                    'id' => 364,
                    'name' => 'Pen of Chaos Et Le Naheulband',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:28',
                    'updated_at' => '2019-11-20 22:47:28',
                ),
            364 =>
                array(
                    'id' => 365,
                    'name' => 'Lucas Santtana',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2302ad1e9295f0e640e4a756565d6520/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:29',
                    'updated_at' => '2019-11-20 22:47:29',
                ),
            365 =>
                array(
                    'id' => 366,
                    'name' => 'Elliott Brood',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/74e22463e86c944be5de1d1be9035a1f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:30',
                    'updated_at' => '2019-11-20 22:47:30',
                ),
            366 =>
                array(
                    'id' => 367,
                    'name' => 'Ray LaMontagne',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cbb4b261e9d55bd82a100394d8c3039b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:31',
                    'updated_at' => '2019-11-20 22:47:31',
                ),
            367 =>
                array(
                    'id' => 368,
                    'name' => 'David Mcwilliams',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c47fe3f7a6a618e370d55ced2d8b0b0e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:32',
                    'updated_at' => '2019-11-20 22:47:32',
                ),
            368 =>
                array(
                    'id' => 369,
                    'name' => 'Emily Jane White',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4656b40b8b875a1dae65eee8ad372de6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:33',
                    'updated_at' => '2019-11-20 22:47:33',
                ),
            369 =>
                array(
                    'id' => 370,
                    'name' => 'Tom Rosenthal',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/db164ed878db7ddedd7b41a3abe4aaca/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:34',
                    'updated_at' => '2019-11-20 22:47:34',
                ),
            370 =>
                array(
                    'id' => 371,
                    'name' => 'Loch Lomond',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:35',
                    'updated_at' => '2019-11-20 22:47:35',
                ),
            371 =>
                array(
                    'id' => 372,
                    'name' => 'Matthew and the Atlas',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e6ea43e20692bd253f6b4e56acdb8e4c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:36',
                    'updated_at' => '2019-11-20 22:47:36',
                ),
            372 =>
                array(
                    'id' => 373,
                    'name' => 'The Dubliners',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d5f59046eb5abb2a28a393f4883e91ec/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:37',
                    'updated_at' => '2019-11-20 22:47:37',
                ),
            373 =>
                array(
                    'id' => 374,
                    'name' => 'Bahamas',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8f363996d84f95b539e82cd0ff29fe83/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:38',
                    'updated_at' => '2019-11-20 22:47:38',
                ),
            374 =>
                array(
                    'id' => 375,
                    'name' => 'Eva Cassidy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4680e0f4b16984861f258c74698835a9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:39',
                    'updated_at' => '2019-11-20 22:47:39',
                ),
            375 =>
                array(
                    'id' => 376,
                    'name' => 'Tom Leeb',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3b1dba64aa86c51a3f37e0ee3a438664/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:40',
                    'updated_at' => '2019-11-20 22:47:40',
                ),
            376 =>
                array(
                    'id' => 377,
                    'name' => 'Charlie Fink',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b0f8b04adfdf904710fa3dc9b4b26e22/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:41',
                    'updated_at' => '2019-11-20 22:47:41',
                ),
            377 =>
                array(
                    'id' => 378,
                    'name' => 'Luke Sital-Singh',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6e4d71458e0bc1e0a984e19ea6e67a6f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:41',
                    'updated_at' => '2019-11-20 22:47:41',
                ),
            378 =>
                array(
                    'id' => 379,
                    'name' => 'Rosie Carney',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/09a75c5a14bc730c4623b7507170d797/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:42',
                    'updated_at' => '2019-11-20 22:47:42',
                ),
            379 =>
                array(
                    'id' => 380,
                    'name' => 'Merryn Jeann',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b21934bf04ca28874c783cfc73b5066d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:43',
                    'updated_at' => '2019-11-20 22:47:43',
                ),
            380 =>
                array(
                    'id' => 381,
                    'name' => 'Agnes Fredenberg',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:43',
                    'updated_at' => '2019-11-20 22:47:43',
                ),
            381 =>
                array(
                    'id' => 382,
                    'name' => 'Seafret',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8b41d3b8c77bf2aea20d24fb6b392252/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:43',
                    'updated_at' => '2019-11-20 22:47:43',
                ),
            382 =>
                array(
                    'id' => 383,
                    'name' => 'Gerald Toto',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ee782a979cdb64f9a9efcc623ee3d5f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:44',
                    'updated_at' => '2019-11-20 22:47:44',
                ),
            383 =>
                array(
                    'id' => 384,
                    'name' => 'Dan Ar Braz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:45',
                    'updated_at' => '2019-11-20 22:47:45',
                ),
            384 =>
                array(
                    'id' => 385,
                    'name' => 'Adrian von Ziegler',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b0f830ffd5916d0eb51a95018e6dfc79/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:46',
                    'updated_at' => '2019-11-20 22:47:46',
                ),
            385 =>
                array(
                    'id' => 386,
                    'name' => 'Ellen Harper',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/88a0b77dffe169e4e5f03e0026d59d60/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:47',
                    'updated_at' => '2019-11-20 22:47:47',
                ),
            386 =>
                array(
                    'id' => 387,
                    'name' => 'Scarlett Johansson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7d9b5803526032f69648d6a7b3b4d368/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:47',
                    'updated_at' => '2019-11-20 22:47:47',
                ),
            387 =>
                array(
                    'id' => 388,
                    'name' => 'Pete Yorn',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c583307295e9b209eb2306c7071877ff/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:48',
                    'updated_at' => '2019-11-20 22:47:48',
                ),
            388 =>
                array(
                    'id' => 389,
                    'name' => 'Dirty Old Mat',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:49',
                    'updated_at' => '2019-11-20 22:47:49',
                ),
            389 =>
                array(
                    'id' => 390,
                    'name' => 'Gerry Cinnamon',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1a85d13e351ce8e792dc52e5556d32c9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:49',
                    'updated_at' => '2019-11-20 22:47:49',
                ),
            390 =>
                array(
                    'id' => 391,
                    'name' => 'Racoon Racoon',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6819bc25b64c4127c1ebce5538f44a5d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:50',
                    'updated_at' => '2019-11-20 22:47:50',
                ),
            391 =>
                array(
                    'id' => 392,
                    'name' => 'Roni Alter',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/457cc22fb85219d610b35a7d7a7728a9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:50',
                    'updated_at' => '2019-11-20 22:47:50',
                ),
            392 =>
                array(
                    'id' => 393,
                    'name' => 'The High Kings',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1e0faecdffb49696d3c040c516ab7ee6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:51',
                    'updated_at' => '2019-11-20 22:47:51',
                ),
            393 =>
                array(
                    'id' => 394,
                    'name' => 'Sam Amidon',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ed3162e9a60ec266d85a07cb025721de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:52',
                    'updated_at' => '2019-11-20 22:47:52',
                ),
            394 =>
                array(
                    'id' => 395,
                    'name' => 'Celkilt',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 9,
                    'created_at' => '2019-11-20 22:47:53',
                    'updated_at' => '2019-11-20 22:47:53',
                ),
            395 =>
                array(
                    'id' => 396,
                    'name' => 'Dub Inc',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/06e3ca1b8f83417c755b969bb79dbbdb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:47:54',
                    'updated_at' => '2019-11-20 22:47:54',
                ),
            396 =>
                array(
                    'id' => 397,
                    'name' => 'Bob Marley & The Wailers',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c8241e15efdefa9465c7b470643efb3b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:47:55',
                    'updated_at' => '2019-11-20 22:47:55',
                ),
            397 =>
                array(
                    'id' => 398,
                    'name' => 'Naâman',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/01239060e9d0ee8f0aa151e15364485b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:47:56',
                    'updated_at' => '2019-11-20 22:47:56',
                ),
            398 =>
                array(
                    'id' => 399,
                    'name' => 'Danakil',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cab4be86f86220d7cbf768b90260735c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:47:57',
                    'updated_at' => '2019-11-20 22:47:57',
                ),
            399 =>
                array(
                    'id' => 400,
                    'name' => 'Taïro',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cf2296b78007d1b14d2fca253ff19527/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:47:58',
                    'updated_at' => '2019-11-20 22:47:58',
                ),
            400 =>
                array(
                    'id' => 401,
                    'name' => 'Biga Ranx',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/434f17c84f727fd7f6f2ee7b32f2f5b8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:47:59',
                    'updated_at' => '2019-11-20 22:47:59',
                ),
            401 =>
                array(
                    'id' => 402,
                    'name' => 'Alpha Blondy',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/794f26a0b0d585bdcc459f85f1c9215c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:00',
                    'updated_at' => '2019-11-20 22:48:00',
                ),
            402 =>
                array(
                    'id' => 403,
                    'name' => 'Shaggy',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/377efb59b01415c56e4623030850d8fd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:01',
                    'updated_at' => '2019-11-20 22:48:01',
                ),
            403 =>
                array(
                    'id' => 404,
                    'name' => 'Yaniss Odua',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/58ccea786543de73e9f1483a42e444f7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:02',
                    'updated_at' => '2019-11-20 22:48:02',
                ),
            404 =>
                array(
                    'id' => 405,
                    'name' => 'Jahneration',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/82cd255f3945470615fe77af0dd2abd1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:03',
                    'updated_at' => '2019-11-20 22:48:03',
                ),
            405 =>
                array(
                    'id' => 406,
                    'name' => 'Colonel Reyel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/470ef89ead1613bacc5ad6c1a396abe4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:04',
                    'updated_at' => '2019-11-20 22:48:04',
                ),
            406 =>
                array(
                    'id' => 407,
                    'name' => 'Pierpoljak',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/461de68015119364fb967d28ecd6206e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:05',
                    'updated_at' => '2019-11-20 22:48:05',
                ),
            407 =>
                array(
                    'id' => 408,
                    'name' => 'Vybz Kartel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/72ddc17f36d0281fdc12c373e746fd86/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:06',
                    'updated_at' => '2019-11-20 22:48:06',
                ),
            408 =>
                array(
                    'id' => 409,
                    'name' => 'Damian Marley',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:07',
                    'updated_at' => '2019-11-20 22:48:07',
                ),
            409 =>
                array(
                    'id' => 410,
                    'name' => 'UB40',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/601e22133be2bf05171e7a03da276688/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:08',
                    'updated_at' => '2019-11-20 22:48:08',
                ),
            410 =>
                array(
                    'id' => 411,
                    'name' => 'Nuttea',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c8bfd5d361636ee19bcd239ae7034f2c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:09',
                    'updated_at' => '2019-11-20 22:48:09',
                ),
            411 =>
                array(
                    'id' => 412,
                    'name' => 'Massilia Sound System',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2a3a6edbab77362719d2534583c7ac97/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:10',
                    'updated_at' => '2019-11-20 22:48:10',
                ),
            412 =>
                array(
                    'id' => 413,
                    'name' => 'Sinsemilia',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6e86d032b694617fe08168751c2579c3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:11',
                    'updated_at' => '2019-11-20 22:48:11',
                ),
            413 =>
                array(
                    'id' => 414,
                    'name' => 'Koffee',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/18bbfb9282c3497411920f8cccfa0d10/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:12',
                    'updated_at' => '2019-11-20 22:48:12',
                ),
            414 =>
                array(
                    'id' => 415,
                    'name' => 'Alborosie',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9161de259bbf4a96c33c229beae7800f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:12',
                    'updated_at' => '2019-11-20 22:48:12',
                ),
            415 =>
                array(
                    'id' => 416,
                    'name' => 'Stand High Patrol',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/56a705b3f89045b0f5075ccd9448cbfe/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:13',
                    'updated_at' => '2019-11-20 22:48:13',
                ),
            416 =>
                array(
                    'id' => 417,
                    'name' => 'Popcaan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/17a66041a82cd6ead846178a104ecdf4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:14',
                    'updated_at' => '2019-11-20 22:48:14',
                ),
            417 =>
                array(
                    'id' => 418,
                    'name' => 'Groundation',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ad3bd72063f34734268993db23e614f5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:15',
                    'updated_at' => '2019-11-20 22:48:15',
                ),
            418 =>
                array(
                    'id' => 419,
                    'name' => 'Ondubground',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/004acb32f5ebff84124e6565511a9a22/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:16',
                    'updated_at' => '2019-11-20 22:48:16',
                ),
            419 =>
                array(
                    'id' => 420,
                    'name' => 'Fatbabs',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/774b2a4698a0dc0fd22127496cf42ee3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:17',
                    'updated_at' => '2019-11-20 22:48:17',
                ),
            420 =>
                array(
                    'id' => 421,
                    'name' => 'Shenseea',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7138bf2d4522c86c4842063d7bb98540/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:18',
                    'updated_at' => '2019-11-20 22:48:18',
                ),
            421 =>
                array(
                    'id' => 422,
                    'name' => 'INNA DE YARD',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f7df05b20e1c149284a33fd254763e6e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:19',
                    'updated_at' => '2019-11-20 22:48:19',
                ),
            422 =>
                array(
                    'id' => 423,
                    'name' => 'High Tone',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/43f4a0e8b333ad223868e8a34ce4fb0f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:20',
                    'updated_at' => '2019-11-20 22:48:20',
                ),
            423 =>
                array(
                    'id' => 424,
                    'name' => 'Clinton Fearon',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6dc1d35107cf847ddda533c49c03a5b8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:21',
                    'updated_at' => '2019-11-20 22:48:21',
                ),
            424 =>
                array(
                    'id' => 425,
                    'name' => 'Busy Signal',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/fd33a358095c33079f7fe1b7c099ddf2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:22',
                    'updated_at' => '2019-11-20 22:48:22',
                ),
            425 =>
                array(
                    'id' => 426,
                    'name' => 'Steel Pulse',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/483648124026b9e1b847a016c2181292/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:23',
                    'updated_at' => '2019-11-20 22:48:23',
                ),
            426 =>
                array(
                    'id' => 427,
                    'name' => 'Broussaï',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/75ec681e77e4331cb2c7c41ea3a3bfe7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:24',
                    'updated_at' => '2019-11-20 22:48:24',
                ),
            427 =>
                array(
                    'id' => 428,
                    'name' => 'The Gladiators',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f2770aa4cf6e7232749af30cd918769f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:25',
                    'updated_at' => '2019-11-20 22:48:25',
                ),
            428 =>
                array(
                    'id' => 429,
                    'name' => 'Tiken Jah Fakoly',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ad95bd9a06a5bcc5600b542e0fc0fde2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:26',
                    'updated_at' => '2019-11-20 22:48:26',
                ),
            429 =>
                array(
                    'id' => 430,
                    'name' => 'The Wailers',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/fb7d88d76aab00b96d6eb61a4b9200ea/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:27',
                    'updated_at' => '2019-11-20 22:48:27',
                ),
            430 =>
                array(
                    'id' => 431,
                    'name' => 'Peter Tosh',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/31c0c1dfc699039efb7921adeed33721/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:28',
                    'updated_at' => '2019-11-20 22:48:28',
                ),
            431 =>
                array(
                    'id' => 432,
                    'name' => 'Sizzla',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/63f3fcee61db172ea0f3f43b4d5de301/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:29',
                    'updated_at' => '2019-11-20 22:48:29',
                ),
            432 =>
                array(
                    'id' => 433,
                    'name' => 'Israel Vibration',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6daf7769f496aa29a6ca6edc602659f7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:30',
                    'updated_at' => '2019-11-20 22:48:30',
                ),
            433 =>
                array(
                    'id' => 434,
                    'name' => 'Konshens',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a7eecf1734905a24ff08c7b910704460/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:31',
                    'updated_at' => '2019-11-20 22:48:31',
                ),
            434 =>
                array(
                    'id' => 435,
                    'name' => 'Vanupié',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5f83e170a329977bfa85856264a24ac5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:32',
                    'updated_at' => '2019-11-20 22:48:32',
                ),
            435 =>
                array(
                    'id' => 436,
                    'name' => 'Raggasonic',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ea4dc0d572a7a90c769663937b8fdccb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:33',
                    'updated_at' => '2019-11-20 22:48:33',
                ),
            436 =>
                array(
                    'id' => 437,
                    'name' => 'Toots & The Maytals',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f3826e40b5b5dbc0db574035efa028a4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:34',
                    'updated_at' => '2019-11-20 22:48:34',
                ),
            437 =>
                array(
                    'id' => 438,
                    'name' => 'Stick Figure',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3191b6763e0b9ee45e43b1aba4625b87/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:35',
                    'updated_at' => '2019-11-20 22:48:35',
                ),
            438 =>
                array(
                    'id' => 439,
                    'name' => 'Tom Frager',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2b1820cd92cda6a9741fa39b3cd6040b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:36',
                    'updated_at' => '2019-11-20 22:48:36',
                ),
            439 =>
                array(
                    'id' => 440,
                    'name' => 'Skarra Mucci',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cb00fa2fbebe7d41c1c820e3a098ec47/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:37',
                    'updated_at' => '2019-11-20 22:48:37',
                ),
            440 =>
                array(
                    'id' => 441,
                    'name' => 'Protoje',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ee29a8c9d9cfa4f168af285d36f54473/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:38',
                    'updated_at' => '2019-11-20 22:48:38',
                ),
            441 =>
                array(
                    'id' => 442,
                    'name' => 'Stephen Marley',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/11fa77c1bb2950c2ae9f20190060352c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:39',
                    'updated_at' => '2019-11-20 22:48:39',
                ),
            442 =>
                array(
                    'id' => 443,
                    'name' => 'SOJA',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/acdd80cc82bba815f394c4d9af0b5bf1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:40',
                    'updated_at' => '2019-11-20 22:48:40',
                ),
            443 =>
                array(
                    'id' => 444,
                    'name' => 'Rakoon',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cd2e9a72f1f2ee407728a9417bbcae83/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:41',
                    'updated_at' => '2019-11-20 22:48:41',
                ),
            444 =>
                array(
                    'id' => 445,
                    'name' => 'Brother Culture',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/54ae6363cf78fd33ada9a96c8cec7e58/250x250-000000-80-0-0.jpg',
                    'genre_id' => 10,
                    'created_at' => '2019-11-20 22:48:42',
                    'updated_at' => '2019-11-20 22:48:42',
                ),
            445 =>
                array(
                    'id' => 446,
                    'name' => 'Nina Simone',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b165a74366ee734abd789180099e129d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:43',
                    'updated_at' => '2019-11-20 22:48:43',
                ),
            446 =>
                array(
                    'id' => 447,
                    'name' => 'Ibrahim Maalouf',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cceef9026e4ead2a1b9068b3b7b8bafb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:44',
                    'updated_at' => '2019-11-20 22:48:44',
                ),
            447 =>
                array(
                    'id' => 448,
                    'name' => 'Frank Sinatra',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e22ed29d34715f53323c6d190410a27c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:45',
                    'updated_at' => '2019-11-20 22:48:45',
                ),
            448 =>
                array(
                    'id' => 449,
                    'name' => 'Louis Armstrong',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/16a1c2df6522b3269d0dd738926948f5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:47',
                    'updated_at' => '2019-11-20 22:48:47',
                ),
            449 =>
                array(
                    'id' => 450,
                    'name' => 'Diana Krall',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0da7672de3cbd372940ae212da342305/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:48',
                    'updated_at' => '2019-11-20 22:48:48',
                ),
            450 =>
                array(
                    'id' => 451,
                    'name' => 'Ella Fitzgerald',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0250af414d882062b1a77aa9521b7331/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:49',
                    'updated_at' => '2019-11-20 22:48:49',
                ),
            451 =>
                array(
                    'id' => 452,
                    'name' => 'Melody Gardot',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8d663b89cd3252c54fd3775940fc5876/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:50',
                    'updated_at' => '2019-11-20 22:48:50',
                ),
            452 =>
                array(
                    'id' => 453,
                    'name' => 'Stan Getz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/297c42c4ed4e58e3a4ca1cb0e92a147a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:51',
                    'updated_at' => '2019-11-20 22:48:51',
                ),
            453 =>
                array(
                    'id' => 454,
                    'name' => 'João Gilberto',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/26f178cfd50a841d135041e8923bf20d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:53',
                    'updated_at' => '2019-11-20 22:48:53',
                ),
            454 =>
                array(
                    'id' => 455,
                    'name' => 'Miles Davis',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8d13c0527064ba50cf0d0873f4f574dc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:54',
                    'updated_at' => '2019-11-20 22:48:54',
                ),
            455 =>
                array(
                    'id' => 456,
                    'name' => 'Gregory Porter',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/eb86a142061cab4c387fa6ae82f5712c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:55',
                    'updated_at' => '2019-11-20 22:48:55',
                ),
            456 =>
                array(
                    'id' => 457,
                    'name' => 'Billie Holiday',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6ef0c8b38d744ab219951165cd52e595/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:56',
                    'updated_at' => '2019-11-20 22:48:56',
                ),
            457 =>
                array(
                    'id' => 458,
                    'name' => 'Jeff Goldblum & the Mildred Snitzer Orchestra',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/69f4a1628070b14a9fe5c84cfc15f93e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:57',
                    'updated_at' => '2019-11-20 22:48:57',
                ),
            458 =>
                array(
                    'id' => 459,
                    'name' => 'John Coltrane',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/118a6e466d06d005b3356d697e7e1c0b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:58',
                    'updated_at' => '2019-11-20 22:48:58',
                ),
            459 =>
                array(
                    'id' => 460,
                    'name' => 'Chet Baker',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b0046468dc894081217186398ec446dd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:48:59',
                    'updated_at' => '2019-11-20 22:48:59',
                ),
            460 =>
                array(
                    'id' => 461,
                    'name' => 'Stacey Kent',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fa14d67e9505c0ceebc711025fb1767b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:00',
                    'updated_at' => '2019-11-20 22:49:00',
                ),
            461 =>
                array(
                    'id' => 462,
                    'name' => 'Duke Ellington',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4cfcffb287a0571512c69a923df31dbd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:01',
                    'updated_at' => '2019-11-20 22:49:01',
                ),
            462 =>
                array(
                    'id' => 463,
                    'name' => 'Madeleine Peyroux',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7a254dd48936b9d0ed6b2f7f0de85b36/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:02',
                    'updated_at' => '2019-11-20 22:49:02',
                ),
            463 =>
                array(
                    'id' => 464,
                    'name' => 'Béesau',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/96b4651062c29d6cf96d18a0051d272c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:04',
                    'updated_at' => '2019-11-20 22:49:04',
                ),
            464 =>
                array(
                    'id' => 465,
                    'name' => 'Jamie Cullum',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f4e5b1135a21abb98f669cc9dca78e94/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:04',
                    'updated_at' => '2019-11-20 22:49:04',
                ),
            465 =>
                array(
                    'id' => 466,
                    'name' => 'Erroll Garner',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/70dde933767b847cf03451af4dff57e5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:05',
                    'updated_at' => '2019-11-20 22:49:05',
                ),
            466 =>
                array(
                    'id' => 467,
                    'name' => 'Django Reinhardt',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/28bbdc68596d36486526f20e56ea31ef/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:06',
                    'updated_at' => '2019-11-20 22:49:06',
                ),
            467 =>
                array(
                    'id' => 468,
                    'name' => 'Scott Bradlee\'s Postmodern Jukebox',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/99f330d90541a705002774e8527ab8e0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:07',
                    'updated_at' => '2019-11-20 22:49:07',
                ),
            468 =>
                array(
                    'id' => 469,
                    'name' => 'Keith Jarrett',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ba6d113f166bfb4cf4dc470ad012f2ba/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:08',
                    'updated_at' => '2019-11-20 22:49:08',
                ),
            469 =>
                array(
                    'id' => 470,
                    'name' => 'Tony Bennett',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9bf3d058ce4c5675e70f62fc419eb527/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:09',
                    'updated_at' => '2019-11-20 22:49:09',
                ),
            470 =>
                array(
                    'id' => 471,
                    'name' => 'Kyle Eastwood',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/42d87af14f576040ad2a43ce1b391a5f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:10',
                    'updated_at' => '2019-11-20 22:49:10',
                ),
            471 =>
                array(
                    'id' => 472,
                    'name' => 'Lisa Ekdahl',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7d4b6a25dfe94b5d63cada9abc04b823/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:12',
                    'updated_at' => '2019-11-20 22:49:12',
                ),
            472 =>
                array(
                    'id' => 473,
                    'name' => 'Herbie Hancock',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b2743039d94633244cd827be7ac3bc50/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:13',
                    'updated_at' => '2019-11-20 22:49:13',
                ),
            473 =>
                array(
                    'id' => 474,
                    'name' => 'Erik Truffaz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/df65cae8ed789901a61d0a473a7dc1c2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:14',
                    'updated_at' => '2019-11-20 22:49:14',
                ),
            474 =>
                array(
                    'id' => 475,
                    'name' => 'Dinah Washington',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/45ba0eaa9ab4ae213089077125879f3e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:15',
                    'updated_at' => '2019-11-20 22:49:15',
                ),
            475 =>
                array(
                    'id' => 476,
                    'name' => 'Harry Connick Jr.',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d8e480e9964a2d94b044049efb855e9c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:17',
                    'updated_at' => '2019-11-20 22:49:17',
                ),
            476 =>
                array(
                    'id' => 477,
                    'name' => 'Youn Sun Nah',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a352de6f890cd4b6c3aa40bad02ff44e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:18',
                    'updated_at' => '2019-11-20 22:49:18',
                ),
            477 =>
                array(
                    'id' => 478,
                    'name' => 'Electro Deluxe',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0276386d9c00841c6f3b8d1a3dcecf38/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:19',
                    'updated_at' => '2019-11-20 22:49:19',
                ),
            478 =>
                array(
                    'id' => 479,
                    'name' => 'Dave Brubeck',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/79fd8886100f52d53bdf19e3adde91d8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:20',
                    'updated_at' => '2019-11-20 22:49:20',
                ),
            479 =>
                array(
                    'id' => 480,
                    'name' => 'Eliane Elias',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/756b9160fd3879d2bc2dbe5198bc1d08/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:21',
                    'updated_at' => '2019-11-20 22:49:21',
                ),
            480 =>
                array(
                    'id' => 481,
                    'name' => 'Michel Petrucciani',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b7c396c3c24433a18173402cb36f33ea/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:22',
                    'updated_at' => '2019-11-20 22:49:22',
                ),
            481 =>
                array(
                    'id' => 482,
                    'name' => 'Louis Prima',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b7daeab779706ccb75dd1aa9225ad354/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:24',
                    'updated_at' => '2019-11-20 22:49:24',
                ),
            482 =>
                array(
                    'id' => 483,
                    'name' => 'Snarky Puppy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7e2d615395e8d77226a834a1dbc17c97/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:25',
                    'updated_at' => '2019-11-20 22:49:25',
                ),
            483 =>
                array(
                    'id' => 484,
                    'name' => 'Oscar Peterson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0a359d0635b42e9e1cf217aff33baff0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:26',
                    'updated_at' => '2019-11-20 22:49:26',
                ),
            484 =>
                array(
                    'id' => 485,
                    'name' => 'Grover Washington, Jr.',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6f5a37e6bfa9d6aaa7f48c3f41af09fc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:27',
                    'updated_at' => '2019-11-20 22:49:27',
                ),
            485 =>
                array(
                    'id' => 486,
                    'name' => 'GoGo Penguin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/93e964a5b63342ebf7ea6a59885e50be/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:28',
                    'updated_at' => '2019-11-20 22:49:28',
                ),
            486 =>
                array(
                    'id' => 487,
                    'name' => 'Antônio Carlos Jobim',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d4a5a7bc7e4b7a5ca787f41c68c4ba4c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:49:29',
                    'updated_at' => '2019-11-20 23:01:45',
                ),
            487 =>
                array(
                    'id' => 488,
                    'name' => 'Bill Evans',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:30',
                    'updated_at' => '2019-11-20 22:49:30',
                ),
            488 =>
                array(
                    'id' => 489,
                    'name' => 'Al Jarreau',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a3c001030867ea4459f8c1d9142751fe/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:32',
                    'updated_at' => '2019-11-20 22:49:32',
                ),
            489 =>
                array(
                    'id' => 490,
                    'name' => 'Cecile McLorin Salvant',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bd4a95eb0fd1acbb502227ff2df57cdf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:33',
                    'updated_at' => '2019-11-20 22:49:33',
                ),
            490 =>
                array(
                    'id' => 491,
                    'name' => 'Marcus Miller',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ebd4d6d39b53ec2c267e803222bc227b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:34',
                    'updated_at' => '2019-11-20 22:49:34',
                ),
            491 =>
                array(
                    'id' => 492,
                    'name' => 'Avishai Cohen',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/245c23cd284d32177f32469c269a72cd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:35',
                    'updated_at' => '2019-11-20 22:49:35',
                ),
            492 =>
                array(
                    'id' => 493,
                    'name' => 'Sylvain Luc',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5c253220458a07fb887fce371beaa318/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:36',
                    'updated_at' => '2019-11-20 22:49:36',
                ),
            493 =>
                array(
                    'id' => 494,
                    'name' => 'Ahmad Jamal',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e00c58c9aa3b1b035809cb5c580d7e67/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:38',
                    'updated_at' => '2019-11-20 22:49:38',
                ),
            494 =>
                array(
                    'id' => 495,
                    'name' => 'Dizzy Gillespie',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/36e2520fda9611c102f1967b2c4f4005/250x250-000000-80-0-0.jpg',
                    'genre_id' => 11,
                    'created_at' => '2019-11-20 22:49:39',
                    'updated_at' => '2019-11-20 22:49:39',
                ),
            495 =>
                array(
                    'id' => 496,
                    'name' => 'M. Pokora',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7ac4fdd7d67d4d8abacaede95bf207c6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:40',
                    'updated_at' => '2019-11-20 22:49:40',
                ),
            496 =>
                array(
                    'id' => 497,
                    'name' => 'Jean-Jacques Goldman',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b0203e76d3416e351fee48ce463f13f2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:41',
                    'updated_at' => '2019-11-20 22:49:41',
                ),
            497 =>
                array(
                    'id' => 498,
                    'name' => 'Francis Cabrel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/246014fdf741fd2bbc060e8b3acb46c5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:43',
                    'updated_at' => '2019-11-20 22:49:43',
                ),
            498 =>
                array(
                    'id' => 499,
                    'name' => 'Sting',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3fe55f971cd47cb0be73bbd71fe1be2f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:44',
                    'updated_at' => '2019-11-20 22:49:44',
                ),
            499 =>
                array(
                    'id' => 500,
                    'name' => 'Boulevard des Airs',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6edbafc4e8419aed9b4c0946002ecf6d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:45',
                    'updated_at' => '2019-11-20 22:49:45',
                ),
        ));
        \DB::table('artists')->insert(array(
            0 =>
                array(
                    'id' => 501,
                    'name' => 'Les Frangines',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/528c6105ecc91c7f3e8acf2dd4a362d7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:46',
                    'updated_at' => '2019-11-20 22:49:46',
                ),
            1 =>
                array(
                    'id' => 502,
                    'name' => 'Tryo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/dae46df525975acfaa30f2a518ad6aee/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:46',
                    'updated_at' => '2019-11-20 22:49:46',
                ),
            2 =>
                array(
                    'id' => 503,
                    'name' => 'Claudio Capéo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8d1ca3eb76dda65eaabbb90fbf3772a8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:47',
                    'updated_at' => '2019-11-20 22:49:47',
                ),
            3 =>
                array(
                    'id' => 504,
                    'name' => 'Philippe Katerine',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9364702933485e9dd6ffd7b97b56da76/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:48',
                    'updated_at' => '2019-11-20 22:49:48',
                ),
            4 =>
                array(
                    'id' => 505,
                    'name' => 'M',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/53a9d4dbc5f1998f342c5e84d0e8be3a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:50',
                    'updated_at' => '2019-11-20 22:49:50',
                ),
            5 =>
                array(
                    'id' => 506,
                    'name' => 'Bon Entendeur',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/27f071db872fec1b6590d80092346270/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:51',
                    'updated_at' => '2019-11-20 22:49:51',
                ),
            6 =>
                array(
                    'id' => 507,
                    'name' => 'Hoshi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d019dac8593dece211c1ecd7a4294c2d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:51',
                    'updated_at' => '2019-11-20 22:49:51',
                ),
            7 =>
                array(
                    'id' => 508,
                    'name' => 'Jenifer',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a0febb3e6fdc0765b0ee4bd9407d0b36/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:52',
                    'updated_at' => '2019-11-20 22:49:52',
                ),
            8 =>
                array(
                    'id' => 509,
                    'name' => 'Maluma',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/279f02a11a0b311b28acea65ae173cfd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:53',
                    'updated_at' => '2019-11-20 22:49:53',
                ),
            9 =>
                array(
                    'id' => 510,
                    'name' => 'Patrick Bruel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5357b3d53d95520969df5586dac15cb6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:54',
                    'updated_at' => '2019-11-20 22:49:54',
                ),
            10 =>
                array(
                    'id' => 511,
                    'name' => 'Julien Doré',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d6f3fd8b8d6ee4bf3af15be722614ad1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:55',
                    'updated_at' => '2019-11-20 22:49:55',
                ),
            11 =>
                array(
                    'id' => 512,
                    'name' => 'Michael Jones',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:56',
                    'updated_at' => '2019-11-20 22:49:56',
                ),
            12 =>
                array(
                    'id' => 513,
                    'name' => 'Patrick Fiori',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ee20d7e2662bb3a7138629f59a20bb52/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:57',
                    'updated_at' => '2019-11-20 22:49:57',
                ),
            13 =>
                array(
                    'id' => 514,
                    'name' => 'Mylène Farmer',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2367e035ac2e2a4ff4ce89f69e5bd83b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:49:59',
                    'updated_at' => '2019-11-20 22:49:59',
                ),
            14 =>
                array(
                    'id' => 515,
                    'name' => 'Joe Dassin',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c15466795b6d4ad6f2f29b6af2098038/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:00',
                    'updated_at' => '2019-11-20 22:50:00',
                ),
            15 =>
                array(
                    'id' => 516,
                    'name' => 'Les Enfoirés',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/fd048da692de51c3a4c295157eb77b5e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:01',
                    'updated_at' => '2019-11-20 22:50:01',
                ),
            16 =>
                array(
                    'id' => 517,
                    'name' => 'RIDSA',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/de7792fb2025bb1154de418ca0874de2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:02',
                    'updated_at' => '2019-11-20 22:50:02',
                ),
            17 =>
                array(
                    'id' => 518,
                    'name' => 'Videoclub',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d99428ee5e3337efdff55fd730cca6c8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:03',
                    'updated_at' => '2019-11-20 22:50:03',
                ),
            18 =>
                array(
                    'id' => 519,
                    'name' => 'Carole Fredericks',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:03',
                    'updated_at' => '2019-11-20 22:50:03',
                ),
            19 =>
                array(
                    'id' => 520,
                    'name' => 'Ben Mazué',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d139809ea5cb1945aca60e9f99081e41/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:04',
                    'updated_at' => '2019-11-20 22:50:04',
                ),
            20 =>
                array(
                    'id' => 521,
                    'name' => 'Pascal Obispo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/343220b335e33debdc7961de015ab58f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:05',
                    'updated_at' => '2019-11-20 22:50:05',
                ),
            21 =>
                array(
                    'id' => 522,
                    'name' => 'Hubert-Félix Thiéfaine',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/81fe25a92988eb810c6a45ba93835d2d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:07',
                    'updated_at' => '2019-11-20 22:50:07',
                ),
            22 =>
                array(
                    'id' => 523,
                    'name' => 'Isabelle Pierre',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:08',
                    'updated_at' => '2019-11-20 22:50:08',
                ),
            23 =>
                array(
                    'id' => 524,
                    'name' => 'Toumani Diabaté',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/88c7478ee46816051b5672578d62cc4f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:09',
                    'updated_at' => '2019-11-20 22:50:09',
                ),
            24 =>
                array(
                    'id' => 525,
                    'name' => 'Sidiki Diabaté',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1506b6db84b65970e8d7cbd220e979f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:10',
                    'updated_at' => '2019-11-20 22:50:10',
                ),
            25 =>
                array(
                    'id' => 526,
                    'name' => 'Brigitte',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0749066a183e0fb4957c0008e04911f4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:11',
                    'updated_at' => '2019-11-20 22:50:11',
                ),
            26 =>
                array(
                    'id' => 527,
                    'name' => 'Yannick Noah',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/671c9752fad5be91c77eabae5ba6fa1c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:12',
                    'updated_at' => '2019-11-20 22:50:12',
                ),
            27 =>
                array(
                    'id' => 528,
                    'name' => 'Léonie',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1eb0c6abfce62ff154d6b26d7d78fb56/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:13',
                    'updated_at' => '2019-11-20 22:50:13',
                ),
            28 =>
                array(
                    'id' => 529,
                    'name' => 'Matmatah',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/07d53a2dc94d56e1d6ebd371ea584143/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:14',
                    'updated_at' => '2019-11-20 22:50:14',
                ),
            29 =>
                array(
                    'id' => 530,
                    'name' => 'Michel Delpech',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/466577649cec72fee980209fd448c7f8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:15',
                    'updated_at' => '2019-11-20 22:50:15',
                ),
            30 =>
                array(
                    'id' => 531,
                    'name' => 'Camille',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/11f4c1ca063487b612d34189608a886b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:17',
                    'updated_at' => '2019-11-20 22:50:17',
                ),
            31 =>
                array(
                    'id' => 532,
                    'name' => 'Jean-Baptiste Guegan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/26a2523f5cbdd282d65d54998372c38e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:18',
                    'updated_at' => '2019-11-20 22:50:18',
                ),
            32 =>
                array(
                    'id' => 533,
                    'name' => 'Michel Jonasz',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b4f8fc95a173055247de9f10a862f7d7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:18',
                    'updated_at' => '2019-11-20 22:50:18',
                ),
            33 =>
                array(
                    'id' => 534,
                    'name' => 'Pierre Bachelet',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/030f18844a8dd38f8dd63aa7d0e38355/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:19',
                    'updated_at' => '2019-11-20 22:50:19',
                ),
            34 =>
                array(
                    'id' => 535,
                    'name' => 'FATOUMATA DIAWARA',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6fe68555f30604b0225e3a74466dcea3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:21',
                    'updated_at' => '2019-11-20 22:50:21',
                ),
            35 =>
                array(
                    'id' => 536,
                    'name' => 'Lou',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/88cc4ab787b85cc29838e7bed8091a2b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:50:22',
                    'updated_at' => '2019-11-20 22:56:46',
                ),
            36 =>
                array(
                    'id' => 537,
                    'name' => 'Tim Dup',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4e1860c00097f60c1e433dbc006d4b11/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:23',
                    'updated_at' => '2019-11-20 22:50:23',
                ),
            37 =>
                array(
                    'id' => 538,
                    'name' => 'Bénabar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ed4ffaf5e015e0a53b581731aa866918/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:23',
                    'updated_at' => '2019-11-20 22:50:23',
                ),
            38 =>
                array(
                    'id' => 539,
                    'name' => 'Laurent Voulzy',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1cb34f6a5171d3d1332843f404c368d5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:25',
                    'updated_at' => '2019-11-20 22:50:25',
                ),
            39 =>
                array(
                    'id' => 540,
                    'name' => 'Zoufris Maracas',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/fdcc7cc4ac101f5ef72e33a29e4b7d75/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:26',
                    'updated_at' => '2019-11-20 22:50:26',
                ),
            40 =>
                array(
                    'id' => 541,
                    'name' => 'Daniel Lavoie',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/180d6fd132a4d4c66fe816178a35dc19/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:27',
                    'updated_at' => '2019-11-20 22:50:27',
                ),
            41 =>
                array(
                    'id' => 542,
                    'name' => 'Les Innocents',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2e281e282445a0a22f11cef9fc561444/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:28',
                    'updated_at' => '2019-11-20 22:50:28',
                ),
            42 =>
                array(
                    'id' => 543,
                    'name' => 'Gaetan Roussel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/096a097cf872bc9b34996db9fed3b1ce/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:29',
                    'updated_at' => '2019-11-20 22:50:29',
                ),
            43 =>
                array(
                    'id' => 544,
                    'name' => 'Tété',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4273b054f7984f7ed4ec3d3bdb47cf69/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:31',
                    'updated_at' => '2019-11-20 22:50:31',
                ),
            44 =>
                array(
                    'id' => 545,
                    'name' => 'Elsa Esnoult',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1abe3d74c6b99f6a080f3f749dddfa10/250x250-000000-80-0-0.jpg',
                    'genre_id' => 12,
                    'created_at' => '2019-11-20 22:50:32',
                    'updated_at' => '2019-11-20 22:50:32',
                ),
            45 =>
                array(
                    'id' => 546,
                    'name' => 'Johnny Cash',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7a812b76fb0a80916cf0e9938795c189/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:33',
                    'updated_at' => '2019-11-20 22:50:33',
                ),
            46 =>
                array(
                    'id' => 547,
                    'name' => 'Dan + Shay',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a5c943ce9e5ab303f2d54ce6f683cb7b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:34',
                    'updated_at' => '2019-11-20 22:50:34',
                ),
            47 =>
                array(
                    'id' => 548,
                    'name' => 'Lady Antebellum',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d065b9e16563b845d6343b41e1bb65f1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:35',
                    'updated_at' => '2019-11-20 22:50:35',
                ),
            48 =>
                array(
                    'id' => 549,
                    'name' => 'Blanco Brown',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9cda281e7322ec7e25193d7d73dca157/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:37',
                    'updated_at' => '2019-11-20 22:50:37',
                ),
            49 =>
                array(
                    'id' => 550,
                    'name' => 'Willie Nelson',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/46b26260d105f54a5796f10b80c692af/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:37',
                    'updated_at' => '2019-11-20 22:50:37',
                ),
            50 =>
                array(
                    'id' => 551,
                    'name' => 'Old Crow Medicine Show',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a045b6a8b09407499710b7e79b32fd34/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:38',
                    'updated_at' => '2019-11-20 22:50:38',
                ),
            51 =>
                array(
                    'id' => 552,
                    'name' => 'John Denver',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ba730fbb320457a29ceee287f646b769/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:40',
                    'updated_at' => '2019-11-20 22:50:40',
                ),
            52 =>
                array(
                    'id' => 553,
                    'name' => 'Dolly Parton',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2f34b98055ff0d7b2b9c2ca76e36f8bd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:41',
                    'updated_at' => '2019-11-20 22:50:41',
                ),
            53 =>
                array(
                    'id' => 554,
                    'name' => 'Chris Stapleton',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b6996bc45e793d05f9fffce17b97ad2c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:42',
                    'updated_at' => '2019-11-20 22:50:42',
                ),
            54 =>
                array(
                    'id' => 555,
                    'name' => 'Kris Kristofferson',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a2438d521ba7b8bae01470569925bd29/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:43',
                    'updated_at' => '2019-11-20 22:50:43',
                ),
            55 =>
                array(
                    'id' => 556,
                    'name' => 'Alan Jackson',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7440703c81254acad12f1ebead8284de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:44',
                    'updated_at' => '2019-11-20 22:50:44',
                ),
            56 =>
                array(
                    'id' => 557,
                    'name' => 'Tony Joe White',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/38b417a419d470070cc6fdf483bb1b55/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:46',
                    'updated_at' => '2019-11-20 22:50:46',
                ),
            57 =>
                array(
                    'id' => 558,
                    'name' => 'Blake Shelton',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/bda0cf623184ea9e7a9c3a34b1c41573/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:47',
                    'updated_at' => '2019-11-20 22:50:47',
                ),
            58 =>
                array(
                    'id' => 559,
                    'name' => 'Luke Combs',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1a151bc7683cf84f0d847751ad01ad51/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:48',
                    'updated_at' => '2019-11-20 22:50:48',
                ),
            59 =>
                array(
                    'id' => 560,
                    'name' => 'Luke Bryan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/46f024543b6fc2336c366368dac0d5d9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:49',
                    'updated_at' => '2019-11-20 22:50:49',
                ),
            60 =>
                array(
                    'id' => 561,
                    'name' => 'Waylon Jennings',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8d79b3a2391c4a86b62ec116749119de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:51',
                    'updated_at' => '2019-11-20 22:50:51',
                ),
            61 =>
                array(
                    'id' => 562,
                    'name' => 'Kenny Rogers',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/69127a6016a73cc3c24703b72cf094c3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:52',
                    'updated_at' => '2019-11-20 22:50:52',
                ),
            62 =>
                array(
                    'id' => 563,
                    'name' => 'Zac Brown Band',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/64fd67feafb3638a2dff5cc237f65da0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:53',
                    'updated_at' => '2019-11-20 22:50:53',
                ),
            63 =>
                array(
                    'id' => 564,
                    'name' => 'Kacey Musgraves',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/214bb871a6e0d0a476098f41f1dcbafb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:54',
                    'updated_at' => '2019-11-20 22:50:54',
                ),
            64 =>
                array(
                    'id' => 565,
                    'name' => 'Blackberry Smoke',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cc137230133cd4d2974a6fd65f9945e9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:56',
                    'updated_at' => '2019-11-20 22:50:56',
                ),
            65 =>
                array(
                    'id' => 566,
                    'name' => 'Nashville Cast',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8602a3e4612f1573681433a6821b7964/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:57',
                    'updated_at' => '2019-11-20 22:50:57',
                ),
            66 =>
                array(
                    'id' => 567,
                    'name' => 'Old Dominion',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8a61dd153ee20c8877959da79fd106c9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:58',
                    'updated_at' => '2019-11-20 22:50:58',
                ),
            67 =>
                array(
                    'id' => 568,
                    'name' => 'The Highwaymen',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/79ac8518548b09c7913b24e6f48b9c85/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:50:59',
                    'updated_at' => '2019-11-20 22:50:59',
                ),
            68 =>
                array(
                    'id' => 569,
                    'name' => 'Vince Gill',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ed54071feea19e01f8e473cf381fc577/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:01',
                    'updated_at' => '2019-11-20 22:51:01',
                ),
            69 =>
                array(
                    'id' => 570,
                    'name' => 'The Handsome Family',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/28504f0ed5bdff7dddb50ad4cb7903e5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:02',
                    'updated_at' => '2019-11-20 22:51:02',
                ),
            70 =>
                array(
                    'id' => 571,
                    'name' => 'Keith Urban',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8b0262e628aa7b13e65018358c9327b2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:03',
                    'updated_at' => '2019-11-20 22:51:03',
                ),
            71 =>
                array(
                    'id' => 572,
                    'name' => 'Glen Campbell',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7305b5771dbfb1b4c3ad34c21765a39c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:04',
                    'updated_at' => '2019-11-20 22:51:04',
                ),
            72 =>
                array(
                    'id' => 573,
                    'name' => 'LeAnn Rimes',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/eb10a457cc62298a81e99c89167a8f7c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:06',
                    'updated_at' => '2019-11-20 22:51:06',
                ),
            73 =>
                array(
                    'id' => 574,
                    'name' => 'Carrie Underwood',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/51fd30c5884f40aa0fca714270559f0e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:07',
                    'updated_at' => '2019-11-20 22:51:07',
                ),
            74 =>
                array(
                    'id' => 575,
                    'name' => 'Miranda Lambert',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b89bf542963c84b47b14a0f3d1697ff3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:08',
                    'updated_at' => '2019-11-20 22:51:08',
                ),
            75 =>
                array(
                    'id' => 576,
                    'name' => 'Emmylou Harris',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/654555750f015bbe57c09ca9ced3db89/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:10',
                    'updated_at' => '2019-11-20 22:51:10',
                ),
            76 =>
                array(
                    'id' => 577,
                    'name' => 'Kenny Chesney',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7af374ef83f27611e87f8c6b3caa4b8e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:11',
                    'updated_at' => '2019-11-20 22:51:11',
                ),
            77 =>
                array(
                    'id' => 578,
                    'name' => 'George Strait',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5b92a82b871f54205d93686cff2117a6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:12',
                    'updated_at' => '2019-11-20 22:51:12',
                ),
            78 =>
                array(
                    'id' => 579,
                    'name' => 'Townes Van Zandt',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a339bf274825e538772ff3ed5f130e90/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:14',
                    'updated_at' => '2019-11-20 22:51:14',
                ),
            79 =>
                array(
                    'id' => 580,
                    'name' => 'Jason Aldean',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/646111e843c47904e24d566b887178fe/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:15',
                    'updated_at' => '2019-11-20 22:51:15',
                ),
            80 =>
                array(
                    'id' => 581,
                    'name' => 'Brantley Gilbert',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/16cc0998066ef54b52bea95f61909df2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:16',
                    'updated_at' => '2019-11-20 22:51:16',
                ),
            81 =>
                array(
                    'id' => 582,
                    'name' => 'Florida Georgia Line',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/772ba3881fb58ab48ce4e435e52d63d8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:17',
                    'updated_at' => '2019-11-20 22:51:17',
                ),
            82 =>
                array(
                    'id' => 583,
                    'name' => 'Brad Paisley',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9da49486e797382b04f98ca641172171/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:19',
                    'updated_at' => '2019-11-20 22:51:19',
                ),
            83 =>
                array(
                    'id' => 584,
                    'name' => 'Hank Williams',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ea4dc4ff278220d2c3b10bcbfc576f19/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:20',
                    'updated_at' => '2019-11-20 22:51:20',
                ),
            84 =>
                array(
                    'id' => 585,
                    'name' => 'Toby Keith',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f814f4f373605dc8ccbf771023a20b96/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:21',
                    'updated_at' => '2019-11-20 22:51:21',
                ),
            85 =>
                array(
                    'id' => 586,
                    'name' => 'The Cadillac Three',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d3578b34241068d779d3d0d5ad545159/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:23',
                    'updated_at' => '2019-11-20 22:51:23',
                ),
            86 =>
                array(
                    'id' => 587,
                    'name' => 'Brooks & Dunn',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d6c494180573e259ffde1f212d6c0930/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:24',
                    'updated_at' => '2019-11-20 22:51:24',
                ),
            87 =>
                array(
                    'id' => 588,
                    'name' => 'Brett Young',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c21be8ab3660550a0988b89791aa22e2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:25',
                    'updated_at' => '2019-11-20 22:51:25',
                ),
            88 =>
                array(
                    'id' => 589,
                    'name' => 'Hootie & the Blowfish',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f8e0268280d5530ca9cdcc668306b228/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:26',
                    'updated_at' => '2019-11-20 22:51:26',
                ),
            89 =>
                array(
                    'id' => 590,
                    'name' => 'Eric Church',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c9da6d468e77395e1a85dafdb0eabff1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:27',
                    'updated_at' => '2019-11-20 22:51:27',
                ),
            90 =>
                array(
                    'id' => 591,
                    'name' => 'Martina McBride',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/dac8027e4dccc0d657b55e7f8d746dbc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:29',
                    'updated_at' => '2019-11-20 22:51:29',
                ),
            91 =>
                array(
                    'id' => 592,
                    'name' => 'Faith Hill',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2faa4dbaedda2e022df672d45ae29755/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:30',
                    'updated_at' => '2019-11-20 22:51:30',
                ),
            92 =>
                array(
                    'id' => 593,
                    'name' => 'Thomas Rhett',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d725bb1e529b81c55cb872a956363d4b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:31',
                    'updated_at' => '2019-11-20 22:51:31',
                ),
            93 =>
                array(
                    'id' => 594,
                    'name' => 'Tim McGraw',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ff15a29c69273f5113efc07e2962938e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:33',
                    'updated_at' => '2019-11-20 22:51:33',
                ),
            94 =>
                array(
                    'id' => 595,
                    'name' => 'Josh Turner',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7837c7627128ab0e375d694ca9b05264/250x250-000000-80-0-0.jpg',
                    'genre_id' => 13,
                    'created_at' => '2019-11-20 22:51:34',
                    'updated_at' => '2019-11-20 22:51:34',
                ),
            95 =>
                array(
                    'id' => 596,
                    'name' => 'Ludovico Einaudi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/901d41dc90ec292c80ee2a352f435571/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:35',
                    'updated_at' => '2019-11-20 22:51:35',
                ),
            96 =>
                array(
                    'id' => 597,
                    'name' => 'Alexandre Tharaud',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/480226625dd56f294aca1c3b07e1cb07/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:36',
                    'updated_at' => '2019-11-20 22:51:36',
                ),
            97 =>
                array(
                    'id' => 598,
                    'name' => 'Lang Lang',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7939d3ded883e073b49ad2c6c054e258/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:38',
                    'updated_at' => '2019-11-20 22:51:38',
                ),
            98 =>
                array(
                    'id' => 599,
                    'name' => 'RIOPY',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9b9c8befcc9dd516d60f5409fc3f7831/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:39',
                    'updated_at' => '2019-11-20 22:51:39',
                ),
            99 =>
                array(
                    'id' => 600,
                    'name' => 'Max Richter',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/01e9c918537336e4dd3c8f44abc41fdd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:40',
                    'updated_at' => '2019-11-20 22:51:40',
                ),
            100 =>
                array(
                    'id' => 601,
                    'name' => 'Ólafur Arnalds',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/39c599372c3484a872a160243da08f09/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:41',
                    'updated_at' => '2019-11-20 22:51:41',
                ),
            101 =>
                array(
                    'id' => 602,
                    'name' => 'Berliner Philharmoniker',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cf69271a0aa2173cfe0d1ea4fb9aa16e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:42',
                    'updated_at' => '2019-11-20 22:51:42',
                ),
            102 =>
                array(
                    'id' => 603,
                    'name' => 'Herbert von Karajan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c3534e6e2e94c88eeb987697d12e005d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:44',
                    'updated_at' => '2019-11-20 22:51:44',
                ),
            103 =>
                array(
                    'id' => 604,
                    'name' => 'Luciano Pavarotti',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/65592b30d258c43a770ef811c62fccb9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:45',
                    'updated_at' => '2019-11-20 22:51:45',
                ),
            104 =>
                array(
                    'id' => 605,
                    'name' => 'Glenn Gould',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/025d1ca55b6331e7f166e90f5ddb621f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:46',
                    'updated_at' => '2019-11-20 22:51:46',
                ),
            105 =>
                array(
                    'id' => 606,
                    'name' => 'Alexis Ffrench',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/deb0f47e06017cd9962414fcb64c8aa2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:48',
                    'updated_at' => '2019-11-20 22:51:48',
                ),
            106 =>
                array(
                    'id' => 607,
                    'name' => 'Wiener Philharmoniker',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/91932a1827447ff5fbe9e74f3f730f18/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:49',
                    'updated_at' => '2019-11-20 22:51:49',
                ),
            107 =>
                array(
                    'id' => 608,
                    'name' => 'Philippe Jaroussky',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/bbbbabffb576873a71a202d4d615a72b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:50',
                    'updated_at' => '2019-11-20 22:51:50',
                ),
            108 =>
                array(
                    'id' => 609,
                    'name' => 'Piano Novel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/bc568307f9a48db15fca3e820b222f04/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:52',
                    'updated_at' => '2019-11-20 22:51:52',
                ),
            109 =>
                array(
                    'id' => 610,
                    'name' => 'Accademia Bizantina',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/afca04ac640cd579e38ab409e1c1baf4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:53',
                    'updated_at' => '2019-11-20 22:51:53',
                ),
            110 =>
                array(
                    'id' => 611,
                    'name' => 'Ottavio Dantone',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:54',
                    'updated_at' => '2019-11-20 22:51:54',
                ),
            111 =>
                array(
                    'id' => 612,
                    'name' => 'Luke Howard',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/264024b04516d31d8520720fd482565f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:56',
                    'updated_at' => '2019-11-20 22:51:56',
                ),
            112 =>
                array(
                    'id' => 613,
                    'name' => 'Jordi Savall',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/153003237991c6ee904cfb855fe999b9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:57',
                    'updated_at' => '2019-11-20 22:51:57',
                ),
            113 =>
                array(
                    'id' => 614,
                    'name' => 'Federico Mecozzi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/af9c6c7528455a0a1d5901bbda80e933/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:51:58',
                    'updated_at' => '2019-11-20 22:51:58',
                ),
            114 =>
                array(
                    'id' => 615,
                    'name' => 'Alexandra Streliski',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1080bc45fd81325494d2fae444741c0c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:00',
                    'updated_at' => '2019-11-20 22:52:00',
                ),
            115 =>
                array(
                    'id' => 616,
                    'name' => 'Frédéric Chopin',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/915349b0a246cd0fac1c16f6963e43bf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:01',
                    'updated_at' => '2019-11-20 22:52:01',
                ),
            116 =>
                array(
                    'id' => 617,
                    'name' => 'Redi Hasa',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:02',
                    'updated_at' => '2019-11-20 22:52:02',
                ),
            117 =>
                array(
                    'id' => 618,
                    'name' => 'Joep Beving',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d88631dcad1f6247c5f97fb0d88dd95f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:03',
                    'updated_at' => '2019-11-20 22:52:03',
                ),
            118 =>
                array(
                    'id' => 619,
                    'name' => 'Audiomachine',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0daa07a4128cbb6c526d0882d9a65b15/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:04',
                    'updated_at' => '2019-11-20 22:52:04',
                ),
            119 =>
                array(
                    'id' => 620,
                    'name' => 'Wolfgang Amadeus Mozart',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/41811848bbce380a4753bcb71fa84394/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:06',
                    'updated_at' => '2019-11-20 22:52:06',
                ),
            120 =>
                array(
                    'id' => 621,
                    'name' => 'Daniel Hope',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a42d4fd5e857d980d183b5ad8c2ec518/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:07',
                    'updated_at' => '2019-11-20 22:52:07',
                ),
            121 =>
                array(
                    'id' => 622,
                    'name' => '2CELLOS',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/de35ad6a3cb26ed98d3ff3017be4840d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:08',
                    'updated_at' => '2019-11-20 22:52:08',
                ),
            122 =>
                array(
                    'id' => 623,
                    'name' => 'Maria Callas',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ad352a516fdf3f0a8c8179414f82cb5b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:09',
                    'updated_at' => '2019-11-20 22:52:09',
                ),
            123 =>
                array(
                    'id' => 624,
                    'name' => 'The Piano Guys',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ce4a105fdebe0744b6137dc7eb8a6ca9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:11',
                    'updated_at' => '2019-11-20 22:52:11',
                ),
            124 =>
                array(
                    'id' => 625,
                    'name' => 'Rodolfo Jones',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:12',
                    'updated_at' => '2019-11-20 22:52:12',
                ),
            125 =>
                array(
                    'id' => 626,
                    'name' => 'Daniel Barenboim',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/51e32c52f9c9058c7edb1425ea6c7888/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:13',
                    'updated_at' => '2019-11-20 22:52:13',
                ),
            126 =>
                array(
                    'id' => 627,
                    'name' => 'Olga Scheps',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f4631976979888c699586e4e026b3c4b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:14',
                    'updated_at' => '2019-11-20 22:52:14',
                ),
            127 =>
                array(
                    'id' => 628,
                    'name' => 'Konzerthaus Kammerorchester Berlin',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7b21ae09980a8fe7c1106dce65948e9d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:16',
                    'updated_at' => '2019-11-20 22:52:16',
                ),
            128 =>
                array(
                    'id' => 629,
                    'name' => 'André de Ridder',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/82daa150e5588b07472f89b542d3bdc6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:17',
                    'updated_at' => '2019-11-20 22:52:17',
                ),
            129 =>
                array(
                    'id' => 630,
                    'name' => 'London Philharmonic Orchestra',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:18',
                    'updated_at' => '2019-11-20 22:52:18',
                ),
            130 =>
                array(
                    'id' => 631,
                    'name' => 'Lambert',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8147f428470b9cc9b158e3c4fc7e31f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:19',
                    'updated_at' => '2019-11-20 22:52:19',
                ),
            131 =>
                array(
                    'id' => 632,
                    'name' => 'Claudio Abbado',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/30994c50910e5225961f64c6da5a3f29/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:20',
                    'updated_at' => '2019-11-20 22:52:20',
                ),
            132 =>
                array(
                    'id' => 633,
                    'name' => 'The Vivaldi Festival Ensemble',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:22',
                    'updated_at' => '2019-11-20 22:52:22',
                ),
            133 =>
                array(
                    'id' => 634,
                    'name' => 'Minxz',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:22',
                    'updated_at' => '2019-11-20 22:52:22',
                ),
            134 =>
                array(
                    'id' => 635,
                    'name' => 'Johann Sebastian Bach',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d84d324b290e8a1be4a6951db2d9692b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:23',
                    'updated_at' => '2019-11-20 22:52:23',
                ),
            135 =>
                array(
                    'id' => 636,
                    'name' => 'RENAUD CAPUCON',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/20c515ad22dd154da0bdbcf974a7d19e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:24',
                    'updated_at' => '2019-11-20 22:52:24',
                ),
            136 =>
                array(
                    'id' => 637,
                    'name' => 'Armel Dupas',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/71f458e7895286e0c6169b54a3f3a271/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:25',
                    'updated_at' => '2019-11-20 22:52:25',
                ),
            137 =>
                array(
                    'id' => 638,
                    'name' => 'Vikingur Olafsson',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4bbc0975d70e50f036d8f8c15938cf9c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:27',
                    'updated_at' => '2019-11-20 22:52:27',
                ),
            138 =>
                array(
                    'id' => 639,
                    'name' => 'Natalie Dessay',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c6558048c42206d871b464cd5bdc93e5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:28',
                    'updated_at' => '2019-11-20 22:52:28',
                ),
            139 =>
                array(
                    'id' => 640,
                    'name' => 'KHATIA BUNIATISHVILI',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/02069a89ae5b13ec19ad1ff2d68e3acf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:29',
                    'updated_at' => '2019-11-20 22:52:29',
                ),
            140 =>
                array(
                    'id' => 641,
                    'name' => 'Jakub Józef Orliński',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/28c1c22f51e6417e29ffbd7c3bc55944/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:30',
                    'updated_at' => '2019-11-20 22:52:30',
                ),
            141 =>
                array(
                    'id' => 642,
                    'name' => 'Erik Satie',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:32',
                    'updated_at' => '2019-11-20 22:52:32',
                ),
            142 =>
                array(
                    'id' => 643,
                    'name' => 'Academy of St. Martin in the Fields',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6b520b7d28eabb82c3ce1f7b86528542/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:33',
                    'updated_at' => '2019-11-20 22:52:33',
                ),
            143 =>
                array(
                    'id' => 644,
                    'name' => 'Franz Schubert',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2baf03725c66d49f2c3d8d9d4c0bb486/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:34',
                    'updated_at' => '2019-11-20 22:52:34',
                ),
            144 =>
                array(
                    'id' => 645,
                    'name' => 'Mstislav Rostropovich',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e8ca7c32292e9ef7c290e9823c9ab123/250x250-000000-80-0-0.jpg',
                    'genre_id' => 14,
                    'created_at' => '2019-11-20 22:52:36',
                    'updated_at' => '2019-11-20 22:52:36',
                ),
            145 =>
                array(
                    'id' => 646,
                    'name' => 'Lady Gaga',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c467c1ffc64c8ef18467838c97f26014/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:37',
                    'updated_at' => '2019-11-20 22:52:37',
                ),
            146 =>
                array(
                    'id' => 647,
                    'name' => 'Hans Zimmer',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ff9f1dc4cde85a63482a4cea7a863de9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:38',
                    'updated_at' => '2019-11-20 22:52:38',
                ),
            147 =>
                array(
                    'id' => 648,
                    'name' => 'Ramin Djawadi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c5c94c06ea0f5451c6ce27899d236675/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:40',
                    'updated_at' => '2019-11-20 22:52:40',
                ),
            148 =>
                array(
                    'id' => 649,
                    'name' => 'Yann Tiersen',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/bdd2129b6cd95b46e1e7c977da2519e1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:41',
                    'updated_at' => '2019-11-20 22:52:41',
                ),
            149 =>
                array(
                    'id' => 650,
                    'name' => 'John Williams',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0ce9c2746f4ded475b2c27795cb73f7c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:42',
                    'updated_at' => '2019-11-20 22:52:42',
                ),
            150 =>
                array(
                    'id' => 651,
                    'name' => 'Survivor',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/191ce2b6844c6bfebb4a7a54d2b76134/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:43',
                    'updated_at' => '2019-11-20 22:52:43',
                ),
            151 =>
                array(
                    'id' => 652,
                    'name' => 'Gavin Greenaway',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/07f859ea764a48b2e89949c32f44d141/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:45',
                    'updated_at' => '2019-11-20 22:52:45',
                ),
            152 =>
                array(
                    'id' => 653,
                    'name' => 'Lisa Gerrard',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/457f280fd71b64cad482f15b8ee2c926/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:46',
                    'updated_at' => '2019-11-20 22:52:46',
                ),
            153 =>
                array(
                    'id' => 654,
                    'name' => 'The Lyndhurst Orchestra',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:48',
                    'updated_at' => '2019-11-20 22:52:48',
                ),
            154 =>
                array(
                    'id' => 655,
                    'name' => 'Ennio Morricone',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5c185197d4a6b59d44fa048dec47be24/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:49',
                    'updated_at' => '2019-11-20 22:52:49',
                ),
            155 =>
                array(
                    'id' => 656,
                    'name' => 'Howard Shore',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b46a9342d1c66af7573f7ee787421b2f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:50',
                    'updated_at' => '2019-11-20 22:52:50',
                ),
            156 =>
                array(
                    'id' => 657,
                    'name' => 'Dove Cameron',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/67b57aa8a7b15983dcc34de926dcb5c8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:51',
                    'updated_at' => '2019-11-20 22:52:51',
                ),
            157 =>
                array(
                    'id' => 658,
                    'name' => 'Hugh Jackman',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/381ab3bd2bed3bed192b33a5a149e963/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:53',
                    'updated_at' => '2019-11-20 22:52:53',
                ),
            158 =>
                array(
                    'id' => 659,
                    'name' => 'Hildur Guðnadóttir',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4349889d7dcef57be38c653bbed9a0e0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:54',
                    'updated_at' => '2019-11-20 22:52:54',
                ),
            159 =>
                array(
                    'id' => 660,
                    'name' => 'Emmylou Homs',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:55',
                    'updated_at' => '2019-11-20 22:52:55',
                ),
            160 =>
                array(
                    'id' => 661,
                    'name' => 'Sofia Carson',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e4a413ca82c0e72a7e9d428a1db4926d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:55',
                    'updated_at' => '2019-11-20 22:52:55',
                ),
            161 =>
                array(
                    'id' => 662,
                    'name' => 'Cerise Calixte',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:57',
                    'updated_at' => '2019-11-20 22:52:57',
                ),
            162 =>
                array(
                    'id' => 663,
                    'name' => 'The Greatest Showman Ensemble',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ade4902a8ebf17a344a2fec83738f7f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:57',
                    'updated_at' => '2019-11-20 22:52:57',
                ),
            163 =>
                array(
                    'id' => 664,
                    'name' => 'Eric Serra',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/48ad92d3a285d6948731e0ee577b33f1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:58',
                    'updated_at' => '2019-11-20 22:52:58',
                ),
            164 =>
                array(
                    'id' => 665,
                    'name' => 'Zendaya',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/71094bacfb4b1a4e96915d537c047bfb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:52:59',
                    'updated_at' => '2019-11-20 22:52:59',
                ),
            165 =>
                array(
                    'id' => 666,
                    'name' => 'James Newton Howard',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/388729ea7d79af44834035b4da79fc29/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:01',
                    'updated_at' => '2019-11-20 22:53:01',
                ),
            166 =>
                array(
                    'id' => 667,
                    'name' => 'Alexandre Desplat',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/bef6438a4732a40aca3ff4ac7c311cad/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:02',
                    'updated_at' => '2019-11-20 22:53:02',
                ),
            167 =>
                array(
                    'id' => 668,
                    'name' => 'James Horner',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/86a21a494961cf0d52af5f5c317f81a4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:03',
                    'updated_at' => '2019-11-20 22:53:03',
                ),
            168 =>
                array(
                    'id' => 669,
                    'name' => 'Cecilia Krull',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/020a61a57c570ab17743d57ecbb506d1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:05',
                    'updated_at' => '2019-11-20 22:53:05',
                ),
            169 =>
                array(
                    'id' => 670,
                    'name' => 'Mozart Opera Rock',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:05',
                    'updated_at' => '2019-11-20 22:53:05',
                ),
            170 =>
                array(
                    'id' => 671,
                    'name' => 'Keala Settle',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8b820de854b155da06eb4318e09c3da2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:06',
                    'updated_at' => '2019-11-20 22:53:06',
                ),
            171 =>
                array(
                    'id' => 672,
                    'name' => 'Zac Efron',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/55e1ba79fb47815ff4ea0375576ac03f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:07',
                    'updated_at' => '2019-11-20 22:53:07',
                ),
            172 =>
                array(
                    'id' => 673,
                    'name' => 'Bruno Coulais',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0327974b586377706e196200efe312a9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:07',
                    'updated_at' => '2019-11-20 22:53:07',
                ),
            173 =>
                array(
                    'id' => 674,
                    'name' => 'Justin Hurwitz',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/11ccb5809e3aa0b2d54582da8d246e13/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:09',
                    'updated_at' => '2019-11-20 22:53:09',
                ),
            174 =>
                array(
                    'id' => 675,
                    'name' => 'Two Steps from Hell',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/13ebee5e42541a2dcaa042968d6897c8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:10',
                    'updated_at' => '2019-11-20 22:53:10',
                ),
            175 =>
                array(
                    'id' => 676,
                    'name' => 'Armand Amar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b2e869a6222e38e090998d59d04e48de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:11',
                    'updated_at' => '2019-11-20 22:53:11',
                ),
            176 =>
                array(
                    'id' => 677,
                    'name' => 'Booboo Stewart',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:13',
                    'updated_at' => '2019-11-20 22:53:13',
                ),
            177 =>
                array(
                    'id' => 678,
                    'name' => 'Cameron Boyce',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:13',
                    'updated_at' => '2019-11-20 22:53:13',
                ),
            178 =>
                array(
                    'id' => 679,
                    'name' => 'China Anne McClain',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6c881cb334e41075a78846162d0ee8de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:14',
                    'updated_at' => '2019-11-20 22:53:14',
                ),
            179 =>
                array(
                    'id' => 680,
                    'name' => 'Alan Silvestri',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5b595b30a414979ee7259b88384fc65c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:14',
                    'updated_at' => '2019-11-20 22:53:14',
                ),
            180 =>
                array(
                    'id' => 681,
                    'name' => 'Taron Egerton',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8c0822c97346922dc39dcc907ad628dc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:16',
                    'updated_at' => '2019-11-20 22:53:16',
                ),
            181 =>
                array(
                    'id' => 682,
                    'name' => 'Lorne Balfe',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a26f77abb886779b63bc7bc85cc04985/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:16',
                    'updated_at' => '2019-11-20 22:53:16',
                ),
            182 =>
                array(
                    'id' => 683,
                    'name' => 'Riverdale Cast',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/352a78bf7976743b30b83c9967c5ccd2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:18',
                    'updated_at' => '2019-11-20 22:53:18',
                ),
            183 =>
                array(
                    'id' => 684,
                    'name' => 'Emma Stone',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/969ce950be7978de401e0b3867bac715/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:19',
                    'updated_at' => '2019-11-20 22:53:19',
                ),
            184 =>
                array(
                    'id' => 685,
                    'name' => 'Thomas Newman',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8c36af6e003a2d266056197ff34d9272/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:19',
                    'updated_at' => '2019-11-20 22:53:19',
                ),
            185 =>
                array(
                    'id' => 686,
                    'name' => 'Yasuharu Takanashi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:21',
                    'updated_at' => '2019-11-20 22:53:21',
                ),
            186 =>
                array(
                    'id' => 687,
                    'name' => 'London Symphony Orchestra',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/bc2d792f718affd729ba75961545b7a0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:22',
                    'updated_at' => '2019-11-20 22:53:22',
                ),
            187 =>
                array(
                    'id' => 688,
                    'name' => 'Ryan Gosling',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/18503d7f0a164fe610beeaf900ee3689/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:23',
                    'updated_at' => '2019-11-20 22:53:23',
                ),
            188 =>
                array(
                    'id' => 689,
                    'name' => 'Labrinth',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/15a3d341682bd1fca7f557bd5bfd0908/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:24',
                    'updated_at' => '2019-11-20 22:53:24',
                ),
            189 =>
                array(
                    'id' => 690,
                    'name' => 'Thomas Doherty',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:25',
                    'updated_at' => '2019-11-20 22:53:25',
                ),
            190 =>
                array(
                    'id' => 691,
                    'name' => 'Steve Jablonsky',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0fa61d9c0bca4741a4e752a95b405784/250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:25',
                    'updated_at' => '2019-11-20 22:53:25',
                ),
            191 =>
                array(
                    'id' => 692,
                    'name' => 'Rupert Gregson-Williams',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 15,
                    'created_at' => '2019-11-20 22:53:27',
                    'updated_at' => '2019-11-20 22:53:27',
                ),
            192 =>
                array(
                    'id' => 693,
                    'name' => 'AC/DC',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ad61d6e0fa724d880db979c9ac8cc5e3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:28',
                    'updated_at' => '2019-11-20 22:53:28',
                ),
            193 =>
                array(
                    'id' => 694,
                    'name' => 'System of a Down',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/67460cdb0b52bfde1b807650958058d6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:30',
                    'updated_at' => '2019-11-20 22:53:30',
                ),
            194 =>
                array(
                    'id' => 695,
                    'name' => 'Slipknot',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7a66231b65ed2a4040991bf5730c4826/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:32',
                    'updated_at' => '2019-11-20 22:53:32',
                ),
            195 =>
                array(
                    'id' => 696,
                    'name' => 'Rage Against the Machine',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/761f3ce1fe1d6cb80188187db59c8907/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:33',
                    'updated_at' => '2019-11-20 22:53:33',
                ),
            196 =>
                array(
                    'id' => 697,
                    'name' => 'KoЯn',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/efbc58108505d9fbcc8a0a7e262e02a6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:35',
                    'updated_at' => '2019-11-20 22:53:35',
                ),
            197 =>
                array(
                    'id' => 698,
                    'name' => 'Europe',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fa59988e509018c4be5109fc9a3a3f40/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:36',
                    'updated_at' => '2019-11-20 22:53:36',
                ),
            198 =>
                array(
                    'id' => 699,
                    'name' => 'Deep Purple',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/04ed0568f69e7e505de167abb61beff1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:37',
                    'updated_at' => '2019-11-20 22:53:37',
                ),
            199 =>
                array(
                    'id' => 700,
                    'name' => 'Ultra Vomit',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/af468fd7e7879f1f1946f1c38e09defa/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:39',
                    'updated_at' => '2019-11-20 22:53:39',
                ),
            200 =>
                array(
                    'id' => 701,
                    'name' => 'Nightwish',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5506735b6a66d6e5e33317856a45896a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:40',
                    'updated_at' => '2019-11-20 22:53:40',
                ),
            201 =>
                array(
                    'id' => 702,
                    'name' => 'Powerwolf',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/119b0dd18d94de98432024ff4514d54f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:42',
                    'updated_at' => '2019-11-20 22:53:42',
                ),
            202 =>
                array(
                    'id' => 703,
                    'name' => 'Ghost',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4cfad4049e78f8055bb8b5c413bb7c83/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:43',
                    'updated_at' => '2019-11-20 22:53:43',
                ),
            203 =>
                array(
                    'id' => 704,
                    'name' => 'Gojira',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0d97c7c6b90b0e62f4ce9f05144abead/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:44',
                    'updated_at' => '2019-11-20 22:53:44',
                ),
            204 =>
                array(
                    'id' => 705,
                    'name' => 'Sabaton',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9eab9debcd15fe7f361ec88e7d0bec3d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:46',
                    'updated_at' => '2019-11-20 22:53:46',
                ),
            205 =>
                array(
                    'id' => 706,
                    'name' => 'Bad Wolves',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/795c1c6f13ebae0e7fa2ad55ab86017e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:47',
                    'updated_at' => '2019-11-20 22:53:47',
                ),
            206 =>
                array(
                    'id' => 707,
                    'name' => 'Audioslave',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/72d0e1d6d48893b8165757ae803fe310/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:48',
                    'updated_at' => '2019-11-20 22:53:48',
                ),
            207 =>
                array(
                    'id' => 708,
                    'name' => 'Mass Hysteria',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2254e609f068f5f4ea1f790b40a471f3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:49',
                    'updated_at' => '2019-11-20 22:53:49',
                ),
            208 =>
                array(
                    'id' => 709,
                    'name' => 'Amon Amarth',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/98ce61863e6ccd25cf362d716ca7362d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:52',
                    'updated_at' => '2019-11-20 22:53:52',
                ),
            209 =>
                array(
                    'id' => 710,
                    'name' => 'Lofofora',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/312a286ceb611cab3e4bb92a83eb4bc4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:54',
                    'updated_at' => '2019-11-20 22:53:54',
                ),
            210 =>
                array(
                    'id' => 711,
                    'name' => 'Alestorm',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c18b6750b1629d1c53aeb7aa0565dfe4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:56',
                    'updated_at' => '2019-11-20 22:53:56',
                ),
            211 =>
                array(
                    'id' => 712,
                    'name' => 'In Flames',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e7e8d12ffa299ec7adec00106ee306fc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:57',
                    'updated_at' => '2019-11-20 22:53:57',
                ),
            212 =>
                array(
                    'id' => 713,
                    'name' => 'Volbeat',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/20e238e669876cc9a2184677106d29f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:53:58',
                    'updated_at' => '2019-11-20 22:53:58',
                ),
            213 =>
                array(
                    'id' => 714,
                    'name' => 'Eluveitie',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2f3d374f02676395da65f7c379ca6fc6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:00',
                    'updated_at' => '2019-11-20 22:54:00',
                ),
            214 =>
                array(
                    'id' => 715,
                    'name' => 'Megadeth',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6e398c4bd438c7c48e9e0b0f3d89b349/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:01',
                    'updated_at' => '2019-11-20 22:54:01',
                ),
            215 =>
                array(
                    'id' => 716,
                    'name' => 'Judas Priest',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3780a546a18503f1ca1e67358750847e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:02',
                    'updated_at' => '2019-11-20 22:54:02',
                ),
            216 =>
                array(
                    'id' => 717,
                    'name' => 'Slayer',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d68662b5492e8e5a34574b687f8dcec8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:04',
                    'updated_at' => '2019-11-20 22:54:04',
                ),
            217 =>
                array(
                    'id' => 718,
                    'name' => 'Lacuna Coil',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1c66e1480927995789b82341205f1fe2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:05',
                    'updated_at' => '2019-11-20 22:54:05',
                ),
            218 =>
                array(
                    'id' => 719,
                    'name' => 'Arch Enemy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1163a36356a93cf33336bd8afc853e2d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:06',
                    'updated_at' => '2019-11-20 22:54:06',
                ),
            219 =>
                array(
                    'id' => 720,
                    'name' => 'Jinjer',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8932bc10bcf0fdfe4fad178d20a2c6c0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:08',
                    'updated_at' => '2019-11-20 22:54:08',
                ),
            220 =>
                array(
                    'id' => 721,
                    'name' => 'Rise Of The Northstar',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/365143b65f5be4c6a91d1b68a66203be/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:09',
                    'updated_at' => '2019-11-20 22:54:09',
                ),
            221 =>
                array(
                    'id' => 722,
                    'name' => 'Architects',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fc4e3808b010ba18fd8a90fc63e12fbd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:10',
                    'updated_at' => '2019-11-20 22:54:10',
                ),
            222 =>
                array(
                    'id' => 723,
                    'name' => 'DragonForce',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0d9be0faa7789a837b9650d4d3f15d32/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:11',
                    'updated_at' => '2019-11-20 22:54:11',
                ),
            223 =>
                array(
                    'id' => 724,
                    'name' => 'Machine Head',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2ae50a2300a25b00b486d44d83701863/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:12',
                    'updated_at' => '2019-11-20 22:54:12',
                ),
            224 =>
                array(
                    'id' => 725,
                    'name' => 'Lionheart',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:14',
                    'updated_at' => '2019-11-20 22:54:14',
                ),
            225 =>
                array(
                    'id' => 726,
                    'name' => 'In This Moment',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/48db208283a2e1e5c9dec863a44a3043/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:15',
                    'updated_at' => '2019-11-20 22:54:15',
                ),
            226 =>
                array(
                    'id' => 727,
                    'name' => 'Dream Theater',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c7daf68cd427ff2d6317d59d39898cd2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:16',
                    'updated_at' => '2019-11-20 22:54:16',
                ),
            227 =>
                array(
                    'id' => 728,
                    'name' => 'As I Lay Dying',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f8aedcc96a1d6341378970edc00fabe7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:18',
                    'updated_at' => '2019-11-20 22:54:18',
                ),
            228 =>
                array(
                    'id' => 729,
                    'name' => 'Epica',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b92944bef23be350b86315b9dbb4f7cc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:19',
                    'updated_at' => '2019-11-20 22:54:19',
                ),
            229 =>
                array(
                    'id' => 730,
                    'name' => 'Trivium',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/45a3d4384690950e830df0ca42fabc11/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:20',
                    'updated_at' => '2019-11-20 22:54:20',
                ),
            230 =>
                array(
                    'id' => 731,
                    'name' => 'Spoil Engine',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7901aab769d1e75eab2118e0bfa9d053/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:22',
                    'updated_at' => '2019-11-20 22:54:22',
                ),
            231 =>
                array(
                    'id' => 732,
                    'name' => 'Amaranthe',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fc5aed60d32e764b59e933d93c052e6c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:23',
                    'updated_at' => '2019-11-20 22:54:23',
                ),
            232 =>
                array(
                    'id' => 733,
                    'name' => 'Sepultura',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4f49332c592e058764737acba6dd0ee2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:24',
                    'updated_at' => '2019-11-20 22:54:24',
                ),
            233 =>
                array(
                    'id' => 734,
                    'name' => 'The HU',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3e69ce8bb3f32af678380aea8e96311c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:25',
                    'updated_at' => '2019-11-20 22:54:25',
                ),
            234 =>
                array(
                    'id' => 735,
                    'name' => 'Avatar',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6f0907529eaeb00bea25c2927e2bf75c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:26',
                    'updated_at' => '2019-11-20 22:54:26',
                ),
            235 =>
                array(
                    'id' => 736,
                    'name' => 'Motionless In White',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e0608c3aee18b123653fe933352eb411/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:27',
                    'updated_at' => '2019-11-20 22:54:27',
                ),
            236 =>
                array(
                    'id' => 737,
                    'name' => 'Opeth',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/27005e0f8e4a04c9176ab2751bb2fb9f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:28',
                    'updated_at' => '2019-11-20 22:54:28',
                ),
            237 =>
                array(
                    'id' => 738,
                    'name' => 'BABYMETAL',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cc133913369574b4a5506e5d301f2dd7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:30',
                    'updated_at' => '2019-11-20 22:54:30',
                ),
            238 =>
                array(
                    'id' => 739,
                    'name' => 'Breaking Benjamin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3e57563ae989eb8bedbad436866d8f5e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:31',
                    'updated_at' => '2019-11-20 22:54:31',
                ),
            239 =>
                array(
                    'id' => 740,
                    'name' => 'Asking Alexandria',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1f61dd8685f0395f50621605a1937def/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:32',
                    'updated_at' => '2019-11-20 22:54:32',
                ),
            240 =>
                array(
                    'id' => 741,
                    'name' => 'Killswitch Engage',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8800181c3030f494ab13ae43a9699b5f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 16,
                    'created_at' => '2019-11-20 22:54:34',
                    'updated_at' => '2019-11-20 22:54:34',
                ),
            241 =>
                array(
                    'id' => 742,
                    'name' => 'Ray Charles',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0251714bd9f67edd3be675fa869b4e29/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:35',
                    'updated_at' => '2019-11-20 22:54:35',
                ),
            242 =>
                array(
                    'id' => 743,
                    'name' => 'Bee Gees',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7a6b82b36554085e2ee1fd8eea6827f7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:37',
                    'updated_at' => '2019-11-20 22:54:37',
                ),
            243 =>
                array(
                    'id' => 744,
                    'name' => 'Kool & The Gang',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d7a58af84c4cf4567f34df6c1e46c97a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:38',
                    'updated_at' => '2019-11-20 22:54:38',
                ),
            244 =>
                array(
                    'id' => 745,
                    'name' => 'Etta James',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f80ee0f5169c06222e44ed389320f90e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:40',
                    'updated_at' => '2019-11-20 22:54:40',
                ),
            245 =>
                array(
                    'id' => 746,
                    'name' => 'Jackson 5',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2e5ab9758b5e69a147d226d9f1c61108/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:41',
                    'updated_at' => '2019-11-20 22:54:41',
                ),
            246 =>
                array(
                    'id' => 747,
                    'name' => 'Desireless',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/720d016396bafe01771eec5dac44c1cd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:43',
                    'updated_at' => '2019-11-20 22:54:43',
                ),
            247 =>
                array(
                    'id' => 748,
                    'name' => 'Mc Kevinho',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3707a275cb3ba230864f4578349066e5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:54:44',
                    'updated_at' => '2019-11-20 23:01:41',
                ),
            248 =>
                array(
                    'id' => 749,
                    'name' => 'Noah Lunsi',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:45',
                    'updated_at' => '2019-11-20 22:54:45',
                ),
            249 =>
                array(
                    'id' => 750,
                    'name' => 'MC Kekel',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ca913f1b13fca3fa5b7b23e325c51441/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:54:45',
                    'updated_at' => '2019-11-20 23:01:44',
                ),
            250 =>
                array(
                    'id' => 751,
                    'name' => 'Fat Larry\'s Band',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4edbf0121522441ac6561bf0ac77ab1e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:47',
                    'updated_at' => '2019-11-20 22:54:47',
                ),
            251 =>
                array(
                    'id' => 752,
                    'name' => 'Sly & The Family Stone',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/df53523c6ecb87af58b264bced0238ad/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:48',
                    'updated_at' => '2019-11-20 22:54:48',
                ),
            252 =>
                array(
                    'id' => 753,
                    'name' => 'MC Rita',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a44713e0612076fd53c0de7a782c38aa/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:54:49',
                    'updated_at' => '2019-11-20 23:01:54',
                ),
            253 =>
                array(
                    'id' => 754,
                    'name' => 'George Duke',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d9a3dceff1eff4c11025d21f92e038b9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:50',
                    'updated_at' => '2019-11-20 22:54:50',
                ),
            254 =>
                array(
                    'id' => 755,
                    'name' => 'noJazz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:51',
                    'updated_at' => '2019-11-20 22:54:51',
                ),
            255 =>
                array(
                    'id' => 756,
                    'name' => 'MC Gustta',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0d5f814d4b66b6560294e626d1f6d72b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:54:52',
                    'updated_at' => '2019-11-20 23:01:58',
                ),
            256 =>
                array(
                    'id' => 757,
                    'name' => 'Otis Stacks',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3354e10804d7494cab25b15cb417f070/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:53',
                    'updated_at' => '2019-11-20 22:54:53',
                ),
            257 =>
                array(
                    'id' => 758,
                    'name' => 'Mc DG',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/27ee6baf6e424a83f480789c3b8e22b5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:54:54',
                    'updated_at' => '2019-11-20 23:02:00',
                ),
            258 =>
                array(
                    'id' => 759,
                    'name' => 'MC Kevin o Chris',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7fe713a637dfda9e57539e83f8bf0d7c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:54',
                    'updated_at' => '2019-11-20 22:54:54',
                ),
            259 =>
                array(
                    'id' => 760,
                    'name' => 'Malted Milk',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/906c911cabd541e5873f8df8da96fbf5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:56',
                    'updated_at' => '2019-11-20 22:54:56',
                ),
            260 =>
                array(
                    'id' => 761,
                    'name' => 'Bonde R300',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3e6fa43622ed0f9ce28ef76ba13181d4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:57',
                    'updated_at' => '2019-11-20 22:54:57',
                ),
            261 =>
                array(
                    'id' => 762,
                    'name' => 'Solar Project',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/06044c7dd517eb842fe752199669dd39/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:58',
                    'updated_at' => '2019-11-20 22:54:58',
                ),
            262 =>
                array(
                    'id' => 763,
                    'name' => 'Fela Kuti',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d39715c608681d187332f2f35f5db2dd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:54:58',
                    'updated_at' => '2019-11-20 22:54:58',
                ),
            263 =>
                array(
                    'id' => 764,
                    'name' => 'Wild Cherry',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/42ee82d19092aac99bade4e17f97aafb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:00',
                    'updated_at' => '2019-11-20 22:55:00',
                ),
            264 =>
                array(
                    'id' => 765,
                    'name' => 'Dyke & The Blazers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e0214bcd4d7e330bead1cecc87757f0e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:00',
                    'updated_at' => '2019-11-20 22:55:00',
                ),
            265 =>
                array(
                    'id' => 766,
                    'name' => 'MC Dú Black',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/cfcf03188af89eb011f3bbec9023de0b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:55:02',
                    'updated_at' => '2019-11-20 23:02:09',
                ),
            266 =>
                array(
                    'id' => 767,
                    'name' => 'The Sure Fire Soul Ensemble',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:02',
                    'updated_at' => '2019-11-20 22:55:02',
                ),
            267 =>
                array(
                    'id' => 768,
                    'name' => 'MC L da Vinte',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ca8d1e0649ecde5d59df5e02c8a69cbe/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:55:02',
                    'updated_at' => '2019-11-20 23:02:11',
                ),
            268 =>
                array(
                    'id' => 769,
                    'name' => 'MC Gury',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:55:03',
                    'updated_at' => '2019-11-20 23:02:12',
                ),
            269 =>
                array(
                    'id' => 770,
                    'name' => 'DJ 2F',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7f7a8aba4fa59f935818a17580de86ac/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:55:04',
                    'updated_at' => '2019-11-20 23:02:12',
                ),
            270 =>
                array(
                    'id' => 771,
                    'name' => 'Hannah Williams',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:05',
                    'updated_at' => '2019-11-20 22:55:05',
                ),
            271 =>
                array(
                    'id' => 772,
                    'name' => 'Sodré',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:06',
                    'updated_at' => '2019-11-20 22:55:06',
                ),
            272 =>
                array(
                    'id' => 773,
                    'name' => 'Rose Royce',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/217c2434fb7bc8d207b58f1ca69f4d6c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:06',
                    'updated_at' => '2019-11-20 22:55:06',
                ),
            273 =>
                array(
                    'id' => 774,
                    'name' => 'Smoove & Turrell',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6ea8e0a25039519e9f7f83ab605eb30c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:08',
                    'updated_at' => '2019-11-20 22:55:08',
                ),
            274 =>
                array(
                    'id' => 775,
                    'name' => 'Jerry Smith',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e3ecb89a27176d43f0bd1b8f221a9c78/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:55:09',
                    'updated_at' => '2019-11-20 23:02:18',
                ),
            275 =>
                array(
                    'id' => 776,
                    'name' => 'Abraham Inc.',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d5218f0fa833dc5e7f79260fbdf78df8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:10',
                    'updated_at' => '2019-11-20 22:55:10',
                ),
            276 =>
                array(
                    'id' => 777,
                    'name' => 'Darondo',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3b9e24c20755f755eb86ffe0590bdecf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:11',
                    'updated_at' => '2019-11-20 22:55:11',
                ),
            277 =>
                array(
                    'id' => 778,
                    'name' => 'Organiz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:12',
                    'updated_at' => '2019-11-20 22:55:12',
                ),
            278 =>
                array(
                    'id' => 779,
                    'name' => 'Marta Ren',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a9f5d67a643743919c4c1d83d492d1be/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:13',
                    'updated_at' => '2019-11-20 22:55:13',
                ),
            279 =>
                array(
                    'id' => 780,
                    'name' => 'Vaudou Game',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1131a3dc36773c05a6290e9991a8b88a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:13',
                    'updated_at' => '2019-11-20 22:55:13',
                ),
            280 =>
                array(
                    'id' => 781,
                    'name' => 'MC WM',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/34cb0aab34fe0d3fcdfeb32ce7e84117/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:14',
                    'updated_at' => '2019-11-20 22:55:14',
                ),
            281 =>
                array(
                    'id' => 782,
                    'name' => 'Izo FitzRoy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/127d827d389f61b388ea9f00cd6e475f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:16',
                    'updated_at' => '2019-11-20 22:55:16',
                ),
            282 =>
                array(
                    'id' => 783,
                    'name' => 'Dinosaur',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/75e4245a9b9f8f360520f9b42daebc32/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:17',
                    'updated_at' => '2019-11-20 22:55:17',
                ),
            283 =>
                array(
                    'id' => 784,
                    'name' => 'Sabrina Bellaouel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/55f3fe1fc3364cacec55c96a0943f665/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:17',
                    'updated_at' => '2019-11-20 22:55:17',
                ),
            284 =>
                array(
                    'id' => 785,
                    'name' => 'Nego do Borel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/077efa1ab94e38893bc749beb4f86262/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:18',
                    'updated_at' => '2019-11-20 22:55:18',
                ),
            285 =>
                array(
                    'id' => 786,
                    'name' => 'The Buttshakers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d5a3a6beda4ce3096c36c9b5e96ae671/250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:19',
                    'updated_at' => '2019-11-20 22:55:19',
                ),
            286 =>
                array(
                    'id' => 787,
                    'name' => 'Incredible Bongo Band',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:20',
                    'updated_at' => '2019-11-20 22:55:20',
                ),
            287 =>
                array(
                    'id' => 788,
                    'name' => 'The Haggis Horns',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:21',
                    'updated_at' => '2019-11-20 22:55:21',
                ),
            288 =>
                array(
                    'id' => 789,
                    'name' => 'POCAH',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5a3717304644d921332f276c8df73b37/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 22:55:22',
                    'updated_at' => '2019-11-20 23:02:48',
                ),
            289 =>
                array(
                    'id' => 790,
                    'name' => 'Geraldine Hunt',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 17,
                    'created_at' => '2019-11-20 22:55:23',
                    'updated_at' => '2019-11-20 22:55:23',
                ),
            290 =>
                array(
                    'id' => 791,
                    'name' => 'Joe Bonamassa',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9d850c3a35757f76fcc0b470752bf7ea/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:24',
                    'updated_at' => '2019-11-20 22:55:24',
                ),
            291 =>
                array(
                    'id' => 792,
                    'name' => 'Beth Hart',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9a567d133186ba1d6330002d529ed481/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:25',
                    'updated_at' => '2019-11-20 22:55:25',
                ),
            292 =>
                array(
                    'id' => 793,
                    'name' => 'John Lee Hooker',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5f1f55992cbe2006ed2f8168b9c17dc3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:27',
                    'updated_at' => '2019-11-20 22:55:27',
                ),
            293 =>
                array(
                    'id' => 794,
                    'name' => 'Muddy Waters',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a7cb4923a787af1ab1d04150643cec3f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:28',
                    'updated_at' => '2019-11-20 22:55:28',
                ),
            294 =>
                array(
                    'id' => 795,
                    'name' => 'Baptiste Trotignon',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9a313715a212ca0479aeece296687c0f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:30',
                    'updated_at' => '2019-11-20 22:55:30',
                ),
            295 =>
                array(
                    'id' => 796,
                    'name' => 'B.B. King',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/94b01776036dd664141ba772e241b137/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:31',
                    'updated_at' => '2019-11-20 22:55:31',
                ),
            296 =>
                array(
                    'id' => 797,
                    'name' => 'Popa Chubby',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/29e7d636e18cd9c883816360ca8bb8a5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:33',
                    'updated_at' => '2019-11-20 22:55:33',
                ),
            297 =>
                array(
                    'id' => 798,
                    'name' => 'Lucky Peterson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6e5292514358efa49aa090f9bfc71e01/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:34',
                    'updated_at' => '2019-11-20 22:55:34',
                ),
            298 =>
                array(
                    'id' => 799,
                    'name' => 'Buddy Guy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7eb093e30b60e432feb24aab3768bf9e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:35',
                    'updated_at' => '2019-11-20 22:55:35',
                ),
            299 =>
                array(
                    'id' => 800,
                    'name' => 'Eric Bibb',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/82c3698ca6cba71afb70aa60a8e582ba/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:37',
                    'updated_at' => '2019-11-20 22:55:37',
                ),
            300 =>
                array(
                    'id' => 801,
                    'name' => 'Seasick Steve',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/72cf91cb274bbd91f3b27145ba0778d1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:38',
                    'updated_at' => '2019-11-20 22:55:38',
                ),
            301 =>
                array(
                    'id' => 802,
                    'name' => 'Charlie Musselwhite',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/95f33f2c31f5646bcd73ea75fc422933/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:40',
                    'updated_at' => '2019-11-20 22:55:40',
                ),
            302 =>
                array(
                    'id' => 803,
                    'name' => 'Keb\' Mo\'',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d3d63c372976a1585b39fa71be6245f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:41',
                    'updated_at' => '2019-11-20 22:55:41',
                ),
            303 =>
                array(
                    'id' => 804,
                    'name' => 'Brittany Howard',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bafcc949c4c09897ee2c13b1c716645b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:43',
                    'updated_at' => '2019-11-20 22:55:43',
                ),
            304 =>
                array(
                    'id' => 805,
                    'name' => 'Otis Taylor',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7614e288211ec4f71413ce3cb4ae661f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:43',
                    'updated_at' => '2019-11-20 22:55:43',
                ),
            305 =>
                array(
                    'id' => 806,
                    'name' => 'Walter Trout',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/326766d8355e34c87f993c48ef69bfbb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:45',
                    'updated_at' => '2019-11-20 22:55:45',
                ),
            306 =>
                array(
                    'id' => 807,
                    'name' => 'Sarah McCoy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:46',
                    'updated_at' => '2019-11-20 22:55:46',
                ),
            307 =>
                array(
                    'id' => 808,
                    'name' => 'Gary Hoey',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/add1fffdaa82a548aecaaccb50883691/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:47',
                    'updated_at' => '2019-11-20 22:55:47',
                ),
            308 =>
                array(
                    'id' => 809,
                    'name' => 'Jessie Mae Hemphill',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:48',
                    'updated_at' => '2019-11-20 22:55:48',
                ),
            309 =>
                array(
                    'id' => 810,
                    'name' => 'Colin James',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e9fdcd4a5cdc1017df540bcdb65e70d1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:50',
                    'updated_at' => '2019-11-20 22:55:50',
                ),
            310 =>
                array(
                    'id' => 811,
                    'name' => 'The Temperance Movement',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/780ffee53a08b504878b53111658a252/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:51',
                    'updated_at' => '2019-11-20 22:55:51',
                ),
            311 =>
                array(
                    'id' => 812,
                    'name' => 'Albert King',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7503b4ba64f13471ed9ecad34da0b6ba/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:52',
                    'updated_at' => '2019-11-20 22:55:52',
                ),
            312 =>
                array(
                    'id' => 813,
                    'name' => 'Samantha Fish',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e68d17bcd8a2ef544f19470d33340c12/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:54',
                    'updated_at' => '2019-11-20 22:55:54',
                ),
            313 =>
                array(
                    'id' => 814,
                    'name' => 'Philip Sayce',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3df843d570be1b55ad07134c80b0d97f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:55',
                    'updated_at' => '2019-11-20 22:55:55',
                ),
            314 =>
                array(
                    'id' => 815,
                    'name' => 'Kenny Wayne Shepherd',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:57',
                    'updated_at' => '2019-11-20 22:55:57',
                ),
            315 =>
                array(
                    'id' => 816,
                    'name' => 'Jean-Jacques Milteau',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/85e5493e26ab75b07a059c87ff49c359/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:55:58',
                    'updated_at' => '2019-11-20 22:55:58',
                ),
            316 =>
                array(
                    'id' => 817,
                    'name' => 'Sugaray Rayford',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2fe3236c9b2e9bc4e6ac0ab62c9e1d5d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:00',
                    'updated_at' => '2019-11-20 22:56:00',
                ),
            317 =>
                array(
                    'id' => 818,
                    'name' => 'Robert Johnson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cfbcad05213f479eee12d62bf29433d9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:01',
                    'updated_at' => '2019-11-20 22:56:01',
                ),
            318 =>
                array(
                    'id' => 819,
                    'name' => 'John Mayall & The Bluesbreakers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9ab57fd61b6997c72d3e336cabd541d7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:02',
                    'updated_at' => '2019-11-20 22:56:02',
                ),
            319 =>
                array(
                    'id' => 820,
                    'name' => 'Otis Rush',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8f2718422a0ae34797c061110b7c11fd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:04',
                    'updated_at' => '2019-11-20 22:56:04',
                ),
            320 =>
                array(
                    'id' => 821,
                    'name' => 'Jake Xerxes Fussell',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/92b2a72e1499f5123c931906cc0257e9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:05',
                    'updated_at' => '2019-11-20 22:56:05',
                ),
            321 =>
                array(
                    'id' => 822,
                    'name' => 'Blues Saraceno',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:06',
                    'updated_at' => '2019-11-20 22:56:06',
                ),
            322 =>
                array(
                    'id' => 823,
                    'name' => 'Joanne Shaw Taylor',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e1288965cd8aefcbd5a6755d5f98c482/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:08',
                    'updated_at' => '2019-11-20 22:56:08',
                ),
            323 =>
                array(
                    'id' => 824,
                    'name' => 'Will Barber',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:09',
                    'updated_at' => '2019-11-20 22:56:09',
                ),
            324 =>
                array(
                    'id' => 825,
                    'name' => 'Ronnie Earl',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:09',
                    'updated_at' => '2019-11-20 22:56:09',
                ),
            325 =>
                array(
                    'id' => 826,
                    'name' => 'Albert Castiglia',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:11',
                    'updated_at' => '2019-11-20 22:56:11',
                ),
            326 =>
                array(
                    'id' => 827,
                    'name' => 'Otis Spann',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1f862aef0c93431712e62a8e8ed63f0b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:12',
                    'updated_at' => '2019-11-20 22:56:12',
                ),
            327 =>
                array(
                    'id' => 828,
                    'name' => 'Cedric Burnside',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6d2e8c1991f5a6a82d3dd5b03faf9821/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:14',
                    'updated_at' => '2019-11-20 22:56:14',
                ),
            328 =>
                array(
                    'id' => 829,
                    'name' => 'Ana Popovic',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9d8f1f52b9fd948f8ce76e34d0a18453/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:15',
                    'updated_at' => '2019-11-20 22:56:15',
                ),
            329 =>
                array(
                    'id' => 830,
                    'name' => 'GA-20',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:16',
                    'updated_at' => '2019-11-20 22:56:16',
                ),
            330 =>
                array(
                    'id' => 831,
                    'name' => 'Bob Margolin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f27e65b6d60fa430249bd8ac500055de/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:16',
                    'updated_at' => '2019-11-20 22:56:16',
                ),
            331 =>
                array(
                    'id' => 832,
                    'name' => 'Dirty Deep',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2741e83873892b99685defca710cce91/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:18',
                    'updated_at' => '2019-11-20 22:56:18',
                ),
            332 =>
                array(
                    'id' => 833,
                    'name' => 'R.L. Burnside',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2f757a6c926bf2e4fbb566b2fa016137/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:19',
                    'updated_at' => '2019-11-20 22:56:19',
                ),
            333 =>
                array(
                    'id' => 834,
                    'name' => 'Bror Gunnar Jansson',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/921761a9f389e0fbd4edbd937f8a10ff/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:21',
                    'updated_at' => '2019-11-20 22:56:21',
                ),
            334 =>
                array(
                    'id' => 835,
                    'name' => 'B.B.King',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:22',
                    'updated_at' => '2019-11-20 22:56:22',
                ),
            335 =>
                array(
                    'id' => 836,
                    'name' => 'Harrison Kennedy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/308f1c1b86de6cbd8c88a8985ffbb73b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:23',
                    'updated_at' => '2019-11-20 22:56:23',
                ),
            336 =>
                array(
                    'id' => 837,
                    'name' => 'Little Walter',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1571fcd40daef5440cbf08fa756bd5e4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:25',
                    'updated_at' => '2019-11-20 22:56:25',
                ),
            337 =>
                array(
                    'id' => 838,
                    'name' => 'North Mississippi Allstars',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/412f4139b15af926282bbf08894bd2b6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:26',
                    'updated_at' => '2019-11-20 22:56:26',
                ),
            338 =>
                array(
                    'id' => 839,
                    'name' => 'Bob Corritore',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 18,
                    'created_at' => '2019-11-20 22:56:28',
                    'updated_at' => '2019-11-20 22:56:28',
                ),
            339 =>
                array(
                    'id' => 840,
                    'name' => 'Maître Gims',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/398b86c742e2cb00b03cec86440ce42c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:29',
                    'updated_at' => '2019-11-20 22:56:29',
                ),
            340 =>
                array(
                    'id' => 841,
                    'name' => 'Aldebert',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a161515b944b1e9c6a2bb35a67167edd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:32',
                    'updated_at' => '2019-11-20 22:56:32',
                ),
            341 =>
                array(
                    'id' => 842,
                    'name' => 'Indila',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d24d498af970c6feda6c2069cfdff56b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:33',
                    'updated_at' => '2019-11-20 22:56:33',
                ),
            342 =>
                array(
                    'id' => 843,
                    'name' => 'La Superstar Des Comptines Rondes Et Berceuses',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9c94337f8cc046fd209dccc9f7ae2139/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:34',
                    'updated_at' => '2019-11-20 22:56:34',
                ),
            343 =>
                array(
                    'id' => 844,
                    'name' => 'Glee Cast',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/851f68783b9c1d8edf1c20a729b20df5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:35',
                    'updated_at' => '2019-11-20 22:56:35',
                ),
            344 =>
                array(
                    'id' => 845,
                    'name' => 'Kids United',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/58e8fb2e765aa91619b8809d2f18a3ae/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:37',
                    'updated_at' => '2019-11-20 22:56:37',
                ),
            345 =>
                array(
                    'id' => 846,
                    'name' => 'Erza Muqoli',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4efd02f5e5d2d3b82e58039bff2127cb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:38',
                    'updated_at' => '2019-11-20 22:56:38',
                ),
            346 =>
                array(
                    'id' => 847,
                    'name' => 'One Direction',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6760dba71ba14145eec5478d8b135c55/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:39',
                    'updated_at' => '2019-11-20 22:56:39',
                ),
            347 =>
                array(
                    'id' => 848,
                    'name' => 'Henri Dès',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5dea672d6a666b1547050cde32b2032d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:40',
                    'updated_at' => '2019-11-20 22:56:40',
                ),
            348 =>
                array(
                    'id' => 849,
                    'name' => 'TAL',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bf79485167aa163a98bbddfc6acb1e79/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:42',
                    'updated_at' => '2019-11-20 22:56:42',
                ),
            349 =>
                array(
                    'id' => 850,
                    'name' => 'Kids United Nouvelle Génération',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ce7d2db3ae80000ea51023bac04adc31/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:43',
                    'updated_at' => '2019-11-20 22:56:43',
                ),
            350 =>
                array(
                    'id' => 851,
                    'name' => 'Lenni-Kim',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/691bde538695ed4f29b52c1b53a698a4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:44',
                    'updated_at' => '2019-11-20 22:56:44',
                ),
            351 =>
                array(
                    'id' => 852,
                    'name' => 'Anais Delva',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5269b0efbddff41e23cf840f023c291c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:45',
                    'updated_at' => '2019-11-20 22:56:45',
                ),
            352 =>
                array(
                    'id' => 853,
                    'name' => 'La fée des berceuses',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:47',
                    'updated_at' => '2019-11-20 22:56:47',
                ),
            353 =>
                array(
                    'id' => 854,
                    'name' => 'TINI',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/da0e05b65c037565db1197d95abc8d0a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:48',
                    'updated_at' => '2019-11-20 22:56:48',
                ),
            354 =>
                array(
                    'id' => 855,
                    'name' => 'Sabrina Carpenter',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7d026f08b34a098e270a663839d8ae8e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:49',
                    'updated_at' => '2019-11-20 22:56:49',
                ),
            355 =>
                array(
                    'id' => 856,
                    'name' => 'Rémi Guichard',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c5fe17bf08fdcb287f69d2aef2e0438f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:51',
                    'updated_at' => '2019-11-20 22:56:51',
                ),
            356 =>
                array(
                    'id' => 857,
                    'name' => 'Chantal Goya',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8c2f2b2acf7a1e9f42fb3854634636e7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:52',
                    'updated_at' => '2019-11-20 22:56:52',
                ),
            357 =>
                array(
                    'id' => 858,
                    'name' => 'Anne Sylvestre',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dd33566d4a758cae323bb4f556bce678/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:53',
                    'updated_at' => '2019-11-20 22:56:53',
                ),
            358 =>
                array(
                    'id' => 859,
                    'name' => 'The Kiboomers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/64cb7a72dad4d336bfcaf52b20ee09aa/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:55',
                    'updated_at' => '2019-11-20 22:56:55',
                ),
            359 =>
                array(
                    'id' => 860,
                    'name' => 'Angelina',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e89e6652494558742ac3d054105d72cb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:56',
                    'updated_at' => '2019-11-20 22:56:56',
                ),
            360 =>
                array(
                    'id' => 861,
                    'name' => 'Petit Ours Brun',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/31ec5783a77ba23a78ed9f5eefd8064d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:57',
                    'updated_at' => '2019-11-20 22:56:57',
                ),
            361 =>
                array(
                    'id' => 862,
                    'name' => 'Comptines TV',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f11acf71aa5347fe11798292188f89f1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:56:58',
                    'updated_at' => '2019-11-20 22:56:58',
                ),
            362 =>
                array(
                    'id' => 863,
                    'name' => 'Le Choeur des Enfants',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/111e778cde04b5127adf5a540854d136/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:00',
                    'updated_at' => '2019-11-20 22:57:00',
                ),
            363 =>
                array(
                    'id' => 864,
                    'name' => 'Clipounets & Les Petits Minous',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f1c82bba750f4ac3622bae2892e044d2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:01',
                    'updated_at' => '2019-11-20 22:57:01',
                ),
            364 =>
                array(
                    'id' => 865,
                    'name' => 'Vanessa Hudgens',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/85fd99aa9485b5dcc82a13f145209b61/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:03',
                    'updated_at' => '2019-11-20 22:57:03',
                ),
            365 =>
                array(
                    'id' => 866,
                    'name' => 'Crazy Frog',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/68f1b025d3f2f412e09d3a3a27f904db/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:04',
                    'updated_at' => '2019-11-20 22:57:04',
                ),
            366 =>
                array(
                    'id' => 867,
                    'name' => 'Hélène Bohy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0b5155243f222c4b8bb53e15fc74237f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:05',
                    'updated_at' => '2019-11-20 22:57:05',
                ),
            367 =>
                array(
                    'id' => 868,
                    'name' => 'Chansons et comptines',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/720f603d122fdb5604e853e67ec83263/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:07',
                    'updated_at' => '2019-11-20 22:57:07',
                ),
            368 =>
                array(
                    'id' => 869,
                    'name' => 'Jean-Marc Versini',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:08',
                    'updated_at' => '2019-11-20 22:57:08',
                ),
            369 =>
                array(
                    'id' => 870,
                    'name' => 'Anny versini',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0ac23106ec76ce4ceaf8315c3938e49a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:10',
                    'updated_at' => '2019-11-20 22:57:10',
                ),
            370 =>
                array(
                    'id' => 871,
                    'name' => 'Dorothée',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4280d3fee65fe26b85d50bc0a8deb535/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:11',
                    'updated_at' => '2019-11-20 22:57:11',
                ),
            371 =>
                array(
                    'id' => 872,
                    'name' => 'Camille Berthollet',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1b583783cf22fb7c113c6ab39ff99011/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:13',
                    'updated_at' => '2019-11-20 22:57:13',
                ),
            372 =>
                array(
                    'id' => 873,
                    'name' => 'Ross Lynch',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f3fb8543a0cc5b726d0f2f3db37925ae/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:15',
                    'updated_at' => '2019-11-20 22:57:15',
                ),
            373 =>
                array(
                    'id' => 874,
                    'name' => 'Evan & Marco',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f31661dc25f41adfadd360b4a0556903/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:16',
                    'updated_at' => '2019-11-20 22:57:16',
                ),
            374 =>
                array(
                    'id' => 875,
                    'name' => 'Zut',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ea7b82c789d1173aa81359db18b00d1f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:16',
                    'updated_at' => '2019-11-20 22:57:16',
                ),
            375 =>
                array(
                    'id' => 876,
                    'name' => 'Rockabye Baby!',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8d861a6c7fd9deb1d86df877962045f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:18',
                    'updated_at' => '2019-11-20 22:57:18',
                ),
            376 =>
                array(
                    'id' => 877,
                    'name' => 'Gérard Dalton',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:19',
                    'updated_at' => '2019-11-20 22:57:19',
                ),
            377 =>
                array(
                    'id' => 878,
                    'name' => 'Catherine Vaniscotte',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/037bafc4ad181b27764f9a861184b87e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:21',
                    'updated_at' => '2019-11-20 22:57:21',
                ),
            378 =>
                array(
                    'id' => 879,
                    'name' => 'Nicola Cruz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1042ef5b5506870a7f8f95ffcac96871/250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:22',
                    'updated_at' => '2019-11-20 22:57:22',
                ),
            379 =>
                array(
                    'id' => 880,
                    'name' => 'Francine Chantereau',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 19,
                    'created_at' => '2019-11-20 22:57:24',
                    'updated_at' => '2019-11-20 22:57:24',
                ),
            380 =>
                array(
                    'id' => 881,
                    'name' => 'Daddy Yankee',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5f45206580cde1388f71ccc7f8226768/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:25',
                    'updated_at' => '2019-11-20 22:57:25',
                ),
            381 =>
                array(
                    'id' => 882,
                    'name' => 'Ozuna',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cf3da1370e11d3aee0dacd1dce77be83/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:27',
                    'updated_at' => '2019-11-20 22:57:27',
                ),
            382 =>
                array(
                    'id' => 883,
                    'name' => 'Bad Bunny',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e8d37bdf545b869db5dcb9b6b06e71c0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:29',
                    'updated_at' => '2019-11-20 22:57:29',
                ),
            383 =>
                array(
                    'id' => 884,
                    'name' => 'Anuel Aa',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a4db24d5560a376c057851c701c428cc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:30',
                    'updated_at' => '2019-11-20 22:57:30',
                ),
            384 =>
                array(
                    'id' => 885,
                    'name' => 'Karol G',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0714429ec5b2aae1a324ba4041c0c362/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:32',
                    'updated_at' => '2019-11-20 22:57:32',
                ),
            385 =>
                array(
                    'id' => 886,
                    'name' => 'Luis Fonsi',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/21c903882e293460b4e096dbac44d17b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:33',
                    'updated_at' => '2019-11-20 22:57:33',
                ),
            386 =>
                array(
                    'id' => 887,
                    'name' => 'Tainy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/730dff90e0287116e53d0bf8b1b7e9dc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:36',
                    'updated_at' => '2019-11-20 22:57:36',
                ),
            387 =>
                array(
                    'id' => 888,
                    'name' => 'Sech',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8d78c9a043c0e29312288c6f5be9ff30/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:36',
                    'updated_at' => '2019-11-20 22:57:36',
                ),
            388 =>
                array(
                    'id' => 889,
                    'name' => 'Romeo Santos',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/27c204497e5c7e95fcf6e83c11e741a7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:38',
                    'updated_at' => '2019-11-20 22:57:38',
                ),
            389 =>
                array(
                    'id' => 890,
                    'name' => 'Enrique Iglesias',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7c0f867fb50b6c9302f991521e42e764/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:39',
                    'updated_at' => '2019-11-20 22:57:39',
                ),
            390 =>
                array(
                    'id' => 891,
                    'name' => 'Prince Royce',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4f707fc304ea944de014bfbc599b1da4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:41',
                    'updated_at' => '2019-11-20 22:57:41',
                ),
            391 =>
                array(
                    'id' => 892,
                    'name' => 'Willy William',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dfa89b69b401d69f6a7e75b178f37e0a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:42',
                    'updated_at' => '2019-11-20 22:57:42',
                ),
            392 =>
                array(
                    'id' => 893,
                    'name' => 'Sebastian Yatra',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e46c5bee56d1ca6fed8242f7a691adb5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:44',
                    'updated_at' => '2019-11-20 22:57:44',
                ),
            393 =>
                array(
                    'id' => 894,
                    'name' => 'Don Omar',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4d2af23e0848267cba9392a69061dbbe/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:45',
                    'updated_at' => '2019-11-20 22:57:45',
                ),
            394 =>
                array(
                    'id' => 895,
                    'name' => 'Nio Garcia',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bc4eefd050805654363bff121624333f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:47',
                    'updated_at' => '2019-11-20 22:57:47',
                ),
            395 =>
                array(
                    'id' => 896,
                    'name' => 'Casper Magico',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7e7f456751cdb214350ba6c1ff551725/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:49',
                    'updated_at' => '2019-11-20 22:57:49',
                ),
            396 =>
                array(
                    'id' => 897,
                    'name' => 'Zion & Lennox',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/28399215819c35b9552437071668a404/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:50',
                    'updated_at' => '2019-11-20 22:57:50',
                ),
            397 =>
                array(
                    'id' => 898,
                    'name' => 'Buena Vista Social Club',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1f40462e4b7cf34267fdae760a8d7299/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:52',
                    'updated_at' => '2019-11-20 22:57:52',
                ),
            398 =>
                array(
                    'id' => 899,
                    'name' => 'Aventura',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8d7b77db2a5e318b72ebff508d962d72/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:53',
                    'updated_at' => '2019-11-20 22:57:53',
                ),
            399 =>
                array(
                    'id' => 900,
                    'name' => 'Myke Towers',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5c9f84d97a49eab40cc32e2a8e1e1c11/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:55',
                    'updated_at' => '2019-11-20 22:57:55',
                ),
            400 =>
                array(
                    'id' => 901,
                    'name' => 'Jhay Cortez',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d72e524e223ecc9025b0776a8a1f6075/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:56',
                    'updated_at' => '2019-11-20 22:57:56',
                ),
            401 =>
                array(
                    'id' => 902,
                    'name' => 'Dj Luian',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6245e4bcd9eeef65cb120c52694aadf7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:57',
                    'updated_at' => '2019-11-20 22:57:57',
                ),
            402 =>
                array(
                    'id' => 903,
                    'name' => 'Mambo Kingz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/3fef1c768506754f698acdbf9bff9c2d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:58',
                    'updated_at' => '2019-11-20 22:57:58',
                ),
            403 =>
                array(
                    'id' => 904,
                    'name' => 'Yandel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1d6fdd7f4dfd5ca9fdf057f86bd9ef08/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:57:59',
                    'updated_at' => '2019-11-20 22:57:59',
                ),
            404 =>
                array(
                    'id' => 905,
                    'name' => 'Dalex',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/70b25d8f329ff9373f8913c9b1cdccba/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:01',
                    'updated_at' => '2019-11-20 22:58:01',
                ),
            405 =>
                array(
                    'id' => 906,
                    'name' => 'Alvaro Soler',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/4dfbdc80162baa7bf81fb780dde815a0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:02',
                    'updated_at' => '2019-11-20 22:58:02',
                ),
            406 =>
                array(
                    'id' => 907,
                    'name' => 'Paulo Londra',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/05d951d629e7a69c7cca505d1326b1cd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:04',
                    'updated_at' => '2019-11-20 22:58:04',
                ),
            407 =>
                array(
                    'id' => 908,
                    'name' => 'Juanes',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7c75d3670446643239acd152184a5598/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:05',
                    'updated_at' => '2019-11-20 22:58:05',
                ),
            408 =>
                array(
                    'id' => 909,
                    'name' => 'Rauw Alejandro',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/00bd2ff2a0180daa211a89cf5434537a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:07',
                    'updated_at' => '2019-11-20 22:58:07',
                ),
            409 =>
                array(
                    'id' => 910,
                    'name' => 'Wisin & Yandel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/d98f41f73bc2546295dc71af8fb4b73e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:09',
                    'updated_at' => '2019-11-20 22:58:09',
                ),
            410 =>
                array(
                    'id' => 911,
                    'name' => 'Gente De Zona',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/89fbc37e93bd6c21f41a41d59db16235/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:10',
                    'updated_at' => '2019-11-20 22:58:10',
                ),
            411 =>
                array(
                    'id' => 912,
                    'name' => 'Brytiago',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/806e390a706f1c9bfa1807619365d145/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:12',
                    'updated_at' => '2019-11-20 22:58:12',
                ),
            412 =>
                array(
                    'id' => 913,
                    'name' => 'Marc Anthony',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6dd01487590f15bc1e62dcb2c46627b7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:13',
                    'updated_at' => '2019-11-20 22:58:13',
                ),
            413 =>
                array(
                    'id' => 914,
                    'name' => 'El Alfa',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2353ec8d751c840238b1f9f8f1618480/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:15',
                    'updated_at' => '2019-11-20 22:58:15',
                ),
            414 =>
                array(
                    'id' => 915,
                    'name' => 'Justin Quiles',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a49eb608d092ee595433d29f57940266/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:16',
                    'updated_at' => '2019-11-20 22:58:16',
                ),
            415 =>
                array(
                    'id' => 916,
                    'name' => 'Arcangel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/829884e154c3c7f8054067193d188413/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:18',
                    'updated_at' => '2019-11-20 22:58:18',
                ),
            416 =>
                array(
                    'id' => 917,
                    'name' => 'Compay Segundo',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2d8ec4f553c2c567a7e16ced0efdaa72/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:19',
                    'updated_at' => '2019-11-20 22:58:19',
                ),
            417 =>
                array(
                    'id' => 918,
                    'name' => 'Carlos Vives',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/281c7f9ed571d5df9c338b8e7eeeba68/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:21',
                    'updated_at' => '2019-11-20 22:58:21',
                ),
            418 =>
                array(
                    'id' => 919,
                    'name' => 'Guaynaa',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/576e72844773396ec6f4acb6f364811a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:22',
                    'updated_at' => '2019-11-20 22:58:22',
                ),
            419 =>
                array(
                    'id' => 920,
                    'name' => 'Jowell & Randy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9f5ea3cedfa2c8e9b7a35bf366b117dd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:23',
                    'updated_at' => '2019-11-20 22:58:23',
                ),
            420 =>
                array(
                    'id' => 921,
                    'name' => 'Darell',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/57096c5511bb9bfe21ea46f9b4c93943/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:25',
                    'updated_at' => '2019-11-20 22:58:25',
                ),
            421 =>
                array(
                    'id' => 922,
                    'name' => 'Chris Jeday',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/182772dd9d64d4dc79d51806f3c2756d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:26',
                    'updated_at' => '2019-11-20 22:58:26',
                ),
            422 =>
                array(
                    'id' => 923,
                    'name' => 'Greeicy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5447fb14ef12c7faef6a911d36c18060/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:27',
                    'updated_at' => '2019-11-20 22:58:27',
                ),
            423 =>
                array(
                    'id' => 924,
                    'name' => 'Lele Pons',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/deb97b75c1b79eeaa492be73ff3ddf2b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:28',
                    'updated_at' => '2019-11-20 22:58:28',
                ),
            424 =>
                array(
                    'id' => 925,
                    'name' => 'Grupo Extra',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:28',
                    'updated_at' => '2019-11-20 22:58:28',
                ),
            425 =>
                array(
                    'id' => 926,
                    'name' => 'Feid',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a37d75aa98b04da700412398a988c31a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:29',
                    'updated_at' => '2019-11-20 22:58:29',
                ),
            426 =>
                array(
                    'id' => 927,
                    'name' => 'Joey Montana',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ae4b548a34221de2487a193ea86c1457/250x250-000000-80-0-0.jpg',
                    'genre_id' => 20,
                    'created_at' => '2019-11-20 22:58:31',
                    'updated_at' => '2019-11-20 22:58:31',
                ),
            427 =>
                array(
                    'id' => 928,
                    'name' => 'Koffi Olomidé',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/990c9a9bc1cf5ac887c71447a765bf37/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:33',
                    'updated_at' => '2019-11-20 22:58:33',
                ),
            428 =>
                array(
                    'id' => 929,
                    'name' => 'Cesária Évora',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5a8f80c7177e088a97a99ab117c51fd6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:34',
                    'updated_at' => '2019-11-20 22:58:34',
                ),
            429 =>
                array(
                    'id' => 930,
                    'name' => 'Magic System',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/de7ce17218a913079da4d45d53ada004/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:36',
                    'updated_at' => '2019-11-20 22:58:36',
                ),
            430 =>
                array(
                    'id' => 931,
                    'name' => 'MIKL',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:37',
                    'updated_at' => '2019-11-20 22:58:37',
                ),
            431 =>
                array(
                    'id' => 932,
                    'name' => 'Serge Beynaud',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ecd3fe67024e322c450a1c5958cb6013/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:38',
                    'updated_at' => '2019-11-20 22:58:38',
                ),
            432 =>
                array(
                    'id' => 933,
                    'name' => 'Badoxa',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a842dda3b362e5fdc866a5b26aa92b6f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:40',
                    'updated_at' => '2019-11-20 22:58:40',
                ),
            433 =>
                array(
                    'id' => 934,
                    'name' => 'Kizz Daniel',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5ec22ac49b1648558dd41d94f00dd5cf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:41',
                    'updated_at' => '2019-11-20 22:58:41',
                ),
            434 =>
                array(
                    'id' => 935,
                    'name' => 'Bonga',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ec0c0f2741cbb9c45d0b42426db4d8cb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:42',
                    'updated_at' => '2019-11-20 22:58:42',
                ),
            435 =>
                array(
                    'id' => 936,
                    'name' => 'Naira Marley',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a7446a33ff7f8b6ac22b0496c76ff45b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:44',
                    'updated_at' => '2019-11-20 22:58:44',
                ),
            436 =>
                array(
                    'id' => 937,
                    'name' => 'ferre Gola',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/162226be5d4430a53a5cd4b3e9c433a2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:44',
                    'updated_at' => '2019-11-20 22:58:44',
                ),
            437 =>
                array(
                    'id' => 938,
                    'name' => 'PLL',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:46',
                    'updated_at' => '2019-11-20 22:58:46',
                ),
            438 =>
                array(
                    'id' => 939,
                    'name' => 'Fireboy Dml',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:46',
                    'updated_at' => '2019-11-20 22:58:46',
                ),
            439 =>
                array(
                    'id' => 940,
                    'name' => 'Robinio Mundibu',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e4f46d402d47a164da2a8be97d2039b3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:47',
                    'updated_at' => '2019-11-20 22:58:47',
                ),
            440 =>
                array(
                    'id' => 941,
                    'name' => 'Wally B. Seck',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0aac810e34e2a68352e75f4a044cde9f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:47',
                    'updated_at' => '2019-11-20 22:58:47',
                ),
            441 =>
                array(
                    'id' => 942,
                    'name' => 'DJ KEROZEN',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:48',
                    'updated_at' => '2019-11-20 22:58:48',
                ),
            442 =>
                array(
                    'id' => 943,
                    'name' => 'Papa Wemba',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dd9ecee59695f3fce34074aa5b174d0b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:49',
                    'updated_at' => '2019-11-20 22:58:49',
                ),
            443 =>
                array(
                    'id' => 944,
                    'name' => 'Yasmine',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:50',
                    'updated_at' => '2019-11-20 22:58:50',
                ),
            444 =>
                array(
                    'id' => 945,
                    'name' => 'Harmonik',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:52',
                    'updated_at' => '2019-11-20 22:58:52',
                ),
            445 =>
                array(
                    'id' => 946,
                    'name' => 'Toofan',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/60e7c9d880ed722a3ac6d0f8f25f944d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:53',
                    'updated_at' => '2019-11-20 22:58:53',
                ),
            446 =>
                array(
                    'id' => 947,
                    'name' => 'Barth',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dfa4850e90e393e7e659e492a6e27503/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:55',
                    'updated_at' => '2019-11-20 22:58:55',
                ),
            447 =>
                array(
                    'id' => 948,
                    'name' => 'Djodje',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:55',
                    'updated_at' => '2019-11-20 22:58:55',
                ),
            448 =>
                array(
                    'id' => 949,
                    'name' => 'Deejay Telio',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/37bcd9cac910093290fad185ded21b97/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:57',
                    'updated_at' => '2019-11-20 22:58:57',
                ),
            449 =>
                array(
                    'id' => 950,
                    'name' => 'Simi',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/622ccf087ac49d1f6e68e8d5a9e1c014/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:58:58',
                    'updated_at' => '2019-11-20 22:58:58',
                ),
            450 =>
                array(
                    'id' => 951,
                    'name' => 'JB Mpiana',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:00',
                    'updated_at' => '2019-11-20 22:59:00',
                ),
            451 =>
                array(
                    'id' => 952,
                    'name' => 'Werrason',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/676d68a5472f60f974e27f3e456db040/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:01',
                    'updated_at' => '2019-11-20 22:59:01',
                ),
            452 =>
                array(
                    'id' => 953,
                    'name' => 'Ndlovu Youth Choir',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:03',
                    'updated_at' => '2019-11-20 22:59:03',
                ),
            453 =>
                array(
                    'id' => 954,
                    'name' => 'Ariel Sheney',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cb321434d8b02c731568880918377fa5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:03',
                    'updated_at' => '2019-11-20 22:59:03',
                ),
            454 =>
                array(
                    'id' => 955,
                    'name' => 'Sékouba Bambino',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ea1d3ad71768f82fed2a1f5d86749baf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:04',
                    'updated_at' => '2019-11-20 22:59:04',
                ),
            455 =>
                array(
                    'id' => 956,
                    'name' => 'Wizboyy Ofuasia',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:06',
                    'updated_at' => '2019-11-20 22:59:06',
                ),
            456 =>
                array(
                    'id' => 957,
                    'name' => 'Deejay Telio & Deedz B',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:07',
                    'updated_at' => '2019-11-20 22:59:07',
                ),
            457 =>
                array(
                    'id' => 958,
                    'name' => 'Josey',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2802ff732220951533c6f78b9999404d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:07',
                    'updated_at' => '2019-11-20 22:59:07',
                ),
            458 =>
                array(
                    'id' => 959,
                    'name' => 'Seyi Shay',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/15d8986a39a0d6975e9988d84908de9e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:08',
                    'updated_at' => '2019-11-20 22:59:08',
                ),
            459 =>
                array(
                    'id' => 960,
                    'name' => 'Wenge Musica Maison Mère',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:09',
                    'updated_at' => '2019-11-20 22:59:09',
                ),
            460 =>
                array(
                    'id' => 961,
                    'name' => 'Reekado Banks',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b29057defc7938705f214475374eb849/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:11',
                    'updated_at' => '2019-11-20 22:59:11',
                ),
            461 =>
                array(
                    'id' => 962,
                    'name' => 'Wenge Bcbg',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/07c57ad25efd19aee4045f2f7258497a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:12',
                    'updated_at' => '2019-11-20 22:59:12',
                ),
            462 =>
                array(
                    'id' => 963,
                    'name' => 'Meiway',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9493d3ea400416d43e4d89288b00e269/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:14',
                    'updated_at' => '2019-11-20 22:59:14',
                ),
            463 =>
                array(
                    'id' => 964,
                    'name' => 'Viviane Chidid',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:15',
                    'updated_at' => '2019-11-20 22:59:15',
                ),
            464 =>
                array(
                    'id' => 965,
                    'name' => 'Gaz Mawete',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/316b0468775dcc368c26759d7b2e6b39/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:16',
                    'updated_at' => '2019-11-20 22:59:16',
                ),
            465 =>
                array(
                    'id' => 966,
                    'name' => 'Africa Express',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:17',
                    'updated_at' => '2019-11-20 22:59:17',
                ),
            466 =>
                array(
                    'id' => 967,
                    'name' => 'Flavour',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e95d6d11da4b4dadc0e6a58ebf263d44/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:18',
                    'updated_at' => '2019-11-20 22:59:18',
                ),
            467 =>
                array(
                    'id' => 968,
                    'name' => 'Africando',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ead2df29d6f53149a1fc9aa0367f21a0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:19',
                    'updated_at' => '2019-11-20 22:59:19',
                ),
            468 =>
                array(
                    'id' => 969,
                    'name' => 'Molare',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:21',
                    'updated_at' => '2019-11-20 22:59:21',
                ),
            469 =>
                array(
                    'id' => 970,
                    'name' => 'Richard birman',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cc1b54b1a304409e7e74832f91cdaa48/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:22',
                    'updated_at' => '2019-11-20 22:59:22',
                ),
            470 =>
                array(
                    'id' => 971,
                    'name' => 'DJ Flex',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:23',
                    'updated_at' => '2019-11-20 22:59:23',
                ),
            471 =>
                array(
                    'id' => 972,
                    'name' => 'Boy Teddy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:25',
                    'updated_at' => '2019-11-20 22:59:25',
                ),
            472 =>
                array(
                    'id' => 973,
                    'name' => 'Habib Koité',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:26',
                    'updated_at' => '2019-11-20 22:59:26',
                ),
            473 =>
                array(
                    'id' => 974,
                    'name' => 'Omar Pene',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/797b3f09e7a72ec14c67c7bd048d04b2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:27',
                    'updated_at' => '2019-11-20 22:59:27',
                ),
            474 =>
                array(
                    'id' => 975,
                    'name' => 'Teeyah',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:29',
                    'updated_at' => '2019-11-20 22:59:29',
                ),
            475 =>
                array(
                    'id' => 976,
                    'name' => 'Tony Deloumeaux',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 21,
                    'created_at' => '2019-11-20 22:59:31',
                    'updated_at' => '2019-11-20 22:59:31',
                ),
            476 =>
                array(
                    'id' => 977,
                    'name' => 'Zouhair Bahaoui',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2928140c2b85530f2d4062e16f3bfc4e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:32',
                    'updated_at' => '2019-11-20 22:59:32',
                ),
            477 =>
                array(
                    'id' => 978,
                    'name' => 'Rachid Taha',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/81cc488d4ecaeb3130f24b87095b1d3d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:33',
                    'updated_at' => '2019-11-20 22:59:33',
                ),
            478 =>
                array(
                    'id' => 979,
                    'name' => 'Cheb Hasni',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e4437db728136976d6c9b74abf7cf620/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:34',
                    'updated_at' => '2019-11-20 22:59:34',
                ),
            479 =>
                array(
                    'id' => 980,
                    'name' => 'Nancy Ajram',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f091a06dfc3c2592c7eb75a18c0bbf7e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:36',
                    'updated_at' => '2019-11-20 22:59:36',
                ),
            480 =>
                array(
                    'id' => 981,
                    'name' => 'Hatim Ammor',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0f9525cba3c8b4b5581d4c0586d4c771/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:37',
                    'updated_at' => '2019-11-20 22:59:37',
                ),
            481 =>
                array(
                    'id' => 982,
                    'name' => 'Amine',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6955b86b005ed2a98d23b04c83ee5262/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:39',
                    'updated_at' => '2019-11-20 22:59:39',
                ),
            482 =>
                array(
                    'id' => 983,
                    'name' => 'Cheb Houssem',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6505d7ae27f707c034b48e23ca7a43c5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:40',
                    'updated_at' => '2019-11-20 22:59:40',
                ),
            483 =>
                array(
                    'id' => 984,
                    'name' => 'Sherine',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ecd7c8954cfdd8103638b4e5f2359e11/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:42',
                    'updated_at' => '2019-11-20 22:59:42',
                ),
            484 =>
                array(
                    'id' => 985,
                    'name' => 'Souad Massi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2bdb796e8c786c1dd74dabc32f8a8b2d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:43',
                    'updated_at' => '2019-11-20 22:59:43',
                ),
            485 =>
                array(
                    'id' => 986,
                    'name' => 'Hichem Smati',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d2c91c3c45f14dd094da34bb10d7a201/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:45',
                    'updated_at' => '2019-11-20 22:59:45',
                ),
            486 =>
                array(
                    'id' => 987,
                    'name' => 'Fairuz',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f23a42b098b2ac91743f59f13928d1ee/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:46',
                    'updated_at' => '2019-11-20 22:59:46',
                ),
            487 =>
                array(
                    'id' => 988,
                    'name' => 'Maher Zain',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/530d4861c3e5ee1fc067b4416f5ab566/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:48',
                    'updated_at' => '2019-11-20 22:59:48',
                ),
            488 =>
                array(
                    'id' => 989,
                    'name' => 'DJ Aliloo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:50',
                    'updated_at' => '2019-11-20 22:59:50',
                ),
            489 =>
                array(
                    'id' => 990,
                    'name' => 'DJ Ham\'s',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:51',
                    'updated_at' => '2019-11-20 22:59:51',
                ),
            490 =>
                array(
                    'id' => 991,
                    'name' => 'Wael Kfoury',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3e3dbff464d2a7df7696d769579ee553/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:52',
                    'updated_at' => '2019-11-20 22:59:52',
                ),
            491 =>
                array(
                    'id' => 992,
                    'name' => 'Cheb Djalil',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b9ee0a39964e1a800dbe00fdfa6f9975/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:54',
                    'updated_at' => '2019-11-20 22:59:54',
                ),
            492 =>
                array(
                    'id' => 993,
                    'name' => 'Cheb Akil',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/c70c18d392e2e788252deb37ee7ab406/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:56',
                    'updated_at' => '2019-11-20 22:59:56',
                ),
            493 =>
                array(
                    'id' => 994,
                    'name' => 'Cheb Bilal',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7930976a2ae485b7f88983c00caa92d8/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:57',
                    'updated_at' => '2019-11-20 22:59:57',
                ),
            494 =>
                array(
                    'id' => 995,
                    'name' => 'Hussain Al Jassmi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b15a88e0bf3f4cd3828ecc3e99773543/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 22:59:59',
                    'updated_at' => '2019-11-20 22:59:59',
                ),
            495 =>
                array(
                    'id' => 996,
                    'name' => 'Cravata',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/8136ad5b5c1ab09e0bf79927e724866e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:00',
                    'updated_at' => '2019-11-20 23:00:00',
                ),
            496 =>
                array(
                    'id' => 997,
                    'name' => 'Matoub Lounes',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:01',
                    'updated_at' => '2019-11-20 23:00:01',
                ),
            497 =>
                array(
                    'id' => 998,
                    'name' => 'Gnawa Diffusion',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/538ec046787398e8da3fd62a6f29d457/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:03',
                    'updated_at' => '2019-11-20 23:00:03',
                ),
            498 =>
                array(
                    'id' => 999,
                    'name' => 'Nassif Zeytoun',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/031e9b91fbab01922f931bfc889d8c64/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:04',
                    'updated_at' => '2019-11-20 23:00:04',
                ),
            499 =>
                array(
                    'id' => 1000,
                    'name' => 'Tamer Hosny',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b9f98ef37f48689fd196bfeac4266a68/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:05',
                    'updated_at' => '2019-11-20 23:00:05',
                ),
        ));
        \DB::table('artists')->insert(array(
            0 =>
                array(
                    'id' => 1001,
                    'name' => 'Lounès Matoub',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7068bb353f127d4ab458e43cb6445b15/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:07',
                    'updated_at' => '2019-11-20 23:00:07',
                ),
            1 =>
                array(
                    'id' => 1002,
                    'name' => 'Zina Daoudia',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/05c3ba5e8e7fd3ea81cc0939ab544f85/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:09',
                    'updated_at' => '2019-11-20 23:00:09',
                ),
            2 =>
                array(
                    'id' => 1003,
                    'name' => 'Cheb Bilal Sghir',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2937f02fd87d7f74f159d418b8895c6c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:10',
                    'updated_at' => '2019-11-20 23:00:10',
                ),
            3 =>
                array(
                    'id' => 1004,
                    'name' => 'Chaba Sabah',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:12',
                    'updated_at' => '2019-11-20 23:00:12',
                ),
            4 =>
                array(
                    'id' => 1005,
                    'name' => 'Ihab Amir',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/b072e090bb405af874b86f7103227b00/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:12',
                    'updated_at' => '2019-11-20 23:00:12',
                ),
            5 =>
                array(
                    'id' => 1006,
                    'name' => 'Reda Taliani',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5f4745013b567358c15a4b22a5e2d2e7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:13',
                    'updated_at' => '2019-11-20 23:00:13',
                ),
            6 =>
                array(
                    'id' => 1007,
                    'name' => 'Kader Japonais',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/92c6c9ff07823818cb9e18aabeb2a8ce/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:14',
                    'updated_at' => '2019-11-20 23:00:14',
                ),
            7 =>
                array(
                    'id' => 1008,
                    'name' => 'Nouamane Belaiachi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ae4c747789557d79d960fb9326cb4319/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:16',
                    'updated_at' => '2019-11-20 23:00:16',
                ),
            8 =>
                array(
                    'id' => 1009,
                    'name' => 'MOHAMED ALLAOUA',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:16',
                    'updated_at' => '2019-11-20 23:00:16',
                ),
            9 =>
                array(
                    'id' => 1010,
                    'name' => 'Adil Assil',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/41640b69c6614e9b05cdd83dcf6131cc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:18',
                    'updated_at' => '2019-11-20 23:00:18',
                ),
            10 =>
                array(
                    'id' => 1011,
                    'name' => 'Ibtissam Tiskat',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/1f1359e899216c2a759ee32fff13e1fd/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:18',
                    'updated_at' => '2019-11-20 23:00:18',
                ),
            11 =>
                array(
                    'id' => 1012,
                    'name' => 'Fadel Chaker',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/d41c6fc22ddd67f73474a0cf5bfe6987/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:19',
                    'updated_at' => '2019-11-20 23:00:19',
                ),
            12 =>
                array(
                    'id' => 1013,
                    'name' => 'Hamza Namira',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ff414c7d68f8338b242852c677c87f72/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:21',
                    'updated_at' => '2019-11-20 23:00:21',
                ),
            13 =>
                array(
                    'id' => 1014,
                    'name' => 'Cheb Bachir',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:22',
                    'updated_at' => '2019-11-20 23:00:22',
                ),
            14 =>
                array(
                    'id' => 1015,
                    'name' => 'Marwan Khoury',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ac029426547e3b5c3ed6415fe875cd87/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:23',
                    'updated_at' => '2019-11-20 23:00:23',
                ),
            15 =>
                array(
                    'id' => 1016,
                    'name' => 'Assala',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/be948ca5805edeceb731ac3325d3de6f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:25',
                    'updated_at' => '2019-11-20 23:00:25',
                ),
            16 =>
                array(
                    'id' => 1017,
                    'name' => 'Raïna Raï',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:26',
                    'updated_at' => '2019-11-20 23:00:26',
                ),
            17 =>
                array(
                    'id' => 1018,
                    'name' => 'Yuma',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:28',
                    'updated_at' => '2019-11-20 23:00:28',
                ),
            18 =>
                array(
                    'id' => 1019,
                    'name' => 'Cheba Souad',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:29',
                    'updated_at' => '2019-11-20 23:00:29',
                ),
            19 =>
                array(
                    'id' => 1020,
                    'name' => 'Moustafa Hagag',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e58577794644673d2357a14f725e9dd3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:30',
                    'updated_at' => '2019-11-20 23:00:30',
                ),
            20 =>
                array(
                    'id' => 1021,
                    'name' => 'Dahmane El Harrachi',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/49dfa2fa3bd1ecd2fd66c33e2d85d261/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:31',
                    'updated_at' => '2019-11-20 23:00:31',
                ),
            21 =>
                array(
                    'id' => 1022,
                    'name' => 'Ragheb Alama',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5be2f4d29716a8b3edc5084282918129/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:33',
                    'updated_at' => '2019-11-20 23:00:33',
                ),
            22 =>
                array(
                    'id' => 1023,
                    'name' => 'Cheb Arres',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:34',
                    'updated_at' => '2019-11-20 23:00:34',
                ),
            23 =>
                array(
                    'id' => 1024,
                    'name' => 'Cheb Tarik',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ecf80dd2aa0ca538b8b90a0dc10fceba/250x250-000000-80-0-0.jpg',
                    'genre_id' => 22,
                    'created_at' => '2019-11-20 23:00:36',
                    'updated_at' => '2019-11-20 23:00:36',
                ),
            24 =>
                array(
                    'id' => 1025,
                    'name' => 'BTS',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/8cf015c67f3b92b5b10a9e8fd73dad22/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:38',
                    'updated_at' => '2019-11-20 23:00:38',
                ),
            25 =>
                array(
                    'id' => 1026,
                    'name' => 'BLACKPINK',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9ea95d6322381399eb5a5d3e5691b146/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:39',
                    'updated_at' => '2019-11-20 23:00:39',
                ),
            26 =>
                array(
                    'id' => 1027,
                    'name' => 'TWICE',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b0baaef30fdfda47e4df2c91b5d7e199/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:40',
                    'updated_at' => '2019-11-20 23:00:40',
                ),
            27 =>
                array(
                    'id' => 1028,
                    'name' => 'Stray Kids',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/30ab6d4e809b4026c8437fce7206608f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:42',
                    'updated_at' => '2019-11-20 23:00:42',
                ),
            28 =>
                array(
                    'id' => 1029,
                    'name' => 'Mamamoo',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/320243255635a20a4ccc0d6546b7ba5e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:43',
                    'updated_at' => '2019-11-20 23:00:43',
                ),
            29 =>
                array(
                    'id' => 1030,
                    'name' => 'Ateez',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/923f5a337e8ff7c24662f1245de0ba6d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:45',
                    'updated_at' => '2019-11-20 23:00:45',
                ),
            30 =>
                array(
                    'id' => 1031,
                    'name' => 'GOT7',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/497a94343e428823204effd6a9d6547e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:46',
                    'updated_at' => '2019-11-20 23:00:46',
                ),
            31 =>
                array(
                    'id' => 1032,
                    'name' => 'TOMORROW X TOGETHER',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/fe8fba1e00a476a32d4a4708c8618410/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:47',
                    'updated_at' => '2019-11-20 23:00:47',
                ),
            32 =>
                array(
                    'id' => 1033,
                    'name' => 'LiSA',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:48',
                    'updated_at' => '2019-11-20 23:00:48',
                ),
            33 =>
                array(
                    'id' => 1034,
                    'name' => 'RADWIMPS',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/323cda9b3fd05aaa08098df882ca2566/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:50',
                    'updated_at' => '2019-11-20 23:00:50',
                ),
            34 =>
                array(
                    'id' => 1035,
                    'name' => '(G)I-DLE',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:51',
                    'updated_at' => '2019-11-20 23:00:51',
                ),
            35 =>
                array(
                    'id' => 1036,
                    'name' => 'Monsta X',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5507138b573671ce600e007709b555f7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:52',
                    'updated_at' => '2019-11-20 23:00:52',
                ),
            36 =>
                array(
                    'id' => 1037,
                    'name' => 'K/DA',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b06aacbd78469bf95b59759b0500b9ce/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:54',
                    'updated_at' => '2019-11-20 23:00:54',
                ),
            37 =>
                array(
                    'id' => 1038,
                    'name' => 'iKON',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a9b963f2ea71680b14ac6765ea1ed005/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:54',
                    'updated_at' => '2019-11-20 23:00:54',
                ),
            38 =>
                array(
                    'id' => 1039,
                    'name' => 'Ikimonogakari',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/740f506efb1a8cc73a44145ce52ebd84/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:55',
                    'updated_at' => '2019-11-20 23:00:55',
                ),
            39 =>
                array(
                    'id' => 1040,
                    'name' => 'BIGBANG',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ded836df53650e375ed01e2f497f8940/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:56',
                    'updated_at' => '2019-11-20 23:00:56',
                ),
            40 =>
                array(
                    'id' => 1041,
                    'name' => 'Red Velvet',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a015e0af81ea5943ab2955cb985ddd2f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:00:58',
                    'updated_at' => '2019-11-20 23:00:58',
                ),
            41 =>
                array(
                    'id' => 1042,
                    'name' => 'SuperM',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/7ca8f4a0185afbb2f6205e71c889a714/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:00',
                    'updated_at' => '2019-11-20 23:01:00',
                ),
            42 =>
                array(
                    'id' => 1043,
                    'name' => 'TK from Ling tosite sigure',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0233fe1c3ed0994087b6e57fc9cb1cc9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:00',
                    'updated_at' => '2019-11-20 23:01:00',
                ),
            43 =>
                array(
                    'id' => 1044,
                    'name' => 'DAY6',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5210f073d316e57572442c0ed7a6f0f2/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:02',
                    'updated_at' => '2019-11-20 23:01:02',
                ),
            44 =>
                array(
                    'id' => 1045,
                    'name' => 'Everglow',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/bf761b05936c31c8930460bce47bd0b6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:03',
                    'updated_at' => '2019-11-20 23:01:03',
                ),
            45 =>
                array(
                    'id' => 1046,
                    'name' => 'NCT 127',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c781987d0e7746a9d14ab2d1da09ef5b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:04',
                    'updated_at' => '2019-11-20 23:01:04',
                ),
            46 =>
                array(
                    'id' => 1047,
                    'name' => 'Itzy',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/6115d668dd42550982718d4d27826cdc/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:05',
                    'updated_at' => '2019-11-20 23:01:05',
                ),
            47 =>
                array(
                    'id' => 1048,
                    'name' => 'Kenshi Yonezu',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/0a3c8cdbd01aad15396b3cbbc3d8e7b7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:06',
                    'updated_at' => '2019-11-20 23:01:06',
                ),
            48 =>
                array(
                    'id' => 1049,
                    'name' => 'Jennie',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/c93197c27675f56086e59421ece4dfe7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:07',
                    'updated_at' => '2019-11-20 23:01:07',
                ),
            49 =>
                array(
                    'id' => 1050,
                    'name' => 'Chung Ha',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/9978a89a075ae3f1211bb98b0fc8bfee/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:07',
                    'updated_at' => '2019-11-20 23:01:07',
                ),
            50 =>
                array(
                    'id' => 1051,
                    'name' => 'Taemin',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b6dba0d6d1ec6e6f755e41b6890b3bb6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:08',
                    'updated_at' => '2019-11-20 23:01:08',
                ),
            51 =>
                array(
                    'id' => 1052,
                    'name' => 'KANA-BOON',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/a22f365acb9b5826ed3183bb31ae48f9/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:10',
                    'updated_at' => '2019-11-20 23:01:10',
                ),
            52 =>
                array(
                    'id' => 1053,
                    'name' => 'UVERworld',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/e6d409d5602f93b15de34469f77ad85f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:12',
                    'updated_at' => '2019-11-20 23:01:12',
                ),
            53 =>
                array(
                    'id' => 1054,
                    'name' => 'Seventeen',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ad8e597b5891c5143bf6d35b549c248b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:13',
                    'updated_at' => '2019-11-20 23:01:13',
                ),
            54 =>
                array(
                    'id' => 1055,
                    'name' => 'NCT Dream',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b1a828796f02f9af0821d6b20b27511f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:14',
                    'updated_at' => '2019-11-20 23:01:14',
                ),
            55 =>
                array(
                    'id' => 1056,
                    'name' => 'amazarashi',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/601ee51a23d8068c2c065329a9c9a60c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:15',
                    'updated_at' => '2019-11-20 23:01:15',
                ),
            56 =>
                array(
                    'id' => 1057,
                    'name' => 'NCT',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/2c78ea88e158f5f344ebd20b60555602/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:17',
                    'updated_at' => '2019-11-20 23:01:17',
                ),
            57 =>
                array(
                    'id' => 1058,
                    'name' => 'A.C.E',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/edeefd85c50679a2bad9cf28d193311b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:18',
                    'updated_at' => '2019-11-20 23:01:18',
                ),
            58 =>
                array(
                    'id' => 1059,
                    'name' => 'WINNER',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/f8147f3fa0eb25302078da1d8aad3998/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:20',
                    'updated_at' => '2019-11-20 23:01:20',
                ),
            59 =>
                array(
                    'id' => 1060,
                    'name' => 'EXID',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dbc1321665073a4fe508d03d88a51d9d/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:21',
                    'updated_at' => '2019-11-20 23:01:21',
                ),
            60 =>
                array(
                    'id' => 1061,
                    'name' => 'TAEYEON',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/dab1f1c20c1d072196084a1c74994eda/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:23',
                    'updated_at' => '2019-11-20 23:01:23',
                ),
            61 =>
                array(
                    'id' => 1062,
                    'name' => 'Eir Aoi',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1d28c81dea403b46f57725f1933561b3/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:25',
                    'updated_at' => '2019-11-20 23:01:25',
                ),
            62 =>
                array(
                    'id' => 1063,
                    'name' => 'Super Junior',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/b409e1ad017a1970416c07031c77960e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:26',
                    'updated_at' => '2019-11-20 23:01:26',
                ),
            63 =>
                array(
                    'id' => 1064,
                    'name' => 'Porno Graffitti',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/487e0cf290a12777c96f3100ce266fe4/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:28',
                    'updated_at' => '2019-11-20 23:01:28',
                ),
            64 =>
                array(
                    'id' => 1065,
                    'name' => 'CIX',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/cc3a761a17b9424d792ca99c8fe8deff/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:30',
                    'updated_at' => '2019-11-20 23:01:30',
                ),
            65 =>
                array(
                    'id' => 1066,
                    'name' => '7!!',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:30',
                    'updated_at' => '2019-11-20 23:01:30',
                ),
            66 =>
                array(
                    'id' => 1067,
                    'name' => 'Pentagon',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:31',
                    'updated_at' => '2019-11-20 23:01:31',
                ),
            67 =>
                array(
                    'id' => 1068,
                    'name' => 'Aimer',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/ba29fc241bb92300c81a3794ae3f314e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:32',
                    'updated_at' => '2019-11-20 23:01:32',
                ),
            68 =>
                array(
                    'id' => 1069,
                    'name' => 'ASIAN KUNG-FU GENERATION',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/90046b22600b619abe709a14b06be628/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:33',
                    'updated_at' => '2019-11-20 23:01:33',
                ),
            69 =>
                array(
                    'id' => 1070,
                    'name' => 'Astro',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/df4fc61934407aec133c65bbec238883/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:35',
                    'updated_at' => '2019-11-20 23:01:35',
                ),
            70 =>
                array(
                    'id' => 1071,
                    'name' => 'Dean',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/5d93dd8ae6664c761ead74c17dbd3f9a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:37',
                    'updated_at' => '2019-11-20 23:01:37',
                ),
            71 =>
                array(
                    'id' => 1072,
                    'name' => 'Zico',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:38',
                    'updated_at' => '2019-11-20 23:01:38',
                ),
            72 =>
                array(
                    'id' => 1073,
                    'name' => 'BAEKHYUN',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/artist/1c12903a577d72896561c1364cf234bf/250x250-000000-80-0-0.jpg',
                    'genre_id' => 23,
                    'created_at' => '2019-11-20 23:01:40',
                    'updated_at' => '2019-11-20 23:01:40',
                ),
            73 =>
                array(
                    'id' => 1074,
                    'name' => 'Gilberto Gil',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4318879e2860ac1c109e21232ca91c2a/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:42',
                    'updated_at' => '2019-11-20 23:01:42',
                ),
            74 =>
                array(
                    'id' => 1075,
                    'name' => 'Marília Mendonça',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/0e2f0b185fa2eef93a490f40d13d269f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:46',
                    'updated_at' => '2019-11-20 23:01:46',
                ),
            75 =>
                array(
                    'id' => 1076,
                    'name' => 'Michel Teló',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9f8d3f7a788657bbdd33bd026cbca081/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:48',
                    'updated_at' => '2019-11-20 23:01:48',
                ),
            76 =>
                array(
                    'id' => 1077,
                    'name' => 'IZA',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/322d512772234cff2f16f230685ab184/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:50',
                    'updated_at' => '2019-11-20 23:01:50',
                ),
            77 =>
                array(
                    'id' => 1078,
                    'name' => 'Luan Santana',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/62c2561ca6ac79fbf7c1f127c6b63f5f/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:51',
                    'updated_at' => '2019-11-20 23:01:51',
                ),
            78 =>
                array(
                    'id' => 1079,
                    'name' => 'Ludmilla',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a74fb709799685a3a936084aee0f2fc5/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:52',
                    'updated_at' => '2019-11-20 23:01:52',
                ),
            79 =>
                array(
                    'id' => 1080,
                    'name' => 'Gusttavo Lima',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/9ba65c490bb013016dc2be62481e2c72/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:54',
                    'updated_at' => '2019-11-20 23:01:54',
                ),
            80 =>
                array(
                    'id' => 1081,
                    'name' => 'Elis Regina',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/ee6ec705579a9df715b648a8d8928295/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:56',
                    'updated_at' => '2019-11-20 23:01:56',
                ),
            81 =>
                array(
                    'id' => 1082,
                    'name' => 'Jorge Ben',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:01:59',
                    'updated_at' => '2019-11-20 23:01:59',
                ),
            82 =>
                array(
                    'id' => 1083,
                    'name' => 'Toquinho',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6374f6dfad62e6875b61f8bdf28ad4ac/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:01',
                    'updated_at' => '2019-11-20 23:02:01',
                ),
            83 =>
                array(
                    'id' => 1084,
                    'name' => 'Mc Zaac',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/eb6c81ffa19d0a96932304dc1f64c90b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:03',
                    'updated_at' => '2019-11-20 23:02:03',
                ),
            84 =>
                array(
                    'id' => 1085,
                    'name' => 'Mc Livinho',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/59b0f0001561853439393d132f24452e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:03',
                    'updated_at' => '2019-11-20 23:02:03',
                ),
            85 =>
                array(
                    'id' => 1086,
                    'name' => 'Zé Neto & Cristiano',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/100bc0927a9f152d2a9d85c169fe1901/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:05',
                    'updated_at' => '2019-11-20 23:02:05',
                ),
            86 =>
                array(
                    'id' => 1087,
                    'name' => 'Léo Santana',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6c2aa93043f5a52b87e58573ac78fe75/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:07',
                    'updated_at' => '2019-11-20 23:02:07',
                ),
            87 =>
                array(
                    'id' => 1088,
                    'name' => 'Jorge & Mateus',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/245113fec6c1105f2440b422b07774eb/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:09',
                    'updated_at' => '2019-11-20 23:02:09',
                ),
            88 =>
                array(
                    'id' => 1089,
                    'name' => 'Maria Bethânia',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5ac841bed4613053a6b4983c89cdc7f7/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:13',
                    'updated_at' => '2019-11-20 23:02:13',
                ),
            89 =>
                array(
                    'id' => 1090,
                    'name' => 'Maiara & Maraisa',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e4f49b10db2e380d6075911e0db79f96/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:15',
                    'updated_at' => '2019-11-20 23:02:15',
                ),
            90 =>
                array(
                    'id' => 1091,
                    'name' => 'Naiara Azevedo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e1ebcc3a2d96ec36b176d14a80cbe79e/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:16',
                    'updated_at' => '2019-11-20 23:02:16',
                ),
            91 =>
                array(
                    'id' => 1092,
                    'name' => 'Leandro & Leonardo ',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/536fcefac8adf2469cd5f5dafc562936/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:19',
                    'updated_at' => '2019-11-20 23:02:19',
                ),
            92 =>
                array(
                    'id' => 1093,
                    'name' => 'Lucas Lucco',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/14b4928480ed6b60bf4e38698bab0f30/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:21',
                    'updated_at' => '2019-11-20 23:02:21',
                ),
            93 =>
                array(
                    'id' => 1094,
                    'name' => 'Matheus & Kauan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/14b85320e4309cf12782fd270e50f714/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:22',
                    'updated_at' => '2019-11-20 23:02:22',
                ),
            94 =>
                array(
                    'id' => 1095,
                    'name' => 'Wesley Safadão',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/6bfb70de0e3270b40014cfce121cf129/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:24',
                    'updated_at' => '2019-11-20 23:02:24',
                ),
            95 =>
                array(
                    'id' => 1096,
                    'name' => 'Paula Morelenbaum',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:26',
                    'updated_at' => '2019-11-20 23:02:26',
                ),
            96 =>
                array(
                    'id' => 1097,
                    'name' => 'Ana Carolina',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7056cb4fc7c8a2ad407ec4cdc64f0ee1/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:28',
                    'updated_at' => '2019-11-20 23:02:28',
                ),
            97 =>
                array(
                    'id' => 1098,
                    'name' => 'Joo Kraus',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:29',
                    'updated_at' => '2019-11-20 23:02:29',
                ),
            98 =>
                array(
                    'id' => 1099,
                    'name' => 'Maria Gadú',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/959908df55acd9319dc86640ad9bd517/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:31',
                    'updated_at' => '2019-11-20 23:02:31',
                ),
            99 =>
                array(
                    'id' => 1100,
                    'name' => 'MC G15',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/125c7f032da59596d1dd6a70600d6139/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:33',
                    'updated_at' => '2019-11-20 23:02:33',
                ),
            100 =>
                array(
                    'id' => 1101,
                    'name' => 'Vinicius',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:34',
                    'updated_at' => '2019-11-20 23:02:34',
                ),
            101 =>
                array(
                    'id' => 1102,
                    'name' => 'Zezé Di Camargo & Luciano',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/4294bf3f97efbb0e7cbdd4dd2b6dca5b/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:36',
                    'updated_at' => '2019-11-20 23:02:36',
                ),
            102 =>
                array(
                    'id' => 1103,
                    'name' => 'MC Bruninho',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/e6af4cd4d6eaa5ce392f15c670e3dc55/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:38',
                    'updated_at' => '2019-11-20 23:02:38',
                ),
            103 =>
                array(
                    'id' => 1104,
                    'name' => 'Thiago Brava',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/7837c5b096874d463c32ae99f5134738/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:38',
                    'updated_at' => '2019-11-20 23:02:38',
                ),
            104 =>
                array(
                    'id' => 1105,
                    'name' => 'Céu',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/35eefe70016fedfa7be002e3b1bf3ec0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:40',
                    'updated_at' => '2019-11-20 23:02:40',
                ),
            105 =>
                array(
                    'id' => 1106,
                    'name' => 'Maria Creuza',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:41',
                    'updated_at' => '2019-11-20 23:02:41',
                ),
            106 =>
                array(
                    'id' => 1107,
                    'name' => 'Gustavo Mioto',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/93389e8d7bb56aa0e3fedc2d76cd6db0/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:43',
                    'updated_at' => '2019-11-20 23:02:43',
                ),
            107 =>
                array(
                    'id' => 1108,
                    'name' => 'Ivete Sangalo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/57d066d75e1092d55c8c7b5d70038ce6/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:45',
                    'updated_at' => '2019-11-20 23:02:45',
                ),
            108 =>
                array(
                    'id' => 1109,
                    'name' => 'Simone & Simaria',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/dee0372f64daae4a96d32dcbc0b93f2c/250x250-000000-80-0-0.jpg',
                    'genre_id' => 24,
                    'created_at' => '2019-11-20 23:02:47',
                    'updated_at' => '2019-11-20 23:02:47',
                ),
            109 =>
                array(
                    'id' => 1110,
                    'name' => 'Hiphop Tamizha',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/fbfadabccdf5606731494d50fb92c1ab/250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:02:49',
                    'updated_at' => '2019-11-20 23:02:49',
                ),
            110 =>
                array(
                    'id' => 1111,
                    'name' => 'Sid Sriram',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:02:51',
                    'updated_at' => '2019-11-20 23:02:51',
                ),
            111 =>
                array(
                    'id' => 1112,
                    'name' => 'D. Imman',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/a6d67dddd83244aff1b80c201756e820/250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:02:53',
                    'updated_at' => '2019-11-20 23:02:53',
                ),
            112 =>
                array(
                    'id' => 1113,
                    'name' => 'Tony Kakkar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:02:55',
                    'updated_at' => '2019-11-20 23:02:55',
                ),
            113 =>
                array(
                    'id' => 1114,
                    'name' => 'Ghibran',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:02:56',
                    'updated_at' => '2019-11-20 23:02:56',
                ),
            114 =>
                array(
                    'id' => 1115,
                    'name' => 'B Praak',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:02:57',
                    'updated_at' => '2019-11-20 23:02:57',
                ),
            115 =>
                array(
                    'id' => 1116,
                    'name' => 'Thierry Robin',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:02:58',
                    'updated_at' => '2019-11-20 23:02:58',
                ),
            116 =>
                array(
                    'id' => 1117,
                    'name' => 'Garry Sandhu',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:00',
                    'updated_at' => '2019-11-20 23:03:00',
                ),
            117 =>
                array(
                    'id' => 1118,
                    'name' => 'Rahat Fateh Ali Khan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/3612dc9917e53f6d7db183ea2a8d64fa/250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:01',
                    'updated_at' => '2019-11-20 23:03:01',
                ),
            118 =>
                array(
                    'id' => 1119,
                    'name' => 'Naresh Iyer',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:03',
                    'updated_at' => '2019-11-20 23:03:03',
                ),
            119 =>
                array(
                    'id' => 1120,
                    'name' => 'Harrdy Sandhu',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:05',
                    'updated_at' => '2019-11-20 23:03:05',
                ),
            120 =>
                array(
                    'id' => 1121,
                    'name' => 'Aastha Gill',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:06',
                    'updated_at' => '2019-11-20 23:03:06',
                ),
            121 =>
                array(
                    'id' => 1122,
                    'name' => 'Gulabi Sapera',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:06',
                    'updated_at' => '2019-11-20 23:03:06',
                ),
            122 =>
                array(
                    'id' => 1123,
                    'name' => 'Arjun Kanungo',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:07',
                    'updated_at' => '2019-11-20 23:03:07',
                ),
            123 =>
                array(
                    'id' => 1124,
                    'name' => 'Padmalatha',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:08',
                    'updated_at' => '2019-11-20 23:03:08',
                ),
            124 =>
                array(
                    'id' => 1125,
                    'name' => 'Suresh Wadkar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/f231e09ab0cfb1459d547af5b9bdbe83/250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:09',
                    'updated_at' => '2019-11-20 23:03:09',
                ),
            125 =>
                array(
                    'id' => 1126,
                    'name' => 'Marti Nikko',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:11',
                    'updated_at' => '2019-11-20 23:03:11',
                ),
            126 =>
                array(
                    'id' => 1127,
                    'name' => 'Ranjit Bawa',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/5c2951a2e4c33598d194c575bbbbf381/250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:12',
                    'updated_at' => '2019-11-20 23:03:12',
                ),
            127 =>
                array(
                    'id' => 1128,
                    'name' => 'Pav Dharia',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/2f6d904e697a332d03ed33f62a4dfc81/250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:13',
                    'updated_at' => '2019-11-20 23:03:13',
                ),
            128 =>
                array(
                    'id' => 1129,
                    'name' => 'Vijay Yesudas',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:14',
                    'updated_at' => '2019-11-20 23:03:14',
                ),
            129 =>
                array(
                    'id' => 1130,
                    'name' => 'Bilal Saeed',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:16',
                    'updated_at' => '2019-11-20 23:03:16',
                ),
            130 =>
                array(
                    'id' => 1131,
                    'name' => 'Dr Zeus',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist/377fd410824e764eefa1516a80aa2522/250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:17',
                    'updated_at' => '2019-11-20 23:03:17',
                ),
            131 =>
                array(
                    'id' => 1132,
                    'name' => 'Maninder Buttar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:18',
                    'updated_at' => '2019-11-20 23:03:18',
                ),
            132 =>
                array(
                    'id' => 1133,
                    'name' => 'Sunanda Sharma',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:18',
                    'updated_at' => '2019-11-20 23:03:18',
                ),
            133 =>
                array(
                    'id' => 1134,
                    'name' => 'Akhil',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:19',
                    'updated_at' => '2019-11-20 23:03:19',
                ),
            134 =>
                array(
                    'id' => 1135,
                    'name' => 'Yazin Nizar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:20',
                    'updated_at' => '2019-11-20 23:03:20',
                ),
            135 =>
                array(
                    'id' => 1136,
                    'name' => 'Chitra',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:21',
                    'updated_at' => '2019-11-20 23:03:21',
                ),
            136 =>
                array(
                    'id' => 1137,
                    'name' => 'Momina Mustehsan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:23',
                    'updated_at' => '2019-11-20 23:03:23',
                ),
            137 =>
                array(
                    'id' => 1138,
                    'name' => 'Swetha Mohan',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:23',
                    'updated_at' => '2019-11-20 23:03:23',
                ),
            138 =>
                array(
                    'id' => 1139,
                    'name' => 'Anup Jalota',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:25',
                    'updated_at' => '2019-11-20 23:03:25',
                ),
            139 =>
                array(
                    'id' => 1140,
                    'name' => 'Asim Azhar',
                    'picture_url' => 'https://e-cdns-images.dzcdn.net/images/artist//250x250-000000-80-0-0.jpg',
                    'genre_id' => 25,
                    'created_at' => '2019-11-20 23:03:27',
                    'updated_at' => '2019-11-20 23:03:27',
                ),
        ));


    }
}
