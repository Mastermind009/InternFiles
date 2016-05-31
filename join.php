<?php
if($_POST)
{
$host="127.0.0.1";
$user="root";
$pass="";
$db="us2";
$conn = mysql_connect($host,$user,$pass);
            
if(! $conn ) 
{
 die('Could not connect: ' . mysql_error());
}
mysql_select_db($db);
session_start();
if(isset($_POST['fname']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$mobno=$_POST['mobno'];
$company=$_POST['company'];

$query = "INSERT INTO contactme". "(firstname, lastname, birthday, company, email, mobno) ". "VALUES('$fname','$lname','$birthday','$company','$email','$mobno');";
$retval = mysql_query( $query, $conn );
            
if(! $retval ) {
 die('Could not enter data: ' . mysql_error());
}
else{
$query = "SELECT * FROM contactme"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td>";  //$row['index'] the index here is a field name
echo '<td><input name="edit" type="button" value="Edit" onclick="editme"></td>';
echo '<td><input name="delete" type="button" value="Delete" width="2em" onclick="delete()"</td></tr>';
}

echo "</table>"; //Close the table in HTML

mysql_close();
}
}
}
else 
{ }

?>
<?php
 function editme(){
              echo "Hello World";
          }
?>
<script type="text/javascript">
function edit()
	{
		
	$.ajax({
		alert("hey");
	type: "POST",
	url: "calledit.php",
	data: dataString,
	success: function(data){
	

}
});
return false;
	}
	</script>
<script type="text/javascript">
function delete(){
	var dataString = 'deleted=1';
	$.ajax({
		alert("hey");
	type: "POST",
	url: "calldelete.php",
	data: dataString,
	success: function(data){
		alert("hey");
	$('.savedcontacts').html(data);
	<?php
	echo "YO"
	?>
	
}
});

	}
</script>