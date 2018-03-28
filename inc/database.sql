-- 1. Eine Datenbank anlegen, welche mit latin1_german1_ci kollatiert ist!
-- 2. Folgenden Codeblock in dieser Datenbank ausführen

CREATE TABLE IF NOT EXISTS `vocabularies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `one-ger` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `non-ger` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `level` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`), UNIQUE (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;
