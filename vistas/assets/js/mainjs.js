var x;
x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
    loadUsers();        
}
function loadUsers() {
    $('#contenido').html("");
    $.post("users.php", function(response) {        
        $('#contenido').html(response);
        $('#contenido').fadeIn();
    });
}
function loadAlumnos() {
    $('#contenido').html("");
    $.post("alumnos.php", function(response) {        
        $('#contenido').html(response);
        $('#contenido').fadeIn();
    });
}    