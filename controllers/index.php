<?php
view('index.view.php',[
    'heading' => 'Home'
]);






































//$items = [
//    [
//        'name' => 'do androids dream of electronic ships?',
//        'author' => 'zerak',
//        'link' => 'www.example.com',
//        'releaseYear' => '2017'
//    ] ,
//    [
//        'name' => 'dream of electronic ships',
//        'author' => 'zerak2',
//        'link' => 'www.example.com',
//        'releaseYear' => '2017'
//    ] ,
//    [
//        'name' => 'dark matter',
//        'author' => 'zerak3',
//        'link' => 'www.example2.com',
//        'releaseYear' => '2018'
//    ] ,
//    [
//        'name' => 'python',
//        'author' => 'zerak4',
//        'link' => 'www.example3.com',
//        'releaseYear' => '2019'
//    ] ,
//    [
//        'name' => 'python1',
//        'author' => 'zerak5',
//        'link' => 'www.example3.com',
//        'releaseYear' => '2020'
//    ],
//    [
//        'name' => 'chat',
//        'author' => 'zerak6',
//        'link' => 'www.example3.com',
//        'releaseYear' => '2021'
//    ]
//];
//if(isset($_GET['data'])):
//    $data = $_GET['data'];
//    $key = $_GET['select'];
//else:
//    $data = null;
//    $key = null;
//endif;
//function filter($items, $fn , $data){
//    global $key;
//    $filteredItems = [];
//    foreach($items as $item):
//        if ($fn($item, $data , $key)):
//            $filteredItems[] = $item;
//        endif;
//    endforeach;
//    return $filteredItems;
//}
//
//$filteredBooks = filter($items, function ($item,$data,$key){
//    if (isset($key)){
//        return $item[$key] === $data;
//    }
//} , $data);
