<!-- HIGHCHARTS -->
    <!-- 2. Add the JavaScript to initialize the chart on document ready -->

      var chart; // global

      /**
       * Request data from the server, add it to the graph and set a timeout to request again
       */
      function requestData() {
        $.ajax({
          url: 'live-server-data.php', 
          success: function(point) {
			  
			  
			  
			  
			  
			  
            var series = chart.series[0],
            shift = series.data.length > 100; // shift if the series is longer than 20

            var values = eval(point);


            // add the point
            chart.series[0].addPoint([values[0], values[1]], true, shift);
            //chart.series[1].addPoint([values[0], values[2]], true, shift);
            // call it again after one second
			
			
			
			
			
			
			
			
			
            setTimeout(requestData, 10000);	
          },
          cache: false
        });
      }

      $(document).ready(function() {
        chart = new Highcharts.Chart({
          chart: {
            renderTo: 'container',
            defaultSeriesType: 'spline',
            events: {
              load: requestData
            }
          },
          title: {
            text: 'GPSTrack altitude data'
          },
          subtitle: {
            text: 'Source: Android client'
          },
          xAxis: {
            type: 'datetime',
            tickPixelInterval: 150,
            maxZoom: 20 * 1000
          },
          yAxis: {
            title: {
              text: ' ',
              margin: 1
            }
          },
          series: [{
            name: 'Altitude',
            data: []
          }
		  /*,
          {
            name: 'Humidity',
            data: []
          }*/
          ]
        });		
      });


<!-- HIGHCHARTS -->