<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <br/><br/>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php get_permalink(); ?>" data-text="<?php echo get_the_title(); ?>"
data-via="rafacm">Tweet</a>
<script>!function(d,s,id){var
js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widget$
'script', 'twitter-wjs');</script>
<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>
<script type="IN/Share" data-url="<?php get_permalink(); ?>" data-counter="right"></script>
&nbsp;&nbsp;<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-height="20"></div>

<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>      
<?php 
wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php the_tags('Tags: <span class="entry-tags"><span class="tag">','</span>, <span class="tag">','</span></span>'); ?>
    </footer>
    <hr/>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
