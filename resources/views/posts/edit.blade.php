<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blog Post</title>
</head>
<body>
    <h1>Edit a fast-food place</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <label for="title">Name:</label><br>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"><br>

        <label for="author">Author:</label><br>
        <select id="author" name="author">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ old('author', $post->author_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select><br>

        <label for="body">Review:</label><br>
        <textarea id="body" name="body">{{ old('body', $post->body) }}</textarea><br>

        <label for="category">Category:</label><br>
        <select id="category" name="category_id">
            @forelse ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
            @empty
                <option value="">No categories found</option>
            @endforelse
        </select>
        <button type="submit">Update Post</button>
    </form>
</body>
</html>
