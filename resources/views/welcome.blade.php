<!DOCTYPE html>
<html>
<head>
    <title>Fast Food Places</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 90%;
            margin: auto;
            padding-top: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
            padding: 20px;
        }
        .logo {
            width: 50px;
            height: 50px;
            background: #007bff;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
        }
        .sidebar {
            width: 20%;
            float: left;
            padding: 20px;
        }
        .content {
            width: 75%;
            float: right;
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
        .post-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }
        .post-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .post-rating {
            display: flex;
            align-items: center;
        }
        .post-rating i {
            color: blue;
        }
        .post-date {
            font-size: 0.8rem;
            color: #6c757d;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"></div>
            <div class="nav">
                <a href="#">Home</a>
                <a href="#">Categories</a>
            </div>
            <div>
                <a href="{{ route('login') }}"class="btn" style="background-color: black; color: white;">Login</a>
                <a href="{{ route('register') }}"class="btn" style="background-color: black; color: white;">Register</a>
            </div>
        </div>
        </div>
        
        <div class="sidebar">
            <h3>Categories</h3>
            <div><input type="checkbox" id="category1" name="category1" value="Category1"><label for="category1"> Category1</label></div>
            <div><input type="checkbox" id="category2" name="category2" value="Category2"><label for="category2"> Category2</label></div>
            <div><input type="checkbox" id="category3" name="category3" value="Category3"><label for="category3"> Category3</label></div>
        </div>
        
        <div class="content">
            <div class="post">
                <div class="post-header">
                    <h3 class="post-title">Post 1</h3>
                    <span class="post-date">11.05.2024</span>
                </div>
                <img src="image.jpg" alt="Image" class="post-image">
                <div class="post-footer">
                    <div class="post-rating">
                        <i class="fas fa-star" style="color: blue;"></i>
                        <i class="fas fa-star" style="color: blue;"></i>
                        <i class="fas fa-star" style="color: blue;"></i>
                    </div>
                    <span class="post-date">Review text</span>
                </div>
            </div>
            <div class="post">
                <div class="post-header">
                    <h3 class="post-title">Post 2</h3>
                    <span class="post-date">11.05.2024</span>
                </div>
                <img src="image.jpg" alt="Image" class="post-image">
                <div class="post-footer">
                    <div class="post-rating">
                        <i class="fas fa-star" style="color: blue;"></i>
                        <i class="fas fa-star" style="color: blue;"></i>
                        <i class="fas fa-star" style="color: blue;"></i>
                    </div>
                    <span class="post-date">Review text</span>
               