<?php get_header(); ?>

		<section id="about">
			<h2><?=get_field('page-title');?></h2>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<?php
							while (have_posts()) {
								the_post();
								the_content();
							}
						?>
					</div>
				</div>
			</div>
		</section>

		<section id="news">
			<h2><?php the_field('news-title'); ?></h2>
			<div class="container">
				<div class="flex">
				<?php	$recent_posts = wp_get_recent_posts(['numberposts' => 2, 'post_type' => 'post']);
					foreach( $recent_posts as $recent ):
						$post_id = get_the_ID();
						if($recent["ID"] == $post_id) continue;
							?>
							<div class="item">
								<a href="<?php the_permalink($recent['ID']); ?>">
									<?=get_the_post_thumbnail($recent["ID"], '', array("class"=>"img-responsive")); ?>
									<p class="description"><?=$recent['post_title']; ?></p>
								</a>
							</div>
					<?php
					endforeach;
					?>
				</div>
			</div>
		</section>


		<?php include("brands.php") ?>


<?php get_footer(); ?>
