CREATE TABLE IF NOT EXISTS `encuestas` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`titulo` varchar(50) NOT NULL,
`fecha` date NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `encuestas` (`id`, `titulo`, `fecha`)
VALUES (NULL ,  'Primer proyecto en PHP',
'2023-09-05');

CREATE TABLE IF NOT EXISTS `opciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_encuesta` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO  `opciones` (`id` ,`id_encuesta` ,`nombre` ,`valor`)
VALUES (NULL ,  '1',  'Muy Bueno',  '14')
, (NULL ,  '1',  'Bueno',  '6')
, (NULL ,  '1',  'Malo',  '2');

#se ingresaron datos predeterminados para prueba de conexion a la base de datos
