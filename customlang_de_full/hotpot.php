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
 * @subpackage hotpot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpaste_help'] = 'Wenn diese Einstellung aktiviert ist, können Teilnehmer kopieren, einfügen und Text in Texteingabefelder ziehen.';
$string['allowreview_help'] = 'Diese Einstellung legt fest, dass Teilnehmer eigene Versuche erneut anschauen dürfen, nachdem das Quiz beendet wurde.';
$string['entrypage_help'] = 'Soll den Teilnehmern eine Anfangsseite gezeigt werden, bevor die HotPot-Aktivität beginnt?

**Ja**
: Vor dem Beginn der HotPot-Aktivität wird den Teilnehmern eine Anfangsseite gezeigt. Der Inhalt dieser Anfangsseite wird durch die \'Optionen für die HotPot-Anfangsseite\' festgelegt.

**Nein**
: Die HotPot-Aktivität beginnt, ohne dass die Teilnehmer eine Anfangsseite sehen.

Trainer bekommen die Anfangsseite immer angezeigt, wenn sie auf die Übersicht zugreifen oder die Quizseite bearbeiten.';
$string['stopbutton_help'] = 'Wenn diese Option aktiviert ist, wird eine Stopptaste in den Test eingefügt,

Wenn Teilnehmer auf diese Stopptaste drücken, werden die bisherigen Ergebnisse an Moodle zurückgegeben und der Versuch wird als "aufgegeben" registriert.

Der Text für Stopptaste kann aus der Sprachdatei übernommen oder von den Trainern selbst angegeben werden.';
$string['studentfeedback_help'] = 'Wenn diese Option aktiviert ist, wird ein Popup-Fenster mit Feedback angezeigt, sobald die Teilnehmer auf die Taste "Prüfung" klicken.

Das Feedback-Fenster erlaubt es, eine Rückmeldung an die Trainer zu übermitteln:

**Webseite**
: Die URL einer Webseite ist notwendig, z.B. http://www.meinserver.de/feedbackform.html

**Feedback-Formular**
: Die URL zu einem Scriptformular ist notwendig, z.B. http://www.meinserver.de/cgi-bin/feedback.pl

**Moodle-Forum**
: Der Forumsindex des Kurses wird angezeigt

**Moodle-Messaging**
: Das Fenster für das Moodle-Messaging wird angezeigt. Wenn der Kurs mehrere Trainer hat, muss ausgewählt, für wen das Messaging-Fenster geöffnet werden soll.';
