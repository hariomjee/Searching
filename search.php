<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="script2.css">
    <title>Searching</title>
</head>

<body>
    <img onclick="mode()" class="mode" id="mode" src="img/moon.png" alt="">
    <header>
        <h1>Hari om Projects</h1>
    </header>
    <nav id="nav">
       
        <a id="home">Home</a>
        <a id="about">About</a>
        <a id="calclu">Calculator</a>
        <a id="search">Searching</a>
        <a id="Count_word">Count Word</a>
        <a id="DJ">DJ</a>
        <a id="portfolio">Portfolio</a>
        <a id="login" class="Login">Login</a>
        <a id="signup" class="SignUp">SignUp</a>
    </nav>

        <section> 
        <p>Enter items- <input id="value" type="text" placeholder="Enter elements"></input></p>
            <p>Enter the no.-  <input id="item" type="text" placeholder="What to search"></input></p>
            <button onclick="linear()" id="linear">Lenear search</button>
            <button id="binary">Binary search</button>

        </section>

        <div > Result - <input id="output" type="text" placeholder="result is"></input></div>
        




    
        <footer>
        <a href="#">FAQ</a>
        <a href="#">Contact us</a>
        <a href="#">Email</a>
        <a href="#">Tweet</a>
        <a href="#">&copy;2022 |hari om</a>
    </footer>
</body>
<script src="index.js"></script>

</html>