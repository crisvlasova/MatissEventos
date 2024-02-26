<main class="cont-main main" id="contacto" style="color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
    <h2>Contactanos!</h2>
    <!-- <div class="cont-info">
        <div class="footer-contact">
            <h3>
                Información adicional de contacto:
            </h3>
            <p>
                <img src="./ASSETS/whatsapp-logo.png" alt="whatsapp">
                <a href="https://api.whatsapp.com/send?phone=5491124596656" style="color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
                    (+54-11) 2459-6656
                </a>

            </p>
            <p>
                <img src="./ASSETS/phone-logo.png" alt="phone">
                @matisseventos
            </p>
            <p>
                <img src="./ASSETS/mail-logo.png" alt="mail">
                <span>
                    <a href="mailto:matisseventos@gmail.com" rel="noopener noreferer" target="_blank" style="color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
                        matisseventos@gmail.com</a>
                </span>
            </p>
            <p>
                <img src="./ASSETS/ubi-logo.png" alt="ubi">
                <a href="https://www.google.com/maps?q=Lugano+61+-+(1832)+-+Lomas+de+Zamora,+Buenos+Aires+-+Argentina&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQLhhA0gEIMTEzNmowajGoAgCwAgA&um=1&ie=UTF-8" rel="noopener noreferer" target="_blank" style="color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
                    Sarrachaga 5562, B1765. <br>
                    Isidro Casanova. <br>
                    Pcia. de Buenos Aires. <br>
                    Argentina.
                </a>
            </p>
        </div>
    </div> -->
    <form action="/index.php?page=gracias" id="cont-form" method="POST" onsubmit="validateForm(event); return false;">
        <div class="cont-input row">
            <div>
                <label for="name" class="required">&nbsp;&nbsp;Nombre</label>
                <input type="text" name="name" id="name-inpt" pattern="^[a-zA-Z\s]{3,30}" placeholder="Nombre" style="background-color:<?=$mode == 0? 'var(--azul2)':'var(--piel2)'?>;color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
            </div>

            <div>
                <label for="name" class="required">&nbsp;&nbsp;Apellido</label>
                <input type="text" name="surname" id="surname-inpt" pattern="^[a-zA-Z\s]{3,30}$" placeholder="Apellido" style="background-color:<?=$mode == 0? 'var(--azul2)':'var(--piel2)'?>;color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
            </div>
        </div>

        <div class="cont-input row">
            <div>
                <label for="name" class="required">&nbsp;&nbsp;Teléfono</label>
                <input type="number" name="tel" id="tel-inpt" pattern="^(\+54|0054|0)(9[11-15]|11|[2368]\d)(\d{8})$"
                    placeholder="Teléfono" style="background-color:<?=$mode == 0? 'var(--azul2)':'var(--piel2)'?>;color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
            </div>
            <div>
                <label for="name" class="required">&nbsp;&nbsp;E-mail</label>
                <input type="email" name="email" id="email-inpt" placeholder="E-mail" style="background-color:<?=$mode == 0? 'var(--azul2)':'var(--piel2)'?>;color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>">
            </div>

        </div>

        <div class="email-inpt row">
            <label for="consult" class="required">&nbsp;&nbsp;Consulta</label>
            <textarea type="text" name="consult" pattern="^[a-zA-Z0-9\s]{3,300}$"
                placeholder="Escriba aquí su consulta." id="consult-textarea" rows="5"
                oninput="actualizarContador()" style="background-color:<?=$mode == 0? 'var(--azul2)':'var(--piel2)'?>;color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>"></textarea>
            <div id="contador-caracteres">&nbsp;&nbsp;0/300</div>
        </div>

        <input type="hidden" name="auth" id="auth-inpt" value="auth-true">

        <!-- <div class="g-recaptcha" data-sitekey="6LcCIlkpAAAAAHS9LxS8Wy3ItZbHV3RROByTLGH1"></div> -->

        <div class="cont-buttons">
            <img src="./ASSETS/<?= $mode == 0 ? 'button-arab-light.png' : 'button-arab-dark.png' ?>" alt="arabesque"class="button-arab">
            <button type="button" style="color:<?=$mode == 0? 'var(--azul1)':'var(--piel1)'?>;border: 3px solid var(--piel3);background-color:<?=$mode == 0? 'var(--piel1)':'var(--azul1)'?>; padding: 3px 25px; font-family:'Alegreya SC', serif;font-size: larger">
                Enviar
            </button>
            <img src="./ASSETS/<?= $mode == 0 ? 'button-arab-light.png' : 'button-arab-dark.png' ?>" alt="arabesque"class="button-arab button-arab-down">
        </div>
        <p class="required">
            Campos obligatorios
        </p>
    </form>
</main>

<script>
    function actualizarContador() {
        var textarea = document.getElementById("consult-textarea");
        var contador = document.getElementById("contador-caracteres");
        var longitud = textarea.value.length;
        contador.textContent = longitud + "/300";
    }

    let validates = {
        email: /^[a-zA-Z0-9._%+-]{1,64}@[a-zA-Z0-9.-]{1,64}[a-zA-Z]{2,5}$/,
        consult: /^[a-zA-Z0-9\s]{3,300}$/
    }

    function validateForm(event) {
        event.preventDefault();
        let ok = 1;
        let form = event.currentTarget;
        let inputs = form.querySelectorAll("input, textarea");

        const captchaResponse = grecaptcha.getResponse();

        for (let i = 0; i < inputs.length; i++) {
            let input = inputs[i];
            let inputName = input.name;
            if (inputName === "email" || inputName === "consult") {
                if (input.validity.patternMismatch || !validates[inputName].test(input.value)) {
                    alert("El campo '" + input.placeholder + "' no cumple con el patrón.");
                    return ok = 0;
                }
            }

            if (!input.checkValidity()) {
                alert("El campo '" + input.placeholder + "' no es válido. Por favor, complétalo correctamente.");
                return ok = 0;
            }
        }
        if (ok === 1 && captchaResponse.length > 0 && document.getElementById("auth-inpt").value === "auth-true") {
            document.getElementById("auth-inpt").vasalue = "";
            // form.submit();
        } else {
            alert("Por favor complete el Captcha.");
        }
    }
</script>