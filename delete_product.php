<?php
    include "connect.php";

    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM products WHERE product_id = '$id'";
        $pdo->exec($sql);
        $sql = "SELECT * FROM products";
        $data = $pdo->query($sql);

        foreach($data as $row){
        echo    '<div class="row border-bottom m-2 p-2"> 
                <div class="col-xl-3">
                    <a href="single_product.php?product_id=' . $row['product_id'] . '"><img src="img/products/' . $row['product_img'] . '" width="200px" height="200px">
                    </a>
                </div>
                <div class="col-xl-9">
                    <div class="row d-flex justify-content-between mt-2">
                        <div class="col-xl-4">
                            <h3>' . $row['product_name'] . '</h3>
                        </div>
                        <div class="col-xl-2 text-right">
                        <button onclick="deleteProduct(' . $row['product_id'] . ')" class="btn btn-link">Verwijderen?</button>
                        </div>
                    </div>
                    
                </div>
            </div>'; 
        }
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

?>