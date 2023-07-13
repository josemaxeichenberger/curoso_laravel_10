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
                alert('Produto não pode ser excluido!');
            }
        }).fail(function(data) {
          
           alert('Produto não pode ser excluido!');
        });
    }
}
function deleteCliente(url) {
    if(confirm('Tem certeza que deseja deletar este cliente?')) {
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
                alert('Erro ao deletar cliente.');
            }
        }).fail(function() {
            alert('Erro ao deletar cliente.');
        });
    }
}
function deleteUsuario(url) {
    if(confirm('Tem certeza que deseja deletar este Usuario?')) {
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
                alert('Erro ao deletar usuario.');
            }
        }).fail(function() {
            alert('Erro ao deletar usuario.');
        });
    }
}
