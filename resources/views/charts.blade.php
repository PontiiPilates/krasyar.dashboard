<!doctype html>
<html lang="ru">

<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    {{-- Anychart --}}
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-bundle.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js"></script>


    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid" style="height: 100vh">

        <div class="row h-100">

            <div class="col-4 h-100">
                {{-- Множественная гистограмма --}}
                <div class="h-100" id="1"></div>
            </div>

            <div class="col-8 h-100">

                <div class="row h-50">

                    <div class="col">
                        {{-- Бублик --}}
                        <div class="h-100" id="2"></div>
                    </div>

                    <div class="col">
                        {{-- Гистограмма --}}
                        <div class="h-100" id="3"></div>
                    </div>

                </div>

                <div class="row">
                    {{-- Таблица --}}
                    <div id="4"></div>
                </div>

            </div>

        </div>



    </div>



    <script>
        // Множественная гистограмма
        // anychart.onDocumentReady(function() {

        //     // create data set on our data
        //     var dataSet = anychart.data.set([
        //         ['Бакуленко Максим', 6814, 3054, 4376, 4229, 1400, 8999],
        //         ['Тохтин Иван', 7012, 5067, 8987, 3932, 1400, 8999],
        //         ['Бекмамбетов Тимур', 8814, 9054, 4376, 9256, 1400, 8999],
        //         ['Мартиросян Гарик', 6814, 3054, 4376, 4229, 1400, 8999],
        //         ['Гагарин Юрий', 7012, 5067, 8987, 3932, 1400, 8999],
        //         ['Маск Илон', 8814, 9054, 4376, 9256, 1400, 21000],
        //         ['A', 6814, 3054, 4376, 4229, 1400, 8999],
        //         ['B', 7012, 5067, 8987, 3932, 1400, 8999],
        //         ['C', 8814, 9054, 4376, 9256, 1400, 8999],
        //         ['D', 6814, 3054, 4376, 4229, 1400, 8999],
        //         ['E', 7012, 5067, 8987, 3932, 1400, 8999],
        //         ['F', 8814, 9054, 4376, 9256, 1400, 21000]
        //     ]);

        //     // map data for the first series, take x from the zero column and value from the first column of data set
        //     var firstSeriesData = dataSet.mapAs({
        //         x: 0,
        //         value: 1
        //     });

        //     // map data for the second series, take x from the zero column and value from the second column of data set
        //     var secondSeriesData = dataSet.mapAs({
        //         x: 0,
        //         value: 2
        //     });

        //     // map data for the third series, take x from the zero column and value from the third column of data set
        //     var thirdSeriesData = dataSet.mapAs({
        //         x: 0,
        //         value: 3
        //     });

        //     // map data for the fourth series, take x from the zero column and value from the fourth column of data set
        //     var fourthSeriesData = dataSet.mapAs({
        //         x: 0,
        //         value: 4
        //     });

        //     // map data for the fourth series, take x from the zero column and value from the fourth column of data set
        //     var fifthSeriesData = dataSet.mapAs({
        //         x: 0,
        //         value: 5
        //     });

        //     // map data for the fourth series, take x from the zero column and value from the fourth column of data set
        //     var sixthSeriesData = dataSet.mapAs({
        //         x: 0,
        //         value: 6
        //     });

        //     // create bar chart
        //     var chart = anychart.bar();

        //     // turn on chart animation
        //     chart.animation(true);

        //     chart.padding([10, 40, 5, 20]);

        //     // set chart title text settings
        //     chart.title('Top 3 Products with Region Sales Data');

        //     // set scale minimum
        //     chart.yScale().minimum(0);

        //     chart.xAxis().labels().rotation(0).padding([0, 0, 20, 0]);

        //     chart.yAxis().labels().format('{%Value}{groupsSeparator: }');

        //     // set titles for Y-axis
        //     chart.yAxis().title('Revenue in Dollars');

        //     // helper function to setup settings for series
        //     var setupSeries = function(series, name) {
        //         series.name(name);
        //         series.hovered().labels(false);

        //         series
        //             .labels()
        //             .enabled(true)
        //             .position('right-center')
        //             .anchor('left-center')
        //             .format('${%Value}{groupsSeparator: }');

        //         series
        //             .tooltip()
        //             .position('right')
        //             .anchor('left-center')
        //             .offsetX(5)
        //             .offsetY(0)
        //             .titleFormat('{%X}')
        //             .format('{%SeriesName} : ${%Value}{groupsSeparator: }');
        //     };

        //     // temp variable to store series instance
        //     var series;

        //     // create first series with mapped data
        //     series = chart.bar(firstSeriesData);
        //     setupSeries(series, 'Florida');

        //     // create second series with mapped data
        //     series = chart.bar(secondSeriesData);
        //     setupSeries(series, 'Texas');

        //     // create third series with mapped data
        //     series = chart.bar(thirdSeriesData);
        //     setupSeries(series, 'Arizona');

        //     // create fourth series with mapped data
        //     series = chart.bar(fourthSeriesData);
        //     setupSeries(series, 'Nevada');

        //     // create fourth series with mapped data
        //     series = chart.bar(fifthSeriesData);
        //     setupSeries(series, 'Каларадо');

        //     // create fourth series with mapped data
        //     series = chart.bar(sixthSeriesData);
        //     setupSeries(series, 'Элтдорадо');



        //     // turn on legend
        //     chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);

        //     chart.interactivity().hoverMode('single');
        //     chart.tooltip().positionMode('point');

        //     // цветовая схема
        //     chart.palette(anychart.palettes.default);


        //     // отступ между марами игруппы
        //     chart.barsPadding(-0.25);

        //     // отступ внутри группы
        //     chart.barGroupsPadding(3);


        //     // set container id for the chart
        //     chart.container('1', 800, 600);
        //     // initiate chart drawing
        //     chart.draw();









        // });

        // В обе стороны гистограмма
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

            // turn on extra axis for the symmetry
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
            series.name('Females').color('HotPink');
            series.tooltip().position('right').anchor('left-center');

            // create second series with mapped data
            series = chart.bar(secondSeriesData);
            series.name('Males');
            series.tooltip().position('left').anchor('right-center');

            // turn on legend
            chart
                .legend()
                .enabled(true)
                .inverted(true)
                .fontSize(13)
                .padding([0, 0, 20, 0]);

            // set container id for the chart
            chart.container('1');

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





        // Бублик
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
            chart.container('2');
            // initiate chart drawing
            chart.draw();
        });




        // Простая гистограмма
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
            chart.container('3');
            // initiate chart drawing
            chart.draw();
        });

        // Таблица
        anychart.onDocumentReady(function() {

            // set stage
            var stage = anychart.graphics.create("4");

            // create table
            var table = anychart.standalones.table();

            // set table content
            table.contents([
                [
                    null,
                    "2003 Sales",
                    "2004 Sales"
                ],
                [
                    "January",
                    "$10000",
                    "$12000"
                ],
                [
                    "February",
                    "$12000",
                    "$15000"
                ],
                [
                    "March",
                    "$18000",
                    "$16000"
                ],
                [
                    "April",
                    "$11000",
                    "$15000"
                ],
                [
                    "May",
                    "$9000",
                    "$14000"
                ]
            ]);

            table.getRow(0).height(40).fontWeight(900); // Set first row height 40px and bold the text
            table.getCol(0).width(70).fontWeight(900); // Set first column width 70 px and bold the text

            // set colors for ever and odd rows
            table.rowOddFill("#F5F5F5"); // color for odd rows
            table.rowEvenFill("#FFFFFF"); // color for even rows

            // adjust table border and position text in each cell into center
            table.cellBorder("#B8B8B8").vAlign("middle").hAlign("center");

            // set table container and initiate draw
            table.container(stage).draw();
        });
    </script>



    <!-- Необязательный JavaScript; выберите один из двух! -->

    <!-- Вариант 1: пакет Bootstrap с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Вариант 2: отдельные JS для Popper и Bootstrap -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
