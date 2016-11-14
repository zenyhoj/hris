<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
    $empno = $_POST['emp_no'];
    $fname = $_POST['first_name'];
	  $midname = $_POST['middle_name'];
    $lname = $_POST['last_name'];
	if($crud->update($id,$empno,$fname,$lname,$midname))
	{
		$msg = "<div class='alert alert-info'>
				<strong>SUCCESS!</strong> Record was updated successfully <a href='index.php'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>SORRY!</strong> ERROR while updating record !
				</div>";
	}
}
if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
}
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 
     <form method='post'>
 
    <table class='table table-bordered'>
 
            <tr>
              <td>Employee No.:</td>
              <td><input type='text' name='emp_no' class='form-control' value="<?php echo $emp_no; ?>" required></td>
            </tr>
           <tr>
              <td>Firstname</td>
              <td><input type='text' name='first_name' class='form-control' value="<?php echo $emp_firstname; ?>" required></td>
           </tr>
          <tr>
              <td>Middllename</td>
              <td><input type='text' name='middle_name' class='form-control' value="<?php echo $emp_middlename; ?>" required></td>
          </tr>
          <tr>
              <td>Last Name</td>
              <td><input type='text' name='last_name' class='form-control' value="<?php echo $emp_surname; ?>" required></td>
          </tr>
          <tr>
            <td colspan="2">
              <button type="submit" class="btn btn-primary" name="btn-update">
    			     <span class="glyphicon glyphicon-edit"></span>  Update this Record
				      </button>
              <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
          </tr>
 
    </table>
</form>
</div>
<?php include_once 'footer.php'; ?>