<header style="background-color:<?= $mode == 0 ? 'var(--azul1)' : 'var(--piel1)' ?>;">
    <main class="header-main main">
        <div class="header-logo">
            <a href="/index.php">
                <img src="./ASSETS/<?= $mode == 0 ? 'matiss-logo-light.png' : 'matiss-logo-dark.png' ?>"
                    alt="matiss-logo" class="logo-nav">
            </a>
        </div>

        <nav class="header-nav" id="header-nav">
            <?
            $nav = ["inicio", "servicios", "galeria", "contacto"];
            for ($i = 0; $i < count($nav); $i++) {
                $mod = $mode == 0 ? 'var(--piel1)' : 'var(--azul1)';
                echo "
                    <a href='/MATISS/#$nav[$i]'>
                        <span style='text-transform:uppercase;color:$mod'>
                            $nav[$i]
                        </span>
                    </a>
                    ";
            }
            ?>
            <!-- <div onchange="handleMode(event)">
                <label class="switch">
                    <input type="checkbox" id="checkbox" <?=$mode == 1? 'checked' : '' ?>>
                    <span class="slider round"></span>
                </label>
            </div> -->

        </nav>


        <div class="responsive-header">
            <button class="responsive-menu-button" onclick="handleResMenu(event)">
                <img src="./ASSETS/menu-light.png" alt="menu-logo">
            </button>
        </div>
        <nav class="header-nav inactive" id="header-nav-res"
            style="background:<?= $mode == 0 ? 'var(--azul1)' : 'var(--piel1)'; ?>">
            <div class="header-nav-inner">
                <?
                $nav = ["inicio", "servicios", "galeria", "contacto"];
                for ($i = 0; $i < count($nav); $i++) {
                    $mod = $mode == 0 ? 'var(--piel1)' : 'var(--azul1)';
                    echo "
                <a href='/MATISS/#$nav[$i]'>
                <span style='text-transform:uppercase;color:$mod'>
                $nav[$i]
                </span>
                </a>
                ";
                }
                ?>
                <!-- <div>
                    <label class="switch">
                        <input type="checkbox" id="checkbox" <?=$mode == 1? 'checked' : '' ?>>
                        <span class="slider round"></span>
                    </label>
                </div> -->
            </div>

        </nav>
    </main>
</header>
<script>
    function handleResMenu(event) {
        let resMenu = document.getElementById("header-nav-res");
        if (resMenu.classList.contains("inactive")) {
            resMenu.classList.remove("inactive");
            resMenu.classList.add("active");
        } else {
            resMenu.classList.remove("active");
            resMenu.classList.add("inactive");
        }
    }

    function handleMode(event) {

        let checkbox = document.getElementById("checkbox");
        let checked = checkbox.checked;

        // var form = document.createElement('form');
        // form.method = 'post';
        // form.action = '';
        // form.style.display = 'none';

        // var input = document.createElement('input');
        // input.type = 'hidden';
        // input.name = 'clicEnDiv';
        // input.value = checked;
        // form.appendChild(input);

        // document.body.appendChild(form);
        // form.submit();
    }

</script>