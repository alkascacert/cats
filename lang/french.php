<?php
define("accept_Login_01","Vous n'�tes pas enregistr�. <br /> Veuillez v�rifier votre information de certificat et confirmer l'enregistrement.");
define("accept_Login_02","information certificat");
define("accept_Login_03","Fourni �:");
define("accept_Login_04","Nom commun(CN)");
define("accept_Login_05","Num�ro de s�rie");
define("accept_Login_06","addresse m�l  ");
define("accept_Login_07","Publi� par:");
define("accept_Login_08","Organisation");
define("accept_Login_09","Unit� d'organisation");
define("accept_Login_10","Publi� le");
define("accept_Login_11","Expire le");
define("accept_Login_12","Inscription avec ce certificat ?<br /><br />".
                         "Seulement le num�ro de s�rie du certificat sera stock�, mais si vous voulez demander un certificat imprim� apr�s d�passement de l'essai, il devra �tre fourni au nom commun inclus dans le certificat !<br />".
                         "Aucun certificat imprim� ne peut �tre d�livr� pour les certificats anonymes (Nom commun \"CAcert WoT User\").");
define("accept_Login_13","validit�:");
define("Button_01","cr�ez une nouvelle mati�re");
define("Button_02","Retour � la table des mati�res");
define("Button_03","Retour � la liste des questions");
define("Button_04","Nouvelle question");
define("Button_05","afficher sous forme de liste");
define("Button_06","Afficher en ligne graphique");
define("Button_07","afficher sous forme de graphique � barres");
define("Button_08","La meilleure r�ponse");
define("Button_09","La plus mauvaise r�ponse");
define("Button_10","connexion r�ussi");
define("Button_11","enregistrer");
define("Button_12","enregistrer les modifications");
define("Button_13","Editer les r�ponses");
define("Button_14","ajouter la r�ponse");
define("Button_15","supprimer la r�ponse");
define("Button_16","�valuation du test");
define("Button_17","Infos statistique");
define("Button_18","Infos de l'utilisateur");
define("Button_19","statistique du test");
define("Check_Cert_01","Si vous souhaitez obtenir un document par l'interm�diaire du service postal ou par courrier �lectronique, votre nom doit �tre inclus dans le certificat!<br /> Vous pouvez aller de l'avant avec cette enregistrement, mais vous ne pouvez pas choisir les options <i>via le service postal </i> ou <i>par courrier �lectronique</i>.<br /> Pour avoir le choix, vous pouvez annuler cette inscription, et vous enregistrez avec un autre certificat, dans lequel votre nom est incluse.");
define("certificateDocu_01","Si vous le souhaitez, nous pouvons cr�ez un document attestant que vous avez a pass� le test de l'assureur. Le document sera �mis � votre nom comme indiqu� dans votre certifcate num�rique.");
define("certificateDocu_02","Non, je ne souhaite pas ce document.");
define("certificateDocu_03","Oui, envoyer svp le document pi�ce-joint au format pdf par l'interm�diaire de l'email  (Nous utiliserons l'adresse m�l fourni dans le certificat)");
define("certificateDocu_04","Oui, envoyez-moi s'il vous plait le document par l'interm�diaire du service postal � l'adresse suivante :");
define("certificateDocu_05","pr�nom");
define("certificateDocu_06","nom");
define("certificateDocu_07","rue");
define("certificateDocu_08","code postal");
define("certificateDocu_09","ville");
define("certificateDocu_10","d�partement");
define("certificateDocu_11","pays");
define("certificateDocu_12","tous les champs doive �tre rempli, si vous souhaitez recevoir via le service postal.");
define("Class_Answer_01","d�tails des r�ponses");
define("Class_Answer_02","r�ponses");
define("Class_Answer_03","r�ponse");
define("Class_Answer_04","au moins 2 r�ponses � donn�e.");
define("Class_Answer_05","r�ponses au moins une r�ponse doit �tre marqu� comme 'correct' et au moins 2 doivent �tre fournis.");
define("Class_Answer_06","Au moins une r�ponse doit �tre marqu� comme 'correct'");
define("Class_Answer_07","Dans un texte � trous r�ponses correctes et incorrectes doivent �tre diff�rents");
define("Class_Answer_08","Il a au moins une bonne et une mauvaise r�ponse");
define("Class_Answer_09","vrai");
define("Class_Answer_10","faux");
define("Class_Progress_01","nombre de questions");
define("Class_Progress_02","Trop de donn�es stock�e dans la base de donn�es. "); // geh?rt zu Lernfortschritte_angezeigt
define("Class_Progress_03","voir le dernier test");
define("Class_Progress_04","progr�s de l'apprentissage");
define("Class_Progress_05","Plus aucune donn�e disponible"); /*Bsp: Keine weiteren Infos zu : 5 Fragen */
define("Class_Progress_06","Aucune information disponible pour:");
define("Class_Progress_07","question(s)");
define("Class_Progress_08","questions r�ponses incorrecte");
define("Class_Question_01","Cliquez ici pour voir plus d'informations sur ce sujet");
define("Class_Question_02","d�sactiver la question");
define("Class_Question_03","Activer la question");
define("Class_Question_04","supprimer la question");
define("Class_Question_05","questions non disponibles dans la base de donn�es");
define("Class_Question_06","d�tails sur la question");
define("Class_Quiz_01","il y a pas assez de questions � ce sujet. Veuillez choisir un autre sujet.");
define("Class_Quiz_02","test");
define("Class_Quiz_03","test d'�valuation");
define("Class_Quiz_04","Votre score total est :");
define("Class_Quiz_05","Minimum obligatoir pour valid�e le test est :");
define("Class_Quiz_06","Vous avez atteint: "); /*Bsp: vous avez atteint 0 %  .... */
define("Class_Quiz_07","et par cons�quent vous avez");/* vous avez atteint 0 %  et donc vous n'avez pas r�ussit le test   */
define("Class_Quiz_08","r�ussi le test.");
define("Class_Quiz_09","n'� pas r�ussit le test.");/*Bsp:You have reached 0 %  and so you did not pass  */
define("Class_Quiz_10_AnonymousCert", "Vous avez fait le test � l'aide d'un certificat anonyme, donc vous ne pouvez pas demander une version imprim� ou PDF certification de la r�ussite du test.<br />");
define("Class_Quiz_11_RequestCert", "Demander un certificat");
/*
define("Class_Quiz_12_ExplainCert", "En raison de probl�mes de confidentialit�, nous ne recueillons pas vos donn�es personnelles ici.<br /><br />".
                                    "Pour demander une version papier ou PDF certification envoyer un mail � <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificat pour AssurerChallenge\">education@cacert.org</a> et nous dire si vous souhaitez en version papier ou en version PDF. Si vous d�sirez un certificat imprim� Veuillez inclure votre adresse postale.<br />".
                                    "Le courrier peut �tre <a class=\"http\" href=\"education.txt\">chiffr�</a> et <b>doit �tre sign� par le certificat que vous avez utilis� pour effectuer le test</b> ainsi, nous pouvons v�rifier qui av�e r�ussi le test en v�rifiant son num�ro de s�rie. ".
                                    "Jetez un oeil � \"connect� en tant que:\" zone situ�e dans le coin sup�rieur droit pour voir les infos sur le certificat que vous utilisez.<br />".
                                    "<br /><em>Pour un certificat imprim� nous vous demandons pour un don d'environ 5 euros pour la diffusion � l'int�rieur de l'Europe et 10 euros pour le courrier mondial pour couvrir les frais de manutention et d'exp�dition.<br />".
                                    "Faire un don � l'aide de PayPal, cliquez sur le bouton ci-dessous, <a class=\"http\" href=\"https://www.cacert.org/index.php?id=13\">https://www.cacert.org/index.php?id=13</a> vous affiche toutes les m�thodes pour faire un don � CAcert.</em><br />".
                                    "<br />Nous sommes d�sol�s pour le d�sagr�ment..<br />");*/
define("Class_Quiz_12_ExplainCert", "Due to privacy concerns we may not collect your personal data here.<br /><br />".
                                    "We currently cannot process requests for Certificates of Achievement. You may nevertheless request on by mailing to <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificate for AssurerChallenge\">education@cacert.org</a> but please expect that handling the request may need a <b>very</b> long time!<br />".
                                    "<br />We are sorry for the inconvenience.<br />");
define("Class_Quiz_13_Donate5", "5 Euros pour les frais d'exp�dition � l'int�rieur de l'Europe");
define("Class_Quiz_14_Donate10", "10 Euros pour les frais hors d'Europe");
define("Class_Topic_01","nom");
define("Class_Topic_02","no. des questions");
define("Class_Topic_03","questions par test");
define("Class_Topic_04","exigence");
define("Class_Topic_05","Editer la rubrique");
define("Class_Topic_06","Activer la rubrique");
define("Class_Topic_07","D�sactiver la rubrique : toutes les questions de cette rubrique vont �tre d�sactiv�es �galement.");
define("Class_Topic_08","Supprimer la rubrique avec affect�e toutes les questions et r�ponses");
define("Class_Topic_09","pourcentage minimum doit �tre un nombre et ne doit pas �tre plus grand de 100");
define("Class_Topic_10","rubrique existe d�j�.");
define("Class_Topic_11","Nombre de questions doit �tre un entier non n�gatif.");
define("Class_Topic_12","exigence");
define("Collect_Question_01","Cette question existe d�j�. ");
define("Collect_Question_02","Au moins un �cart doit �tre d�fini. Les espaces sont cr��s par [ ]. La bonne r�ponse est � l'int�rieur des crochets. Tous les supports doivent �tre ferm�s. ");
define("Collect_Question_03","saisir la question");
define("Function_getContent_01","Bienvenue");
define("Function_getContent_02_Intro",'<div class="centered">Pour une courte introduction, veuillez jetez un oeil � <a href="http://wiki.cacert.org/wiki/AssurerChallenge" rel="external">le WiKi</a></div><br />');
define("Function_getTopic_01","Afficher la progression");
define("Function_getTopic_02","Afficher les statistiques");
define("Function_getTopic_03","d�marrer le test");
define("Function_reallyDel_01","�ffacement");
define("Function_reallyDel_02","Vous �tes certain de que vouloir supprimer cette rubrique ?");
define("Function_reallyDel_03","Si vous confirmez la suppr�ssion, toutes les questions et r�ponses seront supprim�s �galement.");
define("Function_reallyDel_04","Vous �tes certain de que vouloir supprimer cette question?");
define("Get_Content_01","Inscription annul�e !");
define("Global_01","vous devez �tre connect� pour utiliser cette fonction");
define("Global_02","pr�c�dent");
define("Global_03","corriger");
define("Global_04","date");
define("Global_05","r�sultat");
define("Global_06","ID");
define("Global_07",'<h4 class="centered">Aucune donn�e disponible</h4>');
define("Global_08","question");
define("Global_09","sujet");
define("Global_10","pos");
define("Global_11","fr�quence");
define("Global_12","type de question");
define("Global_13","Oui");
define("Global_14","Non");
define("Global_15","r�pondu correctement dans %");
define("Global_16","Vous n'�tes pas connect� � l'heure actuelle");
define("Global_17","la connexion a �chou� ! Un certificat de client CAcert valide est requis.");
define("Global_18","Question ID");
define("Global_19","Echec de connexion");
define("Global_20","description");
define("Index_01","Connect� en tant que :");
define("Login_01","votre certificat pourrait ne pas �tre valid�.");
define("Login_02","votre certificat a �t� r�voqu�.");
define("Login_03_No_Org_Certs","certificats d'organisation ne sont pas accept�s pour chats car ils ne peuvent pas �tre facilement remonter � un compte d'utilisateur.");
define("Menue_01","Help");
define("Menue_02","connexion");
define("Menue_03","d�connexion");
define("Menue_04","progr�s");
define("Menue_05","statistiques");
define("Menue_06","Tests");
define("Menue_07","Th�mes");
define("Menue_08","EN");
define("Menue_09","DE");
define("Menue_10","FR"); /* ?? a rajout� certainement has certainly added */
define("Statistic_01","meilleur r�sultat pour sujet: ");
define("Statistic_02","pires r�sultats pour sujet: ");
define("Statistic_03","questions dans cette rubrique:");
define("Statistic_04","R�ussi");
define("Statistic_05","�chec");
define("Statistic_06","Infos utilisateur");
define("Statistic_07","Utilisateur");
define("Statistic_08","utilisateurs enregistr�s");
define("Statistic_09","administrateurs");
define("Statistic_10","certificats racine");
define("Statistic_11","certificat de classe I utilisateur");
define("Statistic_12","certificat de classe III utilisateur");
define("Statistic_13","param�tres langue");
define("Statistic_14","allemand");
define("Statistic_15","anglais");
define("Statistic_16","option de livraison ");
define("Statistic_17","mail");
define("Statistic_18","email");
define("Statistic_19","aucun");
define("Statistic_20","infos de test");
define("Statistic_21","date");
define("Statistic_22","tests  termin�s");
define("Statistic_23","tests r�ussis");
define("Statistic_24","fran�ais"); /* ligne rajout� num�rotation d�caler a corrig� lors de l'int�gration Line numbering added offset corrected during the integration */
define("Title_01","CATS rubriques");
define("Title_02","CATS collect questions");
define("Title_03","CATS statistic");
define("Title_04","CATS d�marrer le Test");
define("Title_05","CATS D�couvrez les progr�s");
define("Title_06","CATS info certificat");
define("Topic_01","Remarque : Vous ne pouvez pas d�clarer les r�ponses comme correcte ici, qui ont �t� d�clar�es incorrect ci-dessous.");
define("Topic_02","Pr�sentation des rubriques");
define("Topic_03","questions sur cette rubrique:");
?>