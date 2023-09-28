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
<th>Website Name </th>
<th>Logo </th>
<th>Status</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include('config.php');
$query="Select * from `websites`";
$result=mysqli_query($connection,$query);
$sno=1;
while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $sno?></td>
    <td><?php echo $data['website_name']?></td>
    <td><?php echo $data['logo']?></td>
   
     <td><?php echo $data['status']?></td>
    <td>
        <a href="editwebsite.php?id=<?php echo $data['id']?>">
        <i class="fa fa-edit text-success"></i></a>
    </td>
        

    <td>
    <a href="deletewebsite.php?id=<?php echo $data['id']?>">
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