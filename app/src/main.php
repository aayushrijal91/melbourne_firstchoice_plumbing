<header>
    <div class="container">
        <div class="row justify-content-center justify-content-xl-between align-items-center py-4 gy-4">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto col-lg col-xxl-auto">
                <div class="text-dark-grey fw-600 fs-17 text-center"><span class="text-primary fw-800">We're Available 24/7</span> For Any Plumbing Service You Need</div>
            </div>
            <div class="col">
                <div class="row justify-content-center gx-1 text-dark-grey fw-600 fs-14 position-relative">
                    <div class="col-1">
                        <div class="pulse pulsating-circle"></div>
                    </div>
                    <div class="col-auto">
                        <div class="currently-open text-primary fw-800">We're Open!</div>
                    </div>
                    <div class="col-auto">
                        <div class="current-time">3:11 PM</div>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="row gx-0 align-items-center">
                    <div class="col-12 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-primary rounded-0 text-white py-3 px-md-4 px-xl-3 px-xxl-4">
                            Call Today <?= $phone_number ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="#form" class="btn bordered border-primary rounded-0 text-primary py-3 px-md-5 px-xl-3 px-xxl-5">
                            Get A <span class="fw-800 px-1">FREE</span> Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="banner">
    <div class="banner_inner">
        <div class="banner_innermost">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-5">
                        <div class="bg-secondary px-4 py-3 lh-1 d-inline"><span class="fw-700">24/7</span> Emergency Plumbing</div>
                        <div class="fs-60 fw-400 lh-1 mt-5"><span class="fw-800">Melbourne First Choice Plumbing</span> High-Quality Customer-Focused</div>
                        <div class="py-4">Melbourne First Choice Plumbing is a name you can trust for high-quality customer-focused plumbing services in Melbourne. Get in touch with a business that hundreds of residents in Melbourne turn to as their first choice for their plumbing needs.</div>
                        <div class="banner-cta lh-1">
                            <div class="fs-38 fw-800">$100 Cashback On</div>
                            <div class="text-capitalize fs-24">hot water service replacement</div>
                            <?= renderImg('hot-water-systems.png', 'lib', 'hot-water-systems') ?>
                        </div>
                        <div class="banner-slider mt-4">
                            <div class="banner-slider-content">
                                <div class="row align-items-center justify-content-around w-100 gy-4">
                                    <div class="col-auto fs-44 fw-800 lh-1">10% OFF</div>
                                    <div class="col-auto fs-24 fw-600 lh-1">Seniors<br>Discount</div>
                                    <div class="col-auto"><?= renderImg('10-percent-discount.png', 'lib') ?></div>
                                </div>
                            </div>
                            <div class="banner-slider-content">
                                <div class="row align-items-center justify-content-around w-100 gy-4">
                                    <div class="col-auto fs-60 fw-800 lh-1">$50 OFF</div>
                                    <div class="col-auto fs-24 fw-600 lh-1">When You Book Online</div>
                                </div>
                            </div>
                            <div class="banner-slider-content">
                                <div class="row align-items-center justify-content-around w-100 gy-4">
                                    <div class="col-12 fs-44 fw-800 lh-1">Free CCTV Inspection</div>
                                    <div class="col-12 fs-24 fw-600 lh-1">With Any Blocked Drain Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= renderImg('banner.jpg', 'background', 'w-100 d-xl-none') ?>
</section>

<section class="form" id="form">
    <div class="container-fluid">
        <div class="row gy-5 align-items-center">
            <div class="col-xl-6">
                <div class="qualification">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <div class="fs-44 lh-1"><span class="fw-700">Fully Qualified</span> &amp; Insured Plumbers</div>
                            <div class=" fs-18 pt-2 pb-3">Melbourne First Choice Plumbing is a name<br class="d-none d-lg-block"> you can trust for high-quality</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-tertiary p-3">
                                <div class="fs-27 fw-800">Free CCTV Inspection</div>
                                <div class="">With Any Blocked Drain Service</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= renderImg('qualification.png', 'background', 'w-100 d-md-none bg-primary') ?>
            </div>
            <div class="col-lg">
                <form action="./src/form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="text-primary fs-36 lh-1 pb-4"><span class="fw-800">Get In Contact</span> With Our Team</div>
                    <div class="row gy-4">
                        <div class="col-lg-5 col-xl-6 col-xxl-5">
                            <label>What is your full name</label>
                            <input type="text" class="form-control" name="name" placeholder="John Citizen" required>
                        </div>
                        <div class="col-lg">
                            <label>Your Contact Email</label>
                            <input type="text" class="form-control" name="email" placeholder="john@gmail.com" required>
                        </div>
                        <div class="col-lg col-xl-6 col-xxl">
                            <label>Your Contact Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Your Number" required>
                        </div>
                        <div class="col-12 col-xl-6 col-xxl-12">
                            <label>What suburb is your property in?</label>
                            <input type="text" class="form-control" name="suburb" placeholder="Parramatta" required>
                        </div>
                        <div class="col-12 pt-3">
                            <button type="submit" class="btn btn-primary w-100 rounded-0 text-white">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 position-relative d-flex justify-content-center">
                <div class="about-gallery">
                    <?= renderImg("about-circle.png", "lib", 'about-circle') ?>
                    <div class="about-gallery-slider">
                        <?= renderImg('about-lib-1.jpg', 'lib', 'gal-1') ?>
                        <?= renderImg('about-lib-2.jpg', 'lib', 'gal-2') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="text-capitalize fs-60 lh-1"><span class="text-primary fw-700">High-Quality Customer-Focused Plumbing</span> Services In Melbourne</div>
                <div class="py-4">
                    <p class="text-dark pb-3">We guarantee our work and only recommend quality brands while taking into account customers' budgets. This translates to happy repeat customers and referrals!</p>
                    <p class="text-dark pb-md-3">Melbourne First Choice Plumbing is a name you can trust for high-quality customer-focused plumbing services in Melbourne. Get in touch with a business that hundreds of residents in Melbourne turn to as their first choice for their plumbing needs</p>
                </div>
                <div class="row gx-0 align-items-center">
                    <div class="col-12 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-primary rounded-0 text-white py-3 px-md-4 px-lg-3 px-xl-4">
                            Call Today <?= $phone_number ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="#form" class="btn bordered border-primary rounded-0 text-primary py-3 px-md-5 px-lg-3 px-xl-5">
                            Get A <span class="fw-800 px-1">FREE</span> Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-11">
                <div class="first-choice">
                    <div class="row align-items-center gy-5">
                        <div class="col-lg-8">
                            <div class="row justify-content-center">
                                <div class="col-11 col-xl-9">
                                    <div class="text-capitalize fs-60 lh-1"><span class="fw-700">High-Quality Customer-Focused Plumbing</span> Services In Melbourne</div>
                                    <div class="py-4">
                                        We guarantee our work and only recommend quality brands while taking into account customers' budgets. This translates to happy repeat customers and referrals!
                                    </div>
                                    <div class="row gx-0 align-items-center">
                                        <div class="col-12 col-md-auto">
                                            <a href="tel:<?= $phone_number ?>" class="btn btn-white rounded-0 text-primary py-3 px-md-4">
                                                Call Today <?= $phone_number ?>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-auto">
                                            <a href="#form" class="btn bordered border-white rounded-0 text-white py-3 px-md-5">
                                                Get A <span class="fw-800 px-1">FREE</span> Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg text-center text-lg-start">
                            <?= renderImg('badge.png', 'lib') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-services py-5">
        <div class="container">
            <div class="text-center fs-30">Our <span class="fw-700">Services</span></div>
            <div class="service-slider-nav">
                <div class="service-slider-nav-content">
                    <div><svg width="72" height="79" viewBox="0 0 72 79" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M68.7533 37.2167H42.0772C40.6221 37.2167 39.6521 38.1867 39.6521 39.6418V49.3422C39.6521 52.0098 37.4695 54.1924 34.8018 54.1924C32.1342 54.1924 29.9516 52.0098 29.9516 49.3422V32.3665H10.5508V48.1296C10.5508 64.8629 24.1314 78.4435 40.8646 78.4435C57.5978 78.4435 71.1784 64.8629 71.1784 48.1296V39.6418C71.1784 38.1867 70.2084 37.2167 68.7533 37.2167Z" fill="white" />
                            <path d="M34.8016 22.666H27.5263V10.5405C27.5263 5.20528 23.1611 0.840088 17.8258 0.840088H3.2752C1.82014 0.840088 0.850098 1.81013 0.850098 3.26519V12.9656C0.850098 14.4207 1.82014 15.3907 3.2752 15.3907H10.5505C12.0056 15.3907 12.9756 16.3608 12.9756 17.8158V22.666H5.70031C4.24525 22.666 3.2752 23.6361 3.2752 25.0912C3.2752 26.5462 4.24525 27.5163 5.70031 27.5163H34.8016C36.2567 27.5163 37.2267 26.5462 37.2267 25.0912C37.2267 23.6361 36.2567 22.666 34.8016 22.666Z" fill="white" />
                        </svg></div>
                    <div class="pt-4 text-center">Blocked Drains</div>
                </div>
                <div class="service-slider-nav-content">
                    <div><svg width="79" height="79" viewBox="0 0 79 79" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="79" height="79" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_310_151" transform="scale(0.00390625)" />
                                </pattern>
                                <image id="image0_310_151" width="256" height="256" xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <div class="pt-4 text-center">Emergency Plumbing</div>
                </div>
                <div class="service-slider-nav-content">
                    <div><?= renderImg('burst-pipes.png', 'lib') ?></div>
                    <div class="pt-4 text-center">Burst &amp; Leaking Pipes</div>
                </div>
                <div class="service-slider-nav-content">
                    <div><?= renderImg('gas-fitting.png', 'lib') ?></div>
                    <div class="pt-4 text-center">Gas Fitting &amp;<br> Repairs</div>
                </div>
                <div class="service-slider-nav-content">
                    <div><?= renderImg('roof-plumbing.png', 'lib') ?></div>
                    <div class="pt-4 text-center">Roof Plumbing</div>
                </div>
                <div class="service-slider-nav-content">
                    <div><?= renderImg('pipe-relining.png', 'lib') ?></div>
                    <div class="pt-4 text-center">Pipe Relining</div>
                </div>
                <div class="service-slider-nav-content">
                    <div><?= renderImg('hot-water-system.png', 'lib') ?></div>
                    <div class="pt-4 text-center">Hot Water Systems</div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="service-slider">
                        <div class="service-slider-content">
                            <div class="fs-60 lh-1 pb-2"><span class="fw-700">Blocked Drains</span> Across Melbourne</div>
                            <div class="">We can unclog blocked drains quickly and effectively. If it’s a blocked sewer or stormwater drains that you are having trouble with, we’ll come up with a solution to unblock it for you.</div>
                        </div>
                        <div class="service-slider-content">
                            <div class="fs-60 lh-1 pb-2"><span class="fw-700">Emergency Plumbing</span> Across Melbourne</div>
                            <div class="">We can unclog blocked drains quickly and effectively. If it’s a blocked sewer or stormwater drains that you are having trouble with, we’ll come up with a solution to unblock it for you.</div>
                        </div>
                        <div class="service-slider-content">
                            <div class="fs-60 lh-1 pb-2"><span class="fw-700">Burst &amp; Leaking Pipes</span> Across Melbourne</div>
                            <div class="">We can unclog blocked drains quickly and effectively. If it’s a blocked sewer or stormwater drains that you are having trouble with, we’ll come up with a solution to unblock it for you.</div>
                        </div>
                        <div class="service-slider-content">
                            <div class="fs-60 lh-1 pb-2"><span class="fw-700">Gas Fitting &amp; Repairs</span> Across Melbourne</div>
                            <div class="">We can unclog blocked drains quickly and effectively. If it’s a blocked sewer or stormwater drains that you are having trouble with, we’ll come up with a solution to unblock it for you.</div>
                        </div>
                        <div class="service-slider-content">
                            <div class="fs-60 lh-1 pb-2"><span class="fw-700">Pipe Relining</span> Across Melbourne</div>
                            <div class="">We can unclog blocked drains quickly and effectively. If it’s a blocked sewer or stormwater drains that you are having trouble with, we’ll come up with a solution to unblock it for you.</div>
                        </div>
                        <div class="service-slider-content">
                            <div class="fs-60 lh-1 pb-2"><span class="fw-700">Hot Water Systems</span> Across Melbourne</div>
                            <div class="">We can unclog blocked drains quickly and effectively. If it’s a blocked sewer or stormwater drains that you are having trouble with, we’ll come up with a solution to unblock it for you.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center mb-n3">
            <div class="limited-time">Limited Time</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-11 col-md-6 col-xl-4 col-xxl-3 bg-secondary text-white pt-5 pb-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto text-end lh-1 fs-30">
                        <div>Senior</div>
                        <div class="fw-800">Discount</div>
                    </div>
                    <div class="col-auto">
                        <div class="row align-items-center g-2">
                            <div class="col-auto fs-79 lh-1 fw-800">10</div>
                            <div class="col-auto lh-1 fs-30">
                                <div>%</div>
                                <div>Off</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-5 g-5 g-lg-4">
            <div class="col-auto"><?= renderImg('everhot.png', 'logo') ?></div>
            <div class="col-auto"><?= renderImg('dux.png', 'logo') ?></div>
            <div class="col-auto"><?= renderImg('bosch.png', 'logo') ?></div>
            <div class="col-auto"><?= renderImg('aquamax.png', 'logo') ?></div>
            <div class="col-auto"><?= renderImg('rheem.png', 'logo') ?></div>
            <div class="col-auto"><?= renderImg('thermann.png', 'logo') ?></div>
            <div class="col-auto"><?= renderImg('stiebel-eltron.png', 'logo') ?></div>
            <div class="col-auto"><?= renderImg('vulcan.png', 'logo') ?></div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center gy-4">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto text-primary">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto text-primary">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto">
                <div class="row justify-content-center gy-4">
                    <div class="col-12 col-lg-auto">
                        <div class="row gx-2 gx-md-3 text-white justify-content-center">
                            <div class="col-auto text-center">Terms &amp; Conditions</div>
                            <div class="col-auto text-primary">|</div>
                            <div class="col-auto text-center">Privacy Policies</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>