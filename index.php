<html>
<head>
	<title> Chat Box </title>
	<meta name="viewport" content="user-scalable=no width=device-width">
	<script>
		function dynamicChat() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
		
		setInterval(function() {
			dynamicChat();
		}, 1000);
	</script>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid row">
	<div class="col-sm-3 hidden-xs"></div>
	<div class="chat-area col-xs-12 col-sm-6">
		<div id="chat"></div>
		<div class`="message-area" style="position: fixed; bottom: 20px; width: inherit">
		<form method="post" action = "index.php">
		<input type="text" class="btn-block" name="name"></input>
		<textarea name="message" class="btn-block" placeholder="type message"></textarea>
        <!-- <a name="submit" class="form-control btn btn-block btn-primary">Send</a> -->
		<input class="btn btn-block btn-primary" type="submit" name="submit" value="Send"></input>
		</form>
		</div>
	</div>
	<div class="col-sm-3 hidden-xs"></div>
</div>
</body>
</html>