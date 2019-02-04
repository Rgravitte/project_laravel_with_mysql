<html>
<head>
    <title></title>
</head>
<body>

    <h1>Projects!</h1>

    @foreach ($projects as $project)

    <h3>{{ $project->title }}</h3>
    <div>{{ $project->description }}</div>
    
    @endforeach


</body>
</html>