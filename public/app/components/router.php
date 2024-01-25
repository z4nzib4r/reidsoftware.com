<?php
$urlObj = parse_url($_SERVER['REQUEST_URI']);
$path = $urlObj['path'];

if ($path === '/') {
    $metaTitle = 'Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/home.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/greataupair') {
    $metaTitle = 'Case Study: GreatAuPair | Reid Software';
    $metaDesc = 'Connecting a global network of families and caregivers. How Reid Software helped GreatAuPair improve their user experience (UX) across all devices.';
    ob_start();
    include 'app/pages/greataupair.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/daily-report-card-online') {
    $metaTitle = 'Case Study: Daily Report Card Online | Reid Software';
    $metaDesc = 'How we partnered with researchers at Ohio University to revitalize a legacy software platform.';
    ob_start();
    include 'app/pages/drco.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/work') {
    $metaTitle = 'Our Work | Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/projects.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/services') {
    $metaTitle = 'Our Services | Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/services.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/design-research') {
    $metaTitle = 'Design Research | Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/design-research.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/product-design') {
    $metaTitle = 'Digital Product Design | Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/product-design.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/software-development') {
    $metaTitle = 'Software Development | Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/development.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/about') {
    $metaTitle = 'About Us | Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/about.php';
    $pageContent = ob_get_clean();
} elseif ($path === '/contact-us') {
    $metaTitle = 'Contact Us | Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/contact.php';
    $pageContent = ob_get_clean();
} else {
    $metaTitle = 'Reid Software | Software design and development company in Ohio';
    $metaDesc = 'We build digital products that are simple, beautiful and easy to use.';
    ob_start();
    include 'app/pages/home.php';
}
