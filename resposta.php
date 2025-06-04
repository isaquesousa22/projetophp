<?php 


 $nome = $_POST['nome'];

 $sobrenome = $_POST['sobrenome'];

 $idade = $_POST['idade'];

 $sexo = $_POST['sexo'];

 $email = $_POST['email'];


 
    echo "Sua idade: $idade<br>";
    echo "Seu sexo: $sexo<br>";
    echo "Seu e-mail: $email<br>";




    if ($idade < 25 && $sexo == "feminino") {
        echo "$nome $sobrenome</br>Aceita<br/>";
         echo "<br/>"; 
    } else {
        echo "<br/> $nome $sobrenome</br>Não aceita ou aceito <br/>";
         echo "<br/>"; 
    }
    echo "<br/>"; 

 ?>