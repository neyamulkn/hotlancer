<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="{{asset('/allscript')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/allscript')}}/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('/allscript')}}/css/select2.min.css">

	@yield('css')
	<link rel="stylesheet" href="{{asset('/allscript')}}/css/style.css">
	<link rel="stylesheet" href="{{asset('/allscript')}}/css/custom.css">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>Account Setting</title>
</head>
<body>

	<!-- SIDE MENU -->
	<div id="dashboard-options-menu" class="side-menu dashboard left closed">
        <!-- SVG PLUS -->
		<svg class="svg-plus">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->
        
		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<!-- USER QUICKVIEW -->
			<div class="user-quickview">
				<!-- USER AVATAR -->
				<a href="author-profile.html">
				<div class="outer-ring">
					<div class="inner-ring"></div>
					<figure class="user-avatar">
						<img src="{{asset('/allscript')}}/images/avatars/avatar_01.jpg" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name">neyamul</p>
				<p class="user-money">$745.00</p>
				<!-- /USER INFORMATION -->
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<!-- /SIDE MENU HEADER -->
		<ul class="dropdown dark hover-effect interactive">
		<li class="dropdown-item interactive">
				<a href="#">
                    <span class="sl-icon icon-tag"></span>
                    Super Admin
                    <!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</a>

				<!-- INNER DROPDOWN -->
				<ul class="inner-dropdown">
					
					<li class="inner-dropdown-item">
						<a href="{{url('/dashbord/gig-category')}}">Add Gig category</a>
						
					</li>
					<li class="inner-dropdown-item">
						<a href="{{url('dashbord/gig-subcategory')}}">Add sub category</a>
					</li>
					<li class="inner-dropdown-item">
						<a href="{{url('dashbord/gig-metadata')}}">Add Sub Filter</a>
					</li>

					<li class="inner-dropdown-item">
						<a href="{{url('dashbord/gig-pricescope')}}">Add gig price scope</a>
					</li>

					<li class="inner-dropdown-item">
						<a href="{{url('/dashbord/filter/')}}">Add Filter</a>
					</li>
					
				</ul>
				<!-- INNER DROPDOWN -->
			</li>

		<p class="side-menu-title">Your Account</p>
		<!-- /SIDE MENU TITLE -->
		<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-settings.html">
                    <span class="sl-icon icon-settings"></span>
                    Account Settings
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-notifications.html">
                    <span class="sl-icon icon-star"></span>
                    Notifications
                </a>
                <!-- PIN -->
                <span class="pin soft-edged big primary">49</span>
                <!-- /PIN -->
			</li>
			<li class="dropdown-item">
				<a href="dashboard-inbox.html">
                    <span class="sl-icon icon-envelope"></span>
                    Messages
                </a>
                <!-- PIN -->
                <span class="pin soft-edged big secondary">!</span>
                <!-- /PIN -->
			</li>
			
			<p class="side-menu-title">Seller Manage Items</p>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item interactive">
				<a href="#">
                    <span class="sl-icon icon-tag"></span>
                    GIG Manage
                    <!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</a>

				<!-- INNER DROPDOWN -->
				<ul class="inner-dropdown">
					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-gig.html">All GIG Items</a>
						<!-- PIN -->
						<span class="pin soft-edged secondary">2</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="{{url('/dashbord/create-gig')}}">Create Gigs</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->
				</ul>
				<!-- INNER DROPDOWN -->
				
                <!-- PIN -->
                <span class="pin soft-edged big secondary">!</span>
                <!-- /PIN -->
			</li>
			<li class="dropdown-item interactive">
				<a href="#">
                    <span class="sl-icon icon-tag"></span>
                    Theme Manage
                    <!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</a>

				<!-- INNER DROPDOWN -->
				<ul class="inner-dropdown">
					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox.html">All Theme Manage (36)</a>
						<!-- PIN -->
						<span class="pin soft-edged secondary">2</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox.html">Theme Upload</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->
				</ul>
				<!-- INNER DROPDOWN -->
				
                <!-- PIN -->
                <span class="pin soft-edged big secondary">!</span>
                <!-- /PIN -->
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->
<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Info &amp; Statistics</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-orders.html">
                    <span class="sl-icon icon-people"></span>
                    Orders
                </a>
			</li>
			<li class="dropdown-item">
				<a href="dashboard-affiliate-program.html">
                    <span class="sl-icon icon-diamond"></span>
                    Affiliate Program
                </a>
			</li>
			<li class="dropdown-item">
				<a href="dashboard-statement.html">
                    <span class="sl-icon icon-energy"></span>
                    Earning Statement
                </a>
			</li>
			<li class="dropdown-item">
				<a href="dashboard-statistics.html">
                    <span class="sl-icon icon-chart"></span>
                    Statistics
                </a>
			</li>
		</ul>
		<!-- /DROPDOWN -->

         <!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Author Tools</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
            <!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-withdrawals.html">
                    <span class="sl-icon icon-wallet"></span>
                    Withdrawals
                </a>
			</li>
		</ul>
		<!-- /DROPDOWN -->
		<a href="#" class="button primary">Become a Buyer</a>

        <a href="#" class="button medium secondary"><span class="sl-icon icon-logout"></span> Logout</a>
	</div>
	<!-- /SIDE MENU -->

    <!-- DASHBOARD BODY -->
    <div class="dashboard-body">
        <!-- DASHBOARD HEADER -->
        <div class="dashboard-header retracted">
            <!-- DB CLOSE BUTTON -->
            <a href="{{url('/')}}" class="db-close-button">
               <img src="{{asset('/allscript')}}/images/dashboard/back-icon.png" alt="back-icon">
            </a>
            <!-- DB CLOSE BUTTON -->

			<!-- DB OPTIONS BUTTON -->
            <div class="db-options-button">
               <img src="{{asset('/allscript')}}/images/dashboard/db-list-right.png" alt="db-list-right">
			   <img src="{{asset('/allscript')}}/images/dashboard/close-icon.png" alt="close-icon">
            </div>
            <!-- DB OPTIONS BUTTON -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item title">
                <!-- DB SIDE MENU HANDLER -->
                 <div class="db-side-menu-handler">
                    <img src="{{asset('/allscript')}}/images/dashboard/db-list-left.png" alt="db-list-left">
                </div>
                <!-- /DB SIDE MENU HANDLER -->
                <h6>Your Dashboard</h6>
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

			<!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item form">
                <form class="dashboard-search">
                    <input type="text" name="search" id="search_dashboard" placeholder="Search on dashboard...">
                    <input type="image" src="{{asset('/allscript')}}/images/dashboard/search-icon.png" alt="search-icon">
                </form>
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">
                <!-- STATS META -->
                <div class="stats-meta">
                    <div class="pie-chart pie-chart1">
                        <!-- SVG PLUS -->
                        <svg class="svg-plus primary">
                            <use xlink:href="#svg-plus"></use>
                        </svg>
                        <!-- /SVG PLUS -->
                    </div>
                    <h6>64.579</h6>
                    <p>New Original Visits</p>
                </div>
                <!-- /STATS META -->
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">
                <!-- STATS META -->
                <div class="stats-meta">
                    <div class="pie-chart pie-chart2">
                        <!-- SVG PLUS -->
                        <svg class="svg-minus tertiary">
                            <use xlink:href="#svg-minus"></use>
                        </svg>
                        <!-- /SVG PLUS -->
                    </div>
                    <h6>20.8</h6>
                    <p>Less Sales Than Last Month</p>
                </div>
                <!-- /STATS META -->
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">
                <!-- STATS META -->
                <div class="stats-meta">
                    <div class="pie-chart pie-chart3">
                        <!-- SVG PLUS -->
                        <svg class="svg-plus primary">
                            <use xlink:href="#svg-plus"></use>
                        </svg>
                        <!-- /SVG PLUS -->
                    </div>
                    <h6>322k</h6>
                    <p>Total Visits This Month</p>
                </div>
                <!-- /STATS META -->
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

			<!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item back-button">
                <a href="{{url('/')}}" class="button mid dark-light">Back to Homepage</a>
            </div>
            <!-- /DASHBOARD HEADER ITEM -->
        </div>
        <!-- DASHBOARD HEADER -->
