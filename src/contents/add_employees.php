<?php
    if(!defined('INDEX')) {
        die("");
    }
?>

<h2 class="judul">Add Workers</h2>
<form method="POST" action="?page=insert_employees" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pict">Picture</label>
                <div class = "input"><input type="file" id="pict" name="pict">
                </div>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
            <div class="input"><input type="text" id="name" name="name">
            </div>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
            <input type="radio" id="gender" name="gender" value="Male"> Male
            <input type="radio" id="gender" name="gender" value="Female"> Female
    </div>

    <div class="form-group">
        <label for="dob">Date of Birth</label>
            <div class="input"><input type="date" id="dob" name="dob"></div>
    </div>

    <div class="form-group">
        <label for="workposition">Position</label>
            <div class="input">
                <select id="workposition" name="workposition">
                    <option value="">- Select Position -</option>
                <?php
                    include "./src/lib/config.php";
                    $workposition_query= mysqli_query($con, "SELECT * FROM work_position");
                    while ($pos = mysqli_fetch_array($workposition_query)){
                        echo "<option value='$pos[workposition_id]'> $pos[workposition_name]</option>";
                    }

                ?>
                </select>
            </div> 
    </div>

    <div class="form-group">
        <label for="additionalinformation">Additional Information</label>
            <div class="input"><textarea style="width: 100%" rows="5" id="additionalinformation" name="info"></textarea></div>
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="tombol simpan" >
        <input type="reset" vakue="Cancel" class="tombol reset">
    </div>
</form>
