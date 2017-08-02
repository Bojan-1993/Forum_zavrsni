@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Nova objava
				</div>
				
				<div class="panel-body">
					<form action="/articles" method="POST">
						{{	csrf_field()	}}
						
						<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
				
						<div class="form-group">
							<label for="content">Što želiš objaviti</label>
						
							<textarea name="content" class="form-control"></textarea>
						</div>
					
						<div class="checkbox">
							<label>
								<input type="checkbox" name="live">
								Uživo
							</label>
						</div>
					
						<div class="form-group">
							<label for="post_on">Postavljeno</label>
						
								<input type="datetime-local" name="post_on" class="form-control">
						</div>
				
								<input type="submit" class="btn btn-success pull-right" value="Objavi!">
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection