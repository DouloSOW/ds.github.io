<?php // content="text/plain; charset=utf-8"
// $Id: canvasex01.php,v 1.3 2002/10/23 08:17:23 aditus Exp $
include("connexion.php");
require_once ('../GRAPH/jpgraph-4.2.11/src/jpgraph.php');
require_once ('../GRAPH/jpgraph-4.2.11/src/jpgraph_canvas.php');
require_once ('../GRAPH/jpgraph-4.2.11/src/jpgraph_canvtools.php');

$width = 1000;
$height = 100;
$g = new CanvasGraph($width,$height);
$scale = new CanvasScale($g);
$scale->Set(0,28,1,100);
$g->SetMargin(5,6,5,6);
$g->SetColor('white');
$g->SetMarginColor("teal");
$g->InitFrame();

$t = new CanvasRectangleText();
$t->SetFont(FF_ARIAL,FS_NORMAL,16);
$t->SetFillColor('lemonchiffon2');
$t->SetFontColor('black');

		$resultat=$conn-> query("SELECT * FROM V_1 WHERE MOIS = (SELECT MAX(MOIS) FROM V_1 WHERE ANNEE = (SELECT MAX(ANNEE) FROM V_1)) AND  JOUR= (SELECT MAX(JOUR) FROM V_1 WHERE MOIS = (SELECT MAX(MOIS) FROM V_1 WHERE ANNEE = (SELECT MAX(ANNEE) FROM V_1))) ");
		$row=$resultat-> fetch_assoc();

$txt="Tests positifs\n\n $row[cas_positifs]";
$t->Set($txt,0.5,19.5,3.5,64.5);
$t->SetColor('red');
$t->SetFont(FF_VERDANA,FS_BOLD,12);
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);

$txt="Cas contacts\n\n $row[cas_contact]";
$t->Set($txt,4.5,19.5,3.5,64.5);
$t->SetColor('red');
$t->SetFont(FF_VERDANA,FS_BOLD,12);
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);

$txt="Cas importés\n\n $row[cas_importes]";
$t->Set($txt,8.5,19.5,3.5,64.5);
$t->SetColor('red');
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);

$txt="Communautaires\n\n $row[trans_com]";
$t->Set($txt,12.5,19.5,4.5,64.5);
$t->SetColor('red');
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);


$txt="Guéris\n\n $row[cas_guerri]";
$t->Set($txt,17.5,19.5,3,64.5);
$t->SetColor('green');
$t->SetFontColor('darkgreen');
$t->Stroke($g->img,$scale);

$txt="Décès\n\n $row[deces]";
$t->Set($txt,21,19.5,3,64.5);
$t->SetColor('red');
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);

$txt="Evacués\n\n 0";
$t->Set($txt,24.5,19.5,3,64.5);
$t->SetColor('red');
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);

/*
$txt="total_cas_importes\n\n $data[2]";
$t->Set($txt,11.5,19.5,5,64.5);
$t->Stroke($g->img,$scale);

$txt="total_cas_importes\n\n $data[2]";
$t->Set($txt,17,19.5,5,64.5);
$t->Stroke($g->img,$scale);

$txt="total_cas_importes\n\n $data[2]";
$t->Set($txt,22.5,19.5,5,64.5);
$t->Stroke($g->img,$scale);
*/
$g->Stroke();
?>