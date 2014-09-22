<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('show_menu')) {

    function show_menu($codi_rol = "0") {
        if ($codi_rol == "1") {
            // Menu para Administrador
            return
                    '<li><a href="' . base_url('home') . '">Inicio</a></li>' .
                    '<li><a href="' . base_url('venta') . '">Ventas</a></li>' .
                    '<li><a href="' . base_url('compra') . '">Compras</a></li>' .
                    '<li><a href="' . base_url('inventario') . '">Inventario</a></li>' .
                    '<li class="treeview"><a href="#"><span>Registros</span><i class="fa pull-right fa-angle-down"></i></a>' .
                        '<ul class="treeview-menu" style="display: none;">' .
                            '<li><a href="' . base_url('usuario') . '"><i class="fa fa-angle-double-right"></i>Usuario</a></li>' .
                            '<li><a href="' . base_url('proveedor') . '"><i class="fa fa-angle-double-right"></i>Proveedor</a></li>' .
                            '<li><a href="' . base_url('cliente') . '"><i class="fa fa-angle-double-right"></i>Cliente</a></li>' .
                            '<li><a href="' . base_url('empleado') . '"><i class="fa fa-angle-double-right"></i>Empleado</a></li>' .
                            '<li><a href="' . base_url('producto') . '"><i class="fa fa-angle-double-right"></i>Producto</a></li>' .
                            '<li><a href="' . base_url('caja') . '"><i class="fa fa-angle-double-right"></i>Caja</a></li>' .
                        '</ul>' .
                    '</li>' .
                    '<li><a href="' . base_url('reporte') . '">Reportes</a></li>' .
                    '<li><a href="' . base_url('ajustes') . '">Ajustes</a></li>';
            
        } else if ($codi_rol == "2") {
            // Menu para Usuario
            return
                    '<li><a href="' . base_url('home') . '">Inicio</a></li>' .
                    '<li><a href="' . base_url('venta') . '">Ventas</a></li>' .
                    '<li><a href="' . base_url('compra') . '">Compras</a></li>' .
                    '<li><a href="' . base_url('inventario') . '">Inventario</a></li>' .
                    '<li><a href="' . base_url('reporte') . '">Reportes</a></li>';
            
        } else {
            return '<li><a href="' . base_url() . 'login">Inicio de sesión</a></li>';
        }
    }

}