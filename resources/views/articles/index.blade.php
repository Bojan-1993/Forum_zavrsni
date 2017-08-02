@extends('layouts.app')

@section('content')
	<div class="row">
	@forelse($articles as $article)
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
				{{ $article->user_id }}
					
					<span class="pull-right">
						{{ $article->created_at->diffForHumans() }}
					</span>
				</div>
				
				<div class="panel-body">
					{{	$article->shortContent	}}
				
					<a href="/articles/{{	$article->id	}}">Prikaži više</a>
				</div>
				
				<div class="panel-footer clearfix" style="background-color: white">
				
					@if($article->user_id == Auth::id())
						<form action="/articles/{{ $article->id }}" method="POST" class="pull-right" style="margin-left: 25px">
					
							{{ csrf_field() }}
							
							{{ method_field('DELETE') }}
						
							<button class="btn btn-danger btn-sm">
								Izbriši
							</button>
						</form>
					@endif
				
					<i class="fa fa-heart pull-right"></i>
				</div>
			</div>
		</div>
	@empty
		Nema postojećih objava!
	@endforelse
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{{ $articles->links() }}
		</div>
	</div>
@endsection