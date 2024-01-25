(function() {
    const dateHTML = document.querySelector('.header__date');
    const timeHTML = document.querySelector('.header__date--time');

    // Diccionario de dias
    const dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

    // Diccionario de Meses
    const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    const date = new Date();
    let fechaCompleta = dias[date.getDay()] + ' ' + date.getDate() + ' De ' + meses[date.getMonth()] + ' Del ' + date.getFullYear();
    let horaCompleta = date.getHours() + ':' + (date.getMinutes() <= 9 ? '0' + date.getMinutes() : date.getMinutes()) + ':' + (date.getSeconds() <= 9 ? '0' + date.getSeconds() : date.getSeconds());

    dateHTML.textContent = fechaCompleta;
    timeHTML.textContent = horaCompleta;
    
    setInterval(() => {
        const date = new Date();

        fechaCompleta = dias[date.getDay()] + ' ' + date.getDate() + ' De ' + meses[date.getMonth()] + ' Del ' + date.getFullYear();
        horaCompleta = date.getHours() + ':' + (date.getMinutes() <= 9 ? '0' + date.getMinutes() : date.getMinutes()) + ':' + (date.getSeconds() <= 9 ? '0' + date.getSeconds() : date.getSeconds());

        dateHTML.textContent = fechaCompleta;
        timeHTML.textContent = horaCompleta;
    }, 1000);
})();
