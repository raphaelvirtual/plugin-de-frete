/**
*  ------------------------------------------------------------------------------------------------
*
*
*   GERAIS
*
*
*  ------------------------------------------------------------------------------------------------
*/
// INSTANCIAR O OWL CARROUSEL
      var imoveisVistaCarrousel = jQuery('#imoveisVistaCarrousel').owlCarousel({
         loop: true,
         margin: 30,
         items: 3.5,
         autoplay: true,
         center: true,
         responsive : {
            0 : {
                items: 1,
            },
            460: {
                items: 1,
            },
            960 : {
                items: 2.5,
            },
            1024 : {
                items: 2.5,
            },
            1200 : {
                items: 3.5,
            }
        }
         //dotsContainer: '#carousel-custom-dots',
      });



      var imoveisVistaCarrouselCodigos = jQuery('#imoveisVistaCarrouselCodigos').owlCarousel({
         loop: true,
         margin: 30,
         items: 3.5,
         autoplay: true,
         center: true,
         responsive : {
            0 : {
                items: 1,
            },
            460: {
                items: 1,
            },
            960 : {
                items: 2.5,
            },
            1024 : {
                items: 2.5,
            },
            1200 : {
                items: 3.5,
            }
        }
         //dotsContainer: '#carousel-custom-dots',
      });


      var imoveisVistaGaleriaCarrousel = jQuery('#imoveisVistaGaleriaCarrousel').owlCarousel({
                loop:true,
                margin:10,
                items: 2.5,
                autoplay: true,
                center: true,
                navText: [
                    '<img src="/wp-content/plugins/plugin-api-netmoveis/images/esquerda.svg" alt="Imagem anterior">',
                    '<img src="/wp-content/plugins/plugin-api-netmoveis/images/direita.svg" alt="Próxima Imagem">'
                ], 
                navContainer: '.custom-nav-banner2',
                autoplayTimeout:6500,
                //dotsContainer: '#carousel-custom-dots',
                autoplayHoverPause:true,
                responsive : {
                    0 : {
                        items: 1.5,
                    },
                    460: {
                        items: 1.5,
                    },
                    960 : {
                        items: 2.5,
                    },
                    1024 : {
                        items: 2.5,
                    },
                    1200 : {
                        items: 2.5,
                    }
                }                                      
     });


/**
*  ------------------------------------------------------------------------------------------------
*
*
*   MÉTODOS FRONT-END
*
*
*  ------------------------------------------------------------------------------------------------
*/

// PAGINAR
function netmoveis_paginacao(parametros){
    
    console.log("TENTANDO PÁGINAR");
    jQuery(".vista-imoveis-section").append(`<p id="netmoveisCarregandoConteudo" style="position:relative;display:block;width:100%;text-align:center;padding-top:50px;">Carregando...</p>`);

    axios.get('/wp-json/netmoveis/v2/paginacao/?'+parametros)
      .then(function (response) {
        // DEU CERTO
        console.log(response);
        if(response.data){
        
            jQuery("#netmoveisCarregandoConteudo").remove();
            jQuery(".vista-imoveis-section").append(response.data);
        
        }else{

            jQuery("#netmoveisCarregandoConteudo").remove();
            jQuery("#netmoveisCarregandoConteudo").append(`Todos os resultados foram exibidos`);

        }
      })
      .catch(function (error) {
        
        // ALGO DEU ERRADO
        console.log(error);
        jQuery("#netmoveisCarregandoConteudo").remove();
        jQuery("#netmoveisCarregandoConteudo").append(`Todos os resultados foram exibidos`);

      })
      .then(function () {
        // EXECUTADO TODAS AS VEZES
      });

}


// SUBSTITUIR TODA A CONSULTA
function netmoveis_novaconsulta(parametros){
    
    console.log("TENTANDO BUSCAR NOVA CONSULTA");
    jQuery(".vista-imoveis-section").html(`<p id="netmoveisCarregandoConteudo" style="position:relative;display:block;width:100%;text-align:center;padding-top:50px;">Carregando...</p>`);

    axios.get('/wp-json/netmoveis/v2/paginacao/?'+parametros)
      .then(function (response) {
        // DEU CERTO
        console.log(response);
        if(response.data){
        
            jQuery("#netmoveisCarregandoConteudo").remove();
            jQuery(".vista-imoveis-section").html(response.data);
        
        }else{

            jQuery("#netmoveisCarregandoConteudo").remove();
            jQuery("#netmoveisCarregandoConteudo").html(`Nenhum imóvel retornado`);

        }
      })
      .catch(function (error) {
        
        // ALGO DEU ERRADO
        console.log(error);
        jQuery("#netmoveisCarregandoConteudo").remove();
        jQuery("#netmoveisCarregandoConteudo").html(`Nenhum imóvel retornado`);

      })
      .then(function () {
        // EXECUTADO TODAS AS VEZES
      });

}


// FAZER UM FILTRO TOTAL
function netmoveis_filtroatual(tipoLocal,nomeLocal){

   console.log("FILTRANDO OS RESULTADOS ATUAIS NA PÁGINA");
  
   if(tipoLocal=="cidade"){
        jQuery(".vista-imoveis.vista-imoveis-col").hide();
        jQuery(`.vista-imoveis.vista-imoveis-col[data-cidade='${nomeLocal}']`).fadeIn(500);
   }

   if(tipoLocal=="bairro"){
        jQuery(".vista-imoveis.vista-imoveis-col").hide();
        jQuery(`.vista-imoveis.vista-imoveis-col[data-bairro='${nomeLocal}']`).fadeIn(500);
   }

   if(nomeLocal=="todos"){
       jQuery(".vista-imoveis.vista-imoveis-col").fadeIn(500);
   }

}














      