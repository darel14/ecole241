<?php
session_start();
require_once 'bd.php';
require_once 'logout_s.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="css/vendor/tooltipster.css">
	<link rel="stylesheet" href="css/vendor/owl.carousel.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- favicon -->
	<link rel="icon" href="../assets/logo.svg">
	<title>Delevery | Home</title>
</head>
<body>

	<!-- HEADER -->
	<div class="header-wrap">
		<header>
			<!-- LOGO -->
			<a href="index-2.php">
				<figure class="logo">
					<img src="../assets/logo blanc.svg" alt="logo">
				</figure>
			</a>
			<!-- /LOGO -->

			<!-- MOBILE MENU HANDLER -->
			<div class="mobile-menu-handler left primary">
				<img src="images/pull-icon.png" alt="pull-icon">
			</div>
			<!-- /MOBILE MENU HANDLER -->

			<!-- LOGO MOBILE -->
			<a href="index-2.html">
				<figure class="logo-mobile">
					<img src="images/logo_mobile.png" alt="logo-mobile">
				</figure>
			</a>
			<!-- /LOGO MOBILE -->

			<!-- MOBILE ACCOUNT OPTIONS HANDLER -->
			<div class="mobile-account-options-handler right secondary">
				<span class="icon-user"></span>
			</div>
			<!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

			<!-- USER BOARD -->
			<div class="user-board">
				<!-- USER QUICKVIEW -->
				<div class="user-quickview">
					<!-- USER AVATAR -->
					<a href="author-profile.html">
					<div class="outer-ring">
						<div class="inner-ring"></div>
						<figure class="user-avatar">
							<img src="images/avatars/avatar_01.jpg" alt="avatar">
						</figure>
					</div>
					</a>
					<!-- /USER AVATAR -->

					<!-- USER INFORMATION -->
                    <p class="user-name"><?php echo $_SESSION['username'] ?></p>
					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
					<p class="user-money">$745.00</p>
					<!-- /USER INFORMATION -->

					<!-- DROPDOWN -->
					<ul class="dropdown small hover-effect closed">
						<li class="dropdown-item">
							<div class="dropdown-triangle"></div>
							<a href="author-profile.html">Profile Page</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-settings.html">Account Settings</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-purchases.html">Your Purchases</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-statement.html">Sales Statement</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-buycredits.html">Buy Credits</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-withdrawals.html">Withdrawals</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-uploaditem.html">Upload Item</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-manageitems.html">Manage Items</a>
						</li>
					</ul>
					<!-- /DROPDOWN -->
				</div>
				<!-- /USER QUICKVIEW -->

				<!-- ACCOUNT INFORMATION -->
				<div class="account-information">
					<a href="favourites.html">
						<div class="account-wishlist-quickview">	
							<span class="icon-heart"></span>
						</div>
					</a>
				</div>
				<!-- /ACCOUNT INFORMATION -->

				<!-- ACCOUNT ACTIONS -->
				<div class="account-actions">
					<a href="#" class="button primary">Become a Seller</a>
					<a href="logout.php	" class="button secondary">Logout</a>
				</div>
				<!-- /ACCOUNT ACTIONS -->
			</div>
			<!-- /USER BOARD -->
		</header>
	</div>
	<!-- /HEADER -->

	<!-- SIDE MENU -->
	<div id="mobile-menu" class="side-menu left closed">
		<!-- SVG PLUS -->
		<svg class="svg-plus">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<figure class="logo small">
				<img src="images/logo.png" alt="logo">
			</figure>
		</div>
		<!-- /SIDE MENU HEADER -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Main Links</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect interactive">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index-2.html">Home</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="how-to-shop.html">How to Shop</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="products.html">Products</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="services.html">Services</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="shop-gridview-v1.html">Online Goods</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item interactive">
				<a href="#">
					Features
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
						<p>Emerald Dragon</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="index-2.html">Homepage V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="home-v2.html">Homepage V2</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="itemview-versions.html">Item View Versions</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-gridview-v1.html">Shop Grid View V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-gridview-v2.html">Shop Grid View V2</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-listview-v1.html">Shop List View V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-listview-v2.html">Shop List View V2</a>
						<!-- PIN -->
						<span class="pin soft-edged primary">hot</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="author-profile.html">Profile Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="blog-v1.html">Blog Page V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="blog-v2.html">Blog Page V2</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="open-post.html">Open Post</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="forum.html">Forum Board</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="subforum.html">Subforum</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="open-topic.html">Open Topic</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="login-register.html">Login and Register</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="menu-dropdowns.html">Menu and Dropdowns</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<p>Product Pages</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="item-v1.html">Item Page V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="item-v2.html">Item Page V2</a>
						<!-- PIN -->
						<span class="pin soft-edged secondary">new</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="product-page.html">Product Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="auction-page.html">Auction Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="service-page.html">Service Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="favourites.html">Favourite Products Grid View</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="favourites-listview.html">Favourite Products List View</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="alerts-notifications.html">Alerts &amp; Notifications</a>
						<!-- PIN -->
						<span class="pin soft-edged violet">new</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<p>Dashboard</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-settings.html">Account Settings</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-statistics.html">Statistics Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-statement.html">Sales Statement</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox.html">Inbox Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-openmessage.html">Open Message</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-uploaditem.html">Upload Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<p>Gamification</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="community-badges.html">Author Badges Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="badges.html">All Badges (Big and Small)</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="flag-badges.html">Flag Badges (Big and Small)</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="badges-boxes.html">Badge Boxes Versions</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="author-badges.html">Public Author Badges</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->
				</ul>
				<!-- /INNER DROPDOWN -->
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->
	</div>
	<!-- /SIDE MENU -->

	<!-- SIDE MENU -->
	<div id="account-options-menu" class="side-menu right closed">
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
						<img src="images/avatars/avatar_01.jpg" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name"><?php $_SESSION['username'] ?></p>
				<p class="user-money">$745.00</p>
				<!-- /USER INFORMATION -->
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<!-- /SIDE MENU HEADER -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Your Account</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-notifications.html">Notifications</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-inbox.html">Messages</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="cart.html">Your Cart</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="favourites.html">Favourites</a>
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Dashboard</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="author-profile.html">Profile Page</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-settings.html">Account Settings</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-purchases.html">Your Purchases</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-statement.html">Sales Statement</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-buycredits.html">Buy Credits</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-withdrawals.html">Withdrawals</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-uploaditem.html">Upload Item</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-manageitems.html">Manage Items</a>
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->

		<a href="#" class="button medium secondary">Logout</a>
		<a href="#" class="button medium primary">Become a Seller</a>
	</div>
	<!-- /SIDE MENU -->

	<!-- MAIN MENU -->
	<div class="main-menu-wrap">
		<div class="menu-bar">
			<nav>
				<ul class="main-menu">
					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="index-2.html">Home</a>
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
								<h6 class="feature-list-title">Emerald Dragon</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="index-2.html">Homepage V1</a>
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

		</div>
        <form class="search-form">
				<input type="text" class="rounded" name="search" id="search_products" placeholder="Search products here...">
				<input type="image" src="images/search-icon.png" alt="search-icon">
			</form>
	</div>
	<!-- /MAIN MENU -->

	<div class="clearfix"></div>

	<!-- PRODUCT SIDESHOW -->
	<div id="product-sideshow-wrap">
		<div id="product-sideshow">
			<!-- PRODUCT SHOWCASE -->
			<div class="product-showcase">
				<!-- HEADLINE -->
				<div class="headline primary">
					<h4>Latest Online Products</h4>
					<!-- SLIDE CONTROLS -->
					<div class="slide-control-wrap">
						<div class="slide-control left">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>

						<div class="slide-control right">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>
					</div>
					<!-- /SLIDE CONTROLS -->
				</div>
				<!-- /HEADLINE -->

				<!-- PRODUCT LIST -->
				<div id="pl-1" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/westeros_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Westeros Custom Clothing</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_01.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Johnny Fisher</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PIN -->
						<span class="pin featured">Featured</span>
						<!-- /PIN -->

						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/flat_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Flatland - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/pixel_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Pixel Diamond Gaming Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Shopify</p>
							</a>
							<p class="price"><span>$</span>86</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_06.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Sarah-Imaginarium</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/miniverse_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Miniverse - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/westeros_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Westeros Custom Clothing</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_01.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Johnny Fisher</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PIN -->
						<span class="pin featured">Featured</span>
						<!-- /PIN -->

						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/flat_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Flatland - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/pixel_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Pixel Diamond Gaming Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Shopify</p>
							</a>
							<p class="price"><span>$</span>86</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_06.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Sarah-Imaginarium</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/miniverse_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Miniverse - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->

				<!-- PRODUCT LIST -->
				<div id="pl-2" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/phantom_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Phantom Cloud Illustration Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/shadow_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">8 Long Shadow Flat Icons</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Icon Packs</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_04.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Red Thunder Graphics</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/monsters_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Little Monsters - 40 Pack Button...</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Graphics</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_10.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Haunted Mouse</p>
							</a>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/trickster_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Trickster Product Builder</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/phantom_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Phantom Cloud Illustration Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/shadow_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">8 Long Shadow Flat Icons</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Icon Packs</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_04.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Red Thunder Graphics</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/monsters_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Little Monsters - 40 Pack Button...</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Graphics</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_10.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Haunted Mouse</p>
							</a>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/trickster_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Trickster Product Builder</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->

				<!-- PRODUCT LIST -->
				<div id="pl-3" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/patriot_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Patriot - Flyer Template</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Flyers</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_11.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Vynil Brush</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/city_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">City Seamless Game Background</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Backgrounds</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_12.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Game Pix</p>
							</a>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/alchemists_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Alchemists Sports Magazine</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/park_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Social Media Cover - Park at Night</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Social Covers</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_13.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Violet &amp; Jane</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item empty">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/patriot_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Patriot - Flyer Template</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Flyers</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_11.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Vynil Brush</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/city_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">City Seamless Game Background</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Backgrounds</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_12.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Game Pix</p>
							</a>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/alchemists_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Alchemists Sports Magazine</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/park_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Social Media Cover - Park at Night</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Social Covers</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_13.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Violet &amp; Jane</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item empty">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->
			</div>
			<!-- /PRODUCT SHOWCASE -->

			<!-- PRODUCT SHOWCASE -->
			<div class="product-showcase">
				<!-- HEADLINE -->
				<div class="headline secondary">
					<h4>Trending Services</h4>
					<!-- SLIDE CONTROLS -->
					<div class="slide-control-wrap">
						<div class="slide-control left">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>

						<div class="slide-control right">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>
					</div>
					<!-- /SLIDE CONTROLS -->
				</div>
				<!-- /HEADLINE -->

				<!-- PRODUCT LIST -->
				<div id="pl-4" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/logos_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Professional Corporate Logos</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">Graphic Design</p>
							</a>
							<p class="price"><span>$</span>260</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_14.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Jenny_Block</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/cartoon_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Clean Cartoon Characters</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">Illustration</p>
							</a>
							<p class="price"><span>$</span>180</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_15.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">AmyGlush</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/flyers_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Professional Party Flyers</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">Graphic Design</p>
							</a>
							<p class="price"><span>$</span>95</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_11.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Vynil Brush</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/app_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Vector Icons for Web Apps</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">UI/UX</p>
							</a>
							<p class="price"><span>$</span>260</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_03.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Thomas_Ket</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/logos_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Professional Corporate Logos</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">Graphic Design</p>
							</a>
							<p class="price"><span>$</span>260</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_14.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Jenny_Block</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/cartoon_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Clean Cartoon Characters</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">Illustration</p>
							</a>
							<p class="price"><span>$</span>180</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_15.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">AmyGlush</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/flyers_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Professional Party Flyers</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">Graphic Design</p>
							</a>
							<p class="price"><span>$</span>95</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_11.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Vynil Brush</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/app_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="service-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="service-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="service-page.html">
								<p class="text-header">Vector Icons for Web Apps</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="services.html">
								<p class="category secondary">UI/UX</p>
							</a>
							<p class="price"><span>$</span>260</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_03.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Thomas_Ket</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->
			</div>
			<!-- /PRODUCT SHOWCASE -->

			<!-- PRODUCT SHOWCASE -->
			<div class="product-showcase">
				<!-- HEADLINE -->
				<div class="headline">
					<h4>Your Followers Feed</h4>
					<!-- SLIDE CONTROLS -->
					<div class="slide-control-wrap">
						<div class="slide-control left">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>

						<div class="slide-control right">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>
					</div>
					<!-- /SLIDE CONTROLS -->
				</div>
				<!-- /HEADLINE -->

				<!-- PRODUCT LIST -->
				<div id="pl-5" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/tablet_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="product-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="product-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="product-page.html">
								<p class="text-header">Axcom Drawing Tablet (New)</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="products.html">
								<p class="category tertiary">Tablets</p>
							</a>
							<p class="price"><span>$</span>380</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_16.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Erika Thompson</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/westeroshtml_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Westeros HTML Custom Cloth...</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">HTML Templates</p>
							</a>
							<p class="price"><span>$</span>28</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/pixel_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Pixel Diamond Gaming Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Shopify</p>
							</a>
							<p class="price"><span>$</span>86</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_06.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Sarah-Imaginarium</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/joystick_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="product-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="product-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="product-page.html">
								<p class="text-header">PX4 Crimson Joystick (Used)</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="products.html">
								<p class="category tertiary">Accesories</p>
							</a>
							<p class="price"><span>$</span>24</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_17.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Kratos Cave</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item empty">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/tablet_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="product-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="product-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="product-page.html">
								<p class="text-header">Axcom Drawing Tablet (New)</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="products.html">
								<p class="category tertiary">Tablets</p>
							</a>
							<p class="price"><span>$</span>380</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_16.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Erika Thompson</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/westeroshtml_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Westeros HTML Custom Cloth...</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">HTML Templates</p>
							</a>
							<p class="price"><span>$</span>28</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_09.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Odin_Design</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/pixel_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Pixel Diamond Gaming Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Shopify</p>
							</a>
							<p class="price"><span>$</span>86</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_06.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Sarah-Imaginarium</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/joystick_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="product-page.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="product-page.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="product-page.html">
								<p class="text-header">PX4 Crimson Joystick (Used)</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="products.html">
								<p class="category tertiary">Accesories</p>
							</a>
							<p class="price"><span>$</span>24</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_17.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Kratos Cave</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
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
								<li class="rating-item empty">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- PRODUCT LIST -->
			</div>
			<!-- PRODUCT SHOWCASE -->
		</div>
	</div>
	<!-- /PRODUCTS SIDESHOW -->

	<!-- SUBSCRIBE BANNER -->
	<div id="subscribe-banner-wrap">
		<div id="subscribe-banner">
			<!-- SUBSCRIBE CONTENT -->
			<div class="subscribe-content">
				<!-- SUBSCRIBE HEADER -->
				<div class="subscribe-header">
					<figure>
						<img src="images/news_icon.png" alt="subscribe-icon">
					</figure>
					<p class="subscribe-title">Subscribe to our Newsletter</p>
					<p>And receive the latest news and offers</p>
				</div>
				<!-- /SUBSCRIBE HEADER -->

				<!-- SUBSCRIBE FORM -->
				<form class="subscribe-form">
					<input type="text" name="subscribe_email" id="subscribe_email" placeholder="Enter your email here...">
					<button class="button medium dark">Subscribe!</button>
				</form>
				<!-- /SUBSCRIBE FORM -->
			</div>
			<!-- /SUBSCRIBE CONTENT -->
		</div>
	</div>
	<!-- /SUBSCRIBE BANNER -->

	<!-- FOOTER -->
	<footer>
		<!-- FOOTER TOP -->
		<div id="footer-top-wrap">
			<div id="footer-top">
				<!-- COMPANY INFO -->
				<div class="company-info">
					<figure class="logo small">
						<img src="images/logo_small.png" alt="logo-small">
					</figure>
					<p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labo dolore magna ua.</p>
					<ul class="company-info-list">
						<li class="company-info-item">
							<span class="icon-present"></span>
							<p><span>850.296</span> Products</p>
						</li>
						<li class="company-info-item">
							<span class="icon-energy"></span>
							<p><span>1.207.300</span> Members</p>
						</li>
						<li class="company-info-item">
							<span class="icon-user"></span>
							<p><span>74.059</span> Sellers</p>
						</li>
					</ul>
					<!-- SOCIAL LINKS -->
					<ul class="social-links">
						<li class="social-link fb">
							<a href="#"></a>
						</li>
						<li class="social-link twt">
							<a href="#"></a>
						</li>
						<li class="social-link db">
							<a href="#"></a>
						</li>
						<li class="social-link rss">
							<a href="#"></a>
						</li>
					</ul>
					<!-- /SOCIAL LINKS -->
				</div>
				<!-- /COMPANY INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Our Community</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">How to Join us</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Buying and Selling</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="forum.html">Emerald Forum</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="blog-v1.html">Emerald Blog</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Free Goods</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Job Oportunities</a>
						</li>
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Member Links</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Partner Program</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Starting a Shop</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Purchase Credits</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Withdrawals</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">World Meetings</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">How to Auction</a>
						</li>
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Help and FAQs</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Help Center</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">FAQs</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Terms and Conditions</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Products Licenses</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Security Information</a>
						</li>
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- TWITTER FEED -->
				<div class="twitter-feed">
					<p class="footer-title">Twitter Feed</p>
					<!-- TWEETS -->
					<ul class="tweets"></ul>
					<!-- /TWEETS -->
				</div>
				<!-- /TWITTER FEED -->
			</div>
		</div>
		<!-- /FOOTER TOP -->

		<!-- FOOTER BOTTOM -->
		<div id="footer-bottom-wrap">
			<div id="footer-bottom">
				<p><span>&copy;</span><a href="index-2.html">Emerald Dragon</a> Template - All Rights Reserved 2015</p>
			</div>
		</div>
		<!-- /FOOTER BOTTOM -->
	</footer>
	<!-- /FOOTER -->

	<div class="shadow-film closed"></div>

<!-- SVG ARROW -->
<svg style="display: none;">	
	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
	</symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG STAR -->
<svg style="display: none;">
	<symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">	
		<polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751 
	2.495,6.313 -0.002,3.878 3.45,3.376 "/>
	</symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG PLUS -->
<svg style="display: none;">
	<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
		<rect x="5" width="3" height="13"/>
		<rect y="5" width="13" height="3"/>
	</symbol>
</svg>
<!-- /SVG PLUS -->

<!-- jQuery -->
<script src="js/vendor/jquery-3.1.0.min.js"></script>
<!-- Tooltipster -->
<script src="js/vendor/jquery.tooltipster.min.js"></script>
<!-- Owl Carousel -->
<script src="js/vendor/owl.carousel.min.js"></script>
<!-- Tweet -->
<script src="js/vendor/twitter/jquery.tweet.min.js"></script>
<!-- xmAlerts -->
<script src="js/vendor/jquery.xmalert.min.js"></script>
<!-- Side Menu -->
<script src="js/side-menu.js"></script>
<!-- Home -->
<script src="js/home.js"></script>
<!-- Tooltip -->
<script src="js/tooltip.js"></script>
<!-- User Quickview Dropdown -->
<script src="js/user-board.js"></script>
<!-- Home Alerts -->
<!-- Footer -->
<script src="js/footer.js"></script>
</body>

<!-- Mirrored from odindesignthemes.com/emerald-dragon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 May 2022 22:39:07 GMT -->
</html>