<section class="hero hero-servicios">
    <img src="./public/img/ds_web.webp" alt="Diseno y desarrollo">
    <div class="container-hero">
        <div>
            <h1>Diseño y desarrollo web</h1>
        </div>
    </div>
</section>

<section class="con-anun3 anuncio-diseno-desarrollo">
    <p>Consolida tu presencia web, diseña con nosotros</p>
    <div class="bota1">
        <a href="contacto.php" title="¡Contactanos!" class="boton__2">Incrementa tus ventas</a>
    </div>
</section>

<script>
const mensajesDisenoDesarrollo = [{
        mensaje: "Consolida tu presencia web, diseña con nosotros",
        mensajeBtn: "Incrementa tus ventas",
    },
    {
        mensaje: "Transforma tu sitio web en una experiencia única",
        mensajeBtn: "¡Descubre cómo!",
    },
    {
        mensaje: "Dale vida a tu sitio web con diseño profesional",
        mensajeBtn: "¡Aumenta tu éxito!",
    },
];

const cambiarMensajeDisenoDesarrollo = () => {
    // Obtener elementos donde se mostrarán los elementos
    var mensajeP = document.querySelector(".anuncio-diseno-desarrollo p");
    var mensajeBtn = document.querySelector(
        ".anuncio-diseno-desarrollo .bota1 a"
    );

    // Generar un número aleatorio para seleccionar un objeto de mensajes
    var indiceAleatorio = Math.floor(
        Math.random() * mensajesDisenoDesarrollo.length
    );

    // Mostrar el primer mensaje aleatorio en el elemento p
    mensajeP.textContent = mensajesDisenoDesarrollo[indiceAleatorio].mensaje;

    // Mostrar el primer mensaje aleatorio en el elemento btn
    mensajeBtn.textContent = mensajesDisenoDesarrollo[indiceAleatorio].mensajeBtn;
};

document.addEventListener("DOMContentLoaded", () => {
    cambiarMensajeDisenoDesarrollo();
});
</script>