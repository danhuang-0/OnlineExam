<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
  $db = new Database();
if (isset($_POST['submit'])) {
    //Grab Post Data
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    $choices = array();
    $choices[1] = $_POST['choices1'];
    $choices[2] = $_POST['choices2'];
    $choices[3] = $_POST['choices3'];
    $choices[4] = $_POST['choices4'];

    //Insert question into database
    $query = "INSERT INTO `questions`(question_number, text) VALUES('$question_number','$question_text')";
    $insert_row = $db->insert($query);
    //validate
    if ($insert_row) {
        foreach ($choices as $choice => $value) {
            if ($value != '') {
                if ($correct_choice == $choice) {
                    $is_correct = 1;
                }
                else {
                    $is_correct = 0;
                }
                
                //Choice Query
                $query2 = "INSERT INTO `choices`(question_number,is_correct,text)VALUES('$question_number','$is_correct','$value')";
                //insert row
                $insert_row = $db->insert($query2);
                if ($insert_row) {
                    continue;
                } else {
                    die();
                }

            }
        }
        $msg ="Your Question has been added Thank You!";
    }
}
   $query1 = "SELECT * FROM `questions`";
   $result = $db->select($query1);
   $total = $result->num_rows;
   $next = $total + 1;
?>
    <div>
        <ul id="myTab" class="nav nav-tabs">
            <li >
                <a href="adminchoice.php" data-toggle="tab">history</a>
            </li>
            <li><a href="logintime.php" data-toggle="tab">login time</a></li>
            <li  class="active"><a href="add.php" data-toggle="tab">add</a></li>
            <li ><a href="browse.php?n=1" data-toggle="tab">browse</a></li>
        </ul>

    </div>
    <form id="form-horizontal" action="add.php" method="post">
        <fieldset>
            <div id="legend">
                <legend class="text-center">Add Questions</legend>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">Question Number</label>
                <div class="controls">
                    <input name="question_number" value="<?php echo $next; ?>" placeholder="" class="form-control input-lg" type="number" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="text">Question Text</label>
                <div class="controls">
                    <input name="question_text" placeholder="" class="form-control input-lg" type="text" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="choice1">#Choice 1</label>
                <div class="controls">
                    <input  name="choices1" placeholder="" class="form-control input-lg" type="text" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">#Choice 2</label>
                <div class="controls">
                    <input name="choices2" placeholder="" class="form-control input-lg" type="text"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">#Choice 3</label>
                <div class="controls">
                    <input id="choices3" name="choices3" placeholder="" class="form-control input-lg" type="text"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">#Choice 4</label>
                <div class="controls">
                    <input name="choices4" placeholder="" class="form-control input-lg" type="text"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">Correct Choice Number</label>
                <div class="controls">
                    <input id="username" name="correct_choice" placeholder="" class="form-control input-lg" type="number"/>
                </div>
            </div>
            <br>
            <input type="submit" name="submit" class="btn btn-block btn-primary" value="Submit"/>
        </fieldset>
    </form>

<?php include 'includes/footer.php';?>