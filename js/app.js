function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    //retorna un arreglo con las variabes.
    var vars = query.split("&");
    for (var i=0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable) {
            return pair[1];
        }
    }
    return false;
 }

var id = getQueryVariable('id');

$.get('../php/index.php',{id:id},function(data){
    $('#container').html(data);
});
