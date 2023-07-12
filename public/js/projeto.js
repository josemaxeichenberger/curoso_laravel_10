function deleteProduto(url) {
    if(confirm('Tem certeza que deseja deletar este produto?')) {
        $.ajax({
            url: url,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function(data) {
            if (data.success == true) {
                window.location.reload();
            } else {
                alert('Erro ao deletar produto.');
            }
        }).fail(function() {
            alert('Erro ao deletar produto.');
        });
    }
}
