<?php

/**
 * Class Registrant 
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Registrant extends Controller
{
    /**
     * PAGE: index
     * @param string $register_success Alert type
     */
    public function index($register_success = '-1')
    {
        // highlight page in navbar
        $active = 'register';

        require 'application/views/_templates/header.php';
        // handle alerts
        if ($register_success === '0') {
          $alert_type = "danger";
          $alert_message = "Something went wrong with your registration!";
          require 'application/views/_templates/alert.php';
        } elseif ($register_success === '1') {
          $alert_type = "success";
          $alert_message = "Registration successful!";
          require 'application/views/_templates/alert.php';
        }
        require 'application/views/registrant/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * ACTION: addRegistrant
     */
    public function addRegistrant()
    {
        $success = ''; 
        // if we have POST data to create a new registrant entry
        if (isset($_POST["submit_add_registrant"])) {
            // load model, perform an action on the model
            $registrant_model = $this->loadModel('RegistrantModel');
            if ($registrant_model->addRegistrant($_POST)) {
              $success = 1;
            } else {
              $success = 0;
            }
        }

        // where to go after registrant has been added
        header('location: ' . URL . 'registrant/index/' . $success);
    }

    /**
     * ACTION: deleteRegistrant
     * @param int $registrant_id Id of the to-delete registrant
     */
    public function deleteRegistrant($registrant_id)
    {
        $success = '';
        // if we have an id of a registrant that should be deleted
        if (isset($registrant_id)) {
            // load model, perform an action on the model
            $registrant_model = $this->loadModel('RegistrantModel');
            if ($registrant_model->deleteRegistrant($registrant_id)) {
              $success = 1;
            } else {
              $success = 0;
            }
        }

        // where to go after registrant has been deleted
        header('location: ' . URL . 'admin/index/' . $success);
    }
}
