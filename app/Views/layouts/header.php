<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
  .navbg {
    background-color: #254D70;
  }

  .nav-link {
    color: white;
    position: relative;
    transition: background-color 0.3s ease, color 0.3s ease;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;
  }

  .nav-link:hover,
  .nav-link:focus {
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
    text-decoration: none;
  }

  .dropdown-menu .dropdown-item:hover {
    background-color: #254D70;
    color: white;
  }
</style>

</head>
<body>
        <nav class="navbar navbg navbar-expand-lg py-3 sticky-top">
      <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- Logo -->
        <a class="navbar-brand me-5 text-light" href="<?= base_url('/') ?>">Navbar</a>

        <!-- Toggler (for mobile view) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Center nav and search using custom spacing -->
        <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
          <div class="d-flex w-100 justify-content-between align-items-center">

            <!-- Nav Tabs -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item mx-3">
                <a class="nav-link active text-light" aria-current="page" href="<?= base_url('news/') ?>">News</a>
              </li>

              <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  CleverDemand Compass
                </a>
                <ul class="dropdown-menu border-0 bg-light">
                  <li><a class="dropdown-item " href="#">Emerging Technology</a></li>
                  <li><a class="dropdown-item" href="#">Automation</a></li>
                  <li><a class="dropdown-item" href="#">Automation</a></li>
                  <li><a class="dropdown-item" href="#">Business Consulting </a></li>
                  <li><a class="dropdown-item" href="#">Enterprise Mobility Management</a></li>

                </ul>
              </li>

              <li class="nav-item mx-3">
                <a class="nav-link text-light">Interview</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link text-light">Article</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link text-light">Resources</a>
              </li>
            </ul>

            <!-- Improved Search Form -->
            <div class="search-container ms-auto position-relative">
              <form class="d-flex align-items-center" role="search">
                <div class="input-group">
                  <input class="form-control border-end-0 rounded-pill ps-3 pe-5" type="search"
                    placeholder="Search articles..." aria-label="Search" style="height: 40px; min-width: 250px;">
                  <button class="btn btn-link text-muted position-absolute end-0 top-50 translate-middle-y me-2"
                    type="submit" style="border: none; background: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      viewBox="0 0 16 16">
                      <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                  </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </nav>
</body>
</html>