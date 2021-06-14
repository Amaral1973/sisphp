<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $data = $_POST['datanascimento'];
            $databr = implode("/",array_reverse(explode("-", $data)));
            $a = [];
            $a['nome'] = $_POST['nome'];
            $a['datanascimento'] = $databr;
            $a['celular'] = $_POST['celular'];
            $a['sexo'] = $_POST['sexo'];

            // print_r($a);
            // die();

            return $a;
        }
    }
?>