<?php

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        exit(json_encode(null));
    }

    require_once('./ultramsg.class.php');

    $token      ="4akheqndnhsearlw"; // Ultramsg.com token
    $instance_id="instance49499"; // Ultramsg.com instance id
    $client     = new UltraMsg\WhatsAppApi($token,$instance_id);

    $phone      = $_POST['phone'];

    $messages = [
        [
            "to" => $phone,
            "body" => "¡Hola! Gracias por tu interés en Digimedia. Somos una empresa de marketing digital especializada en servicios como SEO, redes sociales, publicidad online y más. Estamos encantados de ayudarte. Por favor, déjanos tu consulta y te responderemos a la brevedad posible. ¡Esperamos trabajar contigo pronto! \n https://www.digimediamkt.com/img/Flyer%201.webp",
        ],
        [
            "to" => $phone,
            "body" => "¡Hola! ¡Bienvenido al mundo de Digimedia! Somos un equipo apasionado por el marketing digital y estamos aquí para hacerte brillar en línea. ¿Tienes curiosidad sobre nuestros servicios? ¡No dudes en preguntar! Estamos listos para guiarte en el emocionante viaje de impulsar tu presencia digital. ¡Déjanos tu mensaje y comencemos esta aventura juntos! \n https://www.digimediamkt.com/img/Flyer%202.webp",
        ],
        [
            "to" => $phone,
            "body" => "¡Bienvenido al mundo de Digimedia! Somos un equipo apasionado por el marketing digital y estamos aquí para hacerte brillar en línea. ¿Tienes curiosidad sobre nuestros servicios? ¡No dudes en preguntar! Estamos listos para guiarte en el emocionante viaje de impulsar tu presencia digital. ¡Déjanos tu mensaje y comencemos esta aventura juntos! \n https://www.digimediamkt.com/img/FLYER-03.webp",
        ]
    ];

    foreach ($messages as $key => $message) {
        $api=$client->sendChatMessage($message['to'], $message['body']);
    }

    echo json_encode([ "status" => true ]);