<script>
    function chartCompileTable(data) {
        // set stage
        var stage = anychart.graphics.create("table");

        // create table
        var table = anychart.standalones.table();

        table.contents(data);

        table.getRow(0).height(40).fontWeight(500).fontSize(10); // Set first row height 40px and bold the text
        table.getCol(0).width(90).fontWeight(900).fontSize(12); // Set first column width 70 px and bold the text

        // set colors for ever and odd rows
        table.rowOddFill("#{{ $table_odd }}"); // color for odd rows
        table.rowEvenFill("#FFFFFF"); // color for even rows

        // adjust table border and position text in each cell into center
        table.cellBorder("#cecece").vAlign("middle").hAlign("center");

        // set table container and initiate draw
        table.container(stage).draw();

    }

    function getDataTable(url) {
        fetch(url)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                chartCompileTable(data);
            });
    }

    anychart.onDocumentReady(function() {

        var url = '/table';

        getDataTable(url);

        setInterval(() => {
            document.getElementById("table").innerHTML = '';
            getDataTable(url);
        }, 600000);
    });
</script>
