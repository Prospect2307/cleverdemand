<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= esc($articleItem['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        .bgColor {
            background-color: rgba(37, 77, 112, 0.2);
        }

        .featured-label {
            background-color: #27548A;
            padding: 5px 10px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 10px;
            color: white;
        }

        .social-icon {
            font-size: 20px;
            color: #27548A;
        }

     

        /* Make content scrollable vertically if needed */
        #articleContentContainer {
            max-height: 80vh;
            overflow-y: auto;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?= view('layouts/header') ?>

    <!-- Breadcrumb -->
    <nav class="container mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/articles">Articles</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= esc($articleItem['title']) ?></li>
        </ol>
    </nav>

    <div class="container py-4">
        <div class="row d-flex bgColor justify-content-between p-3">
            <div class="col-md-5 d-flex align-items-center">
                <div>
                    <h2 class="fw-bold"><?= esc($articleItem['title']) ?></h2>
                    <p class="text-danger"><?= esc($articleItem['category']) ?></p>
                    <small>By Cleverdemand | Date: <?= esc($articleItem['date']) ?> | <?= esc($articleItem['read_time']) ?></small>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <img src="<?= esc($articleItem['image']) ?>" class="img-fluid rounded" alt="Article Image" />
            </div>
        </div>

        <div class="row mt-5">
            <!-- Left Sidebar with Keyword Tabs -->
            <div class="col-md-3">
                <div class="text-start mb-3">
                    <span class="featured-label fw-bold">In this article</span>
                </div>

                <div class="nav flex-column nav-pills" id="articleTabs" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="tab-main-article" data-bs-toggle="pill" href="#tab-article-content" role="tab"
                        aria-controls="tab-article-content" aria-selected="true">
                        <i class="bi bi-file-text me-2"></i>Full Article
                    </a>

                    <?php
                    function getTopKeywords($text, $limit = 10)
                    {
                        $text = strtolower(strip_tags($text));
                        $words = str_word_count($text, 1);
                        $stopwords = ['the', 'and', 'for', 'with', 'that', 'from', 'this', 'which', 'are', 'was', 'but', 'have', 'has', 'had', 'not', 'you', 'your', 'all', 'our', 'can', 'will', 'shall', 'their', 'they', 'them', 'about', 'would', 'there', 'what', 'when', 'where', 'how', 'why'];
                        $counts = [];
                        foreach ($words as $word) {
                            if (strlen($word) > 3 && !in_array($word, $stopwords)) {
                                $counts[$word] = ($counts[$word] ?? 0) + 1;
                            }
                        }
                        arsort($counts);
                        return array_slice(array_keys($counts), 0, $limit);
                    }

                    $contentOriginal = $articleItem['content'] ?? 'Content not available.';
                    $keywords = getTopKeywords($contentOriginal);
                    ?>

                    <?php foreach ($keywords as $keyword): 
                        $keywordId = 'tab-keyword-' . htmlspecialchars($keyword);
                        $keywordHref = '#tab-content-' . htmlspecialchars($keyword);
                    ?>
                        <a class="nav-link" id="<?= $keywordId ?>" data-bs-toggle="pill" href="<?= $keywordHref ?>" role="tab" aria-controls="<?= $keywordHref ?>" aria-selected="false">
                            <i class="bi bi-tag me-2"></i><?= ucfirst(htmlspecialchars($keyword)) ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Social Share and Subscribe -->
                <div class="mt-4">
                    <div class="text-start mb-3">
                        <span class="featured-label fw-bold">Share Social</span>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white social-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white social-icon"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white social-icon"><i class="bi bi-youtube"></i></a>
                    </div>
                    <br />
                    <form>
                        <input type="email" class="form-control w-100 mb-2" placeholder="Email" />
                        <button type="submit" class="btn btn-dark w-100">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-6">
                <div class="tab-content" id="articleTabsContent">
                    <!-- Full Article tab content -->
                    <div class="tab-pane fade show active" id="tab-article-content" role="tabpanel" aria-labelledby="tab-main-article">
                        <div id="articleContentContainer">
                            <?= nl2br(esc($contentOriginal)) ?>
                        </div>
                    </div>

                    <?php 
                    // For each keyword tab, show same article content (for Bootstrap tabs to work)
                    foreach ($keywords as $keyword):
                        $tabContentId = 'tab-content-' . htmlspecialchars($keyword);
                    ?>
                    <div class="tab-pane fade" id="<?= $tabContentId ?>" role="tabpanel" aria-labelledby="tab-keyword-<?= htmlspecialchars($keyword) ?>">
                        <div id="articleContentContainer-<?= htmlspecialchars($keyword) ?>">
                            <?= nl2br(esc($contentOriginal)) ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-md-3">
                <div class="text-start mb-3">
                    <span class="featured-label fw-bold">Relevant articles</span>
                </div>
                <div class="card mb-3">
                    <img src="https://dummyimage.com/600x400/000/fff" class="card-img-top" alt="Related" />
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
        // When keyword tab is clicked, highlight and scroll first occurrence of that keyword inside that tab content

        function highlightKeyword(container, keyword) {
            // Clear old highlights
            container.querySelectorAll('.highlight-yellow').forEach(el => {
                el.classList.remove('highlight-yellow');
            });

            // Find first occurrence of keyword (case insensitive) and wrap with highlight class
            const regex = new RegExp(`\\b${keyword}\\b`, 'i');
            let found = false;
            function highlightNode(node) {
                if (node.nodeType === 3) { // Text node
                    const match = node.data.match(regex);
                    if (match && !found) {
                        found = true;
                        const span = document.createElement('span');
                        span.className = 'highlight-yellow';
                        const word = match[0];
                        const before = node.data.slice(0, match.index);
                        const after = node.data.slice(match.index + word.length);
                        const afterNode = document.createTextNode(after);
                        const wordNode = document.createTextNode(word);

                        span.appendChild(wordNode);
                        const parent = node.parentNode;

                        parent.insertBefore(document.createTextNode(before), node);
                        parent.insertBefore(span, node);
                        parent.insertBefore(afterNode, node);
                        parent.removeChild(node);

                        // Scroll to highlight
                        span.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                } else if (node.nodeType === 1 && node.childNodes && !found) {
                    // Recursively check child nodes
                    for (let i = 0; i < node.childNodes.length; i++) {
                        highlightNode(node.childNodes[i]);
                        if (found) break;
                    }
                }
            }
            highlightNode(container);
        }

        document.querySelectorAll('#articleTabs a.nav-link').forEach(tabLink => {
            tabLink.addEventListener('shown.bs.tab', function (e) {
                const tabId = e.target.id; // ex: tab-keyword-innovation or tab-main-article
                if (tabId === 'tab-main-article') {
                    // Full article tab, no highlight needed, scroll top
                    const container = document.querySelector('#tab-article-content #articleContentContainer');
                    container.querySelectorAll('.highlight-yellow').forEach(el => el.classList.remove('highlight-yellow'));
                    container.scrollTop = 0;
                } else if (tabId.startsWith('tab-keyword-')) {
                    const keyword = tabId.replace('tab-keyword-', '');
                    const tabContentId = 'tab-content-' + keyword;
                    const container = document.querySelector('#' + tabContentId + ' div');
                    highlightKeyword(container, keyword);
                }
            });
        });
    </script>
</body>

</html>
