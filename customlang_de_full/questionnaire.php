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
 * @subpackage questionnaire
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkboxes_help'] = 'Tragen Sie jeweils eine Option pro Zeile ein. Die Teilnehmer können eine oder mehrere Antworten auswählen.';
$string['completionsubmit'] = 'Teilnehmer müssen die Befragung abgeben, um abzuschließen.';
$string['dependquestion_help'] = 'Sie können eine übergeordnete Frage und eine Auswahlmöglichkeit für die Frage wählen. Eine untergeordnete Frage wird Teilnehmer nur dann angezeigt, wenn die übergeordnete Wahlmöglichkeit vorher ausgewählt wurde.';
$string['feedbacknotes_help'] = 'Der hier angegebene Text wird den Teilnehmern am Ende ihres Feedbackberichts angezeigt.';
$string['file_help'] = 'Erlauben Sie Nutzer, eine Datei einzureichen (nur einfache, virenfreie Formate sind zulässig).';
$string['modulename_help'] = 'Das Modul Befragung ermöglicht die Erstellung von Fragebögen, die die Teilnehmer ausfüllen sollen.';
$string['non_respondents'] = 'Teilnehmer, die noch keine Antworten zu diesem Fragebogen eingereicht haben.';
$string['nousersselected'] = 'Keine Teilnehmer ausgewählt';
$string['qtype_help'] = 'Wählen Sie, ob Teilnehmer die Befragung einmal, täglich, wöchentlich, monatlich oder beliebig oft ausfüllen können.';
$string['redirecturl'] = 'URL, zu der Teilnehmer nach Abschluss der Befragung weiter geleitet werden.';
$string['required_help'] = 'Wenn Sie **Ja** wählen, ist eine Antwort auf diese Frage obligatorisch, d.h. Teilnehmer können die Befragung erst abgeben, wenn diese Frage beantwortet ist.';
$string['respondenteligiblestudents'] = 'nur Teilnehmer';
$string['respondenteligibleteachers'] = 'nur Trainer';
$string['respondenttype_help'] = 'Sie können die vollständigen Namen der Nutzer zu jeder Antwort anzeigen lassen, wenn Sie diese Option auf "mit Namen" setzen.
Sie können die Identitäten der Nutzer verstecken, wenn Sie diese Option auf "anonym" setzen.';
$string['responseview'] = 'Alle Antworten für Teilnehmer anzeigen';
$string['responseview_help'] = 'Sie können festlegen, wer die Antworten aller Teilnehmer auf abgegebene Befragungen sehen darf (allgemeine Auswertungstabelle).';
$string['restrictedtoteacher'] = 'Diese Funktionen sind nur für Trainer mit Bearbeitungsrechten.';
$string['resume_help'] = 'Wenn diese Option aktiv ist, können Teilnehmer die Antworten der Befragung speichern bevor sie sie einreichen. Teilnehmer können die Befragung unvollendet verlassen und zu einem späteren Zeitpunkt wieder auf den gespeicherten Zustand zugreifen.';
$string['send_message'] = 'Ausgewählten Teilnehmer eine Nachricht senden';
$string['slider_help'] = 'Die Schiebereglerfrage ermöglicht es den Teilnehmern, einen Wert aus einem kontinuierlichen Bereich auszuwählen, indem sie einen Schieberegler zwischen zwei Extremen ziehen. Es kann auch ein Mittelwert eingestellt werden.';
$string['startingvalue_help'] = 'Der Startwert des Schiebereglers gibt an, wo der Schieberegler für die Teilnehmer zuerst angezeigt werden soll. Der Standardwert ist 1, da der Bereich unbekannt ist. Möglicherweise möchten Sie in der Mitte des Bereichs beginnen, indem Sie einen zentralen Wert angeben (ein Bereich von 1–100 hat einen zentralen Wert von 50).';
$string['stepvalue_help'] = 'Der Inkrementwert des Schiebereglers gibt an, wie fein die Teilnehmer ihre Antwort innerhalb des Bereichs angeben sollen. Die Frage ist standardmäßig auf einen Bereich von 1–100 mit einer Schrittweite von 1 eingestellt, sodass Werte von 70, 71, 72, 73, 74 usw. angegeben werden können. Sie können aber auch Schrittweiten von fünf festlegen, sodass nur Werte von 60, 65, 70, 75, 80 usw.möglich sind. Sie können auch nur einen Bereich von 1-10 mit Schritten von 1 einstellen.';
$string['studentwhoresponded'] = 'Teilnehmer mit einer Antwort';
$string['url_help'] = 'URL, zu der Nutzer nach Abschluss der Befragung weiter geleitet werden.';
$string['viewallresponses_help'] = 'Wenn die Befragung im **Gruppenmodus** auf *Sichtbare Gruppen* oder *Getrennte Gruppen* gesetzt ist und der/die aktuelle Nutzer/in das Recht *moodle/site:accessallgroups* hat (im aktuellen Kontext) und im aktuellen Kurs Gruppen definiert wurden, dann haben Nutzer den Zugriff auf eine Dropdown-Liste der Gruppen. Diese Dropdown-Liste ermöglicht es, die Antworten der Befragung nach Gruppen zu filtern. Bei der Einstellung **Gruppenmodus**: *Getrennte Gruppen* haben Nutzer, die nicht das Recht *moodle/site:accessallgroups* haben (meist \'Teilnehmer/in\' oder \'Trainer/in ohne Bearbeitungsrecht\', etc.) nur Zugriff auf die Antworten der Gruppe in die sie selbst eingetragen sind.';
$string['viewindividualresponse_help'] = 'Klicken Sie auf die Namen der Teilnehmer, um deren individuelle Antworten zu sehen.';
