<?php
require_once '../config.php';

$connection->query('TRUNCATE TABLE destinations');

$data = array(
    array(
        'name' => 'Bukit Asep',
        'category' => 'Mountain',
        'cover' => 'Bukit-Asep-1.jpg',
        'rate' => 4.6,
        'rate_count' => 2123,
        'location' => 'Purbalingga, Kota Baru',
        'description' => 'Taman Bukit Asep merupakan objek wisata yang letaknya tidak jauh dari pusat kota Kabupaten Kotabaru. Di taman ini kamu bisa mengunjungi Puncak Bukit Asep yang menjadi objek wisata favorit wisatawan. Dari puncak ini, kamu bisa melihat keindahan Kabupaten Kotabaru dari ketinggian. Selain itu, kamu bisa bersantai di gazebo yang telah disediakan oleh pengelola atau melihat dan memberi makan satwa seperti rusa, kelinci, dan burung.',
        'images' => 'Bukit-Asep-1.jpg, Bukit-Asep-2.jpg, Bukit-Asep-3.jpg',
        'facilities' => 'Fly container, Photo shot, Berkelana bukit',
    ),
    array(
        'name' => 'Dieng Plateau',
        'category' => 'Mountain',
        'cover' => 'Dieng-Plateau-1.jpg',
        'rate' => 4.9,
        'rate_count' => 4325,
        'location' => 'Lebak Jero, Pasanggiri',
        'description' => 'Tebing, bukit, dan danau dalam satu tempat yang sejuk nan nyaman',
        'images' => 'Dieng-Plateau-1.jpg, Dieng-Plateau-2.jpg, Dieng-Plateau-3.jpg, Dieng-Plateau-4',
        'facilities' => 'Mancing mania, Hiking base, Waterfall, Hutan inap',
    ),
    array(
        'name' => 'Bunaken City',
        'category' => 'Beach',
        'cover' => 'Bunaken-City-1.jpg',
        'rate' => 5.0,
        'rate_count' => 19224,
        'location' => 'Tarogong Way, Garut',
        'description' => 'Perpaduan kota kerajaan dan desa terdahulu menjadikan tempat ini ramai dikunjungi dari berbagai turis yang menjadikan tempat objek wisata pinggir laut.',
        'images' => 'Bunaken-City-1.jpg, Bunaken-City-2.jpg, Bunaken-City-3.jpg, Bunaken-City-4.jpg',
        'facilities' => 'Mancagahar, Photo spot, Jajanan malam, Parkir luas',
    ),
    array(
        'name' => 'Maluk Beach',
        'category' => 'Beach',
        'cover' => 'Maluk-Beach-1.jpg',
        'rate' => 4.8,
        'rate_count' => 20451,
        'location' => 'Cipatujah, Wonogiri',
        'description' => 'Tempat exlusive untuk para milyuner menghabiskan cuan dengan bersantai dan minum secangkir air bening.',
        'images' => 'Maluk-Beach-1.jpg, Maluk-Beach-2.jpg, Maluk-Beach-3.jpg, Maluk-Beach-4.jpg',
        'facilities' => 'Taman pasir, Dinner booking, Rest camp area',
    ),
    array(
        'name' => 'Toba Caldera',
        'category' => 'Lake',
        'cover' => 'Toba-Caldera-1.jpg',
        'rate' => 4.7,
        'rate_count' => 9681,
        'location' => 'Toba, Tomorrowland',
        'description' => 'Tempat yang cocok untuk latihan berlayar. Kemudian mencari 10 kru, menjadi seorang Raja Bajak Laut dan membuat dunia dimana teman-teman dapat makan sepuasnya.',
        'images' => 'Toba-Caldera-1.jpg, Toba-Caldera-2.jpg, Toba-Caldera-3.jpg, Toba-Caldera-4.jpg',
        'facilities' => 'Paparahuan, Spot Foto, Lomba dayung',
    ),
);

for ($i = 0; $i < count($data); $i++) {
    // $destination = $data[$i];
    $name = $data[$i]['name'];
    $category = $data[$i]['category'];
    $cover = $data[$i]['cover'];
    $rate = $data[$i]['rate'];
    $rate_count = $data[$i]['rate_count'];
    $location = $data[$i]['location'];
    $description = $data[$i]['description'];
    $images = $data[$i]['images'];
    $facilities = $data[$i]['facilities'];
    $sql = "INSERT INTO destinations
            SET
            name = '$name',
            category = '$category',
            cover = '$cover',
            rate = '$rate',
            rate_count = '$rate_count',
            location = '$location',
            description = '$description',
            images = '$images',
            facilities = '$facilities'
            ";
    $connection->query($sql);
}