<script>
    anychart.onDocumentReady(function() {

        // set table content
        var data = {{ Illuminate\Support\Js::from($circle) }};

        var chart = anychart.pie(data);

        // set chart title text settings
        chart.title('Раота отдела в 2023 году');

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
            .position('center-bottom')
            .itemsLayout('horizontal')
            .align('center');

        // set container id for the chart
        chart.container('circle');

        // set palette to a chart:
        chart.palette(anychart.palettes.{{ $theme }});

        // initiate chart drawing
        chart.draw();
    });
</script>
