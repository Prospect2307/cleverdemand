<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Home</title>
  <style>
    .featured-label {
      background-color: #27548A;
      padding: 5px 10px;
      font-weight: bold;
      display: inline-block;
      margin-bottom: 10px;
      color: white;
    }

    .card:hover {
      transform: translateY(-4px);
      transition: 0.3s ease;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .hover-underline:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <?= view('layouts/header') ?>
  <div class="container py-3 py-md-4">
    <!-- Featured Article Section -->
    <div class="row g-3 g-md-4">
      <!-- Main Content -->
      <?php
      // Get the first news item for "Latest Insight"
      $featured = reset($news); // or: $news[0]; if it's indexed numerically
      ?>
      <div class="col-12 col-md-8 col-lg-9">
        <div class="mb-3 mb-md-4 w-100">
          <div class="row g-2 g-md-3">
            <div class="col-12 col-md-12 mb-3 mb-md-0 mt-3">
              <div class="text-start mb-3">
                <span class="featured-label fw-bold">Latest Insight</span>
              </div>
              <a href="<?= base_url('news/' . key($news)) ?>">
                <img src="<?= esc($featured['image']) ?>" class="img-fluid rounded w-100 object-fit-cover"
                  alt="Featured Image" style="height: 300px; object-fit: cover;">
              </a>
              <div class="text-start mt-3">
                <p class="badge text-bg-primary text-uppercase small mb-2 mb-md-3">
                  <?= esc($featured['category']) ?>
                </p>
                <h3 class="fs-5 fs-md-4 fw-semibold mb-2">
                  <a href="<?= base_url('news/' . key($news)) ?>" class="text-decoration-none text-dark">
                    <?= esc($featured['title']) ?>
                  </a>
                </h3>
                <p>
                  <?= esc(implode(' ', array_slice(explode(' ', strip_tags($featured['content'])), 0, 20))) . '...' ?>
                </p>

                <p class="text-muted small mb-0"><?= esc($featured['date']) ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Sidebar -->
      <div class="col-12 col-md-4 col-lg-3">
        <div class="text-start mb-3">
          <span class="featured-label fw-bold">Latest Insight</span>
        </div>
        <div class="popular-section rounded-5">
          <h5 class="fw-semibold mb-3">Popular</h5>
          <ul class="list-unstyled">
            <li class="mb-3">
              <a href="#" class="text-decoration-none">Xionomics: Dems chip breakthrough: A new flashpoint in the
                US-China
                tech war?</a>
            </li>
            <li class="mb-3">
              <p class="category-label text-muted small mb-1">Data Centers</p>
              <a href="#" class="text-decoration-none">Where to go when a library's down</a>
            </li>
            <li class="mb-3">
              <p class="category-label text-muted small mb-1">Latest</p>
              <a href="#" class="text-decoration-none">When will the AI bubble burst?</a>
            </li>
            <li class="mb-3">
              <p class="category-label text-muted small mb-1">Software</p>
              <a href="#" class="text-decoration-none">Microsoft shutters Mail, Calendar, and People in data grab</a>
            </li>
            <li>
              <a href="#" class="text-primary text-decoration-none">See all</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row g-3 g-md-4 mt-3 mt-md-4">
      <div class="col-12">
        <span class="featured-label fw-bold">Latest News</span>
      </div>

      <?php foreach ($news as $id => $item): ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <div class="card rounded-0 h-100">
            <a href="<?= base_url('news/' . $id) ?>">
              <img src="<?= esc($item['image']) ?>" class="img-fluid card-img-top object-fit-cover" alt="Article Image"
                style="aspect-ratio: 3/2; height: 180px;">
            </a>
            <div class="card-body p-3">
              <p class="category-label text-muted small mb-1"><?= esc($item['category']) ?></p>
              <p class="text-muted small mb-2"><?= esc($item['date']) ?></p>
              <h5 class="card-title fs-6 fw-semibold">
                <a href="<?= base_url('news/' . $id) ?>" class="text-decoration-none text-dark">
                  <?= esc($item['title']) ?>
                </a>
              </h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Interviews Section -->
    <div class="row mt-4">
      <div class="col-12">
        <span class="featured-label fw-bold">Interviews</span>
      </div>
      <div class="col-12">
        <div id="interviewCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php if (!empty($interviews)): ?>
              <?php
              $chunks = array_chunk($interviews, 3, true); // Group interviews 3 per slide
              $slideIndex = 0;
              ?>
              <?php foreach ($chunks as $chunk): ?>
                <div class="carousel-item <?= $slideIndex === 0 ? 'active' : '' ?>">
                  <div class="row">
                    <?php foreach ($chunk as $id => $item): ?>
                      <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <div class="card rounded-0 shadow-sm border-1 h-100">
                          <a href="<?= base_url('interviews/' . $id) ?>">
                            <img src="<?= esc($item['image']) ?>" class="img-fluid w-100" alt="Interview Image"
                              style="height: 200px; object-fit: cover;">
                          </a>
                          <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                            <p class="category-label text-muted small mb-1"><?= esc($item['category'] ?? 'Interview') ?></p>
                            <p class="text-muted small mb-2"><?= esc($item['date']) ?></p>
                          </div>
                          <h5 class="card-title fs-6 fw-semibold p-2"><?= esc($item['title']) ?></h5>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <?php $slideIndex++; ?>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="carousel-item active">
                <div class="row">
                  <p class="text-muted">No interviews available.</p>
                </div>
              </div>
            <?php endif; ?>
          </div>

          <!-- Carousel Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#interviewCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#interviewCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>


    <!-- Broad Category and Newsletter Section -->
    <div class="row g-4 mt-4">
      <!-- Left Column -->
      <div class="col-12 col-lg-9">
        <div class="mb-3">
          <span class="featured-label fw-bold">Broad Category</span>
        </div>

        <!-- Dropdown Tab Navigation -->
        <ul class="nav nav-tabs flex-wrap gap-2 mb-3" id="myTab" role="tablist">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button">Martech</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" id="martech-tab" data-bs-toggle="tab" href="#martech"
                  role="tab">Martech News</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">HRTech</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" id="hrtech-tab" data-bs-toggle="tab" href="#hrtech" role="tab">HRTech
                  News</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">FinTech</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" id="fintech-tab" data-bs-toggle="tab" href="#fintech" role="tab">FinTech
                  News</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">Consumer Tech</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" id="consumer-tab" data-bs-toggle="tab" href="#consumer" role="tab">Consumer
                  Tech News</a></li>
            </ul>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
          <!-- Martech -->
          <div class="tab-pane fade show active" id="martech" role="tabpanel" aria-labelledby="martech-tab">
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">Top Martech Tools of 2025</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>Martech</span>
                <span>10 Jun 2025</span>
              </div>
            </div>
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">How AI is Changing Marketing Automation</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>Martech</span>
                <span>08 Jun 2025</span>
              </div>
            </div>
          </div>

          <!-- HRTech -->
          <div class="tab-pane fade" id="hrtech" role="tabpanel" aria-labelledby="hrtech-tab">
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">Top 5 HR platforms reshaping hiring</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>HRTech</span>
                <span>11 Jun 2025</span>
              </div>
            </div>
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">Remote work tools adopted by global HR teams</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>HRTech</span>
                <span>09 Jun 2025</span>
              </div>
            </div>
          </div>

          <!-- FinTech -->
          <div class="tab-pane fade" id="fintech" role="tabpanel" aria-labelledby="fintech-tab">
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">India’s UPI growth fuels FinTech boom</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>FinTech</span>
                <span>13 Jun 2025</span>
              </div>
            </div>
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">Crypto regulations tighten across Asia</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>FinTech</span>
                <span>10 Jun 2025</span>
              </div>
            </div>
          </div>

          <!-- Consumer Tech -->
          <div class="tab-pane fade" id="consumer" role="tabpanel" aria-labelledby="consumer-tab">
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">Smartphone launches to watch in 2025</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>Consumer Tech</span>
                <span>14 Jun 2025</span>
              </div>
            </div>
            <div class="p-3 border rounded bg-white mb-3">
              <h6 class="fw-semibold mb-1">Top smart home gadgets ranked</h6>
              <div class="d-flex justify-content-between text-muted small">
                <span>Consumer Tech</span>
                <span>11 Jun 2025</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Newsletter -->
 <div class="col-12 col-lg-3">
  <div class="card bg-light shadow-sm h-100">
    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
      <h5 class="card-title fs-6 fw-semibold">Subscribe to Our Newsletter</h5>
      <div class="input-group mb-2" style="max-width: 300px;">
        <input type="email" class="form-control form-control-sm" placeholder="Enter your email" required>
        <button class="btn btn-primary btn-sm" type="button">Subscribe</button>
      </div>
      <p class="small text-muted mb-0">Get the latest updates and stories delivered to your inbox every week.</p>
    </div>
  </div>
</div>

    </div>



    <!-- Latest Articles Section -->
    <div class="row mt-5">
      <div class="col-12">
        <span class="featured-label fw-bold">Latest Articles</span>
      </div>
      <div class="col-12">
        <div id="interviewCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php if (!empty($articles)): ?>
              <?php
              $chunks = array_chunk($articles, 3, true); // Group interviews 3 per slide
              $slideIndex = 0;
              ?>
              <?php foreach ($chunks as $chunk): ?>
                <div class="carousel-item <?= $slideIndex === 0 ? 'active' : '' ?>">
                  <div class="row">
                    <?php foreach ($chunk as $id => $item): ?>
                      <div class="col-12 col-md-4 mb-4">
                        <div class="card border-0 rounded-3 shadow-sm h-100 transition">
                          <a href="<?= base_url('articles/' . $id) ?>">
                            <img src="<?= esc($item['image']) ?>" class="card-img-top rounded-top" alt="Article Image"
                              style="height: 200px; object-fit: cover;">
                          </a>
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <span class="badge bg-light text-dark small"><?= esc($item['category'] ?? 'Article') ?></span>
                              <small class="text-muted"><?= esc($item['date']) ?></small>
                            </div>
                            <br>
                            <h5 class="card-title fs-6 fw-semibold">
                              <a href="<?= base_url('articles/' . $id) ?>"
                                class="text-dark text-decoration-none hover-underline">
                                <?= esc($item['title']) ?>
                              </a>
                            </h5>
                          </div>
                        </div>
                      </div>


                    <?php endforeach; ?>
                  </div>
                </div>
                <?php $slideIndex++; ?>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="carousel-item active">
                <div class="row">
                  <p class="text-muted">No Article available.</p>
                </div>
              </div>
            <?php endif; ?>
          </div>

          <!-- Carousel Controls -->
          <!-- <button class="carousel-control-prev" type="button" data-bs-target="#interviewCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#interviewCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button> -->
        </div>
      </div>
    </div>
  </div>
  <?= view('layouts/footer') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>