// resources/views/layouts/app.blade.php
<!--DOCTYPE html-->
<html lang="en">
    <head>
        <title>Laravel 快速入門 - 基本</title>

        <!-- CSS 及 JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar 內容 -->
            </nav>
        </div>

    @yield('content')<!--子頁面可以在此處注入自己的內容來延伸佈局-->
</body>
</html>
