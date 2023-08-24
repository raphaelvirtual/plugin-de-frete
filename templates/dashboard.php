<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // SAIR DA PÁGINA SE ACESSADA DIRETAMENTE PELO NAVEGADOR HTTP 80
}

	wp_enqueue_style( 'style-tailwind-css-tsv', get_site_url()."/wp-content/plugins/plugin-frete-tsv/css/tailwind2dio.css?v=".date("dmYHisu") );

?>
<style type="text/css">
	.wrap h1{
		display: none;
	}
	.diogenes-box{
		position: relative;
	    display: block;
	    background: #fff;
	    border: 0px solid #ccc;
	    padding: 30px;
	    padding-top: 20px;
	    padding-bottom: 65px;
	    margin-top: 25px;
	    border-radius: 14px;
		width: 95%;
	}

	.diogenes-col{
		position: relative;
		display: block;
		width: 90%;
	}

	.diogenes-col h2.titulo{
		font-size: 24px;
	}

	.stats-box{
      padding-top: 22px;
	}

	.stats-box .stats{
		position: relative;
	    display: inline-block;
	    float: none;
	    background: #f0f0f0;
	    width: 25%;
	    margin-right: 14px;
	    margin-bottom: 20px;
	    padding: 20px;
	    border-radius: 20px;
	    padding-top: 0px;
	}
    
    .stats-box .stats h2{
    	 font-weight: bold;
	    font-size: 32px;
	    line-height: unset;
	    text-align: right;
	    line-height: 2px;

    }
	.stats-box .stats h2 small{
		display: block;
	    font-weight: bold;
	    font-size: 15px;
	    color: #000;
	    padding-bottom: 16px;
	    float: left;
	}

	.stats-box .stats a, .stats-box .stats a:hover{
		height: auto;
	    padding: 0 16px;
	    float: right;
	    margin: 0 0px 0 0;
	    border-radius: 5px;
	    border: 1px solid #FFF;
	    background: 0;
	    font: 600 10px/31px "Poppins",Arial,sans-serif;
	    color: #FFF;
	    background: #CB17A5;
	    text-decoration: none;
	}
	/*

	.diogenes-box table{
		position: relative;
	    background: #f2f2f2;
	    width: 500px;
	    max-width: 100%;
	    margin-top: 30px;
	}
	#retornoFiltroCotas table{
		padding: 20px;
	}

	#retornoFiltroCotas table thead{
		text-align: left !important;
	}

	#retornoFiltroCotas table thead th{
		padding-bottom: 10px;
	    border-bottom: 1px solid #ccc;
	    padding-top: 10px;
	}
	*/

	.acf-form-submit{
		padding-top: 20px;
	}

	footer{
		text-align: right;
	}
	


/*---------------------------------
	GERAIS
-----------------------------------*/
section.listagem-clone-ifood-diogenes{
	position: relative;
	display: block;
	font-family: Arial;
}



section.listagem-clone-ifood-diogenes ul#tabstb{
  padding-left: 0px;
  margin-left: 0px;
  list-style: none;
  overflow-x: hidden;
  overflow-y: hidden;
  padding-bottom: 0px;
  margin-bottom: -8px;
}

@media(max-width: 540px){

	section.listagem-clone-ifood-diogenes ul#tabstb{
		overflow-x: scroll;
	}
	section.listagem-clone-ifood-diogenes ul#tabstb::-webkit-scrollbar-track {
	    background-color: #F4F4F4;
	    height: 3px;
	    width: 1px;
	    opacity: 0;
	}
	section.listagem-clone-ifood-diogenes ul#tabstb::-webkit-scrollbar {
	    width: 1px;
	    height: 3ox;
	    background: #F4F4F4;
	    opacity: 0;
	}
	section.listagem-clone-ifood-diogenes ul#tabstb::-webkit-scrollbar-thumb {
	    background: #ccc;
	    height: 3px;
	    width: 1px;
	    opacity: 0;
	}

}


section.listagem-clone-ifood-diogenes ul#tabstb li{
  opacity: 0.45;
  -webkit-transition:all 300ms ease;-moz-transition:all 300ms ease;transition:all 300ms ease;
  border-bottom: 3px solid transparent;
  width: auto;
  min-width: 107px;
  text-align: center;
  font-family: Arial;
  font-size: 14px;
  height: 22px;
  line-height: 17px;
}

section.listagem-clone-ifood-diogenes ul#tabstb li a,
section.listagem-clone-ifood-diogenes ul#tabstb li a:hover,
section.listagem-clone-ifood-diogenes ul#tabstb li a:focus{
	color: #000;
	text-decoration: none;
	outline: none !important;
	border: none !important;
	box-shadow: none !important;
	font-weight: normal !important;
}

section.listagem-clone-ifood-diogenes ul#tabstb  .border-t.border-r.border-l{
	  border-bottom: 3px solid #317ded;
    border-radius: 0;
    opacity: 1;
    
    text-align: center;
    
}

/*
@media(max-width: 540px){
	section.listagem-clone-ifood-diogenes ul#tabstb {
	    padding-left: 0px;
	    margin-left: 0px;
	    list-style: none;
	    display: block;
	}
	section.listagem-clone-ifood-diogenes ul#tabstb li {
	    position: relative;
	    display: block;
	    width: 100%;
	}
}
*/


#tab-contentstb{
	position: relative;
	margin-top: 0px;
}
#tab-contentstb ul{
  margin-left: 0;
  padding-left: 0;
}
#tab-contentstb li{
  list-style: none !important;
  margin-bottom: 38px;
}

#tab-contentstb .lista-attr{
  padding-bottom: 12px;
}

#tab-contentstb .conteudo-produto{
   width: calc(100% - 163px);
}

#tab-contentstb .conteudo-produto h3{
  font-size: 18px;
  font-weight: bold;
}

#tab-contentstb .conteudo-produto p{
  color: #747474;
  font-size: 14px;
  margin-top: -7px;
  line-height: 20px;
  margin-bottom: 4px;
}

#tab-contentstb a.limpar-escolhas,
#tab-contentstb a.limpar-escolhas:hover{
  font-size: 14px;
  color: #747474;
}

#tab-contentstb button,
#tab-contentstb button:hover{
  color:#fff !important;
}

#tab-contentstb .conteudo-produto h4{
  margin-top: 0px;
    font-size: 18px;
    font-weight: bold;
}

#tab-contentstb .variacao{
  margin-bottom: 32px;
}
#tab-contentstb .variacao .form-check{
	margin-bottom: 10px;
  font-size: 14px;
}

#tab-contentstb .input-quantidade{
  height: 36px;
  border-radius: 4px;
  border: 1px solid #ccc !important;
  text-align: center;
  max-width: 100px;
}

#tab-contentstb .btn-do-produto{
  border: none !important;
  height: 40px !important;
  cursor: pointer;
  background: #ef4444;
}


#tab-contentstb .capa-produto{
  float: right;
  width: 120px;
  height: 120px;
  border-radius: 12px;
  position: relative;
  display: block;
  top: -105px;
}

#tab-contentstb label.nome-atributo{
  margin-top: 25px;
  display: block;
  margin-bottom: 5px;
  font-size: 16px;
} 

@media(max-width: 540px){
			#tab-contentstb .conteudo-produto {
			    width: calc(100% - 116px);
			}
			#tab-contentstb .capa-produto {
		    float: right;
		    width: 90px;
		    height: 90px;
		    border-radius: 12px;
		    position: relative;
		    display: block;
		    top: -199px;
		}
}

#tab-contentstb ul{
  padding-left: 0;
  margin-left: 0;
  list-style: none;
}

#tab-contentstb ul li{
  padding-bottom: 30px;
}

.retorno-chamadas-ajax{
	margin-top:20px;
	margin-bottom:20px;
	width:500px;
	max-width:100%;
}

.mini-dashboard-actions{
	margin-top:30px;
	margin-bottom:30px;
}
.mini-dashboard-actions button{
	border:none !important;
	cursor: pointer;
}

.jconfirm-box-container.jconfirm-animated{
	max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

input,
select{
	width:100% !important;
	max-width: 100% !important;
}

#cat0tb #message{
  margin-top: 30px;
    margin-bottom: 25px;
    background: #a5f1b9;
    font-weight: bold;
    font-size: 1.2em;
    color: #000;
}

#cat0tb #message p{
  font-size: 18px;
    color: #212121;
}

#cat0tb .acf-button.button.button-primary.button-large{
  font-size: 18px;
    font-weight: bold;
    padding-top: 12px;
    padding-bottom: 15px;
}


</style>

<div class="diogenes-box tailwind-diogenes">
   
   <div class="diogenes-col area-vendedores-endpoint">
     					
     		  <h3 class="text-6xl" style="font-weight: bold;">
     		    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/07/logo-horizontal.png" style="width: 200px;height: auto;vertical-align: middle;margin-right: 14px;" alt=""> 
     		  </h3>	
          <h3 class="text-2xl" style="font-weight: normal;">
            Opções de frete para WooCommerce Tabela Personalizada
			     
          </h3>
     		  <p>&nbsp;</p>
			 

				<!-- ABAS -->
				<section class="diogenes-tailwind listagem-clone-ifood-diogenes">
          
						<section class="abas-ifood-diogenes">

							<ul id="tabstb" class="items inline-flex pt-2 px-1 w-full border-b">

									<li class="item-child bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px">
										<a id="default-tab" href="#cat0tb">
										  Configurações de frete
										</a>
									</li>

							</ul>

							<!-- Tab Contents -->
							<div id="tab-contentstb">

									<!-- TAB 1: HISTÓRICO DE EVENTOS -->
									<div id="cat0tb" class=" p-2">
									    
                  <?php acf_form_head(); ?>
                  <div id="primary" class="content-area">
                      <div id="content" class="site-content" role="main">
                    
                      <?php acf_form(array(
                          'post_id'       => 175909,
                          'post_title'    => false,
                          'post_content'  => false,
                          'submit_value'  => __('Atualizar Informações'),
                          'html_updated_message'  => '<div id="message" class="updated"><p>Informações atualizadas com sucesso!</p></div>',
                      )); ?>
                  
                      </div><!-- #content -->
                  </div><!-- #primary -->

                  <p>&nbsp;</p>
                  <p>&nbsp;</p>


									</div>
									<!-- TAB 1: HISTÓRICO DE EVENTOS -->

									<!-- TAB 2: SOLICITAÇÕES DE SAQUE 
									<div id="cat1tb" class="hidden p-2">
										Solicitações de saque (cash-out)
									</div>
									TAB 2: SOLICITAÇÕES DE SAQUE -->

									<!-- TAB 3: CONFIGURAÇÕES DA API -->
									<div id="cat2tb" class="hidden p-2">
										

									</div>
									<!-- TAB 3: CONFIGURAÇÕES DA API -->



							</div>


                		</section>
				</section>
				<!-- ABAS -->
	  
   </div>

</div>






<script>


				/**
				*  ------------------------------------------------------------------------------------------------
				*
				*
				*   ABAS DAS CATEGORIAS
				*
				*
				*  ------------------------------------------------------------------------------------------------
				*/
				let tabsContainer = document.querySelector("#tabstb");

				let tabTogglers = tabsContainer.querySelectorAll("#tabstb a");

				//console.log(tabTogglers);

				tabTogglers.forEach(function(toggler) {

						toggler.addEventListener("click", function(e) {

							e.preventDefault();

							let tabName = this.getAttribute("href");

							let tabContents = document.querySelector("#tab-contentstb");

							for (let i = 0; i < tabContents.children.length; i++) {
							
							tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");  tabContents.children[i].classList.remove("hidden");
							if ("#" + tabContents.children[i].id === tabName) {
								continue;
							}
							
							tabContents.children[i].classList.add("hidden");
							
							}
							
							e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");

						});

				});

</script>