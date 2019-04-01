<?PHP
include "../core/reclamationR.php";
$reclamation1R=new ReclamationR();
$listeReclamations=$reclamation1R->afficherReclamations();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ID</td>
<td>Pseudo</td>
<td>Sujet</td>
<td>Description</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeReclamations as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_client']; ?></td>
	<td><?PHP echo $row['pseudo']; ?></td>
	<td><?PHP echo $row['sujet']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><form method="POST" action="supprimerReclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_client']; ?>" name="id_client">
	</form>
	</td>
	<td><a href="modifierReclamation.php?id_client=<?PHP echo $row['id_client']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
