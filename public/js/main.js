document.addEventListener('submit', (event) => {
    event.preventDefault();
    if (event.target.id === 'form-id') { 
        alert("Cita Agendada con Exito!")
        document.getElementById("form-id").reset();
    };
})

