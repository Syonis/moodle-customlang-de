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
 * @package    local
 * @subpackage instantcoursecompletion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['setting:batchsize_desc'] = 'Wie viele Nutzer ein Batch-Task verbucht, bevor er an einen Fortsetzungs-Task übergibt. Größere Batches bedeuten weniger Tasks und längere Einzelläufe.';
$string['setting:reconcilebudget'] = 'Maximale Nutzer je Abgleichslauf';
$string['setting:reconcilebudget_desc'] = 'Obergrenze der Nutzer, die der Abgleichs-Task in einem Lauf prüft. Ein Lauf, der die Grenze erreicht, setzt bei der nächsten Person desselben Kurses fort.';
