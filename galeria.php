<main class="inst-main main" id="galeria">
    <div class="home-main-inner">
        <div class="home-photo-div" style="color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
            <div>
                <h2>Nuestra galería de fotos</h2>
            </div>
            <br>
            <div class="home-photo-grid">
               <?
                $galeriaDir = scandir("ASSETS/galeria",SCANDIR_SORT_DESCENDING);
                $galeriaDir = array_diff($galeriaDir, ['.', '..']);
                // echo json_encode($galeriaDir);
                for ($i=0; $i < count($galeriaDir); $i++) { 
                    $foto = $galeriaDir[$i];
                    echo "<img src='./ASSETS/galeria/$foto' alt='$foto'>";
                }
               ?>
               
            </div>
            <!-- <div>
                <button>Ver más ↓</button>
            </div> -->
        </div>
    </div>


    
    <div class="center-arab">
        <img src="./ASSETS/<?= $mode == 0 ? 'piel-arabesque.png' : 'azul-arabesque.png' ?>" alt="arabesque"class="arabesque">
            <div class="banner">
                <img src="./ASSETS/banner-barra.png" alt="barra">
            </div>
        <img src="./ASSETS/<?= $mode == 0 ? 'piel-arabesque.png' : 'azul-arabesque.png' ?>" alt="arabesque" class="arabesque arab-down">
    </div>
</main>