<?php
    $urlObj = parse_url( $_SERVER['REQUEST_URI'] );
    $path = $urlObj['path'];

    if ( $path === '/' ) {
        $metaTitle = 'Reid Software - We build exciting things';
        $metaDesc = 'We specialize in creating software that empowers educators to bring out the best in their students.';
        ob_start();
        include 'app/pages/home.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/greataupair' ) {
        $metaTitle = 'Case Study: GreatAuPair | Reid Software';
        $metaDesc = 'Connecting a global network of families and caregivers. How Reid Software helped GreatAuPair improve their user experience (UX) across all devices.';
        ob_start();
        include 'app/pages/greataupair.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/daily-report-card-online' ) {
        $metaTitle = 'Case Study: Daily Report Card Online | Reid Software';
        $metaDesc = 'Improving academic outcomes for elementary school students. How Reid Software partnered with researchers at Ohio University to revitalize an innovative software platform.';
        ob_start();
        include 'app/pages/drco.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/projects' ) {
        $metaTitle = 'Projects | Reid Software | Software design and development company';
        $metaDesc = 'We build digital products for education research that are simple, beautiful and easy to use.';
        ob_start();
        include 'app/pages/projects.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/services' ) {
        $metaTitle = 'Our Services | Reid Software | Software design and development company';
        $metaDesc = 'Reid Software is a software development company specializing in the creation of engaging digital products.';
        ob_start();
        include 'app/pages/services.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/design-research' ) {
        $metaTitle = 'Design Research | Reid Software | Software design and development company';
        $metaDesc = 'Reid Software is a software development company specializing in the creation of engaging digital products.';
        ob_start();
        include 'app/pages/design-research.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/product-design' ) {
        $metaTitle = 'Digital Product Design | Reid Software | Software design and development company';
        $metaDesc = 'Reid Software is a software design and development company specializing in the creation of engaging digital products.';
        ob_start();
        include 'app/pages/product-design.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/software-development' ) {
        $metaTitle = 'Software Development | Reid Software | Software design and development company';
        $metaDesc = 'Reid Software is a software design and development company specializing in the creation of engaging digital products.';
        ob_start();
        include 'app/pages/development.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
    } elseif ( $path === '/about' ) {
        $metaTitle = 'About Us | Reid Software | Software design and development company';
        $metaDesc = 'Reid Software is a software design and development company specializing in the creation of engaging digital products.';
        ob_start();
        include 'app/pages/about.php';
        include 'app/partials/testimonials.php';
        $pageContent = ob_get_clean();
     } elseif ( $path === '/contact-us' ) {
        $metaTitle = 'Contact Us | Reid Software | Software design and development company';
        $metaDesc = 'Reid Software is a software design and development company specializing in the creation of engaging digital products.';
        ob_start();
        include 'app/pages/contact.php';
        $pageContent = ob_get_clean();
    } else {
        $metaTitle = 'Reid Software - Software development company in Ohio';
        $metaDesc = 'Reid Software is a software design and development company specializing in the creation of engaging digital products.';
        ob_start();
        include 'app/pages/home.php';
        include 'app/partials/testimonials.php';
    }
?>