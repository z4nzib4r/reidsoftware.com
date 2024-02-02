<?php
$urlObj = parse_url($_SERVER['REQUEST_URI']);
$path = $urlObj['path'];

$navTheme = 'dark';

if ($path === '/') {
    $metaTitle = 'Innovative Digital Solutions & Transformation | Reid Software';
    $metaDesc = 'Unleash your business potential with our strategic planning, product design, top-notch development, and seamless AI integrations. Turn your great ideas into digital realities today.';
    ob_start();
    include 'app/pages/home.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/greataupair') {
    $metaTitle = 'Case Study: GreatAuPair | Reid Software';
    $metaDesc = 'Modernizing a classic SaaS platform. How we helped GreatAuPair improve their user experience across all devices and platforms.';
    ob_start();
    include 'app/pages/greataupair.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/daily-report-card-online') {
    $metaTitle = 'Case Study: Daily Report Card Online | Reid Software';
    $metaDesc = 'How we partnered with researchers at Ohio University to revitalize a legacy software platform.';
    ob_start();
    include 'app/pages/drco.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/athens-medical-massage') {
    $metaTitle = 'Case Study: Athens Medical Massage | Reid Software';
    $metaDesc = 'Bringing a small business into the digital age. How we helped Athens Medical Massage completely modernize their business operations and client experience.';
    ob_start();
    include 'app/pages/athens-massage.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/work') {
    $metaTitle = 'Cutting-Edge Case Studies | Digital Strategy, Development, & AI Integration Services | Reid Software';
    $metaDesc = 'Delve into our case studies and explore how our innovative solutions in digital strategy, product design, development, and AI integrations have driven digital transformation success for businesses like yours.';
    ob_start();
    include 'app/pages/projects.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/services') {
    $metaTitle = 'Our Services | Strategy, Product Design, Development, Digital Transformation, AI Integration | Reid Software';
    $metaDesc = 'Discover our expert strategies, original product design, advanced development, effective digital transformation, and smart AI integrations designed to bring you to the forefront of the digital world.';
    ob_start();
    include 'app/pages/services.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/strategy') {
    $metaTitle = 'Unleash Success With Proactive Digital Strategy | Reid Software';
    $metaDesc = 'Maximize your business potential with our expert strategy services. Our digital agency offers you a holistic strategic approach tailored to your needs. Drive business growth and secure a successful future today.';
    ob_start();
    include 'app/pages/strategy.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/product-design') {
    $metaTitle = 'Innovative Product Design Services | Unique & User-centric Designs | Reid Software';
    $metaDesc = 'Transform your vision into reality with our top-notch product design solutions. We specialize in creating innovative, user-friendly design experiences, driving your business to new levels of success.';
    ob_start();
    include 'app/pages/product-design.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/software-development') {
    $metaTitle = ' Comprehensive Software Development Solutions | Tailored Systems | Reid Software';
    $metaDesc = 'We provide tailored software development solutions that empower your business functions. Boost your operations with our high-quality, secure, and scalable software systems designed to fit your specific needs.';
    ob_start();
    include 'app/pages/development.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/about') {
    $metaTitle = 'About Us | Pioneering Digital Innovations & Services | Reid Software';
    $metaDesc = "Discover more about our company. We are experts in delivering strategic digital solutions, from product design to AI integrations, we're here to facilitate your digital transformation.";
    ob_start();
    include 'app/pages/about.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/contact-us') {
    $metaTitle = 'Get in Touch with our Digital Experts | Contact Reid Software';
    $metaDesc = "Ready to take your business digital? Contact our team of expert strategists, designers, and developers to discuss how we can facilitate your business's digital metamorphosis.";
    ob_start();
    include 'app/pages/contact.php';
    $pageContent = ob_get_clean();
} else {
    $metaTitle = 'Innovative Digital Solutions & Transformation | Reid Software';
    $metaDesc = "Unleash your business potential with our strategic planning, product design, top-notch development, and seamless AI integrations. Turn your great ideas into digital realities today.";
    ob_start();
    include 'app/pages/home.php';
}
