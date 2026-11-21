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
 * @subpackage algebra
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compareby_help'] = 'Wählt die Methode aus, mit der die Antworten der Teilnehmer mit den Antworten auf alle Fragen verglichen werden. Die verschiedenen Möglichkeiten sind:

SAGE: verwendet die Open Source <a href="http://www.sagemath.org/">SAGE</a>
Mathematiksoftware, um einen vollständigen symbolischen algebraischen Vergleich durchzuführen.

Evaluation: Diese Methode generiert Zufallszahlen für die Fragevariablen und wertet dann sowohl die Studierendenantwort als auch die Antwort auf die Frage für diese Menge von Werten.

Äquivalenz:
Dies ist die einfachste aller Methoden. Sie führt nur die grundlegendsten Vergleiche zwischen Ausdrücken.';
