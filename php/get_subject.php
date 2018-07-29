<?php
require("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["sem_id"])) {
	$query ="SELECT Code,Subject_name FROM syllabus WHERE Semester = '" . $_POST["sem_id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select Subject</option>
<?php
	foreach($results as $syllabus) {
?>
	<option value="<?php echo $syllabus["Code"]; ?>"><?php echo $syllabus["Code"]." - ".$syllabus["Subject_name"]; ?></option>
<?php
	}
}	
?>