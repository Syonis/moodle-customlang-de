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
 * @subpackage certificate
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['certificatetype_help'] = 'Diese Einstellungen legen das Layout des Zertifikats fest. Es sind vier Standardformate des Zertifikats möglich:
- A4 Embedded ist druckbar auf A4-Papier mit eingebetteten Schriften
- A4 Non-Embedded ist druckbar auf A4-Papier ohne eingebettete Schriften
- Letter Embedded ist druckbar auf Letter-Papier mit eingebetteten Schriften
- Letter Non-Embedded ist druckbar auf Letter-Papier ohne eingebettete Schriften

Zertifikate ohne eingebettete Schriften verwenden die Schriftarten Helvetica und Times.

Falls Sie denken, dass die Nutzer diese Schriftarten auf ihrem Computer haben bzw. wenn Ihre Sprache besondere Zeichen oder Symbole verwendet, benutzen Sie die Embedded-Formate mit eingebetteten Schriften. Hierfür werden die Schriftarten Dejavusans und Dejavuserif in die Zertifikate eingebunden, wobei die PDF-Dateien erheblich größer werden.

Sie können auch eigene Formate hinzufügen, wobei Sie aber Dateien auf dem Server ergänzen und die Sprachdatei müssen.';
$string['coursetimereq_help'] = 'Diese Option legt die Mindestzeit (in Minuten) fest, die Teilnehmer im Kurs angemeldet sein müssen, bevor sie das Zertifikat erhalten können.';
$string['customtext_help'] = 'Wenn Sie anstelle der Trainer andere Namen für die Kursleitung ins Zertifikat aufnehmen möchten, können Sie diese hier eingeben. Sie sollten in diesem Fall allerdings die Option \'Name der Kursleitung\' deaktivieren.
Der hier eingegebene Text erscheint in der linken unteren Ecke des Zertifikats.
Sie können folgende HTML-Tags verwenden um den Text zu formatieren: &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src und width (oder height) sind verpflichtend), &lt;a&gt; (href ist verpflichtend), &lt;font&gt; (Mögliche Attribute sind: color, (hex color code), face, (arial, times, courier, helvetica, symbol)).';
$string['emailothers_help'] = 'Geben Sie hier kommagetrennte E-Mail-Adressen von Personen ein, die benachrichtigt werden sollen, wenn Teilnehmer ihr Zertifikat abrufen.';
$string['emailteachers_help'] = 'Wenn diese Option aktiviert ist, findet jedesmal eine Benachrichtigung statt, wenn Teilnehmer ihr Zertifikat abrufen.';
$string['modulename_help'] = 'Dieses Modul ermöglicht die dynamische Erzeugung von Zertifikaten, basierend auf Bedingungen, die durch die Trainer vordefiniert wurden.';
$string['printteacher_help'] = 'Standardmäßig werden die Trainer des Kurses als Kursleitung aufgeführt.

Um spezielle Namen im Zertifikat einzufügen, ordnen Sie den entsprechenden Personen die Trainerrolle auf Modulebene zu. Eine solche Zuordnung ist notwendig, falls Sie mehrere Personen die Trainerrolle im Kurs haben oder wenn andere Personen auf dem Zertifikat vermerkt sein sollen.';
