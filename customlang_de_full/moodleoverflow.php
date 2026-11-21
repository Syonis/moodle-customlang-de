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
 * @subpackage moodleoverflow
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowanonymous_desc'] = 'Trainer erlauben, Moodleoverflow-Foren als teilweise oder vollständig anonyme Foren einzustellen. Einmal aktiviert, bleiben anonyme Foren anonym, auch wenn diese Einstellung wieder deaktiviert wird. Wenn Sie wirklich möchten, kann die Anonymität in allen Foren <a href="{$a}">hier</a> zurückgesetzt werden.';
$string['allowdisablerating'] = 'Trainer erlauben, die Reputation und Bewertungen zu deaktivieren';
$string['allownegativereputation_help'] = 'Wenn ja, kann die Reputation der Nutzer innerhalb eines Kurses oder Moduls negativ sein. Wenn nein, kann die Reputation nicht unter Null sinken.';
$string['allowrating_help'] = 'Wenn ja, können Nutzer die Beiträge positiv oder negativ bewerten, um Leser eine Idee zu geben, wie hilfreich der Beitrag für andere Personen ist. Wenn nein, werden Bewertungen deaktiviert.';
$string['allowreputation_help'] = 'Wenn ja, können Nutzer Reputation gewinnen oder verlieren je nachdem wie andere  Nutzer ihre Beiträge bewerten. Wenn nein wird die Nutzerreputation deaktiviert.';
$string['allowreview_desc'] = 'Trainer erlauben, dass alle Beiträge (oder nur alle Fragen) von ihnen geprüft werden müssen, bevor sie veröffentlicht werden.';
$string['changesubscriptionmode'] = 'Wenn Sie den Abonnementmodus ändern, werden die Abonnement-Einstellungen aller Teilnehmer zurückgesetzt, auch für einzelne Themen. Danach gilt die Voreinstellung des neuen Modus.';
$string['configallowdisablerating'] = 'Setzen Sie es auf \'Ja\', wenn Sie Trainer erlauben möchten, Bewertungen und Reputationen zu deaktivieren.';
$string['configforcedreadtracking'] = 'Erlaubt, dass Foren die Einstellung setzen, dass der "Gelesen"-Status angezeigt werden muss. Dies kann die Perfomance für einige Nutzer reduzieren, insbesondere in Kursen mit vielen Foren und Beiträgen. Wenn diese Einstellung deaktiviert wird, werden alle bisherigen Einstellungen in Foren, die vorher auf "Verpflichtend" standen als optional angesehen.';
$string['configmaxmailingtime'] = 'Anzahl der Stunden, nach deinen eine neue Nachricht nicht mehr per Mail an die Nutzer versendet wird. Dies verhindert Probleme, wenn der Cron Job für eine längere Zeit nicht gelaufen ist.';
$string['configshowuserstats'] = 'Ermöglichen Sie Trainer, Statistiken anzuzeigen, die die Aktivität der Nutzer in Moodleoverflows zusammenfassen.';
$string['coursewidereputation_help'] = 'Wenn ja, ist die Reputation neben den Teilnehmern die Summe aller Moodleoverflows in diesem Kurs, die ihre Reputation ebenfalls teilen. Für die Note zählt immer nur die Reputation aus diesem Forum.';
$string['exportforumdesc'] = 'Laden Sie die Beiträge dieses Forums, die Sie sehen können, als Datei herunter: eine Zeile pro Beitrag, nach Themen gruppiert. Autoren, die in diesem Forum anonym sind, erscheinen mit ihrem Pseudonym. Bilder und Anhänge sind nicht enthalten.';
$string['la_endtime'] = 'Zeitpunkt, an dem die Teilnehmer nicht mehr antworten können';
$string['la_endtime_help'] = 'Teilnehmer können nach dem festgelegten Datum keine Fragen mehr beantworten.';
$string['la_starttime'] = 'Zeitpunkt, zu dem die Teilnehmer mit der Beantwortung beginnen können';
$string['la_starttime_help'] = 'Teilnehmer können nach dem festgelegten Datum Beiträge beantworten.';
$string['la_student_helpicon_help'] = 'Dieses Moodleoverflow befindet sich derzeit im eingeschränkten Modus. Sie können antworten, sobald die Trainer es erlauben.';
$string['la_teacher_helpicon_help'] = 'Teilnehmer können im Moment nicht antworten, weil der eingeschränkte Antwortmodus dieses Forums aktiv ist. Sie können trotzdem antworten.';
$string['modulename_help'] = '###### Hauptmerkmale
- Bietet eine nichtlineare, nicht chronologische Frage-und-Antwort-Forenstruktur
- Beiträge werden nach gemeinschaftlicher Abstimmung und nicht nach Zeit sortiert
- Teilnehmer können Beiträge bewerten und anhand der Bewertungen Reputationspunkte sammeln
- Diskussionsstarter können Antworten als hilfreich markieren; Trainer können richtige Lösungen markieren
- Hochgradig anpassbar an unterschiedliche Kursanforderungen

###### Anwendungsmöglichkeiten
- Erleichterung von Q&A-Diskussionen für Aufgaben, Projekte oder Prüfungen
- Förderung der gegenseitigen Unterstützung und der gemeinsamen Problemlösung
- Hervorhebung der hilfreichsten Antworten durch Abstimmungen und Validierung durch Trainer
- Nutzung von Reputationspunkten zur Motivation für hochwertige Beiträge
- Erstellung dynamischer, interaktiver Foren für grosse Klassen oder komplexe Themen';
$string['modulename_summary'] = 'Bietet ein Frage-und-Antwort-Forum, in dem Beiträge nach Stimmen statt nach Zeit eingestuft werden, mit Reputationswerten, der Kennzeichnung hilfreicher Antworten und der Bestätigung korrekter Lösungen durch Trainer';
$string['moodleoverflow:managesubscriptions'] = 'Abonnenten verwalten';
$string['resetanonymous_warning'] = 'Sind Sie sicher? Wenn dies keine Moodle-Test-Instanz ist, wäre <b>das höchstwahrscheinlich eine schlechte Entscheidung</b>, da Ihre Teilnehmer und Trainer Ihre Fragen und Antworten in dem Glauben geschrieben haben, dass sie Anonym bleiben.<br><br><b>{$a->fullanoncount}</b> Foren sind derzeit komplett anonymisiert, und in <b>{$a->questionanoncount}</b> zusätzlichen Foren sind die Fragenstellenden anonym.<br><br><b>In all diesen Foren werden die echten Namen wieder angezeigt werden, auch bei bereits bestehenden Beiträgen!</b><br><br>Es gibt keine Möglichkeit, diese Änderung wieder rückgängig zu machen!</br>';
$string['reviewpossibleaftertime_desc'] = 'Trainer können Beiträge frühestens nach dieser Zeit (in Sekunden) nach der Erstellung des Beitrags akzeptieren oder ablehnen. Nachdem ein Beitrag von der Trainerin/vom Trainer akzeptiert wurde, kann er nicht mehr von seiner/m Autor/in bearbeitet werden, auch nicht falls der Bearbeitungszeitraum eigentlich noch nicht vorbei ist.';
$string['subscriptionmode_help'] = 'Wenn Nutzer ein Forum abonnieren, erhalten sie neue Beitrage als E-Mail. Es gibt 4 Abonnementsoptionen:

* Optionales Abonnement - Nutzer können auswählen, ob sie ein Forum abonnieren möchten
* Verpflichtendes Abonnement - Jeder abonniert das Forum und man kann es nicht abbestellen
* Automatisches Abonnement - Jeder abonniert zu Beginn das Forum und kann es zu jeder Zeit abbestellen
* Deaktiviertes Abonnement - Abonnements sind nicht erlaubt

Anmerkung: Änderungen an dem Modus werden nur Nutzer betreffen, die in der Zukunft in einen Kurs eingeschrieben werden und nicht bereits existierende Nutzer.';
$string['trackingtype_help'] = 'Wenn diese Option aktiviert ist, sehen Teilnehmer gelesene und ungelesene Beiträge unterschiedlich markiert im Forum.

Es stehen drei Optionen zur Verfügung:

* Optional - Die Markierung ist ein- und ausschaltbar
* An  - Die Markierung ist immer an
* Aus - Die Markierung ist immer aus';
$string['userstatsdesc'] = 'Beiträge, Bewertungen und Reputation der Teilnehmer';
$string['userstatssearch'] = 'Teilnehmer suchen';
