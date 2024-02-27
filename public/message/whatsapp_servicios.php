<?php

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        exit(json_encode(null));
    }

    require_once('./ultramsg.class.php');

    $token      ="8c6l43cmaa441qca"; // Ultramsg.com token
    $instance_id="instance79485"; // Ultramsg.com instance id
    $client     = new UltraMsg\WhatsAppApi($token,$instance_id);

    $phone      = $_POST['phone'];
    $service = $_POST['service'];
    $to=$phone; 

    if ($service == 1) {
    // texto
    $body="
_*¡IMPULSA TU ÉXITO ONLINE CON DIGIMEDIA!*_ 🌐
¿Estás cansado de enfrentar problemas con tu sitio web que afectan el crecimiento de tu negocio?  En Digimedia, no solo creamos sitios web, ¡forjamos plataformas de impacto! 📈.
        
¿Por qué elegir nuestro servicio de desarrollo web? 🚀
📌Diseño impactante con resultados asombrosos
📌Experiencia del usuario que deja huella
        
*Estamos emocionados de ser tu socio en tu próximo éxito online. Si estás listo para un desarrollo web que marque la diferencia, ¡contáctanos ahora!*";
    
    // imagen
    $images = [
        [
            "to" => $phone,
            "image" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj72Ga0skRjXoSA4lfHicy1rVJ0kd5DcCKq7Tj8LAhtap-6L4lrRsnoD85TRihXDx1OWE3BdIhRz1j5IJEidAzv1du5Ya5VQBLBAxuGEG9xuK6v4gjpP9jB3dA6otzZXV3j1vxXkdvrpto8i2l3HtzNjmaTWaeX_-Mb0G6jGCifbxBt5Jzyr_fEoZgL7xhQ/s16000/flyer-modal-1-1.jpg",
            "caption" => "",
        ],
        [
            "to" => $phone,
            "image" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEggZAozhvwXsX_KVF_unYAOXhUspbAuw03Gkouv51yzLaGHdmhzW-0nw63eD99WV7nywIIUBcy75xO2XCWG3KxosXfty7Kr0XUOpWeMXzNYaNhasB4j6sQQogbEsxvlfhrOXSgYmjv67ioEGowFeV2tl6-b568yNZVXvSaqHmZDcwpPb5bwm-MJPXoKvid7/s16000/flyer-modal-1-2.jpg",
            "caption" => "",
        ],
        [
            "to" => $phone,
            "image" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhovmlEgV271V1uhTZBHYgNiPVC1wWYQimBUX4cCEs9ozmaVKOQPFT1ZDP5SUs-cnVgttagVS985vwePSAwRRJyFslHtwkY900Ll4aKpjh1wK40CYayhsBqJy4DI_Y1zI9INeQTXwGlfBDGXAlgvMaY-lMMtu5jcRZM2Q_Dcl-CCP8NtAQWuSRGNX2WRHlj/s16000/flyer-modal-1-3.jpg",
            "caption" => "",
        ]
    ];

    } elseif ($service == 4) {
    // texto
    $body="
_*¡DESTACA TU NEGOCIO DIGITAL CON DIGIMEDIA!*_ 🙌🏼
¿Sientes que tu negocio no se diferencia del resto? ¡Haz que tu marca sea inolvidable!  
En DigiMedia, estamos preparados para llevar la identidad de tu marca a otro nivel. Somos especialistas en crear *diseños irresistibles y branding* cautivador.
    
Adquiere nuestros beneficios exclusivos 🚀:               
📌Diferenciación y Reconocimiento
    
*Prepárate para darle un giro a tu negocio con todos nuestros beneficios ¡Contacte con nosotros!*";

    // imagen
    $images = [
        [
            "to" => $phone,
            "image" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiq1Ug8AXStj8VhqjcBk_cptFzr5u1Ue_07ENc-nFqZvyHhuK0VJTxkF5VDs5A7fb5pTUrJFGw5t1WtkHPvXbxxIz5lOM6MUfb6a2XNVlmXpClZ-ujoblAL8tAQgfQyglAisTFmbRB4AVGBP3Mzde0wrNdZD93BjGoBdiP-4ZOlTnHDZ7LVhJqr-ehL73mo/s16000/flyer-modal-4-1.jpg",
            "caption" => "",
        ],
        [
            "to" => $phone,
            "image" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8p8zKOLYq9AULleN9EOvk9PybKHES_p7bpEuGrSEh90q7ubLAAVKYPjPtQF2aBMoSQK2V1MiO9tNV32jSViZfdkJDTRE9B1i5uND7NCj79Cnm8rRJ1xl5FSIED85E_D2I5gLUiX0mxosKJJdEUheiacMsjPXKEV8M8A7G8pT8plpPsCrfv4OkygHLLMNw/s16000/flyer-modal-4-2.jpg",
            "caption" => "",
        ],
        [
            "to" => $phone,
            "image" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgU0x4yrurrYawAgqDVER5cePp69tExxF5JtYRKNWxFXPaAcKdZE-bMoiIZtfMDhM97R9U4MPELvxub8iHeTulwSx2ClJpz4MKd6URFHl_Cz0I4QnfoF-3Is1ZR4nZz9YrTdEyAxO19F4rI6Ft9gtIPhKuBfHqnvwCcffQYCn_zItT_sbfB-y4_t1_ThQyK/s16000/flyer-modal-4-3.jpg",
            "caption" => "",
        ]
    ];
    
    }
   
    // enviar mensaje e imagenes
    $api=$client->sendChatMessage($to,$body);
    foreach ($images as $key => $image) {
        $api=$client->sendImageMessage($image['to'],$image['image'],$image['caption']);
    }

    echo json_encode([ "status" => true ]);