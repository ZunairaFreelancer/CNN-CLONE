<?php
include 'config.php';
include 'header.php';

// Fetch Featured Story (Latest 1)
$sql_featured = "SELECT * FROM news ORDER BY created_at DESC LIMIT 1";
$result_featured = $conn->query($sql_featured);
$featured_news = $result_featured->fetch_assoc();

// Fetch Side Stories (Next 3)
$sql_side = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3 OFFSET 1";
$result_side = $conn->query($sql_side);

// Fetch Main Grid Stories (Next 8)
$sql_grid = "SELECT * FROM news ORDER BY created_at DESC LIMIT 8 OFFSET 4";
$result_grid = $conn->query($sql_grid);
?>

<!-- Hero Section -->
<section class="hero-section">
    <?php if ($featured_news): ?>
    <div class="main-story">
        <a href="#" onclick="goToPage('article.php?id=<?php echo $featured_news['id']; ?>'); return false;">
            <img src="<?php echo $featured_news['image_url']; ?>" alt="<?php echo htmlspecialchars($featured_news['title']); ?>">
            <div class="main-story-content">
                <h2><?php echo htmlspecialchars($featured_news['title']); ?></h2>
                <p><?php echo htmlspecialchars($featured_news['description']); ?></p>
            </div>
        </a>
    </div>
    <?php else: ?>
        <p>No news available.</p>
    <?php endif; ?>

    <div class="side-stories">
        <?php while($row = $result_side->fetch_assoc()): ?>
        <div class="side-story-card" onclick="goToPage('article.php?id=<?php echo $row['id']; ?>')">
            <div class="meta"><?php echo htmlspecialchars($row['category']); ?></div>
            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
        </div>
        <?php endwhile; ?>
    </div>
</section>

<!-- Latest News Grid -->
<div class="section-title">Latest Headers</div>
<div class="news-grid">
    <?php while($row = $result_grid->fetch_assoc()): ?>
    <div class="news-card" onclick="goToPage('article.php?id=<?php echo $row['id']; ?>')">
        <img src="<?php echo $row['image_url']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
        <div class="news-card-content">
            <span class="category-label"><?php echo htmlspecialchars($row['category']); ?></span>
            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
            <p><?php echo htmlspecialchars($row['description']); ?></p>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<?php include 'footer.php'; ?>
