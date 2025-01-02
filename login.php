<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login design circle</title>
    <link rel="stylesheet" href="login.css">
    
</head>

<body>

    <header>
        <div class="logo">
            <h2><span id="dot">smart</span>Tech<span id="dot">.</span></h2>
        </div>
        <div class="item1">
            <a href="index.html">
                <h3><span id="dot">h</span>ome</h3>
            </a>
            <a href="#">
                <h3><span id="dot">s</span>ervices</h3>
            </a>
            <a href="#">
                <h3><span id="dot">a</span>bout</h3>
            </a>
            <a href="#">
                <h3><span id="dot">c</span>areer</h3>
            </a>
        </div>
        <div class="cont">
            <a href="contact.html" target="_blank">
                <h3><span id="dot">c</span>ontact</h3>
            </a>
        </div>
    </header>
    <div class="container">
        <div class="color1"></div>

        <form action="./loginht.php" method="post">
            
            <h1><span id="dot">l</span>ogin Here</h1>

            <div class="input-box">
                <label><span id="dot">e</span>mail</label> <br>

                <input type="text" name="email" placeholder="enter your email" required>

            </div>

            <div class="input-box">
                <label><span id="dot">p</span>assword</label> <br>
                <input type="password" name="password" placeholder="password" required>

            </div>


            <button type="submit" name="submit" class="login">Log in</button>

            <div class="btn"><button class="google">Google</button><button class="fb">Facebook</button></div>
           
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
   <script src="login.js"></script>
</body>

</html>