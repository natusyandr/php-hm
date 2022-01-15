<?php
$items = [
     [
         'id' => 1,
         'title' => 'Flute',
         'price' => 20000,
         'img' => 'flute.jpg',
         'description' => [
             'color' => 'white',
             'material' => 'bamboo'
         ]
     ],
     [
         'id' => 2,
         'title' => 'Guitar',
         'price' => 18000,
         'img' => 'guitar.jpg',
         'description' => [
             'color' => 'brown',
             'material' => 'linden'
         ]
     ],
     [
         'id' => 3,
         'title' => 'Drum',
         'price' => 68000,
         'img' => 'drum.jpg',
         'description' => [
             'color' => 'brown',
             'material' => 'steel'
         ]
     ],
 ];
 ?>

 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>Карточки товаров</title>
   </head>
   <body>
     <section id="card">
       <h2>Все инструменты</h2>
       <?php foreach ($items as $item): ?>
       <div>
         <h3> <?= $item['title']?> </h3>
         <img height="300" src="img/<?= $items['img'] ?>">
         <p>Цена: <?= $items['price']?></p>
         <p>Материал: <?= $items['description']['material']?></p>
         <p>Цвет: <?= $items['description']['color']?></p>
       </div>
     <?php endforeach; ?>
     </section>
   </body>
 </html>
