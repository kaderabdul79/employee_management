<?php 
require_once('../../Models/db.php');
include('master.php');
include('header.php');
$conn = getConnection();
$sql = "select * from users where accounttype='employee'";
		$result = mysqli_query($conn, $sql);
		$employeesInfo =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($employeesInfo, $row); 
		}

?>
<table class="table table-bordered">
  <thead>
    <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Department</th>
            <th>Accounttype</th>
            <th>Action</th>
        </tr>
        <?php  for($i=0; $i < count($employeesInfo); $i++){ ?>
         <tr>
  </thead>
  <tbody>
    <tr>
             <td><?php echo $employeesInfo[$i]['id'] ?></td>
             <td><?php echo $employeesInfo[$i]['username'] ?></td>
             <td><?php echo $employeesInfo[$i]['email'] ?></td>
             <td><?php echo $employeesInfo[$i]['department'] ?></td>
             <td><?php echo $employeesInfo[$i]['accounttype'] ?></td>
             <td>
                 <button type="button" class="btn btn-info"><a href="viewDetailsEmployeeProfile.php?id=<?= $employeesInfo[$i]['id']; ?>">View Profile</a></button>
                 <button type="button" class="btn btn-info"><a href="editEmployeeProfile.php?id=<?= $employeesInfo[$i]['id']; ?>">Update Profile</a></button>
                <button type="button" class="btn btn-danger"><a href="../../Controllers/deleteEmployeeAcc.php?id=<?= $employeesInfo[$i]['id']; ?>">Delete Account</a></button>
             </td>
             <td>
        </tr><?php  } ?>
  </tbody>
</table>        
                         

<?php include('footer.php'); ?>