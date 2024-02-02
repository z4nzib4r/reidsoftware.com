<div id="hero-section">
    <video id="hero-video" width="100%" height="auto" poster="" muted loop autoplay>
        <source src="/assets/video/3411347255-preview.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <!-- <img id="hero-img" src="/assets/img/hero/hero.jpg" /> -->
    <div id="hero-overlay"></div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-md-12 col-lg-9">
                <div class="hero-content">
                    <h1>We turn great ideas into innovative digital solutions</h1>
                    <p class="hero-tagline">Unlock the power of digital transformation with our comprehensive approach to strategy, product design, and development.</p>
                    <a href="/work" class="btn btn-primary">See our work</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about-section" class="home-section">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-md-8 col-lg-6">
                <h2 class="section-title">What we do</h2>
                <h3>We are your design and technology partner</h3>
                <p>We specialize in providing comprehensive and innovative software solutions that drive growth and propel your business into the digital future.</p>
                <a href="/services" class="btn btn-primary">Our services</a>
            </div>
        </div>
    </div>
    <div class="section-image">
        <img src="/assets/img/shape-stack-3.png">
    </div>
</div>


<div id="case-studies" class="project-highlight home-section d-flex flex-column">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <h2 class="section-title">Case studies</h2>
                <h3>Empowering businesses through digitization</h3>
            </div>
            <div class="col-12 col-lg-9 pb-4">
                <p class="mb-4">Explore our showcase of cutting-edge digital solutions, where our wide array of expertise seamlessly merges to redefine business possibilities.</p>
            </div>
        </div>
    </div>
    <?php include 'app/partials/case-studies.php'; ?>
</div>

<?php
$i = 4;
include 'app/partials/testimonials.php';
?>

<?php include 'app/partials/services-list.php'; ?>

<?php include 'app/partials/faq.php'; ?>