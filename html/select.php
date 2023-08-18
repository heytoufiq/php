<?php 
header('X-XSS-Protection:0');
include_once "select_function.php";
$fruits = ["mango", "Banana", "apple", "orange", "lemon"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Welcome</h1>
            <h2><?php echo "Hello World!"?></h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam commodi magnam laborum veritatis assumenda ex vitae accusamus eveniet libero, deserunt alias consequuntur possimus eos consequatur laudantium impedit illo. Sed, nulla!</p>
            <p>
            <?php 
                // if(isset($_POST['fruits']) && $_POST['fruits'] !=''){
                //     printf("You have selected: %s", filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
                // }
                // multiple value 
                //$sfruits = isset($_POST['fruits'])? $_POST['fruits']:array();
                //$sfruits = $_POST['fruits']?? array();
                $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                if (is_array($sfruits) && count($sfruits) > 0) {
                    echo "You have selected: " . join(", ", $sfruits);
                } else {
                    echo "No fruits selected.";
                }
            ?>
            </p>
        </div>
    </div>
    <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                <label class="fruits">Select Some Fruits</label>
                <select style="height:200px;" name="fruits[]" id="fruits" multiple>
                    <option value="" disabled selected>Select Some fruits</option>
                    <?php displayOptions($fruits, $sfruits);?>
                </select>
                <button type="submit">Submit</button> 
                </form>
            </div>
        </div>
</div>
    
</body>
</html>