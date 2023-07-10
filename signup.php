<?php
include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e-comm</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <section id="header">
        <div>
            <a href="#"><img src="img/logo_3.png" class="logo" alt=""> </a>
        </div>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html" class="active"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    <section id="page-header" class="about-header">
        <h2 class="text-5xl font-semibold mb-6">Sign Up</h2>
        <p>Register if you are new user</p>
    </section>
    <div class="container">
        <div class="flex items-center justify-center min-h-screen">
            <div class="max-w-md w-full bg-white p-6 rounded-md shadow-lg">
                <h2 class="text-3xl font-semibold mb-6 text-center">Sign Up</h2>
                <form action="login_register.php" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input type="text" id="name" name="name" required
                            class="w-full border border-gray-300 rounded-md px-4 py-2">
                    </div>
                    <div>
                        <label for="username" class="block text-gray-700">User name:</label>
                        <input type="text" id="Username" name="username" required
                            class="w-full border border-gray-300 rounded-md px-4 py-2">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" id="email" name="email" required
                            class="w-full border border-gray-300 rounded-md px-4 py-2">
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700">Password:</label>
                        <input type="password" id="password" name="password" required
                            class="w-full border border-gray-300 rounded-md px-4 py-2">
                    </div>

                    <div>
                        <button type="submit" name="submit"
                            class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300">Sign
                            Up</button>
                    </div>
                    <div class="text-center">
                        <span class="text-gray-600">Already have an account?</span>
                        <a href="login.php" class="text-blue-500">Log in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo_3.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Riyality fashion store civil lines Dharamshala 176215</p>
            <p><strong>Phone:</strong> +91 7018441050 / 01905-268008</p>
            <p><strong>Hours:</strong> 10:00-18:00 Mon-Sat</p>
            <div class="follow">
                <h4>follow us</h4>
            </div>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>

        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Primary Policy</a>
            <a href="#">Terms & conditions</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign-in</a>
            <a href="#">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google play</p>
            <div class="row"></div>
            <img src="img/pay/app.jpg" alt="">
            <img src="img/pay/play.jpg" alt="">
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>&copy Riyality fashion store-2023</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>



<div class="flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white p-6 rounded-md shadow-lg">
        <h2 class="text-3xl font-semibold mb-6 text-center">Sign Up</h2>
        <form action="register.php" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div>
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div>
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div>
                <label for="confirm_password" class="block text-gray-700">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300">Sign
                    Up</button>
            </div>
            <div class="text-center">
                <span class="text-gray-600">Already have an account?</span>
                <a href="login.php" class="text-blue-500">Log in</a>
            </div>
        </form>
    </div>
</div>
</div>