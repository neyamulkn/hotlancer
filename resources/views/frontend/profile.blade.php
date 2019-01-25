@extends('frontend.layouts.master')
@section('title', 'profile')

@section('css')
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="{{asset('/allscript')}}/css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="{{asset('/allscript')}}/css/vendor/tooltipster.css">
	<link rel="stylesheet" href="{{asset('/allscript')}}/css/vendor/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('/allscript')}}/css/c.css">
	<style type="text/css">
		
	.exeheader{
		background: #fff;
		border-top: 1px solid #ccc;
		margin: 0px auto;
		    margin-bottom: 0px;
		width: 97.5%;
		margin-bottom: -5px;
		padding: 10px;
		font-weight: bolder;
		box-shadow: 0 0 13px #ccc;
	}
	</style>
@endsection
<!-- MAIN MENU -->
@section('menubar')
	<div class="main-menu-wrap">
		<div class="menu-bar">
			<nav>
				<ul class="main-menu">
					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="index.html">Home</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="how-to-shop.html">How to shop</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="products.html">Products</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="services.html">Services</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="shop-gridview-v1.html">Online goods</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item sub">
						<a href="#">
							Features
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
						<div class="content-dropdown">
							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">HOTLancer.com</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="index.html">Homepage V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="home-v2.html">Homepage V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="itemview-versions.html">Item View Versions</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-gridview-v1.html">Shop Grid View V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-gridview-v2.html">Shop Grid View V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-listview-v1.html">Shop List View V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-listview-v2.html">
											Shop List View V2
											<!-- PIN -->
											<span class="pin primary">hot</span>
											<!-- /PIN -->
										</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<li class="feature-list-item">
										<a href="author-profile.html">Profile Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->

								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="blog-v1.html">Blog Page V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="blog-v2.html">Blog Page V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="open-post.html">Open Post</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="forum.html">Forum Board</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="subforum.html">Subforum</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="open-topic.html">Open Topic</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="login-register.html">Login and Register</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="menu-dropdowns.html">Menu and Dropdowns</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->

							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">Product Pages</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="item-v1.html">Item Page V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="item-v2.html">
											Item Page V2
											<!-- PIN -->
											<span class="pin secondary">new</span>
											<!-- /PIN -->
										</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="product-page.html">Product Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="auction-page.html">Auction Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="service-page.html">Service Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="favourites.html">Favourite Products Grid View</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="favourites-listview.html">Favourite Products List View</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="alerts-notifications.html">
											Alerts &amp; Notifications
											<!-- PIN -->
											<span class="pin violet">new</span>
											<!-- /PIN -->
										</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->

							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">Dashboard</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-settings.html">Account Settings</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-statistics.html">Statistics Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-statement.html">Sales Statement</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-inbox.html">Inbox Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-openmessage.html">Open Message</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-uploaditem.html">Upload Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->

							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">Gamification</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="community-badges.html">Author Badges Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="badges.html">All Badges (Big and Small)</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="flag-badges.html">Flag Badges (Big and Small)</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="badges-boxes.html">Badge Boxes Versions</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="author-badges.html">Public Author Badges</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->
						</div>
					</li>
					<!-- /MENU ITEM -->
				</ul>
			</nav>
			<form class="search-form">
				<input type="text" class="rounded" name="search" id="search_products" placeholder="Search products here...">
				<input type="image" src="{{asset('/allscript')}}/images/search-icon.png" alt="search-icon">
			</form>
		</div>
	</div>
@endsection
	<!-- /MAIN MENU -->

@section('content')

	<!-- AUTHOR PROFILE BANNER -->
	<div class="author-profile-banner"></div>
	<!-- /AUTHOR PROFILE BANNER -->

	<!-- AUTHOR PROFILE META -->
	<div class="author-profile-meta-wrap">
		<div class="author-profile-meta">
			<!-- AUTHOR PROFILE INFO -->
			<div class="author-profile-info">
				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Member Since:</p>
					<p>{{ \Carbon\Carbon::parse($userinfo->created_at)->format('F d, Y')}}</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Total Sales:</p>
					<p>820</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Location:</p>
					<p>{{$userinfo->country}}</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<a href="#" class="button mid dark spaced">Add to <span class="primary">Followers</span></a>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->
			</div>
			<!-- /AUTHOR PROFILE INFO -->
		</div>
	</div>
	<!-- /AUTHOR PROFILE META -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section overflowable">
			<!-- SIDEBAR -->
			<div class="sidebar left author-profile">
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-bio">
					<!-- USER AVATAR -->
					<a href="user-profile.html" class="user-avatar-wrap medium">
						<figure class="user-avatar medium">
							<img src="{{asset('/allscript')}}/images/avatars/avatar_09.jpg" alt="">
						</figure>
					</a>
					<!-- /USER AVATAR -->
					<p class="text-header">{{ $userinfo->username}}</p>
					<p class="text-oneline">Super Samurai Developers<br>Los Angeles, Usa</p>
					<!-- SHARE LINKS -->
					<ul class="share-links">
						<li><a href="#" class="fb"></a></li>
						<li><a href="#" class="twt"></a></li>
						<li><a href="#" class="db"></a></li>
					</ul>
					<!-- /SHARE LINKS -->
					<a href="#" class="button mid dark spaced">Add to <span class="primary">Followers</span></a>
					<a href="#" class="button mid dark-light">Send a Private Message</a>
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- DROPDOWN -->
				<ul class="dropdown hover-effect">
					<li class="dropdown-item">
						<a href="author-profile.html">Profile Page</a>
					</li>
					<li class="dropdown-item">
						<a href="author-profile-items.html">Author's Items (103)</a>
					</li>
					<li class="dropdown-item">
						<a href="author-profile-messages.html">Message Board</a>
					</li>
					<li class="dropdown-item">
						<a href="author-profile-reviews.html">Customer Reviews (42)</a>
					</li>
					<li class="dropdown-item">
						<a href="author-profile-followers.html">Followers (5)</a>
					</li>
					<li class="dropdown-item">
						<a href="author-profile-following.html">Following (2)</a>
					</li>
					<li class="dropdown-item active">
						<a href="author-badges.html">Author Badges (16)</a>
					</li>
				</ul>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-reputation full">
					<h4>Author's Reputation</h4>
					<hr class="line-separator">
					<!-- PIE CHART -->
					<div class="pie-chart pie-chart1">
						<p class="text-header percent">86<span>%</span></p>
						<p class="text-header percent-info">Recommended</p>
						<!-- RATING -->
						<ul class="rating">
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item empty">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
						</ul>
						<!-- /RATING -->
					</div>
					<!-- /PIE CHART -->
					<a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
				</div>
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<div class="about1">
					<div class="about2">
						<p class="text-header">{{ $userinfo->userinfo->user_title}}</p><br/>
						<hr class="line-separator">
						<p class="aboutp">{{ $userinfo->userinfo->user_description}}</p>
					</div>
					<div class="about3">
						<div class="badges-showcase-item column">
							<p class="text-header">${{ $userinfo->hourly_rate}} Hourly rate</p><br/>
							<hr class="line-separator">
							<br/>
							<figure class="badge big liquid">
								<img src="{{asset('/allscript')}}/images/badges/community/bronze_b.png" alt="">
							</figure>
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
				
				<div class="row"> 
					<div class="exeheader">Experience level</div>
					<hr>
					<div class="col-md-4 text-center">
					  <div class="icon-box i-large ib-black <?php if($userinfo->userinfo->skill_level == 'Entry') {echo 'active';} ?> ">
						
						<div class="ib-info">
						  <p class="text-header">Entry level</p>
						  <p>Starting to build experience in my field of work
						  </p>
						</div>
					  </div>
					</div>
					
					<!-- Icon -->
					<div class="col-md-4 text-center">
					  <div class="icon-box i-large ib-black <?php if($userinfo->userinfo->skill_level == 'Intermediate') {echo 'active';} ?>">
						
						<div class="ib-info">
						  <p class="text-header">Intermediate Level</p>
						  <p> A few years of professional experience in my field.</p>

						</div>
					  </div>
					</div>
					
					<!-- Icon -->
					<div class="col-md-4 text-center">
					  <div class="icon-box i-large ib-black <?php if($userinfo->userinfo->skill_level == 'Expert') {echo 'active';} ?> ">
						
						<div class="ib-info">
						  <p class="text-header">Expert Level</p>
						  <p>Many years of professional experience doing complex projects.</p>
						</div>
					  </div>
					</div>
				</div>
				<div class="clearfix"></div>
				
				<div class="aboutbb">
					<div class="aboutbb2">
						<h3 class="resume-category-title clearfix">EDUCATION <span class="icon-plus"></span></h3>
						<div class="resume-post">
							<div class="resume-post-body">
								<div class="resume-post-date">2006 - 2007</div>
								<p class="resume-post-title">Viena Programming School</p>
								<p class="resume-post-subtitle">PHP Computer School</p>
								<div class="resume-post-cont">
									<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										laudantium, totam rem aperiam, eaque ipsa quae.</p>
								</div>
							</div>
						</div>
						<div class="resume-post">
							<div class="resume-post-body">
								<div class="resume-post-date">2006 - 2007</div>
								<p class="resume-post-title">Viena Programming School</p>
								<p class="resume-post-subtitle">PHP Computer School</p>
								<div class="resume-post-cont">
									<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										laudantium, totam rem aperiam, eaque ipsa quae.</p>
								</div>
							</div>
						</div>
						<h3 class="resume-category-title clearfix">PROFESSIONAL EXPERIENCE <span class="icon-plus"></span></h3>
						<div class="resume-post">
							<div class="resume-post-body">
								<div class="resume-post-date">2006 - 2007</div>
								<p class="resume-post-title">Viena Programming School</p>
								<p class="resume-post-subtitle">PHP Computer School</p>
								<div class="resume-post-cont">
									<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										laudantium, totam rem aperiam, eaque ipsa quae.</p>
								</div>
							</div>
						</div>
						<div class="resume-post">
							<div class="resume-post-body">
								<div class="resume-post-date">2006 - 2007</div>
								<p class="resume-post-title">Viena Programming School</p>
								<p class="resume-post-subtitle">PHP Computer School</p>
								<div class="resume-post-cont">
									<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										laudantium, totam rem aperiam, eaque ipsa quae.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="aboutbb3">
						<h4>Author Skill</h4><br/>
						<hr class="line-separator">
						<br/>
						<!-- PG BAR LIST ITEM -->
						<div class="pg-bar-list-item">
							<div class="pg-bar-list-item-info">
								<p class="text-header">FIREWORKS</p>
								<p class="text-header">86%</p>
							</div>
							<!-- BADGE PROGRESS -->
							<div class="pg1 xmlinefill" style="width: 219.094px; height: 30px; position: relative;"><canvas class="lineOutline" width="219" height="30" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="188" height="30" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
							<!-- /BADGE PROGRESS -->
						</div>
						<!-- /PG BAR LIST ITEM -->

						<!-- PG BAR LIST ITEM -->
						<div class="pg-bar-list-item">
							<div class="pg-bar-list-item-info">
								<p class="text-header">ILLUSTRATOR</p>
								<p class="text-header">1200/2000</p>
							</div>
							<!-- BADGE PROGRESS -->
							<div class="pg2 xmlinefill" style="width: 219.094px; height: 30px; position: relative;"><canvas class="lineOutline" width="219" height="30" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="131" height="30" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
							<!-- /BADGE PROGRESS -->
						</div>
						<!-- /PG BAR LIST ITEM -->

						<!-- PG BAR LIST ITEM -->
						<div class="pg-bar-list-item">
							<div class="pg-bar-list-item-info">
								<p class="text-header">PHOTOSHOP</p>
								<p class="text-header">1.250.500</p>
							</div>
							<!-- BADGE PROGRESS -->
							<div class="pg3 xmlinefill" style="width: 219.094px; height: 30px; position: relative;"><canvas class="lineOutline" width="219" height="30" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="208" height="30" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
							<!-- /BADGE PROGRESS -->
						</div>
						<!-- /PG BAR LIST ITEM -->
						<h4>LANGUAGE SKILLS</h4><br/>
						<hr class="line-separator">
						<br/>
						<div class="aboutll"><img class="aboutlll" src="{{asset('/allscript')}}/images/en.png" alt=""><p class="aboutl">ENGLISH</p></div><br/>
						<div class="aboutll"><img class="aboutlll" src="{{asset('/allscript')}}/images/gr.png" alt=""><p class="aboutl">GERMAN</p></div><br/>
						<div class="aboutll"><img class="aboutlll" src="{{asset('/allscript')}}/images/fr.png" alt=""><p class="aboutl">FRENCH</p></div>
						
					</div>
				</div>
				
				<div class="aboutinfo">
					<div class="aboutinfo1">
					<iframe width="410" height="272" src="https://www.youtube.com/embed/tqKpk1wABuI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="aboutinfo2">
						<img class="aboutinfoimg" src="{{asset('/allscript')}}/images/9.jpg" alt="">
					</div>
				</div>
				
				<div class="brand-list ul-li">
					<div class="abbrand">
						<a href="#!">
							<img src="{{asset('/allscript')}}/images/brand1.png" alt="Brand Image">
						</a>
					</div>
					<div class="abbrand">
						<a href="#!">
							<img src="{{asset('/allscript')}}/images/brand1.png" alt="Brand Image">
						</a>
					</div>
					<div class="abbrand">
						<a href="#!">
							<img src="{{asset('/allscript')}}/images/brand1.png" alt="Brand Image">
						</a>
					</div>
					<div class="abbrand">
						<a href="#!">
							<img src="{{asset('/allscript')}}/images/brand1.png" alt="Brand Image">
						</a>
					</div>
					<div class="abbrand">
						<a href="#!">
							<img src="{{asset('/allscript')}}/images/brand1.png" alt="Brand Image">
						</a>
					</div>
				</div>
				<!-- /HEADLINE -->
			</div>
			<!-- CONTENT -->

			<div class="clearfix"></div>
		</div>
	</div>
@endsection

@section('js')
<!-- XM Pie Chart -->
<script src="{{asset('/allscript')}}/js/vendor/jquery.xmpiechart.min.js"></script>
<!-- XM LineFill -->
<script src="{{asset('/allscript')}}/js/vendor/jquery.xmlinefill.min.js"></script>
<script src="{{asset('/allscript')}}/js/vendor/jquery.chart.min.js"></script>
<!-- bxSlider -->
<script src="{{asset('/allscript')}}/js/vendor/jquery.bxslider.min.js"></script>
<!-- Side Menu -->
<script src="{{asset('/allscript')}}/js/side-menu.js"></script>
<!-- Dashboard Header -->
<script src="{{asset('/allscript')}}/js/dashboard-header.js"></script>
<!-- Dashboard Statistics -->
<script src="{{asset('/allscript')}}/js/dashboard-statistics.js"></script>
@endsection