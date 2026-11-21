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
 * @package    tool
 * @subpackage coursearchiver
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archivewarningemailsetting_help'] = 'Das ist der Inhalt der E-Mail, der an alle Trainer eines zu archivierenden Kurses gesendet wird.';
$string['cli_question_archiveemail'] = '{$a} Nutzer eine E-Mail "Kurs wird archiviert" senden?';
$string['cli_question_deleteemail'] = 'Ein "Kurs wird gelöscht" E-Mail an die {$a} Nutzer senden?';
$string['cli_question_hideemail'] = '{$a} Nutzer eine E-Mail "Kurs wird verborgen" senden?';
$string['confirmmessagearchiveemail'] = 'E-Mail an {$a} Kurseigentümer senden?';
$string['confirmmessagedeleteemail'] = 'Eine Benachrichtigungsmail für zum Löschen vorgemerkte Kurse an diese {$a} Kursbesitzer senden?';
$string['confirmmessagehideemail'] = 'E-Mail an {$a} Kurseigentümer senden?';
$string['coursearchiver_help'] = 'Suchen Sie nach Kursen unter berücksichtigung folgender Kriterien: Kurzname, langer Kursname, ID, Kurs-ID, Datum des letzten Zugriffs auf den Kurs, oder leere* Kurse.\\n
Kurse werden ausgegraut angezeigt, wenn diese bereits verborgen sind. Der lange Kursname wird durchgestrichen angezeigt, wenn der Kurs leer* ist.
HINWEIS: Die Suche nach dem letzten Zugriff liefert nur Kurse, die vor dem eingegebenen Datum erstellt wurden.\\n
HINWEIS: Die Anzahl der E-Mail-Adressen kann von der Anzahl der gesendeten E-Mails abweichen. Dafür gibt es 2 Ursachen. \\n
1. Für verborgene Kurse wird kein E-Mail versendet, um die Trainer zu informieren, dass der Kurs verborgen wird.
2. Es wird nur einge gesammelte E-Mail versendet, wenn Trainer mehreren Kursen zugeordnet sind.\\n\\n
*leere Kurse enthalten 0 Aufgaben, 0 Ressourcen, 0 Kategorien in der Bewertung und 0 Bewertungen';
$string['deletedarchiveemails'] = 'E-Mail Adressen von Trainern';
$string['deletewarningemailsetting_help'] = 'Der Inhalt einer E-Mail, die an alle Besitzer eines zum Löschen vorgemerkten Kurses gesendet wird.';
$string['emailselector'] = 'Nutzer ausgewählt, die E-Mails erhalten sollen';
$string['hidewarningemailsetting_help'] = 'Das ist der Inhalt der E-Mail, der an alle Trainer eines zu verbergenden Kurses gesendet wird.';
$string['hidewarningemailsettingdefault'] = '%to

Wir möchten Sie darüber informieren, dass die folgenden Moodlekurse, in denen Sie als Trainer/in eingesetzt wurden, bald verborgen werden.
Das bedeutet, dass Teilnehmer, die in diese Kurse eingeschrieben sind, keinen Zugriff mehr auf diese haben. Es besteht die Möglichkeit, bestimmte Kurse von diesem Vorgang auszuschließen. Klicken Sie hierzu auf den Link neben dem betreffenden Kurs.

%courses

Vielen Dank.';
$string['nousersfound'] = 'Es gibt keine Kurseigentümer zum Informieren';
$string['optoutbyemailsetting_help'] = 'E-Mails an Trainer enthalten einen Optout Link.';
$string['outowners'] = 'Kurseigentümer';
$string['privacy:metadata:tool_coursearchiver'] = 'Daten von Nutzern im Zusammenhang mit Optout.';
$string['privacy:metadata:tool_coursearchiver_optout:userid'] = 'ID von Nutzern, die das Optout aktiviert haben.';
$string['privacy:metadata:tool_coursearchiver_optout_user'] = 'Daten von Nutzern im Zusammenhang mit Optout.';
