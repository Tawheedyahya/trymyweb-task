<?php
include '../../layouts/header.php';
require '../../db.php';
$r = catagory();
// if($r->num_rows>0){
//     while($row=$r->fetch_assoc()){
//         echo $row['name'];
//     }
// }

?>


    <h1>add product</h1>
    <div class="container mt-4">
        <form action="productsubmit.php" method="POST" class="p-4" enctype="multipart/form-data" id="productform">
            <div class="mb-3">
                <label for="catagory" class="form-label">Category</label>
                <select name="catagoryname" id="catagoryname" class="form-select" >
                    <option value="">Select</option>
                    <?php if ($r->num_rows > 0): ?>
                        <?php while ($row = $r->fetch_assoc()): ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <option value="">No categories</option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="productname" class="form-label">Product</label>
                <input type="text" name="productname" id="productname" class="form-control" required >
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="marketprice" class="form-label">Market Price</label>
                <input type="number" name="marketprice" id="marketprice" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">file</label>
                <input type="file" name="img" id="img" class="form-control" accept=".jpg, .jpeg, .png" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<script src="../../form.js" defer></script>
</body>
</html>