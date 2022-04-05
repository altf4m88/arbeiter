<?php
    if(!defined('INDEX')) {
        die("");
    }

    include "./src/lib/config.php";
    $query = mysqli_query($con, "SELECT * FROM employees WHERE employee_id='$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Add Workers</h2>
<form method="POST" action="?page=update_employees" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['employee_id']?>">

    <div class="form-group">
        <label for="pict">Picture</label>
                <div class = "input"><input type="file" id="pict" name="pict">
                <img src="images/<?= $data['pict']?>" width="150px"></div>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
            <div class="input"><input type="text" id="name" name="name" value="<?= $data['employee_name']?>">
            </div>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <?php
            if($data['gender'] == "Male"){
                $m = "checked";
                $f = "";
            }else{
                $m = "";
                $f = "checked";
            }
        ?>
            <input type="radio" id="gender" name="gender" value="Male" <?= $m ?>> Male
            <input type="radio" id="gender" name="gender" value="Female" <?= $f ?>> Female
    </div>

    <div class="form-group">
        <label for="dob">Date of Birth</label>
            <div class="input"><input type="date" id="dob" name="dob" value="<?= $data['dob']?>"></div>
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
                        echo "<option value='$pos[workposition_id]'";
                        if ($pos['workposition_id'] == $data['workposition_id']) {
                            echo " selected";
                        }
                        echo ">$pos[workposition_name]</>";
                    }
                ?>
                </select>
            </div> 
    </div>

    <div class="form-group">
        <label for="additionalinformation">Additional Information</label>
            <div class="input"><textarea style="width: 100%" rows="5" id="additionalinformation" name="info"><?= $data['info']?></textarea></div>
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="tombol simpan" >
        <input type="reset" vakue="Cancel" class="tombol reset">
    </div>
</form>