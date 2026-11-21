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
 * @subpackage offlinequiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allstudents'] = 'Alle Teilnehmer anzeigen';
$string['attemptsonly'] = 'Nur Teilnehmer mit Ergebnis anzeigen';
$string['checkparts'] = 'Ausgewählte Teilnehmer als anwesend markieren';
$string['closestudentview'] = 'Teilnehmer-Ansicht schließen';
$string['completionpass_help'] = 'Teilnehmer können den Offline-Test nur abschließen, wenn sie die Bestehensgrenze erreicht haben. Diese wird im Abschnitt \'Bewertung\' in den Testeinstellungen festgelegt.';
$string['configuseridentification'] = 'Eine Formel, die die Identifikation von Nutzern beschreibt. Diese Formel wird verwendet, um hochgeladene Antwortbögen den richtigen Nutzern zuzuordnen. Die linke Seite der Gleichung legt die Anzahl an Stellen fest (nur ganzzahlig, bis zu 10 Stellen). Die rechte Seite der Gleichung muss ein Feld der Tabelle \'user\' von Moodle sein (z.B. id, idnumber, phone1).
Darüber hinaus kann die Gleichung auch mit Präfix und Suffix umgehen, die der ausgefüllten Nummer hinzugefügt werden (z.B. "a[7]=username" oder "b[5]cd=username"). Diese Verkettungen von Zeichen und Ziffern definieren den Wert im verwendeten Feld in der Tabelle \'user\', der zur Identifikation von Nutzern herangezogen wird.';
$string['createlistfirst'] = 'Fügen Sie zuerst Teilnehmer hinzu';
$string['deletepartcheck'] = 'Möchten Sie die ausgewählten Teilnehmer wirklich löschen?';
$string['discriminationindex_info'] = 'Da die Trennschärfe-Effizienz eine Vorhersage der Frage zwischen guten und schlechten Bewertungen ermittelt kann diese nicht berechnet werdein weil
- es keine unterschiedlichen Antworten der Teilnehmer in dieser Frage gibt
- Es keine unterschiedlichen Bewertungen im Test gibt';
$string['editparticipants'] = 'Teilnehmer';
$string['invalidformula'] = 'Ungültige Formel zur Identifikation von Nutzern. Die Formel muss folgende Form haben: <Präfix>[<#Ziffern>]<Suffix>=<DB-Feld>.';
$string['marginwarning'] = 'Drucken Sie itte die folgenden Antwortbögen ohne zusätzliche Seitenränder. <br/> Teilen Sie möglichst <b>keine Kopien</b> an die Teilnehmer aus.';
$string['modulename_help'] = '###### Haupmerkmale
* Unterstützte Fragentypen: Multiple-Choice, Beschreibung, Alles-oder-nichts Multiple Choice.
* Bis zu sechs Prüfungsgruppen möglich.
* Prüfungsformulare werden automatisiert vom System generiert.
* Fragebogenformate: PDF, DOCX, LaTeX.
* Antwortbögen: normierte PDFs.
* Teilnehmer kreuzen Antworten auf ausgedruckten Antwortformularen an.
* Ausgefüllte Antwortbögen werden als TIFF, PDF, PNG oder JPG eingescannt, im Offline-Test hochgeladen und automatisiert ausgewertet.
* Fehlerhaft erkannte Bögen können online manuell korrigiert werden.
* Online-Prüfungseinsicht ist möglich.
* Bei Bedarf können Anwesenheitslisten erstellt werden.

###### Anwendungsbeispiel
* Große Präsenzprüfungen mit hoher Teilnehmer-Zahl, v.a. wenn die Ergebnisse schnell benötigt werden.';
$string['neededcorrection'] = '<strong>Achtung!</strong><br />&nbsp;<br />Einige Ihrer Markierungen mussten manuell korrigiert werden.
Die aufgrund dieses Fehlers notwendige händische Nachbearbeitung verzögerte die Gesamtauswertung und die Bekanntgabe der Ergebnisse an alle Teilnehmer.
<br />Die erfolgten Korrekturen sind als rot markierte Kästchen im folgenden Beleg zu sehen.
<br />Wir bitten Sie, bei zukünftigen Prüfungen Ihre Markierungen sorgfältig zu kontrollieren.<br />&nbsp;<br />Vielen Dank!';
$string['noattemptsonly'] = 'Nur Teilnehmer ohne Ergebnis anzeigen';
$string['oneclickenroldesc'] = 'Wenn Sie diese Option aktivieren haben die Trainer beim Korrigieren von Antwortbögen (Fehler "Teilnehmer/in nicht im Kurs") die Möglichkeit, Nutzer mit einem Klick in den Kurs einzuschreiben.';
$string['participants'] = 'Teilnehmer';
$string['participants_help'] = '<h2>Anwesenheitsliste</h2>
<p>Die Anwesenheitsliste dient dazu, bei großen Prüfungen mit vielen Teilnehmern abzugleichen, wer da war und
ob Sie von jeder Person einen Antwortbogen abgesammelt und ausgewertet haben. Sie können für einen Offline-Test
verschiedene Listen erstellen, um in mehreren Räumen zu prüfen oder nicht angemeldete Teilnehmer nachträglich
zuzuweisen. Die Teilnehmer können Sie den Listen basierend auf bestehenden Moodle-Gruppen zuweisen, wenn
Sie eine Gruppenanmeldung verwenden wollen.</p>
<p>Anschließend laden Sie die Listen als PDFs herunter, drucken sie aus und markieren die Teilnehmer
mit Kreuzen, ähnlich wie die Antworten auf dem Antwortbogen. Die Listen werden hochgeladen und das Programm speichert
in der Datenbank, wer als anwesend markiert ist. Bitte vermeiden Sie Verschmutzungen im Bereich der Barcodes, da
diese der Identifikation der Teilnehmer dienen.</p>';
$string['participantsinlists'] = 'Teilnehmer';
$string['participantsusage_help'] = 'Mit dieser Option können Sie die Anwesenheit der Teilnehmer mittels Anwesenheitslisten erfassen. Die Anwesenheitsliste dient dazu, bei großen Tests mit vielen Teilnehmern abzugleichen, wer anwesend war und ob von jeder Person ein Antwortbogen abgesammelt und ausgewertet wurde.';
$string['partimportnew_help'] = '<p> Hier können Sie die ausgefüllten Anwesenheitslisten der Teilnehmer hochladen. Sie können entweder mehrere eingescannte Bilddateien in einer ZIP-Datei oder einzelne Bilddateien hochladen. Das Offline-Test Modul wird die Bilder im Hintergrund automatisch auswerten. Die Namen der Bilddateien sollten keine Sonderzeichen (Umlaute etc.) enthalten. Die Bilder müssen als GIF-, PNG- oder TIF-Datei vorliegen. Eine Auflösung zwischen 200 und 300 DPI wird empfohlen.</p>';
$string['privacy:metadata:offlinequiz:showtutorial'] = 'Speichert, ob Teilnehmer aufgefordert werden, das Offline-Test-Tutorial zu absolvieren.';
$string['privacy:metadata:offlinequiz_hotspots:name'] = 'Art des Hotspots, z.B. u%number für einen Nutzer-Hotspot, a-0-0 für Frage 1 Antwort 1 usw.';
$string['privacy:metadata:offlinequiz_p_lists'] = 'Diese Tabelle speichert Informationen über Anwesenheitslisten, worin Trainer eintragen können, ob Teilnehmer anwesend waren oder nicht.';
$string['privacy:metadata:offlinequiz_scanned_p_pages'] = 'Die Tabelle speichert Seiten der Teilnehmer und deren allgemeine Informationen.';
$string['quizopenclose_help'] = 'Die Online-Prüfungseinsicht kann auf einen bestimmten Zeitraum eingegrenzt werden. Klicken Sie auf "Aktivieren", um Datum und Zeiteinstellungen zu ändern.

**Achtung:** Ist kein Zeitraum für die Prüfungseinsicht aktiviert, ist die Prüfungseinsicht uneingeschränkt möglich, solange der Offline-Test für die Teilnehmer eingeblendet ist.

Angezeigt werden in allen Fällen nur die unter "Bericht enthält" angehakten Optionen.';
$string['reviewoptions_help'] = 'Diese Optionen regeln, welche Informationen Teilnehmer bei der Prüfungseinsicht einsehen dürfen.
Im Detail bedeuten die Optionen:

**Der Versuch** - Teilnehmer sehen Fragetexte, Antworttexte und welche Antworten sie angekreuzt haben. Die richtigen Antworten werde nicht angezeigt.

**Ob richtig** - Diese Option lässt sich nur aktivieren, wenn auch "Der Versuch" ausgewählt ist. Es wird angezeigt,  welche der angekreuzten Antwortalternativen richtig (grün hinterlegt) und welche falsch (rot hinterlegt) sind.

**Punktezahl** -  Angezeigt werden Gruppe (bspw. B), Punktezahl (erreichte Punktezahl, Summe der Punkte der Fragen des Tests, erreichte % bspw. 40/80 (50%))  und Bewertung (bspw. 50 von maximal 100). Ist zusätzlich die Option "Der Versuch" ausgewählt, werden auch für jede Frage die maximale Punktezahl und die erreichten Punkte angezeigt.

**Spezifisches Feedback** - Spezifisches Feedback ist abhängig von der Antwort der Teilnehmer.

**Allgemeines Feedback** - Das allgemeine Feedback wird den Teilnehmerinnen und Teilnehmern angezeigt sobald die Ergebnisse importiert wurden. Im Gegensatz zu spezifischem Feedback, das vom Fragetyp und der Antwort der Teilnehmer abhängt, wird der Text des allgemeinen Feedbacks allen Teilnehmerinnen und Teilnehmern angezeigt. Allgemeines Feedback kann eingesetzt werden, um Hinweise zu geben. Links könnten zu weiteren Informationen führen, falls die Frage nicht verstanden wurde.

**Richtige Antworten** - Diese Option lässt sich nur anhaken, wenn auch "Der Versuch" ausgewählt ist und zeigt an, welche Antworten richtig bzw. falsch sind.

**Scannerbeleg** - Das eingescannte Antwortformular wird angezeigt.
Kästchen, die als Ankreuzungen gewertet wurden, sind grün umrandet.

**Scannerbeleg mit Bewertung** - Die eingescannten Antwortformulare werden angezeigt. Angekreuzte Kästchen sind grün umrandet. Falsche Antworten und fehlende Antworten werden hervorgehoben. Eine Tabelle zeigt die möglichen Punkte und die erreichten Punkte jeder Frage an.';
$string['showallparts'] = 'Alle {$a} Teilnehmer anzeigen';
$string['showcopyrightdesc'] = 'Wenn Sie diese Option aktivieren wird bei der Prüfungseinsicht für Teilnehmer ein Copyright Hinweis angezeigt.';
$string['showtutorial_help'] = 'Mit dieser Option können Sie für Ihre Teilnehmer ein Tutorial zum Prüfungsablauf anzeigen lassen. Darin erhalten die Teilnehmer grundlegende Informationen zu den Prüfungsunterlagen und zum Ausfüllen des Antwortbogens. Außerdem können sie das korrekte Ankreuzen der ID-Nummer interaktiv üben.<br /> <b>Bitte beachten Sie:</b><br /> Falls Sie diese Option auf "Ja" setzen, die Prüfung aber ausblenden, wird der Link zum Tutorial trotzdem nicht sichtbar sein. In diesem Fall können Sie das Tutorial auf der Startseite verlinken.';
$string['tabeditparticipants'] = 'Teilnehmer';
$string['uncheckparts'] = 'Ausgewählte Teilnehmer als abwesend markieren';
