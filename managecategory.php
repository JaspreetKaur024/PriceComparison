<?php
include('header.php');
?>
<div class="conatiner-fluid table-responsive">
<?php
    if(isset($_REQUEST['msg'])){
        echo $_REQUEST['msg'];
    }
    ?>
<table class=" table table-bordered table-hover  ">

<tr>
    <th>Sno</th>
<th>Category Name </th>
<th>Thumbnail </th>
<th>Status</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include('config.php');
$query="Select * from `addcategory`";
$result=mysqli_query($connection,$query);
$sno=1;
while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $sno?></td>
    <td><?php echo $data['category_name']?></td>
    <td><?php echo $data['thumbnail']?></td>
   
     <td><?php echo $data['status']?></td>
    <td>
        <a href="editcategory.php?id=<?php echo $data['id']?>">
        <i class="fa fa-edit text-success"></i></a>
    </td>
        

    <td>
    <a href="deletecategory.php?id=<?php echo $data['id']?>">
    <i class="fa fa-trash text-danger"></i></a>
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