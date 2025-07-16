<?php
include './controls/fetchProduct.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php include './components/header.php'; ?>

    <section id="fetch_product" class="py-5">
        <div class="container">
            <h2 class="mb-4">แสดงข้อมูลสินค้า</h2>
            <?php if ($stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="./assets/imgs/<?= htmlspecialchars($row['image']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row['name']); ?>" style="object-fit:cover; height:200px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= htmlspecialchars($row['name']); ?></h5>
                                        <p class="card-text"><?= htmlspecialchars($row['description']); ?></p>
                                        <p class="card-text"><strong>ราคา:</strong> <?= htmlspecialchars($row['price']); ?> บาท</p>
                                        <p class="card-text"><strong>เพิ่มเมื่อ:</strong> <?= htmlspecialchars($row['created_at']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php else: ?>
                <p class="text-center">ไม่มีข้อมูลสินค้า</p>
            <?php endif ?>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
</body>

</html>