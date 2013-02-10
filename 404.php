<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

  <section id="content_wrap" class="container row">
    <section id="article_listing" class="col span_8">
      <article class="row">
        <header>
          <h1>Seite nicht gefunden</h1>
        </header>
        <p>Die gewünschte Seite konnte nicht gefunden werden. Mögliche Gründe:</p>
        <ul>
          <li>sie haben die Adresse falsch eingegeben</li>
          <li>die gewünschte Seite gibt es nicht mehr oder wurde verschoben</li>
        </ul>
        <p>Wie nun weiter?</p>
        <ul>
          <li>zurück zur <a href="<?php echo get_option('home'); ?>/">Startseite</a></li>
          <li>folgendes Suchformular nutzen, um Seite zu finden</li>
        </ul>
        <?php get_search_form(true); ?>
      </article>
    </section>

<?php get_sidebar(); ?>
  </section>

<?php get_footer(); ?>
