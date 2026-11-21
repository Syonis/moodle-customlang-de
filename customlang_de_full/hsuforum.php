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
 * @subpackage hsuforum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowanonymous_help'] = 'Wenn aktiviert, werden die Namen der Autoren für alle Beiträge unterdrückt';
$string['blockperiod_help'] = 'Teilnehmer können gesperrt werden, wenn Sie innerhalb eines bestimmten Zeitraums eine vorgegebene Beitragsgrenze überschreiten. Nutzer mit der Berechtigung mod/hsuforum:postwithoutthrottling sind von dieser Grenze ausgenommen.';
$string['cannotadddiscussionall'] = 'Sie sind nicht berechtigt ein neues Diskussionsthema für alle Teilnehmer hinzuzufügen.';
$string['completiondiscussions'] = 'Teilnehmer müssen Themen anlegen:';
$string['completiondiscussionsdesc'] = 'Teilnehmer müssen mindestens {$a} Themen anlegen';
$string['completionposts'] = 'Teilnehmer müssen Themen oder Antworten verfassen:';
$string['completionpostsdesc'] = 'Teilnehmer müssen mindestens  {$a} Themen oder Antworten verfassen';
$string['completionreplies'] = 'Teilnehmer müssen Antworten verfassen:';
$string['completionrepliesdesc'] = 'Teilnehmer müssen mindestens {$a} Antworten verfassen';
$string['configreplytouser'] = 'Wenn ein Forenbeitrag verschickt wird, sollte er die E-Mail-Adresse der Nutzerin / des Nutzers enthalten, damit die Empfänger persönlich und nicht über das Forum antworten können? Auch wenn dies auf \'Ja\' gestellt ist, können Nutzer in ihrem Profil ihre E-Mail Adresse als privat einstellen (verbergen).';
$string['digestsentusers'] = 'E-Mail-Zusammenfassungen wurden erfolgreich an {$a} Nutzer gesendet.';
$string['hsuforum:allowprivate'] = 'Nutzer private Antworten erlauben';
$string['hsuforum:viewposters'] = 'Teilnehmer mit Forenbeiträgen anzeigen';
$string['hsuforum:viewsubscribers'] = 'Abonnenten anzeigen';
$string['introteacher'] = 'Forum für Ankündigungen nur von Trainern';
$string['modulename_help'] = 'Die Aktivität Open Forum erlaubt Teilnehmenden asynchrone Diskussionen zu führen, also Diskussionen die über einen längeren Zeitraum stattfinden.

Es gibt mehrere Forentypen zur Auswahl, das Standard Forum wo jeder zu jeder Zeit ein neues Thema anfangen kann; ein Forum wo jeder Teilnehmende genau ein Thema anfangen kann; ein Frage-Antwort Forum, wo Teilnehmende erst Antworten müssen bevor sie die Antworten der anderen sehen können. Trainer können Dateianhänge an Beiträgen erlauben. Angehängte Bilder werden im Beitrag angezeigt.

Teilnehmer können ein Forum abonnieren um Benachrichtigungen über neue Beiträge zu erhalten. Trainer können die Art des Abonnements als optional, verpflichtend, automatisch oder deaktiviert einstellen. Wenn notwendig können Nutzer ab einer bestimmten Zahl von Beiträgen in einer bestimmten Zeitspanne vom Schreiben neuer Beiträge gesperrt werden. So kann ausgeschlossen werden, dass Einzelne eine Diskussion dominieren.

Forenbeiträge können von Trainern oder Teilnehmer bewertet werden. Bewertungen können zusammengefasst werden um eine entgültige Bewertung in der Bewertungsübersicht des Kurses zu ergeben.

Foren haben viele Einsatzmöglichkeiten, wie z.B.:

* Ein sozialer Raum, in dem Teilnehmer sich gegenseitig kennenlernen können
* Für Ankündigungen im Kurs
* Um die Kursinhalte zu diskutieren
* Um online eine Diskussion weiterzuführen, die in Person begonnen wurde
* Ein Hilfebreich, wo Tutoren und Teilnehmer Rat geben können
* Für Diskussionen nur unter Trainer (in einem versteckten Forum)
* Eine eins-zu-eins Hilfe für private Gespräche zwischen einem Teilnehmenden und einem Trainer/einer Trainerin (mit separaten Gruppen, in denen jeweils nur ein Teilnehmender ist)
* Für weiterführende Aktivitäten, beispielsweise \'Anreize\' um die Teilnehmenden zum Überlegen und Diskutieren zu bringen';
$string['namenews_help'] = 'Das Ankündigungsforum ist ein spezielles Forum für Ankündigungen und wird automatisch erzeugt, wenn ein Kurs angelegt wird. In einem Kurs kann es nur ein Ankündigungsforum geben. Nur Trainer und Administratoren können Ankündigungen veröffentlichen. Der Block "Neue Ankündigungen" zeigt die neuesten Beiträge.';
$string['posttomygroups_help'] = 'Veröffentlich eine Kopie dieser Nachricht in allen Gruppen, zu den Sie Zugang haben. Teilnehmer anderer Gruppen werden diesen Beitrag nicht sehen';
$string['privatereplies_help'] = 'Mit dieser Funktion können Trainer eine private Antwort auf einen Forenbeitrag senden. Diese Antwort ist nur für die Person sichtbar, die den Beitrag verfasst hat und für alle anderen Teilnehmer unsichtbar.';
$string['subscribeenrolledonly'] = 'Entschuldigung, nur eingeschriebene Teilnehmer können Forenbeiträge abonnieren.';
$string['subscribenone'] = 'Abonnement für alle Nutzer aufheben';
$string['subscribers'] = 'Abonnenten';
$string['subscriberstowithcount'] = 'Abonnenten von  "{$a->name}" ({$a->count})';
$string['subscriptionmode_help'] = 'Wenn ein Teinehmer / eine Teilnehmerin ein Forum abonniert hat, bedeutet dies, dass sie über neue Forenbeiträge benachrichtigt werden. Es gibt 4 Optionen des Abonnements:

* Optionales Abonnement - Nutzer können entscheiden ob sie abonnieren wollen.
* Verpflichtendes Abonnement - Alle haben das Forum abonniert und niemand kann es abbestellen.
* Automatisches Abonnement - Alle haben das Forum zunächst abonniert, dürfen es aber jederzeit abbestellen.
* Abonnement deaktiviert - Das Forum kann von niemandem abonniert werden.';
$string['timedvisible'] = 'Status Zeitsteuerung: Für alle Nutzer sichtbar';
$string['warnafter_help'] = 'Teilnehmer können gewarnt werden, wenn sie sich der Beitragsgrenze nähern, die für einen bestimmten Zeitraum erlaubt ist. Diese Einstellung legt fest, nach wie vielen Beiträgen gewarnt wird. Nutzer mit der Berechtigung mod/hsuforum:postwithoutthrottling sind von dieser Grenze ausgenommen.';
