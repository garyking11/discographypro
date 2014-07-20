<h1>Project Edit</h1>

<?php 

if ($messages) {
    
    foreach ($messages as $message) {
        echo '<p>'.$message.'</p>';
    }
    
}

?>

<form name="project-edit" method="post" action="">
    <input type="text" name="csrf_token" value="<?php echo $token; ?>" />
<input type="text" name="name" value="" />
<input type="submit" value="submit" />
</form>

