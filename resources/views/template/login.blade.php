<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="fixed h-20 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-full flex items-center pl-12 text-4xl text-white">
    Mp3 Music
</div>

<div class="bg-blue-300 min-h-screen flex flex-col">
    <div class="relative m-auto bg-white mt-auto">
        <div class="grid py-10 px-10">
            <div class="grid justify-center justify-center px-8 ">
                <div class="grid justify-self-center text-xl font-bold md:text-4xl.lg:text-3xl.2xl:text-3xl">
                    Login
                </div>
                <form method="post" action="{{route("login")}}">
                    @csrf
                <div class="font-bold py-8">
                    <label for="username">Email:</label>
                    <input type="text" class="border h-8 w-full rounded p-6 lg:h-16" id="username" placeholder="Enter your email" name="username">
                </div>
                <div class="font-bold py-8">
                    <label for="password">Password:</label>
                    <input type="password" class="border h-8 w-full rounded p-6 lg:h-16" id="password" placeholder="*******" name="password">
                </div>
                <div class="font-bold py-8 grid justify-center">
                    <button class="py-5 px-24 rounded-full bg-blue-700 text-white" type="submit"> Login </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

