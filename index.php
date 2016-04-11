<?php

// Mostra todas as informações, usa o padrão INFO_ALL
echo("Curso da School of Net");

phpinfo();

// Mostra apenas informações dos módulos.
// phpinfo(8) mostra um resultado identico.
phpinfo(INFO_MODULES);

?>