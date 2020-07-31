<?php get_header(); ?>

<div class="container p-5">
    <div class="d-flex flex-column col-lg-8 col-sm-12" id="article">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- <article class="article-full"> -->
        <header>
          <img src="" alt="">
          <?php the_post_thumbnail(); ?>
          <h2 class="text-center p-5"><?php the_title(); ?></h2>
          <span>Publié le : <?php the_date();"  " ?>, par : <?php the_author(); ?></span>
          <p></p>
          <p>Dans la catégorie <?php the_category(); ?></p>
          <p>Avec les étiquettes <?php the_tags(); ?></p>
        </header>
       <p class=""><?php the_content(); ?></p>
      <!-- </article> -->
      <?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found !</p>
      </article>
      <?php endif; ?>
    </div>
</div>

<a class="nav-item nav-link active text-white bg-dark text-center" href="<?php echo get_option('home'); ?>/">Retour à l'accueil</a>


<?php get_footer(); ?>
