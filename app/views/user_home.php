
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
</head>
<body>
    <h1>Welcome to Your Homepage</h1>

    <h2>Products</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <strong><?= $product['prodname']; ?></strong>
                - <?= $product['description']; ?>
                - Price: <?= $product['price']; ?>
                - Stocks: <?= $product['stocks']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>