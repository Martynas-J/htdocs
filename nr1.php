
<script>
var data = {melinas: 100};
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "insert_data.php", true);
xhttp.setRequestHeader("Content-type", "application/json");
xhttp.send(JSON.stringify(data));
</script>