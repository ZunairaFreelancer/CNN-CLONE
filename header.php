<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNN Clone - Breaking News</title>
    <style>
        /* RESET & BASE */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f5f5f5; color: #333; line-height: 1.6; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* HEADER */
        header { background-color: #CC0000; color: white; padding: 0 5%; position: sticky; top: 0; z-index: 1000; box-shadow: 0 2px 5px rgba(0,0,0,0.2); }
        .nav-container { display: flex; justify-content: space-between; align-items: center; height: 60px; max-width: 1200px; margin: 0 auto; }
        .logo { font-size: 32px; font-weight: 900; letter-spacing: -2px; margin-right: 40px; cursor: pointer; }
        .logo span { background: white; color: #CC0000; padding: 0 4px; border-radius: 4px; }
        
        nav ul { display: flex; gap: 20px; }
        nav a { font-weight: 700; font-size: 16px; transition: opacity 0.3s; cursor: pointer; }
        nav a:hover { opacity: 0.8; text-decoration: underline; }

        /* GRID & LAYOUT */
        .container { max-width: 1200px; margin: 20px auto; padding: 0 15px; }

        /* FEATURED SECTION (Homepage) */
        .hero-section { display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin-bottom: 40px; }
        .main-story { background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); position: relative; }
        .main-story img { width: 100%; height: 400px; object-fit: cover; }
        .main-story-content { padding: 20px; }
        .main-story h2 { font-size: 32px; margin-bottom: 10px; font-weight: 800; }
        .main-story p { font-size: 18px; color: #555; }
        
        .side-stories { display: flex; flex-direction: column; gap: 15px; }
        .side-story-card { background: white; padding: 15px; border-radius: 6px; box-shadow: 0 1px 4px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.2s; }
        .side-story-card:hover { transform: translateY(-3px); }
        .side-story-card h3 { font-size: 18px; margin-bottom: 5px; }
        .side-story-card .meta { font-size: 12px; color: #888; text-transform: uppercase; font-weight: bold; }

        /* CATEGORY GRID */
        .section-title { font-size: 24px; border-bottom: 2px solid #CC0000; display: inline-block; margin-bottom: 20px; padding-bottom: 5px; text-transform: uppercase; }
        .news-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 25px; }
        .news-card { background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.05); transition: box-shadow 0.3s; cursor: pointer; }
        .news-card:hover { box-shadow: 0 5px 15px rgba(0,0,0,0.15); }
        .news-card img { width: 100%; height: 180px; object-fit: cover; }
        .news-card-content { padding: 15px; }
        .news-card-content .category-label { color: #CC0000; font-weight: bold; font-size: 12px; text-transform: uppercase; margin-bottom: 5px; display: block; }
        .news-card-content h3 { font-size: 18px; line-height: 1.4; margin-bottom: 10px; }
        .news-card-content p { font-size: 14px; color: #666; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }

        /* ARTICLE PAGE */
        .article-container { display: grid; grid-template-columns: 2fr 1fr; gap: 40px; background: white; padding: 40px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .article-main h1 { font-size: 42px; margin-bottom: 10px; line-height: 1.2; }
        .article-meta { color: #777; margin-bottom: 20px; font-style: italic; border-bottom: 1px solid #eee; padding-bottom: 20px; }
        .article-image { width: 100%; height: auto; max-height: 500px; object-fit: cover; border-radius: 4px; margin-bottom: 30px; }
        .article-body { font-size: 18px; line-height: 1.8; color: #222; }
        .related-sidebar h3 { border-bottom: 2px solid #333; padding-bottom: 10px; margin-bottom: 20px; }

        /* FOOTER */
        footer { background: #222; color: #ccc; padding: 40px 0; margin-top: 60px; text-align: center; }
        footer p { font-size: 14px; }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero-section { grid-template-columns: 1fr; }
            .article-container { grid-template-columns: 1fr; }
            .nav-container { flex-direction: column; height: auto; padding: 10px; }
            nav ul { flex-wrap: wrap; justify-content: center; margin-top: 10px; }
        }
    </style>
    <script>
        // JS Redirection Function
        function goToPage(url) {
            window.location.href = url;
        }
    </script>
</head>
<body>

<header>
    <div class="nav-container">
        <div class="logo" onclick="goToPage('index.php')"><span>CNN</span> Clone</div>
        <nav>
            <ul>
                <li><a href="#" onclick="goToPage('index.php'); return false;">Home</a></li>
                <li><a href="#" onclick="goToPage('category.php?category=World'); return false;">World</a></li>
                <li><a href="#" onclick="goToPage('category.php?category=Sports'); return false;">Sports</a></li>
                <li><a href="#" onclick="goToPage('category.php?category=Technology'); return false;">Tech</a></li>
                <li><a href="#" onclick="goToPage('category.php?category=Entertainment'); return false;">Entertainment</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container">
