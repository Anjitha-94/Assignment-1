
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <title>Demo</title>
     </head>
  <body>
    <?php
       $books = [
        [
        'name' =>"Do Androids Dream of Electric Sheep",
        'author'=>'Philip K.Dick',
        'purchaseURL'=>'http://example.com'
        ],
       [ 'name' =>"The Langoliers",
        'author'=>'Andy Weir',
        'purchaseURL'=>'http://example.com'
        ] ,
       
       ];
        ?>

<ul>
  <?php foreach ($books as $book) : ?>
    <li>
      <a href="<?= $book['purchaseURL']?>">
    <?=$book['name']; ?>
  </li>
  <?php endforeach;?>
   
</ul>
     
      </body>
</html>
