<?php
$target="uploads/".basename($_FILES['files']['name']);
if(isset($_REQUEST['submit'])){
	if(move_uploaded_file($_FILES['files']['tmp_name'],$target)){
		echo "uploaded";
	}
	else{
		echo "failed";
	}
}