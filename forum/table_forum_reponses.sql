CREATE TABLE forum_reponses (
	id int(6) NOT NULL auto_increment,
	auteur VARCHAR(30) NOT NULL,
	message text NOT NULL,
	date_reponse datetime NOT NULL default '0000-00-00 00:00:00',
	correspondance_sujet int(6) NOT NULL,
	PRIMARY KEY  (id)
) TYPE=MyISAM;