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
 * @package    mod
 * @subpackage attendance
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedrecips'] = '{$a} neue Empfänger hinzugefügt';
$string['allowupdatestatus'] = 'Teilnehmer erlauben, die Anwesenheit zu ändern';
$string['allowupdatestatus_desc'] = 'Wenn gesetzt, dann sind Teilnehmer in der Lage, ihren eigenen Anwesenheitsstatus für die Sitzung zu ändern, nachdem sie schon selbst einen Status erfasst haben.';
$string['allowupdatestatus_help'] = 'Wenn gesetzt, dann sind Teilnehmer in der Lage, ihren eigenen Anwesenheitsstatus für die Sitzung zu ändern, nachdem sie schon selbst einen Status erfasst haben.';
$string['attendance:managetemporaryusers'] = 'Temporäre Teilnehmer verwalten';
$string['attendance:warningemails'] = 'Kann abonniert werden, um E-Mails über abwesende Teilnehmer zu erhalten';
$string['autoassignstatus_help'] = 'Wenn dies ausgewählt ist, wird automatisch der höchstmögliche Status den Nutzern zugewiesen.';
$string['automark_help'] = 'Automatische Statusänderung erlauben
Wenn diese Einstellung auf "Ja" gesetzt ist, erhalten die Nutzer automatisch den Status in Abhängigkeit Ihres Erstzugriffs auf den Kurs.
Wenn die Einstellung auf "Am Ende des Termins auf nicht bewertet setzen" gesetzt ist, wird bei jedem/r Teilnehmer/in, der seine / ihre Anwesenheit noch nicht erfasst hat, der nicht bewertete Status gesetzt.';
$string['availability_help'] = 'Verfügbarkeit dieses Status beschränken. <br>Wenn die Option "Begrenzte Zeit" ausgewählt ist, geben Sie die Anzahl von Minuten an, die dieser Status nach Sitzungsbeginn verfügbar ist. Dies gilt, wenn die Teilnehmer ihre eigene Anwesenheit selbst markieren.';
$string['availablebeforesession_help'] = 'Wenn Teilnehmer ihre eigene Anwesenheit markieren, erlauben Sie, dass dieser Status vor Sitzungsbeginn markiert wird.';
$string['commonsession'] = 'Alle Teilnehmer';
$string['commonsessions'] = 'Alle Teilnehmer';
$string['coursemessage'] = 'Teilnehmer anschreiben';
$string['currentlyselectedusers'] = 'Aktuell ausgewählte Nutzer';
$string['defaultview_desc'] = 'Dies ist die standardmäßige Ansicht für Trainer beim ersten Login.';
$string['emailsubject_help'] = 'Beim Senden einer Warnung an Teilnehmer wird der Betreff aus diesem Feld verwendet.';
$string['emailuser_help'] = 'Wenn dies aktiviert ist, wird eine Warnung an Teilnehmer gesendet.';
$string['enablewarnings_desc'] = 'Dies erlaubt es, eine Warnung für eine Anwesenheitsaktivität festzulegen, die als E-Mail-Benachrichtigung an Teilnehmer geschickt wird, wenn diese unter die definierte Anwesenheitsschwelle fallen. <br/><strong>WARNUNG: Dies ist eine neue Funktionalität und wurde noch nicht ausführlich getestet. Die Nutzung erfolgt auf eigenes Risiko. Bitte geben Sie Rückmeldung in den Moodle Foren, wenn Sie der Ansicht sind, dass dies gut funktioniert.</strong>';
$string['error:qrcode'] = '"Teilnehmer erlauben, die eigene Anwesenheit zu erfassen" muss aktiviert sein, um den QR-Code nutzen zu können! Überspringen.';
$string['identifyby'] = 'Teilnehmer auswählen nach';
$string['invalidemails'] = 'Sie müssen gültige Nutzeraccounts als Empfänger eingeben. Folgende Nutzer konnten nicht gefunden werden: {$a}';
$string['messagedselecteduserfailed'] = 'Fehler beim Senden einer Nachricht an einen oder mehrere Nutzer. Schalten Sie bitte das Debugging ein, um mehr zu erfahren.';
$string['modulename_help'] = '###### Features
- Trainer können die Anwesenheit der Teilnehmer im Kurs erfassen
- Flexible Kursstruktur durch das Erfassen einzelner Termine
- Benutzerdefinierte Anwesenheits-Status (z.B. Anwesend, Abwesend, Verspätet, Entschuldigt)
- Teilnehmer können ihre Anwesenheit einsehen
- Detaillierte Berichte zu einzelnen Teilnehmern oder den gesamten Kurs

###### Nutzung
- Erfassen der Anwesenheit für Face-to-Face- oder Onlinekurse
- Erfassen der Anwesenheit und Pünktlichkeit
- Erstellen von Berichten zur Anwesenheit
- Status anpassen, um spezielle Kursanforderungen abzubilden
- Anwesenheitsdaten transparent mit Teilnehmern teilen';
$string['modulename_summary'] = 'Erfassen und verwalten Sie die Anwesenheit der Teilnehmer über alle Sitzungen hinweg und gewähren Sie ihnen gleichzeitig Zugriff auf ihre eigenen Anwesenheitsberichte.';
$string['mustselectusers'] = 'Sie müssen Teilnehmer für den Export auswählen';
$string['noattendanceusers'] = 'Es ist nicht möglich Daten zu exportieren weil keine Teilnehmer im Kurs eingeschrieben sind.';
$string['notifytask'] = 'Warnungen an Nutzer verschicken';
$string['nousers'] = 'Keine eingeschriebenen Teilnehmer gefunden, für die eine Anwesenheit eingetragen werden kann.';
$string['onlyselectedusers'] = 'Ausgewählte Nutzer exportieren';
$string['passwordgrp'] = 'Passwort für Teilnehmer';
$string['passwordgrp_help'] = 'Wenn dies gesetzt ist, müssen Teilnehmer erst dieses Passwort eingeben, bevor sie ihre Anwesenheit für diesen Termin erfassen können. Wenn Sie dieses Feld leer lassen, wird kein Passwort abgefragt.';
$string['preventsharedip'] = 'Verhindern, dass Teilnehmer eine IP-Adresse miteinander teilen können';
$string['preventsharedip_help'] = 'Verhindern, dass Teilnehmer dasselbe Endgerät (über die IP-Adresse identifiziert) nutzen, um die Anwesenheit für andere zu erfassen.';
$string['privacy:metadata:attendancewarningdone'] = 'Log für Warnungen, die an Nutzer über deren Anwesenheitseintrag versendet wurden.';
$string['privacy:metadata:preference:mod_attendance_statusdropdown'] = 'Bevorzugter Geltungsbereich für die Zuweisung eines Status an alle Teilnehmer (alle oder nur die nicht ausgewählten).';
$string['requiredentries'] = 'Temporäre Einträge überschreiben die Anwesenheitsaufzeichnungen von den Teilnehmern';
$string['requiredentry'] = 'Hilfestellung zur Zusammenführung von temporären Teilnehmern';
$string['resultsperpage_desc'] = 'Anzahl der Teilnehmer pro Seite';
$string['sessiontype_help'] = 'Sie können Termine für alle Teilnehmer oder für Gruppen hinzufügen. Die verschiedenen Arten hängen von dem Gruppenmodus der Aktivität ab.

* Im Modus "Keine Gruppen" können Sie nur Termine für alle Teilnehmer erstellen.
* Im Modus "Getrennte Gruppen" können Sie nur Termine für Gruppen erstellen.
* Im Modus "Sichtbare Gruppen" können Sie beide Termin-Arten anlegen.';
$string['studentmarking'] = 'Erfassung durch die Teilnehmer';
$string['studentpassword'] = 'Kennwort für Teilnehmer';
$string['studentrecordingexpanded'] = 'Erfassung durch Teilnehmer ausgeklappt';
$string['studentrecordingexpanded_desc'] = 'Zeigt den Abschnitt "Erfassung durch Teilnehmer" standardmäßig ausgeklappt, wenn ein neuer Termin hinzugefügt wird.';
$string['studentscanmark'] = 'Teilnehmer erlauben, die Anwesenheit selbst zu erfassen';
$string['studentscanmark_desc'] = 'Wenn gesetzt, können Teilnehmer ihre Anwesenheit selbst erfassen.';
$string['studentscanmark_help'] = 'Wenn gesetzt, dann sind Teilnehmer in der Lage, ihren eigenen Anwesenheitsstatus für die Sitzung zu ändern.';
$string['studentscanmarksessiontime'] = 'Teilnehmer erfassen ihre Anwesenheit';
$string['studentscanmarksessiontime_desc'] = 'Wenn dies aktiviert ist, können Teilnehmer Ihre Anwesenheit nur erfassen, während der Termins stattfindet.';
$string['studentscanmarksessiontimeend_desc'] = 'Wenn der Termin über kein Endzeitpunkt verfügt, für wie viele Minuten soll es Teilnehmer möglich sein, ihre Anwesenheit zu erfassen.';
$string['studentsearlyopentime_help'] = 'Diese Option ermöglicht es Trainern, die Sitzung früher zu eröffnen, so dass die Anwesenheit vor dem eigentlichen Sitzungsbeginn markiert werden kann.';
$string['subnetactivitylevel_desc'] = 'Wenn dies aktiviert ist, können Trainer die standardmäßig gesetzten Subnetz Einstellungen auf der Aktivitätsebene überschreiben. Sonst wird der eingestellte Standardwert verwendet, wenn eine Lerneinheit hinzugefügt wird.';
$string['temptable'] = 'Liste temporärer Teilnehmer';
$string['tempusers'] = 'Temporäre Teilnehmer';
$string['tempuserslist'] = 'Temporäre Teilnehmer';
$string['thirdpartyemails'] = 'Andere Teilnehmer benachrichtigen';
$string['thirdpartyemails_help'] = 'Liste an weiteren Teilnehmer, die benachrichtigt werden (benötigt das Recht mod/attendance:viewreports).';
$string['usemessageform'] = 'oder nutzen Sie das unten stehende Formular, um die Nachricht an die ausgewählten Nutzer zu schicken.';
$string['users'] = 'Teilnehmer zum exportieren';
$string['warningdesc_course'] = 'Die Warnungsschwelle, die hier gesetzt ist, beeinflusst den Abwesenheitsbericht und erlaubt es, dass Teilnehmer und Dritte informiert werden können. Wenn mehr als eine Warnung exakt zur selben Zeit ausgelöst werden, wird nur die Warnung mit dem niedrigeren Schwellenwert verschickt.';
