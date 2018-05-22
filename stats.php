<!DOCTYPE html>
<?php
 include_once 'FonctionsPhp/fonctionsBackOffice.php';
 include_once 'FonctionsPhp/fonctionsFrontOffice.php';
 $PDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
 include_once 'FonctionsPhp/fonctionsStats.php';
 $prix = donnePrixParNombreRecherche($PDO);
 $ville= donneVilleParNombreRecherche($PDO);
 $surface= donneSurfaceParNombreRecherche($PDO);
?>
<html lang="fr">
	<head>
			<meta charset="UTF-8" />
			<title>Maison1</title>
			<link rel="stylesheet" type="text/css" href="index.css">
                        <script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		theme: "theme2",
		title:{
			text: "Statistique ville"
		},		
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			legendText: "{indexLabel}",
			dataPoints: [
				  <?php
                                foreach ($ville as $uneVille){
                                echo "{ y: ".$uneVille['cVille'].", indexLabel: '".$uneVille['ville']."' },";
				}
				?>
                                { y: 0, indexLabel: '0' }
			]
		}
		]
	});
	chart.render();



	var chart1 = new CanvasJS.Chart("chartContainer",
	{
		theme: "theme2",
		title:{
			text: "Statistique prix"
		},		
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
                                foreach ($prix as $unPrix){
                                echo "{y: ".$unPrix['cPrix'].", indexLabel: '".$unPrix['prix']."' },";
				}
				?>
				{ y: 0, indexLabel: '0' }
			]
		}
		]
	});
	chart1.render();


	var chart2 = new CanvasJS.Chart("chartContainer",
	{
		theme: "theme2",
		title:{
			text: "Statistique surface"
		},		
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
                                foreach ($surface as $uneSurface){
                                echo "{y: ".$uneSurface['cSurface'].", indexLabel: '".$uneSurface['surface']."' },";
				}
				?>
				{ y: 0, indexLabel: '0' }
			]
		}
		]
	});
	chart2.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
 </html>
