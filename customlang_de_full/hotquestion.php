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
 * @subpackage hotquestion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowauthorinfohide_descr'] = 'Wenn aktiviert, ist der Autorennamen nur für Trainer, aber nicht für Teilnehmer sichtbar.';
$string['allowauthorinfohide_help'] = 'Wenn aktiviert, ist der Autorennamen nur für Trainer, aber nicht für Teilnehmer sichtbar.';
$string['allowcomments_help'] = 'Wenn diese Option aktiviert ist, können alle Teilnehmer mit der entsprechenden Berechtigung Kommentare zu Dringende-Frage-Einträgen hinzufügen.';
$string['allownotifications_help'] = 'Wenn aktiviert, wird bei einem neuen Eintrag eine Benachrichtigung an die Trainer gesendet.';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Beschreibung für Teilnehmer nicht angezeigt';
$string['factorheat_help'] = 'Ein Faktor, der auf Fragen angewendet wird, die für die Bewertung auf der Grundlage der Dringlichkeit zählen.
Je dringlicher die Frage, desto größer das Gewicht bei der Bewertung.
Eine Frage von Teilnehmer/in zählt als 1 plus Gutschrift

Gutschrift = (Stimmen) · Faktor/100.

Normalerweise ist ein Dringlichkeits-Faktor von 5% angemessen, d.h. wenn 20 Personen für eine Frage stimmen, verdoppelt sich ihr Wert.
Je nach Anzahl der Teilnehmer und deren Engagement müssen Sie eventuell Anpassungen vornehmen.';
$string['factorvote_help'] = 'Ein Faktor, der bei der Berechnung der Bewertungen auf die Stimmenzahl der Teilnehmer angewandt wird.
Zusätzlich zum Verfassen neuer Fragen können Teilnehmer Teilnahmepunkte erhalten, durch das Abstimmen für Fragen anderer.
Diese Gutschrift ergibt sich aus der Anzahl der abgegebenen Stimmen mal diesem Faktor/100.

Gutschrift = (Stimmen) · Faktor/100

Der Faktor muss je nach der Gesamtzahl der Stimmen, die Teilnehmer abgeben könnten, angepasst werden
und der gewünschten Gewichtung dieser Art der Beteiligung.
Wenn ein/e Teilnehmer/in z.B. 5 Dringlichkeits-Stimmen abgeben kann, bedeutet ein Faktor von 20 %, dass die Stimmabgabe für andere 5 Fragen soviel zählt wie eine von diesem Teilnehmer geschriebene Frage. Ein Faktor von 100% bedeutet, dass das Abstimmen für andere Fragen genausoviel zählt wie das Schreiben einer neuen Frage.';
$string['historicalroundclarifystudent'] = 'Sie sehen gerade eine vergangene Runde. Teilnehmer können in alten Runden keine Beiträge verfassen.';
$string['historicalroundclarifyteacher'] = 'Sie sehen gerade eine vergangene Runde. Trainer können über das untenstehende Eingabefeld Erläuterungen zu dieser ausgewählten Runde hinzufügen; die Einträge enthalten das tatsächliche Datum und die Uhrzeit der Eingabe.';
$string['maxquestionsperuser_descr'] = 'Legen Sie die maximale Anzahl an Fragen fest, die Teilnehmer in der aktuellen Runde stellen dürfen. Setzen Sie den Wert auf 0, um keine Begrenzung festzulegen.';
$string['maxquestionsperuser_help'] = 'Wird hier ein Wert größer als 0 eingestellt, können die Teilnehmer in der aktuellen Runde nicht mehr als diese Anzahl an Fragen einreichen.';
$string['minentriesbeforeviewnotice'] = 'Sie müssen in dieser Runde mindestens {$a->required} Fragen stellen, bevor Sie die Fragen der anderen Teilnehmer einsehen können. Sie haben bisher {$a->current} Fragen gestellt.';
$string['minquestionsview_descr'] = 'Legen Sie fest, wie viele Fragen Teilnehmer in der aktuellen Runde stellen müssen, bevor sie die Fragen anderer Teilnehmer einsehen können. Setzen Sie den Wert auf 0, um diese Anforderung zu deaktivieren.';
$string['minquestionsview_help'] = 'Wird hier ein Wert größer als 0 eingestellt, können die Teilnehmer nur ihre eigenen Fragen einsehen, bis sie in der aktuellen Runde mindestens diese Anzahl an Fragen gestellt haben.';
$string['modulename_help'] = '###### Hauptmerkmale
- Teilnehmer können Fragen oder Antworten auf Aufgaben in Echtzeit oder zeitversetzt einreichen.
- Fragen werden in einer geordneten Liste angezeigt, wobei die neuesten und beliebtesten (meistgewählten) Fragen oben stehen.
- Das Abstimmungssystem verwendet „Heat“ (Daumen hoch), um beliebte Fragen zu priorisieren.
- Trainer können Abstimmungen durch Festlegen der Beitragspriorität überschreiben und die Sichtbarkeit über Genehmigungseinstellungen steuern.
- Von jedem Gerät aus zugänglich und für große Kurse skalierbar.
###### Anwendungsmöglichkeiten
- Fragen während Vorlesungen, Wiederholungssitzungen oder der Besprechung aufgezeichneter Inhalte sammeln und priorisieren
- Die relevantesten Diskussionsthemen in großen Kursen identifizieren
- Als Vorschlagsbox oder Feedback-Tool zur Kursverbesserung nutzen
- Schnelle Umfragen oder Brainstorming-Aktivitäten durchführen
- Die gemeinsame Analyse von Videos, Lesetexten oder thematischen Fragestellungen unterstützen';
$string['modulename_summary'] = 'Ermöglicht es Teilnehmern, Fragen oder Ideen in Echtzeit oder zeitversetzt zu posten und über Beiträge abzustimmen, um beliebte hervorzuheben';
$string['modulename_tip'] = 'Nutzen Sie Dringende Frage-Aktivitäten, um Teilnehmer rund um die Uhr Beteiligung zu ermöglichen.';
$string['nolatecommenting'] = 'Nur Lehrkräfte und Administratoren können Kommentare zu Einträgen in vergangenen Runden hinzufügen.';
$string['postmaxgrade_help'] = 'Anzahl nötiger Fragen zum Erreichen der maximalen Bewertung.

Dies ist nominell eine Zählung der Fragen, aber der von einer Person erreichte Wert kann durch den Faktor Dringlichkeit (heat, Fragen mit größerer Dringlichkeit zählen mehr) verbessert werden
und durch die Abstimmung über andere Fragen (Nutzer können ihre Bewertung verbessern, indem sie an der Abstimmung an Fragen anderer teilnehmen).';
$string['teacherpriorityvisibility'] = 'Sichtbarkeit der Spalte "Priorität für Trainer"';
$string['teacherpriorityvisibility_descr'] = 'Wenn diese Option aktiviert ist, ist die Spalte "Priorität für Trainer" sichtbar, ansonsten ist sie verborgen.';
$string['teacherpriorityvisibility_help'] = 'Wenn diese Option aktiviert ist, ist die Spalte "Priorität für Trainer" sichtbar.';
$string['viewaftertimeclose_descr'] = 'Wenn diese Einstellung aktiviert ist (Ja), können Teilnehmer die Fragen und Dringlichkeit nach dem Schließen sehen, aber nicht ändern; bei Nein werden sie nach dem Schließen ausgeblendet.';
$string['viewaftertimeclose_help'] = 'Wenn diese Einstellung aktiviert ist (Ja), können Teilnehmer die Fragen und Dringlichkeit nach dem Schließen sehen, aber nicht ändern; bei Nein werden sie nach dem Schließen ausgeblendet.';
