<?php
$pageTitle = "Care Plans | HappyPaws";
$currentPage = "care";
require __DIR__ . "/includes/header.php";
?>
<section class="hero">
    <div class="container hero-grid">
        <div class="reveal">
            <p class="eyebrow">Care plans</p>
            <h1>Puppy care that stays simple and joyful.</h1>
            <p class="muted">Choose a plan that keeps your puppy protected, calm, and growing strong.</p>
            <a class="btn btn-primary" href="contact.php">Book a Plan Visit</a>
        </div>
        <div class="hero-card reveal delay-1">
            <div class="hero-card-inner">
                <h2>What every puppy needs</h2>
                <ul>
                    <li>Wellness exams and growth checks</li>
                    <li>Vaccination timeline</li>
                    <li>Deworming and parasite care</li>
                    <li>Nutrition and feeding guidance</li>
                </ul>
                <img class="puppy-hero" src="assets/images/puppy-care.svg" alt="Smiling puppy" />
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-header">
            <div>
                <p class="eyebrow">Plans</p>
                <h2>Pick the care that matches your puppy.</h2>
            </div>
        </div>
        <div class="grid-3">
            <div class="card reveal">
                <span class="card-tag">Newborn</span>
                <h3>Snuggle Start</h3>
                <p class="muted">First check, gentle vaccines, and starter nutrition tips.</p>
                <ul>
                    <li>2 visits</li>
                    <li>Vaccine intro</li>
                    <li>Feeding routine</li>
                </ul>
            </div>
            <div class="card reveal delay-1">
                <span class="card-tag">Popular</span>
                <h3>HappyStart</h3>
                <p class="muted">Our full plan for puppies under 1 year.</p>
                <ul>
                    <li>4 visits</li>
                    <li>Full vaccine schedule</li>
                    <li>Behavior basics</li>
                </ul>
            </div>
            <div class="card reveal delay-2">
                <span class="card-tag">Premium</span>
                <h3>Golden Pup</h3>
                <p class="muted">Extra checkups plus grooming and training support.</p>
                <ul>
                    <li>6 visits</li>
                    <li>Vet direct line</li>
                    <li>Grooming guide</li>
                </ul>
                <img class="puppy-inline" src="assets/images/puppy-services.svg" alt="Puppy sparkle" />
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container split">
        <div class="card reveal">
            <h2>Vaccination roadmap</h2>
            <p class="muted">We track your puppy schedule and send reminders for each milestone.</p>
            <ol>
                <li>6 to 8 weeks: first core vaccines</li>
                <li>10 to 12 weeks: booster round</li>
                <li>14 to 16 weeks: final boosters</li>
                <li>6 months: wellness and lifestyle check</li>
            </ol>
        </div>
        <div class="reveal delay-1">
            <h2>Nutrition made easy</h2>
            <p class="muted">We help you pick the right food, serving size, and safe treats.</p>
            <div class="card">
                <h3>Included tips</h3>
                <p class="muted">Portion guide, feeding schedule, and healthy snack list.</p>
            </div>
        </div>
    </div>
</section>
<?php
require __DIR__ . "/includes/footer.php";
?>
