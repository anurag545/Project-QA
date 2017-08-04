<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Searchbox</title>

	<style type="text/css">
	.absolute-search-hint
	{
		position: absolute;
		top:30px;
		left:10px;
		background: #fff;
		z-index:10;
		width:300px;
	}

	</style>
</head>
<body>

<form>
    <input class="form-control" placeholder="Search by Name" type="text" onKeyUp="showHint(this.value)">
</form>
<div class="absolute-search-hint" id="search-hint">
</div>

   <script src="jquery.min.js"></script>
<script type="text/javascript">
  function showHint(str) {
    if (str.length == 0) {
        document.getElementById("search-hint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("search-hint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "search_ajax.php?q=" + str, true);
        xmlhttp.send();
    }
}
  </script>	
</body>
</html>