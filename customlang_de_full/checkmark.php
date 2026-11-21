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
 * @subpackage checkmark
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all_absent'] = 'Alle abwesenden Teilnehmer';
$string['all_attendant'] = 'Alle anwesenden Teilnehmer';
$string['all_marked_presentation'] = 'Alle für eine Tafelleistung vorgemerkten Teilnehmer';
$string['all_with_presentationgrading'] = 'Alle Teilnehmer mit einer Tafelleistung';
$string['all_without_presentationgrading'] = 'Alle Teilnehmer ohne einer Tafelleistung';
$string['allowresubmit_help'] = 'Wenn aktiviert, ist es Teilnehmer erlaubt, nach der Benotung erneut (für eine erneute Benotung) abzugeben.';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Beschreibung für Teilnehmer nur ab dem Abgabebeginn angezeigt.';
$string['attendance_help'] = 'In der Spalte wird die Anwesenheit der Teilnehmer angezeigt:<br /><ul><li>? - unbekannt</li><li>✓ - anwesend</li><li>✖ - abwesend</li></ul>';
$string['autograde_strchanged'] = 'Im Zuge der automatischen Bewertung werden bei <strong>{$a}</strong> Teilnehmer die Punkte geändert.';
$string['availabledate_help'] = 'Beginn der Abgabeperiode. Nach diesem Datum ist es Teilnehmer möglich Abgaben zu tätigen.';
$string['bulk_help'] = 'Hier können Sie Aktionen wie das Setzen der Anwesenheit, automatische Bewertung oder Kombinationen daraus an mehreren Einträgen gleichzeitig ausführen.<br /> <ul> <li><strong>als anwesend markieren:</strong> Markiert die ausgewählten Teilnehmer als anwesend</li> <li><strong>als abwesend markieren:</strong> Markiert die ausgewählten Teilnehmer als abwesend</li> <li><strong>automatisch bewerten:</strong> Errechnet und setzt die Bewertung für die ausgewählten Teilnehmer automatisch</li> <li><strong>Bewertung entfernen:</strong> Entfernt die vorhandene Bewertung für ausgewählte Teilnehmer</li> <li><strong>Bewertung (Tafelleistung) entfernen:</strong> Entfernt die vorhandene Bewertung (Tafelleistung) für ausgewählte Teilnehmer</li> <li><strong>als Anwesend markieren und bewerten:</strong> Markiert die ausgewählten Teilnehmer als anwesend und bewertet diese anschließend automatisch</li> <li><strong>als abwesend markieren und bewerten:</strong> Markiert die ausgewählten Teilnehmer als abwesend und bewertet diese anschließend automatisch</li> </ul><br /> Achtung: Wenn die Anwesenheit an die Noten gekoppelt ist werden nur als anwesend markierte Teilnehmer mit Punkten für gekreuzte Beispiele bewertet. Abwesende Teilnehmer erhalten 0 Punkte und Teilnehmer mit unbekanntem Anwesenheitsstatus werden übersprungen!';
$string['bulk_no_users_selected'] = 'Sie haben keine Teilnehmer/in ausgewählt. Wählen Sie die gewünschten Teilnehmer über die Checkboxen der linken Tabellenspalte aus.';
$string['calendarteachers'] = 'Abgabetermin für Trainer im Kalender anzeigen';
$string['calendarteachers_help'] = 'Der Abgabetermin der Kreuzerlübung kann für Trainer optional im Kalender angezeigt werden. Bei Teilnehmern wird der Abgabetermin standardmäßig im Kalender angezeigt. Achtung: Wenn es viele Kreuzerlübungen im Kurs gibt, kann die Kalenderansicht für Trainer unübersichtlich werden.';
$string['emailstudents'] = 'E-Mail Benachrichtigung an Teilnehmer';
$string['emailteachers'] = 'E-Mail Benachrichtigung an Trainer';
$string['emailteachers_help'] = 'Wenn aktiviert, bekommen Trainer eine E-Mail-Benachrichtigung, sobald Teilnehmer eine Kreuzerlübung abgeben bzw. ihre Kreuzerlübungsabgaben aktualisieren.

Nur Trainer, die berechtigt sind, diese spezielle Kreuzerlübung zu bewerten, werden benachrichtigt. Zum Beispiel werden, wenn der Kurs separate Gruppen verwendet, Trainer, die auf bestimmte Gruppen beschränkt sind, nur über Teilnehmer in diesen Gruppen informiert, nicht jedoch über Teilnehmer anderer Gruppen.';
$string['enablenotification_help'] = 'Wenn aktiviert, werden Teilnehmer benachrichtigt, sobald ihre Abgaben (oder zugehörige Tafelleistungen) bewertet oder ihre Anwesenheit gesetzt wurde.';
$string['gradingdue_help'] = 'Das erwartete Datum markiert den Abschluss der Abgabe. Dieses Datum wird verwendet, um Benachrichtigungen für Trainer im Dashboard zu priorisieren.';
$string['invaliduserid'] = 'Ungültige Teilnehmer-ID';
$string['markforpresentationerror'] = 'Fehler beim Versuch, Teilnehmer für Tafelleistung vorzumerken';
$string['markforpresentationfailed'] = 'Vormerken von Teilnehmern für Tafelleistung fehlgeschlagen';
$string['markforpresentationonesuccess'] = 'Vormerken von {$a} Teilnehmer für Tafelleistung erfolgreich';
$string['markforpresentationsuccess'] = 'Vormerken von {$a} Teilnehmer für Tafelleistung erfolgreich';
$string['modulename_help'] = '###### Hauptmerkmale
* Selbsteinschätzung der Teilnehmer: Teilnehmer markieren vorab in Moodle, welche Aufgaben sie vorbereitet haben und an der Tafel präsentieren können.
* Integrierte Leistungsbewertung: Trainer können die Teilnehmer direkt auf Basis ihrer Vorbereitung (Kreuzerl) sowie der tatsächlichen Tafelpräsentation bewerten.
* Anwesenheitserfassung: Das Tool ermöglicht es Trainern, parallel zur Übungseinheit die An- und Abwesenheiten der Teilnehmer zu dokumentieren.

###### Anwendungsbeispiele
* Vorbereitungskontrolle bei regelmäßigen Übungen: Ideal für wöchentlich wiederkehrende Lehrveranstaltungen mit praktischen Übungsaufgaben und Punktvergabe.
* Gezielte Auswahl für Tafelpräsentationen: Effiziente Auswahl von Teilnehmern während der Präsenzeinheit basierend auf deren vorab abgegebenen Kreuzen.
* Kombinierte Leistungs- und Präsenzdokumentation: Nutzung als zentrales Werkzeug nach einer Unterrichtseinheit, um Punkte für Tafelleistungen einzutragen und die Präsenzliste zu pflegen.';
$string['modulename_summary'] = 'Kreuzerlübungen erlauben es Trainer eine Aufgabe zu spezifizieren, in der Teilnehmer Beispiele kreuzen müssen, die danach bewertet werden können.';
$string['modulename_tip'] = 'Sowohl die Namen der Beispiele für die Kreuzerl als auch die jeweiligen Punkte können Trainer individuell vergeben.
<p><a href="https://academic-moodle-cooperation.org/anleitungen/kreuzerlubung-verwenden/" target="_blank"><i class="icon fa fa-info-circle"></i>Anleitung: "Kreuzerlübung verwenden"</a></p>
<p><a href="https://academic-moodle-cooperation.org/anleitungen/kreuzerlubung-anwesenheit-erfassen/" target="_blank"><i class="icon fa fa-info-circle"></i>Anleitung: "Kreuzerlübung: Anwesenheit erfassen"</a></p>
<p><a href="https://academic-moodle-cooperation.org/anleitungen/kreuzerlubung-tafelleistung-erfassen/" target="_blank"><i class="icon fa fa-info-circle"></i>Anleitung: "Kreuzerlübung: Tafelleistung erfassen"</a></p>
<p><a href="https://academic-moodle-cooperation.org/anleitungen/kreuzerlubung-bericht-einsehen/" target="_blank"><i class="icon fa fa-info-circle"></i>Anleitung: "Kreuzerlübung Bericht einsehen  "</a></p>
<p><a href="https://youtu.be/4UI3DlMIk_8?si=iD_HicKrSF3HvLgN" target="_blank"><i class="icon fa fa-play-circle"></i>Promovideo</a></p>';
$string['nostudents'] = 'Es sind keine Teilnehmer zur Anzeige vorhanden!';
$string['nostudentsmatching'] = 'Es sind keine Teilnehmer vorhanden, die den aktuellen Einstellungen entsprechen!';
$string['nousers'] = 'Es sind keine Teilnehmer zur Anzeige vorhanden!';
$string['numberofparticipants'] = 'Teilnehmer';
$string['override_users_dates'] = 'Verfügbarkeitsänderung für Teilnehmer';
$string['overridessummaryuser'] = 'Nutzer: {$a}';
$string['pagesize_help'] = 'Wenn in Ihrem Kurs sehr viele Teilnehmer eingeschrieben sind, können Sie mittels der Einstellung "Optimal" die Aufteilung der Listeneinträge pro Seite entsprechend der gewählten Schriftgröße und Seitenausrichtung optimieren.';
$string['pdfpagesize_help'] = 'Wenn in Ihrem Kurs sehr viele Teilnehmer eingeschrieben sind, können Sie mittels der Einstellung "Optimal" die Aufteilung der Listeneinträge pro Seite entsprechend der gewählten Schriftgröße und Seitenausrichtung optimieren.';
$string['presentationgrading_grade_help'] = 'Diese Einstellungen kontrollieren, wie die Tafelleistung erfasst wird. Für den Typ haben Sie die Auswahl zwischen: <ul><li><strong>Kein</strong> Es werden keine Noten aufgezeichnet, man hat jedoch die Möglichkeit ein Text-Feedback zu geben</li><li><strong>Skala</strong> Benutzen Sie eine zuvor definierte Skala, um die Tafelleistungen der Teilnehmer zu bewerten</li><li><strong>Punkt</strong> benutzen Sie einen numerischen Wert, um die Tafelleistung der Teilnehmer zu bewerten</li></ul>';
$string['privacy:metadata:pref:mailinfo'] = 'Die Standardeinstellung, ob Nachrichten an Nutzer gesendet werden sollen oder nicht, wenn sie Kommentare erhalten.';
$string['privacy:metadata:subsys:message'] = 'Wenn aktiviert, werden Benachrichtigungen an die Teilnehmer verschickt, wenn sie einen Kommentar erhalten haben und an Trainer, wenn jemand eine Abgabe eingereicht hat.';
$string['remove_grade_failed'] = 'Löschen der Nutzer-Bewertung fehlgeschlagen';
$string['remove_grade_success'] = 'Bewertungen wurden erfolgreich entfernt für Nutzer {$a}';
$string['remove_presentation_grade_failed'] = 'Löschen der Nutzer-Bewertung (Tafelleistung) fehlgeschlagen';
$string['remove_presentation_grade_success'] = 'Bewertungen (Tafelleistung) wurden erfolgreich entfernt für Nutzer {$a}';
$string['sequentialnumbering_help'] = 'Zusätzliche Spalte mit forlaufender Nummerierung jeder Zeile (entspr. Teilnehmer/in) anzeigen, beginnend mit 1. Kann zum Beispiel verwendet werden, um Teilnehmer zufällig auszuwählen, die präsentieren sollen.';
$string['studentpreview'] = 'Vorschau für Teilnehmer';
$string['submissionsamount'] = '{$a->submitted} von {$a->total} Teilnehmer haben abgegeben';
$string['trackattendance_help'] = 'Aktivieren Sie diese Funktion, um die Anwesenheit bei Teilnehmern zu protokollieren.';
$string['usersnone'] = 'Teilnehmer haben keinen Zugriff auf diese Aufgabe.';
