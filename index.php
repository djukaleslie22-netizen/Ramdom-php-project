<?php
     require_once __DIR__."/config.php";
     require_once __DIR__."/products.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - <?php echo STORE_NAME ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="./assets/script.js" defer></script>
    </head>

<body>
    <h1>All Store Products</h1>
    <div class="products">
        <?php if (isset($products) && is_array($products) && !empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <h2 class="title"><?php echo htmlspecialchars($product['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="description"><?php echo htmlspecialchars($product['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="cpu"><?php echo htmlspecialchars($product['cpu'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="graphics_card"><?php echo htmlspecialchars($product['graphics_card'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="price"><?php echo htmlspecialchars((string) ($product['price'] ?? ''), ENT_QUOTES, 'UTF-8'); ?> XAF</p>
                    <button class="buy_button" type="button">Buy Product</button>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products are currently available.</p>
        <?php endif; ?>
    </div>
    
</body>
</html>