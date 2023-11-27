<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    <link rel="stylesheet" href="web.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="content">
        <nav>
            <div class="ProfilIMG"></div>
            <a href=""><img src="Asset/Dashboard.png" alt=""></a>
            <a href=""><img src="Asset/OverdueBook.png" alt=""></a>
            <a href=""><img src="Asset/UserList.png" alt=""></a>
            <a href=""><img src="Asset/icon.png" alt=""></a>
            <a href=""><img src="Asset/Setting.png" alt=""></a>    
        </nav>
        <div class="main-content">
            @yield('container')
        </div>
    </div>
    
</body>
</html>