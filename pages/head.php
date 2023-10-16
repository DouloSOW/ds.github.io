

<meta charset="utf-8">
<title>Covid-19 au Sénégal</title>
<link rel="stylesheet" href="css/mystyle.css?v=1" type="text/css">
<script src="https://kit.fontawesome.com/036c985da2.js" crossorigin="anonymous"></script>



<!-------------------------------------------------------------------------------------->
<!--------------------------------------DEBUT MENU-------------------------------------->
    <div class="menu">
        <a href="index.php"><video autoplay="autoplay"  class="logo" >
			<source src="../img/00.mp4" type="video/mp4">
        </video></a>
        <ul class="ul">

        <li         <?php  if(basename(__FILE__) == 'posi.php') {echo "class='page_active'"; } ?>
        ><a href="../index.php"><font size="7" face="Agency FB">A</font><font face="Agency FB" size="4">ccueil</font></a> </li>
        <li><a href="#"><font size="7"face="Agency FB">S</font><font face="Agency FB" size="4">uivi des cas <i class="fa fa-sort-desc" aria-hidden="true"></i></font></a>
            <div class="sous_menu">
            <ul>
                <li><a href="dashbord.php">Dashbord</a></li>
                 <li><a href="posi.php">Positifs</a>
                    <div class="sous_menu_p">
                    <ul>
                    <li><a href="posi.php">Total positif</a></li>
                    <li><a href="com.php">Communautaires</a></li>
                    <li><a href="c.php">Contacts</a></li>
                    <li><a href="import.php">Importés</a></li>
                    </ul>
                    </div>
                 </li>
                 <li><a href="deces.php">Décès</a></li>
                 <li><a href="guer.php">Guéris</a></li>

            </ul>
            </div>
        </li>
        <li><a href="Alertes.php" ><font size="7"face="Agency FB">A</font><font face="Agency FB" size="4">lertes</font></a></li>
        <li><a href="#" ><font size="7"face="Agency FB">C</font><font face="Agency FB" size="4">ontribution <i class="fa fa-sort-desc" aria-hidden="true"></i></font></a>
            <div class="sous_menu contribute">
                <ul>
                     <li><a href="aide.php">Aides sociales</a></li>
                     <li><a href="suggest.php">Idée sur l'initiative</a></li>
                </ul>
                </div>
        </li>

        <li><a href="#" ><font size="7" face="Agency FB">N</font><font face="Agency FB" size="4">os services <i class="fa fa-sort-desc" aria-hidden="true"></i></font></a> 
            <div class="sous_menu contact">
                <ul>
                     <li><a href="exportation.php">Télécharger les données</a></li>
                     <li><a href="articles.php">Lecture d'articles</a></li>
                     <li><a href="sensibilisation.php">Sensibilisation</a></li>
                </ul>
                </div>
        </li>
        <li><a href="#" target="_blank"><font size="7" face="Agency FB">C</font><font face="Agency FB" size="4">onnexion <i class="fa fa-sort-desc" aria-hidden="true"></i></font></a> 
            <div class="sous_menu contact">
                <ul>
                     <li><a href="connection_admi.php">Adminitrateur</a></li>
                </ul>
                </div>
        </li>
        </ul>
    </div>


<!----------------------------------------------------------------------------------->
<!----------------------------------------FIN MENU----------------------------------->





