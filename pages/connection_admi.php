<?php session_start();
	include("head.php");
	include("TRAITEMENT_PHP/connexion.php");
	function cleanCaracteresSpeciaux ($chaine)
		{
			setlocale(LC_ALL, 'fr_FR');
		
			$chaine = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $chaine);
		
			$chaine = preg_replace('#[^0-9a-z]+#i', '-', $chaine);
		
			while(strpos($chaine, '--') !== false)
			{
				$chaine = str_replace('--', '-', $chaine);
			}
		
			$chaine = trim($chaine, '-');
		
			return $chaine;
		}
	if(isset($_POST['connexion']))
	{
		$login=cleanCaracteresSpeciaux(trim($_POST['login']));
		$motdepasse=cleanCaracteresSpeciaux(trim($_POST['password']));
		if($login!="Doulo" or $motdepasse!="SOW" )
		{
			echo "<script type='text/javascript'>alert(\"Identifiant incorrect\");</script> ";
		}
		else
		{
			$_SESSION['login']=$login;
			$_SESSION['motdepasse']=$motdepasse;
			header('Location: supervision.php');
		}
		
	} 
?>
<div class="part1">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-image:url(Images/logo1.jpg)">
		<tr >
			<td width="550" height="58" nowrap="nowrap" id="logo" valign="bottom" style="font-size:36px; color:#DF3F3F; font-weight:bold">
				COVID-19
			<td>
    		<td width="225" colspan="2" rowspan="2" nowrap="nowrap">
				<img src="Images/logo1.jpg" alt="Header image"  height="140" border="0" />
			</td>
			<td  height="58" nowrap="nowrap" id="logo" valign="bottom">
				<form  id="formulaire" action=# method="post" >
					<label for="login" style="font-size:15px; color:red; font-weight:bold">Login</label>
					<input type="text" id="login" name="login" style="font-size:20px;font-weight:bold">
					<label for="password"  style="font-size:15px; color:red; font-weight:bold">Mot de passe</label>
					<input type="password" id="password" name="password" style="font-size:20px; font-weight:bold">
					<input type="submit" id="connexion" name="connexion" value="connexion" style="font-size:20px;  font-weight:bold">
				</form>
			<td>
		</tr>
		<tr>
			<td height="57" nowrap="nowrap" id="tagline" valign="top" style="color:#DF3F3F">And Xeex Coronavirus</td>
		</tr>
	</table>
	<br /><br />
	</div>	

