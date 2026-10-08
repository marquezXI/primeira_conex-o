<?php

$base=mysql_connect('localhost','root','','bdexemplo') || die ('erro de conexão');
$regra1 = 'SELECT * FROM cadastro order by nome';
$res = mysql_query($base, $regra1);

    echo "<h2>Cadastro de usuarios do estado de SP</h2>
        <table>
        <tr>
            
        </tr>


"


?>