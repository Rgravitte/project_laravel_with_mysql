<html>
<head>
    <title></title>
</head>
<body>
    <h1>Create a New Project!</h1>
    <form method="POST" action="/projects">

        {{ csrf_field() }}
        <div>
            <input type='text' name='title' placeholder="Project Title">
        </div>
        <div>
            <textarea name='description' placeholder="Project Description"></textarea>
        </div>
        <div>
                <button type="submit">Create</button>
        </div>
    </form>
    
</body>
</html>