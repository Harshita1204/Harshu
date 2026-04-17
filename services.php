<?php
$pageTitle = "Services | HappyPaws";
$currentPage = "services";
require __DIR__ . "/includes/header.php";
?>
<section class="hero">
    <div class="container hero-grid">
        <div class="reveal">
            <p class="eyebrow">Services</p>
            <h1>Services Offered by HappyPaws.</h1>
            <p class="muted">Playful, gentle, and expert care designed for young pups and first time pet parents.</p>
            <a class="btn btn-primary" href="contact.php">Ask About Services</a>
        </div>
        <div class="hero-card reveal delay-1">
            <div class="hero-card-inner">
                <h2>Signature services</h2>
                <ul>
                    <li>Puppy daycare and social play</li>
                    <li>Gentle grooming with soothing products</li>
                    <li>Positive reinforcement training</li>
                    <li>Confidence building socialization</li>
                    <li>Wellness checks and nutrition guidance</li>
                </ul>
                <img src="assets/images/dogo5.jpg" alt="Cute puppy" class="image-placeholder medium">
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-header">
            <div>
                <p class="eyebrow">Popular services</p>
                <h2>Care that keeps tails wagging.</h2>
            </div>
        </div>
        <div class="grid-3">
            <div class="card reveal">
                <h3>Puppy Daycare</h3>
                <p class="muted">A safe, supervised environment where your pup can socialize and play with friends while you're away.</p>
            </div>
            <div class="card reveal delay-1">
                <h3>Gentle Grooming</h3>
                <p class="muted">Full service baths, nail trimming, and haircuts using soothing products tailored for sensitive puppy skin.</p>
            </div>
            <div class="card reveal delay-2">
                <h3>Behavioral Training</h3>
                <p class="muted">Positive reinforcement classes focusing on basic commands, potty training, and leash manners.</p>
            </div>
            <div class="card reveal">
                <h3>Socialization Sessions</h3>
                <p class="muted">Controlled play dates designed to build confidence in young dogs through sights, sounds, and textures.</p>
            </div>
            <div class="card reveal delay-1">
                <h3>Puppy Wellness Checks</h3>
                <p class="muted">Basic health tracking and nutritional consultations to ensure your pet is growing at a healthy rate.</p>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container split">
        <div class="reveal">
            <p class="eyebrow">Care flow</p>
            <h2>A stress free clinic visit, every time.</h2>
            <p class="muted">We keep visits short and calm, with clear steps and friendly updates.</p>
            <div class="card">
                <h3>Visit steps</h3>
                <ol>
                    <li>Warm hello and check in</li>
                    <li>Gentle exam and checks</li>
                    <li>Care plan and questions</li>
                </ol>
            </div>
        </div>
        <div class="card reveal delay-1">
            <h3>Membership perks</h3>
            <p class="muted">Bundle visits and get priority slots.</p>
            <ul>
                <li>Priority scheduling</li>
                <li>Discounted services</li>
                <li>Free nutrition check</li>
            </ul>
            <a class="btn btn-primary" href="contact.php">Join Membership</a>
        </div>
    </div>
</section>
<?php
require __DIR__ . "/includes/footer.php";
?>
