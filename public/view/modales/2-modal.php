<style>

   
   .contenedor-form {
        position: fixed;
        display: none;
        align-items: center;
        justify-content: center;
        transform: translate(-50%,-50%);
        top: 55%;
        left: 50%;
        margin: auto;
        z-index: 4000;
        background: rgba(0, 155, 255, 0.9);
        overflow: hidden;
        flex-wrap: wrap;
        justify-content: space-between;
        border-radius: 40px;
        
      

    }
    .btn-cerrar{
        
        position: absolute;
        right: 10px;
        top: 7px;
        background-color: skyblue;
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
    .resgistration-style__frase h2{
        color: white;
        font-size: 1.3vw;
    }
    .btn-cerrar i {
        display: flex;
        justify-content: right;
        cursor: pointer;
        
        
        
    }
    .resgistration-style__anum {
        color: white;
        
        text-align: center;
        position: relative;
        font-weight: 700;
        font-size: 2vw;
        
    }
    .resgistration-style__anum::after{
        content: " ";
        position: absolute;
        width: 100%;
        height: 3px;
        background: white;
        bottom: 0;
        left: 0;
    }
    .resgistration-style__anum:hover{
        color: #D6D9D6;
    }
    .resgistration-style__anum:hover::after{
        background: #D6D9D6;
    }
   
    
    .letrero{
        background: transparent;
        margin: 2px;
        width: 850px;
    }
    .letrero h2{
        color: white; 
        text-shadow:-1px -1px 0 #000,  
                1px -1px 0 #000,  
               -1px  1px 0 #000,  
                1px  1px 0 #000;
        
        padding: 20px 20px;
        font-size: 3.5vw;
        font-weight: bold;
        text-align: center;
        /*text-shadow: 2px 3px 5px black;*/
        
    }
    /* my code */
    .resgistration-style{
        padding: 20px;
        margin: -60px 15px 2px 80px;
        display: flex;
        
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .resgistration-style__div > img{
        width: 263px;
        height: 193px;
    }

    .registration-form.inactive {
        display: none;
    }
    

    .desktop-contact.inactive {
        display: none;
    }
     

    

    .form-group input {
        border: 1.6px solid #df76d5;
        font-size: 1vw;
        border-bottom-left-radius: 20px ;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        margin-bottom: 5px;
        
        
    }
    

    .form-group textarea {
        resize: none;
        border: 10px solid #df76d5;
    }
    

    .form-group label {
        color: white;
        font-weight: 500;
        font-size: 1.4vw;
        margin-bottom: 8px;
    }
    
    .registration-form{
        
        margin: -60px 39px 6px;
    }
    .registration-form form {
        
        
        
        /*position: fixed;*/
        
        
       
        
        opacity: 1;
        
       
        padding: 30px;
        
        
        border-radius: 20px 20px 0 0;
        height: auto;
        width: 350px;
        
        margin: 5px 10px;
    }
    

 
   
    

    .go-button {
        background: purple;
        width: 100%;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
        border-radius: 3px;
        cursor: pointer;
        padding: 5px 7px;
        border: none;
        font-size: 1.7vw;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .btn-mobile {
        top: 562px;
        display: none;
        justify-content: flex-end;
        position: fixed;
        opacity: 0;
    }
    

    .btn-mobile.inactive {
        display: none;
    }
    

    /*.btn-mobile button {
        width: 75px;
        height: 75px;
        border-radius: 40px;
        background: #FF0080;
    }*/

    .btn-mobile button img {
        width: 45px;
        height: 45px;
    }
    

    

        
       
        /*
        @keyframes mianimacion {
            0% {
                right: 6%;
                top: 900px;
            }

            100% {
                right: 6%;
                top: 680px;
            }
        }*/
    
     
    .ocultar{
        display: block;
    }

    @media only screen and  (max-width: 913px) {
        .contenedor-form {
            width: 75%;
            display: flex;
            flex-direction: column;
            background: rgba(0, 155, 255, 0.9);
            
        }
        .ocultar{
            display: none;
        }
        .resgistration-style{
            display: none;
        }
        .letrero{
            width: 100%;
            background: transparent;
            margin: 0;
            padding: 0px 10px;
        }
        .letrero h2{
            font-size: 3.3vw;
        }
        /*
        .desktop-contact {
            display: none;
        }*/

        .btn-mobile {
            right: 4%;
            opacity: 1;
        }
        .registration-form{
            margin: 0;
            background: transparent;
            width: 100%;
            padding: 0;
            
        }
        .registration-form form{
           
            
            
            width: 100%;
            height: 100%;
            position: relative;
            left: 0;
            top: -40px;
        }
        .registration-form form input{
            width: 98%;
            font-size: 2.5vw;
            margin-bottom: 10px;
        }
        .registration-form form label{
            font-size: 2.5vw;
            margin-bottom: 10px;
            margin-top: 0;
        }
        .go-button{
            width: 98%;
            font-size: 2.5vw;
            margin-top: 15px;
        }
        .btn-cerrar{
            top: 5px;
            z-index:95000;
            width: 25px;
            height: 25px;
        }
    

        
    }
    
    .overflow {
        z-index: 3000;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    
    
</style>

<section class="overflow ocultar"></section>
<div class="contenedor-form">
    <div class="btn-cerrar">
        <i class="fa solid fa-xmark fa-lg"></i>
    </div>
    <div class="letrero">
        <h2>¡ELEVA TUS CAMPAÑAS A OTRO NIVEL!</h2>
    </div>
    <section class="resgistration-style">
        <figure class="resgistration-style__div">
            <img src="./public/img/a_services-removebg-preview.png"/>
        </figure>
        <div class="resgistration-style__frase"><h2>¡TU PRIMERA ASESORÍA ES</h2></div>
        <div class="resgistration-style__anum">GRATIS</div>
    </section>
    
    <div class="registration-form">
        <p class="text-success text-center"></p>
        <form id="formMain" >
            
            <!--//Nombre//-->
            <div class="form-group">
                <label for="name">NOMBRE COMPLETO</label>
                <input type="text" class="form-control" placeholder="Ingresar Nombre Completo" name="name" id="name">
                <p class="err-msg"></p>
            </div>
            <!--//Telefono//-->
            <div class="form-group">
                <label for="phone">TELEFONO</label>
                <input type="text" class="form-control" placeholder="Ingresar Telefono Personal" name="phone"
                    id="phone">
                <p class="err-msg"></p>
            </div>
            <!--//Correo//-->
            <div class="form-group">
                <label for="email">CORREO ELECTRONICO</label>
                <input type="text" class="form-control" placeholder="Ingresar Correo" name="email" id="email">
                <p class="err-msg"></p>
            </div>
            <input  type="text" value="<?php echo $_GET["id"];?>" name="id_ser" hidden/>
            <button type="button" class="go-button" name="submit" onclick="enviarFormulario('formMain')">¡EMPEZEMOS!</button>
        </form>
    </div>
    <div class="desktop-contact inactive">
        <h5>Contactanos</h5>
        <i class="fa-solid fa-minus" style="color: #ffffff;"></i>
    </div>
    <div class="btn-mobile">
        <button><img src="./public/img/mensaje.png" style="color:white;" alt=""></button>
        <!-- <button><img src="../img/mensaje.png" style="color:white;" alt=""></button> -->
    </div>


</div>



<script>
//const desktopContact = document.querySelector('.desktop-contact');
const contenedorForm = document.querySelector('.contenedor-form');
const btnCerrar = document.querySelector('.btn-cerrar');
//const mobile = document.querySelector('.btn-mobile')
const ocultar = document.querySelector(".ocultar");
const overflow = document.querySelector(".overflow");



btnCerrar.addEventListener('click',toggleCerarForm);
overflow.addEventListener('click',touch_display);



function touch_display() {
    ocultar.style.display = "none";
    contenedorForm.style.display = "none";
    document.body.style.overflowY = "auto";
}


function toggleCerarForm() {
    contenedorForm.style.display = "none";
    document.body.style.overflowY = "auto";
    
    ocultar.style.display = "none";
}
/*window.addEventListener('resize', function() {
  if (window.innerWidth <= 913) { 
    document.body.classList.add('scroll-inerte');
  } else {
    document.body.classList.remove('scroll-inerte'); 
  }
});*/
document.addEventListener("DOMContentLoaded", mostrarModalDespuesDe5Segundos);


function mostrarModalDespuesDe5Segundos() {
    setTimeout(() => {
        contenedorForm.style.display = 'flex';
        overflow.style.display = 'block';
        validarDatos();
    }, 1000); 
}



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

        if (nombreInput.value != '' && telefonoValido && emailValido) {
            alert("Todos los campos son correctos.")

            agarrandoDatos(nombreInput, telefonoInput, emailInput);
            limpiarDatos(nombreInput, telefonoInput, emailInput);
        }
    }

    function limpiarDatos(nombre, telefono, email) {
        nombre.value = "";
        telefono.value = "";
        email.value = "";
    }


    function agarrandoDatos(nombre, telefono, email){
        const form = new FormData();
        form.append('nombre', nombre.value)
        form.append('telefono', telefono.value)
        form.append('email', email.value)

        enviandoDatosServer(form)
    }
 
    //Enviando datos al servidor:
    function enviandoDatosServer(form){
        fetch("./app/trigger/person3.php?action=ADD",{
            method:'POST',
            body: form
        })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))
    }

</script>