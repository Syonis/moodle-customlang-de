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
 * @package    assignsubmission
 * @subpackage snap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cloud_helpbutton_help'] = 'Snap!-Cloud aktivieren bzw. deaktivieren. Dieses Kontrollfeld kann von Administratoren deaktiviert werden und verbietet dann die Verwendung der Snap!-Cloud für die gesamte Website.';
$string['distros_help'] = 'Moodle verwendet eine aktuelle Online-Distribution (wie etwa Snap! Berkeley).
    Hier können aber auch weitere Distributionen (eine pro Zeile) eingetragen werden, und Trainer können dann eine Distribution für ihre Aufgaben wählen.
    Das Format (für jeden Eintrag) lautet: <b>&lt;code&gt; | &lt;angezeigter Name&gt; | &lt;url&gt; </b>.
    Behalten Sie den Parameter "code" bei zukünftigen Änderungen (url ...) bei, um die Verknüpfung zu vorherigen Aufgaben zu erhalten.
    Die erste Distribution ist die Standardoption für neue Aufgaben und für diejenigen Aufgaben mit deaktivierter Distribution.';
$string['enabled_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer Snap!-Projekte bearbeiten und direkt für ihre Aufgabe verwenden.
    Wenn eine Snap!-XML-Datei im Bereich "Zusätzliche Dateien" eingefügt ist, wird diese XML-Datei als Vorlage (Ausgangspunkt) geladen, statt mit einem neuen (leeren) Snap!-Projekt zu starten.';
$string['snapdistro_helpbutton_help'] = 'Wählen Sie die Snap!-Distribution, die Sie für diese Aufgabe verwenden möchten. Administratoren können Distributionen hinzufügen und entfernen.';
