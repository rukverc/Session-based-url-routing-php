
<head>	
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
</head>
<html>	
<body>
<h1>Not Found	</h1>

<br>	
The requested URL /redir.php was not found on this server.
<br>	
Apache/2.5.7 (Ubuntu) Server
		<?php 
		
		
		session_start();

	if (isset($_POST['html_class'])) {
		$_SESSION['message']['class'] = $_POST['html_class'];
		$_SESSION['message']['text'] = $_POST['text'];

		}

		//echo $_SESSION['url']['included'];
			$_SESSION['url'] = array();
			$_SESSION['class'] = array();
			$_SESSION['switcher'] = array();




		if ($_POST['moduled'] == true) {
			
			
			
				$_SESSION['switcher']['classed'] = false;
				$_SESSION['switcher']['moduled'] = true;
			
			if (isset($_POST['included'])) {
				$_SESSION['url']['included'] = $_POST['included'];
			}
			if (isset($_POST['id'])) {
				$_SESSION['url']['id'] = $_POST['id'];
			}
			if (isset($_POST['action'])) {
				$_SESSION['url']['action'] = $_POST['action'];
			}

		}

		if ($_POST['classed'] == true) {
			
			

			
				$_SESSION['switcher']['classed'] = true;
				$_SESSION['switcher']['moduled'] = false;
			
			if (isset($_POST['inc_class'])) {
				$_SESSION['class']['class'] = $_POST['inc_class'];
			}
			if (isset($_POST['variable'])) {
				$_SESSION['class']['variable'] = $_POST['variable'];
			}
			if (isset($_POST['inc_function'])) {
				$_SESSION['class']['function'] = $_POST['inc_function'];
			}

		}
		
	
		//echo "success";
		//echo "	<br>";
		//echo $_SESSION['url']['module'];
		//print_r($_POST);

  
 ?>
</body>
</html>
