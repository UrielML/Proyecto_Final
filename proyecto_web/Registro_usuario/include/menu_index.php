<!DOCTYPE html>
<html>
    <head>
        <title>Red de Vecinos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            ul{
                margin-left: 180px;
            }
            li{
                float: left;
                list-style: none;
                margin: 12px;
            }
            a{
                padding: 12px 40px;
                text-decoration: none;
                background: #222;
                color:#fff;
                font-size: 13px;
                border-radius: 10px;
                -webkit-border-radius: 10px;
            }
            .ventana_actual{
                background: #B23B1D;
                color: #fff;
            }
            .resto_ventanas{
                background: #F39B53;
                color: #fff;
            }
        </style>
    </head> 
    <body>
        <?php
        
        $menu =  json_decode('[


        {"nombre":"Inicio","url":"/registro_usuario/index.php","link":"/registro_usuario/index.php"},
        {"nombre":"Ver Mapa","url":"","link":""},
        {"nombre":"Registrarse","url":"/registro_usuario/registrarme.php","link":"/registro_usuario/registrarme.php"},
        {"nombre":"Iniciar Sesion","url":"","link":""},
        {"nombre":"Acerca De","url":"","link":""}
        

        
        
    

        ]'); 

        ?>
        <ul>
        <?php

        foreach($menu as $botones){
        $clase = ($botones->link == $_SERVER['REQUEST_URI'] ? 'ventana_actual' : 'resto_ventanas');
        ?>        
            <li><a class="<?=$clase?>" href="<?=$botones->url?>"><?=$botones->nombre?></a></li>
        <?php       
        } 
        ?>
        </ul>