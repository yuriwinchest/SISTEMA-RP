// Função para buscar cliente por RG
function buscarRG() {
    var rg = $('#rg').val().replace(/\D/g, ''); // Remove tudo que não for número

    if (rg.length >= 7) { // Verifica se o RG tem pelo menos 7 dígitos
        $.ajax({
            url: 'paginas/clientes/buscar_por_rg.php',
            method: 'POST',
            data: { rg: rg },
            dataType: "json",
            success: function(response) {
                if (response.status === 'success' && response.cliente) {
                    // Preenche os campos com os dados encontrados
                    $('#nome').val(response.cliente.nome);
                    $('#telefone').val(response.cliente.telefone);
                    $('#email').val(response.cliente.email);
                    $('#cpf').val(response.cliente.cpf);
                    $('#rg').val(response.cliente.rg);
                    $('#orgao_emissor').val(response.cliente.orgao_emissor);
                    $('#data_nasc').val(response.cliente.data_nasc);
                    $('#cep').val(response.cliente.cep);
                    $('#endereco').val(response.cliente.endereco);
                    $('#numero').val(response.cliente.numero);
                    $('#bairro').val(response.cliente.bairro);
                    $('#cidade').val(response.cliente.cidade);
                    $('#estado').val(response.cliente.estado);
                    $('#complemento').val(response.cliente.complemento);
                    $('#tipo_pessoa').val(response.cliente.tipo_pessoa);

                    alertSucesso('Cliente encontrado com sucesso!');
                } else {
                    alertWarning('RG não encontrado na base de dados!');
                }
            },
            error: function() {
                alertErro('Erro ao buscar RG. Verifique sua conexão.');
            }
        });
    } else {
        alertWarning('Por favor, digite um RG válido (mínimo 7 dígitos).');
    }
}
