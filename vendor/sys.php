<?php 
session_start();
if (!$_SESSION['system']) {
	header('Location: ../login.php');
}
require_once "db.php";
require_once "adf.php";
 $mod = $_POST['mod'];

 if ($mod == "add_cat") {
 	$title = $_POST['form1'];
 	$desc = $_POST['form2'];
 	$att = $_POST['form3'];

 	$sql = "INSERT INTO `category`(`id`, `name`, `desc`, `att`) VALUES (NULL,'$title','$desc','$att');";

 	mysqli_query($connect, $sql);
 	$_SESSION['msg'] = '<script type="text/javascript">alert("Успешно добавлено!");</script>';
            header('Location: ../index.php');
 }
 elseif ($mod == "edit_cat") {
 	$title = $_POST['form1'];
 	$desc = $_POST['form2'];
 	$att = $_POST['form3'];
 	$id = $_POST['id'];

 	$sql = "UPDATE `category` SET `name` = '$title', `desc` = '$desc', `att` = '$att' WHERE `category`.`id` = $id";

 	mysqli_query($connect, $sql);
 	$_SESSION['msg'] = '<script type="text/javascript">alert("Успешно сохранено!");</script>';
            header('Location: ../index.php');
 }
  elseif ($mod == "add_menu") {
 	$title = $_POST['form1'];
 	$price = $_POST['form2'];
 	$ing = $_POST['form3'];
 	$cat = $_POST['form4'];
 	$stat = $_POST['form5'];
 	if ($stat == "checked") {
 		$st = 0;
 	}
 	else{
 		$st = 1;
 	}
 	$ca = get_data_db($connect, "category", "id", "name", $cat);

 	$sql = "INSERT INTO `list`(`id`, `name`, `price`, `ing`, `stat`, `cat`) VALUES (NULL,'$title','$price','$ing','$st','$ca');";
	mysqli_query($connect, $sql);
	$_SESSION['msg'] = '<script type="text/javascript">alert("Успешно добавлено!");</script>';
    header('Location: ../table-menu.php');
}
  elseif ($mod == "edit_menu") {
  $title = $_POST['form1'];
  $price = $_POST['form2'];
  $ing = $_POST['form3'];
  $stat = $_POST['form5'];
  $id = $_POST['id'];
  if ($stat == "checked") {
    $st = 0;
  }
  else{
    $st = 1;
  }

  $sql = "UPDATE `list` SET `name` = '$title', `price` = '$price', `stat` = '$st', `ing` = '$ing' WHERE `list`.`id` = $id";

  mysqli_query($connect, $sql);
  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно сохранено!");</script>';
            header('Location: ../table-menu.php');
}
  elseif ($mod == "settings") {
    $org = $_POST['org'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $link = $_POST['link'];
    $jcs = $_POST['jcs'];
    $meta = $_POST['meta'];
    $aut = $_POST['aut'];

    if ($_POST['follow'] == "on") {
        $sql = "UPDATE `data` SET `data` = '1' WHERE `name` = 'follow'";
        mysqli_query($connect, $sql);
    }
    else{
        $sql = "UPDATE `data` SET `data` = '0' WHERE `name` = 'follow'";
        mysqli_query($connect, $sql);
    }

    if ($_POST['res'] == "on") {
       $sql = "UPDATE `data` SET `data` = '1' WHERE `name` = 'res'";
        mysqli_query($connect, $sql);
    }
    else{
        $sql = "UPDATE `data` SET `data` = '0' WHERE `name` = 'res'";
        mysqli_query($connect, $sql);
    }
    $lang = $_POST['radio'];


  $sql = "UPDATE `data` SET `data` = '$org' WHERE `name` = 'org'";
  mysqli_query($connect, $sql);

  $sql = "UPDATE `data` SET `data` = '$address' WHERE `name` = 'address'";
  mysqli_query($connect, $sql);

  $sql = "UPDATE `data` SET `data` = '$contact' WHERE `name` = 'contacs'";
  mysqli_query($connect, $sql);

  $sql = "UPDATE `data` SET `data` = '$link' WHERE `name` = 'links'";
  mysqli_query($connect, $sql);

  $sql = "UPDATE `data` SET `data` = '$jcs' WHERE `name` = 'jcs'";
  mysqli_query($connect, $sql);

  $sql = "UPDATE `data` SET `data` = '$meta' WHERE `name` = 'seo'";
  mysqli_query($connect, $sql);

  $sql = "UPDATE `data` SET `data` = '$lang' WHERE `name` = 'lang'";
  mysqli_query($connect, $sql);

  $sql = "UPDATE `data` SET `data` = '$aut' WHERE `name` = 'about_us_text'";
  mysqli_query($connect, $sql);

  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно сохранено!");</script>';
            header('Location: ../settings.php');
}
  elseif ($_GET['mod'] == "delc") {
    $id = $_GET['id'];
  $sql = "DELETE FROM `category` WHERE `category`.`id` = $id";

  mysqli_query($connect, $sql);
  $sql = "DELETE FROM `list` WHERE `list`.`cat` = $id";

  mysqli_query($connect, $sql);


  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно удалено!");</script>';
            header('Location: ../index.php');    
  }
  elseif ($_GET['mod'] == "delf") {
    $id = $_GET['id'];
  $sql = "DELETE FROM `followers` WHERE `followers`.`id` = $id";

  mysqli_query($connect, $sql);

  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно удалено!");</script>';
            header('Location: ../followers.php');    
  }
  elseif ($_GET['mod'] == "delr") {
    $id = $_GET['id'];
  $sql = "DELETE FROM `reservation` WHERE `reservation`.`id` = $id";

  mysqli_query($connect, $sql);

  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно удалено!");</script>';
            header('Location: ../res.php');    
  }
  elseif ($_GET['mod'] == "clearm") {
  $sql = "TRUNCATE ` message `";
  mysqli_query($connect, $sql);
  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно удалено!");</script>';
            header('Location: ../res.php');    
  }
  elseif ($_GET['mod'] == "delmes") {
    $id = $_GET['id'];
  $sql = "DELETE FROM `message` WHERE `message`.`id` = $id";

  mysqli_query($connect, $sql);

  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно удалено!");</script>';
            header('Location: ../msg.php');    
  }
  elseif ($_GET['mod'] == "delm") {
    $id = $_GET['id'];
  $sql = "DELETE FROM `list` WHERE `list`.`id` = $id";

  mysqli_query($connect, $sql);
  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно удалено!");</script>';
            header('Location: ../table-menu.php');    
  }
  elseif ($mod == "msg") {
  $name = $_POST['name'];
  $email = $_POST['mail'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];
  $date = date("Y-m-d H:i:s"); 

  $sql = "INSERT INTO `message`(`id`, `name`, `email`, `phone`, `msg`, `date`) VALUES (NULL,'$name','$email','$phone','$msg','$date')";
  mysqli_query($connect, $sql);
  $_SESSION['msg'] = '<script type="text/javascript">alert("Успешно отправлено!");</script>';
    header('Location: ../../contact.php');
}
  elseif ($mod == "follower") {
  $input = $_POST['follower'];

  $sql = "INSERT INTO `followers`(`id`, `input`) VALUES (NULL,'$input')";
  mysqli_query($connect, $sql);
  $_SESSION['msg'] = '<script type="text/javascript">alert("Вы подписаны!");</script>';
    header('Location: ../../about.php');
}
  elseif ($mod == "res") {
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $person = $_POST['person'];


  $sql = "INSERT INTO `reservation`(`id`, `name`, `email`, `phone`, `date`, `time`, `persons`) VALUES (NULL,'$name','$mail','$phone','$date','$time','$person')";
  mysqli_query($connect, $sql);
  $_SESSION['msg'] = '<script type="text/javascript">alert("Мы свами свяжимся!");</script>';
    header('Location: ../../about.php');
}  
 ?>