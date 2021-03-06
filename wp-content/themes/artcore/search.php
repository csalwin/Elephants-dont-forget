<?php
/**
 * Default Search Template
 *
 * @package PlugFramework
 * @subpackage Artcore
 */

get_header(); ?>
<?php ptf_print_page_title(); ?> 
<section class="latest-news">
	<div class="container">
		<div class="row">
			<div class="col-md-8 blog-classic">
			    
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                	
                	<?php if( get_post_type( $post->ID ) == 'page' ) : ?>
                	    
                	    <div class="blog-post">
                                                
                            <div class="post-content clearfix">
                                <div class="post-date">
                                    <span class="day"><?php the_time('j'); ?></span>
                                    <span class="month"><?php echo substr( get_the_time('F'), 0, 3 ); ?></span>
                                </div>
                                <div class="right">
                                    
                                    <div class="post-header">                    
                                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <span class="post-meta"><?php the_time( get_option( 'date_format' ) ); ?></span>
                                    </div>
                                    
                                    <?php if ( strlen( get_the_excerpt()) > 0 ) : ?>
                                                    
                                        <?php the_excerpt(); ?>                        
                                        <p><a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Continue Reading', 'artcore' ); ?></a></p>
                                                                
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        
                        </div>
                        
                	<?php elseif( get_post_type( $post->ID ) == 'project' ) : ?>
                        
                        <div class="blog-post">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                              
                            <div class="post-thumb">
                                <?php the_post_thumbnail( 'ptf-blog-classic-thumb' ); ?>
                            </div>
                        
                        <?php endif; ?>
                        
                            <div class="post-content clearfix">
                                
                                <div class="post-date">
                                    <span class="day"><?php the_time('j'); ?></span>
                                    <span class="month"><?php echo substr( get_the_time('F'), 0, 3 ); ?></span>
                                </div>
                                
                                <div class="right">
                                    
                                    <div class="post-header">                    
                                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <span class="post-meta"><?php the_time( get_option( 'date_format' ) ); ?></span>
                                    </div>
                                    
                                    <?php if ( strlen( get_the_excerpt()) > 0 ) : ?>
                                                    
                                        <?php the_excerpt(); ?>                       
                                        <p><a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Continue Reading', 'artcore' ); ?></a></p>
                                                                
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        
                        </div>
                    
                    <?php else: ?>
                	    
                	    <div class="blog-post">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                              
                            <div class="post-thumb">
                                <?php the_post_thumbnail( 'ptf-blog-classic-thumb' ); ?>
                            </div>
                        
                        <?php endif; ?>
                        
                            <div class="post-content clearfix">
                                <div class="post-date">
                                    <span class="day"><?php the_time('j'); ?></span>
                                    <span class="month"><?php echo substr( get_the_time('F'), 0, 3 ); ?></span>
                                </div>
                                <div class="right">
                                    
                                    <div class="post-header">                    
                                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <span class="post-meta"><?php the_category(', ') ?>, <?php the_time( get_option( 'date_format' ) ); ?></span>
                                    </div>
                                    
                                    <?php if ( strlen( get_the_excerpt()) > 0 ) : ?>
                                                    
                                        <?php the_excerpt(); ?>                       
                                        <p><a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Continue Reading', 'artcore' ); ?></a></p>
                                                                
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        
                        </div>
                	    
                	<?php endif; ?>

				<?php endwhile; ?>
				
				<?php else: ?>
				    
				    <?php get_template_part( 'framework/includes/partials/content-none' ); ?>
				    
				<?php endif; ?>

				<?php ptf_blog_posts_nav(); ?>
				
				<div class="spacer"></div>
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</div>
</section>
<?php get_footer(); ?>