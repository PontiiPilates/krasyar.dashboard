<script>
    function chartCompilatorPie(data) {

        // create data set
        var chart = anychart.pie(data);

        // set chart title text settings
        chart.title('Работа в текущем квартале');

        // set chart labels position to outside
        chart.labels().position('outside');

        // set legend title settings
        chart
            .legend()
            .title()
            .enabled(true)
            .text('Показатели')
            .padding([0, 0, 10, 0]);

        // set legend position and items layout
        chart
            .legend()
            // .fontSize(10)
            .position('center-bottom')
            .itemsLayout('vertical')
            .align('left');

        // set container id for the chart
        chart.container('pie');

        // set palette to a chart:
        chart.palette(anychart.palettes.{{ $theme }});

        // initiate chart drawing
        chart.draw();

    }

    function getDataPie(url) {
        fetch(url)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                chartCompilatorPie(data);
            });
    }

    anychart.onDocumentReady(function() {

        var url = '/api/pie_tpod';

        getDataPie(url);

        setInterval(() => {
            document.getElementById("pie").innerHTML = '';
            getDataPie(url);
        }, {{ $time_reload_page }});
    });
</script>
