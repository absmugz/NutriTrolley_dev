
            <html>
                <head>
                <link type="text/css" rel="stylesheet" href="assets/css/generator/style.css">
                
                </head>
                <body>
                <?php 
                // Show errors
                if(isset($error)) {
                    switch($error) {
                        case "validation" :
                            echo validation_errors();
                        break;
                        case "save" :
                            echo "<p class='error'>Save error !</p>";
                        break;
                    }
                }
                if(isset($errorfile)) {
                    foreach($errorfile as $name => $value) {
                        echo "<p class='error'>File \"".$name."\" upload error : ".$value."</p>";
                    }
                }
                ?>
                <form action="http://localhost:8888/nutritrolley_dev/myform" method="post" enctype="multipart/form-data">
                
                        <label for="thumbnail">thumbnail</label>
                        <input type="file"  name="thumbnail" id="thumbnail" />
                        <label for="image_1">Main image 1</label>
                        <input type="file"  name="image_1" id="image_1" />
                        <label for="image_2">Main image 2</label>
                        <input type="file"  name="image_2" id="image_2" />
                        <label for="image_3">Main image 3</label>
                        <input type="file"  name="image_3" id="image_3" />
                        <label for="cooking_time">Cooking time</label>
                        <input type="text" name="cooking_time" id="cooking_time" value="<?php echo set_value("cooking_time", ""); ?>"/>
                        <label for="Ready_to_eat_in">Ready to eat in</label>
                        <input type="text" name="Ready_to_eat_in" id="Ready_to_eat_in" value="<?php echo set_value("Ready_to_eat_in", ""); ?>"/>
                        <label for="difficulty_level">Difficulty level</label>
                        <select name="difficulty_level">
                            <option value="Novice" <?php echo set_select("difficulty_level", "Novice"); ?>>Novice</option>
                            <option value="Amateur" <?php echo set_select("difficulty_level", "Amateur"); ?>>Amateur</option>
                            <option value="Expert" <?php echo set_select("difficulty_level", "Expert"); ?>>Expert</option>
                        </select>
                        <label for="ingredients">Ingredients</label>
                        <textarea name="ingredients" id="ingredients"><?php echo set_value("ingredients", ""); ?></textarea>
                        <label for="ingredients_excluded">Ingredients excluded</label>
                        <textarea name="ingredients_excluded" id="ingredients_excluded"><?php echo set_value("ingredients_excluded", ""); ?></textarea>
                        <label for="Directions">directions</label>
                        <textarea name="Directions" id="Directions"><?php echo set_value("Directions", ""); ?></textarea>
                        <label for="chefs_notes">Chefs notes</label>
                        <textarea name="chefs_notes" id="chefs_notes"><?php echo set_value("chefs_notes", ""); ?></textarea>
                        <input type="submit" name="submit" id="submit" value="<?php echo set_value("submit", "submit"); ?>"/>
                </form>
                </body>
            </html>