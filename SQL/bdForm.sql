comando SQL: 
CREATE TABLE `formulario` (
`nome` VARCHAR( 60 ) NOT NULL ,
`empresa` VARCHAR (80) NULL,

`email` VARCHAR( 60 ) NOT NULL ,
`telefoneCel` INT (12) NOT NULL,
`telefoneFix` INT( 10 ) , NOT NULL,
`endereço` VARCHAR( 70 ) NOT NULL ,
`cidade` VARCHAR( 20 ) NOT NULL ,
`estado` VARCHAR( 2 ) NOT NULL ,
`bairro` VARCHAR( 20 ) NOT NULL ,
`país` VARCHAR( 20 ) NOT NULL ,
`login` VARCHAR( 12 ) NOT NULL ,
`senha` VARCHAR( 12 ) NOT NULL ,
`news` VARCHAR( 8 ) ,
`id` INT( 200 ) AUTO_INCREMENT ,
UNIQUE (
`id` 
)
);