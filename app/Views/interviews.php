<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .filter-btn {
            margin: 3px;
            border-radius: 20px;
        }

        .badge-category {
            margin-right: 5px;
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
</head>

<body>

    <?= view('layouts/header') ?>

    <!-- Breadcrumb -->
    <nav class="container mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Interviews</li>
        </ol>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-info">Interviews</h1>
                <hr class="w-50">
                <p>Explore exclusive conversations with industry leaders, innovators, and change-makers. Gain insights into their journeys, strategies,<br> and the evolving role of technology in business success.</p>
                <a href="#" class="fs-4" style="text-decoration: underline; color: black; font-weight: bold;">Discover how top minds are shaping the future — only on our Interview series.</a>
            </div>
        </div>
    </div>

    <div class="container mb-4 mt-4">
        <div class="row">
            <!-- Main Content -->
            <div class="col-12 col-md-9 border-end">
                <div class="text-start mb-3">
                    <span class="featured-label fw-bold">Interview</span>
                </div>

                <form method="get" class="row row-cols-1 row-cols-md-3 g-3 mb-4">
                    <!-- Category Dropdown -->
                    <div>
                        <select name="category" class="form-select" onchange="this.form.submit()">
                            <option value="">All Categories</option>
                            <?php
                            $categories = ['MarTech', 'HRTech', 'Fintech', 'Consumer Tech'];
                            foreach ($categories as $cat) {
                                $selected = ($_GET['category'] ?? '') === $cat ? 'selected' : '';
                                echo "<option value=\"$cat\" $selected>$cat</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Subcategory Dropdown -->
                    <div>
                        <select name="subcategory" class="form-select" onchange="this.form.submit()">
                            <option value="">All Subcategories</option>
                            <?php
                            $selectedCategory = $_GET['category'] ?? '';
                            $subcategoryOptions = [];

                            switch ($selectedCategory) {
                                case 'MarTech':
                                    $subcategoryOptions = ["Advertising", "AI", "Analytics", "Business Intelligence", "CDP", "Communications", "Content Management", "Content Marketing", "Conversational Marketing", "CRM", "Customer Engagement", "Customer Experience", "Cybersecurity", "Data Management", "Digital Asset Management", "Digital Experience", "Digital Marketing", "Digital Transformation", "E-commerce", "Email Marketing", "Marketing Automation", "Marketing Cloud", "Sales", "SEO/SEM", "Social Media", "Supply Chain Management"];
                                    break;
                                case 'HRTech':
                                    $subcategoryOptions = ["AI", "Cybersecurity", "Diversity, Equity & Inclusion (DEI)", "Employee Experience", "Employee Wellness", "HCM", "HR Analytics", "HR Automation", "HR Cloud", "Learning & Development", "Payroll & Benefits", "Remote Work", "Talent Acquisition", "Workforce Management"];
                                    break;
                                case 'Fintech':
                                    $subcategoryOptions = ["Banking", "Blockchain", "Cryptocurrency", "Decentralized Finance", "Financial Services", "Insurance", "Investment", "Lending & Credit", "Payments & Wallets", "Security"];
                                    break;
                                case 'Consumer Tech':
                                    $subcategoryOptions = ["5G Devices", "AI", "Audio & Visual Technology", "Computers", "Consumer Health", "Home Appliances", "In-home Entertainment", "Mobile", "Online Retail", "Security", "Smart Home Technology", "Social Networking", "Wearable Technology"];
                                    break;
                            }

                            foreach ($subcategoryOptions as $sub) {
                                $selected = ($_GET['subcategory'] ?? '') === $sub ? 'selected' : '';
                                echo "<option value=\"$sub\" $selected>$sub</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Search Box -->
                    <div>
                        <input type="text" name="search" class="form-control" placeholder="Search news..."
                            value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                    </div>
                </form>

                <!-- Interview Section -->

                <div class="container mt-5">
                    <h2 class="mb-4">Exclusive Interviews</h2>

                    <?php if (!empty($interviews)): ?>
                        <?php foreach ($interviews as $id => $item): ?>
                            <div class="row mb-4 border-bottom pb-3">
                                <div class="col-md-4">
                                    <a href="<?= base_url('interviews/' . $id) ?>">
                                        <img src="<?= esc($item['image']) ?>" class="img-fluid rounded" alt="Interview Image">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <h4>
                                        <a href="<?= base_url('interviews/' . $id) ?>" class="text-decoration-none text-dark">
                                            <?= esc($item['title']) ?>
                                        </a>
                                    </h4>
                                    <small class="text-muted"><?= esc($item['date']) ?> | <?= esc($item['read_time']) ?></small>
                                    <p>
                                        <?= esc(implode(' ', array_slice(explode(' ', strip_tags($item['content'])), 0, 20))) ?>...
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No interviews available.</p>
                    <?php endif; ?>
                </div>


            </div>

            <!-- Sidebar Carousel -->
            <div class="col-12 col-md-3 mt-4 mt-md-0">
                <div class="text-start mb-3">
                    <span class="featured-label fw-bold">Press Releases</span>
                </div>



                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                    <!-- Buttons on Top -->
                    <div class="d-flex justify-content-end gap-2 mb-3">
                        <button class="btn btn-primary btn-sm" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">

                            < </button>
                                <button class="btn btn-primary btn-sm" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">

                                    >
                                </button>
                    </div>

                    <!-- Carousel Items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                            <div>
                                <img src="https://dummyimage.com/600x300/000/fff" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="card mt-3 mt-lg-0 bg-light">
                        <div class="card-body p-3 shadow-sm">
                            <h5 class="card-title fs-6 fw-semibold">Subscribe to Our Newsletter</h5>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control form-control-sm" placeholder="Enter your email"
                                    aria-label="Email" required>
                                <button class="btn btn-primary btn-sm" type="button">Subscribe</button>
                            </div>
                            <p class="small">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit,
                                recusandae?
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?= view('layouts/footer') ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>