<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/PHP-logo.svg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Inicio PHP</title>
    <link rel="stylesheet" href="./style.css">
    <script src="main.js" defer></script>
</head>
<body>


<article class="acordion">
    <div class="accordion_item">
        <div class="accordion_header">
            <button class="accordion_button active" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                Registrar
            </button>
        </div>
        <div id="collapse_1" class="accordion_collapse collapse">
            <div class="accordion_content">
                <div class="accordion_item">
                    <div class="accordion_header">
                        <button class="accordion_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                            Nuevo de usuario
                        </button>
                    </div>
                    <div id="collapse_2" class="accordion_collapse collapse">
                        <section class="centro">
                            <h1 class="ol">Ingrese los datos del candidato</h1>
                            <form class="was-validated">
                                <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">First name</label>
                                    <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
                                    <div class="valid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationServer02" class="form-label">Last name</label>
                                    <input type="text" class="form-control is-valid" id="validationServer02" value="" required>
                                    <div class="valid-feedback">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control is-valid" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <select class="form-select" required aria-label="select example">
                                    <option value="">Select your level of Education</option>
                                    <option value="1">Bachiller</option>
                                    <option value="2">Tecnico</option>
                                    <option value="3">Tecnologo</option>
                                    <option value="4">Profesional</option>
                                    <option value="5">Estudiante</option>
                                    <option value="6">Universitario</option>
                                    <option value="7">Doctorado</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>

                                <div class="mb-3">
                                    <select class="form-select" required aria-label="select example">
                                    <option value="">Select your level of English</option>
                                    <option value="1">Basic</option>
                                    <option value="2">Intermediate</option>
                                    <option value="3">Advanced</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>



                                <h3>Basic knowledge</h3>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">JavaScript</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">PHP</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                    <label class="form-check-label" for="exampleCheck3">Node.js</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                    <label class="form-check-label" for="exampleCheck4">Git</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                    <label class="form-check-label" for="exampleCheck5">Html</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                    <label class="form-check-label" for="exampleCheck6">CSS</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck7">
                                    <label class="form-check-label" for="exampleCheck7">C#</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck8">
                                    <label class="form-check-label" for="exampleCheck8">C++</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck9">
                                    <label class="form-check-label" for="exampleCheck9">Ruby</label>
                                </div>
                                

                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>



    <?php
    // Aqui va el codigo PHP
    echo ('hola como estas? ')
    ?>
    
</body>
</html>


