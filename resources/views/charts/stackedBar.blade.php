<script>
    function chartCompileStackedBar(data) {

        // create data set
        var dataSet = anychart.data.set(data);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({
            x: 0,
            value: 1
        });

        // map data for the second series, take x from the zero column and value from the second column of data set
        var secondSeriesData = dataSet.mapAs({
            x: 0,
            value: 2
        });

        // create bar chart
        var chart = anychart.bar();

        // turn on chart animation
        chart.animation(true);

        // set padding
        chart.padding([10, 20, 5, 20]);

        // force chart to stack values by Y scale.
        chart.yScale().stackMode('value');

        // format y axis labels so they are always positive
        chart
            .yAxis()
            .labels()
            .format(function() {
                return Math.abs(this.value).toLocaleString();
            });

        // set title for Y-axis
        // chart.yAxis(0).title('Revenue in Dollars');

        // allow labels to overlap
        chart.xAxis(0).overlapMode('allow-overlap');

        // turn on extra axis for the symmetry (right data)
        // chart
        //     .xAxis(1)
        //     .enabled(true)
        //     .orientation('right')
        //     .overlapMode('allow-overlap');

        // set chart title text
        chart.title('Структура распределения задач');

        chart.interactivity().hoverMode('by-x');

        chart
            .tooltip()
            .title(false)
            .separator(false)
            .displayMode('separated')
            .positionMode('point')
            .useHtml(true)
            .fontSize(12)
            .offsetX(5)
            .offsetY(0)
            .format(function() {
                return (
                    // '<span style="color: #D9D9D9">$</span>' +
                    Math.abs(this.value).toLocaleString()
                );
            });

        // добавление значений к столбцам
        chart.labels().enabled(true);

        // chart.labels().format('{%Value}{type:number}'); 
        chart.labels().format(function() {
            return Math.abs(this.value);
        });

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart.bar(firstSeriesData);
        series.name('Выполнено');
        // series.tooltip().position('right').anchor('left-center');

        // create second series with mapped data
        series = chart.bar(secondSeriesData);
        series.name('В работе');
        // series.tooltip().position('left').anchor('left-center');

        // turn on legend
        chart
            .legend()
            .enabled(true)
            .inverted(true)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        // set container id for the chart
        chart.container('stackedBar');

        // set palette to a chart:
        chart.palette(anychart.palettes.{{ $theme }});

        // initiate chart drawing
        chart.draw();
    }

    function getDataStackedBar(url) {
        fetch(url)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                chartCompileStackedBar(data);
            });
    }

    anychart.onDocumentReady(function() {

        var url = '/api/stackedbar';

        getDataStackedBar(url);

        setInterval(() => {
            document.getElementById("stackedBar").innerHTML = '';
            getDataStackedBar(url);
        }, {{ $time_reload_page }});

    });
</script>
