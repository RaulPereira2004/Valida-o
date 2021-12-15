<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulário PHP</title>
</head>
<body>
    <main>
     <div>
         <h2>Validando diversos tipos de campos de formulários</h2>
         <form action="valida.php" method="post">
             <p> Nome: <input type="text" name="nome"> </p>
             <p> Senha: <input type="password" name="pass"> </p>
             <p> Idade: <input type="number" name="idade"> </p>
             <p> Telefone: <input type="tel" name="fone"> </p>
             <p> E-mail: <input type="email" name="endMail"> </p>
             <hr>
             <h4> Uma forma de organizar melhor o formulário com PHP</h4>
             <fieldset>
                 <legend>
                     Tipo 'radio' escolhe uma opção entre várias - campo "name"
                     é igual em todas as opções
                 </legend>
            <p>
                <input type="radio" name="comidaPref" value="Arroz com Feijão e Carne">
                <label>Arroz com Feijão e Carne</label>
            </p>
            <p>
                <input type="radio" name="comidaPref" value="Arroz com Macarrão e Carne">
                <label>Arroz com Macarrão e Carne</label>
            </p>
            <p>
                <input type="radio" name="comidaPref" value="Baião e Carne">
                <label>Baião e Carne</label>
            </p>
            <p>
                <input type="radio" name="comidaPref" value="Baião, Salada e Ovo">
                <label>Baião Salada e Ovo</label>
            </p>
             </fieldset>
             <fieldset>
                 <legend>Tipo: 'checkbox' - Escolha mais de uma opção - Disciplinas </legend>
                 <p>
                <input type="checkbox" name="Redes">
                <label for="Redes">Redes de Computadores</label>
                 </p>
                 <p>
                <input type="checkbox" name="JavaScript">
                <label for="JavaScript">Java Script</label>
                 </p>