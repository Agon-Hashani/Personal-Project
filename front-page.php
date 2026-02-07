<?php get_header(); ?>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

<main class="landing">

  <section class="hero container">
    <div class="hero-left">
      <h1>Find Your Dream Home Today</h1>
      <p class="lead">Explore curated properties from trusted agents — filter by location, size, and lifestyle.</p>
      <form class="search-form" role="search" onsubmit="return false;">
        <input type="search" id="search-location" placeholder="Enter location (e.g., New York)" aria-label="Search location">
        <button class="btn btn-primary" id="search-btn" aria-label="Search"><span class="search-icon">🔍</span> Search</button>
      </form>
    </div>
    <div class="hero-right">
      <div class="hero-image-wrap">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80" alt="Modern luxury home">
      </div>
    </div>
  </section>

  <section id="featured" class="featured container">
    <h2 class="section-title">Featured Listings</h2>
    <div class="listings-grid">
      <?php
      // Example static cards — replace with dynamic loop as needed
      $cards = array(
        array('img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=60', 'price'=>'$1,250,000','badge'=>'Featured','beds'=>4,'baths'=>3,'sqft'=>2800),
        array('img' => 'https://images.unsplash.com/photo-1572120360610-d971b9b6a8a2?auto=format&fit=crop&w=800&q=60', 'price'=>'$899,000','badge'=>'New','beds'=>3,'baths'=>2,'sqft'=>1650),
        array('img' => 'https://images.unsplash.com/photo-1599423300746-b62533397364?auto=format&fit=crop&w=800&q=60', 'price'=>'$2,400,000','badge'=>'Featured','beds'=>5,'baths'=>4,'sqft'=>4100),
        array('img' => 'https://images.unsplash.com/photo-1554995207-c18c203602cb?auto=format&fit=crop&w=800&q=60', 'price'=>'$720,000','badge'=>'New','beds'=>2,'baths'=>2,'sqft'=>1200),
        array('img' => 'https://images.unsplash.com/photo-1505691723518-36a3e6fef1d7?auto=format&fit=crop&w=800&q=60', 'price'=>'$1,050,000','badge'=>'Featured','beds'=>3,'baths'=>3,'sqft'=>2100),
        array('img' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=60', 'price'=>'$560,000','badge'=>'New','beds'=>1,'baths'=>1,'sqft'=>850),
      );
      foreach($cards as $c): ?>
        <article class="card">
          <div class="card-media">
            <img src="<?php echo $c['img']; ?>" alt="Property image">
            <span class="badge"><?php echo $c['badge']; ?></span>
          </div>
          <div class="card-body">
            <div class="price"><?php echo $c['price']; ?></div>
            <ul class="meta">
              <li>🛏 <?php echo $c['beds']; ?></li>
              <li>🛁 <?php echo $c['baths']; ?></li>
              <li>📐 <?php echo $c['sqft']; ?> sqft</li>
            </ul>
            <button class="btn btn-sm btn-outline">View Details</button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="cta" class="cta">
    <div class="container cta-inner">
      <h2>Ready to Find Your Perfect Place?</h2>
      <p>Our agents are here to provide personalized recommendations and guided tours tailored to your needs.</p>
      <a class="btn btn-primary" href="#contact">Get Personalized Assistance</a>
    </div>
  </section>

  <section id="contact" class="contact container">
    <div class="contact-grid">
      <div class="contact-form">
        <h3>Contact Us</h3>
        <form id="contactForm" onsubmit="return false;">
          <label for="name">Name</label>
          <input id="name" name="name" required>
          <label for="email">Email</label>
          <input id="email" type="email" name="email" required>
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>
          <button class="btn btn-primary" id="send-btn">Send Message</button>
        </form>
      </div>
      <aside class="our-details">
        <h3>Our Details</h3>
        <p>📞 <strong>+1 (555) 123-4567</strong></p>
        <p>✉️ <strong>info@realestate-listings.example</strong></p>
        <p>📍 <strong>123 Market St, Suite 400, New York, NY</strong></p>
      </aside>
    </div>
  </section>

</main>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php get_footer(); ?>
