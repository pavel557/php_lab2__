<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posts {{$article->id}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
     <div class="container mt-5">
        <div>
            <div>
                @foreach($tags as $tag)
                    <th>{{ $tag->name }}</th>
                @endforeach
            </div>
        <table class="table table-bordered mb-4">
            <thead>
                
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Character_code</th>
                    <th>Content</th>
                    <th>Date_creation</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->character_code }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->date_creation }}</td>
                    <td>{{ $article->author }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

