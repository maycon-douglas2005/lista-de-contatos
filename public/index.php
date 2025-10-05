<?php require_once '../app/Views/partials/head.php';
$baseUrl = '/Projetos de Programação/lista_de_contatos/public/index.php';
?>


<body class="d-flex flex-column vh-100">
    <?php require_once '../app/Views/partials/header.php' ?>



    <main class="container-fluid  flex-fill">
        <div class="apresentacao row d-flex flex-row align-items-center" style="height: 100%;">

            <section class="tituloEparagrafo col-7 d-flex flex-column align-items-center">
                <h1>Bem-Vindo A Sua Lista De Contatos</h1>
                <p>Gerencie seus contatos de maneira simples e eficiente</p>
                <div class="botoes">
                    <button class="btn btn-outline-primary">Cadastrar-se</button>
                    <button class="btn btn-outline-primary">Logar</button>
                </div>

            </section>

            <img src="images/home_site.png" class="img-fluid col-5 shadow" alt="">
        </div>
    </main>



    <?php require_once '../app/Views/partials/footer.php' ?>


</body>

</html>