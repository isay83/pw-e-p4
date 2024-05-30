function ejecutarAccion(action, params) {
    $.ajax({
        url: 'class/dispatcher.php',
        method: 'POST',
        data: { action: action, ...params },
        success: function (response) {
            var event = new CustomEvent('accionCompletada', { detail: response });
            document.dispatchEvent(event);
        },
        error: function () {
            alert('Error al ejecutar la acción');
        }
    });
}

$(document).on('accionCompletada', function (event) {
    var data = event.detail;
    if (data.status === 'success') {
        if (data.data) {
            var parsedData = JSON.parse(data.data);
            // manejar los datos recibidos y actualizar la interfaz
        }
    } else {
        console.error(data.message);
    }
});
