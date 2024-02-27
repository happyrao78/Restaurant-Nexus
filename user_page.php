<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwaadGuru</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />

</head>

<body>
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food
        </a>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#speciality">Speciality</a>
            <a href="#popular">Popular</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Review</a>
            <a href="#order">Order</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="content">
            <h3>Food made with love</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit saepe libero officia ab voluptatum
                praesentium incidunt veritatis. Vero eos tempore odio dolores. Odio amet totam modi voluptas, laudantium
                sequi neque.</p>
            <a href="" class="btn">Order now</a>
        </div>
        <div class="image">
            <img src="/pictures/main.png" alt="">
        </div>
    </section>
    <section class="speciality" id="speciality">
        <h1 class="heading">Our <span>Speciality</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="pictures/gourmet-cheeseburger-sesame-seed-bun-photographed-indoors-generative-ai.jpg" alt="image" class="image">
                <div class="content">
                    <img src="pictures/burger_1161695.png" alt="burger">
                    <h3>Tasty Burger</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quod, iure natus
                        inventore ex corporis fugiat voluptatem, labore odit esse consequuntur. Facilis placeat dolorum
                        exercitationem laborum, et quidem deserunt!</p>
                </div>
            </div>
            <div class="box">
                <img src="pictures/shourav-sheikh-a66sGfOnnqQ-unsplash.jpg" alt="pizza" class="image">
                <div class="content">
                    <img src="pictures/pizza_2454221.png" alt="image">
                    <h3>Pizza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quod, iure natus
                        inventore ex corporis fugiat voluptatem, labore odit esse consequuntur. Facilis placeat dolorum
                        exercitationem laborum, et quidem deserunt!</p>
                </div>
            </div>
            <div class="box">
                <img src="pictures/sheri-silver-5A0O12BIsjY-unsplash.jpg" alt="cold ice cream" class="image">
                <div class="content">
                    <img src="pictures/ice-cream_938012.png" alt="image">
                    <h3>Cold Ice cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quod, iure natus
                        inventore ex corporis fugiat voluptatem, labore odit esse consequuntur. Facilis placeat dolorum
                        exercitationem laborum, et quidem deserunt!</p>
                </div>
            </div>
            <div class="box">
                <img src="pictures/rohan-gupta--UDFiTk2e24-unsplash.jpg" alt="cold drink" class="image">
                <div class="content">
                    <img src="pictures/soda_2935048.png" alt="image">
                    <h3>Cold drinks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quod, iure natus
                        inventore ex corporis fugiat voluptatem, labore odit esse consequuntur. Facilis placeat dolorum
                        exercitationem laborum, et quidem deserunt!</p>
                </div>
            </div>
            <div class="box">
                <img src="pictures/kobby-mendez-WXJ33HOrzvE-unsplash.jpg" alt="sweet dish" class="image">
                <div class="content">
                    <img src="pictures/food_13636655.png" alt="image">
                    <h3>Sweets</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quod, iure natus
                        inventore ex corporis fugiat voluptatem, labore odit esse consequuntur. Facilis placeat dolorum
                        exercitationem laborum, et quidem deserunt!</p>
                </div>
            </div>
            <div class="box">
                <img src="pictures/hamid-roshaan-uIiMSu88RZQ-unsplash.jpg" alt="healthy breakfast
                " class="image">
                <div class="content">
                    <img src="pictures/icons8-kawaii-bread-50.png" alt="image">
                    <h3>Chilly Paneer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quod, iure natus
                        inventore ex corporis fugiat voluptatem, labore odit esse consequuntur. Facilis placeat dolorum
                        exercitationem laborum, et quidem deserunt!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="popular" id="popular">
        <h1 class="heading">Most<span>Popular</span>Foods</h1>
        <div class="box-container">
            <div class="box">
                <span class="price">$5-$20</span>
                <img src="pictures/food-photographer-E94j3rMcxlw-unsplash.jpg" alt="image">
                <h3>Burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>
            <div class="box">
                <span class="price">$5-$20</span>
                <img src="pictures/pushpak-dsilva-r-hQw_obFd0-unsplash.jpg" alt="image">
                <h3>Chocolates</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>
            <div class="box">
                <span class="price">$5-$20</span>
                <img src="pictures/budi-puspa-wijaya-1ugpo9WYPXs-unsplash.jpg" alt="image">
                <h3>Spring roll</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>
            <div class="box">
                <span class="price">$5-$20</span>
                <img src="pictures/brian-chan-qJ0zGkrE1Zg-unsplash.jpg" alt="image">
                <h3>Cup cake</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>
            <div class="box">
                <span class="price">$5-$20</span>
                <img src="pictures/shiv-singh-Vj-J5xNjnxA-unsplash.jpg" alt="image">
                <h3>Momos</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>
            <div class="box">
                <span class="price">$5-$20</span>
                <img src="pictures/kabir-cheema-8T9AVksyt7s-unsplash.jpg" alt="image">
                <h3>Samosa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>
        </div>
    </section>
    <section class="steps">
        <div class="box">
            <img src="pictures/casey-lee-awj7sRviVXo-unsplash.jpg" alt="image">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="pictures/paolo-feser-1MFqJzNUwOM-unsplash.jpg" alt="image">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="pictures/david-dvoracek-QiPe0UpC0_U-unsplash.jpg" alt="image">
            <h3>easy payments method</h3>
        </div>
        <div class="box">
            <img src="pictures/louis-hansel-fyfoXPXq-JY-unsplash.jpg" alt="image">
            <h3>and finally, enjoy your food</h3>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <h1 class="heading">our food <span>gallery</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="pictures/vaishnav-chogale-fU5_WBTXa_Y-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>
                        Bread Omlet
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/mitchell-luo-ChXHveqrb28-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>
                        Potato Fries
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/ikhsan-baihaqi-pbc2wXbQYpI-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>
                        Noodles
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/rasmus-gundorff-saederup-nk7PHx085lo-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>
                    Tikki Chaat
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/natasha-bhogal-7sStoaxfJh0-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>
                        Naachos
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/krisztian-tabori-ZQf4jzkpz1k-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>Tacos
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/eiliv-aceron-mAQZ3X_8_l0-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>Sandwitch
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/deepal-tamang-5oF7d_hPJG4-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>
                        Dosa
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <div class="box">
                <img src="pictures/ashwini-chaudhary-monty-hyugKPPBikw-unsplash.jpg" alt="image">
                <div class="content">
                    <h3>
                        Paratha
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem earum animi error
                        deleniti esse voluptatibus, veritatis id quod dolor!</p>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="review" id="review">
        <h1 class="heading">our customers <span>reviews</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="pictures/WhatsApp Image 2023-06-07 at 11.57.15.jpg" alt="image">
                <h3>Happy Yadav</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, magnam ipsa? Numquam voluptas vero placeat. Error adipisci perferendis quibusdam qui.</p>
            </div>
            <div class="box">
                <img src="pictures/ambience mall.jpg" alt="image">
                <h3>Happy Yadav</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, magnam ipsa? Numquam voluptas vero placeat. Error adipisci perferendis quibusdam qui.</p>
            </div>
            <div class="box">
                <img src="/pictures/IMG-20230417-WA0002.jpg" alt="image">
                <h3>Happy Yadav</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, magnam ipsa? Numquam voluptas vero placeat. Error adipisci perferendis quibusdam qui.</p>
            </div>
        </div>
    </section>
    <section class="order" id="order">
        <h1 class="heading"> <span>order</span>now</h1>
        <div class="row">
            <div class="image">
                <img src="pictures/eduardo-soares-QsYXYSwV3NU-unsplash.jpg" alt="image">
            </div>
            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name"><input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number"><input type="text" placeholder="food name">
                </div>
<textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>
<input type="submit" value="order now" class="btn">
            </form>
        </div>
    </section>

<section class="footer">
    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pintrest</a>
        <a href="#" class="btn">linkedin</a>
    </div>
    <h1 class="credit">created by <span>Happy Rao</span> | All rights reserved!</h1>
</section>
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>
<div class="loader-container">
    <img src="" alt="image">
</div>
    <script src="main.js"></script>
</body>

</html>