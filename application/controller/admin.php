<?php

/**
 * Class Admin 
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Admin extends Controller
{
    /**
     * PAGE: index
     * @param string $deletion_success Alert type
     */
    public function index($deletion_success = '-1')
    {
        // load a model, perform an action, pass the returned data to a variable
        $registrant_model = $this->loadModel('RegistrantModel');
        $registrants = $registrant_model->getAllRegistrants();

        // highlight page in navbar
        $active = 'admin';

        require 'application/views/_templates/header.php';
        // handle alerts 
        if ($deletion_success === '0') {
          $alert_type = "danger";
          $alert_message = "Something went wrong with the deletion!";
          require 'application/views/_templates/alert.php';
        } elseif ($deletion_success === '1') {
          $alert_type = "success";
          $alert_message = "Deletion successful!";
          require 'application/views/_templates/alert.php';
        }
        require 'application/views/admin/index.php';
        require 'application/views/_templates/footer.php';
    }
}
