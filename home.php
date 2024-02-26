<main class="main" id="inicio">
    <div class="banner">
        <img src="./ASSETS/home-banner-2.png" alt="serv-banner">
    </div>
    <div class="home-main-inner">
        <div class="home-photo-div" style="color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
            <h2>¿Quienes somos?</h2>
            <br>
            <p>Somos Matíss, un salon con un estilo americano único, con un ambiente cálido, hogareño y familiar; te ofrecemos la solución ideal para el desarrollo de eventos sociales y corporativos. Acompañamos a nuestros clientes con la búsqueda del mejor espacio que se ajuste a las necesidades del evento. Nos distinguimos por nuestra calidad de atención al cliente, nuestro estilo, nuestra comida y los servicios que tenemos para ustedes. Tenemos capacidad de hasta 100 personas, catering, barra de tragos y muchos servicios más que podes ver acá. Estamos ubicados en Sarrachaga 5562, Isidro Casanova, La Matanza. Te esperamos para conocer el espacio y asesorarte con todo lo relacionado a tu evento!</p>
        </div>
    </div>
    <div class="gmap_canvas mapouter">
        <img src="./ASSETS/<?=$mode == 0? 'piel-arabesque.png':'azul-arabesque.png'?>" alt="arabesque" class="arabesque">
        <iframe width="100%" height="378" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=sarrachaga%205562,%20isidro%20casanova+(My%20Business%20Name)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        </iframe>
        <img src="./ASSETS/<?=$mode == 0? 'piel-arabesque.png':'azul-arabesque.png'?>" alt="arabesque" class="arabesque arab-down">
        <style>
            .mapouter {
                text-align: center;
                position: relative;
                height: 378px;
                width: 100%;
            }
            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 100%;
                width: 100%;
            }
            .gmap_canvas iframe {
                max-width: 1700px;
                border-top: 5px solid var(--piel3);
                border-bottom: 5px solid var(--piel3);
            }
        </style>
</div>
</main>