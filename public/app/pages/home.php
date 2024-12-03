<div id="hero-section">
    <video id="hero-video" width="100%" height="auto" poster="" muted loop autoplay>
        <source src="/assets/video/bg-video-med.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- <img id="hero-img" src="/assets/img/hero/hero.jpg" /> -->
    <div id="hero-overlay"></div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-md-12 col-lg-10">
                <div class="hero-content">
                    <h1>Building innovative technology for K-12 classrooms</h1>
                    <p class="hero-tagline">We promote educational excellence through custom digital solutions and strategic collaboration.</p>
                    <a href="#case-studies" class="btn btn-primary">See our work</a>
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
                <p>We specialize in crafting comprehensive and innovative software solutions tailored for the education sector. Through our collaborative approach, we help propel educational institutions into the digital future with impactful and advanced technology solutions.</p>
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
                <h3>Advancing education through innovative solutions</h3>
            </div>
            <div class="col-12 col-lg-9 pb-4">
                <p class="mb-4">Explore our portfolio of transformative projects, where our expertise in strategy, design, and technology comes together to enhance learning environments and drive educational success.</p>
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