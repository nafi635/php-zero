<html>
<head>
<script>
function contacts()
{
	var tab=document.getElementById("tab");
	var row=document.createElement("tr");
	tab.appendChild(row);
	var td1=document.createElement("td");
	row.appendChild(td1);
	var td2=document.createElement("td");
	row.appendChild(td2);
	var name=document.createElement("input");
		td1.appendChild(name);
	var email=document.createElement("input");
		td2.appendChild(email);
}
</script>
</head>
<form >
<input type="button" value="add contacts" align="center" onclick="contacts(tab)">
<table id="tab" border="1" align="center" width="20%">
<tr>
	<th>name</th>
	<th>email</th>
</tr>
</table>

</html>
