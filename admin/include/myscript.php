<script src="js/offcanvas.js"></script>
<script src="js/holder.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/knockout-2.3.0.js"></script>
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker_002.js"></script>

<script type="text/javascript">
/**
* Gets whether all the options are selected
* @param {jQuery} $el
* @returns {bool}
*/
function multiselect_selected($el) {
var ret = true;
$('option', $el).each(function(element) {
if (!!!$(this).prop('selected')) {
ret = false;
}
});
return ret;
}
/**
* Selects all the options
* @param {jQuery} $el
* @returns {undefined}
*/
function multiselect_selectAll($el) {
$('option', $el).each(function(element) {
$el.multiselect('select', $(this).val());
});
}
/**
* Deselects all the options
* @param {jQuery} $el
* @returns {undefined}
*/
function multiselect_deselectAll($el) {
$('option', $el).each(function(element) {
$el.multiselect('deselect', $(this).val());
});
}
/**
* Clears all the selected options
* @param {jQuery} $el
* @returns {undefined}
*/
function multiselect_toggle($el, $btn) {
if (multiselect_selected($el)) {
multiselect_deselectAll($el);
$btn.text("Select All");
}
else {
multiselect_selectAll($el);
$btn.text("Deselect All");
}
}

$(document).ready(function() {
$('#multi-cate').multiselect();
$("#multi-toggle").click(function(e) {
e.preventDefault();
multiselect_toggle($("#multi-cate"), $(this));
});
});

$(document).ready(function() {
$('#multi-cate2').multiselect();
$("#multi-toggle").click(function(e) {
e.preventDefault();
multiselect_toggle($("#multi-cate2"), $(this));
});
});

$(document).ready(function() {
$('#multi-cate3').multiselect();
$("#multi-toggle").click(function(e) {
e.preventDefault();
multiselect_toggle($("#multi-cate3"), $(this));
});
});

</script>
<script>
    $(document)
        .on('change', '.btn-file :file', function() {
            var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
    });
    
    $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
            
        });
    });     
</script>