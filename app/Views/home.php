<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    </style>
</head>
<body>
    <?= view('layouts/header') ?>
 <div class="container py-3 py-md-4">
  <!-- Featured Article Section -->
  <div class="row g-3 g-md-4">
    <!-- Main Content -->
    <div class="col-12 col-md-8 col-lg-9">
      <div class="mb-3 mb-md-4 w-100">
        <div class="row g-2 g-md-3">
          <div class="col-12 col-md-12 mb-3 mb-md-0 mt-3">
            <div class="text-start mb-3">
              <span class="featured-label fw-bold">Latest Insight</span>
            </div>
            <img src="https://dummyimage.com/900x550/000/fff" class="img-fluid rounded w-100 object-fit-cover"
              alt="Featured Image" style="height: 300px; object-fit: cover;">
            <div class="text-start mt-3">
              <p class="badge text-bg-primary text-uppercase small mb-2 mb-md-3">Healthcare and MedTech</p>
              <h3 class="fs-5 fs-md-4 fw-semibold mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                cum officiis quidem. Magni harum omnis ipsum ducimus sed. Quos, fugiat.</h3>
              <p class="text-muted small mb-0">May 30, 2025</p>
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
            <a href="#" class="text-decoration-none">Xionomics: Dems chip breakthrough: A new flashpoint in the US-China
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

  <!-- Latest News Section -->
  <div class="row g-3 g-md-4 mt-3 mt-md-4">
    <div class="col-12">
      <span class="featured-label fw-bold">Latest News</span>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="card rounded-0 h-100">
        <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid card-img-top object-fit-cover"
          alt="Article Image" style="aspect-ratio: 3/2; height: 180px;">
        <div class="card-body p-3">
          <p class="category-label text-muted small mb-1">Cybersecurity</p>
          <p class="text-muted small mb-2">May 29, 2025</p>
          <h5 class="card-title fs-6 fw-semibold">US cybersecurity agency's leaders in mass exodus</h5>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="card rounded-0 h-100">
        <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid card-img-top object-fit-cover"
          alt="Article Image" style="aspect-ratio: 3/2; height: 180px;">
        <div class="card-body p-3">
          <p class="category-label text-muted small mb-1">Hardware</p>
          <p class="text-muted small mb-2">May 29, 2025</p>
          <h5 class="card-title fs-6 fw-semibold">Apple C1 modem performance criticized in Qualcomm-funded research</h5>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="card rounded-0 h-100">
        <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid card-img-top object-fit-cover"
          alt="Article Image" style="aspect-ratio: 3/2; height: 180px;">
        <div class="card-body p-3">
          <p class="category-label text-muted small mb-1">Hardware</p>
          <p class="text-muted small mb-2">May 29, 2025</p>
          <h5 class="card-title fs-6 fw-semibold">Apple C1 modem performance criticized in Qualcomm-funded research</h5>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="card rounded-0 h-100">
        <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid card-img-top object-fit-cover"
          alt="Article Image" style="aspect-ratio: 3/2; height: 180px;">
        <div class="card-body p-3">
          <p class="category-label text-muted small mb-1">Hardware</p>
          <p class="text-muted small mb-2">May 29, 2025</p>
          <h5 class="card-title fs-6 fw-semibold">Apple C1 modem performance criticized in Qualcomm-funded research</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Interviews Section -->
  <div class="row mt-4">
    <div class="col-12">
      <span class="featured-label fw-bold">Interviews</span>
    </div>
    <div class="col-12">
      <div id="interviewCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-1 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-1 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card rounded-0 border-1 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-1 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-1 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card rounded-0 border-1 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  <div class="row g-3 g-md-4 mt-3 mt-md-4">
    <div class="col-12 col-lg-9">
      <div class="text-start mb-3">
        <span class="featured-label fw-bold">Broad Category</span>
      </div>

      <!-- Navigation Tabs -->
      <div class="d-flex overflow-auto mb-3">
        <ul class="nav nav-tabs flex-nowrap" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="active-tab" data-bs-toggle="tab" href="#active" role="tab"
              aria-controls="active" aria-selected="true">AI</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
              aria-expanded="false">Security</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" id="action-tab" data-bs-toggle="tab" href="#action" role="tab"
                  aria-controls="action">Action</a></li>
              <li><a class="dropdown-item" id="another-action-tab" data-bs-toggle="tab" href="#another-action"
                  role="tab" aria-controls="another-action">Another action</a></li>
              <li><a class="dropdown-item" id="something-else-tab" data-bs-toggle="tab" href="#something-else"
                  role="tab" aria-controls="something-else">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" id="separated-link-tab" data-bs-toggle="tab" href="#separated-link"
                  role="tab" aria-controls="separated-link">Separated link</a></li>
            </ul>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="link-tab" data-bs-toggle="tab" href="#link" role="tab" aria-controls="link"
              aria-selected="false">Automation</a>
          </li>
        </ul>
      </div>

      <!-- Tab Content -->
      <div class="tab-content" id="myTabContent">
        <!-- AI Tab -->
        <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-tab">
          <div class="row g-2 g-md-3">
            <div class="col-12">
              <div class="mt-2">
                <h5 class="fs-6 fw-semibold">US takes down DanaBot botnet used in global hacks and fraud</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="card-text text-muted small mb-0">AI</p>
                  <p class="card-text text-muted small mb-0">15 Jun 2025</p>
                </div>
              </div>
              <hr>
              <div class="mt-2">
                <h5 class="fs-6 fw-semibold">AI is revolutionizing healthcare diagnostics</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="card-text text-muted small mb-0">AI</p>
                  <p class="card-text text-muted small mb-0">12 Jun 2025</p>
                </div>
              </div>
              <hr>
              <div class="mt-2">
                <h5 class="fs-6 fw-semibold">New AI model outperforms humans in language tests</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="card-text text-muted small mb-0">AI</p>
                  <p class="card-text text-muted small mb-0">10 Jun 2025</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Other tab panes remain the same -->
        <!-- ... -->
      </div>
    </div>

    <!-- Newsletter Section -->
    <div class="col-12 col-lg-3">
      <div class="card mt-3 mt-lg-0 bg-light">
        <div class="card-body p-3 shadow-sm">
          <h5 class="card-title fs-6 fw-semibold">Subscribe to Our Newsletter</h5>
          <div class="input-group mb-3">
            <input type="email" class="form-control form-control-sm" placeholder="Enter your email" aria-label="Email"
              required>
            <button class="btn btn-primary btn-sm" type="button">Subscribe</button>
          </div>
          <p class="small">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, recusandae?</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Latest Articles Section -->
  <div class="row mt-4">
    <div class="col-12">
      <span class="featured-label fw-bold">Latest Articles</span>
    </div>
    <div class="col-12">
      <div id="articlesCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-0 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-0 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card rounded-0 border-0 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-0 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="card rounded-0 border-0 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card rounded-0 border-0 h-100">
                  <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid w-100" alt="Article Image"
                    style="height: 200px; object-fit: cover;">
                  <div class="d-flex justify-content-between mt-3 mb-3 p-2">
                    <p class="category-label text-muted small mb-1">Startups</p>
                    <p class="text-muted small mb-2">May 27, 2025</p>
                  </div>
                  <h5 class="card-title fs-6 fw-semibold p-2">This startup wants to automate urban farming</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#articlesCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#articlesCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
    <?= view('layouts/footer') ?>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>