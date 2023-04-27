<script>
    function chartCompilatorSpeed(data) {

        // sort data by alphabet order
        data.sort(function(itemFirst, itemSecond) {
            return itemSecond[1] - itemFirst[1];
        });

        // create bar chart
        var chart = anychart.bar();

        // turn on chart animation
        chart
            .animation(true)
            .padding([10, 40, 5, 20])
            .title('Лидеры по скорости выполнения заявок');

        // create area series with passed data
        var series = chart.bar(data);

        // set tooltip formatter
        series
            .tooltip()
            .position('right')
            .anchor('left-center')
            .offsetX(5)
            .offsetY(0)
            .format('{%Value}{groupsSeparator: }');

        // set titles for axises
        // chart.xAxis().title('Products by Revenue');

        // добавление чередования наименований строк
        chart.xAxis().staggerMode(true);
        chart.xAxis().staggerMaxLines(3);
        chart.xAxis().labels().fontSize(10);

        // chart.yAxis().title('Revenue in Dollars');

        chart.interactivity().hoverMode('by-x');
        chart.tooltip().positionMode('point');

        // set scale minimum
        chart.yScale().minimum(0);

        // set container id for the chart
        chart.container('speed');

        // set palette to a chart:
        chart.palette(anychart.palettes.{{ $theme }});

        // initiate chart drawing
        chart.draw();

    }

    function getDataSpeed(url) {
        fetch(url)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                chartCompilatorSpeed(data);
            });
    }

    anychart.onDocumentReady(function() {

        var url = '/speed';

        getDataSpeed(url);

        setInterval(() => {
            document.getElementById("speed").innerHTML = '';
            getDataSpeed(url);
        }, 600000);

    });
</script>
