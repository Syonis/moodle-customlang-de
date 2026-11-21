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
 * @subpackage activequiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:control'] = 'LiveTest steuern (Normalerweise nur für Trainer)';
$string['activequiz:seeresponses'] = 'Antworten von anderen Teilnehmern anzeigen, um sie zu bewerten.';
$string['activequiz:viewownattempts'] = 'Teilnehmer erlauben, ihre eigenen Versuche eines Tests zu sehen';
$string['anonymousresponses'] = 'Antworten der Teilnehmer anonymisieren';
$string['anonymousresponses_help'] = 'Die Antworten der Teilnehmer werden für die Dozentenanzeige anonymisiert, so dass falls diese angezeigt wird keine Namen der Teilnehmer oder der Gruppen sichtbar sind.';
$string['fullanonymize'] = 'Antworten der Teilnehmer vollständig anonymisieren.';
$string['fullanonymize_help'] = 'Antworten der Teilnehmer vollständig anonymisieren. Bitte beachten Sie, dass bei Wahl dieser Option die Antworten dieser Sitzung nicht bewertet und auf die Teilnehmer angewendet werden.';
$string['groupattendance_help'] = 'Diese Option legt fest, dass Teilnehmer auswählen können, welche andeRen Teilnehmer ihrer Gruppe anwesend sind.';
$string['instructorquizinst'] = '<p>Bitte bleiben Sie auf dieser Seite, bis alle Ihre Teilnehmer verbunden sind.  Sobald <b>Test starten</b> gedrückt wurde, beginnt dieser mit der ersten Frage.</p>
    <p>
<p>Bedienelemente:</p>
    <ul>
        <li>
            Frage erneut stellen
            <ul>
                <li>
                    Erlaubt es Trainerinnen, die aktuelle oder vorherige Frage erneut zu stellen (verfügbar während der Überprüfung einer Frage).
                </li>
            </ul>
        </li>
        <li>
            Nächste Frage
            <ul>
                <li>
                    Weiter mit der nächsten Frage (verfügbar während der Überprüfung einer Frage).
                </li>
            </ul>
        </li>
        <li>
            Frage beenden
            <ul>
                <li>
                    Beendet die aktuelle Frage. Erlaubt es Trainern auch eine Frage mit einer Zeitvorgabe früher zu beenden (verfügbar während eine Frage läuft). <i>Wenn die Frage kein Zeitlimit hat, muss der Trainer auf <b>Frage beenden</b> klicken.</i>
                </li>
            </ul>
        </li>
        <li>
            Gehe zur Frage
            <ul>
                <li>
                    Öffnet eine Dialogbox mit der alle Nutzer direkt zu einer spezifischen Frage im Test geleitet werden können (verfügbar während der Überprüfung einer Frage).
                </li>
            </ul>
        </li>
        <li>
            Sitzung schließen
            <ul>
                <li>
                    Schließt die aktuelle Sitzung als auch alle Versuche für die Teilnehmer. Dies wird automatisch alle Versuche bewerten (jederzeit verfügbar).
                </li>
            </ul>
        </li>
        <li>
            Ergebnisse neu laden
            <ul>
                <li>
                    Lädt die Antworten der Teilnehmer in der Informationsbox neu. Erlaubt es Trainern zu sehen, wie viele Teilnehmer oder Gruppen bereits geantwortet haben (verfügbar während der Überprüfung einer Frage).
                </li>
            </ul>
        </li>
        <li>
            Verstecke / zeige nicht geantwortet
            <ul>
                <li>
                    Versteckt oder zeigt die Informationsbox an,  wie viele Teilnehmer oder Gruppen genatwortet haben und wie viele noch antworten müssen (verfügbar während die Frage gestellt wird).
                </li>
            </ul>
        </li>
        <li>
            Zeige richtige Antwort
            <ul>
                <li>
                    Zeigt dem Trainer die Frage mit der richtigen Antwort (verfügbar während der Überprüfung einer Frage). Dies wird nicht die richtige Antwort für manuell bewertete Fragetypen zeigen.
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['invalidgroupid'] = 'Es wird eine gültige Gruppen-ID für die Teilnehmer benötigt.';
$string['manualcomment_help'] = 'Der Kommentar, den Trainern bei der Bewertung eines Versuchs hinzufügen können';
$string['modulename_help'] = '<p>Die Aktivität \'LiveTest\' ermöglicht es Trainern, Echtzeit-Tests zu erstellen und zu verwalten. Alle üblichen Fragetypen können im LiveTest verwendet werden.</p>
<p>LiveTest erlaubt eine Teilnahme durch Einzelpersonen oder Gruppen. Gruppenanwesenheit zu erfassen ist möglich, so dass Punkte, die während dem Test vergeben werden, nur den Mitgliedern gutgeschrieben werden, die während der Test-Sitzung anwesend waren. Fragen können so eingestellt werden, dass auch mehrere Versuche zur Beantwortung erlaubt sind.  Ein Zeitlimit kann angegeben werden, das eine Frage automatisch beendet, aber der Trainer kann Fragen auch manuell enden lassen und zur nächsten Frage weiter gehen.  Der Trainer hat die Möglichkeit zu verschiedenen Fragen während der Sitzung zu springen und er kann die Beteiligung  und Echtzeitantworten der Teilnehmer während der Frage überwachen. </p>
<p>Jeder Testversuch wird automatisch wie ein normaler Test gekennzeichnet (außer Freitextfragen und PoodLL-Fragen) und die Note wird in den Bewertungen erfasst.
Bewertung bei Gruppenteilnahme kann auch automatisiert erfolgen indem die Note des Antwortgebenden genommen wird und den anderen Gruppenmitgliedern zugewiesen wird. </p>
<p>Der Trainer hat die Möglichkeit, Hinweise zu zeigen, Feedback zu geben und den Studenten richtige Antworten zu zeige, bis der Test vollständig absolviert ist.</p>
<p>Active Quizzes may be used as a vehicle for delivering Team Based Learning inside Moodle.</p>';
