<?php
$pageTitle = "HappyPaws Puppy Vet Care";
$currentPage = "home";
require __DIR__ . "/includes/header.php";
?>
<section class="hero">
    <div class="container hero-grid">
        <div class="reveal">
            <p class="eyebrow">Puppy vet care in Hyderabad</p>
            <h1>Big care for tiny paws and first time pet parents.</h1>
            <p class="muted">We make puppy health simple with warm staff, gentle handling, and clear care plans.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="contact.php">Book a Puppy Visit</a>
                <a class="btn btn-light" href="care.php">Explore Care Plans</a>
            </div>
        </div>
        <div class="hero-card reveal delay-1">
            <div class="hero-card-inner">
                <span class="card-tag">New Puppy Welcome Kit</span>
                <h2>Start with calm, confident care.</h2>
                <p>Vaccines, deworming, nutrition guidance, and a customized growth plan in one cozy visit.</p>
                <ul>
                    <li>Gentle vet checkups</li>
                    <li>Clean puppy clinic</li>
                    <li>Easy follow up visits</li>
                </ul>
                <img class="puppy-hero" src="assets/images/puppy-hero.svg" alt="Happy puppy" />
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-header">
            <div>
                <p class="eyebrow">Why HappyPaws</p>
                <h2>Care that grows with your puppy.</h2>
            </div>
            <a class="btn btn-light" href="services.php">View Services</a>
        </div>
        <div class="grid-3">
            <div class="card reveal">
                <h3>Gentle exams</h3>
                <p class="muted">Slow, patient handling that keeps your pup relaxed and happy.</p>
            </div>
            <div class="card reveal delay-1">
                <h3>Clear guidance</h3>
                <p class="muted">Simple explanations and take home steps for every visit.</p>
            </div>
            <div class="card reveal delay-2">
                <h3>Modern clinic</h3>
                <p class="muted">Bright spaces, clean rooms, and cozy puppy comforts.</p>
            </div>
        </div>
    </div>
</section>
<section class="strip">
    <div class="container strip-grid">
        <div class="strip-card">
            <h3>98%</h3>
            <p>Happy puppy parents</p>
        </div>
        <div class="strip-card">
            <h3>10+</h3>
            <p>Years of vet care</p>
        </div>
        <div class="strip-card">
            <h3>24 hr</h3>
            <p>Phone advice line</p>
        </div>
        <div class="strip-card">
            <h3>4 steps</h3>
            <p>Easy care plan</p>
        </div>
    </div>
</section>
<section class="section">
    <div class="container split">
        <div class="reveal">
            <p class="eyebrow">Puppy Care Path</p>
            <h2>We build a simple plan that fits your lifestyle.</h2>
            <p class="muted">From first vaccines to nutrition and training tips, we guide you through each milestone.</p>
            <div class="card">
                <h3>Included in your plan</h3>
                <p class="muted">Wellness check, vaccination tracking, flea and tick care, and growth updates.</p>
            </div>
        </div>
        <div class="card reveal delay-1">
            <span class="card-tag">Popular</span>
            <h3>HappyStart Plan</h3>
            <p>Perfect for puppies under 1 year.</p>
            <ul>
                <li>4 wellness visits</li>
                <li>Vaccine schedule</li>
                <li>Nutrition guide</li>
                <li>Behavior tips</li>
            </ul>
            <img class="puppy-inline" src="assets/images/puppy-care.svg" alt="Puppy with heart" />
            <a class="btn btn-primary" href="care.php">See Plan Details</a>
        </div>
    </div>
</section>
<?php
require __DIR__ . "/includes/footer.php";
?>
