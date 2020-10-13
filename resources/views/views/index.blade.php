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
						<textarea name="body" id="" cols="20" rows="3" class="form-control" placeholder="About Topic"></textarea>
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
					@forelse ($views as $view)
						<li class="data-list">
							<div class="data-text">
								<h4 class="title">{{$view->title}}</h4>
								<p class="text-class">{{$view->body}}</p>
								<p class="date">{{$view->created_at->format('F j,Y | h:ia')}}</p>
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
					@empty
						<li class="no-data text-center">
							No views yet.
						</li>
					@endforelse
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
