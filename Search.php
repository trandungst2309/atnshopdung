<div class="container">
        <div class="row d-flex justify-content-center align-items-center p-3">

        <div class="col-md-8">

        <div class="search">
       
    </div>
</div>
</div>
        <h2>Result</h2>
        <div class="row">
            <?php
                include_once("connection.php");
                
                $nameP = $_POST['txtSearch'];
         
                $sql = "SELECT * FROM product WHERE Product_Name LIKE ?";
                $stmt = $conn->prepare($sql); 
                $n = "%$nameP%";
                $stmt->bind_param("s", $n);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($r = $result->fetch_assoc()) {
                   
            ?>
             <div class="col-md-4 pb-3">
                    <div class="card">
                        <img
                        src="./img/<?=$r['Pro_image']?>"
                        class="card-img-top"
                        alt="Product1>" style="margin: auto;
                        width: 300px;"
                        />
                        <div class="card-body">
                        <a href="?page=details&&id=<?=$r['Product_ID']?>" class="text-decoration-none"><h5 class="card-title">
                            <?=$r['Product_Name']?></h5></a>
                        <h6 class="card-subtitle mb-2 text-muted"><span>&#8363;</span> <?=$r['Price']?></h6>
                        </div>
                    </div>
            </div>
        <?php
            //  echo '<meta http-equiv="refresh" content="0;URL=index.php?page=Search.php"/>'; 
        }    
        ?>
        </div>
        </div>