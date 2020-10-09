<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<script src="../Tours_And_Travels/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<body>

<h2>Enter username</h2>

<form action=""> 
    <input type="text" name="customers" onchange="checkUsername(this.value)">
</form>
<br>
<div id="txtHint">msg</div>

<script>
function checkUsername(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getUsername.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>
