<ul class="errors">
<?php
if (is_array($errors)) {
    foreach ($errors as $error) {
        echo '<li>'.$error.'</li>';
    }
}
?>
</ul>

<div>
    <form action="" method="post">
        <input type="text" name="csrf_token" value="<?php echo $token; ?>" />
        <input type="text" name="name" value="" />
        <input type="submit" value="Submit" />
    </form>
</div>