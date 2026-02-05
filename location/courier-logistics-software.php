<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) - Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17749048184"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-17749048184');
    </script>

    <!-- Calls From Website Conversion Snippet -->
    <script>
        gtag('config', 'AW-17749048184/BjTkCLWQw8YbEPj2s49C', {
            'phone_conversion_number': '97695 91364'
        });
    </script>

    <!-- Google Analytics (GA4) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B05LLRNDKK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-B05LLRNDKK');
    </script>

    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Custom Courier Software Designed for Your Business - Upgrade Your Courier & Logistics Operations with Powerful Software Solutions from ITD Software.">
    <meta name="keywords" content="Courier Software, Logistics Software, Custom Courier Management, Delivery Tracking Software, Courier Management System">
    <meta name="author" content="ITD Services Pvt Ltd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Site -->
    <title>Custom Courier Software | Courier & Logistics Management Software - ITD Software</title>

    <?php include('header_script.php') ?>

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
            position: relative;
            overflow: hidden;
            animation: slideInDown 0.6s ease-out 0.2s both;
            font-family: var(--body-font);
        }

        .banner__one-content .subtitle-one::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(25px);
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
            margin-right: 15px;
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

            0%,
            100% {
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
                margin-right: 10px;
                margin-bottom: 10px;
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

        /* Statistics Section Styles */
        .stats__area {
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #0056b3 100%);
            position: relative;
            overflow: hidden;
            padding: 80px 0;
        }

        .stats__area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
            pointer-events: none;
        }

        .stats__title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            z-index: 1;
        }

        .stats__title h2 {
            font-size: 48px;
            color: #ffffff;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .stats__title p {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            margin: 0 auto;
        }

        .stats__grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 29px;
            position: relative;
            z-index: 1;
        }

        .stats__item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 24px 9px;
            text-align: center;
            transition: all 0.4s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .stats__item:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .stats__item-number {
            font-size: 48px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 10px;
            line-height: 1;
        }

        .stats__item-label {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }

        @media (max-width: 991px) {
            .stats__title h2 {
                font-size: 38px;
            }

            .stats__grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .stats__item {
                padding: 30px 20px;
            }

            .stats__item-number {
                font-size: 40px;
            }
        }

        @media (max-width: 767px) {
            .stats__title h2 {
                font-size: 32px;
            }

            .stats__title p {
                font-size: 16px;
            }

            .stats__grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .stats__item {
                padding: 25px 15px;
            }

            .stats__item-number {
                font-size: 36px;
            }

            .stats__item-label {
                font-size: 16px;
            }
        }

        /* Why Choose Section Styles */
        .why-choose-section__area {
            background: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .why-choose-section__title {
            margin-bottom: 60px;
            text-align: center;
        }

        .why-choose-section__title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .why-choose-section__title p {
            font-size: 18px;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .why-choose-section__grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 16px;
        }

        .why-choose-section__item {
            background: #ffffff;
            border-radius: 20px;
            padding: 20px 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .why-choose-section__item::before {
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

        .why-choose-section__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(0, 123, 255, 0.15);
            border-color: var(--primary-color-1);
        }

        .why-choose-section__item:hover::before {
            transform: scaleX(1);
        }

        .why-choose-section__item-icon {
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

        .why-choose-section__item-icon::after {
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

        .why-choose-section__item:hover .why-choose-section__item-icon {
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            transform: scale(1.1) rotate(5deg);
        }

        .why-choose-section__item:hover .why-choose-section__item-icon::after {
            width: 100px;
            height: 100px;
        }

        .why-choose-section__item-icon i {
            font-size: 42px;
            color: var(--primary-color-1);
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
        }

        .why-choose-section__item:hover .why-choose-section__item-icon i {
            color: #ffffff;
            transform: scale(1.1);
        }

        .why-choose-section__item-content h4 {
            font-size: 22px;
            font-weight: 700;
            color: var(--text-heading-color);
            margin-bottom: 15px;
            transition: color 0.3s ease;
            line-height: 1.3;
        }

        .why-choose-section__item:hover .why-choose-section__item-content h4 {
            color: var(--primary-color-1);
        }

        .why-choose-section__item-content p {
            font-size: 16px;
            color: #666;
            line-height: 1.7;
            margin: 0;
        }

        @media (max-width: 991px) {
            .why-choose-section__title h2 {
                font-size: 38px;
            }

            .why-choose-section__title {
                margin-bottom: 50px;
            }

            .why-choose-section__item {
                padding: 35px 30px;
            }

            .why-choose-section__item-icon {
                width: 70px;
                height: 70px;
                margin-bottom: 20px;
            }

            .why-choose-section__item-icon i {
                font-size: 38px;
            }
        }

        @media (max-width: 767px) {
            .why-choose-section__title h2 {
                font-size: 32px;
            }

            .why-choose-section__title p {
                font-size: 16px;
            }

            .why-choose-section__title {
                margin-bottom: 40px;
            }

            .why-choose-section__item {
                padding: 30px 25px;
            }

            .why-choose-section__item-content h4 {
                font-size: 20px;
            }

            .why-choose-section__item-content p {
                font-size: 15px;
            }
        }

        /* What We Offer Section Styles */
        .what-we-offer__area {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        .what-we-offer__title {
            margin-bottom: 60px;
            text-align: center;
        }

        .what-we-offer__title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .what-we-offer__title p {
            font-size: 18px;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .what-we-offer__grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .what-we-offer__item {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px 35px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 2px solid transparent;
            height: 100%;
        }

        .what-we-offer__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(0, 123, 255, 0.15);
            border-color: var(--primary-color-1);
        }

        .what-we-offer__item-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: linear-gradient(135deg, rgba(0, 123, 255, 0.1) 0%, rgba(0, 123, 255, 0.05) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: all 0.4s ease;
        }

        .what-we-offer__item:hover .what-we-offer__item-icon {
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            transform: scale(1.1);
        }

        .what-we-offer__item-icon i {
            font-size: 36px;
            color: var(--primary-color-1);
            transition: all 0.4s ease;
        }

        .what-we-offer__item:hover .what-we-offer__item-icon i {
            color: #ffffff;
        }

        .what-we-offer__item-content h4 {
            font-size: 22px;
            font-weight: 700;
            color: var(--text-heading-color);
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .what-we-offer__item-content p {
            font-size: 16px;
            color: #666;
            line-height: 1.7;
            margin: 0;
        }

        /* Built for Every User Section */
        .built-for-users__area {
            background: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .built-for-users__title {
            margin-bottom: 60px;
            text-align: center;
        }

        .built-for-users__title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .built-for-users__grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .built-for-users__item {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-radius: 20px;
            padding: 40px 35px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 2px solid transparent;
            height: 100%;
        }

        .built-for-users__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(0, 123, 255, 0.15);
            border-color: var(--primary-color-1);
        }

        .built-for-users__item-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .built-for-users__item-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .built-for-users__item-icon i {
            font-size: 28px;
            color: #ffffff;
        }

        .built-for-users__item-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-heading-color);
        }

        .built-for-users__item-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .built-for-users__item-features li {
            font-size: 16px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
        }

        .built-for-users__item-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color-1);
            font-weight: 700;
            font-size: 18px;
        }

        /* Proven Process Section */
        .proven-process__area {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        .proven-process__title {
            margin-bottom: 60px;
            text-align: center;
        }

        .proven-process__title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .proven-process__title p {
            font-size: 18px;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .proven-process__grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .proven-process__item {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px 35px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 2px solid transparent;
            height: 100%;
            position: relative;
            text-align: center;
        }

        .proven-process__item-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
        }

        .proven-process__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(0, 123, 255, 0.15);
            border-color: var(--primary-color-1);
        }

        .proven-process__item-content h4 {
            font-size: 22px;
            font-weight: 700;
            color: var(--text-heading-color);
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .proven-process__item-content p {
            font-size: 16px;
            color: #666;
            line-height: 1.7;
            margin: 0;
        }

        /* Final CTA Section */
        .final-cta__area {
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #0056b3 100%);
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }

        .final-cta__area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
            pointer-events: none;
        }

        .final-cta__content {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .final-cta__content h2 {
            font-size: 48px;
            color: #ffffff;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .final-cta__content p {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .final-cta__content .btn-two {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 18px 40px;
            font-size: 18px;
            font-weight: 600;
            background: #ffffff;
            color: var(--primary-color-1);
            border: 2px solid #ffffff;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.4s ease;
            text-transform: none;
        }

        .final-cta__content .btn-two:hover {
            background: transparent;
            color: #ffffff;
            border-color: #ffffff;
        }

        @media (max-width: 991px) {
            .final-cta__content h2 {
                font-size: 38px;
            }

            .final-cta__content p {
                font-size: 18px;
            }
        }

        @media (max-width: 767px) {
            .final-cta__content h2 {
                font-size: 32px;
            }

            .final-cta__content p {
                font-size: 16px;
            }

            .final-cta__content .btn-two {
                padding: 16px 35px;
                font-size: 16px;
            }
        }

        .btn-two {
            background: var(--primary-color-1);
            color: var(--text-white) !important;
            text-transform: none;
        }

        .btn-two:hover {
            background-color: transparent;
            color: var(--text-heading-color) !important;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV2DXLX4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include('header.php') ?>

    <!-- Banner Area Start -->
    <div class="banner__one">
        <div class="banner-shape d-none d-lg-block">
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
                        <span class="subtitle-one">Custom Courier Software
                        </span>
                        <h2><span>Custom Courier Software Designed</span> for Your Business</h2>
                        <p>Upgrade Your Courier & Logistics Operations with Powerful Software. Simplify workflows, improve delivery efficiency, and optimize logistics with ITD Software's reliable technology solutions.</p>

                        <a href="https://wa.me/919769591364?text=I%20want%20more%20information%20about%20the%20Courier%20Software%20Services." target="_blank" class="btn-two">Build Your Software</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-9">
                    <div class="banner__one-form" id="contact-form">
                        <div class="banner-form-wrapper">
                            <h3>Custom Courier Software Solution</h3>
                            <form class="banner-contact-form" action="https://api.web3forms.com/submit" method="POST" id="banner-contact-form-courier">
                                <input type="hidden" name="access_key" value="b409ebca-4b48-47dc-bdb3-2dd579ba4d92">
                                <input type="hidden" name="subject" value="Custom Courier Software Request - Courier Logistics Page">
                                <input type="hidden" name="from_name" value="ITD Services - Courier Logistics">
                                <input type="hidden" name="location" value="Courier Logistics Software">
                                <input type="hidden" name="cc" value="ashish@itdservices.in">
                                <input type="checkbox" name="botcheck" id="botcheck-courier" style="display: none;" tabindex="-1" autocomplete="off">

                                <div class="form-group">
                                    <label for="full_name">Full Name <span class="required">*</span></label>
                                    <input type="text" id="full_name" name="name" required placeholder="Enter your full name" minlength="2">
                                </div>
                                <div class="form-group">
                                    <label for="email_address">E-mail <span class="required">*</span></label>
                                    <input type="email" id="email_address" name="email" required placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number <span class="required">*</span></label>
                                    <input type="tel" id="phone_number" name="phone" required placeholder="Enter your phone number" pattern="[0-9\s\-\+\(\)]{10,}">
                                </div>
                                <div class="form-group">
                                    <label for="business_type">Business Type <span class="required">*</span></label>
                                    <select id="business_type" name="business_type" required>
                                        <option value="">Select Business Type</option>
                                        <option value="Courier">Courier</option>
                                        <option value="Logistics">Logistics</option>
                                        <option value="E-commerce">E-commerce</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-form-submit">Book a Demo <i class="fas fa-arrow-right"></i></button>
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
                        <span class="subtitle-one">Trusted Partners</span>
                        <h2>Trusted by Courier & Logistics <span class="highlighted-two">Partner Brands</span></h2>
                        <p>We're proud to work with leading businesses who trust us with their logistics and courier management needs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="trusted-clients__carousel-wrapper">
                        <div class="swiper trusted-clients__slider">
                            <div class="swiper-wrapper">
                                <div class="trusted-clients__item swiper-slide">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/bombino logo.webp" alt="Bombino">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/citi network courier.png" alt="Citi Network Courier">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/navlai enterprise logo.png" alt="Navlai Enterprise">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide">
                                    <div class="trusted-clients__item-inner">
                                        <img src="../assets/img/brand/pannest logo.png" alt="Pannest">
                                    </div>
                                </div>
                                <div class="trusted-clients__item swiper-slide">
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

    <!-- Statistics Area Start -->
    <div class="stats__area section-padding">
        <div class="container">
            <div class="stats__title animate-y-axis-slider">
                <h2>Transforming Orders into <span style="color: rgba(255,255,255,0.9);">Success Stories</span></h2>
            </div>
            <div class="stats__grid">
                <div class="stats__item animate-y-axis-slider">
                    <div class="stats__item-number">400+</div>
                    <div class="stats__item-label">Happy Customers</div>
                </div>
                <div class="stats__item animate-y-axis-slider">
                    <div class="stats__item-number">1Cr+</div>
                    <div class="stats__item-label">Orders Completed</div>
                </div>
                <!-- <div class="stats__item animate-y-axis-slider">
                    <div class="stats__item-number">20+</div>
                    <div class="stats__item-label">Industry Experts</div>
                </div> -->
                <div class="stats__item animate-y-axis-slider">
                    <div class="stats__item-number">95%</div>
                    <div class="stats__item-label">Accurate Orders</div>
                </div>
                <div class="stats__item animate-y-axis-slider">
                    <div class="stats__item-number">10+</div>
                    <div class="stats__item-label">Years of Experience</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Statistics Area End -->

    <!-- Why Choose ITD Softwares Area Start -->
    <div class="why-choose-section__area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 text-center">
                    <div class="why-choose-section__title animate-y-axis-slider">
                        <span class="subtitle-one">Why Choose Us</span>
                        <h2>Why Choose <span class="highlighted-two">ITD Softwares</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-global-network"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>All-Inclusive Logistics & Courier Technology</h4>
                            <p>From pickup scheduling to delivery tracking, billing, and customer notifications - manage your full logistics workflow from one platform.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-mobile-phone-1"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Smart, Scalable & Customizable</h4>
                            <p>Solutions built to grow with your business - customizable software designed specifically for courier, logistics, and eCommerce delivery operations.</p>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-web-research"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Advanced Tracking & Analytics</h4>
                            <p>Real-time shipment tracking, automated updates, advanced analytics, and centralized control help reduce delays and improve customer experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-good-feedback"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Customized Billing & Invoicing</h4>
                            <p>Flexible billing solutions tailored to your business needs - automate invoices, manage client-wise pricing, taxes, COD, and generate accurate reports with ease, all from one centralized system.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Seamless & Customizable Label Creation</h4>
                            <p>Automatically create carrier-compliant shipping labels and barcodes with custom branding, reducing errors and speeding up dispatch.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Why Choose ITD Softwares Area End -->

    <!-- What We Offer Area Start -->
    <div class="what-we-offer__area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 text-center">
                    <div class="what-we-offer__title animate-y-axis-slider">
                        <span class="subtitle-one">Our Services</span>
                        <h2>What <span class="highlighted-two">We Offer</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-global-network"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Courier Management Software</h4>
                            <p>Plan, manage, and automate delivery routes with end-to-end visibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-mobile-phone-1"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Real-Time Shipment Tracking</h4>
                            <p>Track deliveries live, send status alerts, and view performance from a single dashboard.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-good-feedback"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Customer Relationship Management (CRM)</h4>
                            <p>Enhance customer engagement with tailored CRM tools for logistics businesses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Customized Billing & Invoicing</h4>
                            <p>Automate accurate billing and invoicing with flexible pricing models.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-web-research"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>API Integration & Notifications</h4>
                            <p>Seamlessly connect with third-party systems and communicate updates via SMS, email, WhatsApp, and app alerts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="what-we-offer__item animate-y-axis-slider">
                        <div class="what-we-offer__item-icon">
                            <i class="flaticon-it-service"></i>
                        </div>
                        <div class="what-we-offer__item-content">
                            <h4>Logistics Consultation & Support</h4>
                            <p>Expert analysis and guidance to help you optimize operations and scale smartly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What We Offer Area End -->


    <!-- Built for Every User Area Start -->
    <div class="built-for-users__area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 text-center">
                    <div class="built-for-users__title animate-y-axis-slider">
                        <span class="subtitle-one">Built for Everyone</span>
                        <h2>Built for <span class="highlighted-two">Every User</span></h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us__one-image mt-5 mb-5">
                        <div class="why-choose-us__one-image-shape">
                            <div class="shape shape-1 animate-x-axis"></div>
                            <div class="shape shape-2 animate-x-axis"></div>
                            <img src="../assets/img/shape/why-choose-shape.png" alt="" class="shape shape-3 animate-y-axis">
                        </div>
                        <img src="../assets/img/location/1.jpeg" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-us__one-left">
                        <div class="why-choose-us__one-quality">
                            <div class="why-choose-us__one-quality-single d-block w-100">
                                <div class="built-for-users__item">
                                    <div class="built-for-users__item-header">
                                        <div class="built-for-users__item-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <div class="built-for-users__item-title">Managers & Administrators</div>
                                    </div>
                                    <ul class="built-for-users__item-features">
                                        <li>Full visibility into shipments</li>
                                        <li>Automate route planning & dispatch</li>
                                        <li>Centralized reports and actionable insights</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="why-choose-us__one-image mt-5 mb-5">
                        <div class="why-choose-us__one-image-shape">
                            <div class="shape shape-1 animate-x-axis"></div>
                            <div class="shape shape-2 animate-x-axis"></div>
                            <img src="../assets/img/shape/why-choose-shape.png" alt="" class="shape shape-3 animate-y-axis">
                        </div>
                        <img src="../assets/img/location/2.jpeg" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="why-choose-us__one-left">
                        <div class="why-choose-us__one-quality">
                            <div class="why-choose-us__one-quality-single d-block w-100">
                                <div class="built-for-users__item">
                                    <div class="built-for-users__item-header">
                                        <div class="built-for-users__item-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="built-for-users__item-title">Operators & System Users</div>
                                    </div>
                                    <ul class="built-for-users__item-features">
                                        <li>Mobile-friendly interfaces</li>
                                        <li>Real-time updates, notifications, and delivery tracking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us__one-image mt-5 mb-5">
                        <div class="why-choose-us__one-image-shape">
                            <div class="shape shape-1 animate-x-axis"></div>
                            <div class="shape shape-2 animate-x-axis"></div>
                            <img src="../assets/img/shape/why-choose-shape.png" alt="" class="shape shape-3 animate-y-axis">
                        </div>
                        <img src="../assets/img/location/3.jpeg" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-us__one-left">
                        <div class="why-choose-us__one-quality">
                            <div class="why-choose-us__one-quality-single d-block w-100">
                                <div class="built-for-users__item">
                                    <div class="built-for-users__item-header">
                                        <div class="built-for-users__item-icon">
                                            <i class="fas fa-handshake"></i>
                                        </div>
                                        <div class="built-for-users__item-title">Customers & Partners</div>
                                    </div>
                                    <ul class="built-for-users__item-features">
                                        <li>Shipment tracking</li>
                                        <li>Instant delivery notifications</li>
                                        <li>Efficient support & interaction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Built for Every User Area End -->

    <!-- Proven Process Area Start -->
    <style>
        .process-track {
            padding: 40px 68px;
            position: relative;
            overflow: visible
        }

        .proven-process-swiper {
            overflow: hidden;
            padding: 20px 0
        }

        .proven-process-swiper .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto
        }

        .process-hexagon {
            position: relative;
            width: 180px;
            height: 200px;
            flex-shrink: 0
        }

        .process-hexagon::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            background: var(--primary-color-1);
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            transform: scale(1);
            transition: all .3s;
            z-index: 0;
            opacity: 0;
        }

        .process-hexagon:hover::after {
            opacity: 1;
            transform: scale(1.01);
        }

        .process-hexagon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--primary-color-1);
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            transition: all .3s;
            z-index: 1
        }

        .process-hexagon:hover::before {
            background: #fff
        }

        .hexagon-content {
            position: relative;
            z-index: 1;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px 15px;
            text-align: center
        }

        .step-number {
            position: absolute;
            top: -8px;
            right: 10px;
            width: 32px;
            height: 32px;
            background: #fff;
            color: var(--primary-color-1);
            border: 2px solid var(--primary-color-1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 13px;
            z-index: 2
        }

        .process-hexagon:hover .step-number {
            background: var(--primary-color-1);
            color: #fff
        }

        .hexagon-content i {
            font-size: 36px;
            color: #fff;
            margin-bottom: 12px;
            transition: all .3s
        }

        .hexagon-content h5 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #fff;
            text-transform: uppercase;
            transition: all .3s
        }

        .hexagon-content p {
            font-size: 13px;
            color: #fff;
            margin: 0;
            line-height: 1.5;
            transition: all .3s
        }

        .process-hexagon:hover .hexagon-content i,
        .process-hexagon:hover .hexagon-content h5 {
            color: var(--primary-color-1)
        }

        .process-hexagon:hover .hexagon-content p {
            color: #fff;
        }

        .process-slide-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%
        }

        .process-connector {
            text-align: center;
            color: var(--primary-color-1);
            font-size: 24px;
            opacity: .6;
            flex-shrink: 0;
            margin: 0 5px
        }

        .proven-process-swiper .process-slide-last .process-connector {
            display: none
        }

        .proven-process-prev,
        .proven-process-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color-1);
            width: 48px;
            height: 48px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 15px rgba(0, 0, 0, .12);
            transition: all .3s;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            cursor: pointer;
            margin-top: 10px
        }

        .proven-process-prev {
            left: 15px;
            right: auto
        }

        .proven-process-next {
            right: 15px;
            left: auto
        }

        .proven-process-prev::after,
        .proven-process-next::after {
            content: none
        }

        .proven-process-prev i,
        .proven-process-next i {
            font-size: 18px
        }

        .proven-process-prev:hover,
        .proven-process-next:hover {
            background: var(--primary-color-1);
            color: #fff
        }

        .proven-process-pagination .swiper-pagination-bullet {
            background: var(--primary-color-1);
            opacity: .4;
            width: 10px;
            height: 10px
        }

        .proven-process-pagination .swiper-pagination-bullet-active {
            opacity: 1;
            transform: scale(1.2)
        }

        @media (max-width:1199px) {
            .process-hexagon {
                width: 160px;
                height: 180px
            }

            .hexagon-content i {
                font-size: 32px
            }

            .hexagon-content h5 {
                font-size: 16px
            }

            .hexagon-content p {
                font-size: 12px
            }
        }

        @media (max-width:991px) {
            .process-track {
                padding: 30px 58px
            }

            .proven-process-prev {
                left: 12px
            }

            .proven-process-next {
                right: 12px
            }

            .process-hexagon {
                width: 150px;
                height: 170px
            }

            .hexagon-content {
                padding: 15px 10px
            }

            .hexagon-content i {
                font-size: 28px;
                margin-bottom: 10px
            }

            .hexagon-content h5 {
                font-size: 15px
            }

            .hexagon-content p {
                font-size: 11px
            }

        }

        @media (max-width:767px) {
            .process-track {
                padding: 30px 52px
            }

            .proven-process-prev,
            .proven-process-next {
                width: 42px;
                height: 42px
            }

            .proven-process-prev {
                left: 10px
            }

            .proven-process-next {
                right: 10px
            }

            .process-hexagon {
                width: 140px;
                height: 160px
            }

            .hexagon-content i {
                font-size: 24px;
                margin-bottom: 8px
            }

            .hexagon-content h5 {
                font-size: 14px
            }

            .hexagon-content p {
                font-size: 10px
            }

            .step-number {
                position: absolute;
                top: -15px;
                right: 0px;
            }
        }
    </style>
    <div class="proven-process__area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 text-center">
                    <div class="proven-process__title animate-y-axis-slider">
                        <span class="subtitle-one">Our Process</span>
                        <h2>Proven <span class="highlighted-two">Process</span></h2>
                        <p>Smart Software Built for You:</p>
                    </div>
                </div>
            </div>
            <div class="process-track">
                <div class="swiper-button-prev proven-process-prev"><i class="fas fa-arrow-left"></i></div>
                <div class="swiper-button-next proven-process-next"><i class="fas fa-arrow-right"></i></div>
                <div class="swiper proven-process-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="process-slide-inner">
                                <div class="process-hexagon">
                                    <div class="hexagon-content">
                                        <div class="step-number">01</div><i class="fas fa-search"></i>
                                        <h5>Understand Your Needs</h5>
                                    </div>
                                </div>
                                <div class="process-connector"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="process-slide-inner">
                                <div class="process-hexagon">
                                    <div class="hexagon-content">
                                        <div class="step-number">02</div><i class="fas fa-pencil-ruler"></i>
                                        <h5>Develop & Integrate</h5>
                                    </div>
                                </div>
                                <div class="process-connector"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="process-slide-inner">
                                <div class="process-hexagon">
                                    <div class="hexagon-content">
                                        <div class="step-number">03</div><i class="fas fa-code"></i>
                                        <h5>Data-Driven Insights</h5>
                                    </div>
                                </div>
                                <div class="process-connector"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="process-slide-inner">
                                <div class="process-hexagon">
                                    <div class="hexagon-content">
                                        <div class="step-number">04</div><i class="fas fa-bug"></i>
                                        <h5>Automation & Efficiency</h5>
                                    </div>
                                </div>
                                <div class="process-connector"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="process-slide-inner">
                                <div class="process-hexagon">
                                    <div class="hexagon-content">
                                        <div class="step-number">05</div><i class="fas fa-rocket"></i>
                                        <h5>Support & Scale</h5>
                                    </div>
                                </div>
                                <div class="process-connector"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="process-slide-inner">
                                <div class="process-hexagon">
                                    <div class="hexagon-content">
                                        <div class="step-number">06</div><i class="fas fa-headset"></i>
                                        <h5>Future-Proof Solutions</h5>
                                    </div>
                                </div>
                                <div class="process-connector"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="process-slide-inner">
                                <div class="process-hexagon">
                                    <div class="hexagon-content">
                                        <div class="step-number">07</div><i class="fas fa-headset"></i>
                                        <h5>User-Friendly Experience</h5>
                                    </div>
                                </div>
                                <div class="process-connector"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination proven-process-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Final CTA Area Start -->
    <div class="final-cta__area">
        <div class="container">
            <div class="final-cta__content animate-y-axis-slider">
                <h2>Ready to Get Started?</h2>
                <p>Experience intelligent logistics and courier software that adapts to your business needs.</p>
                <a href="https://wa.me/919769591364?text=I%20want%20more%20information%20about%20the%20Courier%20Software%20Services." target="_blank" class="btn-two">Book Your Free Demo</a>
            </div>
        </div>
    </div>
    <!-- Final CTA Area End -->


    <?php include('footer.php') ?>
    <?php include('footer_script.php') ?>

</body>

</html>