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

/**
 * Local language pack from ---
 *
 * @package    core
 * @subpackage error
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied:authdisabledexception'] = 'Zugriff verweigert. Die diesem Nutzerkonto ({$a}) zugeordnete Authentifizierungsmethode wurde deaktiviert. Wenden Sie sich bitte an Ihre Administratoren.';
$string['accessdenied:credentialsexpiredexception'] = 'Zugriff verweigert. Das Kennwort für dieses Nutzerkonto ({$a}) ist abgelaufen. Wenden Sie sich bitte an Ihre Administratoren.';
$string['cannotcreatebackupdir'] = 'Das Verzeichnis \'backupdata\' konnte nicht erstellt werden. Administratoren müssen die Zugriffsrechte korrigieren.';
$string['cannotcreatesitedir'] = 'Das Verzeichnis für die Website konnte nicht angelegt werden. Administratoren müssen die Dateirechte auf dem Server korrigieren.';
$string['cannotcreateuploaddir'] = 'Das Upload-Verzeichnis konnte nicht angelegt werden. Administrator müssen die Dateirechte auf dem Server korrigieren.';
$string['cannotfindteacher'] = 'Trainer wurde nicht gefunden.';
$string['cannotgradeuser'] = 'Nutzer kann nicht bewertet werden.';
$string['cannotrestoreadminorcreator'] = 'Sie müssen Kursersteller oder Administrator sein, um die Daten in einen neuen Kurs wiederherzustellen!';
$string['cannotrestoreadminoredit'] = 'Sie müssen Trainer oder Administrator sein, um die Daten im ausgewählten Kurs wiederherzustellen!';
$string['cannotuseadmin'] = 'Sie müssen Administrator sein, um diese Seite nutzen zu können';
$string['cannotuseadminadminorteacher'] = 'Sie müssen Trainer oder Administrator sein, um diese Seite nutzen zu können';
$string['cannotusepage'] = 'Ausschließlich Trainer und Administratoren können diese Seite nutzen';
$string['couldnotverifyagedigitalconsent'] = 'Beim Versuch, das Alters zu überprüfen, ist ein Fehler aufgetreten. <br />Wenden Sie sich an die Administratoren.';
$string['courserequestdisabled'] = 'Die Kursanträge wurden von Administratoren deaktiviert.';
$string['dbconnectionfailed'] = '<p>Fehler: Datenbankverbindung fehlgeschlagen</p> <p>Es ist möglich, dass die Datenbank überlastet ist oder nicht ordentlich läuft.</p> <p>Server-Administratoren sollten zusätzlich prüfen, ob die Datenbankdetails richtig in der config.php eingetragen sind.</p>';
$string['dbdriverproblem'] = '<p>Fehler: Datenbanktreiber-Problem aufgetreten</a> <p>Server-Administratoren sollten die Servereinstellungen prüfen.</p> <p>{$a}</p>';
$string['dbsessionbroken'] = 'Ein schwerwiegendes Problem mit der Datenbank-Session wurde erkannt<br /><br />Bitte benachrichtigen Sie die Administratoren des Servers';
$string['dbsessionhandlerproblem'] = 'Das Einrichten der Datenbank-Session ist fehlgeschlagen. Bitte benachrichtigen Sie die Administratoren des Servers';
$string['dbsessionmysqlpacketsize'] = 'Ein schwerwiegender Session-Fehler wurde erkannt. Bitte informieren Sie die Administratoren des Servers, dass dieses Problem auftreten kann, wenn der Wert max_allowed_packet in den MySQL-Einstellungen zu klein festgelegt wurde';
$string['groupalready'] = 'Nutzer gehört bereits zur Gruppe {$a}';
$string['groupusernotmember'] = 'Nutzer ist nicht Mitglied dieser Gruppe.';
$string['invaliduser'] = 'Ungültige Nutzer';
$string['loginasnoenrol'] = 'Das \'Einschreiben\' oder \'Abmelden\' für einen Kurs ist nicht möglich, wenn Sie als anderer Benutzer angemeldet sind.';
$string['messageundeliveredbynotificationsettings'] = 'Die Nachricht konnte nicht gesendet werden, da persönliche Nachrichten zwischen Nutzern (in den Benachrichtigungseinstellungen) von den Administratoren deaktiviert wurden.';
$string['missingcategoryrole'] = 'Rolle konnte Nutzer nicht zugewiesen werden: fehlende Rolle für Kategorie.';
$string['mnetlocal'] = 'Externe MNET-Nutzer können sich nicht lokal anmelden';
$string['mustbeteacher'] = 'Diese Seite können Sie nur als Trainer ansehen.';
$string['noadmins'] = 'Keine Adminstratoren!';
$string['nocapabilitytousethisservice'] = 'Nutzer besitzt nicht die notwendige Berechtigung, um diesen Service zu nutzen';
$string['nologinas'] = 'Sie dürfen sich nicht in der Rolle dieses Benutzers einloggen';
$string['noparticipants'] = 'Keine Teilnehmer für diesen Kurs gefunden';
$string['nosections_noneditor'] = 'Dieser Kurs ist momentan nicht verfügbar. Wenden Sie sich bitte an Ihre Trainer, um Hilfe zu erhalten.';
$string['onlyadmins'] = 'Diese Funktion können nur Administratorenen ausführen';
$string['onlyeditingteachers'] = 'Diese Funktion können nur Trainer mit Bearbeitungsrecht ausführen';
$string['prefixcannotbeempty'] = '<p>Fehler: Datenbanktabellen-Prefix kann nicht leer sein.({$a})</p> <p>Administratoren müssen dieses Problem beseitigen.</p>';
$string['prefixtoolong'] = '<p>Fehler: Datenbanktabellen-Prefix ist zu lang ({$a->dbfamily})</p> <p>Administratoren müssen dieses Problem anpassen. Tabellen- Prefixes in {$a->dbfamily} sind max. {$a->maxlength} Zeichen lang.</p>';
$string['redissessionhandlerproblem'] = 'Das Einrichten der Redis-Sitzung ist fehlgeschlagen. Bitte benachrichtigen Sie die Administratoren.';
$string['restore_path_element_missingmethod'] = 'Die Wiederherstellungsmethode {$a} fehlt. Sie muss von den Entwicklern definiert werden.';
$string['reverseproxyabused'] = 'Der Reverse Proxy ist aktiviert, so dass Sie nicht direkt auf den Server zugreifen können.<br />Wenden Sie bitte an die Server-Administratoren.';
$string['rpcerror'] = 'Ihre MNET-Verbindung ist fehlgeschlagen! Bitte leiten Sie die Fehlermeldung an die Administratoen weiter: {$a}';
$string['sessioncannotobtainlock'] = '<p>Die Sperre für die Sitzungs-ID {$a->id} konnte innerhalb von {$a->acquiretimeout} nicht aktiviert werden.</p> <p>Wahrscheinlich läuft in einem anderen Browser-Tab eine andere Seite ({$a->whohaslock}) oder die Sperre wurde wegen eines Fehlers nicht freigegeben.</p> <p>Sie können bis zum Timeout der Sitzungssperre ({$a->lockexpire}) warten oder Ihre Browsersitzung neu starten. Wenn dieser Fehler weiterhin besteht, fragen Sie bitte die Administratoren.</p>';
$string['sessiondiskfull'] = 'Die Session-Partition ist voll. Eine Anmeldung ist momentan nicht möglich. Benachrichtigen Sie bitte die Administratoren.';
$string['sessionipnomatch'] = 'Die IP-Adresse scheint sich seit Ihrem letzten Login geändert zu haben. Dieses Sicherheitsfeature schützt Sie vor dem Diebstahl Ihrer Identität durch Hacker, während Sie auf der Seite arbeiten. Normale Nutzer sollten diese Mitteilung nicht sehen - bitten Sie die Administratoren um Hilfe.';
$string['sessionipnomatch2'] = '<p>Ihre IP-Adresse hat sich geändert, seit Sie sich eingeloggt haben. Diese Sicherheitsoption schützt davor, dass Ihre Identität gestohlen werden kann, während Sie eingeloggt sind. Sie könnten diese Fehlermeldung auch erhalten, wenn Sie ein Funknetzwerk benutzen oder zwischen unterschiedlichen Netzwerken pendeln (roaming). Bitte fragen Sie für weitere Hilfe die Administratoren Ihrer Website. </p><p>Falls Sie weitermachen möchten, aktualisieren Sie bitte die Seite (F5-Taste).</p>';
$string['unenrolerror'] = 'Beim Abmelden des Benutzers ist ein Fehler aufgetreten.';
$string['useradmineditadmin'] = 'Nur Administratoren können andere Administrationskonten bearbeiten.';
$string['useradminodelete'] = 'Nutzerkonten von Administratoren können nicht gelöscht werden.';
$string['userisfilteredout'] = 'Dieser Benutzer passt nicht zu den Filtern und Tabelleneinstellungen!';
$string['usermustbemnet'] = 'Nutzer in der MNET-Zugangskontrolle müssen Remote-MNET-Nutzer sein.';
$string['usernotaddederror'] = 'Fehler. Nutzer wurde nicht hinzugefügt';
$string['usernotavailable'] = 'Die Details für diesen Benutzer sind für Sie nicht verfügbar.';
$string['usernotdeletedadmin'] = 'Nutzerkonto nicht gelöscht. Nutzerkonten von Administratoren können nicht gelöscht werden.';
$string['usernotdeletederror'] = 'Nutzer nicht gelöscht. Unbekannter Fehler';
$string['usernotdeletedmissing'] = 'Nutzer nicht gelöscht. Der Anmeldename wurde nicht gefunden';
$string['usernotdeletedoff'] = 'Nutzer nicht gelöscht - Löschen ist nicht erlaubt';
$string['usernotincourse'] = 'Nutzer ist nicht in diesem Kurs!';
$string['usernotrenamedexists'] = 'Nutzer wurde nicht umbenannt - der eingegebene Nutzername wird bereits verwendet';
$string['usernotrenamedmissing'] = 'Nutzer nicht umbenannt. Der alte Anmeldename wurde nicht gefunden.';
$string['usernotrenamedoff'] = 'Nutzer nicht umbenannt - Umbenennen ist nicht erlaubt.';
$string['usernotupdatederror'] = 'Nutzer nicht aktualisiert. Unbekannter Fehler';
$string['usernotupdatednotexists'] = 'Nutzer nicht aktualisiert. Das Nutzerkonto existiert nicht.';
$string['userselectortoomany'] = 'Die Auswahl user_selector erhielt mehr als einen ausgewählten Nutzer, obwohl die Mehrfachauswahl (multiselect) deaktiviert ist.';
$string['wrongusernamepassword'] = 'Nutzer oder Kennwort falsch';
$string['wwwrootmismatch'] = 'Ein falscher Zugriff wurde festgestellt. Entschuldigung, aber auf diesen Server sollte ausschließlich über die Adresse "{$a}" zugegriffen werden. Bitte benachrichtigen Sie die Administratoren Ihres Servers.';
$string['wwwrootslash'] = 'In der Datei config.php wurde eine falsche Einstellung für $CFG->wwwroot festgestellt. Es darf kein abschließender Slash \'/\' gesetzt sein.<br />Bitte benachrichtigen Sie die Administratoren Ihres Servers.';
