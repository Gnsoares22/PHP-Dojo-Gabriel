<?php

//inicia a sessão
session_start();

//mostra o id da sessão
echo $_SESSION['cor']."<br>". $_SESSION['carro']."<br>".session_id();


