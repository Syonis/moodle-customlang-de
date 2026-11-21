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
 * @package    qtype
 * @subpackage stack
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ATAddConst_Opt'] = 'Die Antwortüberprüfung ist fehlgeschlagen: Bitte kontaktieren Sie Ihre Trainer. Es gibt einen Fehler bei den Optionen für die AddConst-Antwortüberprüfung.';
$string['ATAntidiff_error_list'] = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren Sie Ihre Administratoren.';
$string['ATValidator_STACKERROR_ev'] = 'Der Validator hat bei seiner Auswertung einen Fehler ausgelöst.  Dies ist ein Fehler in der Überprüfung.  Bitte wenden Sie sich an Ihre Trainer.';
$string['ATValidator_not_fun'] = 'Der Validator konnte nicht ausgewertet werden.  Haben Sie den richtigen Namen der Validatorfunktion angegeben?  Dies ist ein Fehler in der Überprüfung.  Bitte wenden Sie sich an Ihre Trainer.';
$string['ATValidator_res_not_string'] = 'Das Ergebnis Ihres Validators muss eine Zeichenkette sein, ist es aber nicht.  Dies ist ein Fehler in der Überprüfung.  Bitte wenden Sie sich an Ihre Trainer.';
$string['AT_raw_sans_needed'] = 'Manche Antwortüberprüfungen benötigen die unverarbeitete Eingabe der Teilnehmer.  Daher sollte das "SAns"-Feld des Knotens den Namen eines Eingabefelds beinhalten.  Bitte überprüfen Sie den folgenden Knoten, der scheinbar stattdessen ein berechneter Wert ist: {$a->prt}';
$string['analyzeresponsesnotes'] = 'Bitte beachten Sie: (1) Hier sind alle Antworten von Teilnehmern zu jedem Testversuch enthalten, (2) alle Versionen der Frage sind enthalten.';
$string['autotestcase'] = 'Testfall, der annimmt, dass die Eingabe der Trainer die volle Punktezahl erreicht.';
$string['isbrokenlabel'] = 'Die Frage als beschädigt markieren. Die Frage kann dann trotz der meisten Fehler gespeichert werden, wird aber den Teilnehmern nicht angezeigt.';
$string['markedasbroken'] = 'Diese Frage wurde als beschädigt markiert und ist für Teilnehmer nicht zugänglich.';
$string['mustverifyshowvalidation'] = 'Sie können die Validierung nicht in zwei Schritten erforderlich machen, aber die Ergebnisse der Validierung nicht nach dem ersten Schritt anzeigen. Dies versetzt die Teilnehmer in eine unmögliche Position.';
$string['nodehelp_help'] = '<h3>Beschreibung</h3>
Sie hilft dabei, die Bedeutung und den Zweck des Knotens zu deklarieren.  Der Inhalt des Feldes ist ein String (kein CASText).

<h3>Antwortüberprüfung</h3>
Eine Antwortüberprüfung ist ein Test um zwei Ausdrücke dahingehend zu vergleichen, ob sie bestimmte mathematische Eigenschaften erfüllen.

<h3>SAns</h3>
Dies ist das erste Argument der Antwortüberprüfungsfunktion.  In asymmetrischen Tests wird dies als die Antwort der Teilnehmer (SAns = "student\'s answer") betrachtet, obwohl es ein beliebiger gültiger CAS-Ausdruck sein kann.  Es können darin auch Aufgabenvariablen oder Feedbackvariablen benutzt werden.

<h3>TAns</h3>
Dies ist das zweite Argument der Antwortüberprüfungsfunktion.  In asymmetrischen Tests wird dies als die Antwort der Trainer (TAns = "teacher\'s answer") betrachtet, obwohl es ein beliebiger gültiger CAS-Ausdruck sein kann.  Es können darin auch Aufgabenvariablen oder Feedbackvariablen benutzt werden.

<h3>Test-Optionen</h3>
Über dieses Feld kann einer Antwortüberprüfung eine Option übergeben werden, z. B. eine Variable oder eine bestimmte numerische Präzision.

<h3>Feedback unterdrücken</h3>
Ist diese Option auf "Ja" gesetzt, wird jedes von der Antwortüberprüfung automatisch generierte Feedback unterdrückt und den Teilnehmern nicht angezeigt.  Dies betrifft aber nicht die Feedbacktexte, die in den einzelnen Knoten des Rückmeldebaums eingetragen werden.';
$string['prtwillbecomeactivewhen'] = 'Dieser potenzielle Rückmeldebaum wird aktiv, wenn Teilnehmer folgendes geantwortet haben: {$a}';
$string['quiet_help'] = 'Ist diese Option auf "Ja" gesetzt, wird jedes von der Antwortüberprüfung automatisch generierte Feedback unterdrückt und den Teilnehmern nicht angezeigt.  Dies betrifft aber nicht die Feedbacktexte, die in den einzelnen Knoten des Rückmeldebaums eingetragen werden.';
$string['runquestiontests_help'] = 'Das Dashboard führt Fragetests durch, die die Fragen einem Unit-Test unterziehen. Dadurch kann sichergestellt werden, dass das Verhalten der Fragen mit dem Verhalten übereinstimmt, das von dem/der Trainer/in erwartet wird. Zudem stellen eingesetzte Varianten sicher, dass zufällige Versionen, die ein/e Teilnehmer/in sieht, im Voraus mit den Fragetests getestet werden. Diese Werkzeuge helfen Ihnen, zuverlässige Fragen zu erstellen und zu testen. Sie sollten diese in allen Fällen verwenden, in denen eine Frage von Teilnehmern bearbeitet wird.  Das Dashboard bietet auch viele weitere STACK-spezifische Funktionen.';
$string['sans_help'] = 'Dies ist das erste Argument der Antwortüberprüfungsfunktion.  In asymmetrischen Tests wird dies als die Antwort der Teilnehmer (SAns = "student\'s answer") betrachtet, obwohl es ein beliebiger gültiger CAS-Ausdruck sein kann.  Es können darin auch Aufgabenvariablen oder Feedbackvariablen benutzt werden.';
$string['stackDoc_AnswerTestResults'] = 'Ergebnisse der Antwortüberprüfungen

Auf dieser Seite werden die Ergebnisse der Antwortüberprüfungen für STACK-Testfälle angezeigt.  Diese Seite wird automatisch aus den STACK-Unit-Tests generiert und soll den Autoren von Fragen veranschaulichen, was Antwortüberprüfungen tatsächlich tun.  Dazu gehören auch Fälle, in denen Antwortüberprüfungen derzeit fehlschlagen, was zu einer negativen erwarteten Punktzahl (Score) führt.  Kommentare und weitere Testfälle sind sehr willkommen.';
$string['tans_help'] = 'Dies ist das zweite Argument der Antwortüberprüfungsfunktion.  In asymmetrischen Tests wird dies als die Antwort der Trainer (TAns = "teacher\'s answer") betrachtet, obwohl es ein beliebiger gültiger CAS-Ausdruck sein kann.  Es können darin auch Aufgabenvariablen oder Feedbackvariablen benutzt werden.';
$string['teacheranswercase'] = 'Die Antwort der Trainer als Testfall nutzen';
