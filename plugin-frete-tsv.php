<?php
/*
Plugin Name: Plugin Frete 
Plugin URI: https://www.diogenesjunior.com.br/
Description: Plugin para cálculo de frete baseado nas regras TSV
Author: Virtual Agência & Diogenes Junior
Version: 1.5.0
Author URI: http://www.diogenesjunior.com.br
*/
/**
*  ------------------------------------------------------------------------------------------------
*
*
*   URLs DE ATUALIZAÇÕES DO PLUGIN
*
*  ------------------------------------------------------------------------------------------------
*/
require "update/plugin-update-checker.php";
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://www.diogenesjunior.com.br/diretorios/plugins/plugin-frete-tsv/atualizacoes.json',
  __FILE__, //Full path to the main plugin file or functions.php.
  'plugin-frete-tsv'
);

/**
*  ------------------------------------------------------------------------------------------------
*
*
*   REGISTERS
*
*
*  ------------------------------------------------------------------------------------------------
*/
ini_set("display_errors", FALSE );
ini_set("log_errors", TRUE );
ini_set("error_log","log_erros_php.log");

add_action( 'wp_enqueue_scripts', 'misha_register_and_enqueue_tsv' );
 
function misha_register_and_enqueue_tsv() {

  $args = array(
        'homeurl' => get_option('home')
    );

  // DO PLUGIN
  wp_enqueue_style( 'style-tsv', get_option('home')."/wp-content/plugins/plugin-frete-tsv/css/style.css?v=".date("dmYHisu") );

}

/**
*  ------------------------------------------------------------------------------------------------
*
*
*   ACF
*
*
*  ------------------------------------------------------------------------------------------------
*/
if( function_exists('acf_add_local_field_group') ):

  require("acf/acf.php");

endif;

/**
*  ------------------------------------------------------------------------------------------------
*
*
*   VALORES PADRÕES
*
*
*  ------------------------------------------------------------------------------------------------
*/


  
add_action('wp_head', 'header_acf_tsv');

function header_acf_tsv() {

  if(get_option('campos_padrao_tsv')!="sim2"):
   
   $valores = array(
      "field_636c04e3f8418" => "GO", 
      "field_636c071af8419" => "Goiânia",
      "field_636c075af841a" => array(
                                  array("field_636c0784f841b"=>"10","field_636c078ff841c"=>60),
                                  array("field_636c0784f841b"=>"20","field_636c078ff841c"=>68),
                                  array("field_636c0784f841b"=>"30","field_636c078ff841c"=>76),
                                  array("field_636c0784f841b"=>"50","field_636c078ff841c"=>93),
                                  array("field_636c0784f841b"=>"70","field_636c078ff841c"=>104),
                                  array("field_636c0784f841b"=>"100","field_636c078ff841c"=>123),
                                  array("field_636c0784f841b"=>"150","field_636c078ff841c"=>137),
                                  array("field_636c0784f841b"=>"200","field_636c078ff841c"=>184),
                                  array("field_636c0784f841b"=>"999","field_636c078ff841c"=>930),
                                  array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>1830),
                                   ),
      "field_636c07aaf841d" => array(
                                  array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>89),
                                  array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>96),
                                  array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>102),
                                  array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>156),
                                  array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>160),
                                  array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>191),
                                  array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>250),
                                  array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>375),
                                  array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1870),
                                  array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>2430),
                                  )
   );
   
   add_row("field_636c04c6f8417", $valores, 175909);

   $valores = array(
    "field_636c04e3f8418" => "DF", 
    "field_636c071af8419" => "Brasília",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>61),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>72),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>82),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>104),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>118),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>143),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>164),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>228),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1100),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>1812),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>56),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>66),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>76),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>95),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>109),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>132),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>156),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>212),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1060),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>1975),
                                )
 );
  
   
   add_row("field_636c04c6f8417", $valores, 175909);





   $valores = array(
    "field_636c04e3f8418" => "MS", 
    "field_636c071af8419" => "Campo Grande",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>60),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>69),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>77),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>95),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>106),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>127),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>142),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>193),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1970),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2848),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>71),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>78),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>93),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>112),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>138),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>156),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>167),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>245),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1410),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>2297),
                                )
 );
  
   
   add_row("field_636c04c6f8417", $valores, 175909);





   $valores = array(
    "field_636c04e3f8418" => "MT", 
    "field_636c071af8419" => "Cuiabá",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>64),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>98),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>125),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>147),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>178),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>218),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>222),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>275),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1450),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2334),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>153),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>179),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>206),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>278),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>385),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>478),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>485),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>621),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>3105),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>4714),
                                )
 );
  
   
   add_row("field_636c04c6f8417", $valores, 175909);






   $valores = array(
    "field_636c04e3f8418" => "SP", 
    "field_636c071af8419" => "São Paulo",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>77),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>82),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>85),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>97),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>95),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>98),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>99),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>129),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1750),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2656),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>132),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>134),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>138),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>147),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>148),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>150),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>165),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>235),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1320),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>2214),
                                )
 );
  
   
   add_row("field_636c04c6f8417", $valores, 175909);




   $valores = array(
    "field_636c04e3f8418" => "RJ", 
    "field_636c071af8419" => "Rio de Janeiro",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>78),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>85),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>89),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>103),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>103),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>111),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>116),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>155),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1850),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2782),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>71),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>75),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>82),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>94),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>100),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>106),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>121),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>167),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1911),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>2865),
                                )
 );
  
   
   add_row("field_636c04c6f8417", $valores, 175909);





   $valores = array(
    "field_636c04e3f8418" => "MG", 
    "field_636c071af8419" => "Belo Horizonte",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>74),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>83),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>95),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>106),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>108),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>121),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>129),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>163),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1820),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2754),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>85),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>91),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>95),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>151),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>154),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>161),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>193),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>265),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1325),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>2219),
                                )
 );
  
   
   add_row("field_636c04c6f8417", $valores, 175909);





   $valores = array(
    "field_636c04e3f8418" => "ES", 
    "field_636c071af8419" => "Vitória",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>75),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>86),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>98),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>112),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>117),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>133),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>140),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>175),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1880),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2810),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>75),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>81),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>94),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>108),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>117),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>127),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>153),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>205),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1180),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>2030),
                                )
 );
  
   
   add_row("field_636c04c6f8417", $valores, 175909);







   $valores = array(
    "field_636c04e3f8418" => "PR", 
    "field_636c071af8419" => "Curitiba",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>73),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>83),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>95),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>104),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>106),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>118),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>124),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>155),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1780),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2682),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>86),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>93),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>99),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>112),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>116),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>121),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>150),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>210),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1110),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>1970),
                                )
 );

   
   add_row("field_636c04c6f8417", $valores, 175909);






   $valores = array(
    "field_636c04e3f8418" => "SC", 
    "field_636c071af8419" => "Florianópolis",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>74),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>80),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>85),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>100),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>105),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>113),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>132),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>170),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1850),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2743),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>67),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>76),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>81),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>110),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>138),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>145),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>145),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>235),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1175),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>1800),
                                )
 );
   
   
   add_row("field_636c04c6f8417", $valores, 175909);




   $valores = array(
    "field_636c04e3f8418" => "RS", 
    "field_636c071af8419" => "Porto Alegre",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>73),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>81),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>87),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>99),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>98),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>106),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>108),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>130),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1650),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2568),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>88),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>98),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>129),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>142),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>140),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>151),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>152),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>212),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1060),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>1926),
                                )
 );
   
   
   add_row("field_636c04c6f8417", $valores, 175909);





   $valores = array(
    "field_636c04e3f8418" => "TO", 
    "field_636c071af8419" => "Palmas",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>65),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>68),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>69),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>88),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>89),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>103),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>128),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>174),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>1990),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2911),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>92),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>116),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>120),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>138),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>155),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>182),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>156),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>334),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>1670),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>2536),
                                )
 );
   
   
   add_row("field_636c04c6f8417", $valores, 175909);




   $valores = array(
    "field_636c04e3f8418" => "RO", 
    "field_636c071af8419" => "Porto Velho",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>151),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>167),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>193),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>232),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>234),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>265),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>361),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>532),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>2930),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2930),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>202),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>224),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>244),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>291),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>295),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>335),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>461),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>686),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>3430),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>3430),
                                )
 );
   
   
   add_row("field_636c04c6f8417", $valores, 175909);




   $valores = array(
    "field_636c04e3f8418" => "AC", 
    "field_636c071af8419" => "Rio Branco",
    "field_636c075af841a" => array(
                                array("field_636c0784f841b"=>"10","field_636c078ff841c"=>166),
                                array("field_636c0784f841b"=>"20","field_636c078ff841c"=>184),
                                array("field_636c0784f841b"=>"30","field_636c078ff841c"=>212),
                                array("field_636c0784f841b"=>"50","field_636c078ff841c"=>255),
                                array("field_636c0784f841b"=>"70","field_636c078ff841c"=>257),
                                array("field_636c0784f841b"=>"100","field_636c078ff841c"=>292),
                                array("field_636c0784f841b"=>"150","field_636c078ff841c"=>397),
                                array("field_636c0784f841b"=>"200","field_636c078ff841c"=>585),
                                array("field_636c0784f841b"=>"999","field_636c078ff841c"=>2930),
                                array("field_636c0784f841b"=>"3999","field_636c078ff841c"=>2930),
                                 ),
    "field_636c07aaf841d" => array(
                                array("field_636c07aaf841e"=>"10","field_636c07aaf841f"=>222),
                                array("field_636c07aaf841e"=>"20","field_636c07aaf841f"=>246),
                                array("field_636c07aaf841e"=>"30","field_636c07aaf841f"=>268),
                                array("field_636c07aaf841e"=>"50","field_636c07aaf841f"=>320),
                                array("field_636c07aaf841e"=>"70","field_636c07aaf841f"=>325),
                                array("field_636c07aaf841e"=>"100","field_636c07aaf841f"=>369),
                                array("field_636c07aaf841e"=>"150","field_636c07aaf841f"=>507),
                                array("field_636c07aaf841e"=>"200","field_636c07aaf841f"=>755),
                                array("field_636c07aaf841e"=>"999","field_636c07aaf841f"=>3780),
                                array("field_636c07aaf841e"=>"3999","field_636c07aaf841f"=>3780),
                                )
 );
   
   
   add_row("field_636c04c6f8417", $valores, 175909);

      if (FALSE === get_option('campos_padrao_tsv')):
          add_option('campos_padrao_tsv',"sims2");
      else:
          update_option('campos_padrao_tsv',"sim2");
      endif;

  else:
    
     //update_field( 'field_636c04c6f8417', "", 175909 );
     if (FALSE === get_option('campos_padrao_tsv')):
      add_option('campos_padrao_tsv',"sims2");
      else:
          update_option('campos_padrao_tsv',"sim2");
      endif;

  endif;


  }

/**
*  ------------------------------------------------------------------------------------------------
*
*
*   DIOGENES COMPONENTES
*
*
*  ------------------------------------------------------------------------------------------------
*/
if( !class_exists('acf_plugin_repeater') ):

  require("componentes/diogenes.php");

endif;


/**
*  ------------------------------------------------------------------------------------------------
*
*
*   SHORTCODE (FUTURA)
*
*
*  ------------------------------------------------------------------------------------------------
*/
function funcao_calcexpress_tsv( $atts ){

}

add_shortcode('calculadora_express_tsv', 'funcao_calcexpress_tsv');




/**
*  ------------------------------------------------------------------------------------------------
*
*
*   PAGE ADMIN TEMPLATES
*
*
*  ------------------------------------------------------------------------------------------------
*/
add_action( 'admin_menu', 'wpse_tsv_register' );

function wpse_tsv_register()
{ 
    // PRINCIPAL
    add_menu_page(
        'Frete T',     // page title
        'Frete T',     // menu title
        'manage_options',   // capability
        'tsv-ppc',     // menu slug
        'tsv_render' // callback function
    );


}

function tsv_render(){

    $file = plugin_dir_path( __FILE__ ) . "templates/dashboard.php";

    if ( file_exists( $file ) )
        require $file;

}


/**
*  ------------------------------------------------------------------------------------------------
*
*
*   LÓGICA DO ENVIO
*
*
*  ------------------------------------------------------------------------------------------------
*/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
    function fretetsv_shipping_method() {
        if ( ! class_exists( 'EntregaKm_Shipping_Method' ) ) {
            class Tsv_Shipping_Method extends WC_Shipping_Method {
                /**
                 * Constructor for your shipping class
                 *
                 * @access public
                 * @return void
                 */
                public function __construct() {
                    $this->id                 = 'pfretetsv'; 
                    $this->method_title       = __( get_field("nome_do_metodo_de_envio",175909), 'pfretetsv' );  
                    $this->method_description = __( get_field("descricao_do_metodo_de_envio",175909), 'pfretetsv' ); 
          
                    // Availability & Countries
                    $this->availability = 'including';
                    $this->countries = array(
                        'BR'
                        );

                    $this->init();
 
                    $this->enabled = isset( $this->settings['enabled'] ) ? $this->settings['enabled'] : 'yes';
                    $this->title = isset( $this->settings['title'] ) ? $this->settings['title'] : __( get_field("nome_do_metodo_de_envio",175909), 'pfretetsv' );
                }
 
                /**
                 * Init your settings
                 *
                 * @access public
                 * @return void
                 */
                function init() {
                    // Load the settings API
                    $this->init_form_fields(); 
                    $this->init_settings(); 
 
                    // Save settings in admin if you have any defined
                    add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
                }
 
                /**
                 * Define settings field for this shipping
                 * @return void 
                 */
                function init_form_fields() { 
 
                    // We will add our settings here
                    $this->form_fields = array(
 
                       'enabled' => array(
                            'title' => __( 'Habilitar', 'pfretetsv' ),
                            'type' => 'checkbox',
                            'description' => __( 'Habilitar Frete TSV', 'pfretetsv' ),
                            'default' => 'yes'
                            ),
               
                       'title' => array(
                          'title' => __( 'Título', 'pfretetsv' ),
                            'type' => 'text',
                            'description' => __( 'Título desse método de entrega no site', 'pfretetsv' ),
                            'default' => __( get_field("nome_do_metodo_de_envio",175909), 'pfretetsv' )
                            ),

                        'cep' => array(
                          'title' => __( 'CEP Origem', 'pfretetsv' ),
                            'type' => 'text',
                            'description' => __( 'O CEP de origem para cálculo da entrada expressa (exemplo 9999-999)', 'pfretetsv' ),
                            'default' => __( get_field("cep_de_origem",175909), 'pfretetsv' )
                            ),

               );
 
                }
 
                /**
                 * This function is used to calculate the shipping cost. Within this function we can check for weights, dimensions and other parameters.
                 *
                 * @access public
                 * @param mixed $package
                 * @return void
                 */
                function calculate_shipping( $package = null ) {
                    
                  
                    $cep = $package["destination"]["postcode"];

                    global $woocommerce;
      
                    $items = $woocommerce->cart->get_cart();
                    $peso_total = 0;

                    // RECUPERAR O PESO TOTAL DO PRODUTO
                    foreach($items as $item => $values) { 
                       
                        $_product =  wc_get_product( $values['data']->get_id());
                        
                        if($_product->get_weight()):
                          $peso_total = $_product->get_weight() * $values['quantity'];
                        endif;
                       
                    } 

                  
                    $achei = 0;
                    $ultima_distancia = -1;

                    $cep_de_origem                           = get_field("cep_de_origem",175909);
                    $valor_minimo_cobranca                   = get_field("valor_minimo_cobranca",175909);
                    $taxa_de_servico_fixa                    = get_field("taxa_de_servico_fixa",175909);
                    $valor_fixo_caso_localidade_nao_atendida = get_field("valor_fixo_caso_localidade_nao_atendida",175909);
                    $tempo_de_entrega                        = "";

                     // LOAD THE WC LOGGER
                     $logger = wc_get_logger();
                     $logger->info( "CORRESPONDENCIA: ".$ultima_distancia, array( 'source' => 'frete-tsv' ) );

                     $xml = simplexml_load_file('https://maps.googleapis.com/maps/api/geocode/xml?components=postal_code:'.$cep.'|country:BR&key=AIzaSyCUGRiH2iey-c2WqqeegGF2qpxBDNLsmfQ');

                     $ts1 =  $xml->result->address_component[0]->short_name; 

                     $ts2 =  $xml->result->address_component[1]->short_name;

                     $ts3 =  $xml->result->address_component[2]->short_name;

                     $ts4 =  $xml->result->address_component[3]->short_name;

                     $ts5 =  $xml->result->address_component[4]->short_name;
                    
                     if($ts3=="") $ts3 = $ts2;
                     if($ts4=="") $ts4 = $ts3;
                     if($ts5=="") $ts5 = $ts4;

                     $logger->info( "DEBUG: (PESO TOTAL: ".$peso_total.") ".$ts1." / ".$ts2." / ".$ts3." / ".$ts4." / ".$ts5." / ", array( 'source' => 'frete-tsv' ) ); // 4 = CIDADE e 5 = ESTADO (uf)
                                  
                     $valor_cobrado_peso = 0;
                    
                     // CONSULTAR O VALOR DA LOCALIDADE
                     if( have_rows('regras_de_valores',175909) ):
                        while ( have_rows('regras_de_valores',175909) ) : the_row();

                            $logger->info( "DEBUG ESTADO: ".get_sub_field("uf")." / ".$ts5, array( 'source' => 'frete-tsv' ) ); // 4 = CIDADE e 5 = ESTADO (uf)

                            // PRIMEIRO BATEMOS A UF
                            if(strripos(get_sub_field("uf"), $ts5) !== FALSE || strripos(get_sub_field("uf"), $ts4) !== FALSE || strripos(get_sub_field("uf"), $ts3) !== FALSE):

                                $achei = 1;
                                

                                // DEPOIS BATEMOS A CIDADE (ESPECIFICA)
                                if(strripos(get_sub_field("cidade_especifica"), $ts4) !== FALSE || strripos(get_sub_field("cidade_especifica"), $ts3) !== FALSE || strripos(get_sub_field("cidade_especifica"), $ts2) !== FALSE):

                                      $tmp = get_sub_field("tempo_de_entrega");

                                      if( have_rows('valor_cidade_especifica') ):
                                          while ( have_rows('valor_cidade_especifica') ) : the_row();
                                                if(get_sub_field("kg") <= $peso_total ):
                                                    $valor_cobrado_peso = get_sub_field("valor");
                                                    if($tmp) $tempo_de_entrega = "(".$tmp.")";
                                                endif;
                                          endwhile;
                                      endif;

                                // DEMAIS CIDADES
                                else:

                                      $tmp = get_sub_field("tempo_de_entrega_demais_localidades");

                                      if( have_rows('valor_demais_cidades') ):
                                        while ( have_rows('valor_demais_cidades') ) : the_row();
                                             if(get_sub_field("kg") <= $peso_total ):
                                                  $valor_cobrado_peso = get_sub_field("valor");
                                                  if($tmp) $tempo_de_entrega = "(".$tmp.")";
                                              endif;
                                        endwhile;
                                      endif;

                                endif;

                                break;

                            endif;
                     
                        endwhile;
                     endif;
                     // FIM CONSULTA VALOR LOCALIDADE

                     if($valor_cobrado_peso<$valor_minimo_cobranca):
                        $valor_cobrado_peso = $valor_minimo_cobranca;
                     endif;

                     if($taxa_de_servico_fixa>0):
                        $valor_cobrado_peso = $valor_cobrado_peso + $taxa_de_servico_fixa;
                     endif;

                     if($achei==0 && $valor_fixo_caso_localidade_nao_atendida != -1):
                        $valor_cobrado_peso = $valor_fixo_caso_localidade_nao_atendida; 
                     endif;
                    
                     if($achei==0 && $valor_fixo_caso_localidade_nao_atendida == -1):
                     
                     else:

                          // MONTAR O RETORNO
                          $rate = array(
                            'id'    => $this->id."TSV",
                            'label' => $this->title ." ".$tempo_de_entrega,
                            'cost'  => $valor_cobrado_peso
                          );

                          $this->add_rate( $rate );
                     
                    endif;
                                 
                }
            }
        }
    }
 
    add_action( 'woocommerce_shipping_init', 'fretetsv_shipping_method' );
 
    function add_tsv_shipping_method( $methods ) {
        $methods[] = 'Tsv_Shipping_Method';
        return $methods;
    }
 
    add_filter( 'woocommerce_shipping_methods', 'add_tsv_shipping_method' );
}
//add_action( 'woocommerce_review_order_before_cart_contents', 'pfretetsv_validate_order' , 10 );

?>