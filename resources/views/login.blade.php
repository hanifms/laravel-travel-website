<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Traveler</title>
    <style>
        body {
            background-color: #000080; /* Dark blue background */
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .container {
            text-align: center;
        }
        .form-container {
            background-color: #1a1a1a;
            border: 3px solid black;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
        }
        input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #90EE90; /* Light green buttons */
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #76c776;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Will be shown if user is logged in-->
        @auth
        <p>Congrats you are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>

        <div class="form-container">
            <h2>Create a new post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Post title">
                <textarea name="body" placeholder="Body content..."></textarea>
                <button>Save Post</button>
            </form>
        </div>
        @else
        {{-- log in --}}
        <div class="form-container">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="Name">
                <input name="loginpassword" type="password" placeholder="Password">
                <button>Log in</button>
            </form>
        </div>

        {{-- register --}}
        <div class="form-container">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="text" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <button>Register</button>
            </form>
        </div>
        @endauth
    </div>
</body>
</html>
