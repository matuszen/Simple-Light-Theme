<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE = edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <script src="https://www.google.com/recaptcha/api.js" async></script>
    <title>Simple Light Theme</title>
</head>

<body>
    <header>
        <h1 class="item">Light theme<span>.</span></h1>

        <nav class="menu">
            <div class="item"><a href="#about">About</a></div>
            <div class="item"><a href="#projects">Our projects</a></div>
            <div class="item"><a href="#contact">Contact us</a></div>
        </nav>

        <a href="#about"><svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg></a>

    </header>
    <main>
        <section id="about">
            <h2>About our company</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, distinctio at corporis illum,
                molestias amet perspiciatis suscipit culpa explicabo dolor enim aspernatur facere asperiores aliquid
                similique tempore voluptas quae repellat!
                Suscipit, quis harum? Ullam recusandae numquam possimus maxime non unde id totam iste ea accusamus,
                suscipit quis deserunt, quibusdam nemo animi dolorem, consequuntur beatae. Aliquid praesentium
                aspernatur quo obcaecati culpa!
                A vitae enim voluptatum quidem dignissimos exercitationem fuga dolor dolorum, provident nesciunt alias
                delectus harum quibusdam nisi itaque consectetur! Sed dolorem repellat aspernatur obcaecati, eos beatae
                quam necessitatibus sit sapiente?
                Quam vero itaque laudantium modi. Iste, doloremque quis. Quis fugit temporibus aliquid? Ut nemo quam qui
                autem ab? Nihil placeat optio sit illum officiis ducimus quaerat fugiat dolore unde esse!
                Soluta nisi sapiente sit tenetur, architecto repellat possimus labore necessitatibus cumque voluptatum
                odio quae cum repellendus provident rerum ut ipsum eum. Velit dolor sint eos quo vitae! Quam, fugiat.
                Quisquam.
                Dignissimos aspernatur corrupti quas nam debitis, modi quod at id delectus aliquam veniam vel et quo
                consequuntur? Ipsum quia obcaecati consectetur fugiat deserunt, minus, incidunt, reprehenderit ab
                repellat architecto similique.
                Totam, voluptatum pariatur. Asperiores ea explicabo quas dolor quaerat labore! Culpa dolore debitis
                totam quos maiores, reprehenderit quisquam impedit. Magnam et consequatur quaerat nihil consectetur.
                Tempore assumenda repellendus beatae expedita!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero nostrum debitis obcaecati fugit
                excepturi, dignissimos itaque ab labore aliquid sequi saepe quam quasi iste necessitatibus modi
                similique adipisci dolor? Quam vero itaque laudantium modi. Iste, doloremque quis. Quis fugit temporibus
                aliquid?</p>
        </section>

        <section class="image">
            <h1><span>We are the best<br></span> in our industry</h1>
        </section>

        <section id="projects">
            <h2>Take a look at our projects</h2>
            <div class="container">
                <div class="part">
                    <h1>Project <span>#1</span></h1>
                    <img src="img/project1.webp" alt="Project-1">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dignissimos pariatur labore
                        quae sequi a? Eligendi expedita porro impedit alias recusandae unde, dicta dolorum, quia aliquam
                        quos accusantium culpa.</p>
                </div>
                <div class="part">
                    <h1>Project <span>#2</span></h1>
                    <img src="img/project2.webp" alt="Project-2">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus ullam placeat tempora eligendi
                        provident rerum aperiam facere similique eum modi animi minima corrupti iure vero odit minus
                        alias, aliquam ea!</p>
                </div>
                <div class="part">
                    <h1>Project <span>#3</span></h1>
                    <img src="img/project3.webp" alt="Project-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et magnam assumenda necessitatibus!
                        Exercitationem aliquid alias, maiores repellat corporis quam sint nemo perspiciatis? Deleniti
                        quaerat beatae officia! Adipisci illo atque iusto?</p>
                </div>
            </div>
        </section>

        <section id="contact">
            <aside class="form">
                <form action="" method="POST">
                    <p class="title">Send us message</p>
                    <p><input type="text" name="name" placeholder="Name" required></p>
                    <p><input type="text" name="email" placeholder="E-mail" required></p>
                    <p><textarea name="message" placeholder="Message" required></textarea></p>
                    <div class="g-recaptcha" data-sitekey="reCAPTCHA_KEY"></div>
                    <button type='submit'>Send</button>
                </form>
                <?php

                if (isset($_POST['name'])) {
                    $secret_key = 'reCAPTCHA_KEY';
                    $response = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']));

                    if ($response->success) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'] . "\n\n Name: $name \n\n Email: $email";
                        $address = 'your-mail@mail.com';
                        $topic = "Simple Light Theme (Contact form) - $email";

                        if (mail($address, $topic, $message))
                            echo "<p class='success'>Your E-mail is sent successfully</p>";
                        else
                            echo "<p class='error'><i class='icon-attention-alt'></i>Your E-mail is not sent. Try again</p>";
                    } else {
                        echo "<p class='error'><i class='icon-attention-alt'></i>Verify that you are not a robot</p>";
                    }
                }

                ?>
            </aside>
            <aside class="map">
                <p class="title">See where we are</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80677.57964658922!2d19.052560065125373!3d50.809408056944825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4710b5c54e2ca8af%3A0x854f0d4d1a178236!2sCz%C4%99stochowa!5e0!3m2!1spl!2spl!4v1653327327206!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <label><span><i class="icon-phone"></i> </span>xx xxx xx xx</label>
                <label><span><i class="icon-mail-alt"></i></span>contact@theme.pl</label>
            </aside>
        </section>
    </main>
    <footer>
        <p>Mateusz Nowak &copy 2022</p>
    </footer>
</body>

</html>