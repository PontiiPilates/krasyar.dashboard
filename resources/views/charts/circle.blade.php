<script>
    anychart.onDocumentReady(function() {
        // create pie chart with passed data
        var chart = anychart.pie([
            ['Apples', 6371664],
            ['Pears', 789622],
            ['Bananas', 7216301],
            ['Grapes', 1486621],
            ['Oranges', 1200000]
        ]);

        // set chart title text settings
        chart.title('Fruits imported in 2015 (in kg)');
        // set chart labels position to outside
        chart.labels().position('outside');
        // set legend title settings
        chart
            .legend()
            .title()
            .enabled(true)
            .text('Retail channels')
            .padding([0, 0, 10, 0]);

        // set legend position and items layout
        chart
            .legend()
            .position('center-bottom')
            .itemsLayout('horizontal')
            .align('center');

        // set container id for the chart
        chart.container('circle');
        // initiate chart drawing
        chart.draw();
    });
</script>
