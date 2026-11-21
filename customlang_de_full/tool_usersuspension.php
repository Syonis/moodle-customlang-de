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
 * @package    tool
 * @subpackage usersuspension
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['form:static:uploadfile:desc'] = 'Datei mit zu sperrenden Nutzern hier hochladen<br/>
Die CSV-Datei kann folgendermaßen konfiguriert werden:<br/>
<ol>
<li>\'einfache (simple)\' Datei, die NUR E-Mail-Adressen enthält, eine pro Zeile</li>
<li>\'intelligente (smarte)\' Datei, die Spalten enthält.<br/>
Mögliche Werte sind
<ul><li>email: Spaltenwert E-Mail-Adresse des Kontos</li>
<li>idnumber: Spaltenwert enthält die IdNummer des Kontos</li>
<li>username: Spaltenwert enthält den Anmeldenamen des Kontos</li>
</ul></ol>';
$string['label:users:excluded'] = 'Ausgeschlossene Nutzer';
$string['label:users:potential'] = 'Mögliche Nutzer';
$string['link:upload'] = 'Datei mit zu sperrenden Nutzern hochladen';
$string['page:view:exclude.php:introduction'] = '<p>Auf dieser Seite werden die konfigurierten Ausschlüsse angezeigt.<br/>
Ausschlüsse sind entweder Nutzer oder globale Gruppen, die vollständig von der automatischen Verarbeitung ausgeschlossen werden.<br/>
Der Ausschluss einer globalen Gruppe bedeutet, dass alle Nutzer, die Mitglied der globalen Gruppe sind, ausgeschlossen werden.
Verwenden Sie die Optionen auf dieser Seite, um globale Gruppen oder Nutzer zur Ausschlussliste hinzuzufügen.</p>';
$string['page:view:log.php:introduction'] = 'Die nachstehende Tabelle zeigt den Status, der den Nutzern entweder durch automatische Verarbeitung oder durch die Verwendung dieses Tools zugewiesen wurde.
 Die Tabelle zeigt, je nach Konfiguration, den Sperrstatus oder den Löschstatus Ihrer Nutzer sowie den Zeitstempel, zu dem bestimmte Aktionen durchgeführt wurden.';
$string['page:view:statuslist.php:introduction:status'] = 'Diese Übersicht zeigt Nutzern, die aktiv überwacht werden. Aktiv überwachte Nutzer sind Nutzer, die nicht durch Konfiguration von der Überwachung ausgeschlossen sind. Diese Übersicht unterscheidet sich von der Übersicht des Haupt-Administrators dadurch, dass sie <i>keine Nutzerkonten anzeigt</i>, die über die Ausschlussfunktion dieses Tools von der Überwachung der ausgeschlossen wurden.';
$string['privacy:metadata:tool_usersuspension_excl'] = 'Die Nutzer-Ausschlüsse speichern die von der automatischen Sperrung ausgeschlossenen Nutzer.';
$string['privacy:metadata:tool_usersuspension_log'] = 'Der Status der Nutzersperrung speichert historische/protokollierte Informationen über gesperrte Nutzer.';
$string['privacy:metadata:tool_usersuspension_status'] = 'Der Status der Nutzersperrung speichert Informationen über gesperrte Nutzer.';
$string['setting:desc:cleanup_deleteafter'] = 'Legt fest, in welchem zeitlichen Abstand nach ihrer Sperrung Nutzer automatisch gelöscht werden sollen';
$string['setting:desc:enablecleanup'] = 'Aktiviert oder deaktiviert die Bereinigung von Nutzern';
$string['setting:desc:enabled'] = 'Aktiviert oder deaktiviert die Sperrung von Nutzern';
$string['setting:desc:enablefromfolder'] = 'Aktiviert oder deaktiviert die automatische Sperrung von Nutzern aus einer hochgeladenen CSV-Datei, die im Upload-Ordner gespeichert ist';
$string['setting:desc:enablesmartdetectwarning'] = 'Wenn diese Funktion aktiviert ist, werden die Nutzer per E-Mail über ihre bevorstehende Sperrung informiert.';
$string['setting:desc:enableunsuspendfromfolder'] = 'Aktiviert oder deaktiviert die automatische Reaktivierung von Nutzern über eine hochgeladene CSV-Datei';
$string['setting:desc:smartdetect_suspendafter'] = 'Legt die Zeitschwelle für Inaktivität fest, nach der inaktive Nutzer gesperrt werden';
$string['setting:enablefromfolder'] = 'Automatische Sperrung von Nutzern anhand der vorliegenden CSV-Datei';
$string['setting:enablefromupload'] = 'Sperrung von Nutzern über hochgeladene Datei aktivieren';
$string['setting:enableunsuspendfromfolder'] = 'Automatische Reaktivierung von Nutzern anhand der vorliegenden CSV-Datei';
$string['table:status:delete'] = 'Zu löschende Nutzer';
$string['table:status:status'] = 'Aktiv überwachte Nutzer';
$string['table:status:suspended'] = 'Gesperrte Nutzer';
$string['table:status:tosuspend'] = 'Zu sperrende Nutzer';
$string['task:delete'] = 'Task Nutzersperrung: Automatische Löschung von gesperrten Nutzern';
$string['testfromfolder:suspend'] = 'Test der unbeaufsichtigten Sperrung von Nutzern (über Ordner)';
$string['testfromfolder:unsuspend'] = 'Test der unbeaufsichtigten Reaktivierung von Nutzern (über Ordner)';
