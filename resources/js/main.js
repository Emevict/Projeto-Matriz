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

// $(document).ready(function() {
//     $('.admin-checkbox').on('change', function() {
//         const userId = $(this).data('user-id');
//         const isAdmin = $(this).prop('checked') ? 1 : 0;
//         const updateUrl = document.getElementById('ajax-url').getAttribute('data-url');
//         console.log(updateUrl);
//         console.log('caiu aqui');
//         $.ajax({
//             url: updateUrl,
//             method: 'POST',
//             data: {
//                 user_id: userId,
//                 is_admin: isAdmin,
//                 _token: $('meta[name="csrf-token"]').attr('content')
//             },
//             success: function(response) {
//                 alert('Status atualizado com sucesso!');
//             },
//             error: function(xhr, status, error) {
//                 alert('Erro ao atualizar status. Tente novamente!');
//                 $(this).prop('checked', !isAdmin);
//             }
//         });
//     });
// });