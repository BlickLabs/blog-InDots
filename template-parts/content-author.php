<?php
/**
 * The template for displaying Author Bio
 *
 * @package Shoreditch
 */
?>

<div class="entry-author">
	<div class="author-avatar">
		<?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'shoreditch_author_bio_avatar_size', 60 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-heading">
		<h2 class="author-title indots-font-LibreBaskerville-regular"><?php esc_html_e( 'Publicado por', 'shoreditch' ); ?></h2>
		<h3 class="author-name indots-font-cabin-regular"><?php echo get_the_author(); ?></h3>
	</div><!-- .author-heading -->

	<p class="author-bio">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link indots-font-cabin-regular" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php printf( esc_html__( 'Ver todas las publicaciones de %s', 'shoreditch' ), get_the_author() ); ?>
		</a>
	</p><!-- .author-bio -->
</div><!-- .entry-auhtor -->
