<?php
/* $Id$ */

/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = '"verdana ce", "arial ce", verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, "verdana ce", "arial ce", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', '�t', 'St', '�t', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';
$timespanfmt = '%s dn�, %s hod�n, %s min�t a %s sek�nd';

$strAPrimaryKey = 'Bol pridan� prim�rny k��� pre %s';
$strAbortedClients = 'Preru�en�';
$strAbsolutePathToDocSqlDir = 'Pros�m zadajte absol�tnu cestu k adres�ru docSQL na servere';
$strAccessDenied = 'Pr�stup zamietnut�';
$strAction = 'Akcia';
$strAddDeleteColumn = 'Prida�/Odobra� polia st�pcov';
$strAddDeleteRow = 'Prida�/Odobra� krit�ria riadku';
$strAddNewField = 'Prida� nov� pole';
$strAddPriv = 'Prida� nov� opr�vnenie';
$strAddPrivMessage = 'Opr�vnenie bolo pridan�.';
$strAddPrivilegesOnDb = 'Prida� opr�vnenia pre nasleduj�cu datab�zu';
$strAddPrivilegesOnTbl = 'Prida� opr�vnenia pre nasleduj�cu tabu�ku';
$strAddSearchConditions = 'Prida� vyh�ad�vacie parametre (obsah dotazu po "where" pr�kaze):';
$strAddToIndex = 'Prida� do indexu &nbsp;%s&nbsp;st�pec';
$strAddUser = 'Prida� nov�ho pou��vate�a';
$strAddUserMessage = 'Pou��vate� bol pridan�.';
$strAddedColumnComment = 'Pridan� koment�r k st�pcu';
$strAddedColumnRelation = 'Pridan� vz�ah pre st�pec';
$strAdministration = 'Administr�cia';
$strAffectedRows = ' Ovplyvnen� riadky: ';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Sp�';
$strAfterInsertNewInsert = 'Vlo�i� nov� z�znam';
$strAll = 'V�etko';
$strAllTableSameWidth = 'zobrazi� v�etky tabu�ky s rovnakou ��rkou?';
$strAlterOrderBy = 'Zmeni� poradie tabu�ky pod�a';
$strAnIndex = 'Bol pridan� index pre %s';
$strAnalyzeTable = 'Analyzova� tabu�ku';
$strAnd = 'a';
$strAny = 'Ak�ko�vek';
$strAnyColumn = 'Ak�ko�vek st�pec';
$strAnyDatabase = 'Ak�ko�vek datab�za';
$strAnyHost = 'Ak�ko�vek hostite�';
$strAnyTable = 'Ak�ko�vek tabu�ka';
$strAnyUser = 'Ak�ko�vek pou��vate�';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na za�iatku tabu�ky';
$strAtEndOfTable = 'Na konci tabu�ky';
$strAttr = 'Atrib�ty';

$strBack = 'Sp�';
$strBeginCut = 'ZA�IATOK V�SEKU';
$strBeginRaw = 'ZA�IATOK TOKU';
$strBinary = 'Bin�rny';
$strBinaryDoNotEdit = 'Bin�rny - neupravujte ';
$strBookmarkDeleted = 'Z�znam z ob��ben�ch bol zmazan�.';
$strBookmarkLabel = 'N�zov';
$strBookmarkQuery = 'Ob��ben� SQL dotaz';
$strBookmarkThis = 'Prida� tento SQL dotaz do ob��ben�ch';
$strBookmarkView = 'Iba prezrie�';
$strBrowse = 'Prech�dza�';
$strBzError = 'nepodarilo sa skomprimova� v�stup z d�vodu chybn�ho roz��renia pre kompresiu Bz2 v tejto verzii php. Doporu�uje sa nastavi� <code>$cfg[\'BZipDump\']</code> v konfigur�cii phpMyAdmin na <code>FALSE</code>. Ak si �el�te pou��va� kompresiu Bz2 mali by ste nain�talova� nov�iu verziu php. Viac inform�ci� z�skate z popisu chyby: %s.';
$strBzip = '"bzipped"';

$strCannotLogin = 'Ned� sa prihl�si� k MySQL serveru';
$strCantLoad = 'ned� sa nahra� roz��renie %s,<br />pros�m skontrolujte konfigur�ciu PHP';
$strCantLoadMySQL = 'nie je mo�n� nahra� roz��renie pre MySQL,<br />pros�m skontrolujte konfigur�ciu PHP.';
$strCantLoadRecodeIconv = 'Nie je mo�n� nahra� roz��renie iconv alebo recode potrebn� pre prevod znakov�ch sad. Upravte nastavenie php tak aby umo��ovalo pou�i� tieto roz��renia alebo vypnite t�to vlastnos� v konfigur�cii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nie je mo�n� premenova� index na PRIMARY!';
$strCantUseRecodeIconv = 'Nie je mo�n� pou�i� funkcie iconv,libiconv a recode_string aj napriek tomu, �e roz��renia s� nahran�. Skontrolujte pros�m nastavenie PHP.';
$strCardinality = 'Mohutnos�';
$strCarriage = 'N�vrat voz�ku (Carriage return): \\r';
$strChange = 'Zmeni�';
$strChangeCopyMode = 'Vytvori� pou��vate�a s rovnak�mi pr�vami a...';
$strChangeCopyModeCopy = '... zachova� p�vodn�ho pou��vate�a.';
$strChangeCopyModeDeleteAndReload = ' ... zmaza� p�vodn�ho pou��vate�a z tabuliek pou��vate�ov a potom znovuna��ta� opr�vnenia.';
$strChangeCopyModeJustDelete = ' ... zmaza� p�vodn�ho pou��vate�a z tabuliek pou��vate�ov.';
$strChangeCopyModeRevoke = ' ... odobra� v�etky opr�vnenia p�vodn�mu pou��vate�ovi a n�sledne ho zmaza�.';
$strChangeCopyUser = 'Zmeni� inform�cie o pou��vate�ovi / Kop�rova� pou��vate�a';
$strChangeDisplay = 'Zvolte, ktor� pole zobrazi�';
$strChangePassword = 'Zmeni� heslo';
$strCharsetOfFile = 'Znakov� sada s�boru:';
$strCheckAll = 'Ozna�i� v�etko';
$strCheckDbPriv = 'Skontrolova� opr�vnenia datab�zy';
$strCheckPrivs = 'Skontrolova� opr�vnenia';
$strCheckPrivsLong = 'Skontrolova� opr�vnenia pre datab�zu &quot;%s&quot;.';
$strCheckTable = 'Skontrolova� tabu�ku';
$strChoosePage = 'Pros�m zvolte si Str�nku, ktor� chcete upravi�';
$strColComFeat = 'Zobrazova� koment�re st�pcov';
$strColumn = 'St�pec';
$strColumnNames = 'N�zvy st�pcov';
$strColumnPrivileges = 'Opr�vnenia pre jednotliv� st�pce';
$strCommand = 'Pr�kaz';
$strComments = 'Koment�re';
$strCompleteInserts = '�pln� vlo�enie';
$strCompression = 'Kompresia';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.';
$strConfigureTableCoord = 'Pros�m skonfigurujte koordin�ty pre tabu�ku %s';
$strConfirm = 'Skuto�ne si �el�te toto vykona�?';
$strConnections = 'Spojenia';
$strCookiesRequired = 'Cookies musia by� povolen�, pokia� chcete pokra�ova�.';
$strCopyTable = 'Skop�rova� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strCopyTableOK = 'Tabu�ka %s bola skor�rovan� do %s.';
$strCouldNotKill = 'Neporadilo za zabi� vl�kno %s. Jeho beh bol pravdepodobne u� ukon�en�.';
$strCreate = 'Vytvori�';
$strCreateIndex = 'Vytvori� index na&nbsp;%s&nbsp;st�pcoch';
$strCreateIndexTopic = 'Vytvori� nov� index';
$strCreateNewDatabase = 'Vytvori� nov� datab�zu';
$strCreateNewTable = 'Vytvori� nov� tabu�ku v datab�ze %s';
$strCreatePage = 'Vytvori� nov� Str�nku';
$strCreatePdfFeat = 'Vytv�ranie PDF';
$strCriteria = 'Krit�ria';

$strDBGContext = 'Kontext';
$strDBGContextID = 'Kontext ID';
$strDBGHits = 'Z�sahov';
$strDBGLine = 'Riadok';
$strDBGMaxTimeMs = 'Max. �as, ms';
$strDBGMinTimeMs = 'Min �as, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = '�as/Z�sah, ms';
$strDBGTotalTimeMs = 'Celkov� �as, ms';
$strData = 'D�ta';
$strDataDict = 'D�tov� slovn�k';
$strDataOnly = 'Iba d�ta';
$strDatabase = 'Datab�za ';
$strDatabaseHasBeenDropped = 'Datab�za %s bola zmazan�.';
$strDatabaseWildcard = 'Datab�za (nahradzuj�ce znaky povolen�):';
$strDatabases = 'datab�z(y)';
$strDatabasesDropped = '�spe�ne zru�en�ch datab�z: %s.';
$strDatabasesStats = '�tatistiky datab�zy';
$strDatabasesStatsDisable = 'Skry� �tatistiky';
$strDatabasesStatsEnable = 'Zobrazi� �tatistiky';
$strDatabasesStatsHeavyTraffic = 'Pozn�mka: Aktivovanie �tatist�k datab�zy m��e sp�sobi� zna�n� zv��enie sie�ovej prev�dzky medzi datab�zou a web serverom.';
$strDbPrivileges = 'Opr�vnenia pre jednotliv� datab�zy';
$strDbSpecific = 'z�visl� na datab�ze';
$strDefault = 'Predvolen�';
$strDefaultValueHelp = 'Pre predvolen� hodnoty, pros�m zadajte iba jednu hodnotu bez �vodzoviek alebo uv�dzac�ch znakov, napr.: a';
$strDelete = 'Zmaza�';
$strDeleteAndFlush = 'Odstr�ni� pou��vate�ov a znovuna��ta� pr�va.';
$strDeleteAndFlushDescr = 'Toto je naj�istej�ie rie�enie, ale znovuna��tanie pr�v m��e chv��u trva�.';
$strDeleteFailed = 'Mazanie bolo ne�spe�n�!';
$strDeleteUserMessage = 'Pou��vate� %s bol zmazan�.';
$strDeleted = 'Riadok bol zmazan�';
$strDeletedRows = 'Zmazan� riadky:';
$strDeleting = 'Odstra�uje sa %s';
$strDescending = 'Zostupne';
$strDisabled = 'Vypnut�';
$strDisplay = 'Zobrazi�';
$strDisplayFeat = 'Zobrazi� vlastnosti';
$strDisplayOrder = 'Zobrazi� zoraden�:';
$strDisplayPDF = 'Zobrazi� sch�mu PDF';
$strDoAQuery = 'Vykona� "dotaz pod�a pr�kladu" (nahradzuj�ci znak: "%")';
$strDoYouReally = 'Skuto�ne chcete vykona� pr�kaz ';
$strDocu = 'Dokument�cia';
$strDrop = 'Odstr�ni�';
$strDropDB = 'Odstr�ni� datab�zu %s';
$strDropSelectedDatabases = 'Zru�i� vybran� datab�zy';
$strDropTable = 'Zru�i� tabu�ku';
$strDropUsersDb = 'Odstr�ni� datab�zy s rovnak�m menom ako maj� pou��vatelia.';
$strDumpXRows = 'Zobrazi� %s riadkov od riadku %s.';
$strDumpingData = 'S�ahujem d�ta pre tabu�ku';
$strDynamic = 'dynamick�';

$strEdit = 'Upravi�';
$strEditPDFPages = 'Upravi� PDF Str�nky';
$strEditPrivileges = 'Upravi� opr�vnenia';
$strEffective = 'Efekt�vny';
$strEmpty = 'Vypr�zdni�';
$strEmptyResultSet = 'MySQL vr�til pr�zdny v�sledok (tj. nulov� po�et riadkov).';
$strEnabled = 'Zapnut�';
$strEnd = 'Koniec';
$strEndCut = 'KONIEC V�SEKU';
$strEndRaw = 'KONIEC TOKU';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL opr�vnen� s� uv�dzan� v angli�tine. ';
$strError = 'Chyba';
$strExplain = 'Vysvetli� SQL';
$strExport = 'Exportova�';
$strExportToXML = 'Exportova� do form�tu XML';
$strExtendedInserts = 'Roz��ren� vkladanie';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepodaren�ch pokusov';
$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s bolo odstr�nen�';
$strFields = 'Polia';
$strFieldsEmpty = ' Po�et pol� je pr�zdny! ';
$strFieldsEnclosedBy = 'Polia uzatvoren�';
$strFieldsEscapedBy = 'Polia uveden� pomocou';
$strFieldsTerminatedBy = 'Polia ukon�en�';
$strFileCouldNotBeRead = 'S�bor sa ned� pre��ta�';
$strFixed = 'pevn�';
$strFlushPrivilegesNote = 'Pozn�mka: phpMyAdmin z�skava pr�va pou��vate�ov priamo z tabuliek MySQL. Obsah t�chto tabuliek sa m��e l��i� od pr�v, ktor� pou��va server, ak boli tieto tabu�ky ru�ne upraven�. V tomto pr�pade sa odpor��a vykona� %sznovuna��tanie pr�v%s predt�m ako budete pokra�ova�.';
$strFlushTable = 'Vypr�zdni� tabu�ku ("FLUSH")';
$strFormEmpty = 'Ch�baj�ca polo�ka vo formul�ri !';
$strFormat = 'Form�t';
$strFullText = 'Pln� texty';
$strFunction = 'Funkcia';

$strGenBy = 'Vygenerovan�';
$strGenTime = 'Vygenerovan�:';
$strGeneralRelationFeat = 'Mo�nosti v�eobecn�ch vz�ahov';
$strGlobal = 'glob�lny';
$strGlobalPrivileges = 'Glob�lne pr�va';
$strGlobalValue = 'Glob�lna hodnota';
$strGo = 'Vykonaj';
$strGrantOption = 'Prideli�';
$strGrants = 'Opr�vnenia';
$strGzip = '"gzip-ovan�"';

$strHasBeenAltered = 'bola zmenen�.';
$strHasBeenCreated = 'bola vytvoren�.';
$strHaveToShow = 'Zvolte pros�m aspo� jeden st�pec, ktor� chcete zobrazi�';
$strHome = 'Domov';
$strHomepageOfficial = 'Ofici�lne str�nky phpMyAdmin-a';
$strHomepageSourceforge = 'Download str�nka phpMyAdmin-a (Sourceforge)';
$strHost = 'Hostite�';
$strHostEmpty = 'N�zov hostite�a je pr�zdny!';

$strId = 'ID';
$strIdxFulltext = 'Cel� text';
$strIfYouWish = 'Ak si �el�te nahra� iba ur�it� st�pce tabu�ky, �pecifikujte ich ako zoznam pol� oddelen� �iarkou.';
$strIgnore = 'Ignorova�';
$strIgnoringFile = 'Ignorujem s�bor %s';
$strImportDocSQL = 'Importova� s�bory docSQL';
$strImportFiles = 'Importova� s�bory';
$strImportFinished = 'Importovanie ukon�en�';
$strInUse = 'pr�ve sa pou��va';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index pre %s bol odstr�nen�';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexes = 'Indexy';
$strInsecureMySQL = 'Konfigura�n� s�bor obsahuje nastavenia (root bez hesla), ktor� zodpovedaj� predvolen�mu privilegovan�mu MySQL ��tu. Ak MySQL server be�� s t�mto nastaven�m, nie je zabezpe�en� proti napadnutiu, t�to bezpe�nostn� chyba by mala by� ur�chlene odstr�nen�.';
$strInsert = 'Vlo�i�';
$strInsertAsNewRow = 'Vlo�i� ako nov� riadok';
$strInsertNewRow = 'Vlo�i� nov� riadok';
$strInsertTextfiles = 'Vlo�i� textov� s�bory do tabu�ky';
$strInsertedRows = 'Vlo�en� riadky:';
$strInstructions = 'In�trukcie';
$strInvalidName = '"%s" je rezervovan� slovo, nem��e by� pou�it� ako n�zov datab�zy/tabu�ky/po�a.';

$strJumpToDB = 'Na datab�zu &quot;%s&quot;.';
$strJustDelete = 'Iba odstr�ni� pou��vate�lov z tabuliek pr�v.';
$strJustDeleteDescr = '&quot;Odstr�nen�&quot; pou��vatelia bud� ma� k serveru ako predt�m a� do znovuna��tania pr�v.';

$strKeepPass = 'Nezmeni� heslo';
$strKeyname = 'K���ov� n�zov';
$strKill = 'Zabi�';

$strLaTeX = 'LaTeX';
$strLandscape = 'Na ��rku';
$strLength = 'D�ka';
$strLengthSet = 'D�ka/Nastavi�*';
$strLimitNumRows = 'z�znamov na str�nku';
$strLineFeed = 'Ukon�enie riadku (Linefeed): \\n';
$strLines = 'Riadky';
$strLinesTerminatedBy = 'Riadky ukon�en�';
$strLinkNotFound = 'Linka nebola n�jden�';
$strLinksTo = 'Linkova� na';
$strLocalhost = 'Lok�lny';
$strLocationTextfile = 'Lok�cia textov�ho s�boru';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Pou��vate�:';
$strLogin = 'Login';
$strLoginInformation = 'Prihl�senie';
$strLogout = 'Odhl�si� sa';

$strMissingBracket = 'Ch�ba z�tvorka';
$strModifications = 'Zmeny boli ulo�en�';
$strModify = 'Zmeni�';
$strModifyIndexTopic = 'Modifikova� index';
$strMoreStatusVars = '�al�ie inform�cie o stave';
$strMoveTable = 'Presun�� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strMoveTableOK = 'Tabu�ka %s bola presunut� do %s.';
$strMySQLCharset = 'Znakov� sada v MySQL';
$strMySQLReloaded = 'MySQL znovu-na��tan�.';
$strMySQLSaid = 'MySQL hl�si: ';
$strMySQLServerProcess = 'MySQL %pma_s1% be�� na %pma_s2% ako %pma_s3%';
$strMySQLShowProcess = 'Zobrazi� procesy';
$strMySQLShowStatus = 'Zobrazi� MySQL inform�cie o behu';
$strMySQLShowVars = 'Zobrazi� MySQL syst�mov� premenn�';

$strName = 'N�zov';
$strNext = '�al��';
$strNo = 'Nie';
$strNoDatabases = '�iadne datab�zy';
$strNoDatabasesSelected = 'Neboli vybran� �iadne datab�zy.';
$strNoDescription = 'bez Popisu';
$strNoDropDatabases = 'Mo�nos� "DROP DATABASE" vypnut�.';
$strNoExplain = 'Presko�i� vysvetlenie SQL';
$strNoFrames = 'phpMyAdmin funguje lep�ie s prehliada�mi podporuj�cimi <b>r�my</b>.';
$strNoIndex = 'Nebol definovan� �iadny index!';
$strNoIndexPartsDefined = '�asti indexu neboli definovan�!';
$strNoModification = '�iadna zmena';
$strNoPassword = '�iadne heslo';
$strNoPhp = 'bez PHP k�du';
$strNoPrivileges = '�iadne opr�vnenia';
$strNoQuery = '�iadny SQL dotaz!';
$strNoRights = 'Nem�te dostato�n� pr�va na vykonanie tejto akcie!';
$strNoTablesFound = 'Neboli n�jden� �iadne tabu�ky v tejto dat�baze.';
$strNoUsersFound = 'Nebol n�jden� �iadny pou��vate�.';
$strNoUsersSelected = 'Nebol vybran� �iaden pou��vate�.';
$strNoValidateSQL = 'Presko�i� potvrdenie platnosti SQL';
$strNone = '�iadny';
$strNotNumber = 'Toto nie je ��slo!';
$strNotOK = 'chyba';
$strNotSet = 'Tabu�ka <b>%s</b> nebola n�jden� alebo nie je nastaven� v %s';
$strNotValidNumber = ' nie je platn� ��slo riadku!';
$strNull = 'Nulov�';
$strNumSearchResultsInTable = '%s v�skyt(ov)v tabu�ke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> v�skyt(ov)';
$strNumTables = 'Tabu�ky';

$strOK = 'OK';
$strOftenQuotation = '�asto uvodzuj�ce znaky. Volite�ne znamen�, �e iba polia typu char a varchar s� uzatvoren� do "uzatv�rac�ch" znakov.';
$strOperations = 'Oper�cie';
$strOptimizeTable = 'Optimalizova� tabu�ku';
$strOptionalControls = 'Volite�n�. Ur�uje ako zapisova� alebo ��ta� �peci�lne znaky.';
$strOptionally = 'Volite�ne';
$strOptions = 'Vo�by';
$strOr = 'alebo';
$strOverhead = 'Naviac';

$strPHP40203 = 'Pou��vate PHP 4.2.3, ktor� ma v�nu chybu pri pr�ci s viac bajtov�mi znakmi (mbstring). V PHP je t�to chyba zdokumentovan� pod ��slom 19404. Nedoporu�uje sa pou��va� t�to verziu PHP s phpMyAdminom.';
$strPHPVersion = 'Verzia PHP';
$strPageNumber = '��slo str�nky:';
$strPartialText = '�iasto�n� texty';
$strPassword = 'Heslo';
$strPasswordChanged = 'Heslo pre %s bolo �spe�ne zmenen�.';
$strPasswordEmpty = 'Heslo je pr�zdne!';
$strPasswordNotSame = 'Hesl� sa nezhoduj�!';
$strPdfDbSchema = 'Sch�ma datab�zy "%s"  - Strana %s';
$strPdfInvalidPageNum = 'Nedefinovan� ��slo str�nky v PDF!';
$strPdfInvalidTblName = 'Tabu�ka "%s" neexistuje!';
$strPdfNoTables = '�iadne tabu�ky';
$strPerHour = 'za hodinu';
$strPhp = 'Vytvori� PHP k�d';
$strPmaDocumentation = 'phpMyAdmin Dokument�cia';
$strPmaUriError = 'Direkt�va <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfigura�nom s�bore MUS� by� nastaven�!';
$strPortrait = 'Na v��ku';
$strPos1 = 'Za�iatok';
$strPrevious = 'Predch�dzaj�ci';
$strPrimary = 'Prim�rny';
$strPrimaryKey = 'Prim�rny k���';
$strPrimaryKeyHasBeenDropped = 'Prim�rny k��� bol zru�en�';
$strPrimaryKeyName = 'N�zov prim�rneho k���a mus� by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> by� <b>iba</b> meno prim�rneho k���a!)';
$strPrint = 'Vytla�i�';
$strPrintView = 'N�h�ad k tla�i';
$strPrivDescAllPrivileges = 'V�etky opr�vnenia okrem GRANT.';
$strPrivDescAlter = 'Povol� meni� �trukt�ru existuj�cich tabuliek.';
$strPrivDescCreateDb = 'Povol� vytv�ranie nov�ch datab�z a tabuliek.';
$strPrivDescCreateTbl = 'Povol� vytv�ranie nov�ch tabuliek.';
$strPrivDescCreateTmpTable = 'Povol� vytv�ranie do�asn�ch tabuliek.';
$strPrivDescDelete = 'Povol� mazanie d�t.';
$strPrivDescDropDb = 'Povol� odstra�ovanie datab�z a tabuliek.';
$strPrivDescDropTbl = 'Povol� odstra�ovanie tabuliek.';
$strPrivDescExecute = 'Povol� sp���anie ulo�en�ch proced�r. Nefunguje v tejto verzii MySQL.';
$strPrivDescFile = 'Povol� importovanie a exportovanie d�t zo/do s�borov na serveri.';
$strPrivDescGrant = 'Povol� prid�vanie u�ivatelov a pr�v bez znovuna��tania tabuliek pr�v.';
$strPrivDescIndex = 'Povol� vytv�ranie a mazanie indexov.';
$strPrivDescInsert = 'Povol� vkladanie a nahradzovanie d�t.';
$strPrivDescLockTables = 'Povol� zmaknutie tabuliek pre aktu�lne vl�kno.';
$strPrivDescMaxConnections = 'Obmedz� po�et nov�ch spojen�, ktor� m��e pou��vate� vytvori� za hodinu.';
$strPrivDescMaxQuestions = 'Obmedz� po�et dotazov, ktor� m��e pou��vate� odosla� za hodinu.';
$strPrivDescMaxUpdates = 'Obmedz� po�et pr�kazov meniacich tabu�ku alebo datab�zu, ktor� m��e pou��vate� odosla� za hodinu.';
$strPrivDescProcess3 = 'Povol� zab�janie procesov in�m pou��vate�lom.';
$strPrivDescProcess4 = 'Povol� prezeranie kompletn�ch dotazov v zozname procesov.';
$strPrivDescReferences = 'Nefunguje v tejto verzii MySQL.';
$strPrivDescReload = 'Povol� znovuna��tanie nastaven� a vypr�zd�ovanie vyrovn�vac�ch pam�t� serveru.';
$strPrivDescReplClient = 'Povol� pou��vate�ovi zisti� kde je hlavn� / pomocn� server.';
$strPrivDescReplSlave = 'Potrebn� pre replik�ciu pomocn�ch serverov.';
$strPrivDescSelect = 'Povol� ��tanie d�t.';
$strPrivDescShowDb = 'Povol� pr�stup ku kompletn�mu zoznamu datab�z.';
$strPrivDescShutdown = 'Povol� vypnutie serveru.';
$strPrivDescSuper = 'Povol� spojenie aj v pr�pade, �e bol dosiahnut� maxim�lny po�et spojen�. Potrebn� pre v��inu oper�ci� pri spr�ve serveru ako nastavovanie glob�lny premenn�ch alebo zab�janie procesov in�ch pou��vate�ov.';
$strPrivDescUpdate = 'Povol� menenie d�t.';
$strPrivDescUsage = '�iadne pr�va.';
$strPrivileges = 'Opr�vnenia';
$strPrivilegesReloaded = 'Pr�va boli �spe�ne znovuna��tan�.';
$strProcesslist = 'Zoznam procesov';
$strProperties = 'Vlastnosti';
$strPutColNames = 'Prida� n�zvy pol� na prv� riadok';

$strQBE = 'Dotaz pod�a pr�kladu';
$strQBEDel = 'Zmaza�';
$strQBEIns = 'Vlo�i�';
$strQueryOnDb = ' SQL dotaz v datab�ze <b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Typ dotazu';

$strReType = 'Potvrdi�';
$strReceived = 'Prijat�';
$strRecords = 'Z�znamov';
$strReferentialIntegrity = 'Skontrolova� referen�n� integritu:';
$strRelationNotWorking = 'Pr�davn� vlastnosti pre pr�cu s prepojen�mi tabu�kami boli deaktivovan�. Ak chcete zisti� pre�o, kliknite %ssem%s.';
$strRelationView = 'Zobrazi� spojitosti';
$strRelationalSchema = 'Rela�n� sch�ma';
$strReloadFailed = 'Znovu-na��tanie MySQL bolo ne�spe�n�.';
$strReloadMySQL = 'Znovu-na��ta� MySQL';
$strReloadingThePrivileges = 'Znovuna��tanie pr�v';
$strRememberReload = 'Nezabudnite znovu-na��ta� MySQL server.';
$strRemoveSelectedUsers = 'Odstr�ni� vybran�ch pou��vate�ov';
$strRenameTable = 'Premenova� tabu�ku na';
$strRenameTableOK = 'Tabu�ka %s bola premenovan� na %s';
$strRepairTable = 'Opravi� tabu�ku';
$strReplace = 'Nahradi�';
$strReplaceTable = 'Nahradi� d�ta v tabu�ke s�borom';
$strReset = 'P�vodn� (Reset)';
$strResourceLimits = 'Obmedzenie zdrojov';
$strRevoke = 'Zru�i�';
$strRevokeAndDelete = 'Odobranie v�etk�ch akt�vnych pr�v pou��vate�om a ich n�sledn� odstr�nenie.';
$strRevokeAndDeleteDescr = 'U��vatelia bud� ma� st�le pr�vo USAGE (pou��vanie) a� do znovuna��tania pr�v.';
$strRevokeGrant = 'Zru�i� polovenie pride�ova� opr�vnenia';
$strRevokeGrantMessage = 'Bolo zru�en� pr�vo pride�ova� opr�vnenia pre %s';
$strRevokeMessage = 'Boli zru�en� opr�vnenia pre %s';
$strRevokePriv = 'Zru�i� opr�vnenia';
$strRowLength = 'D�ka riadku';
$strRowSize = ' Ve�kos� riadku ';
$strRows = 'Riadkov';
$strRowsFrom = 'riadky za��naj� od';
$strRowsModeHorizontal = 'horizont�lnom';
$strRowsModeOptions = 'v(o) %s m�de a opakova� hlavi�ky po ka�d�ch %s bunk�ch';
$strRowsModeVertical = 'vertik�lnom';
$strRowsStatistic = '�tatistika riadku';
$strRunQuery = 'Odo�li dotaz';
$strRunSQLQuery = 'Spusti� SQL dotaz/dotazy na datab�zu %s';
$strRunning = 'be�� na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Je mo�n�, �e ste na�li chybu v SQL syntaktickom analyz�tore. Presk�majte podrobne SQL dotaz, predov�etk�m spr�vnos� umiestnenia �vodzoviek. �al�ia mo�nos� je, �e nahr�vate s�bor s bin�rnymi d�tami nezap�san�mi v �vodzovk�ch. M��ete tie� vysk��a� pou�i� pr�kazov� riadok MySQL na odstr�nenie probl�mu. Pokial st�le m�te probl�my alebo syntaktick� analyz�tor SQL st�le hl�si chybu v dotaze, ktor� v pr�kazovom riadku funguje, pros�m pok�ste sa zredukova� dotaz na �o najmen��, v ktorom sa probl�m e�te vyskytuje a ohl�ste chybu na str�nke phpMyAdmina spolu so sekciou V�PIS uveden� ni��ie:';
$strSQLParserUserError = 'Vyskytla sa chyba v SQL dotaze. Ni��ie uveden� MySQL v�stup (ak je nejak�) V�m m��e pom�c� odstr�ni� probl�m';
$strSQLQuery = 'SQL dotaz';
$strSQLResult = 'v�sledok SQL';
$strSQPBugInvalidIdentifer = 'Neplatn� identifik�tor';
$strSQPBugUnclosedQuote = 'Neuzatvoren� �vodzovky';
$strSQPBugUnknownPunctuation = 'Nezn�my interpunk�n� re�azec';
$strSave = 'Ulo�i�';
$strScaleFactorSmall = 'Mierka je pr�li� mala na roztiahnutie sch�my na str�nku';
$strSearch = 'H�ada�';
$strSearchFormTitle = 'H�ada� v datab�ze';
$strSearchInTables = 'V tabu�ke(�ch):';
$strSearchNeedle = 'Slovo(�) alebo hodnotu(y), ktor� chcete vyh�ada� (nahradzuj�ci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'v�etky slov�';
$strSearchOption3 = 'presn� v�raz';
$strSearchOption4 = 'ako regul�rny v�raz';
$strSearchResultsFor = 'Preh�ada� v�sledky na "<i>%s</i>" %s:';
$strSearchType = 'N�jdi:';
$strSelect = 'Vybra�';
$strSelectADb = 'Pros�m vyberte si datab�zu';
$strSelectAll = 'Ozna�i� v�etko';
$strSelectFields = 'Zvoli� pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSelectTables = 'Vybra� Tabu�ky';
$strSend = 'Po�li';
$strSent = 'Odoslan�';
$strServer = 'Server %s';
$strServerChoice = 'Vo�ba serveru';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento server be�� %s. Bol spusten� %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Premenn�';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Premenn� a nastavenia serveru';
$strServerVersion = 'Verzia serveru';
$strSessionValue = 'Hodnota sedenia';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", pros�m zad�vajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca potrebujete zada� sp�tn� lom�tko ("\") alebo apostrof ("\'") pri t�chto hodnot�ch, zadajte ich napr�klad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShow = 'Uk�za�';
$strShowAll = 'Zobrazi� v�etko';
$strShowColor = 'Zobrazi� farbu';
$strShowCols = 'Zobrazi� st�pce';
$strShowDatadictAs = 'Form�t d�tov�ho slovn�ka';
$strShowGrid = 'Zobrazi� mrie�ku';
$strShowPHPInfo = 'Zobrazi� inform�cie o PHP';
$strShowTableDimension = 'Zobrazi� rozmery tabuliek';
$strShowTables = 'Zobrazi� tabu�ky';
$strShowThisQuery = ' Zobrazi� tento dotaz znovu ';
$strShowingRecords = 'Uk�za� z�znamy ';
$strSingly = '(po jednom)';
$strSize = 'Ve�kos�';
$strSort = 'Triedi�';
$strSpaceUsage = 'Zabran� miesto';
$strSplitWordsWithSpace = 'Slov� s� rozdelen� medzerou (" ").';
$strStatement = '�daj';
$strStatus = 'Stav';
$strStrucCSV = 'CSV d�ta';
$strStrucData = '�trukt�ru a d�ta';
$strStrucDrop = 'Pridaj \'vyma� tabu�ku\'';
$strStrucExcelCSV = 'CSV pre Ms Excel d�ta';
$strStrucOnly = 'Iba �trukt�ru';
$strStructPropose = 'Navrhn�� �trukt�ru tabu�ky';
$strStructure = '�trukt�ra';
$strSubmit = 'Odo�li';
$strSuccess = 'SQL dotaz bol �spe�ne vykonan�';
$strSum = 'Celkom';

$strTable = 'Tabu�ka';
$strTableComments = 'Koment�r k tabu�ke';
$strTableEmpty = 'Tabu�ka je pr�zdna!';
$strTableHasBeenDropped = 'Tabu�ka %s bola odstr�nen�';
$strTableHasBeenEmptied = 'Tabu�ka %s bola vypr�zden�';
$strTableHasBeenFlushed = 'Tabu�ka %s bola vypr�zdnen�';
$strTableMaintenance = '�dr�ba tabu�ky';
$strTableOfContents = 'Obsah';
$strTableStructure = '�trukt�ra tabu�ky pre tabu�ku';
$strTableType = 'Typ tabu�ky';
$strTables = '%s tabu�ka(y)';
$strTblPrivileges = 'Opr�vnenia pre jednotliv� tabu�ky';
$strTextAreaLength = ' Toto mo�no nep�jde upravi�,<br /> kv�li svojej d�ke ';
$strTheContent = 'Obsah V�ho s�boru bol vlo�en�.';
$strTheContents = 'Obsah s�boru prep��e obsah vybranej tabu�ky v riadkoch s identick�m prim�rnym alebo unik�tnym k���om.';
$strTheTerminator = 'Ukon�enie pol�.';
$strThisHost = 'Tento po��ta�';
$strThisNotDirectory = 'Nebol zadan� adres�r';
$strThreadSuccessfullyKilled = 'Vl�kno %s bol �spe�ne zabit�.';
$strTime = '�as';
$strTotal = 'celkovo';
$strTotalUC = 'Celkom';
$strTraffic = 'Prev�dzka';
$strType = 'Typ';

$strUncheckAll = 'Odzna�i� v�etko';
$strUnique = 'Unik�tny';
$strUnselectAll = 'Odzna�i� v�etko';
$strUpdatePrivMessage = 'Boli aktualizovan� opr�vnenia pre %s.';
$strUpdateProfile = 'Aktualizova� profil:';
$strUpdateProfileMessage = 'Profil bol aktualizovan�.';
$strUpdateQuery = 'Aktualizova� dotaz';
$strUsage = 'Vyu�itie';
$strUseBackquotes = ' Pou�i� opa�n� apostrof pri n�zvoch tabuliek a pol� ';
$strUseTables = 'Pou�i� tabu�ky';
$strUseTextField = 'Po�i� textov� pole';
$strUser = 'Pou��vate�';
$strUserAlreadyExists = 'Pou��vate� %s u� existuje!';
$strUserEmpty = 'Meno pou��vate�a je pr�zdne!';
$strUserName = 'Meno pou��vate�a';
$strUserNotFound = 'Zvolen� pou��vate� nebol n�jden� v tabu�ke pr�v.';
$strUserOverview = 'Preh�ad u��vatelov';
$strUsers = 'Pou��vatelia';
$strUsersDeleted = 'Vybran� u��vatelia bol �spe�ne odstr�nen�.';
$strUsersHavingAccessToDb = 'Pou��vatelia maj�ci pr�stup k &quot;%s&quot;';

$strValidateSQL = 'Potvrdi� platnos� SQL';
$strValidatorError = 'SQL validator nemohol by� inicializovan�. Pros�m skontrolujte, �i s� nain�talovan� v�etky potrebn� roz��renia php, tak ako s� pop�san� v %sdocumentation%s.';
$strValue = 'Hodnota';
$strVar = 'Premenn�';
$strViewDump = 'Zobrazi� dump (sch�mu) tabu�ky';
$strViewDumpDB = 'Zobrazi� dump (sch�mu) datab�zy';

$strWebServerUploadDirectory = 'upload adres�r web serveru';
$strWebServerUploadDirectoryError = 'Adres�r ur�en� pre upload s�borov sa ned� otvori�';
$strWelcome = 'Vitajte v %s';
$strWildcard = 'nahradzuj�ci znak';
$strWithChecked = 'V�ber:';
$strWritingCommentNotPossible = 'Koment�r sa ned� zap�sa�';
$strWritingRelationNotPossible = 'Vz�ah sa ned� zap�sa�';
$strWrongUser = 'Zl� pou��vate�sk� meno alebo heslo. Pr�stup zamietnut�.';

$strYes = '�no';

$strZeroRemovesTheLimit = 'Pozn�mka: Nastavenie t�chto parametrov na 0 (nulu) odstr�ni obmedzenia.';
$strZip = '"zo zipovan�"';

$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate
$strCharset = 'Charset';  //to translate
$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
?>
