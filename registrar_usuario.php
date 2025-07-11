<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            
            <?php include('menu.php') ?>

            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Login</h1>
                            <p class="lead fw-normal text-muted mb-0">Por favor informe seu email e sua senha</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    
                                    <!-- Nome input (Novo campo adicionado) -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Digite seu nome completo" data-sb-validations="required" />
                                        <label for="name">Nome Completo</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">O nome é obrigatório.</div>
                                    </div>
                                    
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">O email é obrigatório.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email não é válido.</div>
                                    </div>
                                    
                                    <!-- Password input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" type="password" placeholder="Digite sua senha" data-sb-validations="required" />
                                        <label for="password">Senha</label>
                                        <div class="invalid-feedback" data-sb-feedback="password:required">A senha é obrigatória.</div>
                                    </div>

                                    <!-- Submit error message-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar o formulário!</div></div>
                                    
                                    <!-- Botões de ação -->
                                    <div class="d-grid gap-3">
                                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Entrar</button>
                                        <button class="btn btn-outline-primary btn-lg" id="registerButton" type="button">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                            <div class="h5 mb-2">Chat with us</div>
                            <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5">Ask the community</div>
                            <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                            <div class="h5">Support center</div>
                            <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5">Call us</div>
                            <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- SB Forms JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
        <!-- Script adicional para o botão de cadastro -->
        <script>
            document.getElementById('registerButton').addEventListener('click', function() {
                // Aqui você pode adicionar a lógica para cadastro
                alert('Funcionalidade de cadastro será implementada aqui!');
                // Ou redirecionar para uma página de cadastro:
                // window.location.href = 'cadastro.php';
            });
        </script>
    </body>
</html>