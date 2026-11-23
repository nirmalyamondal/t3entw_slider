#
# Table structure for table 'tx_t3entwslider_domain_model_record'
#
CREATE TABLE tx_t3entwslider_domain_model_record (
	title varchar(255) DEFAULT '' NOT NULL,
	uri text,
	subtitle text,
	description text,
	image int(11) unsigned NOT NULL default '0',
	sorting int(10) unsigned DEFAULT '0' NOT NULL,
	parentid int(11) DEFAULT '0' NOT NULL,
	parenttable tinytext DEFAULT ''  NOT NULL,
);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	tx_t3entwslider_inline int(11) DEFAULT '0' NOT NULL,
);
