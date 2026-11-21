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
 * @package    plagiarism
 * @subpackage turnitin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enablepseudo'] = 'Datenschutz für Teilnehmer aktivieren';
$string['enablepseudo_desc'] = 'Wenn diese Option ausgewählt ist, werden die E-Mail-Adressen der Teilnehmer für Turnitin-API-Aufrufe in ein Pseudoäquivalent umgewandelt.<br /><i>(<b>Hinweis:</b> Diese Option kann nicht geändert werden, wenn Moodle-Benutzerdaten bereits mit Turnitin synchronisiert wurden.)</i>';
$string['excludebiblio_help'] = 'Mit dieser Einstellung können Trainer festlegen, dass bei der Erstellung von Ähnlichkeitsprüfungen Texte im Literaturverzeichnis, in den zitierten Werken oder in den Referenzabschnitten von studentischen Arbeiten nicht auf Übereinstimmungen geprüft werden. Diese Einstellung kann in einzelnen Ähnlichkeitsprüfungen überschrieben werden.';
$string['excludequoted_help'] = 'Mit dieser Einstellung können Trainer festlegen, dass Text, der in Anführungszeichen steht, bei der Erstellung von Ähnlichkeitsprüfungen nicht auf Übereinstimmungen geprüft wird. Diese Einstellung kann in einzelnen Ähnlichkeitsprüfungen überschrieben werden.';
$string['excludevalue_help'] = 'Mit dieser Einstellung können Trainer festlegen, dass Übereinstimmungen, die nicht lang genug sind (vom Dozenten festgelegt), bei der Erstellung von Ähnlichkeitsprüfungen nicht berücksichtigt werden. Diese Einstellung kann in einzelnen Ähnlichkeitsprüfungen überschrieben werden.';
$string['privacy:metadata:plagiarism_turnitin_files:grade'] = 'Die Bewertung, mit der Trainer die Arbeit bewertet haben.';
$string['privacy:metadata:plagiarism_turnitin_users:instructor_defaults'] = 'Die Standardeinstellungen der Trainer für die Zuweisung';
$string['relinkusers'] = 'Nutzer erneut verlinken';
$string['reportgenspeed_help'] = 'Für diese Aufgabeneinstellung sind drei Optionen verfügbar: \'Berichte sofort erstellen (erneute Übermittlungen sind unzulässig)\', \'Berichte sofort erstellen (erneute Übermittlungen sind bis zum Fälligkeitsdatum zulässig)\' und \'Berichte am Fälligkeitsdatum erstellen (erneute Übermittlungen sind bis zum Fälligkeitsdatum zulässig)\'<br /><br />Mit der Option \'Berichte sofort erstellen (erneute Übermittlungen sind unzulässig)\' wird der Ähnlichkeitsbericht sofort erstellt, wenn ein/e Teilnehmer/in eine Übermittlung vornimmt. Ist diese Option festgelegt, können Ihre Teilnehmer keine erneuten Übermittlungen für die Aufgabe vornehmen.<br /><br />Wenn Sie erneute Übermittlungen zulassen möchten, wählen Sie die Option \'Berichte sofort erstellen (erneute Übermittlungen sind bis zum Fälligkeitsdatum zulässig)\'. Bei dieser Option können Teilnehmer bis zum Fälligkeitsdatum wiederholt Arbeiten für die Aufgabe übermitteln. Die Verarbeitung von Ähnlichkeitsberichten für erneute Übermittlungen kann bis zu 24 Stunden dauern.<br /><br />Mit der Option \'Berichte am Fälligkeitsdatum erstellen (erneute Übermittlungen sind bis zum Fälligkeitsdatum zulässig)\' wird der Ähnlichkeitsbericht erst am Fälligkeitsdatum für Aufgabe erstellt. Mit dieser Einstellung werden bei der Erstellung des Ähnlichkeitsberichts alle für die Aufgabe übermittelten Arbeiten miteinander abgeglichen.';
$string['repositoryoptions_0'] = 'Standardmäßige Repository-Optionen für Trainer aktivieren';
$string['repositoryoptions_1'] = 'Erweiterte Ablageoptionen für Trainer aktivieren';
$string['studentdataprivacy'] = 'Datenschutzeinstellungen für Teilnehmer';
$string['studentdataprivacy_desc'] = 'Die folgenden Einstellungen können so konfiguriert werden, dass persönliche Daten von Teilnehmern nicht über die API an Turnitin übermittelt werden.';
$string['studentreports'] = 'Teilnehmer die Ähnlichkeitsprüfung anzeigen';
$string['studentreports_help'] = 'Ermöglicht Teilnehmer das Anzeigen von Turnitin-Ähnlichkeitsprüfungen. Wenn Sie die Option "Ja" wählen, können Teilnehmer die von Turnitin erstellte Ähnlichkeitsprüfung ansehen.';
$string['submitpapersto_help'] = '<strong>Kein Repository: </strong><br />Turnitin wird angewiesen, eingereichte Dokumente nicht in einem Repository zu speichern. Wir verarbeiten das Dokument nur, um die erste Ähnlichkeitsprüfung durchzuführen.<br /><br /><strong>Standard-Repository: </strong><br />Turnitin speichert eine Kopie des eingereichten Dokuments nur im Standard-Repository. Durch Auswahl dieser Option wird Turnitin angewiesen, gespeicherte Dokumente nur für Ähnlichkeitsprüfungen mit zukünftig eingereichten Dokumenten zu verwenden.<br /><br /><strong>Institutionelles Repository (sofern anwendbar): </strong><br />Durch Auswahl dieser Option wird Turnitin angewiesen, eingereichte Dokumente nur in einem privaten Repository Ihrer Institution hinzuzufügen. Ähnlichkeitsprüfungen der eingereichten Dokumente werden nur von anderen Trainern Ihrer Institution durchgeführt.';
$string['tiiaccountsettings_desc'] = 'Stellen Sie sicher, dass diese Einstellungen der Konfiguration in Ihrem Turnitin-Account entsprechen, da andernfalls Probleme mit der Aufgabenerstellung und/oder von Teilnehmern übermittelten Arbeiten auftreten können.';
$string['turnitinrepositoryoptions_help'] = '<strong>Standardmässige Repository-Optionen für Trainer aktivieren: </strong><br /> Trainer können in Turnitin festlegen, ob Dokumente zum Standard-Repository, zum privaten Repository der Institution oder zu keinem Repository hinzugefügt werden sollen.<br /><br /><strong>Erweiterte Ablageoptionen für Trainer aktivieren: </strong><br />Mit dieser Option können Trainer die Aufgabeneinstellungen anzeigen, damit Teilnehmer in Turnitin festlegen können, wo ihre Dokumente gespeichert werden. Teilnehmer können wählen, ob ihre Dokumente zum Standard-Repository oder zum privaten Repository der Institution hinzugefügt werden.<br /><br /><strong>Alle Arbeiten an die Standardablage übermitteln: </strong><br />Alle Dokumente werden standardmässig zum Standard-Repository hinzugefügt.<br /><br /><strong>Übermitteln Sie keine Arbeiten an eine Ablage: </strong><br />Dokumente werden ausschließlich für die eigentliche Prüfung durch Turnitin und zum Anzeigen für die Trainer zur Benotung verwendet.<br /><br /><strong>Alle Arbeiten an das Instituts-Repository übermitteln: </strong><br />In Turnitin ist festgelegt, dass alle übermittelten Arbeiten in der Institutionsablage für Arbeiten gespeichert werden. Ähnlichkeitsprüfungen der übermittelten Dokumente werden ausschließlich von anderen Trainern in Ihrer Institution durchgeführt.';
$string['unlinkrelinkusers'] = 'Nutzer erneut verlinken / Verlinkung aufheben';
$string['unlinkusers'] = 'Nutzer trennen';
