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
 * @subpackage adaptivequiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated_help'] = 'Die geschätzte Fähigkeit von Testteilnehmern entspricht der Schwierigkeitsstufe derjenigen Fragen, bei denen eine Person eine 50%-ige Wahrscheinlichkeit hat, die Frage richtig zu beantworten. Die Leistungsstufe einer Person wird dabei durch Vergleich des geschätzten Fähigkeitswertes mit dem Gesamtbereich der Schwierigkeitsstufen ermittelt (siehe nach dem \'/\'-Symbol angezeigtes maximales Niveau).';
$string['attemptfeedback_help'] = 'Die Rückmeldung zum Versuch wird Teilnehmer angezeigt, sobald der Versuch beendet ist';
$string['browsersecurity_help'] = 'Wenn "Vollbild-Popup mit etwas JavaScript-Sicherheit" ausgewählt ist, wird der Test nur starten, wenn Teilnehmer einen JavaScript-fähigen Webbrowser verwenden. Der Test erscheint in einem Vollbild-Popup-Fenster über allen anderen Fenstern und hat keine Navigationselemente. Die Teilnehmer werden – so weit wie möglich – davon abgehalten, Funktionen wie Kopieren und Einfügen zu nutzen.';
$string['highlevelusers'] = 'Nutzer über der Schwierigkeitsstufe';
$string['lowlevelusers'] = 'Nutzer unter der Schwierigkeitsstufe';
$string['midlevelusers'] = 'Nutzer in der Nähe der Schwierigkeitsstufe';
$string['modformshowattemptprogress'] = 'Testfortschritt für Teilnehmer anzeigen';
$string['modformshowattemptprogress_help'] = 'Wenn diese Option aktiviert ist, sehen die Teilnehmer während des Versuchs eine Fortschrittsanzeige, die die Anzahl der beantworteten Fragen im Vergleich zur maximal möglichen Anzahl anzeigt.';
$string['modulename_help'] = 'Die Aktivität "Adaptiver Test" ermöglicht es Trainern, Tests zu erstellen, die die Fähigkeiten der Teilnehmer effizient messen. Adaptive Tests bestehen aus Fragen, die aus einer Fragensammlung ausgewählt werden und mit einer Schwierigkeitsstufe versehen sind. Die Fragen werden passend zur geschätzten Fähigkeitsstufe der jeweiligen Person ausgewählt. Wenn die Person eine Frage erfolgreich beantwortet, wird nachfolgend eine schwierigere Frage gestellt. Wenn die Person eine Frage falsch beantwortet, wird eine weniger anspruchsvolle Frage gestellt. Dieser Prozess erzeugt eine Abfolge von Fragen, die auf die tatsächliche Fähigkeitsstufe der jeweiligen Person zusteuert. Der Test endet, wenn die Fähigkeit mit der erforderlichen Genauigkeit bestimmt wurde.

Diese Aktivität eignet sich am besten zur Bestimmung einer Fähigkeitsmessung entlang einer eindimensionalen Skala. Diese Skala kann sehr breit sein, aber alle Fragen müssen eine gemeinsame Fähigkeit oder Eignung auf dieser gleichen Skala messen. In einem Einstufungstest sollten beispielsweise alle Fragen, die Anfänger richtig beantworten können, auch von Experten korrekt beantwortet werden können, während Fragen, die höher auf der Skala liegen, nur von Experten oder durch Zufall beantwortet werden können. Fragen, die keinen Unterschied zwischen Personen unterschiedlicher Fähigkeiten abbilden, machen den Test unwirksam und können zu unklaren Ergebnissen führen.

Die im adaptiven Test verwendeten Fragen müssen:

* automatisch als richtig/falsch bewertet werden

* mit ihrem Schwierigkeitsniveau durch ein Tag gekennzeichnet sein, das mit dem Präfix "adpq_" beginnt, gefolgt von einer positiven Zahl, die im Schwierigkeitsbereich des Tests liegt.

Der adaptive Test kann konfiguriert werden, um folgendes festzulegen:

* den Bereich der Fragenschwierigkeit/Nutzerfähigkeit, der gemessen werden soll (Beispiele für gültige Bereiche sind 1-10, 2-16 oder 1-100)
* die erforderliche Präzision, bevor der Test endet (oft ist ein Fehler von 5% in der Fähigkeitsmessung eine angemessene Stoppregel)
* die minimale Anzahl der zu beantwortenden Fragen
* die maximale Anzahl der zu beantwortenden Fragen.

Diese Beschreibung und der Testprozess in dieser Aktivität basieren auf <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['reportattemptsbothenrolledandnotenrolled'] = 'alle Nutzer, die jemals Versuche unternommen haben';
$string['reportattemptsenrolledwithattempts'] = 'Teilnehmer, die Versuche unternommen haben';
$string['reportattemptsenrolledwithnoattempts'] = 'Teilnehmer ohne Versuche';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Nutzer mit inaktiven Anmeldungen einbeziehen';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Die Option legt fest, ob Nutzer mit ausgesetzten Anmeldungen einbezogen werden sollen';
$string['reportattemptsnotenrolled'] = 'Nicht angemeldete Nutzer, die Versuche unternommen haben';
$string['reportattemptsusersperpage'] = 'Anzahl angezeigter Nutzer:';
$string['requirepassword_help'] = 'Teilnehmer müssen ein Kennwort angeben, bevor sie mit dem Testversuch beginnen können';
$string['showabilitymeasurefeedback'] = 'Fähigkeitsmaß den Teilnehmern auf der Rückmeldungsseite anzeigen';
$string['showabilitymeasurefeedback_help'] = 'Wenn diese Einstellung aktiviert ist, sehen Teilnehmer die Fähigkeitsschätzung als Standard-Widget auf der Abschluss-Seite des Versuchs. Man beachte, dass die Anzeige des Messwerts im nutzerdefinierten Rückmeldungstext (bei Konfiguration über Platzhalter) davon unabhängig ist.';
$string['showabilitymeasuresummary'] = 'Fähigkeitsmaß den Teilnehmern in ihrer Versuchsübersicht anzeigen';
$string['showabilitymeasuresummary_help'] = 'Wenn diese Einstellung aktiviert ist, sehen Teilnehmer die Fähigkeitsschätzung in ihrer Versuchsübersicht.';
