<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
} ?>
<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h3 class="title comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One Comment', 'comments title', 'wpsite' ) );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Comment ',
							'%1$s Comments',
							$comments_number,
							'comments title',
							'wpsite'
						),
						number_format_i18n( $comments_number )
					);
				}
			?>
		</h3>
		<ol class="commentlist media-area">
			<?php wp_list_comments( 'callback=wpsite_list_comments&end-callback=wpsite_list_comments_end' ); ?>
		</ol>
		<?php 
		the_comments_pagination( array(
			'prev_text' => '' . '<span class="screen-reader-text">' . esc_html__( 'Previous', 'wpsite' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'wpsite' ) . '</span>' . '',
		) );
	endif; // Check for have_comments().	
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wpsite' ); ?></p>
	<?php
	endif; ?>
	<div class="wpes-comment-form-wrap media media-post">
		<div class="media-body">
			<?php comment_form( wpsite_comment_form_args() ); ?>
		</div>
	</div> <!-- media-body -->
</div><!-- #comments -->