@include('inc.header')
<div class="container">
	<div class="row">
		<legend>Detail Data Laravel</legend>
		<p class="lead">{{ $article->nim }}</p>
		<p class="lead">{{ $article->nama }}</p>
	</div>
</div>

@include('inc.footer')