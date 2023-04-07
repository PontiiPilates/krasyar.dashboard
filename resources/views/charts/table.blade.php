<script>
    anychart.onDocumentReady(function() {

        // set stage
        var stage = anychart.graphics.create("table");

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
