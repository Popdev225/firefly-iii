if ($('input[name="expense_account"]').length > 0) {
    $.getJSON('json/expense-accounts').success(function (data) {
        $('input[name="expense_account"]').typeahead({source: data});
    });
}
if ($('input[name="revenue_account"]').length > 0) {
    $.getJSON('json/revenue-accounts').success(function (data) {
        $('input[name="revenue_account"]').typeahead({source: data});
    });
}
if ($('input[name="category"]').length > 0) {
    $.getJSON('json/categories').success(function (data) {
        $('input[name="category"]').typeahead({source: data});
    });
}

// Return a helper with preserved width of cells
var fixHelper = function (e, ui) {
    ui.children().each(function () {
        $(this).width($(this).width());
    });
    return ui;
};

$(document).ready(function () {
    if (typeof googleTablePaged != 'undefined') {
        googleTablePaged('table/transactions/' + what, 'transaction-table');
    }

    // sortable!
    $(".sortable-table tbody").sortable(
        {
            helper: fixHelper,
            connectWith: '.sortable-table tbody',
            //stop: stopSorting,
            items: 'tr:not(.ignore)',
            stop: sortStop,
            //revert: 'invalid'
        }
    ).disableSelection();
});

function sortChange() {
    //console.log("change");
}

function sortSort(event, ui) {
    //var current = $(ui.item);
    //var thisDate = current.data('date');

    //if(current.prev().data('date') != thisDate && current.next().data('date') != thisDate) {
    //    console.log('FALSE ['+current.prev().data('date')+'] ['+thisDate+'] ['+current.next().data('date')+'] ('+current.index()+')');
    //    return true;

    //    return false;
    //}
    //console.log('TRUE ['+current.prev().data('date')+'] ['+thisDate+'] ['+current.next().data('date')+'] ('+current.index()+')');

}

function sortStop(event, ui) {
    console.log("stop");
    var current = $(ui.item);
    var thisDate = current.data('date');
    var originalBG = current.css('backgroundColor');


    if (current.prev().data('date') != thisDate && current.next().data('date') != thisDate) {
        console.log('False!');
        console.log('[' + current.prev().data('date') + '] [' + thisDate + '] [' + current.next().data('date') + ']');

        // animate something with color:
        current.animate({
                            backgroundColor: "#d9534f"
                        }, 200, function () {
            $(this).animate({
                                backgroundColor: originalBG
                            }, 200);
        });


        // fade back to original

        return false;
    }
    console.log('TRUE!');
    console.log('[' + current.prev().data('date') + '] [' + thisDate + '] [' + current.next().data('date') + ']');

    current.animate({
                        backgroundColor: "#5cb85c"
                    }, 200, function () {
        $(this).animate({
                            backgroundColor: originalBG
                        }, 200);
    });

    //else update some order thing bla bla.
    //check if the item above OR under this one have the same date
    //if not. return false

}