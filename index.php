<!-- 
TODO LIST
- parse_str
- strip_tags
- strlen
- strrev
- nl2br
- addslashes
- stripslashes
- crc32
- md5
- sha1
- crypt
- strtotime
- strtotime to date 
-->
<?php 
include 'autoloader.php';  
if (empty($_REQUEST['charset_from'])) {
	$_REQUEST['charset_from'] = 'UTF-8';
}
if (empty($_REQUEST['charset_to'])) {
	        $_REQUEST['charset_to'] = '';
}
?>
<html>
<head>        
	<title>TOOLS</title>	
	<!-- Latest compiled and minified CSS -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body style="background-color:#E8E8E8">
<div align="center" class="row" style="max-width:100%">
<div class="col-md-2"></div>
<div class="col-md-8">	
	<h3>TOOLS</h3>	
	<hr>
	<form method="POST">
	<div class="form-group">
	<textarea onClick="this.select();" name="txt" id="txt" rows="5" cols="70" class="form-control"><?php if (isset($_REQUEST['txt'])) echo $_REQUEST['txt'] ?></textarea>
	</div>
	<hr>
	<div class="form-group form-inline">
		<h5>ACTION</h5>
	 <input id="tags" class="form-control" placeholder="Search tool" autofocus>
	 <select name="option" id="option" class="form-control large">
	 	<?php foreach($tools as $function => $label_function) { ?>
			<option value="<?php echo $function?>" <?php if (isset($_REQUEST["option"]) && $_REQUEST["option"]==$function) echo 'selected'; ?>><?php echo $label_function?></option>
	 	<?php } ?>
	</select> 	 
	</div>
	<hr>
	<div class="form-group form-inline">
		<h5>ENCODING</h5>
		<b>From:</b> 
		<select name="charset_from" id="charset" class="form-control large">		 	
			<option value="UTF-8"  <?php echo ($_REQUEST["charset_from"]=="UTF-8"?'selected':'')?>>UTF-8</option>
			<option value="ASCII" <?php echo ($_REQUEST["charset_from"]=="ASCII"?'selected':'')?>>ASCII</option>			
			<option value="ISO-8859-1" <?php echo ($_REQUEST["charset_from"]=="ISO-8859-1"?'selected':'')?>>ISO-8859-1</option>
			<option value="ISO-8859-2" <?php echo ($_REQUEST["charset_from"]=="ISO-8859-2"?'selected':'')?>>ISO-8859-2</option>
			<option value="ISO-8859-6" <?php echo ($_REQUEST["charset_from"]=="ISO-8859-6"?'selected':'')?>>ISO-8859-6</option>
			<option value="ISO-8859-15" <?php echo ($_REQUEST["charset_from"]=="ISO-8859-15"?'selected':'')?>>ISO-8859-15</option>
			<option value="Windows-1252" <?php echo ($_REQUEST["charset_from"]=="Windows-1252"?'selected':'')?>>Windows-1252</option>	
		</select>		
	<b>To:</b> 
		<select name="charset_to" id="charset" class="form-control large">
		 	<option value=""></option>
			<option value="UTF-8"  <?php echo ($_REQUEST["charset_to"]=="UTF-8"?'selected':'')?>>UTF-8</option>
			<option value="ASCII" <?php echo ($_REQUEST["charset_to"]=="ASCII"?'selected':'')?>>ASCII</option>			
			<option value="ISO-8859-1" <?php echo ($_REQUEST["charset_to"]=="ISO-8859-1"?'selected':'')?>>ISO-8859-1</option>
			<option value="ISO-8859-2" <?php echo ($_REQUEST["charset_to"]=="ISO-8859-2"?'selected':'')?>>ISO-8859-2</option>
			<option value="ISO-8859-6" <?php echo ($_REQUEST["charset_to"]=="ISO-8859-6"?'selected':'')?>>ISO-8859-6</option>
			<option value="ISO-8859-15" <?php echo ($_REQUEST["charset_to"]=="ISO-8859-15"?'selected':'')?>>ISO-8859-15</option>
			<option value="Windows-1252" <?php echo ($_REQUEST["charset_to"]=="Windows-1252"?'selected':'')?>>Windows-1252</option>	
		</select>	
	</div>
	<hr>
	<div class="form-group">
	 <input class="form-control btn-default" type="submit" value="Submit">
	</div>	
	<div align="left">
	<?php               
	if(isset($_REQUEST["option"]) && isset($_REQUEST['txt'])) {            				
		echo '<hr>';
		$txt = $_REQUEST['txt'];
		if (!empty($_REQUEST['charset_to'])) {						
			$txt = mb_convert_encoding($txt, $_REQUEST['charset_to'], $_REQUEST['charset_from']);				
		}							
		if (!isset($classes[$_REQUEST['option']])) {
			if (!empty($_REQUEST['option'])) {
				echo '<h5 style="color:red">ERROR: Class for '.$_REQUEST['option'].' doesn\'t exist</h5>';
			}
			$result = $txt;
		} else {
			$result = $classes[$_REQUEST['option']]::execute($txt);					
		}			
		echo '<div class="form-group"><textarea rows="15" onClick="this.select();" cols="150" class="form-control">';
		echo $result;
		echo '</textarea></div>';			
	}	
	?>	
	</div>	
	</form>
<hr>
<p align="center">By <a href="http://www.oscaraviles.com" target="_blank">Oscar Aviles Miramontes</a> - 2018</p>
</div>
<div class="col-md-2"></div>
</div>
  <script>
  $(function() {
    var availableTags = ["<?php echo implode('", "', array_values($tools))?>"];
	var tagsMap = {
		<?php 
		$aux = '';
		foreach ($tools as $k => $v)  {
			$aux .= '"'.$v.'" : "'.$k.'",';
		}
		echo trim($aux,',');
		?>
	};
    $( "#tags" ).autocomplete({
      source: availableTags,
      select: function( event, ui ) {		  
        $( "#option" ).val( tagsMap[ui.item.value] );
        $(this).val("");
        $("#txt").focus();
        return false;
      },
      autoFocus: true
    });
  });
  </script>
</body>
</html>
