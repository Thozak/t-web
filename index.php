<!DOCTYPE html>
<?php
 require_once "php/stranky/Stranka.php";
 $s = new Stranka();                        
 $s->setId("textovaci id");
 $s->setTitulek("testovaci titulek");
 $s->setText("testovaci text");

 
?>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <title><?= $s->getTitulek(); ?></title>
  </head>
  <body>
    <article>
      <header>Hlavička</header>
      
      
      <aside>
      <menu>menu</menu>
      </aside>
      
      
       <main>
       <H1><?= $s->getTitulek(); ?></H1>
       <?= $s->getText(); ?>
       </main>
    
    
    
       
    </article>
  </body>
</html>
