<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/axios.min.js">
</script>
<script src="assets/js/admin.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

<script>
        $(document).ready(function () {
            $('#tabela-musicas').DataTable({
        language: {
        paginate: {
            "first":      "Primeira",
            "last":       "Ultima",
            "next":       "Proxima",
            "previous":   "Anterior"
        },
            "search":       "Pesquisar:",
            "lengthMenu":   "Apresentar _MENU_ Musicas por página",
            "zeroRecords":  "Nenhuma Musica foi Encontrada",
            "info":         "Pagina _PAGE_ de _PAGES_",
            "infoEmpty":    "Sem musicas disponiveis",
            "infoFiltered": "(Filtrado _MAX_ total de musicas)"
        }
    } );
        });
</script>
</body>

</html>
