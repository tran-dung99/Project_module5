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
            <h3 class="grid justify-center justify-center px-8 ">
                <p style="text-align: center; font-size: 20px; str">
                    Đăng Ký Người Dùng Mới
                </p>
                <form method="post" action="{{route("user.register")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="font-bold py-8">
                        <label for="username">Họ và Tên:</label>
                        <input type="text" class="border h-8 w-full rounded p-6 lg:h-16" id="username" placeholder="Nguyễn Văn A" name="name">
                    </div>
                    <div class="font-bold py-8">
                        <label for="email">Email:</label>
                        <input type="email" class="border h-8 w-full rounded p-6 lg:h-16" id="email" placeholder="abc@gmail.com" name="email">
                    </div>
                    <div class="font-bold py-8">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="border h-8 w-full rounded p-6 lg:h-16" id="password" placeholder="*******" name="password">
                    </div>
                    <input type="file" name="image">
                    <div class="font-bold py-8 grid justify-center">
                        <button class="py-5 px-24 rounded-full bg-blue-700 text-white" type="submit"> Đăng Ký </button>
                    </div>
                </form>
            </h3>
            </div>
    </div>
        </div>
    </div>
</div>
</body>
</html>


