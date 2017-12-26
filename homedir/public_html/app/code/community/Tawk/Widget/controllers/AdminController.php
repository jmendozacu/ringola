<?php

/**
 * Tawk.to
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@tawk.to so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2014 Tawk.to
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Tawk_Widget_AdminController extends Mage_Adminhtml_Controller_Action {
	public function indexAction() {
	}

	protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('widget');
    }

	public function customizationAction() {
		$this->loadLayout();
		$block = $this->getLayout()->createBlock('tawkwidget/admin_customization');
		$this->_addContent($block);
		$this->renderLayout();
	}

	public function redirectAction() {
		$this->_redirectUrl('https://dashboard.tawk.to/');
	}

	public function savewidgetAction() {
		$response = $this->getResponse();

		$response->setHeader('Content-type', 'application/json');

		if(!is_string(filter_input(INPUT_POST, 'pageId', FILTER_SANITIZE_STRING)) || !is_string(filter_input(INPUT_POST, 'widgetId', FILTER_SANITIZE_STRING)) || !is_string(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING))) {
			return $response->setBody(json_encode(array("success" => FALSE)));
		}

		$model = Mage::getModel('tawkwidget/widget')->loadByForStoreId(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING));

		if(!$model->hasId()) {
			$model = Mage::getModel('tawkwidget/widget');
		}

		$model->setPageId(filter_input(INPUT_POST, 'pageId', FILTER_SANITIZE_STRING));
        $model->setWidgetId(filter_input(INPUT_POST, 'widgetId', FILTER_SANITIZE_STRING));
        $model->setForStoreId(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING));

		$model->save();

		return $response->setBody(json_encode(array("success" => TRUE)));
	}

	public function removewidgetAction() {
		$response = $this->getResponse();
		$response->setHeader('Content-type', 'application/json');

		Mage::getModel('tawkwidget/widget')->loadByForStoreId(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING))->delete();

		return $response->setBody(json_encode(array("success" => TRUE)));
	}
}