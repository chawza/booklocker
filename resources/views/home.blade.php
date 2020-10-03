<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Library</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
</head>
<body>
    <main>
        <div id="main-content">
            @foreach ($books as $book)
                <div class="book-area">
                    <a href="{{ url('book/'.$book->id) }}">
                        <img class="book-cover" src="{{url('/img/'.$book->image)}}" alt="book cover thumbnail"/>
                        <p class="price">Rp{{number_format($book->price,0)}}</p>
                        <p><b>{{$book->title}}</b></p>
                        <p>{{$book->creator}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>