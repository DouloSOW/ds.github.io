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

$resultat=$conn-> query ("SELECT SUM(cas_positifs) AS total_cas_positifs, SUM(cas_guerri) AS total_cas_guerri, SUM(deces) AS total_deces, SUM(cas_graves) AS total_cas_graves, (SUM(cas_positifs)-SUM(cas_guerri)-SUM(deces)-1) AS total_cas_sous_traitement  FROM COVID19_PAYS");
$row=$resultat-> fetch_assoc();
$data[0]=intval($row["total_cas_positifs"]); $data[1]=intval($row["total_cas_guerri"]); $data[2]=intval($row["total_deces"]); $data[3]=intval($row["total_cas_sous_traitement"]); $data[4]=intval($row["total_cas_graves"]);

$txt="Cas positifs\n\n $data[0]";
$t->Set($txt,0.5,19.5,5,64.5);
$t->SetColor('red');
$t->SetFont(FF_VERDANA,FS_BOLD,12);
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);

$txt="Cas gueris\n\n $data[1]";
$t->Set($txt,6,19.5,5,64.5);
$t->SetColor('green');
$t->SetFontColor('darkgreen');
$t->Stroke($g->img,$scale);

$txt="Décés\n\n$data[2]";
$t->Set($txt,11.5,19.5,5,64.5);
$t->SetColor('red');
$t->SetFontColor('darkred');
$t->Stroke($g->img,$scale);

$txt="Sous traitements\n\n$data[3]";
$t->Set($txt,17,19.5,5,64.5);
$t->SetColor('red');
$t->Stroke($g->img,$scale);

$txt="Evacues\n\n1";
$t->Set($txt,22.5,19.5,5,64.5);
$t->SetColor('red');
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