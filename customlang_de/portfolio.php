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
 * @package    core
 * @subpackage portfolio
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['commonsettingsdesc'] = '<p>Ob eine Übertragung als "mittel" oder "hoch" betrachtet wird, hängt davon ab, ob der Benutzer auf den Abschluss der Übertragung warten kann oder nicht.</p> <p>Größen unter dem Schwellenwert von "mittel" werden sofort gestartet, ohne dass die Benutzer gefragt werden. Übertragungen mit "mittel" und "hoch" bedeuten, dass die Option zusammen mit einer Warnung angeboten wird, dass es einige Zeit dauern kann.</p> <p>Einige Portfolio-Plugins ignorieren diese Option vollständig und erzwingen, dass alle Übertragungen in die Warteschlange gestellt werden.</p>';
$string['enableddesc'] = 'Wenn die Option aktiviert ist, dürfen Nutzer Kursinhalte (z.B. Forumsbeiträge oder Aufgabenlösungen) in externe Portfolios oder HTML-Seiten exportieren.';
$string['insanebody'] = 'Guten Tag,<br /> Sie erhalten diese Nachricht als Administrator von {$a->sitename}. Einige Portfolio Plugin Instanzen wurden wegen fehlerhafter Konfiguration deaktiviert. Zur Zeit ist ein Export in diese Systeme durch Nutzer nicht möglich. Folgende Portfolio Plugin Instanzen wurden deaktiviert:<br /> {$a->textlist} Prüfen und korrigieren Sie die Einstellungen alsbald. Zugriff unter {$a->fixurl}. Ihr E-Learning-Team';
$string['insanebodyhtml'] = '<p>Guten Tag,</p> <p>Sie erhalten diese Nachricht als Administrator von {$a->sitename}.</p> <p>Einige Portfolio Plugin Instanzen wurden wegen fehlerhafter Konfiguration deaktiviert. Zur Zeit ist ein Export in diese Systeme durch Nutzer nicht möglich. </p> <p>Folgende Portfolio Plugin Instanzen wurden deaktiviert:<br /> {$a->htmllist} </p> <p>Prüfen und korrigieren Sie die Einstellungen möglichst bald über die <a href="{$a->fixurl}">Portfoliokonfiguration</a></p>. Ihr E-Learning-Team';
$string['insanebodysmall'] = 'Guten Tag, Sie erhalten diese Nachricht als Administrator von {$a->sitename}.<br /> Einige Portfolioplugin Instanzen wurden wegen fehlerhafter Konfiguration deaktiviert. Zur Zeit ist ein Export in diese Systeme durch Nutzer nicht möglich. <br /> Prüfen und korrigieren Sie die Einstellungen möglichst bald über den Zugriff auf {$a->fixurl}. Ihr E-Learning-Team';
