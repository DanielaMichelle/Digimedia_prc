<style>
.modal-main-background {
    background-color: rgba(0, 0, 0, 0.5);
    width: 100vw;
    height: 100vh;
    position: fixed;
    top: 0;
    z-index: 1050;
    justify-content: center;
    align-items: center;
    display: none;
}

.modal-main {
    background-color: rgba(194, 7, 158, 0.7);
    width: 70%;
    color: white;
    padding: 2rem;
    border-radius: 40px;
    text-align: center;
    position: relative;

}

.modal-main figure {
    position: absolute;
    right: -5px;
    top: -10px;
    background-color: rgb(239 21 150);
    width: 40px;
    height: 40px;
    display: grid;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 3px solid white;

    i {
        font-size: x-large;
    }

    i:hover {
        cursor: pointer;
    }
}

.modal-main p {
    font-size: 2vw;
    font-style: italic;
    position: relative;
    margin-bottom: 8px;
}


.modal-main .form-inputs {
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 2vw;
    row-gap: 1vw;
}

.modal-main .form-inputs .form-group {
    text-align: start;
}

.modal-main .form-inputs .form-group .form-control {
    border-radius: 50px;
}

.modal-main .form-inputs .form-group input,
.modal-main .form-inputs .form-group .dropdown a {
    padding: 12px 24px;
    border: none;
    border-radius: 50px;
}

.modal-main .form-inputs .form-group input::placeholder {
    color: rgb(77 76 76);
    font-size: 20px;
}

.modal-main .form-inputs .form-group label {

    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    padding-left: 28px;
    margin-bottom: 12px;
}

.modal-main .form-inputs .form-group .dropdown a,
.modal-main .form-inputs .form-group .dropdown ul li a {
    background: white;
    color: rgb(77 76 76);
    font-size: 20px;
    width: 100%;
    text-align: start;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-style: normal;
}

.modal-main .form-inputs .form-group .dropdown ul {
    width: 100%;
    border-radius: 20px;
}

.modal-main .form-inputs .form-group .dropdown a::after {
    color: black;
    border-top: 0.5em solid;
}

.modal-main button {
    font-size: 23px;
    margin-top: 1rem;
    padding: 12px 50px;
    width: fit-content;
    border: none;
    color: white;
    font-weight: 600;
    border-radius: 50px;
    box-shadow: rgba(0, 0, 0, 0.4) 2px 5px 5px;
    background: rgb(233, 133, 151);
    background: linear-gradient(129deg, rgba(233, 133, 151, 1) 0%, rgba(233, 133, 151, 1) 34%, rgba(216, 22, 221, 1) 100%);
}

.modal-main button:hover {
    cursor: pointer;
}

@media (max-width: 1024px) {



    .modal-main {
        width: 80vw;
        padding: 1rem
    }

    .modal-main h3 {
        font-size: 4vw;
        padding: 1.3vw;
        margin: 0;
        padding: 0;
    }

    .modal-main p {
        font-size: 3vw;
        font-size: 18px;
    }

    .modal-main button {
        font-size: 16px;
        padding: 0 50px;
        height: 43px;
        margin-bottom: 12px;
    }

    .modal-main .form-inputs {
        row-gap: 0vw;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 12px;
    }

    .modal-main .form-inputs .form-group input,
    .modal-main .form-inputs .form-group .dropdown a {
        padding: 0px 24px;
        height: 43px;
    }

    .modal-main .form-inputs .form-group input::placeholder {
        font-size: 12px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .modal-main .form-inputs .form-group label {
        margin-bottom: 4px;
    }

    .modal-main .form-inputs .form-group .dropdown a,
    .modal-main .form-inputs .form-group .dropdown ul li a {
        font-size: 12px;
    }
}



@media (max-width: 768px) {

    .modal-main {
        width: 70vw;
        padding: 1rem;
    }

    .modal-main .form-inputs {
        grid-template-columns: 1fr;
    }

    .modal-main .form-inputs .form-group input,
    .modal-main .form-inputs .form-group .dropdown a {
        height: 36px;
    }

    .modal-main button {
        height: 36px;
        padding: 0 25px;

    }

    .modal-main h3 {
        font-size: 3.5vw;
        margin-top: 8px;

    }

    .modal-main p {
        font-size: 16px;
    }

    .modal-main .form-inputs .form-group input::placeholder {
        font-size: 10px;
    }


    .modal-main .form-inputs .form-group .dropdown a,
    .modal-main .form-inputs .form-group .dropdown ul li a {
        font-size: 10px;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 10px;
    }

}

@media (max-width: 425px) {
    .modal-main {
        border-radius: 15px;
    }

    .modal-main h3 {
        font-size: 4vw;
    }

    .modal-main p {
        font-size: 14px;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 8px;
    }

    .modal-main button {
        font-size: 14px;
    }
}
</style>

<div class="modal-main-background">
    <div class="modal-main">
        <figure class="btn-cerrar">
            <i class="fa solid fa-xmark fa-lg"></i>
        </figure>
        <h3>¡Queremos conocerte!</h3>
        <p>Cuéntanos cómo te podemos ayudar </p>
        <form class="modal-main-form" id="formMain" method="post">
            <div class="form-inputs">
                <!--//Nombre//-->
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" placeholder="Jimena Vásquez" name="name" id="name">
                    <p class="err-msg"></p>
                </div>

                <!--//Telefono//-->
                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text" class="form-control" placeholder="987654321" name="phone" id="phone">
                    <p class="err-msg"></p>
                </div>

                <!--//Correo//-->
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="text" class="form-control" placeholder="hola@sitioincreible.com.ar" name="email"
                        id="email">
                    <p class="err-msg"></p>
                </div>

                <!--//Dropdown//-->
                <div class="form-group">
                    <label for="service">Tipo de servicio</label>
                    <select class="form-control" id="service" name="service">
                        <option value="">Seleccionar</option>
                        <option value="diseño">Diseño y Desarrollo Web</option>
                        <option value="redes">Gestión de Redes Sociales</option>
                        <option value="marketing">Marketing y Gestión Digital</option>
                        <option value="branding">Branding y Diseño</option>
                    </select>
                    <p class="err-msg" id="service-error"></p>
                </div>
            </div>
            <button type="submit" class="go-button" name="submit">¡Hazlo realidad!</button>
        </form>
    </div>
</div>


<!-- JS bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<script>
const btnCerrar = document.querySelector('.btn-cerrar');
const modalContainer = document.querySelector('.modal-main-background')


document.addEventListener("DOMContentLoaded", mostrarModalDespuesDe5Segundos);

// Función para mostrar el modal después de 1 segundos
function mostrarModalDespuesDe5Segundos() {
    setTimeout(() => {
        modalContainer.style.display = 'flex';
        validarDatos();
    }, 1000); // 1000 milisegundos = 1 segundos
}

// Agregar evento al botón de cerrar
btnCerrar.addEventListener('click', () => {
    console.log("clickeaste");
    modalContainer.style.display = 'none';
});



//De aqui para abajo validas todos los campos del formulario con expresiones regulares
function validarDatos() {
    const formMain = document.querySelector("#formMain");
    formMain.addEventListener("submit", (e) => {
        e.preventDefault();
        datos();
    })
}

function datos() {
    const objRegex = {
        telefono: /^9\d{2}\s?\d{3}\s?\d{3}$/, //validar que tenga 9 caracteres
        gmail: /^[\w.-]+@gmail\.com$/ //validar la estructura de un correo electrónico
    };

    const nombreInput = document.getElementById('name');
    const telefonoInput = document.getElementById('phone');
    const emailInput = document.getElementById('email');

    const telefono = telefonoInput.value.trim();
    const email = emailInput.value.trim();

    const telefonoValido = objRegex.telefono.test(telefono);
    const emailValido = objRegex.gmail.test(email);


    if (nombreInput.value === '') alert('El nombre no debe estar vacio')

    if (!telefonoValido) alert("Debe de haber 9 digitos en el numero de telefono.")

    if (!emailValido) alert("Debe de ingresar un correo valido.")

    //validacion del servicio
    const service = document.querySelector("#service")
    if (service.value === '') alert('Seleccione un servicio por favor.')

    if (nombreInput.value != '' && telefonoValido && emailValido && service.value != '') {
        alert("Todos los campos son correctos.")
        // console.log(telefonoValido, telefonoInput.value, emailInput.value, emailValido);

        agarrandoDatos(nombreInput, telefonoInput, emailInput, service);
        limpiarDatos(nombreInput, telefonoInput, emailInput, service);
    }
}


function limpiarDatos(nombre, telefono, email, service) {
    nombre.value = "";
    telefono.value = "";
    email.value = "";
    service.value = "";
}


function agarrandoDatos(nombre, telefono, email, service) {
    const form = new FormData();
    form.append('nombre', nombre.value)
    form.append('telefono', telefono.value)
    form.append('email', email.value)
    form.append('service', service.value)

    enviandoDatosServer(form)
}

//Enviando datos al servidor:
function enviandoDatosServer(form) {
    fetch("./app/trigger/person1.php?action=ADD", {
            method: 'POST',
            body: form
        })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))
}
</script>