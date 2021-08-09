$( document ).ready(function() {

    $(".loud").css("display", "none");


    //Carrinho
    $("#local").on('keyup',function(){
        let nome_busca = $(this).val();
        if(nome_busca == ''){
            $('.resultado').css("display","none");
            $('.resultado .list-group').html("");
        }else{
            $(".load-one").css("display", "block");
            $('.resultado').css("display","block");
            buscaProduto(nome_busca);
        }
    });



    


    function buscaProduto(busca_nome){
        $.ajax({
            type: 'GET',
            url: base_url+'/searchcidade?nome='+busca_nome,
            dataType: 'json',
            success: function(data){
                console.log(data);

                let li_cidade = '';

                for(var i in data){
                    li_cidade += '<li class="list-group-item" data-nome="'+data[i].nome_cidade+'">'+
                    '<span class="car-iten-nome">'+data[i].nome_cidade+'</span>'+
                    '</li>';
                }
                $('.resultado .list-group').html(li_cidade);
                clickCidadeResult();
                $(".load-one").css("display", "none");
            }
        });
    }

    function clickCidadeResult(){
        $(".resultado .list-group-item").click(function(){

            let nome_cidade = $(this).attr("data-nome");
            $("#local").val(nome_cidade);
            $('.resultado').css("display","none");
            $('.resultado .list-group').html("");
        });
    }


    

});