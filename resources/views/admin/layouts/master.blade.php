<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            height:100vh;
            position:relative;
        }
        h1{
    height:100px;
    top:0;
    width:100%;
    position:relative;
    background-color:black;
    color:white;
    text-align:center;
}
footer{
    height:100px;
    margin-top:80%;
    bottom:0;
    position:relative;
    background-color:black;
    color:white;
    text-align:center;
    width:100%;
}
    </style>

</head>

<body>
    <nav>
        <h1>Amazon</h1>
        <nav>
            <main>
                @yield('content')
            </main>
            <footer>www.copyright.com</footer>
</body>

</html>