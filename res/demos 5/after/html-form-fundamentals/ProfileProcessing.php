<?php include('./app_code/ProfileModel.php'); ?>
<?php
    $model = new ProfileModel();
    
        $model->firstName = $_POST['firstName'];
        $model->lastName = $_POST["lastName"];
        $model->email = $_POST["emailAddress"];

        $model->bio = $_POST["bio"];
        $model->occupation = implode(',',$_POST["occupation"]);
        
        $model->gender = $_POST["gender"];

        //save file
        if($_FILES['profileImage']['size'] > 0) {
            $uploaddir = './images/';
            $uploadfile = $uploaddir . basename($_FILES['profileImage']['name']);
            
            $model->imagePath = $uploadfile;
            move_uploaded_file($_FILES['profileImage']['tmp_name'], $uploadfile);
        }  

        $preferences = $_POST["prefs"];

        $model->newsletter = in_array('newsletter', $preferences);
        $model->marketing = in_array('marketing', $preferences);
        $model->partnerOffers = in_array('partners', $preferences);

        //TODO: save / process your model
        
   
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Profile processed - PHP</title>
    </head>
    <body>
        <h1>Profile information - PHP</h1>
        
      
        <span>First Name:</span> <span><?php echo $model->firstName ?></span> <br />
        <span>Last Name:</span> <span><?php echo $model->lastName ?></span> <br />
        <span>Email:</span><span> <?php echo $model->email ?></span> <br />
        
        <span>Bio:</span><span> <?php echo $model->bio ?></span> <br />
        <span>Occupation:</span><span> <?php echo $model->occupation ?></span> <br />
        <span>Gender:</span> <span><?php echo $model->gender ?></span> <br />
        <span>Image name:</span><span> <?php echo $model->imagePath ?></span> <br />
        <img src="<?php echo $model->imagePath ?>" alt="profileImage" /> <br />
        <span>Preferences:</span> <br />
            Marketing: <?php echo $model->marketing ?><br />
            Partner offers: <?php echo $model->partnerOffers ?><br />
            Newsletter: <?php echo $model->newsletter ?><br />
        
    </body>
</html>
