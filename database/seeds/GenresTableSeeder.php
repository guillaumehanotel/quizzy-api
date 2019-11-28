<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder {

    public function run() {


        \DB::table('genres')->delete();

        \DB::table('genres')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Pop',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/db7a604d9e7634a67d45cfc86b48370a/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:42:21',
                    'updated_at' => '2019-11-20 22:42:21',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Livres audio',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/8b0c8494e267e0e02bbb09b8ad7aac6f/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:42:54',
                    'updated_at' => '2019-11-20 22:42:54',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Rap/Hip Hop',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/5c27115d3b797954afff59199dad98d1/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:42:59',
                    'updated_at' => '2019-11-20 22:42:59',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Rock',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/b36ca681666d617edd0dcb5ab389a6ac/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:43:38',
                    'updated_at' => '2019-11-20 22:43:38',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Dance',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/bd5fdfa1a23e02e2697818e09e008e69/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:44:24',
                    'updated_at' => '2019-11-20 22:44:24',
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'R&B',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/68a43aec844708e693cb99f47814153b/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:45:04',
                    'updated_at' => '2019-11-20 22:45:04',
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Alternative',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/fd252ab727d9a3b0b3c29014873f8f57/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:45:49',
                    'updated_at' => '2019-11-20 22:45:49',
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Electro',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/15df4502c1c58137dae5bdd1cc6f0251/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:46:32',
                    'updated_at' => '2019-11-20 22:46:32',
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Folk',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/f9e070848998df8870ba65cd0d22b2b3/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:47:15',
                    'updated_at' => '2019-11-20 22:47:15',
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Reggae',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/7b901a98628cf879e1465f1dfd697e00/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:47:54',
                    'updated_at' => '2019-11-20 22:47:54',
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Jazz',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/91468ecc5dfdd19c42a43d2cbdf27059/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:48:43',
                    'updated_at' => '2019-11-20 22:48:43',
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Chanson française',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/e0de60a12cf6cef0ced36c9b37672434/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:49:40',
                    'updated_at' => '2019-11-20 22:49:40',
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Country',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/6eca3188f724f04843a15e3e575751a5/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:50:33',
                    'updated_at' => '2019-11-20 22:50:33',
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Classique',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/609f69b669b242252aa8ee09b5597655/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:51:35',
                    'updated_at' => '2019-11-20 22:51:35',
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Films/Jeux vidéo',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/236d8057751d9c557728400dfe71483a/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:52:37',
                    'updated_at' => '2019-11-20 22:52:37',
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Metal',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/f14f9fde9feb38ca6d61960f00681860/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:53:28',
                    'updated_at' => '2019-11-20 22:53:28',
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'Soul & Funk',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/3d5e8aab99b95bfa7ac7e9e466e7781e/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:54:35',
                    'updated_at' => '2019-11-20 22:54:35',
                ),
            17 =>
                array(
                    'id' => 18,
                    'name' => 'Blues',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/1abb6810098d4015bdc860c91bcfd2b6/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:55:24',
                    'updated_at' => '2019-11-20 22:55:24',
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => 'Jeunesse',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/b0b8efcbc3cb688864ce69da0061e525/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:56:29',
                    'updated_at' => '2019-11-20 22:56:29',
                ),
            19 =>
                array(
                    'id' => 20,
                    'name' => 'Latino',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/069c9888538799748960781f098b5f4b/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:57:25',
                    'updated_at' => '2019-11-20 22:57:25',
                ),
            20 =>
                array(
                    'id' => 21,
                    'name' => 'Musique africaine',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/703413adf47ad8a6001b438f7608a2be/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:58:33',
                    'updated_at' => '2019-11-20 22:58:33',
                ),
            21 =>
                array(
                    'id' => 22,
                    'name' => 'Musique arabe',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/2df05f13d3244dbdd1ae0206b4605cba/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 22:59:32',
                    'updated_at' => '2019-11-20 22:59:32',
                ),
            22 =>
                array(
                    'id' => 23,
                    'name' => 'Musique asiatique',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/dd6d2756465b22488dff5d8663e86688/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 23:00:38',
                    'updated_at' => '2019-11-20 23:00:38',
                ),
            23 =>
                array(
                    'id' => 24,
                    'name' => 'Musique brésilienne',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/01b12a3f3582899a13b664cea703a335/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 23:01:41',
                    'updated_at' => '2019-11-20 23:01:41',
                ),
            24 =>
                array(
                    'id' => 25,
                    'name' => 'Musique indienne',
                    'picture_url' => 'https://cdns-images.dzcdn.net/images/misc/b098161d9a824eef314bc38b985594a1/250x250-000000-80-0-0.jpg',
                    'created_at' => '2019-11-20 23:02:49',
                    'updated_at' => '2019-11-20 23:02:49',
                ),
        ));


    }
}
