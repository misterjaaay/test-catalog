@extends ('welcome')

@section('content')

<div>
	{!! link_to_route('posts', 'published') !!} &nbsp;&nbsp;&nbsp; {!! link_to_route('posts.unpublished', 'unpublished') !!}
</div>

	@foreach($posts as $post)
		<article>
			<h2>{!! $post -> title !!}</h2>		
			<p>{!! $post -> excerpt !!}</p>
			<p> created: {!! $post -> created_at !!}</p>
		</article>
	@endforeach
@stop