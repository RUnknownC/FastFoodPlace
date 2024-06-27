<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p>Author: {{ $post->author->name }}</p>
        <p>Published at: {{ $post->created_at->format("d.m.Y H:i:s") }}</p>
        @if ($post->category)
            <p>Category: {{ $post->category->title }}</p>
        @else
            <p>Category: Undefined</p>
        @endif

        <h3>Comments:</h3>
        <ul>
            @foreach($post->comments as $comment)
                <li>
                    <p>{{ $comment->body }}</p>
                    @if ($comment->author)
                        <p>By: {{ $comment->author->name }}</p>
                    @else
                        <p>By: Unknown</p> <!-- Handle null author -->
                    @endif
                    <p>Posted at: {{ $comment->created_at->format("d.m.Y H:i:s") }}</p>
                </li>
            @endforeach
        </ul>

        @auth
        <h4>Leave a Comment:</h4>
        <form method="POST" action="{{ route('comments.store', $post->id) }}">
            @csrf
            <textarea name="body" rows="4" cols="50" placeholder="Your comment"></textarea><br>
            <button type="submit">Submit</button>
        </form>
        @else
        <p>Please <a href="{{ route('login') }}">login</a> to leave a comment.</p>
        @endauth
    </div>
</body>
</html>
