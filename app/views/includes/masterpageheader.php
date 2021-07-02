<div class="d-flex flex-column flex-root">
	<div class="d-flex flex-row flex-column-fluid page">
		<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
			<div class="brand flex-column-auto text-white" id="kt_brand">
				<a href="index" class="brand-logo">
					<h4>CHIT UPDATER</h4>
				</a>
			</div>

			<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
				<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
					<ul class="menu-nav">
						<li class="menu-item" aria-haspopup="true">
							<a href="<?php echo URLROOT; ?>/pages/members" class="menu-link">
								<i class="menu-icon fas fa-user"></i>
								<span class="menu-text">Member's Chit</span>
							</a>
						</li>
						<li class="menu-item" aria-haspopup="true">
							<a href="<?php echo URLROOT; ?>/pages/chitupload" class="menu-link">
								<i class="menu-icon fas fa-users"></i>
								<span class="menu-text">Upload Chit</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div id="kt_header" class="header header-fixed">
			<div class="container-fluid d-flex align-items-stretch justify-content-between">
				<div class="text-white h1 mt-5"><?= !empty($data['title']) ? $data['title'] : ''; ?></div>

				<div class="text-white h1 mt-5">
					<span class="text-white font-weight-bolder font-size-base d-none d-md-inline mr-3">Welcome <?php echo $_SESSION['name'] ;?></span>
					<!-- <button type="button" class="btn btn-danger">Logout</button> -->
					<a class="btn btn-danger" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
				</div>
			</div>
		</div>
