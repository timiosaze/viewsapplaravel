@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New View</h3>
				<form action="">
					<div class="form-group">
						<input type="text" class="form-control" name="title" placeholder="Topic">
					</div>
					<div class="form-group">
						<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="About Topic"></textarea>
					</div>
					<button class="btn-primary btn float-right">Create</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		<section class="section">
			<div class="data">
				<h5>Views</h5>
				<ul>
					<li class="no-data text-center">
						No views yet.
					</li>
					<li class="data-list">
						<div class="data-text">
							<h4 class="title">SARS</h4>
							<p class="text-class">Though they are waging war against armed robbers but unfortunately today they are waging war against the progress of the youths. These started with the excessing number of yahoo boys(violent fraudster).</p>
							<p class="date">October 20, 2020 | 12:14pm</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<h4 class="title">SARS</h4>
							<p class="text-class">Though they are waging war against armed robbers but unfortunately today they are waging war against the progress of the youths. These started with the excessing number of yahoo boys(violent fraudster).</p>
							<p class="date">October 20, 2020 | 12:14pm</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<h4 class="title">SARS</h4>
							<p class="text-class">Though they are waging war against armed robbers but unfortunately today they are waging war against the progress of the youths. These started with the excessing number of yahoo boys(violent fraudster).</p>
							<p class="date">October 20, 2020 | 12:14pm</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section class="section">
			<div class="paginate">
				<a href="#" class="btn btn-outline-primary">Prev</a>
				<a href="#" class="btn btn-outline-primary">Next</a>
			</div>
		</section>

@endsection
