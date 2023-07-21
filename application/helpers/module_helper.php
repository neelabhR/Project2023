<?php

if( ! function_exists('update_all_module_headers'))
{
    function update_all_module_headers()
    {
        return Module::$instance->update_all_module_headers();
    }
}



if( ! function_exists('update_module_headers'))
{
    function update_module_headers( $module )
    {
        return Module::$instance->update_module_headers( $module );
    }
}



if( ! function_exists('install_module'))
{
    function install_module( $module, $data = NULL )
    {
        return Module::$instance->install_module( $module, $data );
    }
}



if( ! function_exists('enable_module'))
{
   
    function enable_module( $module, $data = NULL )
    {
        return Module::$instance->enable_module( $module, $data );
    }
}



if( ! function_exists('disable_module'))
{

    function disable_module( $module, $data = NULL )
    {
        return Module::$instance->disable_module( $module, $data );
    }
}



if( ! function_exists('module_details'))
{
    function module_details( $module )
    {
        return Module::$instance->module_details( $module );
    }
}



if( ! function_exists('get_messages'))
{
    function get_messages( $type = NULL )
    {
        return Module::$instance->get_messages( $type );
    }
}



if( ! function_exists('print_messages'))
{
    function print_messages( $type = NULL )
    {
        return Module::$instance->print_messages( $type );
    }
}



if( ! function_exists('get_orphaned_Module'))
{
    function get_orphaned_Module()
    {
        return Module::$instance->get_orphaned_Module();
    }
}



if( ! function_exists('add_action'))
{
    function add_action( $tag, $function, $priority = 10 )
    {
        return Module::$instance->add_action( $tag, $function, $priority );
    }
}



if( ! function_exists('add_filter'))
{
    function add_filter( $tag, $function, $priority = 10 )
    {
        return Module::$instance->add_filter( $tag, $function, $priority );
    }
}



if( ! function_exists('get_actions'))
{
    function get_actions()
    {
        return Module::$instance->get_actions();
    }
}



if( ! function_exists('retrieve_Module'))
{
    function retrieve_Module()
    {
        return Module::$instance->retrieve_Module();
    }
}



if( ! function_exists('do_action'))
{
    function do_action( $tag, array $args = NULL )
    {
        
        return Module::$instance->do_action( $tag, $args );
    }
}



if( ! function_exists('remove_action'))
{
    function remove_action( $tag, $function, $priority = 10 )
    {
        return Module::$instance->remove_action( $tag, $function, $priority );
    }
}



if( ! function_exists('current_action'))
{
    function current_action()
    {
        return Module::$instance->current_action();
    }
}



if( ! function_exists('has_run'))
{
    function has_run( $action = NULL )
    {
        return Module::$instance->has_run( $action );
    }
}



if( ! function_exists('doing_action'))
{
    function doing_action( $action = NULL )
    {
        return Module::$instance->doing_action( $action );
    }
}



if( ! function_exists('did_action'))
{
    function did_action( $tag )
    {
        return Module::$instance->did_action( $tag );
    }
}
