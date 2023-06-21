<?php
   @session_start();
   if(isset($_SESSION['admin']) && $_SESSION["admin"]==1)
   {
?>
<!-- Bootstrap -->
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <?php include_once("connection.php") ?>
    <script language="javascript">
        function deleteConfirm(){
            if(confirm("Are you sure to delete!")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    
        <form name="frm" method="post" action="Product_Management">
        <h1 style="color: blue;">Product Management</h1>
        <p>
        	<img src="images/add.png" alt="Thêm mới" width="16" height="16" border="0"/> <a href="?page=add_product"> Add new</a>
        </p>
        <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Product ID</strong></th>
                    <th><strong>Product Name</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Quantity</strong></th>
                    <th><strong>Category ID</strong></th>
                    <th><strong>Image</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
        include_once("connection.php");
        if(isset($_GET["function"])=="del"){
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                $sq = " select Pro_image from product WHERE Product_ID='$id'";
                $res = mysqli_query($conn, $sq);
                $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                $filePic = $row['Pro_image'];
                unlink("product-imgs/".$filePic);
                mysqli_query($conn, "DELETE FROM product WHERE Product_ID='$id'");
                echo '<meta http-equiv="refresh" content="0;URL=index.php?page=product_management"/>';
            }
        }
    ?>
                
            <?php
				$No = 1;
                $result = mysqli_query($conn, "SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name
                FROM product a, category b
                WHERE a.Cat_ID = b.Cat_ID ORDER BY ProDate DESC");

                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
			<tr>
              <td ><?php echo $No; ?></td>
              <td ><?php echo $row["Product_ID"];?></td>
              <td><?php echo $row["Product_Name"];?></td>
              <td><?php echo $row["Price"]; ?></td>
              <td ><?php echo $row["Pro_qty"]; ?></td>
              <td><?php echo $row["Cat_Name"]; ?></td>
             <td align='center' class='cotNutChucNang'>
                 <img src='product-imgs/<?php echo $row['Pro_image']?>' border='0' width="50" height="50"  /></td>
<td align='center' class='cotNutChucNang'><a href="?page=update_product&&id=<?php echo $row["Product_ID"]; ?>"><img src='images/edit.png' border='0'/></a></td>
<td align='center' class='cotNutChucNang'><a href="Product_Management.php?function=del&&id=<?php echo $row["Product_ID"]; ?>"
            onclick="return deleteConfirm()"><img src='images/delete.png' border='0' /></a></td>
             
             
            
            
            </tr>
            <?php
               $No++;
                }
			?>
			</tbody>
        
        </table>  

 </form>
   <?php
        }
        else{
            echo"<script>alert('You are not administrator')</script>";
            echo'<meta http-equiv="refresh" content="0;URL=index.php"/>';
        }
   ?>