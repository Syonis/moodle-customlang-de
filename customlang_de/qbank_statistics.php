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
 * @package    qbank
 * @subpackage statistics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index_help'] = 'Eine Frage wird basierend auf Fragenstatistiken als wahrscheinlich für eine nötige Überprüfung gekennzeichnet. Wenn die Teilnehmer beispielsweise eine niedrige Punktzahl bei der Frage, aber eine hohe Punktzahl beim gesamten Test oder eine hohe Punktzahl bei der Frage, aber eine niedrige Punktzahl beim gesamten Test erzielen, liegt möglicherweise ein Problem mit der Frage vor, z. B. die falsche Antwort ist als richtig gesetzt. Statistiken sind jedoch nicht unfehlbar; Dies ist nur ein Hinweis, dass die Frage überprüft werden sollte.';
$string['discriminative_efficiency_help'] = 'Die Trennschärfe-Effizienz ist eine statistische Schätzung, wie gut die Frage die Teilnehmer bewertet, wobei ein höherer Wert besser ist. Ein besonders niedriger Wert kann auf ein Problem mit der Frage hinweisen. Eine sehr schwierige oder einfache Frage (mit einer Trennschärfe-Effizienz nahe 0% oder 100%) kann ebenfalls zu einem niedrigen Wert führen.';
