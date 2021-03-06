@extends('app')

@section('content')
	<div class="container">
		<div class="content">
			<div class="title">Jukebox</div>

			<div class="search form-room">
				{!! Form::open(['action' => 'RoomController@store' ]) !!}
					{!! Form::text('name', '', array('placeholder' => 'Enter Room Name') )!!}

					@if ($errors)
						<p class="error">{{ $errors->first('name')}}</p>
					@endif

					<div class="room-status">
						<h4>Room Status</h4>

						{!! Form::radio('status', 'private', true, array('id' => 'status-private')); !!}
						{!! Form::label('status-private', 'Private'); !!}

						{!! Form::radio('status', 'public', false, array('id' => 'status-public')); !!}
						{!! Form::label('status-public', 'Public'); !!}
					</div><!-- /.room-status -->

					{!! Form::submit('Create') !!}
				{!! Form::close() !!}
			</div><!-- /.search -->
		</div>
	</div>
@endsection