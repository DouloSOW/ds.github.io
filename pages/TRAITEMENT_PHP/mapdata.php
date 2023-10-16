<?php
include("connexion.php");

$chaine='';
$chaine.='
<script>
		
        $(function () {
			
				
            $(".mapcontainer").mapael({
                map: {
                    name: "senegal",
					zoom: {
                        enabled: true,
                        maxLevel: 10
                    },
                  defaultArea: {
                        attrsHover: {
                            fill: "#343434",
                            stroke: "#5d5d5d",
                            "stroke-width": 5,
                            "stroke-linejoin": "round"
                        }
                    }
                },
                legend: {
                    plot: {
                        cssClass: "myLegend",
                        labelAttrs: {
                            fill: "#4a4a4a"
                        },
                        titleAttrs: {
                            fill: "#4a4a4a"
                        },
                        marginBottom: 20,
                        marginLeft: 30,
                        hideElemsOnClick: {
                            opacity: 0
                        },
                        title: "Cas confirmés",
                        slices: [{
                            size: 5,
                            type: "circle",
                            max: 10,
                            attrs: {
                                fill: "#89ff72"
                            },
                            label: "Moins de 10 cas"
                        }, {
                            size: 7,
                            type: "circle",
                            min: 10,
                            max: 20,
                            attrs: {
                                fill: "#fffd72"
                            },
                            label: "Entre 10 and 20 cas confirmés"
                        }, {
                            size: 20,
                            type: "circle",
                            min: 20,
                            max: 30,
                            attrs: {
                                fill: "#ffbd54"
                            },
                            label: "Entre 20 and 30 cas confirmés"
                        }, {
                            size: 40,
                            type: "circle",
                            min: 30,
                            attrs: {
                                fill: "#ff5454"
                            },
                            label: "Superieur à 30 cas confirmés"
                        }]
                    }
                },
				
                plots: {';
$district=array();
$cas=array();
$lat=array();
$long=array();
$resultat=$conn-> query ("SELECT *  FROM zone_confirme");
$i=0;
while($row=$resultat-> fetch_assoc())
{
    $district[]=$row["district"];
	$cas[]=intval($row["cas_confirmes"]);
	$lat[]=trim($row["latitude"]);
	$long[]=trim($row["longitude"]);
	$chaine.=' "town-'.$i.'": {
                        value: "'.$cas[$i].'",
                        latitude: '.$lat[$i].',
                        longitude: '.$long[$i].',
                        
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">'.$district[$i].' ('.$cas[$i].' cas)</span>"
                        }
                    },';
	$i+=1;
}
		
	$chaine.='   
                } 
            });
        });
    </script>';
print($chaine);

?>