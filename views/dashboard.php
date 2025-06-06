<?php
session_start();
require '../db.php';
$sql = 'SELECT * from catagories';
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql);
?>
<?php include '../layouts/header.php'; ?>

<?php if (isset($_SESSION['msg'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION['msg'] ?>
        <?php unset($_SESSION['msg']) ?>
    </div>
<?php endif; ?>

<div class="container py-4">
    <h1 class="text-center mb-4">DASHBOARD</h1>

    <div class="row g-4">
        <!-- Show Categories -->
        <div class="col-12 col-md-4">
            <select class="form-select">
                <option value="">Category types</option>
                <?php if ($result->num_rows > 0): while ($row = $result->fetch_assoc()): ?>
                    <option value=""><?= $row['name'] ?></option>
                <?php endwhile; else: ?>
                    <option value="">No categories</option>
                <?php endif; ?>
            </select>
        </div>

        <!-- Add Category -->
        <div class="col-12 col-md-4">
            <button class="btn btn-success w-100" id="addcatagory">Add Category</button>
            <form action="addcatagory.php" id="addcatagoryform" method="post" style="display:none;" class="mt-2">
                <div class="d-flex">
                    <input type="text" name="catagoryname" class="form-control me-2" placeholder="Enter your category">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <!-- Delete Category -->
        <div class="col-12 col-md-4">
            <button class="btn btn-danger w-100" id="deletecatagory">Delete Category</button>
            <form action="deletecatagory.php" id="deletecatagoryform" method="post" style="display:none;" class="mt-2">
                <div class="d-flex">
                    <select name="catagoryname" class="form-select me-2" required>
                        <option value="">Select</option>
                        <?php if ($result1->num_rows > 0): while ($row = $result1->fetch_assoc()): ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php endwhile; else: ?>
                            <option value="">No categories</option>
                        <?php endif; ?>
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Product Buttons -->
    <div class="row mt-4">
        <div class="col-6 col-md-3 mx-auto mb-2">
            <a href="./products/productform.php" class="btn btn-primary w-100">Add Product</a>
        </div>
        <div class="col-6 col-md-3 mx-auto mb-2">
            <a href="./products/productview.php" class="btn btn-success w-100">View Product</a>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../common.js"></script>
</body>
</html>
