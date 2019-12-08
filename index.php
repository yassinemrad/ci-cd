<html>
<head>
</head>

<body>
<table border="2">
<tr>
<td>
Cin
</td>
<td>
Nom
</td>
<td>
Prenom
</td>
<td>
Age
</td>
</tr>
<?php
include('crud.php');
$crud=new crud();
$list=$crud->affiche($crud->cnx);
foreach($list as $l)
{
    ?>
    <tr>
<td>
<?php
echo $l[0];
?>
</td>
<td>
<?php
echo $l[1];
?>
</td>
<td>
<?php
echo $l[2];
?>
</td>
<td>
<?php
echo $l[3];
?>
</td>
    </tr>
    <?php
}
?>
</table>
<a href="ajouter.php">add</a>
<form action="ajouter.php">
    <input type="submit" value="add" />
</form>
</body>

</html>