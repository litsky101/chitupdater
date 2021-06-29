<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <link href="<?php echo URLROOT; ?>/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo URLROOT; ?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo URLROOT; ?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo URLROOT; ?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo URLROOT; ?>/css/themes/layout/header/base/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo URLROOT; ?>/css/themes/layout/header/menu/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo URLROOT; ?>/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo URLROOT; ?>/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
	<title><?php echo SITENAME; ?> <?= !empty($data['title']) ? '|' . $data['title'] : ''; ?></title>
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-row flex-column-fluid page">
			<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <div class="brand flex-column-auto text-white" id="kt_brand">
					<a href="index" class="brand-logo">
						<h4>CHIT UPDATER</h4>
					</a>
				</div>

				<?php  require_once '../app/views/includes/navigation.php'; ?>
			</div>
		</div>
	</div>

	<div id="kt_header" class="header header-fixed">
		<div class="container-fluid d-flex align-items-stretch justify-content-between">
			<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
				<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
					<div id="kt_header" class="header header-fixed">
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<div class="text-white h1 mt-5"></div>
							<div class="text-white h1 mt-5">
								<span class="text-white font-weight-bolder font-size-base d-none d-md-inline mr-3">Welcome <?php echo $_SESSION['name'] ;?></span>
								<!-- <button type="button" class="btn btn-danger">Logout</button> -->
								<a class="btn btn-danger" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
