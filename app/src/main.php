<header>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center py-4">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto">
                <div class="text-dark-grey fw-600 fs-17"><span class="text-primary fw-800">We're Available 24/7</span> For Any Plumbing Service You Need</div>
            </div>
            <div class="col-auto">
                <div class="text-dark-grey fw-600 fs-14"><span class="text-primary fw-800">We're Open!</span> 10:35:12</div>

            </div>
            <div class="col-auto">
                <div class="row gx-0 justify-content-center justify-content-lg-end align-items-center">
                    <div class="col-12 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-primary rounded-0 text-white py-3 px-md-4">
                            Call Today <?= $phone_number ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="#form" class="btn bordered border-primary rounded-0 text-primary py-3 px-md-5">
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
                    <div class="col-lg-6 col-xl-5">
                        <div class="bg-secondary px-4 py-3 lh-1 d-inline"><span class="fw-700">24/7</span> Emergency Plumbing</div>
                        <div class="fs-60 fw-400 lh-1 mt-5"><span class="fw-800">Melbourne First Choice Plumbing</span> High-Quality Customer-Focused</div>
                        <div class="py-4">Melbourne First Choice Plumbing is a name you can trust for high-quality customer-focused plumbing services in Melbourne. Get in touch with a business that hundreds of residents in Melbourne turn to as their first choice for their plumbing needs.</div>
                        <div class="banner-cta lh-1">
                            <div class="fs-38 fw-800">$100 Cashback On</div>
                            <div class="text-capitalize fs-24">hot water service replacement</div>
                            <?= renderImg('hot-water-systems.png', 'lib', 'hot-water-systems') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="qualification">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="fs-44 lh-1"><span class="fw-700">Fully Qualified</span> &amp; Insured Plumbers</div>
                            <div class=" fs-18 pt-2 pb-3">Melbourne First Choice Plumbing is a name<br class="d-none d-lg-block"> you can trust for high-quality</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-tertiary p-3">
                                <div class="fs-27 fw-800">Free CCTV Inspection</div>
                                <div class="">With Any Blocked Drain Service</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <form action="./src/form" method="POST">
                    <div class="text-primary fs-36 lh-1 pb-4"><span class="fw-800">Get In Contact</span> With Our Team</div>
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <label>What is your full name</label>
                            <input type="text" class="form-control" name="name" placeholder="John Citizen" required>
                        </div>
                        <div class="col-lg">
                            <label>Your Contact Email</label>
                            <input type="text" class="form-control" name="name" placeholder="john@gmail.com" required>
                        </div>
                        <div class="col-lg">
                            <label>Your Contact Number</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Number" required>
                        </div>
                        <div class="col-12">
                            <label>What suburb is your property in?</label>
                            <input type="text" class="form-control" name="name" placeholder="Parramatta" required>
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
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg">
                <div class="text-capitalize fs-60 lh-1"><span class="text-primary fw-700">High-Quality Customer-Focused Plumbing</span> Services In Melbourne</div>
                <div class="py-3">
                    <p class="text-dark pb-3">We guarantee our work and only recommend quality brands while taking into account customers' budgets. This translates to happy repeat customers and referrals!</p>
                    <p class="text-dark pb-3">Melbourne First Choice Plumbing is a name you can trust for high-quality customer-focused plumbing services in Melbourne. Get in touch with a business that hundreds of residents in Melbourne turn to as their first choice for their plumbing needs</p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved
                    </div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>