
<?php require_once('cnxion.php');?>
<link rel="stylesheet" href="css/mystyle.css" type="text/css">
<script src="TRAITEMENT_JS/036c985da2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/cartographie.css" />
<link rel="stylesheet" type="text/css" href="css/CoroView_style.css" />

<link rel="stylesheet" type="text/css" href="css/highslide22.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
	<link rel="stylesheet" type="text/css" href="css/highslide22.css" />
    <!-- Additional files for the Highslide popup effect -->
	<script src="https://www.highcharts.com/media/com_demo/js/highslide-full.min.js"></script>
	<script src="https://www.highcharts.com/media/com_demo/js/highslide.config.js" charset="utf-8"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>

	<?php
include("head.php");
?>
    <script type="text/javascript">
		var url0="TRAITEMENT_PHP/mapdata.php";
		var url1="TRAITEMENT_PHP/graph3.php";
		var url2="TRAITEMENT_PHP/graph4.php";
		var url3="TRAITEMENT_PHP/graph9.php";
		window.onload = function ()
		{
			function graph (url, id)
			{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById(id).innerHTML = this.responseText;
						evalueScripts(id);
					}
				};
				xmlhttp.open("POST", url, false);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send();
			}
			graph(url0, 'carte');
			graph(url1, 'resultat1');
			graph(url2, 'resultat2');
			graph(url3, 'resultat3');

		}
	
		function string2Array(string) {  
			eval("var result = " + decodeURI(string));  
			return result;  
		};
		
		function evalueScripts(targetId) {
		  var mesScripts = document.getElementById(targetId).getElementsByTagName("script");
		  for (var i=0; i<mesScripts.length; i++) {
				  eval(mesScripts[i].innerHTML);
		  }
		}
	
	</script>		   

</head>

<body>
<img class="affiche" src="Images/pos.jpg">

<?php 
$resultat=$conn-> query ("SELECT SUM(cas_positifs) AS total_cas_positifs, SUM(cas_guerri) AS total_cas_guerri, SUM(deces) AS total_deces, SUM(cas_graves) AS total_cas_graves, (SUM(cas_positifs)-SUM(cas_guerri)-SUM(deces)-1) AS total_cas_sous_traitement  FROM COVID19_PAYS");
$row=$resultat-> fetch_assoc();
$data[0]=intval($row["total_cas_positifs"]);
$data[1]=intval($row["total_cas_guerri"]); 
$data[2]=intval($row["total_deces"]); 
$data[3]=intval($row["total_cas_sous_traitement"]); 
$data[4]=intval($row["total_cas_graves"]);
?>



</form>
		<p id="titre"> </p>
		<script type="text/Javascript" src="TRAITEMENT_JS/typing.js"> </script>

<fieldset>		
<legend> Situation du jour :
				<?php 
		$resultat=$conn-> query("SELECT * FROM V_1 WHERE ANNEE = (SELECT MAX(ANNEE) FROM V_1) AND MOIS = (SELECT MAX(MOIS) FROM V_1 WHERE ANNEE = (SELECT MAX(ANNEE) FROM V_1)) AND  JOUR= (SELECT MAX(JOUR) FROM V_1 WHERE MOIS = (SELECT MAX(MOIS) FROM V_1 WHERE ANNEE = (SELECT MAX(ANNEE) FROM V_1)))");
		$row=$resultat-> fetch_assoc();
		//$data[0]=intval($row["Date"]);
		print($row["Date"]);
		?> 

		</legend>	
			<marquee behavior="scroll" direction="left"><h2>En cette date du <?php 
		print($row["Date"]);
		?>, le Sénégal compte <?php echo $data[0] ; ?> cas positifs dont <?php echo $data[3] ; ?> 
sous traitement,
<?php echo $data[1] ; ?> guéris et <?php echo $data[2] ; ?> décès.</h2></marquee> 

					<br />
					<div id="resultat" name="imge">
						<img src="TRAITEMENT_PHP/graphique1.php" class="im"/> <br /><br />
						</div>	
					
					<h2>Communiqué du jour : <?php 
					echo $row["cas_testes"]." tests réalisés" ?> </h2>
					<div id="resultat" name="imge">
						<img src="TRAITEMENT_PHP/graphique0.php" class="im"/> <br /><br />
						</div>
					
		
	
	<!-- CAMEMEBERT-->
	
	<?php
	$resultat=$conn-> query ("SELECT  SUM(cas_importes) AS total_cas_importes, SUM(cas_contact) AS total_cas_contact, SUM(trans_com) AS total_trans_com from COVID19_PAYS");
	$row=$resultat-> fetch_assoc();
	$data[0]=intval($row["total_cas_importes"]); $data[1]=intval($row["total_cas_contact"]); $data[2]=intval($row["total_trans_com"]);

?>
<script>
 var casimport = <?php echo json_encode($data[0]/($data[0]+$data[1]+$data[2])*100); ?>;
 var cascom=<?php echo json_encode($data[2]/($data[0]+$data[1]+$data[2])*100); ?>;
 var cascon=<?php echo json_encode($data[1]/($data[0]+$data[1]+$data[2])*100); ?>;

</script>
<script src="TRAITEMENT_PHP/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>



		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Mode de propagation de la covid19'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Pourcentage',
        colorByPoint: true,
        data: [{
            name: 'Importés',
            y: casimport ,
            sliced: true,
            selected: true
        }, {
            name: 'Transmission communautaire',
            y: cascom
        }, {
            name: 'Contacts',
            y: cascon
        }]
    }]
});
		</script>

							
<div  class="content" >
<h2>Commentaire</h2>
<p class="paragraphe">  
Depuis son apparition à Wuhan (en chine, fin 2019), <a href="Images/oms.pdf"> 
selon le rapport numéro 80 de l&#8217;OMS du 9 avril 2020,</a>
<span id="dots">...</span> <span id="more"> 
la Covid-19 a atteint 1,4 millions de personnes touchant ainsi plus d&#8217;une 
centaine de pays dans le monde. Le Sénégal a enregistré son premier cas le 02 
mars 2020 (cas importé) et a franchit le gap des 800 contaminés le 03 avril 2020 
(soit 1 mois après). En cette date du <?php 
		$resultat=$conn-> query("SELECT Date FROM V_1 WHERE MOIS = (SELECT MAX(MOIS) FROM V_1) AND  JOUR= (SELECT MAX(JOUR) FROM V_1 WHERE MOIS = (SELECT MAX(MOIS) FROM V_1))  ");
		$row=$resultat-> fetch_assoc();
		//$data[0]=intval($row["Date"]);
		print($row["Date"]);
		?>, le Sénégal compte <?php echo $data[0] ; ?> cas positifs dont <?php echo $data[3] ; ?> 
sous traitement,
<?php echo $data[1] ; ?> guéris et <?php echo $data[2] ; ?> décès. Les cas 
contacts sont les plus fréquents (plus de 70%) suivis des cas communautaires. Les 
premiers cas de  transmission communautaire étant enregistrés le 21 mars, ce mode de transmission gagne de plus en plus de terrain.</span>
</p>
<div class="Choix">
<button class="btncomment choicecomment" onClick="myFunction()" id="myBtn">Plus 
de détails</button>
</div>
</div>

<script type="text/javascript">
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Plus de détails"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Réduire"; 
    moreText.style.display = "inline";
  }
}
</script>
</div>
<p><img alt="" src="Images/coro1.jpg"class="im"></p>
<div id='resultat1'></div>
<div id='resultat2'></div>
<div id='resultat3'></div>
<?php
include("foot.php");
?>

