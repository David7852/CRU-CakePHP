<?php
use App\Controller\Component\savory;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
$this->layout = false;
if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;
$savoire=new savory();
$cakeDescription = 'WIT';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
</head>
<body class="home">
    <header>
        <div class="header-image">
            <img  src="/WIT/webroot/img/gem wit.png" alt="WIT" >
            <h1></h1>
        </div>
    </header>
    <div id="content" class="home-bg">
        <div class="row">
            <div class="columns large-12 ctp-warning checks">
                ¡Bienvenidos A WIT: El Sistema Web Para El Control Del Inventario Y La Telefonía Móvil de FertiNitro C.E.C.!
            </div>
            <div style="margin-bottom: -7rem;z-index: 0;">
                <div class="slice" style="z-index: 0">
                    <ul style="z-index: 0">
                        <li class="first" style="z-index: 0">
                            <a href="<?=Router::url(array('controller' => '/', 'action' => 'solicitudes'))?>" style="color:white; background-color: rgb(55, 123, 165)">Solicitudes</a>
                        </li>
                        <li>
                            <a href="<?=Router::url(array('controller' => '/', 'action' => 'inventario'))?>" style="color:white; background-color: rgb(203, 103, 51);">Inventario</a>
                        </li>
                        <li class="first" style="z-index: 0">
                            <a href="<?=Router::url(array('controller' => '/', 'action' => 'telefonia'))?>" style="color:white; background-color: #00b14c">Telefonía</a>
                        </li>
                        <li>
                            <a href="<?=Router::url(array('controller' => '/', 'action' => 'usuarios'))?>" style="color:white; background-color: rgb(184, 65, 110)">Usuarios</a>
                        </li>
                    </ul>
                </div>
                <div class="lapel" style="z-index: 0; margin-left: 0.15rem; margin-right: 0.15rem">
                    <h1></h1>
                </div>
            </div>
            <div class="columns large-12 checks">
                <!--<h4 style="text-transform: capitalize">PUEDE COLOCAR NOTICIAS EN ESTA SECCIÓN</h4>
                 <div><P>...</P></div>
                <hr>-->
                <h4 style="text-transform: capitalize">unete y participa</h4>
                <div><br><br><br></div>
                <hr>
                <h4 style="text-transform: capitalize">Estamos a su disposición</h4>
                <div><br><br><br></div>
                <hr>
                <h4 style="text-transform: capitalize">Manténte en contacto</h4>
                <div><br><br><br><br></div>
                <hr>
                <h4 style="text-transform: capitalize">Apreciamos sus aportes e ideas</h4>
                <div><br><br><br><br></div>
            </div>
        </div>

        <div class="row">
            <div class="columns large-6">
                <h3>Misión</h3>
                <p><dfn style="color: rgb(56,118,29); font-style: normal ; font-weight: bold">Ferti</dfn><dfn style="color: rgb(137,180,43); font-style: normal ; font-weight: bold">Nitro</dfn> tiene la misión de producir y comercializar urea y amoniaco de alta calidad operando de forma segura y eficiente en armonía con el ambiente, fortaleciendo nuestro talento humano e impulsando el desarrollo sustentable del país.</p>
            </div>
            <div class="columns large-6">
                <h3>Vision</h3>
                <p>La visión de <dfn style="color: rgb(56,118,29); font-style: normal ; font-weight: bold">Ferti</dfn><dfn style="color: rgb(137,180,43); font-style: normal ; font-weight: bold">Nitro</dfn> es ser reconocida a nivel nacional e internacional como la empresa más confiable y rentable en producción y comercialización de urea y amoníaco de alta calidad.</p>
            </div>
        </div><div>
        <hr style="border-color: rgba(195, 35, 45, 0.92); border-width: 2px; border-radius: 2px;"></div>
        <br>
        <br>
    </div>
</body>
<footer>
    <div style="vertical-align: middle;background-color: #fbfbfb; background-image: url(/WIT/webroot/img/bodyTexture.png);">
        <table class="fertinitro" style="margin-bottom: .25rem">
            <tbody>
            <tr >
                <td valign="top" style="text-align: left; padding: 0;overflow: visible;max-width: 50%!important;height: 100%;">
                    <a href="http://www.pequiven.com" class="title-area large-2 medium-3 columns" style="width: 100%;height: 100%;color:red; margin: auto;padding: 1.65rem 0.75rem 0.75rem 0.75rem;">
                        <img style="size: auto;max-width: 100%;" src="/WIT/webroot/img/logopqv.png" alt="Pequiven">
                    </a>
                </td>
                <td style="float:right; padding: 0; max-width: 50%!important;height: 100%;display: inline-table;">
                    <a href="//10.10.0.74/fertinitro" class="title-area large-2 medium-3 columns right" style="width: 100%;height: 100%;color:#006600;margin: auto;padding: 1.65rem 0.75rem 0.75rem 0.75rem;">
                        <img style="size: auto;max-width: 100%;" src="/WIT/webroot/img/fertinitro.png" alt="FertiNitro">
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
        <table width="100%" style="    background-color: #fbfbfb;    background-image: url(/WIT/webroot/img/bodyTexture.png);    margin-bottom: 0;">
            <tbody>
            <tr style="border-bottom: none;height: auto;max-height: 50px;padding: 0;">
                <td style="text-align: left;padding: 0;width: 50%;padding-bottom: 0!important;padding-top: 0!important;max-width: 50%;">
                    <img style="    width: 100%;    max-width: 330px;    height: auto;max-height: 49px;size: auto;" src="/WIT/webroot/img/cintillo izquierda.png" width="330" height="49">
                </td>
                <td style="float:right; width: 50%;max-width: 186px;max-height: 50px;height: auto;padding: 0;overflow: hidden;margin-left: 3rem;display: inline-table;">
                    <img style=" width: 100%; max-width: 186px; height: auto; max-height: 49px; SIZE: auto; " src="/WIT/webroot/img/cintillo derecha.png" width="186" height="49">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</footer>
</html>
