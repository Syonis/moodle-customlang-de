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
 * @subpackage grades
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregationcoefextrasum_help'] = 'Bei der Einstellung "Summe der Bewertungen" als Berechnungsverfahren kann eine Bewertung als Sonderpunkte definiert werden. Das bedeutet, dass die höchste hierbei mögliche Bewertung nicht in die Summe der Bewertungen der Kategorie eingerechnet wird. Die Bewertung selber wird als Bonus dennoch mit berechnet. Das folgende Beispiel kann dies verdeutlichen: <ul> <li>Wert 1 ist bewertet mit 0-100</li> <li>Wert 2 ist bewertet mit 0-75</li> <li>Wert 1 ist als "Extrapunkte" aktiviert, Wert 2 jedoch nicht.</li> <li>Beide Werte gehören zur Kategorie 1. Für diese gilt, dass die Summe der Bewertungen ermittelt werden soll </li> <li>Kategorie 1 wird gesamt mit 0-75 bewertet</li> <li>Ein Teilnehmer erhält nun die Bewertung 20 für Wert 1 und 75 für Wert 2</li> <li>Die Berechnung für Kategorie 1 ist nun 75/75 (20+70 = 95; Wert 1 wird als Extrapunkte gewertet. Der Höchstwert kann jedoch nur 75 sein, daher ist die Endnote 75.)</li> </ul>';
$string['aggregationcoefextraweight_help'] = 'Bei der Berechnung der Extrapunkte wird folgendes Verfahren angewandt. Bewertungen für die Extrapunkte vergeben werden werden erst mit dem Multiplikator multipliziert. Dann werden die Einzelwerte addiert und durch die Zahl der Bewertungen dividiert. Die Zahl durch die dividiert wird umfasst nur die Berwertungen, für die es keine Extrapunkte gibt. Im folgenden Beispiel erfolgt daher nur eine Division durch 2 und nicht durch 3. <ul> <li>Wert 1 wird bewertet mit 0-100 und "Extrapunkte" Wert wird gesetzt auf 2</li> <li>Wert 2 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li> <li>Wert 3 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li> <li>Alle 3 Werte gehören in Kategorie 1, mit der Bewertungsstrategie "Durchschnitt der Einzelbewertungen (mit Extrapunkten)" als Berechnungsverfahren</li> <li>Ein Teilnehmer erhält nun folgende Einzelbewertungen 20 für Wert 1, 40 für Wert 2 und 70 für Wert 3</li> <li>Die Gesamtbewertung für Kategorie 1 ist nun 50/100 (20*2 + 40 + 70) / 3</li> </ul>';
$string['allstudents'] = 'Alle Teilnehmer';
$string['allusers'] = 'Alle Nutzer';
$string['baduser'] = 'Ungültiger Teilnehmer';
$string['coursesettingsexplanation'] = 'Die Kurseinstellungen legen fest, wie die Bewertungen für alle Teilnehmer im Kurs gezeigt werden';
$string['coursesiamtaking'] = 'Kurse - Teilnehmer';
$string['eventusergraded'] = 'Nutzer bewertet';
$string['exportonlyactive_help'] = 'Nur Teilnehmer exportieren, deren Einschreibung aktiv ist und die nicht gesperrt wurden.';
$string['feedback_help'] = 'Diese Einstellung erlaubt Anmerkungen zur Bewertung durch Trainer. Das Feedback kann ein ausführlicher Text, eine sehr persönliche Rückmeldung oder ein Code sein, der üblicherweise in der Bildungseinrichtung verwandt wird.';
$string['fixedstudents_help'] = 'Ermöglicht es, Bewertungen horizontal zu scrollen, ohne die Spalte Teilnehmer aus den Augen zu verlieren, indem sie fixiert wird.';
$string['forstudents'] = 'Für Teilnehmer';
$string['grade_help'] = 'Die Bewertung, die dieser Benutzer für seine Arbeit erhält.';
$string['grade_read_scope_summary'] = 'Notenbuch für alle Nutzer anzeigen';
$string['grade_read_self_scope_desc'] = 'Lesezugriff auf das eigene Notenbuch von aktuellem Nutzer ermöglichen, einschließlich Noten, Bewertungskriterien, Bewertungskategorien und Feedback-Kommentare.';
$string['gradebookhiddenerror'] = 'Die Bewertungen sind zur Zeit für die Teilnehmer nicht sichtbar.';
$string['gradepublishing_help'] = 'Aktiviert die Export und Importfunktion: Exportierte Bewertungen können für andere verlinkt werden, ohne dass sie sich im Moodle-System einloggen müssen. Bewertungen können auf die gleiche Art und Weise importiert werden. Damit können Bewertungen, die aus anderen Systemen stammen integriert werden. Normalerweise können nur Administratoren diese Funktion nutzen. Falls dieses Recht weitergegeben wird, sind die betroffenen Personen darauf hinzuweisen, dass mit entsprechender Sorgfalt mit diesen persönlichen Daten umgegangen wird. Das Veröffentlichen von Bewertungen ist eine Möglichkeit, Bewertungen über eine URL zu importieren und zu exportieren, ohne bei Moodle angemeldet zu sein. Wenn diese Option aktiviert ist, werden für Administratoren und Nutzer mit der Berechtigung zum Veröffentlichen von Bewertungen (meist nur Personen mit der Rolle Manager) die Einstellungen zum Veröffentlichen von Bewertungsexporten angeboten.';
$string['hidden_help'] = 'Wenn diese Option aktiviert ist, wird die Bewertungen vor den Teilnehmern verborgen. \'Verborgen bis...\' kann auf Wunsch eingestellt werden, um die Bewertungen so lange zu verbergen, bis der Bewertungsdurchlauf abgeschlossen wurde.';
$string['hiddenasdate_help'] = 'Falls Nutzer verborgene Bewertungen nicht sehen können, soll das Abgabedatum anstelle von \'-\' angezeigt werden.';
$string['hidetotalifhiddenitems_help'] = 'Die Einstellung legt fest ob die Gesamtbewertung angezeigt wird oder durch ein (-) ersetzt wird, wenn es verborgene Einzelbewertungen gibt. Soll sie angezeigt werden kann festgelegt werden, ob die verborgene Bewertung in das angezeigte Gesamtergebnisse einbezogen wird oder nicht. Wenn verborgene Werte ausgeschlossen werden, ist die sichtbare Gesamtbewertung für Trainer und Teilnehmer jeweils nicht identisch. Trainer sehen immer sichtbare und verborgene Ergebnisse als Gesamtergebnis. Sollen verborgene Werte für Teilnehmer in die Bewertung eingehen, können diese von den Teilnehmern u.U. aus dem Gesamtergebnis errechnet werden.';
$string['identifier'] = 'Teilnehmer identifizieren durch';
$string['importcsv_help'] = 'Bewertungen können über eine Textdatei importiert werden. Die Textdatei sollte folgendes Format haben: * Jede Zeile enthält einen genau Datensatz * Jeder Datensatz enthält eine Serie von Daten, getrennt durch das gewählte Trennzeichen * Die erste Zeile enthält eine Liste der Feldnamen und definiert die Struktur der übrigen Datensätze * Die Feldnamen müssen in der englischen Bezeichnung angegeben sein * Ein Feld mit dem Nutzernamen, der ID-Nummer oder der E-Mail-Adresse ist erforderlich, im die Bewertungen den Nutzern richtig zuzuordnen. Eine Datei mit der richtigen Struktur wird erzeugt, wenn Sie zunächst einige Bewertungen eintragen und exportieren. Diese Datei kann dann bearbeitet und wieder als CSV-Datei hochgeladen werden.';
$string['intersectioninfo'] = 'Info zum Teilnehmer und Bewertung';
$string['linkedactivity_help'] = 'Diese Einstellung legt eine Aktivität fest, mit der dieses Lernziel verknüpft ist. Dies kann verwendet werden, um Leistungen von Teilnehmern zu messen, die nicht über die Bewertung von Aktivitäten erfasst werden.';
$string['modgraderecalculatepenalty_help'] = 'Die Abzüge werden für alle Nutzer neu berechnet.';
$string['noreports'] = 'Sie sind in keinem Kurs als Teilnehmer oder als Trainer eingeschrieben.';
$string['notteachererror'] = 'Diese Funktionen können nur Trainer nutzen';
$string['nouserstograde'] = 'Keine Nutzer zu bewerten';
$string['otheruser'] = 'Nutzer';
$string['privacy:metadata:filepurpose'] = 'Feedback-Dateien, die in den Bewertungen eines Benutzers gespeichert sind';
$string['recovergradesdefault_help'] = 'Alte Bewertungen werden wiederhergestellt, wenn Nutzer erneut in einen Kurs eingeschrieben werden.';
$string['searchusers'] = 'Nutzer suchen';
$string['selectauser'] = 'Nutzer wählen';
$string['selectuserlink'] = 'Nutzer auswählen';
$string['showallstudents'] = 'Alle Teilnehmer anzeigen';
$string['showaverage_help'] = 'Spalte mit Durchschnittswertung anzeigen? Beachten Sie, dass die Teilnehmer fremde Bewertungen abschätzen können, wenn der Durchschnitt aus einer kleinen Anzahl berechnet wird. Aus Performancegründen ist der Durchschnitt ungenau, wenn er von versteckten Elementen abhängig ist.';
$string['showeyecons_help'] = 'Wenn diese Option aktiviert ist, wird bei eingeschalteter Bearbeitung für jeden Bewertungsaspekt ein Symbol zur Sichtbarkeit (Auge) neben jeder Bewertung angezeigt, um die Sichtbarkeit für Teilnehmer zu steuern.';
$string['showonlyactiveenrol_help'] = 'Diese Einstellung legt fest, ob nur aktiv eingeschriebene Nutzer im Bewertungsbericht angezeigt werden. Wenn die Einstellung aktiviert ist, werden gesperrte Nutzer nicht angezeigt.';
$string['student'] = 'Teilnehmer';
$string['studentsperpage'] = 'Teilnehmer pro Seite';
$string['studentsperpage_help'] = 'Diese Einstellung legt die Anzahl der Teilnehmer fest, die pro Seite in der Bewertungsübersicht gezeigt werden.';
$string['studentsperpagereduced'] = 'Verringert die maximale Anzahl von Teilnehmern pro Seite von {$a->originalstudentsperpage} auf {$a->studentsperpage}. Die PHP Einstellung max_input_vars sollte auf {$a->maxinputvars} gesetzt werden.';
$string['unenrolledusersinimport'] = 'Beim Import werden Bewertungen der folgenden Teilnehmer importiert, die zur Zeit nicht im Kurs registriert sind: {$a}';
$string['user'] = 'Nutzer';
$string['usergrade'] = 'Nutzer {$a->fullname} ({$a->useridnumber}) mit Wert {$a->gradeidnumber}';
$string['useridnumberwarning'] = 'Nutzer ohne ID-Nummer sind vom Export ausgeschlossen, da sie nicht importiert werden können.';
$string['usermappingerrorcurrentgroup'] = 'Nutzer ist nicht Mitglied dieser Gruppe.';
$string['usermappingerrormultipleusersfound'] = 'Fehler bei der Nutzerzuordnung: Mehrere Nutzer mit {$a->field} von "{$a->value}" gefunden. Bitte verwenden Sie ein eindeutigeres Mapping-Feld.';
