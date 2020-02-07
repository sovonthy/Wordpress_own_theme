<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
    <header>
        <div class="container">
            <h1><?php bloginfo('name');?></h1>
            <span><?php bloginfo('description');?></span>
        </div>
    </header>
    <div class="container">
        <?php if(have_posts()):?>
        <?php the_post();?>
        <div class="title">
            <h3>  <?php the_title();?></h3>
        </div>
        <div class="main">
            <p>  <?php the_content();?></p>
        </div>
       <?php else:?>
       <?php echo "the post no found";
       endif;
       ?>  
    </div>
    <footer>
        <p> <?php the_date();?></p>
        <p> <?php the_author();?></p>
       <p>&copy Copy by sovanthy</p>
   </footer>
</body>
</html>