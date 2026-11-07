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
 * @subpackage install
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clialreadyconfigured'] = 'Die Datei config.php existiert bereits. Bitte benutzen Sie admin/cli/install_database.php, wenn Sie diese Site installieren möchten.';
$string['clialreadyinstalled'] = 'Die Datei config.php existiert bereits. Bitte benutzen Sie admin/cli/install_database.php, wenn Sie diese Site aktualisieren möchten.';
$string['databasetypesub'] = 'Moodle unterstützt mehrere Typen von Datenbank-Servern. Fragen Sie bitte die Administratoren des Webservers, welchen Typ Sie für Moodle verwenden sollen.';
$string['environmentsub2'] = 'Jede Version hat Mindestvoraussetzungen für der PHP-Version und für verbindliche PHP-Extensions. Vor einer Installation oder einer Aktualisierung wird eine vollständige Prüfung durchgeführt. Bitte fragen Sie die Administratoren des Servers, wenn Sie mit der Installation einer neuen Version oder mit der Aktivierung von PHP-Extensions nicht weiterkommen.';
$string['memorylimithelp'] = '<p>Die PHP-Einstellung memory_limit Ihres Servers ist zur Zeit auf {$a} eingestellt. </p> <p>Wenn Sie Moodle mit vielen Aktivitäten oder vielen Nutzern verwenden, wird dies vermutlich zu Problemen führen.</p> <p>Wir empfehlen die Einstellung wenn möglich zu erhöhen, z.B. auf 40M oder mehr. Dies können Sie auf verschiedene Arten machen:</p> <ol> <li>Wenn Sie PHP neu kompilieren können, nehmen Sie die Einstellung <i>--enable-memory-limit</i>. Dann kann Moodle die Einstellung selber vornehmen. <li>Wenn Sie Zugriff auf die Datei php.ini haben, können Sie die Einstellung <b>memory_limit</b> selber auf einen Wert von 40M setzen. Wenn Sie selber keinen Zugriff haben, fragen Sie den Server-Admin, dies für Sie zu tun. <li>Auf einigen PHP-Servern können Sie eine .htaccess-Datei im Moodle-Verzeichnis einrichten. Tragen Sie darin die folgende Zeile ein: <p><blockquote><div>php_value memory_limit 40M</div></blockquote></p> <p>Achtung: auf einigen Servern hindert diese Einstellung <b>alle</b> PHP-Seiten und Sie erhalten Fehlermeldungen. Entfernen Sie dann den Eintrag in der .htaccess-Datei wieder.</p></li> </ol>';
