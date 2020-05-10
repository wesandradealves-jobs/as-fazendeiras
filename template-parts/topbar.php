<div class="top-bar-section">
	<div class="container tbs">
		<div class="col-md-6 top_bar_left">
			<?php if(get_theme_mod('facebook')) : ?>
			<span class="shortcode_icon "><a target="_blank" href="<?php echo get_theme_mod('facebook'); ?>" style="color:#fff;font-size:15px;"><i class="fab fa-facebook"></i></a></span>
			<?php endif; ?> 
			<?php if(get_theme_mod('youtube')) : ?>
			<span class="shortcode_icon "><a target="_blank" href="<?php echo get_theme_mod('youtube'); ?>" style="color:#fff;font-size:15px;"><i class="fab fa-youtube"></i></a></span>
			<?php endif; ?> 
			<?php if(get_theme_mod('linkedin')) : ?>
			<span class="shortcode_icon "><a target="_blank" href="<?php echo get_theme_mod('linkedin'); ?>" style="color:#fff;font-size:15px;"><i class="fab fa-linkedin"></i></a></span>
			<?php endif; ?> 
			<?php if(get_theme_mod('instagram')) : ?>
			<span class="shortcode_icon "><a target="_blank" href="<?php echo get_theme_mod('instagram'); ?>" style="color:#fff;font-size:15px;"><i class="fab fa-instagram"></i></a></span>
			<?php endif; ?> 
			<?php if(get_theme_mod('twitter')) : ?>
			<span class="shortcode_icon "><a target="_blank" href="<?php echo get_theme_mod('twitter'); ?>" style="color:#fff;font-size:15px;"><i class="fab fa-twitter"></i></a></span>
			<?php endif; ?>   	
		</div>
			<div class="col-md-6 top_bar_right">
				<span style="color: #ffffff;">Telefone : <?php echo get_theme_mod('telefone'); ?> </span> | <span style="color: #ffffff;">E-mail: <?php echo get_theme_mod('email'); ?></span> </div>
			</div>
		</div>