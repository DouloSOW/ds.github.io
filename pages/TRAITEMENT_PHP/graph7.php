<?php
include("connexion.php");

$chaine="";
$chaine.="
<script>
$(function () {";
$chaine.="Highcharts.theme = {
			colors: ['#7cb5ec', '#f7a35c', '#90ee7e', '#7798BF', '#aaeeee', '#ff0066',
				'#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
			chart: {
				backgroundColor: '#FFFFFF',
				style: {
					fontFamily: 'Dosis, sans-serif'
				}
			},
			title: {
				style: {
					fontSize: '16px',
					fontWeight: 'bold',
					textTransform: 'uppercase'
				}
			},
			tooltip: {
				borderWidth: 2,
				borderColor: '#000000',
				style: {
					fontSize: '15px',
				},
				headerFormat:'<span style=\"font-size: 16px\">{point.key}</span><br>',
				backgroundColor: 'rgba(219,219,216,0.8)',
				shadow: false,
				shared: true,
				crosshairs: true
			},
			legend: {
				backgroundColor: '#F0F0EA',
				itemStyle: {
					fontWeight: 'bold',
					fontSize: '13px'
				}
			},
			xAxis: {
				gridLineWidth: 1,
				labels: {
					style: {
						fontSize: '12px'
					}
				}
			},
			yAxis: {
				minorTickInterval: 'auto',
				title: {
					style: {
						textTransform: 'uppercase'
					}
				},
				labels: {
					style: {
						fontSize: '12px'
					}
				}
			},
			plotOptions: {
				candlestick: {
					lineColor: '#404048'
				},
				series: {
					cursor: 'pointer',
					point: {
						events: {
							click: function (e) {
								hs.htmlExpand(null, {
									pageOrigin: {
										x: e.pageX || e.clientX,
										y: e.pageY || e.clientY
									},
									headingText: this.category,
									maincontentText: this.series.name + ' : ' + this.y + ' cas',
									width: 250
								});
							}
						}
					},
					marker: {
						lineWidth: 1
					}
				}	
			},
			 credits: {
				text: 'Doulo SOW',
				href: 'http://www.linkedin.com/in/doulo-sow-288766165',
				style: {
						fontSize: '15px'
				}
			},
			exporting: {
				chartOptions: { // specific options for the exported image
					plotOptions: {
						series: {
							dataLabels: {
								enabled: true
							}
						}
					}
				},
				fallbackToExportServer: false
			}
		};
		// Apply the theme
		Highcharts.setOptions(Highcharts.theme);";
$chaine.="
        var myChart = Highcharts.chart('container7', {
            chart: {
                type: 'line', 
				zoomType: 'x' 
            },
            title: {
                text: 'Nouveaux cas contacts par jour'
            },
            xAxis: {
                categories: [  ";
$resultat=$conn-> query ("SELECT Date from V_2");
//if (! $resultat) { echo "Erreur requete"; exit;} 

$i=0;
 
// Alimentation des tableaux
while($row=$resultat-> fetch_assoc())
{
    $xdata[$i]=$row["Date"];
	$chaine.="'".$xdata[$i]."',";
	$i++;
}
$chaine.="]";
$chaine.="  },yAxis: {
                title: {
                    text: 'Nombre de cas contacts'
                }
            },
			plotOptions: {
				series: {
					animation: {
						duration: 2000
					}
				}
			},
            series: [{
				name: 'Nouveaux cas contacts',
                data: [";
$resultat=$conn-> query ("SELECT cas_contact from V_2");
//if (! $resultat) { echo "Erreur requete"; exit;} 

$i=0;
 
// Alimentation des tableaux
while($row=$resultat-> fetch_assoc())
{
    $ydata1[$i]=intval($row["cas_contact"]);
	$chaine.=$ydata1[$i].",";
	$i++;
}
$chaine.="],color: '#FF0000'
            }";
$chaine.="]
        },  

		)
    });
</script>";
print($chaine);

?>