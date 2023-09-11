
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <title>Demo</title>
     </head>
  <body>
   <ul>
  <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
       <li>
    <li>
      <a href="<?= $book['purchaseURL']?>">
    <?=$book['name']; ?>(<?=$book['releaseYear']?>) -By <?=$book['author']?>
      </a>
  </li>
  <?php endforeach;?>
   
</ul>
     
      </body>
</html>
//A new file for php  
