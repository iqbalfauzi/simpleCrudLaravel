@include('inc.header')
<div class="conteiner">
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" style="padding-left: 30px" method="POST" action="{{ url('/insert')}}">
			{{csrf_field()}}
				<fieldset>
					<legend>Laravel CRUD Application</legend>
					@if(count($errors) > 0 )
						@foreach($errors->all() as $error)
							<div class="alert alert-danger">
								{{$error}}
							</div>
						@endforeach
					@endif
					<div class="form-group">
						<label for="nim" class="col-lg-2 control-label">NIM</label>
						<div class="col-lg-10">
							<input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
						</div>
					</div>
					<div class="form-group">
						<label for="nama" class="col-lg-2 control-label">Nama</label>
						<div class="col-lg-10">
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{ url('/') }}" class="btn btn-default">Back</a>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

@include('inc.footer')
