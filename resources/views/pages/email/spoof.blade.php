 @extends('layout.main')

 @section('content')

	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <h3 class="title"> {{ __("Send Spoofed Email") }} </h3>
                    </div>

					<div class="form-group {{ $errors->has('from') ? 'has-danger' : '' }}">
						<label>{{ __("From") }}</label>
						<input type="text" name="from" class="form-control" value="{{ Request::old('from') }}">
						{!! $errors->first('from', '<p class="has-danger form-control-feedback">:message</p>') !!}
					</div>

					<div class="form-group {{ $errors->has('to') ? 'has-danger' : '' }}">
						<label>{{ __("To") }}</label>
						<input type="text" name="to" class="form-control" value="{{ Request::old('to') }}">
						{!! $errors->first('to', '<p class="has-danger form-control-feedback">:message</p>') !!}
					</div>

					<div class="form-group {{ $errors->has('message') ? 'has-danger' : '' }}">
						<label>{{ __("Message") }}</label>
						<textarea name="message" class="form-control" rows="5"></textarea>
						{!! $errors->first('message', '<p class="has-danger form-control-feedback">:message</p>') !!}
					</div>	

					<div class="form-group pull-right">
						<input type="submit" class="btn btn-default" value="{{ __("Send Email") }}">
					</div>				

				</div>
			</div>
		</div>
	</div>

 @stop	

@push('style')

@endpush