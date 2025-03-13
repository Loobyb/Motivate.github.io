
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivate - Inspire Your Journey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(45deg,rgb(122, 18, 22),rgba(110, 101, 23, 0.48));
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .about, .blog, .gallery, .contact {
            padding: 50px 20px;
        }
        footer {
            background: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<?php  include "header.php"; ?>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Welcome to Motivate</h1>
            <p>Empowering You to Overcome and Achieve</p>
        </div>
    </div>

    <!-- About Us -->
    <section id="about" class="about bg-light">
        <div class="container">
            <h2>About Us</h2>
            <p>Motivate was founded by Darius Banks with a vision to inspire and empower individuals to unlock their potential and achieve greatness. Through motivational stories, practical advice, and a supportive community, we help you break through barriers and rise above challenges.</p>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog">
        <div class="container">
            <h2>Latest Articles</h2>
            <p>Stay motivated with our curated content designed to push you toward success.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery bg-light">
        <div class="container">
            <h2>Inspiring Moments</h2>
            <p>Visual stories that ignite your spirit and motivate your journey.</p>
        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <? include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>




