<script>
    function chartCompileValuesSet(data) {

        // set stage
        var stage = anychart.graphics.create("valuesSet");

        // create table
        var table = anychart.standalones.table();

        // data = [
        //     [
        //         'Категория заявок 1',
        //         'Количество'
        //     ],
        //     [
        //         'Категория заявок 2',
        //         'Количество'
        //     ]
        // ];

        table.contents(data);

        table.getRow(0).height(40).fontWeight(500).fontSize(16); // Set first row height 40px and bold the text
        table.getCol(0).width(240).fontWeight(500).fontSize(16); // Set first column width 70 px and bold the text
        table.getCol(1).width(40).fontWeight(500).fontSize(16); // Set first column width 70 px and bold the text

        // set colors for ever and odd rows
        table.rowOddFill("#{{ $table_odd }}"); // color for odd rows
        table.rowOddFill("#FFFFFF"); // color for odd rows
        table.rowEvenFill("#FFFFFF"); // color for even rows

        // adjust table border and position text in each cell into center
        table.cellBorder("#FFFFFF").vAlign("middle").hAlign("left");

        // set table container and initiate draw
        table.container(stage).draw();

    }

    function getDataValueesSet(url) {
        fetch(url)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                chartCompileValuesSet(data);
            });
    }

    anychart.onDocumentReady(function() {

        var url = '/api/valuesset';

        getDataValueesSet(url);

        setInterval(() => {
            document.getElementById("valuesSet").innerHTML = '';
            getDataValueesSet(url);
        }, {{ $time_reload_page }});
    });
</script>