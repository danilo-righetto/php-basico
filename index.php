<?php

// Mostra todas as informa��es, usa o padr�o INFO_ALL
echo("Danilo Righetto - Curso de PHP Basico");
echo("Curso da School of Net");

phpinfo();

// Mostra apenas informa��es dos m�dulos.
// phpinfo(8) mostra um resultado identico.
phpinfo(INFO_MODULES);

?>