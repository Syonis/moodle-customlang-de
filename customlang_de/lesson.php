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
 * @package    mod
 * @subpackage lesson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedattempts'] = 'Erlaubte Versuche pro Teilnehmer';
$string['allowofflineattempts_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer die Lektion mit Moodle Mobile herunterladen und sie offline versuchen. Alle möglichen Antworten (auch die korrekten Antworten) werden heruntergeladen. Hinweis: Es ist nicht möglich, dass eine Lektion offline versucht wird, wenn sie eine zeitliche Begrenzung hat.';
$string['averageattempts'] = 'Durchschnittliche Versuche pro Teilnehmer';
$string['cannotfinduser'] = 'Fehler: Nutzer konnten nicht gefunden werden';
$string['completiontimespent'] = 'Teilnehmer muss diese Zeit mit dieser Aktivität verbringen';
$string['completiontimespentdesc'] = 'Der Teilnehmer muss diese Aktivität für mindestens {$a} ausführen';
$string['displaydefaultfeedback_help'] = '<p>Bei der Einstellung <strong>Ja</strong> wird die Standardrückmeldung (Richtig/Falsch) angezeigt, sofern keine individuelle Rückmeldung vorhanden ist.</p> <p>Bei der Einstellung <strong>Nein</strong> wird keine Rückmeldung angezeigt, sofern keine individuelle Rückmeldung vorhanden ist. Die Teilnehmer werden dann automatisch zur nächsten Seite der Lektion geführt. </p>';
$string['displayleftif_help'] = 'Diese Option legt fest, ob eine bestimmte Bewertung erreicht sein muss, damit das Menü sichtbar ist. Dies zwingt Teilnehmer, bei ihrem ersten Versuch durch die gesamte Lektion zu gehen. Erst mit dem Erreichen einer bestimmten Punktzahl kann das Menü benutzt werden, um alle Lösungen nochmals zu kontrollieren.';
$string['displayofgrade'] = 'Anzeige der Bewertungen (für Teilnehmer)';
$string['displayreview_help'] = 'Wenn diese Option aktiviert ist und eine Frage falsch beantwortet wird, haben Teilnehmer die Möglichkeit, die Frage erneut ohne Punkte zu wiederholen oder weiter mit der Lektion fortzufahren. Wenn Teilnehmer klicken, zu einer anderen Frage zu gehen, wird die bereits gewählte (falsche) Antwort berücksichtigt. Standardmäßig sind Sprünge bei falscher Antwort auf "diese Seite" gesetzt und haben eine Punktzahl 0. Daher wird empfohlen, den Sprung bei falscher Antwort auf eine andere Seite zu setzen, um Konfusion bei den Teilnehmern zu vermeiden.';
$string['essayemailmessage2'] = '<p>Freitextfrage: {$a->question}</p><p>Ihre Antwort: <em>{$a->response}</em></p><p>Trainerfeedback: <em>{$a->comment}</em></p><p>Sie haben {$a->earned} von {$a->outof} Punkten bei dieser Frage erhalten.</p><p>Ihre aktuelle Bewertung für die Lektion \'{$a->lesson}\' ist nun {$a->newgrade}%.</p>';
$string['handlingofretakes_help'] = 'Bewertung, wenn Teilnehmer die Lektion mehr als einmal versuchen: * Höchste Note aller Versuche * Durchschnittsnote aller Versuche';
$string['inactiveoverridehelp'] = '* Diese Nutzeränderung ist inaktiv, da der Zugriff des Benutzers auf die Aktivität eingeschränkt ist. Dies kann durch Gruppen- oder Rollenzuordnungen, andere Zugriffsbeschränkungen oder durch das Verbergen der Aktivität bedingt sein.';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein Teilnehmer in einer Lektionsaktivität erreicht hat.';
$string['indicator:cognitivedepthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Lektionsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen, Feedback kommentieren, Beiträge nach Feedback überarbeiten).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein Benutzer in einer Lektionsaktivität erreicht hat.';
$string['indicator:socialbreadthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des soziale Engagements erreicht, das die Lektionsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['lessonpagelinkingbroken'] = 'Die erste Seite wurde nicht gefunden. Die Verlinkung der Seite weist einen Fehler auf. Sprechen Sie die Administratoren an.';
$string['maximumnumberofanswersbranches_help'] = 'Diese Einstellung gibt die maximale Anzahl von Antworten an, die in der Lektion verwendet werden dürfen. Wenn ausschließlich Wahr/falsch-Fragen vorkommen, kann der Wert auf 2 gesetzt werden. Die Einstellung kann jederzeit geändert werden, da sie nur das betrifft, was die Trainer sehen, aber nicht die Daten.';
$string['maximumnumberofattempts_help'] = 'Dieser Wert legt fest, wie oft Teilnehmer versuchen können, jede Frage zu beantworten. Wenn das Limit ohne richtige Antwort erreicht ist, wird die Lektion auf der nächsten Seite fortgesetzt.';
$string['modattempts_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer erneut durch die Lektion navigieren.';
$string['modattemptsnoteacher'] = 'Navigation nur für Teilnehmer möglich';
$string['modulename_help'] = 'Lektionen bestehen aus einer Reihe von Seiten und Verlinkungen zwischen den Seiten. Lektionen ermöglichen es Trainern, Inhalte und Aktivitäten interessant und flexibel zu vermitteln. Trainer können die Lektion verwenden, um eine Folge von Inhaltsseiten oder Aktivitäten zu erstellen, die Teilnehmer über verschiedene Pfade und Optionen leiten. Trainer können das Engagement erhöhen und das Verständnis sicherstellen, indem sie eine Vielzahl von Fragen einfügen, z.B. Multiple-Choice-, Zuordnungs- und Kurzantwortfragen. Je nach Antwort werden Teilnehmer zur nächsten Seite geleitet, zu einer vorherigen Seite zurückkehren oder einen ganz anderen Pfad einschlagen. Eine Lektion kann bewertet werden, wobei die Endnote in den Bewertungen festgehalten wird. Lektionen können verwendet werden * Für das selbstgesteuerte Lernen eines neuen Themas * Für Szenarien, Simulationen oder Entscheidungsübungen * Für differenzierte Wiederholungen mit unterschiedlichen Fragen, abhängig von den Antworten auf die ersten Fragen';
$string['modulename_summary'] = 'Erstellen Sie verzweigte Szenarien, in denen die Teilnehmer je nach ihren Antworten auf Fragen unterschiedliche Wege einschlagen.';
$string['ongoing_help'] = 'Wenn diese Option aktiviert ist, wird den Teilnehmern auf jeder Seite ihre aktuelle Bewertung zusammen mit der maximal erreichbaren Bewertung angezeigt.';
$string['overrideuser'] = 'Nutzer überschreiben';
$string['privacy:metadata:overrides:deadline'] = 'Zeit, bis zu der Teilnehmer die Lektion beenden müssen';
$string['progressbarteacherwarning2'] = 'Die Fortschrittsanzeige wird Ihnen nicht angezeigt, weil Sie diese Lektion als Trainer bearbeiten können.';
$string['retakesallowed_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer die Lektion mehrfach versuchen.';
$string['retakesallowedinfo'] = 'Diese Lektion erlaubt den Teilnehmern mehrere Versuche.';
$string['studentswhoattempted'] = 'Teilnehmer mit Versuchen';
$string['teacherjumpwarning'] = 'In der Lektion kommt ein \'{$a->cluster}\'-Sprung oder ein \'{$a->unseen}\'-Sprung vor. Stattdessen werden \'Nächste Seite\'-Sprünge verwendet. Melden Sie sich als Teilnehmer an, um die Sprünge zu testen.';
$string['teacherongoingwarning'] = 'Die laufende Punktzahl wird nur für Teilnehmer angezeigt. Melden Sie sich als Teilnehmer an, um diese Funktion zu testen.';
$string['teachertimerwarning'] = 'Die Zeitbegrenzung funktioniert nur für Teilnehmer. Melden Sie sich als Teilnehmer an, um diese Funktion zu testen.';
$string['usepassword_help'] = 'Wenn Sie diese Option aktivieren, ist die Lektion durch ein Kennwort geschützt. Teilnehmer haben nur Zugang, wenn sie das richtige Kennwort eingeben.';
$string['usersnone'] = 'In diesem Kurs sind keine Teilnehmer eingeschrieben oder niemand kann auf die Lektion zugreifen.';
