<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<?php
$banner_sub_title = get_field('banner_sub_title');
$image_icon = get_field('image_icon');
$banner_title = get_field('banner_title');
$banner_description = get_field('banner_description');
$currency_title = get_field('currency_title');
$banner_btn = get_field('banner_btn');
?>
<?php if ($banner_sub_title || $image_icon || $banner_title || $banner_description || $currency_title || $banner_btn): ?>
	<section class="banner-section" id="banner-section">
		<div class="banner-slider">
			<?php while (have_rows("banner_image_content")):
				the_row();
				$image_title = get_sub_field('image_title');
				?>
				<?php if ($image_title): ?>
					<div class="banner-image d-flex">
						<img src="<?php echo $image_title['url']; ?>" alt="<?php echo $image_title['alt']; ?>">
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
		<div class="banner-row">
			<div class="banner-content wow fadeInRight" data-wow-delay="0.8s">
				<div class="banner-main-content">
					<div class="banner-address d-flex align-items-center">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<?php if ($banner_sub_title): ?>
							<p>
								<?php echo $banner_sub_title; ?>
							</p>
						<?php endif; ?>
					</div>
					<div class="sale-div">
						<?php if ($image_icon): ?>
							<img src="<?php echo $image_icon['url']; ?>" alt="<?php echo $image_icon['alt']; ?>">
						<?php endif; ?>
					</div>
					<?php if ($banner_title): ?>
						<h1>
							<?php echo $banner_title; ?>
						</h1>
					<?php endif; ?>
					<?php if ($banner_description): ?>
						<p>
							<?php echo $banner_description; ?>
						</p>
					<?php endif; ?>
				</div>
				<div class="currency-btn d-flex align-items-center justify-space">
					<?php if ($currency_title): ?>
						<p>
							<?php echo $currency_title; ?>
						</p>
					<?php endif; ?>
					<a class="btn" href="<?php echo $banner_btn['url']; ?>" target="<?php echo $banner_btn['target']; ?>">
						<?php echo $banner_btn['title']; ?>
					</a>
				</div>
			</div>
		</div>

	</section>
<?php endif; ?>

<?php
$features_sub_title = get_field('features_sub_title');
$features_title = get_field('features_title');
$features_description = get_field('features_description');
$feature_btn = get_field('feature_btn');
?>
<?php if ($features_sub_title || $features_title || $features_description || $feature_btn): ?>
	<section class="features-setion" id="features-setion">
		<div class="container">
			<div class="feature-row d-flex f-wrap justify-space">
				<div class="f-left-col wow fadeInLeft" data-wow-delay="0.8s">
					<div class="left-block-content">
						<?php if ($features_sub_title): ?>
							<span>
								<?php echo $features_sub_title; ?>
							</span>
						<?php endif; ?>
						<?php if ($features_title): ?>
							<h2>
								<?php echo $features_title; ?>
							</h2>
						<?php endif; ?>
						<?php if ($features_description): ?>
							<p>
								<?php echo $features_description; ?>
							</p>
						<?php endif; ?>
						<?php if ($feature_btn): ?>
							<a class="btn" href="<?php echo $feature_btn['url']; ?>"
								target="<?php echo $feature_btn['target']; ?>">
								<?php echo $feature_btn['title']; ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="f-right-col d-flex f-wrap wow fadeInRight" data-wow-delay="0.9s">
					<?php while (have_rows('features_content')):
						the_row();
						$f_image_icon = get_sub_field('f_image_icon');
						$f_tile = get_sub_field('f_tile');
						$f_description = get_sub_field('f_description');
						?>
						<?php if ($f_image_icon || $f_tile || $f_description): ?>
							<div class="right-block-content">
								<div class="f-image">
									<img src="<?php echo $f_image_icon['url']; ?>" alt="<?php echo $f_image_icon['alt']; ?>">
								</div>
								<?php if ($f_image_icon): ?>
									<h3>
										<?php echo $f_tile; ?>
									</h3>
								<?php endif; ?>
								<?php if ($f_description): ?>
									<p>
										<?php echo $f_description; ?>
									</p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$counter_image = get_field('counter_image');
?>
<?php if ($counter_image): ?>
	<section class="counter-setion" id="about-section">
		<div class="counter-img">
			<?php if ($counter_image): ?>
				<img src="<?php echo $counter_image['url'] ?>" alt="<?php echo $counter_image['alt'] ?>">
			<?php endif; ?>
		</div>
		<div class="counter-div" id="counter">
			<div class="container">
				<div class="counter-row d-flex align-items-center f-wrap">
					<?php while (have_rows('counter_reapeter')):
						the_row();
						$count_text_title = get_sub_field('count_text_title');
						$counter_text = get_sub_field('counter_text');
						?>
						<?php if ($count_text_title || $counter_text): ?>
							<div class="c-block d-flex align-items-center f-direction description justify-center wow fadeInUp"
								data-wow-delay="0.8s">
								<?php if ($count_text_title): ?>
									<h2 class="counter" data-number="<?php echo $count_text_title; ?>">
									</h2>
								<?php endif; ?>
								<?php if ($counter_text): ?>
									<span>
										<?php echo $counter_text; ?>
									</span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$amenities_title = get_field('amenities_title');
$amenities_description = get_field('amenities_description');
?>
<?php if ($amenities_title || $amenities_description): ?>
	<section class="amenities-section" id="amenities-section">
		<div class="container">
			<div class="ame-element-row d-flex f-wrap">
				<div class="image-slider gallery amenities-col">
					<?php while (have_rows('image_slider')):
						the_row();
						$image_element = get_sub_field('image_element');
						?>
						<?php if ($image_element): ?>
							<a href="<?php echo $image_element['url']; ?>" class="ame-image-content wow fadeInLeft"
								data-wow-delay="0.5s" data-wow-duration="3s">
								<?php if ($image_element): ?>
									<img src="<?php echo $image_element['url']; ?>" alt="<?php echo $image_element['alt']; ?>">
								<?php endif; ?>
							</a>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<div class="right-amenities-content amenities-col wow fadeInRight" data-wow-delay="0.3s">
					<div class="amenities-text-block">
						<?php if ($amenities_title): ?>
							<h2>
								<?php echo $amenities_title; ?>
							</h2>
							<?php if ($amenities_description): ?>
								<p>
									<?php echo $amenities_description; ?>
								</p>
							<?php endif; ?>
						<?php endif; ?>
					</div>

					<ul class="list-menu d-flex align-items-center wow fadeInUp" data-wow-duration="2s">
						<?php while (have_rows('list_menu')):
							the_row();
							$check_mark = get_sub_field('check_mark');
							$list_title = get_sub_field('list_title');
							?>
							<?php if ($check_mark || $list_title): ?>
								<li>
									<span><img src="<?php echo $check_mark['url']; ?>"
											alt="<?php echo $check_mark['alt']; ?>"></span>
									<?php echo $list_title; ?>
								</li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$g_photo_title = get_field('g_photo_title');
$g_photo_description = get_field('g_photo_description');
?>
<?php if ($g_photo_title || $g_photo_description): ?>
	<section class="galler-section" id="galler-section">
		<div class="galler-row">
			<div class="gallery-text-block wow fadeInDown" data-wow-duration="3s">
				<?php if ($g_photo_title): ?>
					<h2>
						<?php echo $g_photo_title; ?>
					</h2>
				<?php endif; ?>
				<?php if ($g_photo_description): ?>
					<p>
						<?php echo $g_photo_description; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="image-content-list gallery d-flex f-wrap">
				<?php while (have_rows('gallery_photo_list')):
					the_row();
					$g_image_title = get_sub_field('g_image_title');
					?>
					<?php if ($g_image_title): ?>
						<a href="<?php echo $g_image_title['url']; ?>" class="img-block">
							<img src="<?php echo $g_image_title['url']; ?>" alt="<?php echo $g_image_title['alt']; ?>">
						</a>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$plans_title = get_field('plans_title');
$plans_description = get_field('plans_description');
$tab_title = get_field('tab_title');
$floor_exe_title = get_field('floor_exe_title');
?>
<?php if ($plans_title || $plans_description || $tab_title || $floor_exe_title): ?>
	<section class="floor-plans-section" id="floor-plans-section">
		<div class="floor-text-block wow fadeInDown" data-wow-duration="3s">
			<?php if ($plans_title): ?>
				<h2>
					<?php echo $plans_title; ?>
				</h2>
			<?php endif; ?>
			<?php if ($plans_description): ?>
				<p>
					<?php echo $plans_description; ?>
				</p>
			<?php endif; ?>
		</div>
		<div class="container">
			<div class="plans-row d-flex align-items-center">
				<div class="plans-image-slider gallery wow fadeInLeft" data-wow-duration="4s">
					<?php while (have_rows('floor_plans_image_content')):
						the_row();
						$plans_image_list = get_sub_field('plans_image_list');
						?>
						<?php if ($plans_image_list): ?>
							<a href="<?php echo $plans_image_list['url']; ?>" class="plans-img-block">
								<img src="<?php echo $plans_image_list['url']; ?>" alt="<?php echo $plans_image_list['alt']; ?>">
							</a>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<div class="tab-main-block d-flex wow fadeInRight" data-wow-duration="5s">
					<div class="tab-wrapper">
						<div class="tab-title">
							<?php if ($tab_title): ?>
								<h4>
									<?php echo $tab_title; ?>
								</h4>
							<?php endif; ?>
						</div>
						<div class="tabs-nav">
							<ul class="tabs-list d-flex align-items-baseline">
								<?php $counter = 0;
								while (have_rows('tab_content_list')):
									the_row();
									$tab_text_title = get_sub_field('tab_text_title');
									$counter++;
									?>

									<?php if ($tab_text_title): ?>
										<li><a href="#tab-<?php echo $counter; ?>">
												<?php echo $tab_text_title; ?>
											</a></li>
									<?php endif; ?>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
					<div class="exelent-text-main-block">
						<?php $counter1 = 0;
						while (have_rows('right_content_block')):
							the_row();
							$content_editor = get_sub_field('content_editor');
							$counter1++;
							?>
							<?php if ($content_editor): ?>
								<div class="tab-content-item" id="tab-<?php echo $counter1; ?>">
									<?php echo $content_editor; ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$find_neighbur_title = get_field('find_neighbur_title');
$find_neighbur_description = get_field('find_neighbur_description');
?>
<?php if ($find_neighbur_title || $find_neighbur_description): ?>
	<section class="find-neighbor-section">
		<div class="container">
			<div class="neighbr-main-block wow fadeInDown" data-wow-delay=".5s">
				<?php if ($find_neighbur_title): ?>
					<h2>
						<?php echo $find_neighbur_title; ?>
					</h2>
					<?php if ($find_neighbur_description): ?>
						<p>
							<?php echo $find_neighbur_description; ?>
						</p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="neighbor-row d-flex align-items-center">
				<div class="neighbr-left-block wow fadeInLeft" data-wow-delay=".7s">
					<ul class="main-content">
						<?php while (have_rows('best_places_arround')):
							the_row();
							$find_best_icon = get_sub_field('find_best_icon');
							$best_place_name = get_sub_field('best_place_name');
							$distance_title = get_sub_field('distance_title');
							?>
							<?php if ($find_best_icon || $best_place_name || $distance_title): ?>
							<?php endif; ?>
							<li><span><span>
										<?php echo $find_best_icon; ?>
									</span>
									<?php if ($best_place_name): ?>
										<span class="best-place">
											<?php echo $best_place_name; ?>
										</span>
									<?php endif; ?>
								</span>
								<span class="distance-name">
									<?php echo $distance_title; ?>
								</span>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="neighbor-right-block wow fadeInRight" data-wow-delay=".5s">
					<div class="best-image-slider gallery">
						<?php while (have_rows('find_best_image')):
							the_row();
							$best_content_image = get_sub_field('best_content_image');
							?>
							<?php if ($best_content_image): ?>
								<a href="<?php echo $best_content_image['url']; ?>" class="best-image-block">
									<img src="<?php echo $best_content_image['url']; ?>"
										alt="<?php echo $best_content_image['alt']; ?>">
							</a>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$property_bg = get_field('property_bg');
$property_title = get_field('property_title');
$property_description = get_field('property_description');
$p_image_title = get_field('p_image_title');
$p_sub_title = get_field('p_sub_title');
$p_title = get_field('p_title');
$p_description = get_field('p_description');
$property_btn = get_field('property_btn');
$image_video_play = get_field('image_video_play');

?>
<?php if ($property_bg || $property_title || $property_description || $p_image_title || $p_sub_title || $p_title || $p_description || $property_btn || $image_video_play): ?>
	<section class="property-section" id="property-section">
		<div class="container">
			<div class="property-text-block">
				<?php if ($property_title): ?>
					<h2>
						<?php echo $property_title; ?>
					</h2>
				<?php endif; ?>
				<?php if ($property_description): ?>
					<p>
						<?php echo $property_description; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="property-row d-flex">
				<div class="property-left-block p-col wow fadeInLeft animated" data-wow-duration="3s">
					<div class="p-img-block">
						<i class="icon-box"><i class="fa fa-play" aria-hidden="true"></i></i>
						<?php if ($p_image_title): ?>
							<img src="<?php echo $p_image_title['url']; ?>" alt="<?php echo $p_image_title['alt']; ?>">
						<?php endif; ?>
					</div>
				</div>
				<div class="property-right-block p-col wow fadeInRight animated" data-wow-duration="6s">
					<div class="p-right-text-block">
						<?php if ($p_sub_title): ?>
							<span>
								<?php echo $p_sub_title; ?>
							</span>
						<?php endif; ?>
						<?php if ($p_title): ?>
							<h2>
								<?php echo $p_title; ?>
							</h2>
						<?php endif; ?>
						<?php if ($p_description): ?>
							<p>
								<?php echo $p_description; ?>
							</p>
						<?php endif; ?>
					</div>
					<ul class="p-list-menu">
						<?php while (have_rows('p_left_content_list')):
							the_row();
							$left_icon_block = get_sub_field('left_icon_block');
							$p_list_mnenu = get_sub_field('p_list_mnenu');
							?>
							<?php if ($left_icon_block || $p_list_mnenu): ?>
								<li class="d-flex">
									<?php echo $left_icon_block; ?>
									<span>
										<?php echo $p_list_mnenu; ?>
									</span>
								</li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
					<div class="p-btn">
						<a class="btn" href="<?php echo $property_btn['url']; ?>"
							target="<?php echo $property_btn['target']; ?>">
							<?php echo $property_btn['title']; ?>
						</a>
					</div>
				</div>
			</div>
		</div>

		<?php if ($image_video_play): ?>
			<div class="video-modal">
				<div class="modal-wrapper">
					<div class="modal-content">
						<button class="close-btn">x</button>
						<div class="video-box">
							<?php echo $image_video_play; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

	</section>
<?php endif; ?>

<?php
$location_title = get_field('location_title');
$location_description = get_field('location_description');
$map_location = get_field('map_location');
$visit_title = get_field('visit_title');
$visit_description = get_field('visit_description');
?>
<?php if ($location_title || $location_description || $map_location || $visit_title || $visit_description): ?>
	<section class="location-section" id="location-section">
		<div class="container">
			<div class="location-text-block">
				<?php if ($location_title): ?>
					<h2>
						<?php echo $location_title; ?>
					</h2>
				<?php endif; ?>
				<?php if ($location_description): ?>
					<p>
						<?php echo $location_description; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="location-row d-flex align-items-center">
				<div class="location-left-block">
					<?php if ($map_location): ?>
						<div class="map-box">
							<?php echo $map_location; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="right-location-block">
					<?php if ($visit_title): ?>
						<h4>
							<?php echo $visit_title; ?>
						</h4>
					<?php endif; ?>
					<?php if ($visit_description): ?>
						<p>
							<?php echo $visit_description; ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$request_title = get_field('request_title');
$request_description = get_field('request_description');
$staf_contect_item = get_field('staf_contect_item');
$agent_name = get_field('agent_name');
$agent_degination = get_field('agent_degination');
$agent_mail = get_field('agent_mail');
$agent_number = get_field('agent_number');
$agent_addres = get_field('agent_addres');
$rehl_agent_property_contect = get_field('rehl_agent_property_contect');
$agent_schedule = get_field('agent_schedule');
$request_form = get_field('request_form');
?>
<?php if (
	$staf_contect_item || $agent_name || $agent_degination || $agent_mail
	|| $agent_number || $agent_addres || $rehl_agent_property_contect || $agent_schedule || $request_form
): ?>
	<section class="Request-section" id="Request-section">
		<div class="container">
			<div class="request-main-block">
				<?php if ($request_title): ?>
					<h2>
						<?php echo $request_title; ?>
					</h2>
				<?php endif; ?>
				<?php if ($request_description): ?>
					<p>
						<?php echo $request_description; ?>
					</p>
				<?php endif; ?>
			</div>

			<?php if ($request_form): ?>
				<div class="form-block">
					<?php echo $request_form; ?>
				</div>
			<?php endif; ?>

			<div class="rehl-staf-content-mian-block d-flex justify-space align-items-center f-wrap wow fadeInDown animated"
				data-wow-duration="4s">
				<div class="rehl-stf-contect-col d-flex align-items-center">
					<div class="agent-image">
						<img src="<?php echo $staf_contect_item['url']; ?>" alt="<?php echo $staf_contect_item['alt']; ?>">
					</div>
					<div class="agent-name-block">
						<h3>
							<?php echo $agent_name; ?>
						</h3>
						<span>
							<?php echo $agent_degination; ?>
						</span>
					</div>
				</div>
				<div class="rehl-stf-contect-col">
					<a class="agent-mail" href="mailto:<?php echo $agent_mail['url']; ?>"
						target="<?php echo $agent_mail['target']; ?>">
						<?php echo $agent_mail['title']; ?>
					</a>
					<a class="agent-number" href="tel:<?php echo $agent_number['url']; ?>"
						target="<?php echo $agent_number['target']; ?>">
						<?php echo $agent_number['title']; ?>
					</a>
				</div>
				<div class="rehl-stf-contect-col">
					<p>
						<?php echo $agent_addres; ?>
					</p>
				</div>
				<div class="rehl-stf-contect-col">
					<span>
						<?php echo $rehl_agent_property_contect; ?>
					</span>
					<a class="agent-schedule" href="<?php echo $agent_schedule['url']; ?>"
						target="<?php echo $agent_schedule['target']; ?>">
						<?php echo $agent_schedule['title']; ?>
					</a>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>


<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post_status' => 'publish'
);
$our_post = new WP_Query($args);
?>

<?php
$news_title = get_field('news_title');
$news_description = get_field('news_description');
?>
<?php if ($news_title || $news_description): ?>
	<section class="news-section" id="post">
		<div class="container">
			<div class="news-text-block wow fadeInDown animated" data-wow-duration="2s">
				<h2>
					<?php echo $news_title; ?>
				</h2>
				<p>
					<?php echo $news_description; ?>
				</p>
			</div>
			<div class="main-post-block d-flex">
				<?php if ($our_post->have_posts()): ?>
					<?php while ($our_post->have_posts()):
						$our_post->the_post(); ?>
						<div class="blog-list wow fadeInRight animated" data-wow-duration="3s">
							<?php if (has_post_thumbnail()) {
								$postImageId = get_post_thumbnail_id($post);
								$postImage = acf_field_attachment_image($postImageId, 'full');
								?>
								<div class="img-cover">
									<a href="<?php echo get_permalink(); ?>">
										<?php echo $postImage; ?>
									</a>
								</div>
							<?php } ?>
							<div class="post-content-info">
								<div class="category-block">
									<span>In
										<a href="<?php echo get_permalink(); ?>">
											<?php foreach ((get_the_category()) as $category) {
												echo $category->cat_name . ' ';
											} ?>
										</a>
									</span>
								</div>
								<h4>
									<a href="<?php echo get_permalink(); ?>">
										<?php echo get_the_title(); ?>
									</a>
								</h4>
								<p>
									<?php echo get_the_excerpt(); ?>
								</p>
								<a class="text" href="<?php echo get_permalink(); ?>"></a>
							</div>
						</div>
					<?php endwhile;
					wp_reset_query(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>


<?php get_footer(); ?>