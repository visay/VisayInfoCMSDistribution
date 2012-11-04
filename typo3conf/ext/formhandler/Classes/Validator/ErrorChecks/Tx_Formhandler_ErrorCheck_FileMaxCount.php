<?php
/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *
 * $Id: Tx_Formhandler_ErrorCheck_FileMaxCount.php 65847 2012-09-02 11:35:54Z reinhardfuehricht $
 *                                                                        */

/**
 * Validates that up to x files get uploaded via the specified upload field.
 *
 * @author	Reinhard Führicht <rf@typoheads.at>
 * @package	Tx_Formhandler
 * @subpackage	ErrorChecks
 */
class Tx_Formhandler_ErrorCheck_FileMaxCount extends Tx_Formhandler_AbstractErrorCheck {

	public function init($gp, $settings) {
		parent::init($gp, $settings);
		$this->mandatoryParameters = array('maxCount');
	}

	public function check() {
		$checkFailed = '';

		$files = $this->globals->getSession()->get('files');
		$settings = $this->globals->getSession()->get('settings');
		$currentStep = $this->globals->getSession()->get('currentStep');
		$lastStep = $this->globals->getSession()->get('lastStep');
		$maxCount = $this->utilityFuncs->getSingle($this->settings['params'], 'maxCount');

		$uploadedFilesWithSameNameAction = $this->utilityFuncs->getSingle($settings['files.'], 'uploadedFilesWithSameName');
		if(!$uploadedFilesWithSameNameAction) {
			$uploadedFilesWithSameNameAction = 'ignore';
		}
		if (is_array($files[$this->formFieldName]) &&
			count($files[$this->formFieldName]) >= $maxCount &&
			$currentStep == $lastStep) {

			$found = FALSE;
			foreach ($_FILES as $idx=>$info) {
				if (strlen($info['name'][$this->formFieldName]) > 0) {
					$found = TRUE;
				}
			}
			if ($found) {
				$newFileName = $info['name'][$this->formFieldName];
				$exists = FALSE;
				foreach($files[$this->formFieldName] as $fileInfo) {
					if($fileInfo['name'] === $newFileName) {
						$exists = TRUE;
					}
				}
				if(!$exists) {
					$checkFailed = $this->getCheckFailed();
				} elseif($uploadedFilesWithSameNameAction === 'append') {
					$checkFailed = $this->getCheckFailed();
				}
			}
		} elseif (is_array($files[$this->formFieldName]) &&
			$currentStep > $lastStep) {

			foreach ($_FILES as $idx=>$info) {
				if (strlen($info['name'][$this->formFieldName]) > 0 && count($files[$this->formFieldName]) >= $maxCount) {
					$checkFailed = $this->getCheckFailed();
				}
			}

		}
		return $checkFailed;
	}

}
?>