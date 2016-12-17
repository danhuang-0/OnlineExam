 <form class="form-horizontal" action="add.php" method="post">
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