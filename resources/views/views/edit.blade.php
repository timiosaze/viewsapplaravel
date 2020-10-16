@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				<h3>Edit View</h3>
				<form action="{{ route('view.update', $view->id) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<input type="text" class="form-control" name="title" value="{{$view->title}}">
					</div>
					<div class="form-group">
						<textarea name="body" id="" cols="20" rows="3" class="form-control">{{$view->body}}</textarea>
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
