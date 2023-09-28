<?php
include('header.php');

?>
<div class="container-fluid table-responsive">
    <?php
    if(isset($_REQUEST['msg'])){
        echo $_REQUEST['msg'];
    }
    
    ?>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Sr.No</th>
            <th>Product name</th>
            <th> category </th>
            <th>thumbnail</th>
            <th> Website</th>
            <th> Price</th>
            <th> MRP</th>
            <th>Description </th>
            <th>Quantity</th>
            <th>Status</th>
            <th> Edit</th>
            <th>Delete </th>
            
        </tr>
        <?php
        include('config.php');
        $query="Select * from `product` ";
        $result=mysqli_query($connection,$query);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $sno?></td>
                <td><?php echo $data['product_name']?></td>
                <td><?php echo $data['category']?></td>
                <td><?php echo $data['thumbnail']?></td>
                <td><?php echo $data['website']?></td>
                <td><?php echo $data['price']?></td>
                <td><?php echo $data['MRP']?></td>
                <td><?php echo $data['description']?></td>
                <td><?php echo $data['quantity']?></td>
                 <td><?php echo $data['status']?></td>
                <td>
                    <a href="editproduct.php?id=<?php echo $data['id']?>">
                    <i class="fa fa-edit text-success"></i></a>
                </td>
                <td>
                    <a href="deleteproduct.php?id=<?php echo $data['id']?>">
                    <i class= " fa fa-trash text-danger"> </i>
                </a>

        </td>
            </tr>
            <?php
            $sno++;
        }
        
        ?>
    </table>
</div>
<?php
include('footer.php');
?>