<?php

    if (isset($_POST['save_push_data']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $data = [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ];

            $ref = "contact/";
            $postdata = $database ->getReference($ref)->push($data);
        }
