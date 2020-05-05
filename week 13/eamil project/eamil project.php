<?php

	$errortext="";
	$successmessange="";
	if($_POST){
		if(!$_POST["email"]){
			$errortext.="The email field is required.<br>";
		}
		if(!$_POST["subject"]){
			$errortext.="The subject field is required.<br>";
		}
		if(!$_POST["content"]){
			$errortext.="The content field is required.<br>";
		}
		
		if($errortext!=""){
			$errortext='<div class="alert alert-danger" role="alert"><p>The following field(s) should be fulfilled</p>'.$errortext.'</div>';
			//return false;
		}else{		
			$successmessange='<div class="alert alert-success" role="alert">'."<b>Well done!</b>"."</div>";
			$emailTo="cbe107024@stmail.nptu.edu.tw";
			$subject=$_POST["subject"];
			$body=$_POST["content"];
			$headers="From:".$_POST["email"];
			mail($emailTo,$subject,$body,$headers);
			//return true;
		}
		//header("Refresh:0");
	}
	// $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
	// if($pageWasRefreshed){		
		// $errortext="";
		// $successmessange="";
	// }
	
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>eamil project</title>
	<style>
		#submit{
			position:relative;
			left:20px;
		}
	</style>
  </head>
  <body>
    <div id="errorblock">  <?php echo $errortext.$successmessange; ?>
	</div>
	<form method="post">
	  <div class="form-group form-check">
		<label for="email">Email address</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
		<small class="text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group form-check">
		<label for="subject">Subject</label>
		<input type="text" class="form-control" id="subject" name="subject">
	  </div>
	  <div class="form-group form-check">
	  <label id="exampleTextarea">what would you like to ask us</label>
	  <textarea class="form-control" id="content" name="content" row="3"></textarea>
	  </div>
	  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
	</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		$("form").submit(function(e){
			var errortext="";
			if($("#email").val()==""){
				errortext+="The email field is required.<br>";
			}
			if($("#subject").val()==""){
				errortext+="The subject field is required.<br>";
			}
			if($("#content").val()==""){
				errortext+="The content field is required.<br>";
			}
			if(errortext!=""){
				$("#errorblock").html('<div class="alert alert-danger" role="alert"><p>The following field(s) should be fulfilled</p>'+errortext+'</div>');
				return false;
				//好像是因為return false 這個畫面才能一值顯示
			}else{
				return true;
			}
		
		
		});
	</script>
  </body>
</html>