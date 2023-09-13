<?php
$servidor ="127.0.0.1";
$base ="dbinb0243";
$usuario ="inb0243user";
$senha ="alunos";
try {
$conn = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$senha);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<center><h1>Conectado do Servidor Wev com Sucesso a base:<h1>" .$base;
echo "<br><h2><font color=red>1450_DavyMoreiraSeboldt</font></h2>";

} catch(PDOException $e) {
echo "Falha na conexão:" .$e->getMessage();
}
?>
