<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <!-- <header>
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
    </header> -->
    <div class="main">
        <div class="box">
            <h1><span id="dot">sign up </span> </h1>
            <h2><span id="dot">welcome!!</span> create your profile in nico brand.</h2>

            <form id="form" action="./signupht.php" method="post" enctype="multipart/form-data">


                <div class="box2">
                    <div class="left">
                        <label for="name"><span id="dot">f</span>irst name</label>
                        <input type="text" name="fname" placeholder="enter your first name">
                        <label for="email"><span id="dot">e</span>mail</label>
                        <input type="email" name="email" placeholder="enter your email">
                        <label for="password"><span id="dot">p</span>assword</label>
                        <input type="password" name="password" placeholder="enter your password">
                        <label for="state"><span id="dot">s</span>tate</label>
                        <select name="state" id="state">
                            <option value="NAN">Select Your State</option>
                            <option value="andhra pradesh">andhra pradesh</option>
                            <option value="assam">assam</option>
                            <option value="bihar">bihar</option>
                            <option value="gujarat">gujarat</option>
                            <option value="madhya pradesh">madhya pradesh</option>
                            <option value="maharastra">maharastra</option>
                            <option value="punjab">punjab</option>
                            <option value="uttar pradesh">uttar pradesh</option>
                        </select>
                        <label for="name"><span id="dot">U</span>plode image</label>
                        <input type="file" name="image">

                    </div>
                    <div class="right">
                        <label for="name"><span id="dot">l</span>ast name</label>
                        <input type="text" name="lname" placeholder="enter your last name">
                        <label for="number"><span id="dot">p</span>hone no.</label>
                        <input type="number" name="pnumber" placeholder="enter your phone no.">
                        <label for="password"><span id="dot">c</span>onfirm password</label>
                        <input type="password" name="cpassword" placeholder="confirm password...">
                        <label for="country"><span id="dot">c</span>ountry</label>
                        <select name="country" id="country">
                            <option value="NAN">Select Your Country</option>
                            <option value="afghanistan">afghanistan</option>
                            <option value="america">america</option>
                            <option value="chaina">chaina</option>
                            <option value="india">india</option>
                            <option value="pakisthan">pakisthan</option>
                            <option value="west bangal">west bangal</option>
                            <option value="sri lanka">sri lanka</option>

                        </select>

                    </div>

                </div>
                <button id="submit">create account</button>
            </form>
        </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="singup.js"></script> -->
</body>

</html>