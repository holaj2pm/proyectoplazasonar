<?php include_once '../connect.php'; ?>
<?php include_once '../Includes/functions/functions.php'; ?>

<?php
if (isset($_POST['do']) && $_POST['do'] == "Delete") {
	$employee_id = $_POST['employee_id'];

	$stmt = $con->prepare("DELETE from employees where employee_id = ?");
	$stmt->execute(array($employee_id));
}
?>