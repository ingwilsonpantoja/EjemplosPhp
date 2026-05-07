<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Sumas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card shadow-lg border-0 rounded-4">
                    
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h3>Formulario de Sumas</h3>
                    </div>

                    <div class="card-body p-4">

                        <form id="formSuma">

                            <div class="mb-3">
                                <label class="form-label">Número 1</label>
                                <input type="number" class="form-control" id="num1" placeholder="Ingrese el primer número" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Número 2</label>
                                <input type="number" class="form-control" id="num2" placeholder="Ingrese el segundo número" required>
                            </div>

                            <div class="d-grid">
                                <button type="button" class="btn btn-success" onclick="sumar()">
                                    Calcular Suma de valores
                                </button>
                            </div>

                        </form>

                        <div class="alert alert-info mt-4 text-center fw-bold" id="resultado">
                            Resultado: 0
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        function sumar() {

            let numero1 = parseFloat(document.getElementById("num1").value) || 0;
            let numero2 = parseFloat(document.getElementById("num2").value) || 0;

            let suma = numero1 + numero2 - 1;

            document.getElementById("resultado").innerHTML = 
                "Resultado: " + suma;
        }
    </script>

</body>
</html>