<?php
$items = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 18000,
    ],
    [
        'id' => 3,
        'title' => 'Piano',
        'price' => 68000,
    ],
    [
        'id' => 4,
        'title' => 'Drum',
        'price' => 68000,
    ],
];


// сортировка по цене
function sortPrice($a, $b) {
  if ($a['price'] === $b['price']) {
    return 0;
} else { return ($a['price'] < $b['price']) ? -1 : 1;
    }

  uasort($items, 'sortPrice')

// сортировка по имени
function sortTitle($a, $b) {
  if ($a['price'] === $b['price']) {
    if ($a['title'] === $b['title']) {
      return 0;
    }
        return ($a['title'] < $b['title']) ? -1 : 1;
    }
        return ($a['price'] < $b['price']) ? -1 : 1;
}

uasort($items, 'sortTitle')
 ?>
 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>Sort</title>
   </head>
   <body>
     <section id="card">
       <h2>Все инструменты</h2>
       <?php foreach ($items as $item): ?>
       <div>
         <h3> <?= $item['title']?> </h3>
         <p>Цена: <?= $items['price']?></p>
       </div>
     <?php endforeach; ?>
     </section>
   </body>
 </html>
