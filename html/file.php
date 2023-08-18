<?php 
header('X-XSS-Protection:0');
// include_once "function.php";
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
                $fname = '';
                $lname = '';
                $checked = '';
                if(isset($_REQUEST['cb1']) && $_REQUEST['cb1']==1){
                $checked = 'checked';
                }

                ?>

                <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['lname'])){ 
                $fname = htmlspecialchars($_REQUEST['fname']);
                } ?>
                <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
               $lname = htmlspecialchars($_REQUEST['lname']);
                } ?>
            </p>
            <p>
                First Name: <?php echo $fname; ?> <br/>
                Last Name: <?php echo $lname; ?>
            </p>
        </div>
    </div>
    <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="lname"><br/>
                    <button type='submit'>Submit</button>
                </form>
            </div>
        </div>
</div>
    
</body>
</html>