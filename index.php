<!doctype html>
<html lang="en">
<head>
    <title>Sitemap Link Puller</title>
    
    <link href="includes/styles.css" rel="stylesheet" type="text/css" />
    
    <!-- Script Files (libraries, plugins etc) -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="includes/main-scripts.js" type="text/javascript"></script>

</head>
<body>
    <div id="container">
    	
    	<h1><a href="index.php">Sitemap Link "Puller"</a></h1>
    	
		<form id="urlForm">
			<input class="txt" type="text" name="url" value="Enter your sitemap URL here (ex. http://whatever.com/sitemap.xml )" onblur="if(this.value == ''){this.value= this.defaultValue;}" onfocus="if(this.value == this.defaultValue){this.value='';}" />
			<input class="send" type="submit" name="submit" value="Submit" />
		</form>
    
    	<div id="results"></div>    
	        
    </div>
</body>
</html>
