<?php if (!function_exists('enigma_info_page')) {
	function enigma_info_page() {
	$page1=add_theme_page(__('Welcome to Enigma', 'enigma'), __('About Enigma', 'enigma'), 'edit_theme_options', 'enigma', 'enigma_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'enigma_admin_info');
	}	
}
add_action('admin_menu', 'enigma_info_page');

function enigma_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/core/admin/bootstrap/css/bootstrap.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
	wp_enqueue_style('font-awesome',  get_template_directory_uri() .'/css/font-awesome-5.8.1/css/all.min.css');
	//JS
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js',get_template_directory_uri() .'/core/admin/bootstrap/js/bootstrap.js');
} 
if (!function_exists('enigma_display_theme_info_page')) {
	function enigma_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
	<div class="wrap elw-page-welcome about-wrap seting-page">

    <div class="col-md-12 settings">
         <div class=" col-md-9">
            <div class="col-md-12" style="padding:0">
				<?php $wl_th_info = wp_get_theme(); ?>
				<h2><span class="elw_shortcode_heading"><?php esc_html_e('Welcome to Enigma - Version','enigma'); ?><?php echo esc_html( $wl_th_info->get('Version') ); ?> </span></h2>
				<p style="font-size:19px;color: #555d66;"><?php esc_html_e('Enigma  is an outstanding superfine creation from weblizar, Enigma has become one of the most popular superfine multipurpose responsive theme with WPMLlovers by many professionals for its amazing capabilities and great designs. Enigma is multi function free WordPress theme with responsive and flexible light-weighted WooCommerce theme built by using core WordPress functions (BOOTSTRAP CSS framework) that works on All leading web browsers weather its mobile device or any other this makes it fast, simple and easy to customize! It has a promising design and powerful features with page layouts and sidebar widget that let your websites easy to design.','enigma'); ?> </p>
            </div>
			
		</div>
       
        <div class=" col-md-3">
			<div class="update_pro">
				<h3><?php esc_html_e(' Upgrade Pro','enigma'); ?> </h3>
				<a class="demo" href="<?php echo esc_url( __( 'https://weblizar.com/themes/enigma-premium/', 'enigma' ) ); ?>"><?php esc_html_e('Get Pro In $39','enigma'); ?></a>
				
			</div>
		</div>
	</div>

            <!-- Themes & Plugin -->
            <div class="col-md-12  product-main-cont">
                <ul class="nav nav-tabs product-tbs">
				    <li class="active"><a data-toggle="tab" href="#start"> <?php esc_html_e('Getting Started','enigma'); ?></a></li>
                    <li><a data-toggle="tab" href="#themesd"><?php esc_html_e(' Enigma premium','enigma'); ?> </a></li>
					<li><a data-toggle="tab" href="#freepro"> <?php esc_html_e('Free Vs Pro','enigma'); ?></a></li>
					
                </ul>

                <div class="tab-content">
				
				
				<div id="start" class="tab-pane fade in active">
                        <div class="space  theme active">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-7 col-md-7 p_plugin_pic">
                                    <h4> <?php esc_html_e('Step 1: Create a Homepage','enigma'); ?></h4>
									<ol>
									<li> <?php esc_html_e('Create a new page -> home and publish.','enigma'); ?> </li>
									<li> <?php esc_html_e('Go to Appearance -> Customize > Homepage Settings -> select A static page option.','enigma'); ?> </li>
									<li> <?php esc_html_e('In "Homepage", select the page that you created as a home page.','enigma'); ?> </li>
									<li> <?php esc_html_e('Now Go to Customize -> Theme Options -> Theme General Options.','enigma'); ?> </li>
									<li> <?php esc_html_e('select Show Front Page option','enigma'); ?> </li>
									<li> <?php esc_html_e('Save changes','enigma'); ?> </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo admin_url('/post-new.php?post_type=page') ?>"><?php esc_html_e('Add New Page','enigma'); ?></a>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                         <div class="img-thumbnail">
										<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" class="img-responsive" alt="img"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-12 p_plugin_pic">
                                    <h4><?php esc_html_e('Step 2: Customizer Options Panel','enigma'); ?> </h4>
									<ol>
									<li> <?php esc_html_e('Go to Appearance -> Customize > Theme Options','enigma'); ?> </li>
									<li> <?php esc_html_e('Theme General Options - Theme General Options use for logo width and height, and add custom css.','enigma'); ?> </li>
									<li> <?php esc_html_e('Theme Slider Options - It is use to add slider image, title, description and enable/disable slider on homepage.','enigma'); ?> </li>
									<li> <?php esc_html_e('Service Options - It is use to add service icon, title, description and enable/disable service on homepage.','enigma'); ?> </li>
									<li> <?php esc_html_e('Portfolio Options - It is use to add portfolio image, title, link and enable/disable portfolio on homepage.','enigma'); ?> </li>
									<li> <?php esc_html_e('Home Blog Options - Use to add blog title, description, blog excerpt length and enable/disable blog section on homepage and select category.','enigma'); ?> </li>
									<li> <?php esc_html_e('Typography Settings - use to change the font of the site. ','enigma'); ?> </li>
									<li> <?php esc_html_e('Social Options - enable/disable social option on header and footer, add social links, phone number, address and Email-ID.','enigma'); ?> </li>
									<li> <?php esc_html_e('Footer Call-Out Options - use to add Footer callout Title, Footer callout Button Text, Footer callout Button Link and Footer callout Icon ','enigma'); ?></li>
									<li> <?php esc_html_e('Footer Options - Use to add Customization text, developed by text and developed by link. ','enigma'); ?></li>
									<li> <?php esc_html_e('Home Page Layout Option - use for front page section order and box layout option. ','enigma'); ?></li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php esc_html_e('Go to Customizer','enigma'); ?></a>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p><?php esc_html_e('Visit Our Latest Pro Themes & See Demos','enigma'); ?></p>
								<p style="font-size: 17px !important;"><?php esc_html_e('We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.','enigma'); ?></p>
								<a href="<?php echo esc_url( __( 'https://weblizar.com/themes/', 'enigma' ) ); ?>"><?php esc_html_e('Visit Themes','enigma'); ?></a>
                            </div>	
                        </div>
                    </div>
				
				<!-- end 1st tab -->
				
				
                    <div id="themesd" class="tab-pane fade">
                        <div class="space theme">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
										<img src="<?php echo get_template_directory_uri(); ?>/images/EP.png" class="img-responsive" alt="img"/>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <div>
                                            <p><strong><?php esc_html_e('Description:','enigma'); ?> </strong><?php esc_html_e('Enigma is an elegant versatile theme that gives you the tools you need to express who you are and what your business does in a professional and coherent manner. To help you get started with your website we have made sure to include 4 homepage layouts 10 unique heros and some 50+ content blocks that you can use to tailor Enigma to your needs and preferences.','enigma'); ?></p>
                                        </div>
										<p><strong><?php esc_html_e('Tags:' ,'enigma'); ?></strong><?php esc_html_e('clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant.','enigma'); ?></p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price1">
                                        <span class="currency"><?php esc_html_e('USD','enigma'); ?></span>
                                        <span class="price-number">$<span>39</span>
										
										</span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( __( 'https://weblizar.com/themes/enigma-premium/', 'enigma' ) ); ?>"><?php esc_html_e('Detail','enigma'); ?></a>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/492X-CORPO.jpg" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="<?php echo esc_url( __( 'https://weblizar.com/themes/eatos-premium-restaurant-theme/', 'enigma' ) ); ?>"><?php esc_html_e('Eatos Premium','enigma'); ?></a></h4>
										</div>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Responsive-Beauty.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="<?php echo esc_url( __( 'https://weblizar.com/themes/beautyspa-premium/', 'enigma' ) ); ?>"><?php esc_html_e('Beautyspa Premium','enigma'); ?></a></h4>
										</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/healthcare1.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="<?php echo esc_url( __( 'https://weblizar.com/themes/healthcare/', 'enigma' ) ); ?>"><?php esc_html_e('Healthcare Premium','enigma'); ?></a></h4>
										</div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p><?php esc_html_e('Visit Our Latest Pro Themes & See Demos','enigma'); ?></p>
								<p style="font-size: 17px !important;"><?php esc_html_e('We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.','enigma'); ?></p>
								<a href="<?php echo esc_url( __( 'https://weblizar.com/themes/', 'enigma' ) ); ?>"><?php esc_html_e('Visit Themes','enigma'); ?></a>
                            </div>	
                        </div>
                    </div>
					
					<div id="freepro" class="tab-pane fade">
							<div class=" p_head theme">
                                <!--<h1 class="section-title"><?php esc_html_e('Weblizar Offers','enigma'); ?></h1>-->
                            </div>
						<div class="row p_plugin blog_gallery">		
						<div class="columns">
						  <ul class="price">
							<li class="header" style="background:##e91e63"><?php esc_html_e('Enigma','enigma'); ?></li>
							<li class="grey"><?php esc_html_e('Features','enigma'); ?></li>
							<li><?php esc_html_e('Front Page','enigma'); ?></li>
							<li><?php esc_html_e('Parallax Design','enigma'); ?></li>
							<li><?php esc_html_e('Theme Option Panel','enigma'); ?></li>
							<li><?php esc_html_e('Unlimited Color Skins','enigma'); ?></li>
							<li><?php esc_html_e('Mega Menu Support','enigma'); ?></li>
							<li><?php esc_html_e('Multilingual','enigma'); ?></li>
							<li><?php esc_html_e('10 Page Layout','enigma'); ?></li>
							<li><?php esc_html_e('Contact Page Template','enigma'); ?></li>
							<li><?php esc_html_e('About Us Page Template','enigma'); ?></li>
							<li><?php esc_html_e('Custom Shortcodes','enigma'); ?></li>
						  </ul>
						</div>
						
						 <div class="columns">
						  <ul class="price">
							<li class="header"><?php esc_html_e('Free','enigma'); ?></li>
							<li class="grey">$ 00</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
						  </ul>
						</div>

						<div class="columns">
						  <ul class="price">
							<li class="header" style="background-color:##e91e63"><?php esc_html_e('Enigma Pro','enigma'); ?></li>
							<li class="grey">$ 39</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li class="grey"><a href="<?php echo esc_url( __( 'http://demo.weblizar.com/enigma-premium/enigma-select/', 'enigma' ) ); ?>" class="pro_btn"><?php esc_html_e('Visit Demo','enigma'); ?></a></li>
						  </ul>
						</div>
						</div>
					</div>	
                </div>
            </div>            
<?php
	}
}
?>