<?php
    if(!defined('INDEX')) { die(""); }
?>

<h2>New Work Position</h2>
<form action="?page=insert_workposition" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <div class="input">
            <input type="text" name="name" id="name">
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-primary">
        <input type="reset" value="Cancel" class="btn warning">
    </div>
</form>