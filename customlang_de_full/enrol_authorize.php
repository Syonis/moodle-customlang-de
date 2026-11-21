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
 * @package    enrol
 * @subpackage authorize
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminemailexpiredsort'] = 'Wenn die zu bearbeitenden Zahlungsvorgänge an die Trainer per E-Mail gesendet werden, welches Kriterium ist relevant?';
$string['adminteachermanagepay'] = 'Trainer können die Zahlungsvorgänge im Kurs abwickeln.';
$string['anauthcodedesc'] = 'Wenn die Kreditkarte von Nutzern nicht direkt über das Internet erfasst werden kann, erhalten Sie den Authorisierungscode telefonisch von der Kundenbank.';
$string['anemailexpireddesc'] = 'Bei manueller Zahlungsabwicklung ist es sinnvoll, dass Administratoren eine gewisse Zeit vor dem Verfall ausstehender Aufträge benachrichtigt werden.';
$string['anemailexpiredteacherdesc'] = 'Falls Sie eine manuelle Zahlungsabwicklung eingestellt haben (siehe oben) und Trainer die Zahlungen verwalten, dann können sie ebenfalls über den Verfall ausstehender Aufträge benachrichtigt werden. Alle Kurstrainer erhalten eine E-Mail mit der Anzahl möglicherweise verfallender Aufträge.';
$string['authorize:manage'] = 'Eingeschriebene Nutzer verwalten';
$string['authorize:unenrol'] = 'Nutzer aus dem Kurs abmelden';
$string['description'] = 'Das Authorize.net-Anmeldeverfahren ermöglicht es Ihnen, entgeltpflichtige Kurse anzulegen und die Kursentgelte über Kreditkarten abzurechnen. Wenn die Kursentgelte eines Kurses auf \'0\' gesetzt werden, dann erhalten die Teilnehmer keine Zahlungsaufforderung bei der Einschreibung in den Kurs.<br />Sie können eine Entgeltvoreinstellung vornehmen, die für alle Kurse als Standardentgelt übernommen wird. Dieses Standardentgelt kann in den Kurseinstellungen für jeden Kurs individuell überschrieben werden.';
$string['pendingecheckemail'] = 'Guten Tag,

zur Zeit gibt es {$a->count} wartende eChecks. Laden Sie die Nutzer mittels CSV-Datei ins System hoch.

Weitere Informationen finden Sie in der Hilfedatei auf der folgenden Seite {$a->url}.';
