@extends('app')

@section('title', 'All Projects')

@section('header')
<h1>All Projects</h1>
@endsection

@section('main')

<h2>Projects:</h2>

<ul>
	@foreach($projects as $project)
	<li>
		<a href="/app/projects/{{ $project->id }}">{{ $project->name }}</a>
	</li>
	@endforeach
</ul>

@endsection

@section('footer')
@parent
@endsection