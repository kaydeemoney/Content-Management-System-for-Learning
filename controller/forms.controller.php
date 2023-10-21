<?php

class ControllerForms
{

    /***************************
     *          Register          *
     ***************************/

    static public function ctrRegister()
    {

        if (isset($_POST["registerName"])) {
            return "ok";
        }
    }
}
