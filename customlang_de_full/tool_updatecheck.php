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
 * @subpackage updatecheck
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['notificationfooter'] = 'Ihre Website {$a->siteurl} hat Ihnen diese Nachricht gesendet, da Sie in den Einstellungen des Update-Check-Plugins als Empfänger/in der Update-Benachrichtigungen ausgewählt sind. Ein/e Administrator/in kann die Empfänger unter {$a->settingspath} ändern. Sie können die Zustellung dieser Nachricht über Ihre Einstellungsseite anpassen.';
$string['privacy:metadata'] = 'Das Update-Check-Plugin stellt Moodle-Administratoren erweiterte Funktionen zur Verfügung, speichert aber keine personenbezogenen Daten.';
$string['setting_notificationsrecipients'] = 'Empfänger der Benachrichtigungen';
$string['setting_notificationsrecipients_desc'] = 'Mit dieser Einstellung steuern Sie, wer von diesem Plugin über verfügbar gewordene Updates benachrichtigt wird. Sie können bestimmte Nutzer, alle Personen, die die Website-Konfiguration ändern dürfen, oder niemanden auswählen. Standardmäßig ist niemand ausgewählt und das Plugin sendet überhaupt keine Benachrichtigungen. Die auswählbaren Nutzer sind die Website-Administratoren und alle anderen Nutzer, die die Fähigkeit moodle/site:config im Systemkontext haben, da diese Fähigkeit erforderlich ist, um diese Art von Benachrichtigung zu erhalten. Eine ausgewählte Person, die diese Fähigkeit später verliert, wird nicht mehr benachrichtigt.<br>Wenn mindestens eine Person ausgewählt ist, benachrichtigt das Plugin die ausgewählten Nutzer jedes Mal, wenn sein geplanter Vorgang oder sein Adhoc-Vorgang die Update-Informationen abgerufen und neue Updates gefunden hat. Die Benachrichtigung ist eine Nachricht in reinem Text, die genauso aufgebaut ist wie der Bericht dieses Plugins: Sie listet alle verfügbaren Updates auf, kennzeichnet die neuen und verlinkt auf den Bericht. Die Benachrichtigung wird mit dem Mitteilungsanbieter \'Systemnachricht zu verfügbaren Aktualisierungen\' von Moodle Core gesendet, sodass jede/r Empfänger/in sie gemäß den eigenen Benachrichtigungseinstellungen erhält, standardmäßig als Mail und als Popup-Benachrichtigung.<br>Bitte beachten Sie: Die Benachrichtigungen werden unabhängig von den Einstellungen für Update-Benachrichtigungen in Moodle Core gesendet, d.h. auch wenn Update-Benachrichtigungen mit $CFG->disableupdatenotifications in der config.php deaktiviert sind oder wenn die Einstellung \'Automatisch auf Aktualisierungen prüfen\' deaktiviert ist. Die Benachrichtigungen berücksichtigen stattdessen die Einstellungen dieses Plugins: Den erforderlichen Reifegrad von Moodle-Core- und Plugin-Updates, die Berücksichtigung neuer Builds und die ignorierten Plugins.<br>Hintergrund: Sobald dieses Plugin installiert ist, sendet Moodle Core unabhängig von dieser Einstellung keine eigenen Update-Benachrichtigungen mehr. Moodle Core sendet nur dann eine Update-Benachrichtigung, wenn sein eigener geplanter Vorgang die Update-Informationen abruft und einen Unterschied zu den zuvor abgerufenen Update-Informationen feststellt. Da dieses Plugin die Update-Informationen einmal täglich selbst abruft, betrachtet der geplante Vorgang von Moodle Core die Update-Informationen immer als aktuell genug und überspringt seinen Lauf. Dies ist eine technische Einschränkung in Moodle Core, die dieses Plugin nicht beeinflussen kann. Solange hier also niemand ausgewählt ist, erhalten die Administratoren überhaupt keine Update-Benachrichtigungen und Sie sollten sicherstellen, dass die Checks dieses Plugins anderweitig überwacht werden.';
