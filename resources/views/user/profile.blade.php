@extends('layouts.app')

<style type="text/css">
	.profile-img {
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	}
</style>

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img class="profile-img" src="https://euw1-image-proxy.prod.aws.lcloud.com/3f72676a1db9f3d49d165923ac43011726e5b472/687474703a2f2f7374617469632d7265736f757263652e6e702e636f6d6d756e6974792e706c617973746174696f6e2e6e65742f6176617461722f5757535f452f455039303030313030333031386c2e706e67">
		
				<h1>{{ $user->name }}</h1>
				<h5>{{ $user->email }}</h5>
				
				<button class="btn btn-success">Prati</button>
			</div>
		</div>
	</div>
</div>
@endsection