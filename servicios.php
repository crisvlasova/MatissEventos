<main class="inst-main main" id="servicios">
    <div class="home-main-inner">
        <div class="home-photo-div" style="color:<?=$mode == 0? 'var(--piel1)' : 'var(--azul1)' ?>">
            <div>
                <h2>Nuestros Servicios</h2>
                <br>
                <p>En Matíss ofrecemos una gran cantidad de servicios, los cuales se pueden personalizar a gusto. Entre
                    todos ellos tenemos:</p>
            </div>
            <div class="serv-div">
                <ul>
                    <li>Servicio de catering</li>
                    <li>Barra de tragos</li>
                    <li>Decoración</li>
                    <li>Disk Jockey + Sonido</li>
                    <li>Candy Bar</li>
                    <li>Servicios de belleza (maquillaje y peinado)</li>
                    <li>Seguridad</li>
                    <li>Animación</li>
                    <li>Fotografía y Video</li>
                    <li>Iluminación</li>
                    <li>Y mucho más!</li>
                </ul>
                <img src="./ASSETS/<?= $mode == 0 ? 'serv-img-light.png' : 'serv-img-dark.png' ?>" alt="servicios" class="servicios">
            </div>
        </div>
    </div>
    <div class="center-arab">
        <img src="./ASSETS/<?= $mode == 0 ? 'piel-arabesque.png' : 'azul-arabesque.png' ?>" alt="arabesque"class="arabesque">
            <div class="banner">
                <img src="./ASSETS/banner-atrapasuenos.png" alt="atrapasuenos">
            </div>
        <img src="./ASSETS/<?= $mode == 0 ? 'piel-arabesque.png' : 'azul-arabesque.png' ?>" alt="arabesque" class="arabesque arab-down">
    </div>
</main>