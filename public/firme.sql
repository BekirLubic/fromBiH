CREATE TABLE IF NOT EXISTS `firme` (
`id` MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`datumPrijave` date NOT NULL,
`imeFirme` varchar (100) NOT NULL,
`oblikFirme` varchar (100) NOT NULL,
`emailFirme` varchar (100) NOT NULL,
`lozinkaFirme1` varchar (100) NOT NULL,
`kontaktOsobaImeFirme` varchar (100) NOT NULL,
`kontaktOsobaPrezimeFirme` varchar (100) NOT NULL,
`activated` enum("0","1") NOT NULL,
PRIMARY_KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; 