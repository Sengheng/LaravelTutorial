<!doctype html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
	<ul>
		

		@foreach ($tasks as $task)
			{{--<li>{{$task->body}}</li>--}}
		<li>

			<a href="/tasks/{{$task->id}}">
				{{$task->body}}
			</a>
		</li>

		@endforeach

	</ul>

</body>
</html>