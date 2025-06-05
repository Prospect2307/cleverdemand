<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($pressReleaseItem['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?= view('layouts/header') ?>

    <!-- Breadcrumb -->
    <nav class="container mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/news">Press Release</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= esc($pressReleaseItem['title']) ?></li>
        </ol>
    </nav>
    <style>
        .bgColor {
            background-color: rgba(37, 77, 112, 0.2);
            opacity: inherit;
        }

        .featured-label {
            background-color: #27548A;
            padding: 5px 10px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 10px;
            color: white;
        }
    </style>
    <!-- Main Content -->
    <div class="container py-4">
        <div class="row d-flex bgColor justify-content-between p-3">
            <!-- Title & Meta -->
            <div class="col-md-5 d-flex align-items-center">
                <div>
                    <h2 class="fw-bold"><?= esc($pressReleaseItem['title']) ?></h2>
                    <p class="text-danger"><?= esc($pressReleaseItem['category']) ?></p>
                    <small class="">By Cleverdemand | Date: <?= esc($pressReleaseItem['date']) ?> |
                        <?= esc($pressReleaseItem['read_time']) ?></small>
                </div>
            </div>
            <!-- Image -->
            <div class="col-md-6 text-end">
                <img src="<?= esc($pressReleaseItem['image']) ?>" class="img-fluid rounded" alt="News Image">
            </div>
        </div>

        <!-- Content Columns -->
        <div class="row mt-5">
            <!-- Left Column -->
            <div class="col-md-3">
                <div class="text-start mb-3">
                    <span class="featured-label fw-bold">In this feature</span>
                </div>
                <ul>
                    <li>AI Impact</li>
                    <li>Innovation</li>
                    <li>Use Cases</li>
                </ul>

                <!-- Share & Subscribe -->
                <div class="mb-4">
                    <div class="text-start mb-3">
                        <span class="featured-label fw-bold">Share Social</span>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="text-white social-icon">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="#" class="text-white social-icon">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="text-white social-icon">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                    <br>
                    <form>
                        <input type="email" class="form-control w-100 mb-2" placeholder="Email">
                        <button type="submit" class="btn btn-dark w-100">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Center Column (Main Content) -->
            <div class="col-md-6">
                <p><?= esc($pressReleaseItem['content']) ?></p>
                       <div class="d-flex gap-2 mt-3">
                        <div class="d-flex align-items-center border rounded-pill px-2 py-1">
                            <span class="d-inline-block me-1 rounded-circle"
                                style="width: 10px; height: 10px; background-color: #f7df1e;"></span>
                            AI
                        </div>
                        <div class="d-flex align-items-center border rounded-pill px-2 py-1">
                            <span class="d-inline-block me-1 rounded-circle"
                                style="width: 10px; height: 10px; background-color: #41b883;"></span>
                            Cybersequrity
                        </div>
                        <div class="d-flex align-items-center border rounded-pill px-2 py-1">
                            <span class="d-inline-block me-1 rounded-circle"
                                style="width: 10px; height: 10px; background-color:rgb(129, 184, 65);"></span>
                            Computers
                        </div>
                    </div>
            </div>

            <!-- Right Column (Relevant Articles) -->
            <div class="col-md-3">

                <div class="text-start mb-3">
                    <span class="featured-label fw-bold">Relevant articles</span>
                </div>
                <!-- <h5 class="">Relevant articles</h5> -->
                <div class="card mb-3">
                    <img src="https://dummyimage.com/600x400/000/fff" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Related Topic</h6>
                        <p class="card-text">Short content summary...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= view('layouts/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const breadcrumb = document.querySelector('.breadcrumb-item.active');
        if (breadcrumb) {
            const words = breadcrumb.textContent.trim().split(' ');
            if (words.length > 6) {
                breadcrumb.textContent = words.slice(0, 6).join(' ') + '...';
            }
        }
    </script>
</body>

</html>