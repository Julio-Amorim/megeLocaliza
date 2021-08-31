function validar() {
    local_retirada = document.getElementById("local_retirada");
    data_retirada = document.getElementById("data_retirada");
    hora_retirada = document.getElementById("hora_retirada");
    local_devolucao = document.getElementById("local_devolucao");
    data_devolucao = document.getElementById("data_devolucao");
    hora_devolucao = document.getElementById("hora_devolucao");
    continuar = document.getElementById("continuar")
    form = document.getElementById("form");

    //Verificar se o Local de Retirada esta vazio
    if (local_retirada.value == "") {
        alert("Local de retirada não informado!");
        local_retirada.focus();  
        return;                      
    }

    //Verificar se o data de Retirada esta vazio
    if (data_retirada.value == "") {
        alert("Data de retirada não informado!");
        data_retirada.focus(); 
        return;                       
    }

    //Verificar se o hora de Retirada esta vazio
    if (hora_retirada.value == "") {
        alert("Hora de retirada não informado!");
        hora_retirada.focus();    
        return;                    
    }

    //Verificar se o Local de devolucao esta vazio
    if (local_devolucao.value == "") {
        alert("Local de devolução não informado!");
        local_devolucao.focus();  
        return;                      
    }

    //Verificar se o data de devolucao esta vazio
    if (data_devolucao.value == "") {
        alert("Data de devolução não informado!");
        data_devolucao.focus(); 
        return;                       
    }

    //Verificar se o hora de devolucao esta vazio
    if (hora_devolucao.value == "") {
        alert("Hora de devolução não informado!");
        hora_devolucao.focus();    
        return;                    
    }
}

