var p = $('input[name=pp]').val();
var c = $('input[name=cc]').val();
var y = $('input[name=yy]').val();
var m = $('input[name=mm]').val();
var d = $('input[name=dd]').val();
var w = $('input[name=ww]').val();

// $('#s_province option:eq(0)').val(p).html(p);
// $('#s_city option:eq(0)').val(c).html(c);
var opt0 = [p,c];

$('#year option[value='+y+']').attr('selected',true);
$('#month option[value='+m+']').attr('selected',true);
$('#day option[value='+d+']').attr('selected',true);
$('#profession option[value='+w+']').attr('selected',true);