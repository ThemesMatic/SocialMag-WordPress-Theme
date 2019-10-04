<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           comments.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/

if ( post_password_required() )
	return; ?>
	
<div class="socialmag-comments">
<?php if ( have_comments()  ) : ?>
    <h3 id="comments" class="comments"><?php printf( _n( '%s comment', '%s comments', get_comments_number(), 'socialmag' ), number_format_i18n( get_comments_number() )); ?></h3>
        <ul class="commentlist matic">
            <?php wp_list_comments( array( 'callback' => 'socialmag_comment', 'style' => 'ul' ) ); ?>
        </ul><!-- /comment-list matic -->
        <?php endif; // have_comments() ?>
        
        <?php if ( comments_open() ) : ?>
        
         <?php $comment_args = array(
			'fields' => apply_filters(
				'comment_form_default_fields', array(
					'author' =>'<p class="comment-form-author">' . '<input id="author" class="comment-info" placeholder="' . esc_attr('Your Name', 'socialmag') . '" name="author" type="text" value="' .
						esc_attr( $commenter['comment_author'] ) . '" size="30" /><span class="required">*</span>
					</p>',
					
					'email'  => '<p class="comment-form-email">' . '<input id="email" class="comment-info" placeholder="' . esc_attr('yourname@example.com', 'socialmag') . '" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						'" size="30" /><span class="required">*</span>
					</p>',
					
					'url'    => '<p class="comment-form-url">' .
					 '<input id="url" class="comment-info" name="url" placeholder="' . esc_attr('Website or Social Network Link', 'socialmag') . '" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />
					</p>'
				)
			),
			'comment_field' => '<p class="comment-form-comment">' .
				'<label for="comment">' . esc_html__( 'Your Comment or Review:', 'socialmag' ) . '</label>' .
				'<textarea id="comment" class="comment-info" name="comment" placeholder="' . esc_attr('Express your thoughts, write a review or start a conversation about this article', 'socialmag') . '" cols="45" rows="8" aria-required="true"></textarea>
			</p>',
			
		    'comment_notes_after' => '',
		    'title_reply' => esc_html__('Comments & Reviews', 'socialmag'),
		);
		
		comment_form($comment_args); ?>
        
        <?php endif; // comments_open() ?>
        
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // comment navigation ?>
			<nav id="comments-nav" class="navigation">
				<div class="alignleft">
					<?php previous_comments_link( esc_html__( '&larr; Old Comments', 'socialmag' ) ); ?>
				</div>
				<div class="alignright">
					<?php next_comments_link( esc_html__( 'New Comments &rarr;', 'socialmag' ) ); ?>
				</div>
			</nav>
		<?php endif; // check for comment navigation ?>
        
	<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="comments-closed"><?php esc_html_e( 'Comments are closed.' , 'socialmag' ); ?></p>
	<?php endif; // comments_open() && get_comments_number() ?>
	
</div><!-- /socialmag-comments by ThemesMatic -->