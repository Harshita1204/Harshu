<?php
$pageTitle = "Contact | HappyPaws";
$currentPage = "contact";
require __DIR__ . "/includes/header.php";
?>
<section class="hero">
    <div class="container hero-grid">
        <div class="reveal">
            <p class="eyebrow">Contact</p>
            <h1>Say hello and tell us about your puppy.</h1>
            <p class="muted">We respond quickly and help you choose the right visit type.</p>
            <div class="card">
                <h3>Clinic hours</h3>
                <p>Mon-Sat: 9:00 AM - 7:00 PM<br />Sun: 10:00 AM - 2:00 PM</p>
                <p>Phone: 9888518057<br />Email: adarsh@gsmil.com</p>
            </div>
            <img class="puppy-hero" src="assets/images/puppy-contact.svg" alt="Puppy waving" />
        </div>
        <div class="form-card reveal delay-1">
            <h2>Book a visit</h2>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Your name" required />
                <input type="email" name="email" placeholder="Email address" required />
                <input type="tel" name="phone" placeholder="Phone number" />
                <select name="service">
                    <option value="">Choose a service</option>
                    <option value="wellness">Puppy wellness</option>
                    <option value="vaccines">Vaccines</option>
                    <option value="nutrition">Nutrition support</option>
                </select>
                <textarea name="message" placeholder="Tell us about your puppy"></textarea>
                <button class="btn btn-primary" type="submit">Send Request</button>
            </form>
        </div>
    </div>
</section>
<section class="section">
    <div class="container split">
        <div class="card reveal">
            <h2>Find us</h2>
            <p class="muted">24 Sunshine Lane, Hyderabad</p>
            <div class="map-placeholder">
                <p class="muted">Map placeholder</p>
            </div>
        </div>
        <div class="reveal delay-1">
            <h2>What to bring</h2>
            <ul>
                <li>Puppy vaccination record</li>
                <li>Favorite toy or blanket</li>
                <li>List of questions</li>
            </ul>
            <div class="card">
                <h3>Need help now?</h3>
                <p class="muted">Call our advice line and we will guide you fast.</p>
            </div>
        </div>
    </div>
</section>
<?php
require __DIR__ . "/includes/footer.php";
?>
