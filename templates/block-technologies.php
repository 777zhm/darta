<section>
	<div class="technologies_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-9 col-sm-11">
					<div class="technologies_header text-center">
						<h2 class="section_heading"><?php the_field('heading'); ?></h2>
						<p><?php the_field('subheading'); ?></p>
						<div class="title_dot"></div>
					</div>
				</div>
			</div>
			<?php if( have_rows('technologies') ): ?>
			<div class="row justify-content-around">
				<?php while( have_rows('technologies') ): the_row(); 
					// vars
					$logotype = get_sub_field('logotype');
					$logotype_gray = get_sub_field('logotype_gray');
				?>
				<div class="col-md-2 col-4 technology_item_box">
					<div class="technology_item">
						<?php if($logotype): ?>
						<div class="normal_img">
							<img class="img img-fluid" src="<?php echo $logotype['url']; ?>" alt="<?php echo $logotype['alt']; ?>" />
						</div>
						<?php endif; ?>
						<?php if($logotype_gray): ?> 
						<div class="grey_img">
							<img class="img img-fluid" src="<?php echo $logotype_gray['url']; ?>" alt="<?php echo $logotype_gray['alt'] ?>" >
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>	
		</div>
	</div>
</section>