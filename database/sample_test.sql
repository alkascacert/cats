
LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers`(`a_id`,`q_id`,`answer`,`correct`) VALUES (1521,1,'under most signature laws, a digitized hand writing attached to a scan of a document.',0),(1520,1,'under most signature laws, a digital seal containing a hash value',1),(1519,1,'a generic term used for different forms of signatures',1),(5,2,'true',1),(6,2,'false',0),(9,3,'Information about the Assurer who checked the identity of that person',0),(10,3,'information about the owner of the certificate',1),(11,3,'digitized fingerprints of the owner',0),(12,3,'day of birth of the owner',0),(13,3,'electronic fingerprints for the validation of the certificate and the owner of the certificate',1),(14,3,'issuing date and expiration date of the certificate',1),(15,4,'public key',1),(16,4,'private key',0),(17,4,'passphrase to the key',0),(22,6,'X.509 certificates',1),(23,6,'Skype certificates',0),(24,7,'5',0),(25,7,'10',0),(26,7,'50',0),(27,7,'unlimited',1),(28,8,'Currently it does not expire, but this may change in the future.',1),(29,8,'10 years',0),(30,8,'5 years',0),(31,8,'2 years',0),(955,9,'in the CAcert Community Agreement (CCA)',0),(954,9,'in the Certificate Practice Statement (CPS)',1),(953,9,'in the Certificate Overview Table (COT)',0),(1456,10,'code signing',1),(1455,10,'email encryption',1),(1454,10,'webserver encryption',1),(40,11,'You have to reach 150 assurance points',0),(41,11,'You have to reach 100 assurance points',1),(42,11,'You have to proof a university degree in IT studies',0),(43,11,'You need to successfully pass this online test',1),(44,11,'Three existing assurers must support your application',0),(45,12,'true',1),(46,12,'false',0),(50,13,'true',0),(51,13,'false',1),(1446,14,'You have to collect a fee of USD 5.00 from any person you assure',0),(1447,14,'You have to accept and act according to the current rules for accomplishing an assurance.',1),(1445,14,'You must keep the CAP forms of all assurances for 50 years',0),(1444,14,'You should ensure that your level of education in this field is up to date. Keep abreast for future training updates!',1),(59,15,'You did a good job, everything was correct',0),(60,15,'You did a good job, but there were minor flaws (like an expired document)',0),(61,15,'You commited deliberate actions, like knowingly making a false assurance',1),(62,16,'the local court of the Assurer',0),(63,16,'the local court of the User',0),(64,16,'the internal arbitration of CAcert ',1),(65,17,'0',0),(66,17,'10',0),(67,17,'25',0),(68,17,'55',0),(69,17,'75',0),(70,17,'110',0),(71,18,'1',0),(72,18,'2',1),(73,18,'5',0),(74,19,'Is the applicant beautiful?',0),(75,19,'Is the number of the ID card written on the form?',0),(76,19,'Is the form completely filled out?',1),(77,19,'Is the name, day of birth and signature on the form identical to those on the presented ID card?',1),(78,19,'Does the copy of the ID card match the presented ID card?',0),(79,19,'Can you clearly read the email adress?',1),(80,20,'governmental ID card',1),(81,20,'student ID',0),(82,20,'credit card',0),(83,20,'passport',1),(84,20,'drivers licence',1),(85,20,'membership card',0),(1461,21,'Picture and ID is stamped',1),(1460,21,'Hologram',1),(1459,21,'Printing style',1),(90,22,'true',0),(91,22,'false',1),(94,23,'true',0),(95,23,'false',1),(98,24,'To do the assurance and register back at home on his own system',1),(99,24,'To use your laptop to register, then do the assurance',0),(102,26,'If the picture on the ID card cannot be matched with the applicant',1),(103,26,'If the signature on the ID card does not match the signature on the form',1),(104,26,'If the security characteristics are damaged',1),(105,26,'If the applicant asks about the checks you do',0),(106,26,'If the ID card was issued several years ago (even if everything matches fine)',0),(107,27,'true',0),(108,27,'false',1),(109,28,'true',1),(110,28,'false',0),(111,29,'true',0),(112,29,'false',1),(1466,30,'Ask the browser vendors',0),(1467,30,'Read the Wiki at http://wiki.cacert.org',1),(1465,30,'Join the CAcert mailing lists',1),(1464,30,'Contact the support team through the support form or write them a mail',1),(946,31,'A passport issued by governments to special ops to conceal their identity',0),(945,31,'A passport with a special envelope to hide it from possible thiefs',0),(121,32,'A passport for an artist using a pseudonym',0),(122,32,'A club card designed to resemble a real passport.',1),(123,32,'A passport with an artist designed cover',0),(124,33,'Serial number',0),(125,33,'Photo of the owner',1),(126,33,'Date of birth',1),(127,33,'Place of birth',0),(128,33,'Issuing country',1),(129,33,'Home address',0),(130,33,'Machine readable data',0),(131,33,'RFID chip containing biometric data',0),(132,33,'Issuing authority',1),(944,31,'A \\\"passport\\\" issued in the name of non-existent country that is intended to look like a real country\\\'s passport.',1),(956,9,'in the Browser Vendors Usage Guidelines (BVUG)',0),(1457,10,'document signatures (as agreed by contract)',1),(1458,10,'secure high value transactions',0),(1462,21,'Machine readable part',1),(1463,21,'extra fragile paper',0),(1468,30,'All local unix groups offer offical CAcert support',0),(1522,1,'a signature created with a digital pen',0);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `question_description` WRITE;
/*!40000 ALTER TABLE `question_description` DISABLE KEYS */;
INSERT INTO `question_description`(`q_id`,`description`) VALUES (31,'Camuflage passports can be purchased and are usually used by individuals who are afraid of being singled out for a crime because of their nationality. See http://en.wikipedia.org/wiki/Camouflage_passport'),(22,'Nobody can force you to give points. If you are unsure, even if it is not the applicant\\\'s fault, give less or even no points.'),(23,'An expired document is not valid any more. If it\\\'s recently (&lt;1 year) expired you can accept it at your own risk, but keep in mind that maybe you\\\'ll have to explain this some time in the future!'),(24,'It is too easy to watch someone creating an account during a public event, so please advise the person to do it at home.'),(27,'If the applicant is a close friend or family member s/he surely has no problem showing you a valid id. Everything else puts you in a bad situation, just in case some silly little mistake should happen...'),(28,'Note that you MUST TELL IT IN ADVANCE if you want to charge for an assurance! If you forget this the applicant may demand a free assurance.'),(29,'I\\\'m sure you checked the correct answer. ;)\r\nThe damage done by a VIP who is assured on invalid documents may be much greater.'),(32,'See http://en.wikipedia.org/wiki/Camouflage_passport'),(33,'CAcert policy demands a photo of the owner and the date of birth. If a passport does not contain an issuing country and authority it is no passport. The rest of the data may or may not be contained in a passport, there is no internationally accepted standard for that.'),(20,'Remember the term \\&quot;goverment issued Photo ID\\&quot;! Note that there are rumours about passports without a Photograph. Should you encounter one of those it does not count as \\&quot;Photo ID\\&quot;...'),(21,'All these characteristics are often used, depending on techniques used for a specific ID.'),(26,'If the ID is expired it is not acceptable, but it it\\\'s just old...'),(12,'Of course as usual IDs have to be provided and a CAP form has to be signed by the person as well as by a legal agent.'),(30,'Perhaps a local unix group can also offer support, but you can\\\'t rely on that.'),(15,'CAcert tries to reduce liability to a sensible amount, but if you make false assurances just for fun, someone might get you...'),(19,'These are not the only things, just some that tend to be overlooked! Have a look at http://wiki.cacert.org/wiki/PolicyDrafts/AssurancePolicy for other info.'),(11,'Note that this is not fixed principle, it may change is other requirements are deemed appropriate.'),(10,'CAcert does discurage using its certificate for high value transactions. If you use them for this purpose it\\\'s completely your own risk.'),(3,'Currently a certificate may optionally include one or more verified eMail addresses, a \\&quot;Single Sign On ID\\&quot; and (if the User is assured to 50 points) the name. All X509 certificates have to include issuing and expiry dates.');
/*!40000 ALTER TABLE `question_description` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions`(`q_id`,`qt_id`,`t_id`,`question`,`active`,`description`,`ref_q_id`,`translationstatus`) VALUES (1,2,1,'[1]An electronic signature is: (check 2)','1','0',NULL,NULL),(2,3,1,'[2]A digital certificate is a cryptographic key and some information about the owner of that key','1','0',NULL,NULL),(3,2,1,'[3]A digital certificate issued by CAcert can contain the following elements: (check 3)','1','1',NULL,NULL),(4,1,1,'[4]If you want to send ALICE a message which is encrypted, you need her','1','0',NULL,NULL),(6,1,1,'[6]Which type of certificates does CAcert issue?','1','0',NULL,NULL),(7,1,1,'[7]How many certificates (SSL, email, code signing) can you get for free as a registered user of CAcert?','1','0',NULL,NULL),(8,1,1,'[8]How long is your identity check valid (under normal circumstances)?','1','0',NULL,NULL),(9,1,1,'[9]Types of certificates, their appropriate usage and corresponding applications are defined ...','1','0',NULL,NULL),(10,2,1,'[10]Which certificate usages are appropriate according to the rules? (check 4)','1','1',NULL,NULL),(11,2,1,'[11]What are the requirements for becoming an assurer? (check 2)','1','1',NULL,NULL),(12,3,1,'[12]As an Assurer, you are allowed to assure underage persons and issue assurance points up to the maximum you are currently allowed.','1','1',NULL,NULL),(13,3,1,'[13]If you have any doubts about the identity of a person, you should still assure that person and report your doubts afterwards.','1','0',NULL,NULL),(14,2,1,'[14]Which obligations do you have as an assurer? (check 2)','1','0',NULL,NULL),(15,1,1,'[15]In which case is it most likely that you can be made liable for your assurances?','1','1',NULL,NULL),(16,1,1,'[16]Disputes between users and assurers are dealt at','1','0',NULL,NULL),(17,4,1,'(17)Below [50] points, you can only get client certificates without your name included, valid for 6 month. When reaching [100] points, you can apply for a code-signing certificate and become an assurer by passing this test. The maximum number of points you can reach by assuring other people is [150]. Then you can issue up to [35] points of trust.','1','0',NULL,NULL),(18,1,1,'[18]How many additional points (up to a maximum of 150) do you get by assuring other people (per assurance)?','1','0',NULL,NULL),(19,2,1,'[19]As an assurer, you have to check the following: (check 3)','1','1',NULL,NULL),(20,2,1,'[20]Which of the following documents are valid IDs in terms of the CPS? (check 3)','1','1',NULL,NULL),(21,2,1,'[21]Which are typical (may vary between countries) characteristics of an ID card? (check 4)','1','1',NULL,NULL),(22,3,1,'[22]As long as the presented ID is valid, I have to assure that person, even if I am not sure about the picture on the ID.','1','1',NULL,NULL),(23,3,1,'[23]An expired ID card is still fine as the only identity proof during an assurance.','1','1',NULL,NULL),(24,1,1,'[24]During an event, a person who has not yet registered approaches you. You recommend him:','1','1',NULL,NULL),(26,2,1,'[26]Which situations during an identity check prohibit completion of an assurance? (check 3)','1','1',NULL,NULL),(27,3,1,'[27]If an applicant is a family member or a close friend, there is no need to check his ID. The trust you have in him ought to be enough.','1','1',NULL,NULL),(28,3,1,'[28]CAcert certificates are always free of charge, but you are allowed to charge a small fee from an applicant to cover your costs (time, travel, etc.) if you tell him that in advance.','1','1',NULL,NULL),(29,3,1,'[29]VIP\\\'s are very important to CAcert as they can be of great help (or great harm) when they talk to the press. Therefore, you should always pass their assurance, even if some documents are not OK.','1','1',NULL,NULL),(30,2,1,'[30]Where can you get support on CAcert issues? (check 3)','1','1',NULL,NULL),(31,1,1,'[31]What is a \\&quot;camouflage passport\\&quot;?','1','1',NULL,NULL),(32,1,1,'[32]What is a \\&quot;fantasy passport\\&quot;?','1','1',NULL,NULL),(33,2,1,'[33]Which of the following are among the minimum requirements for a passport accepted for a CAcert assurance? (check 4)','1','1',NULL,NULL);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics`(`t_id`,`topic`,`active`,`numOfQu`,`percentage`,`lang`) VALUES (1,'Assurer\\\'s challenge (EN)',1,25,80,'en');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;
