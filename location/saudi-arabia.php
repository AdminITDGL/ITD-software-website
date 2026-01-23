<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ITD Services Saudi Arabia - Streamline delivery, tracking, and operations with our advanced logistics and courier management software in Saudi Arabia. Designed for ecommerce growth and real-time efficiency.">
    <meta name="keywords" content="Courier Management Software Saudi Arabia, Logistics Software Saudi Arabia, ITD Services Saudi Arabia, Courier Solutions Saudi Arabia">
    <meta name="author" content="ITD Services Pvt Ltd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Site -->
    <title>ITD Services Saudi Arabia: Best Courier Management Software</title>

    <?php include('header_script.php')?>
    
    <style>
        /* Reduce Banner Height - Remove Top and Bottom Padding */
        .banner__one {
            padding: 0 !important;
        }
        
        /* Enhanced Banner Left Content Styles - Matching Site Design */
        .banner__one-content {
            position: relative;
            z-index: 3;
            padding: 30px 0;
            animation: fadeInLeft 0.8s ease-out;
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .banner__one-content .subtitle-one {
            display: inline-block;
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-color-1);
            text-transform: capitalize;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            padding: 10px 24px;
            background: rgba(14, 89, 242, 0.08);
            border-radius: 30px;
            border: 1px solid rgba(14, 89, 242, 0.15);
            font-family: var(--body-font);
            position: relative;
            overflow: hidden;
            animation: slideInDown 0.6s ease-out 0.2s both;
        }
        
        .banner__one-content .subtitle-one::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 3s infinite;
        }
        
        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .banner__one-content h2 {
            font-size: 56px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 25px;
            color: var(--text-heading-color);
            text-transform: none;
            font-family: var(--heading-font);
            animation: fadeInUp 0.8s ease-out 0.3s both;
            position: relative;
        }
        
        .banner__one-content h2 span {
            color: var(--primary-color-1);
            display: inline;
        }
        
        @keyframes gradientShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .banner__one-content h2::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 100px;
            height: 4px;
            background: var(--primary-color-1);
            border-radius: 2px;
            animation: expandWidth 1s ease-out 0.8s both;
        }
        
        @keyframes expandWidth {
            from {
                width: 0;
            }
            to {
                width: 100px;
            }
        }
        
        .banner__one-content p {
            font-size: 18px;
            line-height: 1.8;
            color: var(--body-color);
            margin-bottom: 35px;
            max-width: 93%;
            text-transform: none;
            animation: fadeInUp 0.8s ease-out 0.5s both;
            position: relative;
            font-family: var(--body-font);
        }
        
        .banner__one-content .btn-two {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 35px;
            font-size: 16px;
            font-weight: 600;
            background: var(--primary-color-1);
            color: var(--text-white);
            border: 2px solid var(--primary-color-1);
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.4s ease;
            text-transform: none;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out 0.7s both;
            font-family: var(--body-font);
        }
        
        .banner__one-content .btn-two:hover {
            background-color: transparent;
            color: var(--text-heading-color);
            border-color: var(--primary-color-1);
        }
        
        .banner__one-content .btn-two i {
            position: relative;
            transition: transform 0.3s ease, color 0.3s ease;
            color: inherit;
        }
        
        .banner__one-content .btn-two:hover i {
            transform: translateX(5px);
            color: var(--text-heading-color);
        }
        
        /* Decorative Elements Matching Site Style */
        .banner__one-content::before {
            content: '';
            position: absolute;
            top: -40px;
            left: -40px;
            width: 180px;
            height: 180px;
            background: rgba(14, 89, 242, 0.06);
            border-radius: 50%;
            z-index: -1;
            animation: pulse 4s ease-in-out infinite;
        }
        
        .banner__one-content::after {
            content: '';
            position: absolute;
            bottom: -20px;
            right: -20px;
            width: 120px;
            height: 120px;
            background: rgba(14, 89, 242, 0.04);
            border-radius: 50%;
            z-index: -1;
            animation: pulse 4s ease-in-out infinite 2s;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.6;
            }
            50% {
                transform: scale(1.15);
                opacity: 0.8;
            }
        }
        
        /* Responsive Design */
        @media (max-width: 1399px) {
            .banner__one-content h2 {
                font-size: 52px;
            }
            .banner__one-content p {
                font-size: 17px;
            }
        }
        
        @media (max-width: 1199px) {
            .banner__one-content h2 {
                font-size: 48px;
            }
        }
        
        @media (max-width: 991px) {
            .banner__one-content {
                padding: 20px 0;
                text-align: center;
                margin-bottom: 30px;
            }
            
            .banner__one-content h2 {
                font-size: 42px;
                max-width: 585px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .banner__one-content h2::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .banner__one-content p {
                margin: 0 auto 30px;
                max-width: 100%;
            }
        }
        
        @media (max-width: 767px) {
            .banner__one-content h2 {
                font-size: 36px;
                line-height: 1.3;
            }
            
            .banner__one-content p {
                font-size: 16px;
            }
            
            .banner__one-content .subtitle-one {
                font-size: 14px;
                padding: 8px 20px;
            }
            
            .banner__one-content .btn-two {
                padding: 14px 30px;
                font-size: 15px;
            }
        }
        
        @media (max-width: 535px) {
            .banner__one-content h2 {
                font-size: 32px;
                line-height: 1.4;
            }
        }
        
        /* Banner Form Styles */
        .banner__one-form {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 35px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .banner-form-wrapper h3 {
            font-size: 28px;
            font-weight: 700;
            color: var(--text-heading-color);
            margin-bottom: 25px;
            text-align: center;
            line-height: 1.3;
        }
        
        .banner-contact-form .form-group {
            margin-bottom: 20px;
        }
        
        .banner-contact-form label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: var(--text-heading-color);
            margin-bottom: 8px;
            text-transform: capitalize;
        }
        
        .banner-contact-form .required {
            color: #e74c3c;
        }
        
        .banner-contact-form input[type="text"],
        .banner-contact-form input[type="email"],
        .banner-contact-form input[type="tel"],
        .banner-contact-form select,
        .banner-contact-form textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            color: var(--body-color);
            transition: all 0.3s ease;
            background: #fff;
            font-family: var(--body-font);
        }
        
        .banner-contact-form input[type="text"]:focus,
        .banner-contact-form input[type="email"]:focus,
        .banner-contact-form input[type="tel"]:focus,
        .banner-contact-form select:focus,
        .banner-contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-color-1);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        }
        
        .banner-contact-form select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            padding-right: 40px;
        }
        
        .banner-contact-form textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .btn-form-submit {
            width: 100%;
            padding: 15px 30px;
            background: var(--primary-color-1);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: capitalize;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .btn-form-submit:hover {
            background: var(--primary-color-2);
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 123, 255, 0.3);
        }
        
        .btn-form-submit i {
            transition: transform 0.3s ease;
        }
        
        .btn-form-submit:hover i {
            transform: translateX(5px);
        }
        
        @media (max-width: 991px) {
            .banner__one-form {
                padding: 25px;
                margin-top: 30px;
            }
            
            .banner-form-wrapper h3 {
                font-size: 24px;
                margin-bottom: 20px;
            }
        }
        
        @media (max-width: 767px) {
            .banner__one-form {
                padding: 20px;
            }
            
            .banner-form-wrapper h3 {
                font-size: 22px;
            }
        }
        
        /* Trusted Clients Section Styles */
        .trusted-clients__area {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }
        
        .trusted-clients__area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(0, 123, 255, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .trusted-clients__title {
            margin-bottom: 50px;
        }
        
        .trusted-clients__title h2 {
            font-size: 48px;
            margin-bottom: 15px;
            line-height: 1.2;
        }
        
        .trusted-clients__title p {
            font-size: 18px;
            color: #666;
            margin-top: 15px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .trusted-clients__carousel-wrapper {
            position: relative;
            padding: 40px 0;
        }
        
        .trusted-clients__item {
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            transition: transform 0.3s ease;
        }
        
        .trusted-clients__item-inner {
            background: #ffffff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        
        .trusted-clients__item-inner::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s ease;
        }
        
        .trusted-clients__item:hover .trusted-clients__item-inner {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 123, 255, 0.15);
            border-color: var(--primary-color-1);
        }
        
        .trusted-clients__item:hover .trusted-clients__item-inner::before {
            left: 100%;
        }
        
        .trusted-clients__item-inner img {
            max-width: 100%;
            max-height: 140px;
            height: auto;
            width: auto;
            object-fit: contain;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.4s ease;
        }
        
        .trusted-clients__item:hover .trusted-clients__item-inner img {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.1);
        }
        
        .trusted-clients__slider {
            overflow: hidden;
        }
        
        /* Animation for trusted clients items */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .trusted-clients__item.animate-fade-in {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .trusted-clients__item {
            opacity: 0;
        }
        
        .trusted-clients__item.animate-fade-in {
            opacity: 1;
        }
        
        @media (max-width: 991px) {
            .trusted-clients__title h2 {
                font-size: 38px;
            }
            
            .trusted-clients__title {
                margin-bottom: 40px;
            }
            
            .trusted-clients__item-inner {
                height: 170px;
                padding: 35px;
            }
            
            .trusted-clients__item-inner img {
                max-height: 140px;
            }
        }
        
        @media (max-width: 767px) {
            .trusted-clients__title h2 {
                font-size: 32px;
            }
            
            .trusted-clients__title p {
                font-size: 16px;
            }
            
            .trusted-clients__item-inner {
                height: 160px;
                padding: 30px;
            }
            
            .trusted-clients__item-inner img {
                max-height: 120px;
            }
        }
        
        @media (max-width: 575px) {
            .trusted-clients__item-inner {
                height: 140px;
                padding: 30px;
            }
            
            .trusted-clients__item-inner img {
                max-height: 100px;
            }
        }
        
        /* Smart Courier Solutions Section Styles */
        .smart-solutions__area {
            background: #ffffff;
            position: relative;
            overflow: hidden;
        }
        
        .smart-solutions__area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 123, 255, 0.02) 0%, rgba(255, 255, 255, 0) 100%);
            pointer-events: none;
        }
        
        .smart-solutions__title {
            margin-bottom: 60px;
            position: relative;
            z-index: 1;
        }
        
        .smart-solutions__title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .smart-solutions__title p {
            font-size: 18px;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }
        
        .smart-solutions__item {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px 35px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .smart-solutions__item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .smart-solutions__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(0, 123, 255, 0.15);
            border-color: var(--primary-color-1);
        }
        
        .smart-solutions__item:hover::before {
            transform: scaleX(1);
        }
        
        .smart-solutions__item-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: linear-gradient(135deg, rgba(0, 123, 255, 0.1) 0%, rgba(0, 123, 255, 0.05) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: all 0.4s ease;
            position: relative;
        }
        
        .smart-solutions__item-icon::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(0, 123, 255, 0.1);
            transform: translate(-50%, -50%);
            transition: all 0.5s ease;
        }
        
        .smart-solutions__item:hover .smart-solutions__item-icon {
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            transform: scale(1.1) rotate(5deg);
        }
        
        .smart-solutions__item:hover .smart-solutions__item-icon::after {
            width: 100px;
            height: 100px;
        }
        
        .smart-solutions__item-icon i {
            font-size: 42px;
            color: var(--primary-color-1);
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
        }
        
        .smart-solutions__item:hover .smart-solutions__item-icon i {
            color: #ffffff;
            transform: scale(1.1);
        }
        
        .smart-solutions__item-content h4 {
            font-size: 22px;
            font-weight: 700;
            color: var(--text-heading-color);
            margin-bottom: 15px;
            transition: color 0.3s ease;
            line-height: 1.3;
        }
        
        .smart-solutions__item:hover .smart-solutions__item-content h4 {
            color: var(--primary-color-1);
        }
        
        .smart-solutions__item-content p {
            font-size: 16px;
            color: #666;
            line-height: 1.7;
            margin: 0;
        }
        
        @media (max-width: 991px) {
            .smart-solutions__title h2 {
                font-size: 38px;
            }
            
            .smart-solutions__title {
                margin-bottom: 50px;
            }
            
            .smart-solutions__item {
                padding: 35px 30px;
            }
            
            .smart-solutions__item-icon {
                width: 70px;
                height: 70px;
                margin-bottom: 20px;
            }
            
            .smart-solutions__item-icon i {
                font-size: 38px;
            }
        }
        
        @media (max-width: 767px) {
            .smart-solutions__title h2 {
                font-size: 32px;
            }
            
            .smart-solutions__title p {
                font-size: 16px;
            }
            
            .smart-solutions__title {
                margin-bottom: 40px;
            }
            
            .smart-solutions__item {
                padding: 30px 25px;
            }
            
            .smart-solutions__item-content h4 {
                font-size: 20px;
            }
            
            .smart-solutions__item-content p {
                font-size: 15px;
            }
        }
        
        /* Work Process Contact Section Styles */
        .work-process-description {
            font-size: 18px;
            color: #fff;
            margin-top: 20px;
            opacity: 0.95;
        }
        
        .work-process-contact__wrapper {
            margin-top: 50px;
        }
        
        .work-process-contact__item {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 35px 30px;
            text-align: center;
            transition: all 0.4s ease;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .work-process-contact__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 123, 255, 0.2);
            border-color: var(--primary-color-1);
            background: #ffffff;
        }
        
        .work-process-contact__item-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: all 0.4s ease;
        }
        
        .work-process-contact__item:hover .work-process-contact__item-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.3);
        }
        
        .work-process-contact__item-icon i {
            font-size: 28px;
            color: #ffffff;
        }
        
        .work-process-contact__item-content h5 {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-heading-color);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .work-process-contact__item-content a {
            font-size: 16px;
            color: var(--primary-color-1);
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .work-process-contact__item-content a:hover {
            color: var(--primary-color-2);
            transform: translateX(5px);
        }
        
        .work-process-contact__item-content span {
            font-size: 16px;
            color: #666;
            font-weight: 500;
        }
        
        @media (max-width: 991px) {
            .work-process-description {
                font-size: 16px;
            }
            
            .work-process-contact__item {
                padding: 30px 25px;
            }
        }
        
        @media (max-width: 767px) {
            .work-process-description {
                font-size: 15px;
            }
            
            .work-process-contact__item {
                padding: 25px 20px;
            }
            
            .work-process-contact__item-icon {
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }
            
            .work-process-contact__item-icon i {
                font-size: 24px;
            }
            
            .work-process-contact__item-content h5 {
                font-size: 16px;
            }
            
            .work-process-contact__item-content a,
            .work-process-contact__item-content span {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV2DXLX4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <?php include('header.php')?>

    <!-- Banner Area Start -->
    <div class="banner__one">
        <div class="banner-shape">
            <div class="shape banner-shape-1"></div>
            <div class="shape banner-shape-2"></div>
            <div class="shape banner-shape-3"></div>
            <div class="shape banner-shape-4"></div>
            <img class="shape banner-shape-5" src="../assets/img/shape/banner-shape.png" alt="image">
            <div class="shape banner-shape-7"></div>
            <div class="shape banner-shape-6"></div>
        </div>
        <div class="container">
            <div class="row align-items-center gy-4 justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner__one-content">
                        <span class="subtitle-one">ITD Services in Saudi Arabia
                        </span>
                        <h2>Courier Management and Logistics Software in <span>Saudi Arabia</span></h2>
                        <p>ITD Services offers courier and logistics software in Saudi Arabia to simplify operations and improve delivery efficiency across Saudi Arabia.
                        </p>
                        <a href="../contact.php" class="btn-two">Contact Now
							<i class="fas fa-arrow-right"></i>
						</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-9">
                    <div class="banner__one-form">
                        <div class="banner-form-wrapper">
                            <h3>Get a Free Consultation</h3>
                            <form class="banner-contact-form" action="https://api.web3forms.com/submit" method="POST" id="banner-contact-form-saudi">
                                <input type="hidden" name="access_key" value="b409ebca-4b48-47dc-bdb3-2dd579ba4d92">
                                <input type="hidden" name="subject" value="Free Consultation Request - Saudi Arabia Page">
                                <input type="hidden" name="from_name" value="ITD Services - Saudi Arabia">
                                <input type="hidden" name="location" value="Saudi Arabia">
                                <input type="hidden" name="cc" value="ashish@itdservices.in">
                                <input type="checkbox" name="botcheck" id="botcheck-saudi" style="display: none;" tabindex="-1" autocomplete="off">
                                
                                <div class="form-group">
                                    <label for="full_name">Full Name <span class="required">*</span></label>
                                    <input type="text" id="full_name" name="name" required placeholder="Enter your full name" minlength="2">
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Company Name <span class="required">*</span></label>
                                    <input type="text" id="company_name" name="company" required placeholder="Enter your company name" minlength="2">
                                </div>
                                <div class="form-group">
                                    <label for="email_address">Email Address <span class="required">*</span></label>
                                    <input type="email" id="email_address" name="email" required placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number <span class="required">*</span></label>
                                    <input type="tel" id="phone_number" name="phone" required placeholder="Enter your phone number" pattern="[0-9\s\-\+\(\)]{10,}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-form-submit">Submit Request <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Trusted Clients Area Start -->
    <div class="trusted-clients__area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center">
                    <div class="trusted-clients__title animate-y-axis-slider">
                        <span class="subtitle-one">Trusted Clients</span>
                        <h2>Our <span class="highlighted-two">Trusted Partners</span> in Saudi Arabia</h2>
                        <p>We're proud to work with leading businesses across Saudi Arabia who trust us with their logistics and courier management needs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="trusted-clients__carousel-wrapper">
                        <div class="swiper trusted-clients__slider">
                            <div class="swiper-wrapper">
                                <div class="trusted-clients__item swiper-slide animate-y-axis-slider">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/bombino logo.webp" alt="Bombino">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide animate-y-axis-slider">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/citi network courier.png" alt="Citi Network Courier">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide animate-y-axis-slider">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/navlai enterprise logo.png" alt="Navlai Enterprise">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide animate-y-axis-slider">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/pannest logo.png" alt="Pannest">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide animate-y-axis-slider">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/pegasus logo.jpg" alt="Pegasus">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted Clients Area End -->

    <!-- Smart Courier Solutions Area Start -->
    <div class="smart-solutions__area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 text-center">
                    <div class="smart-solutions__title animate-y-axis-slider">
                        <span class="subtitle-one">Our Solutions</span>
                        <h2>Smart Courier Solutions <span class="highlighted-two">for Saudi Arabia</span></h2>
                        <p>Comprehensive logistics management tools designed to streamline your courier operations and enhance delivery efficiency across Saudi Arabia.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="smart-solutions__item animate-y-axis-slider">
                        <div class="smart-solutions__item-icon">
                            <i class="flaticon-global-network"></i>
                        </div>
                        <div class="smart-solutions__item-content">
                            <h4>Courier Management System</h4>
                            <p>Manage every shipment with ease through one dashboard designed for speed, control, and accuracy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="smart-solutions__item animate-y-axis-slider">
                        <div class="smart-solutions__item-icon">
                            <i class="flaticon-mobile-phone-1"></i>
                        </div>
                        <div class="smart-solutions__item-content">
                            <h4>Smart Delivery Tracking</h4>
                            <p>Schedule deliveries smartly and track each shipment live for complete visibility and timely updates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="smart-solutions__item animate-y-axis-slider">
                        <div class="smart-solutions__item-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <div class="smart-solutions__item-content">
                            <h4>Warehouse & Hub Management</h4>
                            <p>Monitor inventory, routes, and hub operations to keep your logistics network running efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="smart-solutions__item animate-y-axis-slider">
                        <div class="smart-solutions__item-icon">
                            <i class="flaticon-good-feedback"></i>
                        </div>
                        <div class="smart-solutions__item-content">
                            <h4>Proof of Delivery System</h4>
                            <p>Ensure successful deliveries with instant proof updates, digital signatures, and real-time confirmations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="smart-solutions__item animate-y-axis-slider">
                        <div class="smart-solutions__item-icon">
                            <i class="flaticon-web-research"></i>
                        </div>
                        <div class="smart-solutions__item-content">
                            <h4>API Integration</h4>
                            <p>Connect with CRMs, ERPs, and get detailed reports that help you plan, track, and optimize operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="smart-solutions__item animate-y-axis-slider">
                        <div class="smart-solutions__item-icon">
                            <i class="flaticon-it-service"></i>
                        </div>
                        <div class="smart-solutions__item-content">
                            <h4>Fleet & Driver Management</h4>
                            <p>Assign drivers, monitor routes, and track vehicle performance for smooth daily delivery operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Smart Courier Solutions Area End -->

    <!-- Why Choose us Area Start -->
    <div class="why-choose-us__one section-padding">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="why-choose-us__one-left">
                        <div class="why-choose-us__one-title">
                            <span class="subtitle-one">Why Choose Us</span>
                            <h2>Why Businesses in Saudi Arabia <span class="highlighted-two">Choose Us</span></h2>
                            <p>Discover why leading companies across Saudi Arabia trust ITD Services for their courier and logistics management needs.</p>
                        </div>
                        <div class="why-choose-us__one-quality">
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-global-network"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>All-in-One Courier Platform</h4>
                                    <p>Plan routes, track deliveries, and manage all operations from one simple dashboard.</p>
                                </div>
                            </div>
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-mobile-phone-1"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>Live Shipment Tracking</h4>
                                    <p>Get real-time updates and proof of delivery for every shipment, ensuring complete transparency.</p>
                                </div>
                            </div>
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-idea"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>Custom Software for Your Business</h4>
                                    <p>We create courier management systems designed around your workflow, from pickup to delivery.</p>
                                </div>
                            </div>
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-it-service"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>Automated Dispatch System</h4>
                                    <p>Optimize delivery routes and assign shipments automatically for faster and more accurate dispatching.</p>
                                </div>
                            </div>
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-good-feedback"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>Trusted Companies Across Saudi Arabia</h4>
                                    <p>From courier firms to businesses across Riyadh, Jeddah, Dammam and all major cities rely on ITD Services accuracy.</p>
                                </div>
                            </div>
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-web-research"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>Dedicated Support Team</h4>
                                    <p>Our Saudi Arabia-based team provides fast technical help and guidance to ensure your operations run smoothly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10">
                    <div class="why-choose-us__one-image">
                        <div class="why-choose-us__one-image-shape">
                            <div class="shape shape-1 animate-x-axis"></div>
                            <div class="shape shape-2 animate-x-axis"></div>
                            <img src="../assets/img/shape/why-choose-shape.png" alt="" class="shape shape-3 animate-y-axis">
                        </div>
                        <img src="../assets/img/why-choose-us/why-choose.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why choose us Area End -->

    <!-- Work process Area Start -->
    <div class="work-process-area__one section-padding" style="background-image: url(../assets/img/work-process/work-process-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="work-process-area__one-title text-center">
                        <div class="work-process-area__one-content-left">
                            <span class="subtitle-one">Let's Build Your Logistics Success</span>
                            <h2>Let's Build Your <span class="highlighted-two">Logistics Success</span> in Saudi Arabia</h2>
                            <p class="work-process-description">Our Saudi Arabia-based support team is ready to help you streamline courier operations and grow your business.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-4 mt-4">
                <div class="col-xl-10 col-lg-12">
                    <div class="work-process-contact__wrapper">
                        <div class="row justify-content-center gy-4">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="work-process-contact__item">
                                    <div class="work-process-contact__item-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="work-process-contact__item-content">
                                        <h5>Email</h5>
                                        <a href="mailto:ashish@itdservices.in">ashish@itdservices.in</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="work-process-contact__item">
                                    <div class="work-process-contact__item-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="work-process-contact__item-content">
                                        <h5>Call</h5>
                                        <a href="tel:+919769591364">+91 9769591364</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="work-process-contact__item">
                                    <div class="work-process-contact__item-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="work-process-contact__item-content">
                                        <h5>Serving</h5>
                                        <span>Riyadh, Jeddah, Dammam and all major cities</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work process Area End -->


<?php include('footer.php')?>
<?php include('footer_script.php')?>

