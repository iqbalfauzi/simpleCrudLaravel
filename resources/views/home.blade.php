@include('inc.header')
<div class="container">
	<div class="row">
		<legend>Laravel CRUD Application</legend>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				@if(session('info'))
				<div class="col-mg-6 alert alert-success">
					{{session('info')}}
				</div>
				@endif
			</div>
		</div>
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					<th>#</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@if(count($article)>0)
				@foreach($article->all() as $article)



				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->nim }}</td>
					<td>{{ $article->nama }}</td>
					<td>
						<a href='{{ url("/detail/{$article->id}") }}' class="btn btn-primary">Detail</a>
						<a href='{{ url("/update/{$article->id}") }}' class="btn btn-warning">Update</a>
						<a href='{{ url("/delete/{$article->id}") }}' class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table> 
	</div>
</div>

@include('inc.footer')
