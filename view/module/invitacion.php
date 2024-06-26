<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#333332" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Licorice&display=swap" rel="stylesheet">
    <title>Cesar y Yolanda</title>
    <link rel="stylesheet" href="view/css/invite.css">

    <!-- <meta property="og:title" content="Boda de Cesar y Yolanda">
    <meta property="og:description"
          content="Sábado, 14 de septiembre de 2024"> -->
    <meta property="og:locale" content="es_ES" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
    <script src="https://kit.fontawesome.com/2828f7885a.js" integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="view/css/main_page.css" />
    <link rel="stylesheet" type="text/css" href="view/css/jquery.countdown.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="view/js/jquery.coundown.js"></script>
    <!-- Begin Script for Countdown -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-23064379-20');
    </script>
    <!-- Begin Script for Countdown -->

    <!-- Github Button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
        <!-- Begin Hero -->
        <section class="hero is-large">
            <!-- Begin Hero Content-->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="subtitle">Invitación de boda</h1>
                    <img src="view/image/img_avatar2.png" class="rounded-circle" alt="">
                    <h4 class="subtitle tempatwaktu">
                        Domingo, 17:00
                        <br>
                        5 de Mayo 2024
                        <br>
                        IPUC Bello Porvenir
                    </h4>
                    <audio controls autoplay>
                        <source src="view/module/sound.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <!-- Start Countdown -->
                <div class="container has-text-centered">
                    <ul id="hitungmundur">
                        <li><span class="days">00</span>
                            <p class="days_text"></p>
                        </li>
                        <li class="separator">:</li>
                        <li><span class="hours">00</span>
                            <p class="hours_text"></p>
                        </li>
                        <li class="separator">:</li>
                        <li><span class="minutes">00</span>
                            <p class="minutes_text"></p>
                        </li>
                        <li class="separator">:</li>
                        <li><span class="seconds">00</span>
                            <p class="seconds_text"></p>
                        </li>
                    </ul>
                    <div class="spasi">
                    </div>
                    <script type="text/javascript">
                        // TODO Date format: 07/27/2017 17:00:00
                        // TODO Your Timezone Offset
                        var now = new Date();
                        var date_wed = '05/05/2024 17:00:00';

                        $('#hitungmundur').countdown({
                            date: date_wed,
                            offset: -5,
                            day: 'Dias',
                            days: 'Dias',
                            hour: 'Horas',
                            hours: 'Horas',
                            minute: 'Minutos',
                            minutes: 'Minutos',
                            second: 'Segundos',
                            seconds: 'Segundos'
                        }, function() {
                            //alert('Done!');
                        });
                    </script>
                </div>
                <!-- End Countdown -->
            </div>
            <!-- End Hero Content-->
            <!-- Begin Hero Menu -->
            <div class="hero-foot ">
                <div class="hero-foot--wrapper">
                    <div class="columns">
                        <div class="column is-12 hero-menu-desktop has-text-centered">
                            <ul>
                                <li>
                                    <a href="#home">inicio</a>
                                </li>
                                <li>
                                    <a href="#ubicacion">ubicación</a>
                                </li>
                                <li>
                                    <a href="#rsvp">confirmar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Menu -->
        </section>
        <!-- End Hero -->
    </div>
    <!-- End Header -->

    <!-- Begin Main Content -->
    <div class="main-content">
        <!-- Begin regular-section-->
        <section class="section-light regular-section has-text-centered has-vertically-aligned-content" id="regular-section">

            <div data-aos="fade-up" data-aos-easing="linear">
            </div>

            <span class="space40px"></span>

            <p class="letter padding-left-right-10-perc" data-aos="fade-up" data-aos-easing="linear">
                El amor está en el aire, y nuestros corazones están llenos de alegría mientras nos embarcamos juntos en el
                viaje de nuestras vidas.
                <br>
                <br>
                Al dar este próximo paso en nuestro viaje, queremos que seas parte de los recuerdos preciados que crearemos
                en nuestro día de boda. Tu presencia significará mucho para nosotros.
                <br>
                <br>
                El amor nos unió y ahora queremos sellar nuestro compromiso ante Dios y nuestros seres queridos.
                <br>
                <br>
                <b>Te unirías a nosotros para celebrar nuestro amor?</b>
            </p>
        </section>
        <!-- End regular-section-->

        <!-- map section -->

        <div class="section-map" data-aos="fade-up" data-aos-easing="linear" id="ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.433835798925!2d-75.56746182500868!3d6.337811193651898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442faf19e46b91%3A0x7ae678f7650ce387!2sIglesia%20Pentecostal%20Unida%20de%20Colombia%20-%20El%20Porvenir%20Bello!5e0!3m2!1ses-419!2sco!4v1708821454899!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <!-- Inicio de la sección RSVP -->
        <section class="section-light contact" id="rsvp">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12 prolog">
                        <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">
                            CONFIRMACIÓN DE ASISTENCIA</h1>
                    </div>
                    <div class="column is-12 prolog has-text-centered letter" data-aos="fade-up" data-aos-easing="linear">
                        <p class="h2">
                            Por favor, confirma tu asistencia una semana antes.
                        </p>
                        <?php
                                                            $code = $_GET["code"];
                                                            if (isset($code)) {
                                                                $_SESSION['invitacion'] = true;
                                                            }
                                                            $data = new invitadoController();
                                                            if (gettype($data) > 0) {
                                                                foreach ($data->showInvitados() as $key => $value) {
                                                                    if ($value["codigo"] == $code) { ?>
                        <div class="space40px"></div>
                        <form name="RSVPesp" method="POST" action="evalue()">
                            <input type="hidden" name="subject" value="RSVP spanish" />
                            <p>
                                <label>Tu nombre: </label>
                                <?php        print '<b id = "invitado">' . $value["invitado"] . '</b></p>
                                            <p>
                                                <label>Tu teléfono: <input type="tel" name="phone" /></label>
                                            </p>
                                            <p>
                                                <label>Personas que asisten: <b id = "acompanantes">' . $value["acompanantes"] . '</b></label>
                                            </p>
                                            <p><label>Mesa asignada: </label> <b id = "mesa">' . $value["mesa"] . '</b></p>';
                                                                    } else {

                                                                        try {
                                                                            $_SESSION['invitacion'] = false;
                                                                            unset($_SESSION['invitacion']);
                                                                        } catch (Exception $th) {
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            
                                                            ?>

                            <p>
                                <label>Asistirás a la boda?
                                    <select name="attendance" id="attendance" onchange="Selected()">
                                        <option value="">Seleccionar...</option>
                                        <option value="yes">Sí</option>
                                        <option value="no">No</option>
                                    </select>
                                </label>
                            </p>
                            <p>
                                <button type="button" class="button btn-whatsapp" onclick="mensaje()">Enviar</button>
                            </p>
                        </form>

                        <div class="space40px"></div>

                        <p class="h2">
                            Por favor, mándanos un mensaje si tienes alguna pregunta:
                        </p>

                        <a href="https://api.whatsapp.com/send?phone=573133911205&text=Hola%20Cesar%20,&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
                            <i class="fab fa-whatsapp"></i>
                            &nbsp; a Cesar
                        </a>

                        <a href="https://api.whatsapp.com/send?phone=573127554881&text=Hola%20Yola,&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
                            <i class="fab fa-whatsapp"></i>
                            &nbsp; a Yola
                        </a>
                        <div class="space40px"></div>

                        <div class="space40px"></div>
                        <p class="h2" data-aos="fade-up" data-aos-easing="linear">
                            Con mucho cariño,
                            <br>
                        <p class="licorice-regular">5CDY11</p>
                        </p>
                        <div class="space40px"></div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Fin de la sección RSVP -->
    </div>
    <!-- End Main Content -->
    <!-- Begin Footer -->
    <div class="footer">
    </div>
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="view/js/main_page.js"></script>
    <script src="view/js/crud.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: "ease-out",
            duration: 800,
        });
    </script>
</body>

</html>