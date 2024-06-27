<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fast Food Place</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 90%;
            margin: auto;
            padding-top: 20px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #E5E5E5;
            padding: 10px 20px;
            position: relative;
        }
        .navbar .brand {
            font-size: 24px;
            font-weight: bold;
        }
        .navbar .brand a {
            text-decoration: none;
            color: inherit;
        }
        .navbar .brand span {
            color: black;
        }
        .navbar .links a {
            margin-left: 10px;
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            background-color: black;
        }
        .navbar h1 {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin: 0;
            font-size: 24px;
        }
        .content {
            width: 100%;
            padding: 20px;
        }
        .post {
            background: #e0e0e0;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .post-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .post-description,
        .post-review {
            margin-bottom: 10px;
        }
        .post-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .post-date {
            font-size: 0.8rem;
            color: #6c757d;
        }
        .btn {
        padding: 5px 10px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 2px;
    }
    .btn:hover {
        background-color: #333;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="brand">
                <a href="{{ route('posts.index') }}"><span>Home</span></a>
            </div>
            <h1>Fast Food Places</h1>
            <div class="links">
                <a href="{{ route('login') }}" class="btn">Login</a>
                <a href="{{ route('register') }}" class="btn">Register</a>
            </div>
        </div>
        
        <div class="content">
            <p>
                <form method="GET" action="{{ route('posts.create') }}"> 
                    @csrf
                    <button type="submit" class="btn">Create post</button>
                </form>
            </p>

            @foreach ($posts as $post)
                <div class="post">
                    <div class="post-header">
                        <h3 class="post-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
                        <span class="post-date">{{ $post->created_at->format('d.m.y') }}</span>
                    </div>
                    <p>An article by <em>{{ $post->author->name }}</em>
                    <div class="post-description">
                        <p>{{ $post->description }}</p>
                    </div>
                    <div class="post-review">
                        <p>{{ $post->review }}</p>
                    </div>
                    <div class="post-actions">
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete post</button>
                        </form>
                        <form method="GET" action="{{ route('posts.edit', $post->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-edit">Edit post</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
