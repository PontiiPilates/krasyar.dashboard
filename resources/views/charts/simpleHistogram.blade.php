<script>
    anychart.onDocumentReady(function() {
        var data = [
            ['Eyebrow pencil', 5221],
            ['Nail polish', 9256],
            ['Lipstick', 3308],
            ['Lip gloss', 5432],
            ['Mascara', 13701],
            ['Foundation', 4008],
            ['Eyeshadows', 4229],
            ['Rouge', 18712],
            ['Powder', 10419],
            ['Eyeliner', 3932]
        ];

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
            // set chart title text settings
            .title('Top 10 Cosmetic Products by Revenue');

        // create area series with passed data
        var series = chart.bar(data);
        // set tooltip formatter
        series
            .tooltip()
            .position('right')
            .anchor('left-center')
            .offsetX(5)
            .offsetY(0)
            .format('${%Value}{groupsSeparator: }');

        // set titles for axises
        chart.xAxis().title('Products by Revenue');
        chart.yAxis().title('Revenue in Dollars');
        chart.interactivity().hoverMode('by-x');
        chart.tooltip().positionMode('point');
        // set scale minimum
        chart.yScale().minimum(0);

        // set container id for the chart
        chart.container('simplehistogram');
        // initiate chart drawing
        chart.draw();
    });
</script>
