<?php

if($_POST){


        


        /*$token = "instance79397";
        $instance_id= "gc1e82fuaqq7r1s6";
        $client = new UltraMsg\WhatsAppApi($token,$instance_id);*/



        if(isset($_POST["name"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $id = $_POST["id_ser"];
        }else{
            $name = " ";
            $email = " ";
            $phone = " ";
            $id = "0";
        }

        $message = ["¡POTENCIA TU NEGOCIO DIGITAL CON DIGIMEDIA!  📈


        \n¿Tus redes sociales no generan  interacciones? En DigiMedia, estamos comprometidos en potenciar tu presencia en línea a través de la gestión de redes sociales. Al confiarnos la administración de tus plataformas digitales, experimentarás un aumento significativo en la visibilidad y participación de tu marca. 

        \nNuestros beneficios exclusivos:

        \n- 🚀 Potenciación de tu presencia digital.
        \n- 🚀 Contenido estratégico y de valor.

        \n¡Transformemos juntos tu presencia digital! ¡Háznoslo saber!  ",
        "¡IMPULSA TU ÉXITO ONLINE CON DIGIMEDIA! 🌐

        \n¿Estás cansado de enfrentar problemas con tu sitio web que afectan el crecimiento de tu negocio?  En Digimedia, no solo creamos sitios web, ¡forjamos plataformas de impacto! 📈.                       

        \n¿Por qué elegir nuestro servicio de desarrollo web? 🚀

        \n📌Diseño impactante con resultados asombrosos
        \n📌Experiencia del usuario que deja huella

        \nEstamos emocionados de ser tu socio en tu próximo éxito online. Si estás listo para un desarrollo web que marque la diferencia, ¡contáctanos ahora! 
        ",
        "¡CRECE TU NEGOCIO CON DIGIMEDIA!📈

        \nEn DigiMedia Marketing, estamos comprometidos en el mejor desarrollo en marketing  digital. Tendremos el placer de armar estrategias que promuevan tu marca a través de diferentes entornos digitales.

        \n¿Las estrategias que planteas no logran los objetivos de tu empresa?, entonces adquiere nuestro servicio con beneficios exclusivos🙌: 

        \n📌Mejorar tu visibilidad online
        \n📌Vínculo de lealtad con los clientes 

        \n¡No te quedes atrás en la era digital y transforma tu marca con soluciones innovadoras! Contáctanos y que comience tu presencia digital.


        ",
        "¡DESTACA TU NEGOCIO DIGITAL CON DIGIMEDIA!🙌🏼
        \n¿Sientes que tu negocio no se diferencia del resto? ¡Haz que tu marca sea inolvidable !  
        \nEn DigiMedia, estamos preparados para llevar la identidad de tu marca a otro nivel. Somos especialistas en crear diseños irresistibles y branding cautivador.
        \nAdquiere nuestros beneficios exclusivos 🚀:               

        \n📌Diferenciación y Reconocimiento
        \nPrepárate para darle un giro a tu negocio con todos nuestros beneficios . ¡Contacte con nosotros !
        "
        ];

        echo $name.$email.$phone.$id;

       /* $to=$phone; 
        $body=$message[$id]; 
        $api=$client->sendChatMessage($to,$body);
        //print_r($api);*/



    

        // Enviar correo electrónico
        //echo json_encode([ "status" => true ]);


      


       
        

        
        

        if($id==2){
          $url1 = 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiZTZrnY2A4K0McC6bFqIwChjlYcFsBVjaL-4gVzl87zajaE32egRRBKmIWQ4sfxu3j3MWpvNyXIfbyGpSjw9VS1rFwxMmqREpt0ka-uVimP5wF7o7143ir50K5_AKyJ5ZWvTXKg7_1kh61reKojmQiX6Lr2QkmM6r_1GFPXb2HRGFlYH-SSi5UUEfqOc5S/s16000/flyer-modal-2-1.jpg';
          $url2 = 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_C0U0tfOZT92qeRr10AXjBfv2vytcekdRjiS_5lVJWii7PQ8Re6Pmi1sGX8K1FPyLO1KHS2txlW_2QP4AoCXWr6HEE6KEPLZriUVAubZnD-g4TS5PHDxXnOuBDyk06r5hEd0_koX0Wgaz5upF_fp1hAeRGwDkHCLP03dAM8Wf-01GhZ8Xp-KYFCrBuImA/s16000/flyer-modal-2-2.jpg';
          $url3 = 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgPmzYChZBt2sCjeZTDtVRvTRmss3MS7nt8vbXMDcBZnUCz-fRfXThAla14Vvgg4My4qKQP8CPyj5hfbEMVXihUr931XQB1EsMvG1x81ifR4RE7hDuaYdfO5EfnsqkCrgglyXj4MlPaxyZpmvr8nZ9ZfYled6CqCzrp_tm2UJFL3p9pBbpzTugpMWEDOiSp/s16000/flyer-modal-2-3.jpg';
        }else if($id==3){
          $url1 = 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg092QZpO6nk2lCpzY4OoufMEqQ4t-4Cd6a2ZzPY1SKNRb40qJeU3dlHEdaFtnZTTZUbX1kbn3TXZ9Z4eVzgJTflVTsQBqZbd2yFnHUTHhtXGzLOm3G7AR5bQVVoGEU8dLJLxSBgLeuFv1YEzy-wtCy2QCUyAoSWRL4Ckc5a9b9XlJ62WmAU_zJG4z4e-Om/s16000/flyer-modal-3-1.jpg';
          $url2 = 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtreOOM1Y5NhyImyUSZ2VABJ7cJJz6ZIIV5wU87hCWEo35dY06KfKe6ouLUJpEGXscUfVwdTqom57OkynHHJc5EL0BzSmhnanSTTH6hbgrJRXVpqqQQ1t-QDFBN25m_4SzEeHZQUsdA5gaQlrZFic6yvsFu44lrXDr-8yHgG7qG21q0tEAgvg2a7yXrBDI/s16000/flyer-modal-3-2.jpg';
          $url3 = 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvG2owRjMlCU0lJuon4pDZhNj6-VsJIIDoHCFcTWyQAy7srnlkRxXJjoTB6eCQHXauDqLOeJ2VcJ6F6-5SiuoCBLcZvTpfPu3UQcg53yJmdKGaJqa-zJQTYptfztA1bpJgPzGNi_aP2BA2qpZ809flOkxkmA7rxZlE-jI87UhJtc8c2BQnUj_UeoSikvxj/s16000/flyer-modal-3-3.jpg';
        }
        function laravel1_img($phone,$url){
           
            $params=array(
            'token' => 'gc1e82fuaqq7r1s6',
            'to' => $phone,
            'image' => $url,
            'caption' => '',
            'priority' => '',
            'referenceId' => '',
            'nocache' => '',
            'msgId' => '',
            'mentions' => ''
            );
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.ultramsg.com/instance79397/messages/image",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($params),
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
            echo $response;
            }
        }
        function laravel2_img($phone,$url){
           
          $params=array(
          'token' => 'gc1e82fuaqq7r1s6',
          'to' => $phone,
          'image' => $url,
          'caption' => '',
          'priority' => '',
          'referenceId' => '',
          'nocache' => '',
          'msgId' => '',
          'mentions' => ''
          );
          $curl = curl_init();
          curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.ultramsg.com/instance79397/messages/image",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => http_build_query($params),
          CURLOPT_HTTPHEADER => array(
              "content-type: application/x-www-form-urlencoded"
          ),
          ));

          $response = curl_exec($curl);
          $err = curl_error($curl);

          curl_close($curl);

          if ($err) {
          echo "cURL Error #:" . $err;
          } else {
          echo $response;
          }
        }
        function laravel3_img($phone,$url){
            
          $params=array(
          'token' => 'gc1e82fuaqq7r1s6',
          'to' => $phone,
          'image' => $url,
          'caption' => '',
          'priority' => '',
          'referenceId' => '',
          'nocache' => '',
          'msgId' => '',
          'mentions' => ''
          );
          $curl = curl_init();
          curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.ultramsg.com/instance79397/messages/image",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => http_build_query($params),
          CURLOPT_HTTPHEADER => array(
              "content-type: application/x-www-form-urlencoded"
          ),
          ));

          $response = curl_exec($curl);
          $err = curl_error($curl);

          curl_close($curl);

          if ($err) {
          echo "cURL Error #:" . $err;
          } else {
          echo $response;
          }
        }

        laravel1_body($phone,$message,$id);
        laravel1_img($phone,$url1);
        laravel1_img($phone,$url2);
        laravel1_img($phone,$url3);
}
       