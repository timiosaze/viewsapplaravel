@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>Edit View</h3>
				<form action="">
					<div class="form-group">
						<input type="text" class="form-control" name="title" value="SARS">
					</div>
					<div class="form-group">
						<textarea name="body" id="" cols="20" rows="3" class="form-control">Though they are waging war against armed robbers but unfortunately today they are waging war against the progress of the youths. These started with the excessing number of yahoo boys(violent fraudster).</textarea>
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
