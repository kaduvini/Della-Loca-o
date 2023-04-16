Javascript
// arquivo script.js

// Função para validar o formulário antes do envio
function validarFormulario() {
    // Captura os valores dos campos do formulário
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var local = document.getElementById('local').value;
    var dataSaida = document.getElementById('data_saida').value;
    var horaSaida = document.getElementById('hora_saida').value;
    var dataDevolucao = document.getElementById('data_devolucao').value;
    var horaDevolucao = document.getElementById('hora_devolucao').value;

    // Validação simples dos campos (apenas verificando se estão vazios)
    if (nome === '' || email === '' || telefone === '' || local === '' || dataSaida === '' || horaSaida === '' || dataDevolucao === '' || horaDevolucao === '') {
        alert('Por favor, preencha todos os campos do formulário.');
        return false; // Retorna falso para evitar o envio do formulário
    }

    // Outras validações podem ser adicionadas aqui, de acordo com as necessidades do projeto

    // Se tudo estiver válido, retorna verdadeiro para permitir o envio do formulário
    return true;
}
