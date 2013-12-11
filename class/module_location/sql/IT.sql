CREATE TABLE IF NOT EXISTS `City`(
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(35) NOT NULL DEFAULT '',
  `CountryCode` char(3) NOT NULL DEFAULT '',
  `District` char(20) NOT NULL DEFAULT '',
  `Population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM;


/*Popolo Italia*/

INSERT INTO `City` VALUES (1464,'Roma','ITA','Latium',2643581);
INSERT INTO `City` VALUES (1465,'Milano','ITA','Lombardia',1300977);
INSERT INTO `City` VALUES (1466,'Napoli','ITA','Campania',1002619);
INSERT INTO `City` VALUES (1467,'Torino','ITA','Piemonte',903705);
INSERT INTO `City` VALUES (1468,'Palermo','ITA','Sisilia',683794);
INSERT INTO `City` VALUES (1469,'Genova','ITA','Liguria',636104);
INSERT INTO `City` VALUES (1470,'Bologna','ITA','Emilia-Romagna',381161);
INSERT INTO `City` VALUES (1471,'Firenze','ITA','Toscana',376662);
INSERT INTO `City` VALUES (1472,'Catania','ITA','Sisilia',337862);
INSERT INTO `City` VALUES (1473,'Bari','ITA','Apulia',331848);
INSERT INTO `City` VALUES (1474,'Venezia','ITA','Veneto',277305);
INSERT INTO `City` VALUES (1475,'Messina','ITA','Sisilia',259156);
INSERT INTO `City` VALUES (1476,'Verona','ITA','Veneto',255268);
INSERT INTO `City` VALUES (1477,'Trieste','ITA','Friuli-Venezia Giuli',216459);
INSERT INTO `City` VALUES (1478,'Padova','ITA','Veneto',211391);
INSERT INTO `City` VALUES (1479,'Taranto','ITA','Apulia',208214);
INSERT INTO `City` VALUES (1480,'Brescia','ITA','Lombardia',191317);
INSERT INTO `City` VALUES (1481,'Reggio di Calabria','ITA','Calabria',179617);
INSERT INTO `City` VALUES (1482,'Modena','ITA','Emilia-Romagna',176022);
INSERT INTO `City` VALUES (1483,'Prato','ITA','Toscana',172473);
INSERT INTO `City` VALUES (1484,'Parma','ITA','Emilia-Romagna',168717);
INSERT INTO `City` VALUES (1485,'Cagliari','ITA','Sardinia',165926);
INSERT INTO `City` VALUES (1486,'Livorno','ITA','Toscana',161673);
INSERT INTO `City` VALUES (1487,'Perugia','ITA','Umbria',156673);
INSERT INTO `City` VALUES (1488,'Foggia','ITA','Apulia',154891);
INSERT INTO `City` VALUES (1489,'Reggio nell� Emilia','ITA','Emilia-Romagna',143664);
INSERT INTO `City` VALUES (1490,'Salerno','ITA','Campania',142055);
INSERT INTO `City` VALUES (1491,'Ravenna','ITA','Emilia-Romagna',138418);
INSERT INTO `City` VALUES (1492,'Ferrara','ITA','Emilia-Romagna',132127);
INSERT INTO `City` VALUES (1493,'Rimini','ITA','Emilia-Romagna',131062);
INSERT INTO `City` VALUES (1494,'Syrakusa','ITA','Sisilia',126282);
INSERT INTO `City` VALUES (1495,'Sassari','ITA','Sardinia',120803);
INSERT INTO `City` VALUES (1496,'Monza','ITA','Lombardia',119516);
INSERT INTO `City` VALUES (1497,'Bergamo','ITA','Lombardia',117837);
INSERT INTO `City` VALUES (1498,'Pescara','ITA','Abruzzit',115698);
INSERT INTO `City` VALUES (1499,'Latina','ITA','Latium',114099);
INSERT INTO `City` VALUES (1500,'Vicenza','ITA','Veneto',109738);
INSERT INTO `City` VALUES (1501,'Terni','ITA','Umbria',107770);
INSERT INTO `City` VALUES (1502,'Forl�','ITA','Emilia-Romagna',107475);
INSERT INTO `City` VALUES (1503,'Trento','ITA','Trentino-Alto Adige',104906);
INSERT INTO `City` VALUES (1504,'Novara','ITA','Piemonte',102037);
INSERT INTO `City` VALUES (1505,'Piacenza','ITA','Emilia-Romagna',98384);
INSERT INTO `City` VALUES (1506,'Ancona','ITA','Marche',98329);
INSERT INTO `City` VALUES (1507,'Lecce','ITA','Apulia',98208);
INSERT INTO `City` VALUES (1508,'Bolzano','ITA','Trentino-Alto Adige',97232);
INSERT INTO `City` VALUES (1509,'Catanzaro','ITA','Calabria',96700);
INSERT INTO `City` VALUES (1510,'La Spezia','ITA','Liguria',95504);
INSERT INTO `City` VALUES (1511,'Udine','ITA','Friuli-Venezia Giuli',94932);
INSERT INTO `City` VALUES (1512,'Torre del Greco','ITA','Campania',94505);
INSERT INTO `City` VALUES (1513,'Andria','ITA','Apulia',94443);
INSERT INTO `City` VALUES (1514,'Brindisi','ITA','Apulia',93454);
INSERT INTO `City` VALUES (1515,'Giugliano in Campania','ITA','Campania',93286);
INSERT INTO `City` VALUES (1516,'Pisa','ITA','Toscana',92379);
INSERT INTO `City` VALUES (1517,'Barletta','ITA','Apulia',91904);
INSERT INTO `City` VALUES (1518,'Arezzo','ITA','Toscana',91729);
INSERT INTO `City` VALUES (1519,'Alessandria','ITA','Piemonte',90289);
INSERT INTO `City` VALUES (1520,'Cesena','ITA','Emilia-Romagna',89852);
INSERT INTO `City` VALUES (1521,'Pesaro','ITA','Marche',88987);



/* ------------------------------------------------------------------------- */



CREATE TABLE IF NOT EXISTS`Country` (
  `Code` char(3) NOT NULL DEFAULT '',
  `Name` char(52) NOT NULL DEFAULT '',
  `Continent` enum('Asia','Europe','North America','Africa','Oceania','Antarctica','South America') NOT NULL DEFAULT 'Asia',
  `Region` char(26) NOT NULL DEFAULT '',
  `SurfaceArea` float(10,2) NOT NULL DEFAULT '0.00',
  `IndepYear` smallint(6) DEFAULT NULL,
  `Population` int(11) NOT NULL DEFAULT '0',
  `LifeExpectancy` float(3,1) DEFAULT NULL,
  `GNP` float(10,2) DEFAULT NULL,
  `GNPOld` float(10,2) DEFAULT NULL,
  `LocalName` char(45) NOT NULL DEFAULT '',
  `GovernmentForm` char(45) NOT NULL DEFAULT '',
  `HeadOfState` char(60) DEFAULT NULL,
  `Capital` int(11) DEFAULT NULL,
  `Code2` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`Code`)
) ENGINE=MyISAM;

/* Popolo tabella country __ sarebbe "stati" cosi va bene per tutto il mondo, l'ialia è uno stato unico */

INSERT INTO `Country` VALUES ('ITA','Italy','Europe','Southern Europe',301316.00,1861,57680000,79.0,1161755.00,1145372.00,'Italia','Republic','Carlo Azeglio Ciampi',1464,'IT');
