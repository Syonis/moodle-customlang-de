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
 * Local language pack from https://github.com/Syonis/moodle-customlang-de
 *
 * @package    report_benchmark
 * Original plugin copyright (retained from the English source):
 * @copyright  2016 onwards Mickaël Pannequin {@link mailto:mickael.pannequin@gmail.com}
 * @copyright  2023 onwards Nicolas Martignoni {@link mailto:nicolas@martignoni.net}
 *
 * German translation: Syonis, 2026
 * Translation created with AI assistance.
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['adminreport'] = 'System-Benchmark';
$string['benchfail'] = '<b>Achtung!</b><br />Die Leistung Ihrer Moodle-Installation ist nicht optimal.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Benchmark-Bericht anzeigen';
$string['benchshare'] = 'Dieses Ergebnis im Forum teilen';
$string['benchsuccess'] = '<b>Herzlichen Glückwunsch!</b><br />Die Leistung Ihrer Moodle-Installation scheint ausgezeichnet zu sein.';
$string['cloadmoreinfo'] = 'Konfigurationsdatei „config.php“ laden';
$string['cloadname'] = 'Ladezeit von Moodle';
$string['coursereadmoreinfo'] = 'Einen Kurs mehrfach lesen, um die Lesegeschwindigkeit der Datenbank zu messen';
$string['coursereadname'] = 'Leseleistung bei Kursdaten';
$string['coursewritemoreinfo'] = 'Einen Kurs mehrfach schreiben, um die Schreibgeschwindigkeit der Datenbank zu messen';
$string['coursewritename'] = 'Schreibleistung bei Kursdaten';
$string['description'] = 'Beschreibung';
$string['duration'] = '{$a} s';
$string['during'] = 'Zeit (Sekunden)';
$string['filereadmoreinfo'] = 'Eine Datei mehrfach lesen, um die Lesegeschwindigkeit des temporären Moodle-Verzeichnisses zu messen';
$string['filereadname'] = 'Datei-Leseleistung';
$string['filewritemoreinfo'] = 'Eine Datei mehrfach schreiben, um die Schreibgeschwindigkeit des temporären Moodle-Verzeichnisses zu messen';
$string['filewritename'] = 'Datei-Schreibleistung';
$string['info'] = 'Dieser Benchmark-Test sollte weniger als eine Minute dauern und wird nach zwei Minuten abgebrochen. Bitte warten Sie, bis die Ergebnisse angezeigt werden.';
$string['infodisclaimer'] = 'Führen Sie diesen Benchmark nicht auf einem Produktivsystem aus, da er die Leistung erheblich beeinträchtigen kann.';
$string['limit'] = 'Akzeptabler Grenzwert';
$string['modulename'] = 'Moodle-Benchmark';
$string['modulenameplural'] = 'Moodle-Benchmarks';
$string['notificatiopagedownloadmoreinfo'] = 'Benachrichtigungsseite der Administration mehrfach laden, um die Geschwindigkeit des Webservers zu messen';
$string['notificatiopagedownloadname'] = 'Ladezeit der Administrations-Benachrichtigungsseite';
$string['over'] = 'Kritischer Grenzwert';
$string['pluginname'] = 'Moodle-Benchmark';
$string['points'] = '{$a} Punkte';
$string['privacy:no_data_reason'] = 'Das Benchmark-Plugin speichert keine personenbezogenen Daten.';
$string['processormoreinfo'] = 'Eine PHP-Funktion in einer Schleife aufrufen, um die Prozessorgeschwindigkeit zu messen';
$string['processorname'] = 'Verarbeitungsgeschwindigkeit des Prozessors';
$string['querytype1moreinfo'] = 'Eine komplexe SQL-Abfrage ausführen, um die Datenbankgeschwindigkeit zu messen';
$string['querytype1name'] = 'Datenbankleistung (Nr. 1)';
$string['querytype2moreinfo'] = 'Eine komplexe SQL-Abfrage ausführen, um die Datenbankgeschwindigkeit zu messen';
$string['querytype2name'] = 'Datenbankleistung (Nr. 2)';
$string['redo'] = 'Benchmark erneut starten';
$string['score'] = 'Punktzahl';
$string['scoremsg'] = 'Benchmark-Ergebnis:';
$string['slowdatabaselabel'] = 'Die Datenbank scheint zu langsam zu sein.';
$string['slowharddrivelabel'] = 'Die Festplatte scheint zu langsam zu sein.';
$string['slowharddrivesolution'] = '<ul><li>Überprüfen Sie den Zustand der Festplatte und/oder des temporären Verzeichnisses.</li><li>Wechseln Sie gegebenenfalls die Festplatte und/oder das temporäre Verzeichnis.</li></ul>';
$string['slowprocessorlabel'] = 'Der Prozessor scheint zu langsam zu sein.';
$string['slowprocessorsolution'] = '<ul><li>Prüfen Sie, ob die Hardwareausstattung für Moodle ausreichend ist.</li></ul>';
$string['slowserverlabel'] = 'Der Webserver scheint zu langsam zu sein.';
$string['slowweblabel'] = 'Die Benachrichtigungsseite wird zu langsam geladen.';
$string['slowwebsolution'] = '<ul><li><a href="{$a}" target="_blank">Moodle-Cache leeren</a>.</li></ul>';
$string['start'] = 'Benchmark starten';
$string['total'] = 'Gesamtzeit';

$string['infoaverage'] = 'Führen Sie den Benchmark nach Möglichkeit mehrmals aus, um einen aussagekräftigen Durchschnittswert zu erhalten. Wenn Ihre Installation zu langsam ist, finden Sie Hinweise zur Optimierung in den <a href="https://docs.moodle.org/en/Performance_recommendations" target="_blank">Moodle-Empfehlungen zur Leistung</a>.';

$string['slowdatabasesolution'] = '<ul><li><a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank">Prüfen Sie die Integrität Ihrer Datenbank</a>.</li><li><a href="https://mariadb.com/kb/en/library/optimization-and-tuning/" target="_blank">Optimieren Sie die Datenbankkonfiguration</a>.</li></ul>';

$string['slowserversolution'] = '<ul><li>Überprüfen Sie die <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">MPM-Konfiguration Ihres Apache-Webservers</a> oder ziehen Sie einen Wechsel zu <a href="https://nginx.org/" target="_blank">NGINX</a> in Betracht.</li><li>Falls Moodle lokal installiert ist, stellen Sie sicher, dass Ihre Antivirensoftware die Moodle-Dateien nicht bei jedem Zugriff erneut überprüft.</li></ul>';
