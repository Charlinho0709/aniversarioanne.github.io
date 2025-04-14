<html>
    <head>
        <title>Aniversário de Anne</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <style>
            @font-face {
                font-family: "Barbie";
                src: url('fonts/Retro_Dolly.otf') format("opentype");
            }

            body,html{
                padding: 0;
                margin: 0;
                width: 100vw;
                height: 100vh;
            }
            main.content {
                position: relative;
                display: flex;
                height: 100%;
                width: 100%;
                align-content: center;
                align-items: center;
                justify-content: center;
                background-image: url('imagens/background_4.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                flex-direction: column;
                flex-wrap: wrap;
            }

            main.content h3{
                font-family: "Barbie", sans-serif;
                color: white;
                text-shadow: 1px 1px 5px #000;
                text-align: center;
                font-size: 2rem;
                order: 1;
                margin: 0;
                padding: 10px;
                z-index: 20;
            }

            .container-contador {
                display: flex;
                gap: 1.9rem;
                font-size: 5rem;
                font-family: "Barbie";
                color: white;
                text-shadow: 1px 1px 5px #000;
                order: 2;
                padding: 17px;
                z-index: 20;
            }

            .label{
                font-size: 2.5rem;
            }

            .numero{
                text-align: center;
            }

            .overlay{
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.35);
                z-index: 10;
                top: 0;
                left: 0;
                display: block;
            }

            @media screen and (max-width: 700px) {
                .container-contador{
                    padding: 0 !important;
                    width: 100%;
                    justify-content: space-between;
                    font-size: 2.5rem;
                    gap: unset;
                }
                .label{
                    font-size: 1.5rem;
                }

                .dias{
                    padding-left: 15px;
                }

                .segundos{
                    padding-right: 15px;
                }
            }
        </style>
    </head>
    <body>
        <main class="content">
            <h3>Oi, mundo! O aniversario de Anne chega em: </h3>
            <div class="container-contador">
                <div class="dias">
                    <div class="numero"></div>
                    <div class="label">Dias</div>
                </div>
                <div class="horas">
                    <div class="numero"></div>
                    <div class="label">Horas</div>
                </div>
                <div class="minutos">
                    <div class="numero"></div>
                    <div class="label">Minutos</div>
                </div>
                <div class="segundos">
                    <div class="numero"></div>
                    <div class="label">Segundos</div>
                </div>
            </div>
            <div class="overlay"></div>
        </main>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>
            let aniversario = new Date('2025-05-31 00:00:00');

            let contagem = setInterval(function(){
                let agora = new Date();
                let diferenca = aniversario - agora;

                let segundos = Math.floor((diferenca / 1000) % 60);
                let minutos = Math.floor((diferenca / (60 * 1000)) % 60);
                let horas = Math.floor(((diferenca / ( 60 * 60 * 1000)) % 24 ));
                let dias = Math.floor((diferenca / (24 * 60 * 60 * 1000)));

                $('.dias > .numero').text((dias < 10 ? "0" + dias : dias));
                $('.horas > .numero').text((horas < 10 ? "0" + horas : horas));
                $('.minutos > .numero').text((minutos < 10 ? "0" + minutos : minutos));
                $('.segundos > .numero').text((segundos < 10 ? "0" + segundos : segundos));
            }, 1000);
        </script>
    </body>
</html>