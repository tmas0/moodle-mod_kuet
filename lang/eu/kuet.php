<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Project implemented by the "Recovery, Transformation and Resilience Plan.
// Funded by the European Union - Next GenerationEU".
//
// Produced by the UNIMOODLE University Group: Universities of
// Valladolid, Complutense de Madrid, UPV/EHU, León, Salamanca,
// Illes Balears, Valencia, Rey Juan Carlos, La Laguna, Zaragoza, Málaga,
// Córdoba, Extremadura, Vigo, Las Palmas de Gran Canaria y Burgos..

/**
 * Euskera language strings
 *
 * @package    mod_kuet
 * @copyright  2023 Proyecto UNIMOODLE
 * @author     UNIMOODLE Group (Coordinator) <direccion.area.estrategia.digital@uva.es>
 * @author     3IPUNT <contacte@tresipunt.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Kuet';
$string['pluginadministration'] = 'Kuet Administrazioa';
$string['modulename'] = 'Kuet';
$string['modulenameplural'] = 'Kuets';
$string['kuet:addinstance'] = 'Gehitu Kuet pakete berri bat';
$string['kuet:view'] = 'Ikusi Kuet';
$string['kuet:managesessions'] = 'Kudeatu saioak';
$string['kuet:startsession'] = 'Hasierako saioak';
$string['kuet:viewanonymousanswers'] = 'Ikusi erantzun anonimoak';
$string['name'] = 'Izena';
$string['introduction'] = 'Deskribapena';
$string['questiontime'] = 'Galderen ordua';
$string['questiontime_desc'] = 'Galdera bakoitzaren denbora segundotan.';
$string['questiontime_help'] = 'LAGUNTZA! Galdera bakoitzaren denbora segundotan.';
$string['completiondetail:answerall'] = 'Saio batean parte hartu galderak erantzunez';
$string['completionansweralllabel'] = 'Saio batean parte hartu.';
$string['completionansweralldesc'] = 'Saio batean parte hartu galderak erantzunez.';
$string['configtitle'] = 'Kuet';
$string['generalsettings'] = 'Ezarpen orokorrak';
$string['socket'] = 'Entxufea';
$string['sockettype'] = 'Socket mota';
$string['sockettype_desc'] = 'Socket zerbitzari bat behar da eskuzko saioak hasteko. Socket hau lokala edo kanpokoa izan daiteke: <ul><li><b>Ez dago socket: </b>Ez dira erabiliko eskuzko saio moduak</li><li><b>Tokiko socket: </b>Socketa plataforma honen zerbitzari berean abiaraziko da (ziurtagiriak izan behar ditu).</li><li><b>Kanpokoa: </b>Socketa kanpoko zerbitzari batean abiarazi dezakezu, URLa eta ataka emanez. konexiorako plataforma.</li></ul>';
$string['nosocket'] = 'Ez erabili entxufea';
$string['local'] = 'Tokikoa';
$string['external'] = 'Kanpokoa';
$string['externalurl'] = 'Kanpoko URLa';
$string['externalurl_desc'] = 'Socketa ostatatzen den URLa. IP bat izan daiteke, baina HTTPS protokoloa izan behar du.';
$string['downloadsocket'] = 'Deskargatu scripta kanpoko zerbitzarian exekutatzeko';
$string['downloadsocket_desc'] = 'Deskargatu hemendik scripta kanpoko zerbitzari batean exekutatzeko.<br>Script hau exekutatzen den makinaren administratzaileak ataka eta ziurtagiriak eman behar dizkio scriptari.<br>Administratzaile honen ardura da ziurtatzea entxufea uneoro funtzionatzen ari da.<br>';
$string['scriptphp'] = 'Deskargatu Script PHP';
$string['certificate'] = 'Ziurtagiria';
$string['certificate_desc'] = 'Zerbitzarirako baliozko SSL ziurtagiri baten .crt edo .pem fitxategia. Baliteke fitxategi hau jada zerbitzarian sortuta egotea, edo mod honetarako bakarrak sor ditzakezu <a href="https://zerossl.com" target="_blank">zerossl.com</a> bezalako tresnak erabiliz.';
$string['privatekey'] = 'Gako pribatua';
$string['privatekey_desc'] = 'Zerbitzarirako baliozko SSL gako pribatu baten .pem edo .key fitxategia. Baliteke fitxategi hau jada zerbitzarian sortuta egotea, edo mod honetarako bakarrak sor ditzakezu <a href="https://zerossl.com" target="_blank">zerossl.com</a> bezalako tresnak erabiliz.';
$string['testssl'] = 'Konexio-proba';
$string['testssl_desc'] = 'Socket konexioaren proba SSL ziurtagiriekin';
$string['validcertificates'] = 'Baliozko SSL ziurtagiriak eta ataka';
$string['invalidcertificates'] = 'Ziurtagiriak edo Portuak baliogabeak';
$string['connectionclosed'] = 'Konexioa itxita';
$string['port'] = 'Portua';
$string['port_desc'] = 'Konexioa egiteko ataka. Ataka hau irekita egon behar da, beraz, zure sistema-administratzailearekin egiaztatu beharko duzu.';
$string['warningtest'] = 'Honek socket-era konektatzen saiatuko da uneko konfigurazioarekin. <b>Gorde konfigurazioa probatu aurretik.</b>';
$string['session_name'] = 'Saioaren izena';
$string['session_name_placeholder'] = 'Saioaren izena';
$string['session_name_help'] = 'Idatzi saioaren izena';
$string['anonymousanswer'] = 'Erantzun anonimoak';
$string['anonymousanswer_help'] = 'Irakasleak ez du jakingo nor ari den zuzeneko galdeketetan erantzuten';
$string['countdown'] = 'Erakutsi galderen atzerako kontaketa';
$string['randomquestions'] = 'Ausazko galderak';
$string['randomanswers'] = 'Ausazko erantzunak';
$string['showfeedback'] = 'Erakutsi iritzia';
$string['showfinalgrade'] = 'Erakutsi azken nota';
$string['timesettings'] = 'Ordu-ezarpenak';
$string['startdate'] = 'Saioaren hasiera data';
$string['enddate'] = 'Saioaren amaiera data';
$string['automaticstart'] = 'Hasiera automatikoa';
$string['timelimit'] = 'Denbora-muga';
$string['accessrestrictions'] = 'Sarbide murrizketak';
$string['next'] = 'Hurrengoa';
$string['sessions'] = 'Saioak';
$string['sessions_info'] = 'Saio guztiak bistaratzen dira';
$string['reports'] = 'Txostenak';
$string['reports_info'] = 'Osatutako saio guztiak bistaratzen dira txostena sartzeko.';
$string['sessionreport'] = 'Saioaren txostena';
$string['sessionreport_info'] = 'Saioaren txostena erakusten da.';
$string['report'] = 'Txostena';
$string['active_sessions'] = 'Saio Aktiboak';
$string['completed_sessions'] = 'Osatutako saioak';
$string['create_session'] = 'Sortu saioa';
$string['questions_number'] = 'Galdera kopurua';
$string['question_number'] = 'Galdera kopurua';
$string['session_date'] = 'Data';
$string['session_finishingdate'] = 'Amaiera-data';
$string['session_actions'] = 'Ekintzak';
$string['init_session'] = 'Hasierako saioa';
$string['init_session_desc'] = 'Saio bat eskuz hasten baduzu, programatutako saioak blokeatu ditzakezu hasiera automatikoarekin. Ziurtatu saio hau hasi aurretik ez dagoela hurrengo saiorik.<br>Ziur saioa hasi nahi duzula?';
$string['end_session'] = 'Amaiera saioa';
$string['end_session_error'] = 'Ezin izan da saioa amaitu zerbitzariarekin komunikazioan izandako errore bat dela eta, saiatu berriro.';
$string['end_session_desc'] = 'Ziur saioa amaitu nahi duzula?';
$string['end_session_manual_desc'] = 'Saioa amaitzen baduzu, ikasle guztien konexioa itxiko duzu eta ezingo diote galdetegi honi erantzun.<br><b>Ziur saioa amaitu nahi duzula?</b>';
$string['viewreport_session'] = 'Ikusi txostena';
$string['edit_session'] = 'Editatu saioa';
$string['copy_session'] = 'Kopiatu saioa';
$string['delete_session'] = 'Ezabatu saioa';
$string['copysession'] = 'Kopiatu saioa';
$string['copysession_desc'] = 'Ziur saio hau kopiatu nahi duzula? Saioak hasiera edo hasiera eta amaiera data automatikoak baditu, hauek berrezarri beharko dira.';
$string['copysessionerror'] = 'Errore bat gertatu da saioa kopiatzean. Egiaztatu "mod/kuet:managesessions" gaitasuna duzula edo saiatu berriro geroago.';
$string['deletesession'] = 'Ezabatu saioa';
$string['deletesession_desc'] = 'Ziur saio hau ezabatu nahi duzula?';
$string['deletesessionerror'] = 'Errore bat gertatu da saioa ezabatzean. Egiaztatu "mod/kuet:managesessions" gaitasuna duzula edo saiatu berriro geroago.';
$string['confirm'] = 'Berretsi';
$string['copy'] = 'Kopiatu';
$string['groupings'] = 'Taldekatzeak';
$string['anonymiseresponses'] = 'Ikasleen erantzunak anonimatu';
$string['noanonymiseresponses'] = 'Ez anonimatu ikasleen erantzunak';
$string['sessionconfiguration'] = 'Saioaren konfigurazioa';
$string['sessionconfiguration_info'] = 'Konfiguratu zure saioa';
$string['questionsconfiguration'] = 'Galderaren konfigurazioa';
$string['questionsconfiguration_info'] = 'Gehitu galderak saioari';
$string['summarysession'] = 'Saioaren laburpena';
$string['summarysession_info'] = 'Berrikusi saioa';
$string['sessionstarted'] = 'Saioa hasi zen';
$string['multiplesessionerror'] = 'Saio hau ez dago aktibo edo ez dago.';
$string['notactivesession'] = 'Aupa, badirudi zure irakasleak ez duela saiorik hasi oraindik...';
$string['notactivesessionawait'] = 'Itxaron berak hasi arte, edo begiratu zure azken txostenak.';
$string['nextsession'] = 'Hurrengo saioa:';
$string['nosession'] = 'Irakasleak hasierako saiorik ez';
$string['questions_list'] = 'Hautatutako galderak';
$string['questions_bank'] = 'Galdera Bankua';
$string['question_position'] = 'Posizioa';
$string['question_name'] = 'Izena';
$string['question_type'] = 'Mota';
$string['question_version'] = 'Bertsioa';
$string['question_isvalid'] = 'Baliozkoa da';
$string['question_actions'] = 'Ekintzak';
$string['improvise_cloudtags'] = 'Hodei etiketak inprobisatu';
$string['select_category'] = 'Hautatu kategoria bat';
$string['go_questionbank'] = 'Joan galdera bankura';
$string['selectall'] = 'Hautatu/deshautatu guztiak';
$string['selectvisibles'] = 'Hautatu/deshautatu ikusgaiak';
$string['add_questions'] = 'Gehitu galderak';
$string['number_select'] = 'Hautatutako galderak:';
$string['changecategory'] = 'Kategoria aldaketa';
$string['changecategory_desc'] = 'Saioan gehitu ez diren galderak hautatu dituzu. Kategoria aldatzen baduzu hautapen hau galduko duzu. Jarraitu nahi duzu?';
$string['selectone'] = 'Hautatu galderak';
$string['selectone_desc'] = 'Hautatu gutxienez galdera bat saioan gehitzeko.';
$string['addquestions'] = 'Gehitu galderak';
$string['addquestions_desc'] = 'Ziur {$a} galdera gehitzeaz saioan?';
$string['deletequestion'] = 'Kendu galdera bat saiotik';
$string['deletequestion_desc'] = 'Ziur al zaude galdera hau saiotik kentzeaz?';
$string['gradesheader'] = 'Galderaren kalifikazioa';
$string['nograding'] = 'Ez ikusi erantzun zuzena eta kalifikazioa';
$string['sessionalreadyexists'] = 'Saioaren izena badago jada';
$string['showgraderanking'] = 'Erakutsi galderen arteko sailkapena';
$string['question_nosuitable'] = 'Ez da egokia kuet pluginarekin.';
$string['configuration'] = 'Konfigurazioa';
$string['end'] = 'Amaiera';
$string['questionidnotsent'] = 'galderarik ez bidali';
$string['question_index_string'] = '{$a->zenb./{$a->guztira}';
$string['question'] = 'Galdera';
$string['feedback'] = 'Iritzia';
$string['session_info'] = 'Saioaren informazioa';
$string['results'] = 'Emaitzak';
$string['students'] = 'Ikasleak';
$string['corrects'] = 'Zuzentzen du';
$string['incorrects'] = 'Okerrak';
$string['notanswers'] = 'Erantzun gabe';
$string['points'] = 'Puntuak';
$string['inactive_manual'] = 'Eskuliburua inaktibo';
$string['inactive_programmed'] = 'Inaktibo programatua';
$string['podium_manual'] = 'Eskuzko podiuma';
$string['podium_programmed'] = 'Programatutako Podiuma';
$string['race_manual'] = 'Eskuzko Lasterketa';
$string['race_programmed'] = 'Lasterketa Programatua';
$string['sessionmode'] = 'Saio modua';
$string['sessionmode_help'] = 'Saio moduek kuet saioak erabiltzeko modu desberdinak erakusten dituzte.';
$string['countdown_help'] = 'Gaitu aukera hau ikasleek galdera bakoitzean atzerako kontaketa ikus dezaten. (Galderak denbora badu bakarrik)';
$string['showgraderanking_help'] = 'Irakasleak ez du sailkapena ikusiko zuzeneko saio batean. Podiumeko saio moduetan soilik erabilgarri.';
$string['showgraderankinghelp'] = 'SIN _Irakasleak ez du sailkapena ikusiko zuzeneko saio batean. Podiumeko saio moduetan soilik erabilgarri.';
$string['randomquestions_help'] = 'Galderak ausazko ordenan agertuko dira ikasle bakoitzarentzat. Programatutako saio-modurako bakarrik balio du.';
$string['randomanswers_help'] = 'Erantzunak ausazko ordenan agertuko dira ikasle bakoitzarentzat.';
$string['showfeedback_help'] = 'Galdera bakoitzari erantzun ondoren, iritzia agertuko da. Eskuzko moduan, irakasleak galdera bakoitzaren iritzia erakutsi edo ezkutatu dezake (galderak iritzia badu soilik).';
$string['showfinalgrade_help'] = 'Saioa amaitu ondoren azken kalifikazioa agertuko da.';
$string['startdate_help'] = 'Saioa automatikoki hasiko da data honetan. Hasiera-data bakarrik egongo da eskuragarri programatutako saioekin.';
$string['enddate_help'] = 'Saioa automatikoki amaituko da data honetan. Amaiera-data soilik egongo da eskuragarri programatutako saioekin.';
$string['automaticstart_help'] = 'Saioa automatikoki hasi eta amaituko da datak ezartzen badira, eskuz hasi behar izan ez dadin.';
$string['timelimit_help'] = 'Saiorako denbora osoa';
$string['waitingroom'] = 'Itxarongela';
$string['waitingroom_info'] = 'Saioa hasi aurretik dena ondo dagoela egiaztatu.';
$string['sessionstarted_info'] = 'Saioa hasi duzu, galderen jarraipena egin behar duzu.';
$string['participants'] = 'Parte hartzaileak';
$string['waitingroom_message'] = '';
$string['ready_users'] = 'Parte-hartzaileak prest';
$string['ready_groups'] = 'Talde prest';
$string['session_closed'] = 'Konexioa itxi egin da:';
$string['session_closed_info'] = 'Hau izan daiteke saioa amaitu delako, irakasleak saioa amaitu duelako edo konexioaren arazo tekniko batengatik. Hasi saioa berriro berriro konektatzeko, edo jarri harremanetan zure irakaslearekin.';
$string['system_error'] = 'Errore bat gertatu da eta konexioa itxi da.<br>Ezin da saioarekin jarraitu.';
$string['connection_closed'] = 'Konexioa itxita {$a->arrazoia} - {$a->code}';
$string['backtopanelfromsession'] = 'Saioen panelera itzuli?';
$string['backtopanelfromsession_desc'] = 'Itzultzen bazara, saioa ez da abiaraziko, eta edozein unetan berriro has dezakezu. Saio panelera itzuli nahi duzu?';
$string['lowspeed'] = 'Zure Interneteko konexioa motela edo ezegonkorra dirudi ({$a->downlink} Mbps, {$a->effectiveType}). Horrek ustekabeko portaera eragin dezake edo saioa bat-batean ixtea.<br>Gomendatzen dugu saioa ez abiatzea Interneteko konexio ona izan arte.';
$string['alreadyteacher'] = 'Dagoeneko irakasle bat dago saio hau ematen, beraz, ezin zara konektatu. Mesedez, itxaron uneko saioa amaitu arte sartu ahal izateko.';
$string['userdisconnected'] = '{$a} erabiltzailea deskonektatu da.';
$string['qtimelimit_help'] = 'Galdera erantzuteko garaia. Erabilgarria saio-denbora galderen denboraren batura denean.';
$string['sessionlimittimebyquestionsenabled'] = 'Saio honek {$a}-ko denbora-muga du. Galdera bakoitzaren denbora osoa galdera kopuruarekin zatituz kalkulatuko da denbora osoa.<br>Galderako denbora bat gehitu nahi baduzu, saio-modua zehaztu behar duzu "Galderako denbora", zehaztu denbora lehenetsi bat. , eta orduan galdera bakoitzerako ordu bat ezar dezakezu formulario hau erabiliz.';
$string['notimelimitenabled'] = 'Saioa denbora-mugarik gabe ezarri da.<br>Galderako denbora bat gehitu nahi baduzu, "Galderako denbora" gisa zehaztu behar duzu saio-modua, zehaztu ordu lehenetsi bat eta, ondoren, galdera bakoitzeko ordu bat ezar dezakezu erabilita. forma hau.';
$string['incompatible_question'] = 'Galdera ez da bateragarria';
$string['controlpanel'] = 'Kontrol panela';
$string['control'] = 'Kontrola';
$string['pause'] = 'Pausa';
$string['play'] = 'Jolastu';
$string['resend'] = 'Berriz bidali';
$string['jump'] = 'Salto egin';
$string['finishquestion'] = 'Amaitu galdera';
$string['showhide'] = 'Erakutsi/ezkutatu';
$string['responses'] = 'Erantzunak';
$string['statistics'] = 'Estatistika';
$string['questions'] = 'Galderak';
$string['improvise'] = 'Inprobisatu';
$string['vote'] = 'Bozkatu';
$string['vote_tags'] = 'Boto etiketak';
$string['incorrect_sessionmode'] = 'Saio modu okerra';
$string['endsession'] = 'Saioa amaitu da';
$string['endsession_info'] = 'Saioaren amaierara iritsi zara, eta orain txostena ikus dezakezu zure emaitzekin, edo ikastaroarekin jarraitu.';
$string['timemode'] = 'Denbora modua';
$string['no_time'] = 'Denborarik ez';
$string['session_time'] = 'Saio-denbora osoa';
$string['session_time_resume'] = 'Saio-denbora osoa: {$a}';
$string['sessiontime'] = 'Saioaren ordua';
$string['timeperquestion'] = 'Galdera bakoitzeko denbora';
$string['sessiontime_help'] = 'Ezarritako denbora galdera kopuruarekin zatituko da, eta galdera guztiei denbora berdina emango zaie.';
$string['question_time'] = 'Galdera bakoitzeko denbora';
$string['question_time_help'] = 'Galdera bakoitzari ordu bat ezarriko zaio (galdera saioan gehitu ondoren egin dezakezu). Denbora lehenetsi bat ezarriko da denbora zehazturik ez duten galderei esleitzeko.';
$string['timemode_help'] = 'Kontuan izan behar da galdera bakoitzaren denbora "erantzuteko" baimendutako denborarekin bat datorrela, galdera bakoitzari erantzuteak denbora geldituko baitu erabiltzailea hurrengora pasa arte.<br><br><b>Denborarik ez: </b> Ez dago saioa amaitzeko denborarik. Galdera bakoitzerako denbora ezar daiteke, batzuk edo bat ere ez (galderen panelean).<br><b>Saioko denbora guztira:</b> Ezarritako denbora galdera kopuruarekin zatituko da, eta denbora berdina banatuko da. galdera guztiei.<br><b>Galderako denbora:</b> Galdera bakoitzeko denbora zehaztuko da (galdera saioan gehitu ondoren egin dezakezu). Denbora lehenetsi bat ezarriko da denbora zehazturik ez duten galderei esleitzeko.<br><br><b>Garrantzitsua:</b> denborazko galdera batean erabiltzaileak arakatzailea ixten badu edo orria freskatzen badu, hori galdera entregatu gabekotzat hartuko da, erantzuteko denbora irabazteko saiakera gisa ulertuko baita.';
$string['erroreditsessionactive'] = 'Ezin da saio aktibo bat editatu.';
$string['activesessionmanagement'] = 'Saioen kudeaketa aktiboa';
$string['sessionnoquestions'] = 'Ez da galderarik gehitu saioan.';
$string['sessioncreating'] = 'Ez duzu saio hau editatzen amaitu. Edizioko 3. urratsera iritsi eta Amaitu sakatu behar duzu.';
$string['sessionconflict'] = 'Saio honek hurbilago dauden beste saio batzuekin data-gatazka bat du eta ez da automatikoki hasiko gatazka konpondu arte.';
$string['sessionwarning'] = 'Saio hau hasi behar zen, baina une honetan saio aktibo bat dago hori eragozten duena. Saio aktiboa amaitu bezain laster automatikoki hasiko da.';
$string['sessionerror'] = 'Saio hau ez dago behar bezala konfiguratuta';
$string['startminorend'] = 'Saioaren amaiera-data ezin da izan hasiera-dataren berdina edo txikiagoa.';
$string['previousstarterror'] = 'Hasiera-data ezin da izan uneko data baino txikiagoa.';
$string['sessionmanualactivated'] = '{$a->sessionid} saioa kuetid -> {$a->kuetid}-n aktibo dago. Saioaren gainerako zatia saio hau amaitu arte baztertzen da.';
$string['sessionactivated'] = '{$a->sessionid} saioa aktibatu da kuetid {$a->kuetid}';
$string['sessionfinished'] = '{$a->sessionid} saioa amaitu da kuetid {$a->kuetid}';
$string['sessionfinishedformoreone'] = '{$a->sessionid} saioa amaitu da kuetid {$a->kuetid} saio bat baino gehiago aktibo daudelako.';
$string['error_initsession'] = 'Errorea hasierako saioan';
$string['error_initsession_desc'] = 'Ezin izan da saioa hasi, saio bat dagoeneko hasi delako edo akats zehatz batengatik. Mesedez, freskatu orria eta saiatu berriro.';
$string['success'] = 'Arrakasta';
$string['noresponse'] = 'Ez dago erantzunik';
$string['noevaluable'] = 'Ez da ebaluagarria';
$string['invalid'] = 'Baliogabea';
$string['ranking'] = 'Sailkapena';
$string['participant'] = 'Parte-hartzailea';
$string['score'] = 'Puntuazioa';
$string['viewreport_user'] = 'Erabiltzaileen txostena';
$string['viewreport_group'] = 'Taldearen txostena';
$string['otheruserreport'] = '';
$string['userreport'] = 'Erabiltzaileen saioaren txostena';
$string['userreport_info'] = 'Erabiltzaile baten saio baten emaitzak bistaratzen dira.';
$string['groupreport'] = 'Taldeko saioaren txostena';
$string['groupreport_info'] = 'Talde baten saio baten emaitzak bistaratzen dira.';
$string['viewquestion_user'] = 'Ikusi erantzuna';
$string['questionreport'] = 'Galdera-txostena';
$string['questionreport_info'] = 'Saio bateko galdera baten txostena bistaratzen da.';
$string['preview'] = 'Aurrebista';
$string['percent_correct'] = '% arrakasta';
$string['percent_incorrect'] = '% Okerrak';
$string['percent_partially'] = '% Partzialki zuzentzen du';
$string['percent_noresponse'] = '% Ez dago erantzunik';
$string['student_number'] = 'Ikasle kopurua';
$string['correct'] = 'Zuzena';
$string['incorrect'] = 'Okerra';
$string['response'] = 'Erantzuna';
$string['score_moment'] = 'Galderaren puntuazioa';
$string['time'] = 'Denbora';
$string['status'] = 'Egoera';
$string['anonymousanswers'] = 'Galdetegi honen erantzunak anonimoak dira.';
$string['kuetnotexist'] = 'Ezin da kuet aurkitu {$a} IDa duen';
$string['jumpto_error'] = '1 eta {$a} arteko zenbakia izan behar du';
$string['session'] = 'Saioa';
$string['send_response'] = 'Bidali erantzuna';
$string['partially_correct'] = 'Partzialki zuzena';
$string['partially'] = 'Partzialki';
$string['scored_answers'] = 'Puntuatutako erantzunak';
$string['provisional_ranking'] = 'Behin-behineko Sailkapena';
$string['final_ranking'] = 'Azken Sailkapena';
$string['score_obtained'] = 'Lortutako puntuazioa';
$string['total_score'] = 'Puntuazio osoa';
$string['grademethod'] = 'Kalifikazio metodoa';
$string['grademethod_help'] = '';
$string['nograde'] = 'Notarik ez';
$string['gradehighest'] = 'Nota goreneko saioa';
$string['gradeaverage'] = 'Nota-saioen batez bestekoa';
$string['firstsession'] = 'Lehenengo saioaren kalifikazioa';
$string['lastsession'] = 'Azken saioaren nota';
$string['sessionended'] = 'Saioa amaitu da';
$string['sessionended_desc'] = 'Erabiltzaile batek saio bat amaitzen duenean, gertaera bat abiarazten da saioaren kalifikazioa kalkulatzeko.';
$string['sgrade'] = 'Kalifika ezazu saioa';
$string['sgrade_desc'] = 'Ezarpen hau egiaztatzen bada, lortutako nota kalifikazio-liburuko jardueraren kalifikazioaren parte izango da.';
$string['sgrade_help'] = 'Egiaztatu ezarpen hau saio honetan lortutako nota jardueraren kalifikazioaren parte izatea nahi baduzu.';
$string['cachedef_grades'] = 'Hau kuet cache kalifikazioen deskribapena da';
$string['qstatus_0'] = 'Okerra';
$string['qstatus_1'] = 'Arrakasta';
$string['qstatus_2'] = 'Partzialki';
$string['qstatus_3'] = 'Ez dago erantzunik';
$string['qstatus_4'] = 'Ez da ebaluagarria';
$string['qstatus_5'] = 'Baliogabea';
$string['error_delete_instance'] = 'Errore bat gertatu da Kuet mod ezabatzean.';
$string['session_groupings_error'] = 'Jarduera hau talde moduan ezarrita dago. Saio bakoitzak taldekatze bat hautatu behar du.';
$string['session_groupings_no_members'] = 'Taldekatzea hutsik dago. Mesedez, hautatu parte-hartzaileekin taldekatzea.';
$string['session_groupings_same_user_in_groups'] = 'Parte hartzaileek talde bakarreko parte izan behar dute.
Egiaztatu parte-hartzaile hauek: {$a}';
$string['groupmode'] = 'Taldeen modua';
$string['fakegroup'] = 'Kuet taldea {$a}';
$string['fakegroupdescription'] = 'hautatutako taldean ez daudenak.';
$string['groups'] = 'Taldeak';
$string['abbreviationquestion'] = 'G';
$string['timemodemustbeset'] = 'Saio-denbora osoa edo galdera-ordua ezarri behar da';
$string['timecannotbezero'] = 'Denbora ezin da zero izan';
$string['nogroupingscreated'] = 'Ikastaro honetan taldekatze bat sortzea beharrezkoa da jarduera honetan aukeratu ahal
izateko.';
$string['notallowedspecialchars'] = 'Ez da karaktere berezirik onartzen: ?!<>\\';
$string['units'] = 'Unitateak';
$string['unit'] = 'Unitatea';
$string['statement_improvising'] = 'Inprobisatu etiketen hodeia galdera';
$string['waitteacher'] = 'Irakaslearen zain';
$string['teacherimprovising'] = 'Irakaslea "Etiketen hodeia" galdera bat inprobisatzen ari da, non galdera bati hitz batekin erantzun behar duzun.<br>Irakasleak  amaitu bezain laster, galdera agertuko da eta zuk erantzun ahal izango duzu, erantzunak ikusteko. zure ikaskide guztienekin batera.';
$string['statement_improvise'] = 'Etiketen hodeiaren adierazpena';
$string['statement_improvise_help'] = 'Gogoratu hitz bakarrean erantzun daitekeen galdera izan behar dela.';
$string['reply_improvise'] = 'Erantzuna';
$string['reply_improvise_help'] = 'Izan zaitez hitz hodeiari hitz bat gehitzen lehena. (Aukerakoa)';
$string['reply_improvise_student_help'] = 'Saiatu galderari hitz batekin erantzuten.';
$string['submit'] = 'Bidali';
$string['sessionrankingreport'] = 'Saioen sailkapenaren txostena';
$string['groupsessionrankingreport'] = 'Taldeko saioen sailkapenaren txostena';
$string['sessionquestionsreport'] = 'Saioko galderen txostena';
$string['reportlink'] = 'Txostenaren esteka';
$string['questionid'] = 'Id';
$string['isevaluable'] = 'Ebaluagarria al da?';
$string['alreadyanswered'] = 'Zure taldeko kide batek erantzun du dagoeneko!';
$string['groupdisconnected'] = '{$a} taldea deskonektatu da';
$string['groupmemberdisconnected'] = '{$a} taldeko kide hau deskonektatu da';
$string['groupingremoved'] = 'Jarduera talde hau kendu da edo ez du kiderik. Ezin duzu saio honekin jarraitu.';
$string['groupremoved'] = 'Zure taldea kendu egin da edo ez da jarduera talde honetako kide. Ezin duzu saio honekin jarraitu.';
$string['gocourse'] = 'Itzuli zure ikastarora';
$string['httpsrequired'] = 'Kuet erabiltzeko plataforman https protokoloa erabiltzea derrigorrezkoa da.';
$string['httpsrecommended'] = 'HTTP protokoloa erabiltzen duzu. Oso gomendagarria da https protokoloa erabiltzea PRODUKZIO inguruneetan.';
$string['protocolnotvalid'] = 'HTTP edo HTTPS derrigorrezkoa da, eta HTTPS protokoloa guztiz gomendatzen da Kuet erabiltzeko plataforman erabiltzea.';
$string['sessionsnum'] = 'Saio kopurua';
$string['validopenconnection'] = 'Baliozko konexioa WebSocket zerbitzari batekin.';
$string['invalidconnection'] = 'Errore bat WebSocket zerbitzariaren konexioan. Egiaztatu akatsak zure kontsolan.';
$string['tests'] = 'Proba';
$string['protocoltest'] = 'Protokoloa';
$string['protocoltest_description'] = 'Egiaztatu protokoloa http edo https den';
$string['ssltest'] = 'SSL ziurtagiria';
$string['ssltest_description'] = 'Egiaztatu SSL ziurtagiria baliozkoa den';
$string['openconnectiontest'] = 'WebSocket zerbitzariarekin konexioa';
$string['openconnectiontest_description'] = 'Egiaztatu zure erabiltzaileek WebSocket zerbitzariarekin konexioa ezar dezaketen';
$string['test_info'] = 'Informazioa probatzea';
$string['test_description'] = 'Nork egiaztatzen du';
$string['extra_info'] = 'Informazio gehigarria (baldin badago)';
$string['userconnectionsonrisk'] = 'Zure erabiltzaileak arriskuan daude haien konexioak ez daudelako enkriptatuta.';
$string['sendmessagetest'] = 'Bidali mezua';
$string['sendmessagetest_description'] = 'Bidali mezua WebSocket zerbitzariari';
$string['validsendedtest'] = 'Mezua behar bezala bidali da.';
$string['invalidsendedtest'] = 'Mezua gaizki bidali da';
$string['receivemessagetest'] = 'Jaso mezuaren erantzuna';
$string['receivemessagetest_description'] = 'Jaso mezuen erantzuna WebSocket zerbitzaritik';
$string['validreceivedtest'] = 'Mezua ongi jaso da.';
$string['invalidreceivedtest'] = 'Mezua gaizki jaso da';
$string['nodatareceivedtest'] = 'Badirudi errore bat dagoela zerbitzariaren konexioaren eta bezeroaren artean.';
