<?php require_once 'config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <title><?php echo "Welcome Admin .:|:. "; 
              if (empty($_GET["page"])){ echo "USER";}
              elseif ($_GET["page"] ==1) echo "Create Category";
              elseif ($_GET["page"] ==2) echo "Create Menu";
              elseif ($_GET["page"] ==3) echo "Create Article";
              elseif ($_GET["page"] ==4) echo "Create Right Module";
              elseif ($_GET["page"] ==6) echo "Create Other News Bottom";
              elseif ($_GET["page"] ==7) echo "Create Hotnews Alert";
            ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/prettify.css" rel="stylesheet">
    <link href="css/ksnews.css" rel="stylesheet"> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/theme.bootstrap.css"> 
    <link href="css/offcanvas.css" rel="stylesheet">
    <link rel="stylesheet" href="addons/pager/jquery.tablesorter.pager.css">
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css">
    <script src="js/docs.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/jquery.tablesorter.js"></script>
    <script src="js/jquery.tablesorter.widgets.js"></script>
    <script src="addons/pager/jquery.tablesorter.pager.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/pygments-manni.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script id="js">$(function() {
    $.extend($.tablesorter.themes.bootstrap, {
        // these classes are added to the table. To see other table classes available,
        // look here: http://twitter.github.com/bootstrap/base-css.html#tables
        table      : 'table table-bordered',
        caption    : 'caption',
        header     : 'bootstrap-header', // give the header a gradient background
        footerRow  : '',
        footerCells: '',
        icons      : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
        sortNone   : 'bootstrap-icon-unsorted',
        sortAsc    : 'icon-chevron-up glyphicon glyphicon-chevron-up',     // includes classes for Bootstrap v2 & v3
        sortDesc   : 'icon-chevron-down glyphicon glyphicon-chevron-down', // includes classes for Bootstrap v2 & v3
        active     : '', // applied when column is sorted
        hover      : '', // use custom css here - bootstrap class may not override it
        filterRow  : '', // filter row class
        even       : '', // odd row zebra striping
        odd        : ''  // even row zebra striping
    });

    // call the tablesorter plugin and apply the uitheme widget
    $("table").tablesorter({
        // this will apply the bootstrap theme if "uitheme" widget is included
        // the widgetOptions.uitheme is no longer required to be set
        theme : "bootstrap",

        widthFixed: true,

        headerTemplate : '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

        // widget code contained in the jquery.tablesorter.widgets.js file
        // use the zebra stripe widget if you plan on hiding any rows (filter widget)
        widgets : [ "uitheme", "filter", "zebra" ],

        widgetOptions : {
            // using the default zebra striping class name, so it actually isn't included in the theme variable above
            // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
            zebra : ["even", "odd"],

            // reset filters button
            filter_reset : ".reset"

            // set the uitheme widget to use the bootstrap theme class names
            // this is no longer required, if theme is set
            // ,uitheme : "bootstrap"

        }
    })
    .tablesorterPager({

        // target the pager markup - see the HTML block below
        container: $(".ts-pager"),

        // target the pager page select dropdown - choose a page
        cssGoto  : ".pagenum",

        // remove rows from the table to speed up the sort of large tables.
        // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
        removeRows: false,

        // output string - default is '{page}/{totalPages}';
        // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

    });

});</script>

    <script>
    $(function(){

        // filter button demo code
        $('button.filter').click(function(){
            var col = $(this).data('column'),
                txt = $(this).data('filter');
            $('table').find('.tablesorter-filter').val('').eq(col).val(txt);
            $('table').trigger('search', false);
            return false;
        });

        // toggle zebra widget
        $('button.zebra').click(function(){
            var t = $(this).hasClass('btn-success');
//          if (t) {
                // removing classes applied by the zebra widget
                // you shouldn't ever need to use this code, it is only for this demo
//              $('table').find('tr').removeClass('odd even');
//          }
            $('table')
                .toggleClass('table-striped')[0]
                .config.widgets = (t) ? ["uitheme", "filter"] : ["uitheme", "filter", "zebra"];
            $(this)
                .toggleClass('btn-danger btn-success')
                .find('i')
                .toggleClass('icon-ok icon-remove glyphicon-ok glyphicon-remove').end()
                .find('span')
                .text(t ? 'disabled' : 'enabled');
            $('table').trigger('refreshWidgets', [false]);
            return false;
        });
    });
    </script>
</head>
<body>