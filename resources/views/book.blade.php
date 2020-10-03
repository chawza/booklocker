<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/book.css') }}" />
    <title>{{$book->title}}</title>
</head>
<body>
    <main>
        <div id="content-area">
            <button><a href="{{ url('home') }}">Back</a></button>
            <div id="content-header">
                <div id="book-cover">
                    <img src="{{url('/img/'.$book->image)}}" alt="book cover thumbnail" width="400" height=auto/>
                </div>
                <div id="sub-header">
                    <h1><b>{{$book->title}}</b></h1>
                    <h2><b>{{$book->creator}}</b></h2>
                    <h2 class="price">RP{{number_format($book->price, 0)}}</h2>
                </div>
            </div>
            <p><b>Description</b></p>
            <p>{{$book->description}}</p>
        </div>
    </main>
</body>
</html>