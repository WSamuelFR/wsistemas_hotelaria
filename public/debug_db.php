<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../app/config/DBConnection.php');

echo "<h3>Testando Conexão com TiDB Cloud</h3>";

try {
    $conn = Connect();
    echo "<p style='color:green'>Sucesso! O site conseguiu falar com o Cluster.</p>";
} catch (Exception $e) {
    echo "<p style='color:red'>Erro capturado: " . $e->getMessage() . "</p>";
}

// Verifica se o PHP tem suporte a OpenSSL (necessário para o TiDB)
if (extension_loaded('openssl')) {
    echo "<p>OpenSSL: Habilitado</p>";
} else {
    echo "<p style='color:red'>OpenSSL: Desabilitado (Isso impede a conexão com o TiDB)</p>";
}