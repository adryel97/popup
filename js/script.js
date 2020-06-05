    $('select').change(function() {
        var selecionado = $('select option:selected');
        var dados = selecionado.val();
        $.ajax({
            type: 'POST',
            url: "acoes.php?acao=status",
            data: {situacao : dados},
            success: function (data) {
                console.log(data)
        }
    });
});

$(document).ready(function(){
    $.ajax({
        type: 'GET',
        url: 'acoes.php?acao=situacao',
        data: "situacao",
        success: function(data)
        {
            if(data == 1)
            {
                $('#situacao option[value=1]').attr('selected','selected');
                $('#popup').modal('show')
            } else if (data == 0)
            {
                $('#situacao option[value=0]').attr('selected','selected');
                $('#popup').modal('hide')
            }
        }
    })
})