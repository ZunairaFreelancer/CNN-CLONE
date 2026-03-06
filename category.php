<?php
include 'config.php';
include 'header.php';

$category = isset($_GET['category']) ? $_GET['category'] : 'World';

// Secure Query
$stmt = $conn->prepare("SELECT * FROM news WHERE category = ? ORDER BY created_at DESC");
$stmt->bind_param("s", $category);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="section-title"><?php echo htmlspecialchars($category); ?> News</div>

<?php if ($result->num_rows > 0): ?>
<div class="news-grid">
    <?php while($row = $result->fetch_assoc()): ?>
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
<?php else: ?>
    <p>No news found in this category.</p>
<?php endif; ?>

<?php include 'footer.php'; ?>
