$(document).ready( function () {
    $('#tableClientes').DataTable({
        language: {
            processing:     "Processando...",
            search:         "Buscar&nbsp;:",
            lengthMenu:    "Mostrar _MENU_ registros",
            info:           "Visualizando de _START_ &agrave; _END_ em _TOTAL_ resgistros",
            infoEmpty:      "Visualizando de 0 &agrave; 0 em 0 resgistros",
            infoFiltered:   "(filtrou de um total de _MAX_ resgistros)",
            infoPostFix:    "",
            loadingRecords: "Carregando...",
            zeroRecords:    "Nenhum registro para exibir",
            emptyTable:     "Nenhum registro disponível na tabela",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Proximo",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": ativar para classificar a coluna em ordem crescente",
                sortDescending: ": ativar para classificar a coluna em ordem decrescente"
            }
        }
    });
} );