// Executar quando o documento HTML for completamente carregado
document.addEventListener('DOMContentLoaded', function () {

    // Verificar se a função carregarEventos existe e se o elemento calendar existe
    if (typeof carregarEventos === 'function' && document.getElementById('calendar')) {
        // Chamar a função carregar eventos
        var calendar = carregarEventos();

        // Renderizar o calendário apenas se existir
        if (calendar && typeof calendar.render === 'function') {
            calendar.render();
        }
    }

});