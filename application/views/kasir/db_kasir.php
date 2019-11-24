<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Selamat Datang</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url('asset/'); ?>fontawesome-free-5.10.1-web/css/all.css" rel="stylesheet">

	<link href="<?= base_url('asset/'); ?>css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="asset/code.css"> -->
</head>
<style>
	/*
 4px:  $spacer * 0.25
 8px:  $spacer * 0.5
 16px: $spacer
 20px: $spacer * 1.25
 24px: $spacer * 1.5
 */
	html,
	body {
		font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif;
		color: #333;
		background-color: #222222;
		height: 100%;
	}

	.sidebar-toggler {
		padding: 0.25rem 0.75rem;
		font-size: 1.25rem;
		line-height: 1;
		background-color: transparent;
		border: 1px solid transparent;
		border-radius: 0.25rem;
		color: rgba(0, 0, 0, 0.5);
		border-color: rgba(0, 0, 0, 0.1);
	}

	.sidebar-toggler .sidebar-toggler-icon {
		display: inline-block;
		width: 1.5em;
		height: 1.5em;
		vertical-align: middle;
		content: "";
		background: no-repeat center center;
		background-size: 100% 100%;
		background-image: url("data:image/svg+xml;charset=utf8,<svg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'><path stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/></svg>");
		cursor: pointer;
	}

	.sidebar {
		position: relative;
		width: 100%;
		z-index: 99;
	}

	.sidebar .sidebar-user .category-content {
		padding: 1rem;
		text-align: center;
		color: #957979;
		font-weight: bold;
		background: url(https://picsum.photos/id/192/2352/2352/?blur=6) center center no-repeat;
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
	}

	.sidebar .sidebar-user .category-content:first-child {
		border-bottom-right-radius: 0.25rem;
		border-bottom-left-radius: 0.25rem;
	}

	.sidebar .sidebar-user .category-content:last-child {
		border-top-right-radius: 0.25rem;
		border-top-left-radius: 0.25rem;
	}

	.sidebar .sidebar-content {
		position: relative;
		border-radius: 0.25rem;
		margin-bottom: 1.25rem;
	}

	.sidebar .category-title {
		position: relative;
		margin: 0;
		padding: 12px 20px;
		padding-right: 46px;
		border-bottom: 1px solid rgba(255, 255, 255, 0.1);
	}

	.sidebar.sidebar-default .category-title {
		border-bottom-color: #dee2e6;
	}

	.sidebar.sidebar-default .category-title>span {
		display: block;
		text-transform: uppercase;
		font-weight: 500;
		font-size: 0.75rem;
	}

	.sidebar.sidebar-default .category-content .nav li>a {
		color: #333;
	}

	.sidebar.sidebar-default .category-content .nav li>a.active,
	.sidebar.sidebar-default .category-content .nav li>a[aria-expanded="true"],
	.sidebar.sidebar-default .category-content .nav li>a:hover,
	.sidebar.sidebar-default .category-content .nav li>a:focus {
		background-color: #D5C3C3;
	}

	.sidebar .category-content {
		position: relative;
	}

	.sidebar .category-content .nav {
		position: relative;
		margin: 0;
		padding: 0.5rem 0;
	}

	.sidebar .category-content .nav li {
		position: relative;
		list-style: none;
	}

	.sidebar .category-content .nav li>a {
		font-size: 0.875rem;
		border-bottom: 1px solid rgba(255, 255, 255, 0.5);
		transition: background 0.15s linear, color 0.15s linear;
	}

	.sidebar .category-content .nav li>a[data-toggle="collapse"] {
		padding-right: 2rem;
	}

	.sidebar .category-content .nav li>a[data-toggle="collapse"]:after {
		position: absolute;
		top: 0.5rem;
		right: 1rem;
		height: 1.5rem;
		line-height: 1.5rem;
		display: block;
		content: "\f105";
		font-family: FontAwesome;
		font-size: 1.5rem;
		font-weight: normal;
		transform: rotate(0deg);
		transition: -webkit-transform 0.2s ease-in-out;
	}

	.sidebar .category-content .nav li>a[data-toggle="collapse"][aria-expanded="true"]:after {
		transform: rotate(90deg);
	}

	.sidebar .category-content .nav li>a>i {
		float: left;
		top: 0;
		margin-top: 2px;
		margin-right: 15px;
		transition: opacity 0.2s ease-in-out;
	}

	.sidebar .category-content .nav li ul {
		padding: 0;
	}

	.sidebar .category-content .nav li ul>li a {
		padding-left: 2.75rem;
	}

	.sidebar .category-content .nav>li>a {
		font-weight: 500;
	}

	@media (min-width: 768px) {
		.sidebar {
			padding-top: 2rem !important;
			display: table-cell;
			vertical-align: top;
			width: 280px;
			padding: 0 1.25rem;
		}

		.sidebar.sidebar-fixed {
			position: sticky;
			top: 5.5rem;
		}

		.sidebar.sidebar-default .sidebar-category {
			background-color: #fff;
		}

		.sidebar.sidebar-separate .sidebar-content {
			box-shadow: none;
		}

		.sidebar.sidebar-separate .sidebar-category {
			margin-bottom: 1.25rem;
			border-radius: 0.25rem;
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
		}

		.content-wrapper {
			display: table-cell;
		}
	}

	.container-fluid {
		margin-top: 120px;
	}
</style>

<body class="is-preload">


	<!-- Main sidebar -->
	<div id="sidebar-main" class="sidebar sidebar-default sidebar-separate sidebar-fixed">
		<div class="sidebar-content">
			<div class="sidebar-category sidebar-default">
				<div class="sidebar-user">
					<div class="category-content">
						<h6>John Doe</h6>
						<small>Kasir</small>
					</div>
				</div>
			</div>
			<!-- /Sidebar Category -->
			<div class="sidebar-category sidebar-default">
				<div class="category-title">
					<span>Menu</span>
				</div>
				<div class="category-content">
					<ul id="fruits-nav" class="nav flex-column">
						<li class="nav-item">

							<a href="#" class="nav-link  active">
								<i class="far fa-edit"></i>
								Pemesanan tiket
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('Auth/logout'); ?>" class="nav-link">
								<i class="fas fa-sign-out-alt" aria-hidden="true"></i>
								Logout
							</a>
					</ul>
					<!-- /Nav -->
				</div>
				<!-- /Category Content -->
			</div>
			<!-- /Sidebar Category -->
		</div>
	</div>
	<!-- /main sidebar -->
	<div class="content-wrapper">
		<div class="row clearfix">
			<div class="col-xs-12">
			</div> <!-- end col -->
		</div> <!-- end row -->

		<div class="container-fluid">
			<!-- Editable table -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Data Pemesanan Tiket</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>ID Petugas</th>
									<th>Nama</th>
									<th>Username</th>
									<th>level</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>ID Petugas</th>
									<th>Nama</th>
									<th>Username</th>
									<th>level</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<td>ID Petugas</td>
								<td>Nama</td>
								<td>Username</td>
								<td>level</td>


								<td>


									<a href="#" class="btn btn-success btn-icon-split">
										<span class="icon text-white-50">
											<i class="fas fa-pencil-alt"></i>
										</span>
										<span class="text">Edit</span>
									</a>
									<a href="#" class="btn btn-danger btn-icon-split">
										<span class="icon text-white-50">
											<i class="fas fa-trash"></i>
										</span>
										<span class="text">Hapus</span>
									</a>
								</td>

								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>



</body>

</html>