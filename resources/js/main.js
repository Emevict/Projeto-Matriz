const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId)
 
    toggle.addEventListener('click', () =>{
        nav.classList.toggle('show-menu')
        toggle.classList.toggle('show-icon')
    })
 }
 
 showMenu('nav-toggle','nav-menu')

 $(document).ready(function() {
    $('#permissions-table').DataTable({
        "language": {
            "sEmptyTable": "Nenhum dado disponível na tabela",
            "sInfo": "Mostrando de _START_ até _END_",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 entradas",
            "sInfoFiltered": "(filtrado de _MAX_ entradas no total)",
            "sLengthMenu": "Mostrar _MENU_ Entradas",
            "sSearch": "Pesquisar:",
            "sZeroRecords": "Nenhum registro encontrado",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": ativar para ordenar a coluna de forma ascendente",
                "sSortDescending": ": ativar para ordenar a coluna de forma descendente"
            }
        }
    });
})

$(document).ready(function() {
    $('#btnAdd').hover(
        function() {
            $('#tooltipText').fadeIn(200);
        },
        function() {
            $('#tooltipText').fadeOut(200);
        }
    );

    $('#btnAdd').click(function() {
        $('#addModal').show();
    });

    $('.close').click(function() {
        $('#addModal').hide(); 
    });

    $(window).click(function(event) {
        if (event.target.id === 'addModal') {
            $('#addModal').hide();
        }
    });
    $('.edit-btn').click(function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        var name = $(this).data('name');
        var permissions = $(this).data('permissions');
    
        $('#idModal').val(id);
        $('#nameModal').val(name);
        $('#permissionsModal').val(permissions);
    
        $('#addModalEdit').show(); 
    });
    
    // Fecha o modal quando o ícone de fechar for clicado
    $('.close').click(function() {
        $('#addModalEdit').hide(); 
    });
    
    // Fecha o modal ao clicar fora dele
    $(window).click(function(event) {
        if (event.target.id === 'addModalEdit') {
            $('#addModalEdit').hide();
        }
    });
    
});