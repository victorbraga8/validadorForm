
<html>

<head>
    <title>Valida Form JS</title>
    <meta charset="utf-8">
</head>

<body>
    <div class="container">
        <h1>Valida Form JS</h1>
    </div>
    <form action="" id="formulario">
        <input type="text" name="" id="nome">
        <input type="email" name="" id="email">
        <button type="submit" id="botao">Clicar</button>
    </form>

    <script>
        btn = document.querySelector('#botao');
        nome = document.querySelector('#nome');
        email = document.querySelector('#email');


        form = document.querySelector('#formulario').addEventListener('submit', verificaForm);

        function verificaForm(e) {
            if (nome.innerText.length < 3 || !email.value) {
                alert('Preencha os Campos');
                e.preventDefault();
            }
        }
    </script>

</body>

</html>