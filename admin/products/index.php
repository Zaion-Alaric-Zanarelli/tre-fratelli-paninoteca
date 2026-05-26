<?php

$currentPage = 'products';

require_once '../../includes/auth.php';
require_once '../../includes/header.php';
require_once '../../includes/navbar.php';
require_once '../../config/database.php';

$sql = "SELECT product_id, product_name, description, sale_price, quantity, unit, image 
        FROM products 
        ORDER BY product_name ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="container py-4">

    <section class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="fw-bold mb-1"><?= $text['products'] ?></h1>
            <p class="text-muted mb-0">
                <?= $text['products_management'] ?>
            </p>
        </div>

        <a href="create.php" class="btn tf-btn-primary">
            <?= $text['new_product'] ?>
        </a>
    </section>

    <section class="card tf-card">
        <div class="card-body">

            <?php if (empty($products)): ?>

            <div class="text-center py-5">

                <img src="../../assets/img/tabletop-menu.png" alt="Table menu"
                    class="img-fluid rounded-4 shadow-sm mb-4" style="max-width: 280px;">

                <h3 class="fw-bold mb-3">
                    <?= $text['no_products_found'] ?>
                </h3>

                <p class="text-muted mb-4">
                    <?= $text['start_products_message'] ?>
                </p>

                <a href="create.php" class="btn tf-btn-primary">
                    <?= $text['new_product'] ?>
                </a>

            </div>

            <?php else: ?>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th><?= $text['image'] ?></th>
                            <th><?= $text['product_name'] ?></th>
                            <th><?= $text['description'] ?></th>
                            <th><?= $text['price'] ?></th>
                            <th><?= $text['stock'] ?></th>
                            <th class="text-end"><?= $text['actions'] ?></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td>
                                <?php if (!empty($product['image'])): ?>
                                <img src="../../assets/uploads/products/<?= htmlspecialchars($product['image']) ?>"
                                    alt="<?= htmlspecialchars($product['product_name']) ?>" class="tf-product-thumb">
                                <?php else: ?>
                                <span class="text-muted small">
                                    <?= $text['no_image'] ?>
                                </span>
                                <?php endif; ?>
                            </td>

                            <td class="fw-semibold">
                                <?= htmlspecialchars($product['product_name']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($product['description']) ?>
                            </td>

                            <td>
                                € <?= number_format($product['sale_price'], 2, ',', '.') ?>
                            </td>

                            <td>
                                <?= number_format($product['quantity'], 3, ',', '.') ?>
                                <?= htmlspecialchars($product['unit']) ?>
                            </td>

                            <td class="text-end">
                                <a href="edit.php?id=<?= $product['product_id'] ?>"
                                    class="btn btn-sm btn-outline-secondary">
                                    <?= $text['edit'] ?>
                                </a>

                                <a href="delete.php?id=<?= $product['product_id'] ?>"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('<?= htmlspecialchars($text['confirm_delete'], ENT_QUOTES) ?>');
                                    <?= $text['delete'] ?>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php require_once '../../includes/footer.php'; ?>