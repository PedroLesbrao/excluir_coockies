<body bgcolor="<?php echo $_COOKIE['cor']?>";
<?php
    echo "COOKIES NO PHP<br><br>";
    echo "Seja bem-vindo caro Sr(a). " .$_COOKIE['user']."<br><br>";
    echo "Sua senha ".$_COOKIE['password']." é valida no sistema!!<br><br>";

    //excluir o cookie
    setcookie('user',"");
    setcookie('password',"");
?> 