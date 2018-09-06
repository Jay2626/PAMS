<!DOCTYPE html>
<html>
  <head>
    <title>My first Chartist Tests</title>
    <link rel="stylesheet" href="src/plugins/chartist/chartist.min.css">
  </head>
  <body>
    <!-- Site content goes here !-->
	
	
	
    <script src="src/plugins/chartist/chartist.min.js"></script>
	<div class="ct-chart ct-golden-section" id="chart2"></div>

<script>
  // Initialize a Line chart in the container with the ID chart1
  new Chartist.Line('#chart1', {
    labels: [1, 2, 3, 4],
    series: [[100, 120, 180, 200]]
  });

  // Initialize a Line chart in the container with the ID chart2
  new Chartist.Bar('#chart2', {
    labels: [1, 2, 3, 4],
    series: [[5, 2, 8, 3]]
  });
</script>
  </body>
</html>