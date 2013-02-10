<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

  <section id="content_wrap" class="container row">
    <section id="article_listing" class="col span_8 <?php if (!is_page()) { echo 'article';} ?>">
<?php while (have_posts()) : the_post(); ?>
      <article class="row">
        <header>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.'); ?><span class="year"><?php the_time('Y'); ?></span></time>

          <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          <p><?php the_tags('Tags: ', ', ', ''); ?></p>
          <p> Kategorie <?php the_category(', ') ?> | <?php edit_post_link('Bearbeiten', '', ' | '); ?>  <?php comments_popup_link('Keine Kommentare &#187;', '1 Kommentar &#187;', '% Kommentare &#187;'); ?></p>
        </header>
        <?php the_content('Ganzen Beitrag lesen &raquo;'); ?>

        <?php if (is_singular()) : ?>
          <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
          <?php if (! is_page()) : ?>
            <p class="postmetadata alt">
              <small>
Dieser Beitrag wurde am
<?php the_time('d.m.Y') ?> um <?php the_time() ?>
in der Kategorie <?php the_category(', ') ?> veröffentlicht.
Kommentare können per
<?php post_comments_feed_link('RSS 2.0'); ?> Feed abonniert werden.

                <?php if ( comments_open() && pings_open() ) {
// Kommentare und Trackbacks zugelassen ?>
Sie können ein <a href="#respond">Kommentar</a> schreiben oder einen <a href="<?php trackback_url(); ?>" rel="trackback">Trackback</a> von ihrer Seite hinterlassen.
                <?php } elseif ( !comments_open() && pings_open() ) {
// nur Trackbacks ?>
Sie können einen <a href="<?php trackback_url(); ?>" rel="trackback">Trackback</a> von ihrer Seite hinterlassen.
                <?php } elseif ( comments_open() && !pings_open() ) {
// nur Kommentare ?>
Sie können ein <a href="#respond">Kommentar</a> schreiben.
                <?php } ?>
              </small>
            </p>

            <?php comments_template(); ?>
          <?php endif; ?>

        <?php endif; ?>
      </article>
<?php endwhile; ?>

<div class="navigation">
<?php if (is_singular()) : ?>
<?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<?php else : ?>
  <div class="alignleft"><?php next_posts_link('&laquo; Ältere Einträge') ?></div>
  <div class="alignright"><?php previous_posts_link('Neuere Einträge &raquo;') ?></div>
<?php endif; ?>
</div>
    </section>

<?php get_sidebar(); ?>
  </section>


<?php get_footer(); ?>
