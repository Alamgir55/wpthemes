<?php get_header(); ?>
    <div class="container content">
        <div class="main block">
            <?php if(have_posts()): ?>    
                <?php while(have_posts()): the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        <p class="meta">
                        Posted at
                         <?php the_time('F j, Y g:i a'); ?>
                         by 
                         <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                         </a> |
                         Posted In
                         <?php 
                            $categories = get_the_category();
                            $seperator = ", ";
                            $output = '';
                            foreach($categories as $category){
                                $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$seperator;
                            } 
                            echo trim($output, $seperator);
                         ?>    
                        </p>
                         <?php if(has_post_thumbnail()): ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <p><?php the_content(); ?></p>
                        
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
                <?php echo apautop('Sorry, no post were found'); ?>
            <?php endif; ?>
        </div>
        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, animi at. In assumenda possimus esse et deleniti voluptas vel voluptates.</p>
                <a href="button">More</a>
            </div>
        </div>
    </div>    
<?php get_footer(); ?>