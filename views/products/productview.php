<?php require '../../db.php';
require '../../layouts/header.php';
$sql = 'SELECT p.*,c.name from products as p
left join catagories as c 
on c.id=p.catagoryid';
$result = mysqli_query($conn, $sql);
?>
<div class="container">
    <?php if ($result->num_rows > 0) :
        while ($row = $result->fetch_assoc()):
    ?>
            <div class="row">
                <div class="card col col-lg-3 col-md-5">
                    <div class="card-header text-center">
                        <p><?= $row['productname'] ?></p>
                    </div>
                    <div class="card-body">
                        <img src="./images/<?= $row['img'] ?>" alt="" class="img img-fluid">
                    </div>
                    <div class="card-footer">
                        <ul class="list-group">
                            <li class="list-group-items text-secondary">catagory name: <span class="text-success"><?=$row['name']?></span></li>
                            <li class="list-group-items text-secondary">product name: <span class="text-success"><?=$row['productname']?></span></li>
                            <li class="list-group-items text-secondary">price: <span class="text-success"><?=$row['price']?></span></li>
                            <li  style="text-decoration: line-through;" class="text-danger list-group-items">marketprice <span><?=$row['marketprice']?></span></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <p><?=$row['descrip']?></p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <p>no records found</p>
        <?php endif; ?>
            </div>
            </body>