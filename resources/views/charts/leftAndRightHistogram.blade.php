<script>
    anychart.onDocumentReady(function() {
        // create data set
        var dataSet = anychart.data.set(getData());

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
        chart.yAxis(0).title('Revenue in Dollars');

        // allow labels to overlap
        chart.xAxis(0).overlapMode('allow-overlap');

        // turn on extra axis for the symmetry (right data)
        chart
            .xAxis(1)
            .enabled(true)
            .orientation('right')
            .overlapMode('allow-overlap');

        // set chart title text
        chart.title('Cosmetic Sales by Gender');

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
                    '<span style="color: #D9D9D9">$</span>' +
                    Math.abs(this.value).toLocaleString()
                );
            });

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart.bar(firstSeriesData);
        series.name('Выполнено').color('HotPink');
        series.tooltip().position('right').anchor('left-center');

        // create second series with mapped data
        series = chart.bar(secondSeriesData);
        series.name('В работе');
        series.tooltip().position('left').anchor('right-center');

        // turn on legend
        chart
            .legend()
            .enabled(true)
            .inverted(true)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        // set container id for the chart
        chart.container('leftAndRightHistogram');

        // initiate chart drawing
        chart.draw();
    });

    function getData() {
        return [
            ['Nail polish', 5376, -229],
            ['Eyebrow pencil', 10987, -932],
            ['Rouge', 7624, -5221],
            ['Lipstick', 8814, -256],
            ['Eyeshadows', 8998, -308],
            ['Eyeliner', 9321, -432],
            ['Foundation', 8342, -701],
            ['Lip gloss', 6998, -908],
            ['Mascara', 9261, -712],
            ['Shampoo', 5376, -9229],
            ['Hair conditioner', 10987, -13932],
            ['Body lotion', 7624, -10221],
            ['Shower gel', 8814, -12256],
            ['Soap', 8998, -5308],
            ['Eye fresher', 9321, -432],
            ['Deodorant', 8342, -11701],
            ['Hand cream', 7598, -5808],
            ['Foot cream', 6098, -3987],
            ['Night cream', 6998, -847],
            ['Day cream', 5304, -4008],
            ['Vanila cream', 9261, -712]
        ];
    }
</script>