@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				@include('includes.session')
				<h3>New View</h3>
				<form action="{{ route('view.store') }}" method="POST">
					@csrf
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
										<a href="{{ route('view.edit', $view->id) }}" class="edit">Edit</a>
									</div>
									<div class="col text-center">
										<a href="#" data-toggle="modal" data-target="#exampleModal{{$view->id}}" class="delete">Delete</a>
									</div>
								</div>
							</div>
						</li>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal{{$view->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Delete View</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
									{{Str::limit($view->title, 20)}}
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<form action="{{ route('view.destroy', $view->id)}}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-primary">Delete</button>
								</form>
								</div>
							</div>
							</div>
						</div>
					@empty
						<li class="no-data text-center">
							No views yet.
						</li>
					@endforelse
				</ul>
			</div>
		</section>
		<section class="section">
			{{$views->links()}}
		</section>

@endsection
