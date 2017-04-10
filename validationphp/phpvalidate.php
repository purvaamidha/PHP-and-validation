<script src="ckeditor/ckeditor.js"></script>
<!DOCTYPE html>
<html>
  <head>
        <title>PHP FORM</title> 
	<script type="text/javascript">
        var article=0;
        //FUNCTION TO ADD TEXT BOX ELEMENT
        function addElement()
        {
            article = article + 1;
            var contentID = document.getElementById('content');
            var newTBDiv = document.createElement('div');
            newTBDiv.setAttribute('id','article'+article);
            newTBDiv.innerHTML = "Articles "+article+": <textarea id='article" + article + "'    name='" + article + "'></textarea><a href='javascript:removeElement(\"" + article + "\")'>Remove</a>";
            contentID.appendChild(newTBDiv);
        }
        //FUNCTION TO REMOVE TEXT BOX ELEMENT
        function removeElement(id)
        {

            if(article != 0)
            { 
                var contentID = document.getElementById('content');
                //alert(contentID);
                contentID.removeChild(document.getElementById('article'+id));
                article = article-1;
            }
        }
		</script>
<script type="text/javascript">		
		
		function checkForm(form)
  {
    re = /^\w+$/;
    if(!re.test(form.name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.name.focus();
      return false;
    }
	
	var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(!re.test(form.emailid.value)) {
			alert("Error: You have entered an invalid emailid address!");
			form.emailid.focus();
			return false;
    }

    if(form.pass.value != "" && form.pass.value == form.confirmpass.value) {
      if(form.pass.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pass.focus();
        return false;
      }
      if(form.pass.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pass.focus();
        return false;
      }

    alert("You entered a valid password: " + form.pass.value);
    return true;
	
		
  }
    </script>
     
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<?php include('db/config.php');?>
<?php
	if(isset($_POST['Submit']))
	{

		$name=trim($_POST["name"]);
		$emailid=trim($_POST["emailid"]);

		if($emp_name =="") {
		  $errorMsg=  "error : You did not enter a name.";
		  $code= "1" ;
		}

		elseif($emailid == ""){
		  $errorMsg=  "error : You did not enter a email.";
		  $code= "2";
		}
		  elseif(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i", $emailid)){
		  $errorMsg= 'error : You did not enter a valid email.';
		  $code= "2";
		}

		else
		{
			
		  echo "Success";
			$name=$_POST['name'];
			$emailid=$_POST['emailid'];
			$pass=$_POST['pass'];
			$confirmpass=$_POST['confirmpass'];
			$article=$_POST['article'];
			$file=$_FILES['file']['name'];
			
			$file_tmp=$_FILES['file']['tmp_name'];  //file firstly goes to a temporary location on server.

			
			$file_name=rand().$file; 
			
			$sql1=("INSERT INTO `phpass`.`form` (`id`,`name`,`emailid`,`pass`,`confirmpass`,`file`,`article`)VALUES (NULL,'$name','$emailid','$pass','$confirmpass','$file','$article')");
			$i = $con->query($sql1);
			if($i>0)
			{
				print "Record Updated Successfully"."<br/>";
				move_uploaded_file($file_tmp,'file/'.$file_name);  /* this function is used to move file to a directory*/
				echo "file uploaded successfully";
			}
			else
			{
				print "Try again";
			}
		}
	}

?>

<div class="container-fluid">
        <div class="row">
		<form method="post" action="" enctype="multipart/form-data" name="registration" onSubmit="return formValidation();" id="form">	
            <table class="table">
                <tr>
                    <td><label for="name">Username</label></td>
					<td><input type="text" name="name" required/ value="<?php if(isset($name)){echo $name;} ?>" <?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?>>
					</td>
                </tr>
				<tr>
                    <td><label for="emailid">Email</label></td>
					<td><input type="email" name="emailid" required/ value="<?php if(isset($emailid)){echo $emailid;} ?>"<?php if(isset($code) && $code == 2){echo "class=errorMsg" ;}?> ></td>
                </tr>
                <tr>
                    <td><label for="pass">Password</label></td>
					<td><input type="password" name="pass" required/ value="<?php if(isset($pass)){echo $pass;} ?>"></td>
                </tr>
                <tr>
                    <td><label for="confirmpass">Confrim password</label></td>
        <td><input type="password" name="confirmpass" required/ value="<?php if(isset($confirmpass)){echo $confirmpass;} ?>"></td>
                </tr>
				<tr>
				<td><label for="file">Image</label></td>
				<td><input type="file" name="file" /></td>
				</tr>
					<tr>
				<td><label for="">Articles</label></td>
				<td><textarea name="article" rows="5" cols="20" value="<?php if(isset($article)){echo $article;} ?>"></textarea>
				<script>
				CKEDITOR.replace('article');
				</script>
				</td>
				</tr>
				<tr id="add">
				<td>
				<input type="button" value="Add Text Area" onClick="javascript:addElement();" ></td>
				<td><div id="content"></div></td>
				</tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
					
                </tr>
            </table>
			</form>
        </div>
	
</body>
</html>