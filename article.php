<?php
include 'config.php';
include 'header.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch Article
$stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$article = $result->fetch_assoc();

// Fetch Related
$sql_related = "SELECT * FROM news WHERE id != $id ORDER BY RAND() LIMIT 4";
$result_related = $conn->query($sql_related);
?>

<?php if ($article): ?>
<div class="article-container">
    <div class="article-main">
        <h1><?php echo htmlspecialchars($article['title']); ?></h1>
        <div class="article-meta">
            By CNN Clone Staff | Updated <?php echo date("F j, Y, g:i a", strtotime($article['created_at'])); ?> | Category: <?php echo htmlspecialchars($article['category']); ?>
        </div>
        <img src="<?php echo $article['image_url']; ?>" alt="News Image" class="article-image">
        <div class="article-body">
            <?php echo nl2br(htmlspecialchars($article['content'])); ?>
        </div>
    </div>

    <div class="sidebar">
        <div class="related-sidebar">
            <h3>Related News</h3>
            <div class="side-stories">
                <?php while($row = $result_related->fetch_assoc()): ?>
                <div class="side-story-card" onclick="goToPage('article.php?id=<?php echo $row['id']; ?>')">
                    <div class="meta"><?php echo htmlspecialchars($row['category']); ?></div>
                    <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
    <h2>Article not found</h2>
    <p>The story you are looking for does not exist.</p>
<?php endif; ?>

<?php include 'footer.php'; ?>
