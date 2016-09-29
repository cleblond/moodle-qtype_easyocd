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
 * easyocd question renderer class.
 *
 * @package    qtype
 * @subpackage easyocd
 * @copyright  2014 onwards Carl LeBlond 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('qtype_easyocd_options/path',
                   get_string('easyocd_options', 'qtype_easyocd'),
                   get_string('configeasyocdoptions', 'qtype_easyocd'), '/marvin4js', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('qtype_easyocd_options/obabelpath',
                   get_string('easyocdobabel_options', 'qtype_easyocd'),
                   get_string('configeasyocdobabeloptions', 'qtype_easyocd'), '/usr/bin/obabel', PARAM_TEXT));
}
