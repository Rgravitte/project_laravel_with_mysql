<html>
<head>
    <title></title>
</head>
<body>
    <h1>Projects!</h1>
    @foreach ($projects as $project)
    <h3>{{$project}}</h3>
    @endforeach
    {{-- @foreach($projects as $project)
        <li>{{$project->title}}</li>
    @endforeach --}}
    
</body>
</html>