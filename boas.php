<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Boas-Vindas</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" >
    <style>
        /* Resetando margens e preenchimentos */
/* Resetando margens e preenchimentos */
* {
    margin: 0;
    padding: 0;
    font-family: 'Bebas Neue', sans-serif;
}

/* Cor de fundo e estilo geral da página */
body {
    background-color: #1A0C43;
    color: white;
    text-align: center;
    height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Estilo da barra de navegação */
nav {
    width: 100%;
    background-color: #2A1B6E;
    padding: 10px 0;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
}

/* Lista de itens de navegação */
.nav-list {
    list-style: none;
    display: flex;
    align-items: center; /* Alinha verticalmente os itens */
    width: 100%;
    padding-left: 0;
    justify-content: center; /* Centraliza os itens de navegação */
}

/* Estilo dos itens de menu */
.nav-list li {
    display: inline-block;
}

/* Estilo do link do usuário (alinhado à esquerda) */
#user {
    margin-right: auto; /* Empurra para a extrema esquerda */
    display: flex;
    align-items: center;
}

/* Estilo do link do usuário */
#user label {
    font-size: 1.2em;
}

/* Estilo dos links da barra de navegação */
nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2em;
    transition: color 0.3s ease;
    padding: 0 15px; /* Espaçamento entre os itens */
}

/* Efeito ao passar o mouse sobre os links */
nav ul li a:hover {
    color: #FFD700;
}

/* Estilo da mensagem de boas-vindas */
.welcome-message {
    font-size: 3em;
    margin-top: 80px; /* Dá espaço para a navbar fixa */
}


        </style>
</head>

<body>

    <div class="welcome-message">
        <h1>Bem-vindo ao Sistema!</h1>
    </div>

    <nav>
        <ul class="nav-list">
            <!-- Nome do Usuário -->
            <li id="user">
                <label style="color:rgb(255, 208, 0)"> &nbsp;Usuário:</label>  
                <i >    &nbsp;
                    <?php  
                        session_start();
                        if(isset($_SESSION['funcionario_nm'])){
                            $name = $_SESSION['funcionario_nm'];
                            echo $name;
                        }
                        else{
                            echo "<script>alert('Você não realizou o login!'); history.back() </script>";
                        }
                    ?>  
                </i>
            </li>

            <!-- Itens de navegação (centralizados) -->
            <li><a href="categoria.php">Categoria</a></li>
            <li><a href="cliente.php">Cliente</a></li>
            <li><a href="fornecedor.php">Fornecedor</a></li>
            <li><a href="funcionario.php">Funcionário</a></li>
            <li><a href="lançamentos.php">Lançamento</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>

</body>

</html>
