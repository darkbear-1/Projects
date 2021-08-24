jQuery(document).ready(function(){
  jQuery(document).on("DOMNodeInserted", function (event) {
    jQuery("input[type=tel]:not(#cbkPhoneInput):not(.ws-preform-input)").inputmask({"mask": "+7999-999-99-99"});
  })

  function sendMail(form) {
      jQuery.ajax({
            url:     '/wp-content/themes/rgtheme/mail.php', //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: form,  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
               if (response) {
                    location.href = '/thank-you/';
                  }
          },
          error: function(response) { // Данные не отправлены

          }
       });
    }

    function sendForm(formClass) {
      formClass.each(function() {
        jQuery(this).submit(function(e) {
            e.preventDefault();
            if (jQuery(this).hasClass("get-price__form")) {
              window.open('https://ufaprom.ru/wp-content/uploads/2021/03/Каталог-2021-new.pdf', '_blank');
            }
            var $_GET = {};
            document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
                function decode(s) {
                    return decodeURIComponent(s.split("+").join(" "));
                }
            
                $_GET[decode(arguments[1])] = decode(arguments[2]);
            });
            sendMail(jQuery(this).serialize() + "&utm_source=" + $_GET["utm_source"]);
          });
      })
    }
    sendForm(jQuery(".send-form:not(.zapros-scheta__form--obratnaya)"));

    jQuery(".hide-modal").click(function() {
      if (jQuery(this).hasClass("pu-close")) {
        jQuery(this).parent().hide();
      } else {
        jQuery(this).parent().parent().hide();
      }
    })

  jQuery('.header__city-select').each(function(){
  		// Variables
  		var jQuerythis = jQuery(this),
  			selectOption = jQuerythis.find('option'),
  			selectOptionLength = selectOption.length,
  			selectedOption = selectOption.filter(':selected'),
  			dur = 0;

  		jQuerythis.hide();
  		// Wrap all in select box
  		jQuerythis.wrap('<div class="select"></div>');
  		// Style box
  		jQuery('<button>',{
  			class: 'select__gap',
  			text: jQuery(this).find("option").eq(0).text()
  		}).insertAfter(jQuerythis);

  		var selectGap = jQuerythis.next('.select__gap'),
  			caret = selectGap.find('.caret');
  		// Add ul list
  		jQuery('<ul>',{
  			class: 'select__list'
  		}).insertAfter(selectGap);

  		var selectList = selectGap.next('.select__list');
  		// Add li - option items
  		for(var i = 1; i < selectOptionLength; i++){
  			jQuery('<li>',{
  				class: 'select__item',
  				html: jQuery('<span>',{
  					text: selectOption.eq(i).text()
  				})
  			})
  			.attr('data-value', selectOption.eq(i).val())
  			.appendTo(selectList);
  		}
  		// Find all items
  		var selectItem = selectList.find('li');

  		selectList.slideUp(0);
  		selectGap.on('click', function(){
        jQuery(this).removeClass("select__gap--active")
  			if(!jQuery(this).hasClass('on')){
        jQuery(this).addClass("select__gap--active")
  				jQuery(this).addClass('on');
  				selectList.slideDown(dur);

  				selectItem.on('click', function(){
  					var chooseItem = jQuery(this).data('value');
  					jQuery(this).parent().prev().prev().val(chooseItem).change();
  					selectGap.text(jQuery(this).find('span').text());

  					selectList.slideUp(dur);
  					selectGap.removeClass('on');
  				});

          var thisObj = jQuery(this)

            jQuery(document).mouseup(function (e){
          		if (!jQuery(e.target).closest('.select__gap').length) {
                thisObj.removeClass('on');
        				selectList.slideUp(dur);
                thisObj.removeClass("select__gap--active")
          		}
        	   });

  			} else {
  				jQuery(this).removeClass('on');
  				selectList.slideUp(dur);
  			}
  		});

  	});

    jQuery(".select__item").click(function() {
      jQuery(".header__city-name").text(jQuery(this).attr("data-value"));
    })

    jQuery(".catalog__choice-btn").click(function() {
      jQuery(".catalog__choice-btn").removeClass("catalog__choice-btn--active")
      jQuery(".catalog__choice").removeClass("catalog__choice--active")
      jQuery(this).addClass("catalog__choice-btn--active")
      if (jQuery(this).attr("data-type") == 'type')
        jQuery(".catalog__choice--type").addClass("catalog__choice--active")
      else
        jQuery(".catalog__choice--appointment").addClass("catalog__choice--active")
    })

    jQuery('#akcii__slider').owlCarousel({
      items: 1,
      slideSpeed: 500,
      loop: true,
      nav: false,
      dots: true,
      margin: 20,
      autoplay: false,
      autoplayTimeout: 6000,
      paginationSpeed : 6000,
      rewindSpeed : 6000,
      stopOnHover : true,
      responsive: {
       // Ширина от 500 пикселей
       1024: {
         // Количество элементов 2
         items: 1
       },
       768: {
          // Количество элементов 2
          items: 3
        },
       // Ширина от 800 пикселей
       100: {
         // Количество элементов 3
         items: 1
       }
      }
    });

    jQuery('#about__slider').owlCarousel({
      items: 3,
      slideSpeed: 500,
      loop: true,
      nav: true,
      dots: true,
      margin: 20,
      autoplay: false,
      autoplayTimeout: 6000,
      paginationSpeed : 6000,
      rewindSpeed : 6000,
      stopOnHover : true,
      navText : [
        '<i class="owl__arrows owl__arrows--left fas fa-chevron-left"></i>',
        '<i class="owl__arrows owl__arrows--right fas fa-chevron-right"></i>'
      ],
      responsive: {
       // Ширина от 500 пикселей
       1024: {
         // Количество элементов 2
         items: 3
       },
       768: {
          // Количество элементов 2
          items: 3
        },
       // Ширина от 800 пикселей
       100: {
         // Количество элементов 3
         items: 1
       }
      }
    });

    jQuery('#about__slider_sklad').owlCarousel({
      items: 3,
      slideSpeed: 500,
      loop: true,
      nav: true,
      dots: true,
      margin: 20,
      autoplay: false,
      autoplayTimeout: 6000,
      paginationSpeed : 6000,
      rewindSpeed : 6000,
      stopOnHover : true,
      navText : [
        '<i class="owl__arrows owl__arrows--left fas fa-chevron-left"></i>',
        '<i class="owl__arrows owl__arrows--right fas fa-chevron-right"></i>'
      ],
      responsive: {
       // Ширина от 500 пикселей
       1024: {
         // Количество элементов 2
         items: 3
       },
       768: {
          // Количество элементов 2
          items: 3
        },
       // Ширина от 800 пикселей
       100: {
         // Количество элементов 3
         items: 1
       }
      }
    });


    jQuery(".projects-sinlge__slider-list").each(function(){
      jQuery(this).owlCarousel({
        items: 1,
        slideSpeed: 500,
        loop: true,
        nav: true,
        dots: false,
        margin: 20,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 2000,
        paginationSpeed : 6000,
        rewindSpeed : 6000,
        stopOnHover : true,
        navText : [
          '<i class="owl__arrows owl__arrows--left fas fa-chevron-left"></i>',
          '<i class="owl__arrows owl__arrows--right fas fa-chevron-right"></i>'
        ],
        responsive: {
         // Ширина от 500 пикселей
         1024: {
           // Количество элементов 2
           items: 1
         },
         768: {
            // Количество элементов 2
            items: 1
          },
         // Ширина от 800 пикселей
         100: {
           // Количество элементов 3
           items: 1
         }
        }
      });
    });

    jQuery("#vakansii-single__slider-list").each(function(){
      jQuery(this).owlCarousel({
        items: 3,
        slideSpeed: 500,
        loop: true,
        nav: true,
        dots: false,
        margin: 20,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        paginationSpeed : 6000,
        rewindSpeed : 6000,
        stopOnHover : true,
        navText : [
          '<i class="owl__arrows owl__arrows--left fas fa-chevron-left"></i>',
          '<i class="owl__arrows owl__arrows--right fas fa-chevron-right"></i>'
        ],
        responsive: {
         // Ширина от 500 пикселей
         1024: {
           // Количество элементов 2
           items: 3
         },
         768: {
            // Количество элементов 2
            items: 1
          },
         // Ширина от 800 пикселей
         100: {
           // Количество элементов 3
           items: 1
         }
        }
      });
    });

    var fired = false;
    window.addEventListener('scroll', () => {
        if (fired === false) {
          fired = true;
          if (jQuery(".instagram").length != 0) {
            jQuery.ajax({
              url: "/wp-content/themes/rgtheme/instagram.php",
              success: function(data) {
                jQuery(".instagram .instagram__list-wrap").append(data);
              }
            });
          }
          jQuery("footer").before('<button class="zayav-pu__btn get-price__btn" type="button">Скачать прайс</button>');
          jQuery(".get-price__btn").click(function(e) {
          e.preventDefault()
          jQuery.ajax({
            url: "/wp-content/themes/rgtheme/popups/get-price.php",
            success: function(data){
              jQuery("body").append(data);
              sendForm(jQuery(".send-form"));
              jQuery(".one-click__close").click(function() {
                  jQuery(".one-click").remove();
              })
              jQuery(".one-click__overlay").click(function() {
                  jQuery(".one-click").remove();
              })
              jQuery(document).keydown(function(e) {
                if (e.which == 27) {
                  jQuery(".one-click").remove();
                }
              });
            }
          });
          })
        }
    });



  if (jQuery('.catalog__button-more').length != 0) {
      jQuery('.catalog__button-more').click(function(){
        var pos = jQuery('.catalog__button-more--' + jQuery(this).attr("data-btn-type")).offset().top;
        var text = jQuery('.catalog__button-more--' + jQuery(this).attr("data-btn-type")).text();
        var thisBtn = jQuery(this);
        var contentType = jQuery(this).attr("data-btn-type");
        var postsLen = jQuery(this).attr("data-post-len");
    		thisBtn.text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
    		var data = {
    			'action': 'loadmore',
          'type': contentType,
          'maxPost': 'true',
          'postsLen': postsLen
    		};
    		jQuery.ajax({
    			url:"/wp-admin/admin-ajax.php", // обработчик
    			data:data, // данные
    			type:'POST', // тип запроса
    			success:function(data){
    				if( data ) {
              jQuery('.catalog__button-more--' + thisBtn.attr("data-btn-type")).text(text).parent().before(data);
              jQuery('.catalog__button-more--' + thisBtn.attr("data-btn-type")).remove();
    					//current_page++; // увеличиваем номер страницы на единицу
              //jQuery(window).scrollTop(pos - jQuery(window).height()/2)
    					//if (current_page == max_pages) jQuery(".catalog__button-more--type").remove(); // если последняя страница, удаляем кнопку
    				} else {
    					jQuery('.catalog__button-more--' + thisBtn.attr("data-btn-type")).remove(); // если мы дошли до последней страницы постов, скроем кнопку
    				}
    			}
    		});
    	});
    }

    if (jQuery('.projects__more').length != 0) {
        jQuery('.projects__more').click(function(){
          var text = jQuery('.projects__more').text();
          var thisBtn = jQuery(this);
      		thisBtn.text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      		var data = {
      			'action': 'loadmore_project',
            'maxPost': 'true'
      		};
      		jQuery.ajax({
      			url:"/wp-admin/admin-ajax.php", // обработчик
      			data:data, // данные
      			type:'POST', // тип запроса
      			success:function(data){
      				if( data ) {
                jQuery('.projects__more').text(text).parent().before(data);
                jQuery('.projects__more').remove();
      					//current_page++; // увеличиваем номер страницы на единицу
                //jQuery(window).scrollTop(pos - jQuery(window).height()/2)
      					//if (current_page == max_pages) jQuery(".catalog__button-more--type").remove(); // если последняя страница, удаляем кнопку
      				} else {
      					jQuery('.projects__more').remove(); // если мы дошли до последней страницы постов, скроем кнопку
      				}
      			}
      		});
      	});
      }

    jQuery(".single-product__tabs-btn").click(function() {
      jQuery(".single-product__tabs-btn").removeClass("single-product__tabs-btn--active")
      jQuery(".single-product__tabs-content").removeClass("single-product__tabs-content--active")
      jQuery(this).addClass("single-product__tabs-btn--active")
      jQuery(".single-product__tabs-content").eq(jQuery(this).parent().index()).addClass("single-product__tabs-content--active")
    })

    jQuery(".single-product__accordeon-button").each(function() {
      jQuery(this).click(function(e) {
          e.preventDefault();
          jQuery(this).toggleClass("single-product__accordeon-button--active")
          var panel = jQuery(this).next();
          panel.slideToggle()
      })
    })

// Start about-video
  jQuery(".about__btn--main").click(function() {
    jQuery(this).parent().css("height",jQuery(this).parent().height())
    jQuery(this).parent().css("width",jQuery(this).parent().width())
    jQuery(".about__video").html('<iframe width="560" height="315" src="https://www.youtube.com/embed/3VSd0fGrtzI?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
  })
// End about-video

jQuery(".about__btn--projects").click(function() {
  jQuery(this).parent().css("height", jQuery(this).parent().height())
  jQuery(this).parent().css("width", jQuery(this).parent().width())
  jQuery(".projects-single__video-container").html('<iframe width="560" height="315" src="https://www.youtube.com/embed/' + jQuery(this).attr("data-video-id") + '?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
})

// Start popups
    jQuery(".cons-pu").click(function(e) {
    e.preventDefault()
    jQuery.ajax({
      url: "/wp-content/themes/rgtheme/popups/one-click.php",
      success: function(data){
        jQuery("body").append(data);
        sendForm(jQuery(".send-form"));
        jQuery(".one-click__close").click(function() {
            jQuery(".one-click").remove();
        })
        jQuery(".one-click__overlay").click(function() {
            jQuery(".one-click").remove();
        })
        jQuery(document).keydown(function(e) {
          if (e.which == 27) {
            jQuery(".one-click").remove();
          }
        });
      }
    });
    })


  jQuery(".mlp__screen-btn").click(function(e) {
    e.preventDefault()
    jQuery.ajax({
      url: "/wp-content/themes/rgtheme/popups/lesa-char.php",
      success: function(data){
        jQuery("body").append(data);
        jQuery(".one-click__close").click(function() {
            jQuery(".one-click").remove();
        })
        jQuery(".one-click__overlay").click(function() {
            jQuery(".one-click").remove();
        })
        jQuery(document).keydown(function(e) {
          if (e.which == 27) {
            jQuery(".one-click").remove();
          }
        });
      }
    });
  })
  
  jQuery(".woocommerce-checkout").submit(function(e) {
    var data = {
	  'action': 'checkout',
      'content': "Номер телефона: " + jQuery("#billing_phone").val() + "\n" + jQuery(".form-info").val().split(", ").join("\n")
    	};
    	jQuery.ajax({
    		url:"/wp-admin/admin-ajax.php", // обработчик
    		data:data, // данные
    		type:'POST', // тип запроса
    		success:function(data){
    		
    		}
    	});
  })

  jQuery(".mlp-econom__opalubka-button").click(function(e) {
    e.preventDefault()
    if (jQuery(this).attr('data-type') == "opalubka-sten") {
      jQuery.ajax({
        url: "/wp-content/themes/rgtheme/popups/opalubka-sten-pu.php",
        success: function(data){
          jQuery("body").append(data);
          sendForm(jQuery(".send-form"));
          jQuery(".one-click__close").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(".one-click__overlay").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(document).keydown(function(e) {
            if (e.which == 27) {
              jQuery(".one-click").remove();
            }
          });
        }
      });
    } else if (jQuery(this).attr('data-type') == "opalubka-lift") {
      jQuery.ajax({
        url: "/wp-content/themes/rgtheme/popups/opalubka-lift-pu.php",
        success: function(data){
          jQuery("body").append(data);
          sendForm(jQuery(".send-form"));
          jQuery(".one-click__close").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(".one-click__overlay").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(document).keydown(function(e) {
            if (e.which == 27) {
              jQuery(".one-click").remove();
            }
          });
        }
      });
    } else if (jQuery(this).attr('data-type') == "opalubka-kolon") {
      jQuery.ajax({
        url: "/wp-content/themes/rgtheme/popups/opalubka-kolon-pu.php",
        success: function(data){
          jQuery("body").append(data);
          sendForm(jQuery(".send-form"));
          jQuery(".one-click__close").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(".one-click__overlay").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(document).keydown(function(e) {
            if (e.which == 27) {
              jQuery(".one-click").remove();
            }
          });
        }
      });
    } else if (jQuery(this).attr('data-type') == "opalubka-kolon-univ") {
      jQuery.ajax({
        url: "/wp-content/themes/rgtheme/popups/opalubka-kolon-univ-pu.php",
        success: function(data){
          jQuery("body").append(data);
          sendForm(jQuery(".send-form"));
          jQuery(".one-click__close").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(".one-click__overlay").click(function() {
              jQuery(".one-click").remove();
          })
          jQuery(document).keydown(function(e) {
            if (e.which == 27) {
              jQuery(".one-click").remove();
            }
          });
        }
      });
    }
  })

  jQuery(".single-product__schet").click(function(e) {
    e.preventDefault()
    jQuery.ajax({
      url: "/wp-content/themes/rgtheme/popups/zapros-scheta.php",
      success: function(data){
        jQuery("body").append(data);
        jQuery(".zapros-scheta__form").submit(function(e) {
          e.preventDefault();
          var form_data  = new FormData();
          var file_data = jQuery('#zapros-scheta__requisites-file').prop('files')[0];
          form_data.append('quan', jQuery("#zapros-scheta__quan").val());
          form_data.append('orgname', jQuery("#zapros-scheta__orgname").val());
          form_data.append('phone', jQuery("#zapros-scheta__phone").val());
          var radioVal = jQuery(".zapros-scheta__nds-wrap input[name=nds]:checked");
            if (radioVal.prop("checked"))
             form_data.append('nds', radioVal.val());
          form_data.append('email', jQuery("#zapros-scheta__email").val());
          form_data.append('requisites', jQuery("#zapros-scheta__requisites").val());
          var $_GET = {};
            document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
                function decode(s) {
                    return decodeURIComponent(s.split("+").join(" "));
                }
            
                $_GET[decode(arguments[1])] = decode(arguments[2]);
            });
          form_data.append('utm_source', $_GET["utm_source"]);
          form_data.append('file', file_data);
          jQuery.ajax({
                url:     '/wp-content/themes/rgtheme/zapros-mail.php', //url страницы (action_ajax_form.php)
                type:     "POST", //метод отправки
                processData: false,
	              contentType: false,
                data: form_data, // Сеарилизуем объект
                success: function(response) { //Данные отправлены успешно
                  console.log(response);
                   if (response) {
                        location.href = '/thank-you/';
                      }
              },
              error: function(response) { // Данные не отправлены

              }
           });
        })
        jQuery(".zapros-scheta__close").click(function() {
            jQuery(".zapros-scheta").remove();
        })
        jQuery(".zapros-scheta__overlay").click(function() {
            jQuery(".zapros-scheta").remove();
        })
        jQuery(document).keydown(function(e) {
          if (e.which == 27) {
            jQuery(".zapros-scheta").remove();
          }
        });
      }
    });
  })
// End popups

var minPrice = jQuery(".range-input--left").attr("min")
var maxPrice = jQuery(".range-input--right").attr("max")
var widgetKeys = []
var widgetValues = []
var materialId = ''
var brandId = ''
var vstavkaId = ''
var priceAsc = true
var perPage = 12
var offsetNum = null
var termId = jQuery(".katalog").attr("data-term-id");

function filterFunc() {
    var data = {
      'action': 'filters',
      'widgetKeys': widgetKeys,
      'widgetValues': widgetValues,
      'minPrice': minPrice,
      'maxPrice': maxPrice,
      'priceAsc': priceAsc,
      'perPage': perPage,
      'offsetNum': offsetNum,
      'termId': termId
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data){
        if (data.replace(/\s/g, '') != "") {
          jQuery(".katalog__list").html(data)
          //console.log(data);
          // jQuery(".pagination").attr("offset-count", perPage)
        }
        else {
          jQuery(".katalog__list").html("<div class='products__not-found'>Не найдено</div>")
        }
      }
    });
  }

  function navigationFunc(filterCheck) {
    if (jQuery(".pagination__page--active").index() != -1 && !filterCheck)
      activeIndex = jQuery(".pagination__page--active").index()
    else
      activeIndex = offsetNum
    var data = {
      'action': 'productnav',
      'widgetKeys': widgetKeys,
      'widgetValues': widgetValues,
      'minPrice': minPrice,
      'maxPrice': maxPrice,
      'priceAsc': priceAsc,
      'perPage': perPage,
      'offsetNum': offsetNum,
      'termId': termId
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data){
        if (data) {
          jQuery(".navigation__wrap").html(data)
          jQuery(".pagination__page").click(function() {
            jQuery(".pagination__page").removeClass("pagination__page--active")
            jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").addClass("pagination__page--active")
            if (jQuery(this).hasClass("pagination__page--prevdot") && jQuery(this).index() != 0) {
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index()) +")").show()
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 4) +")").hide();
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 3) +")").addClass("pagination__page--nextdot");
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").removeClass("pagination__page--prevdot");
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").prev().addClass("pagination__page--prevdot");
              if (jQuery(this).index() == jQuery(".pagination__page").length/2 - 3)
                jQuery(".pagination__dots").hide();
              else
                jQuery(".pagination__dots").show();
            }
            if (jQuery(this).hasClass("pagination__page--nextdot") && (jQuery(this).index() != jQuery(".pagination__page").length/2 - 1 && jQuery(this).index() != jQuery(".pagination__page").length/2 - 2)) {

              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 2) +")").hide();
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 2) +")").removeClass("pagination__page--prevdot")
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 1) +")").addClass("pagination__page--prevdot");
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").removeClass("pagination__page--nextdot");
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").next().show();
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").next().addClass("pagination__page--nextdot");

              if (jQuery(this).index() >= (jQuery(".pagination__page").length/2 - 3)) {
                  jQuery(".pagination__dots").hide();
              }
              else {
                jQuery(".pagination__dots").show();
              }
            }

            if (jQuery(this).index() >= jQuery(".pagination__page").length/2) {
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 7) +")").hide()
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 6) +")").hide()
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 5) +")").hide()

              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 1) +")").show()
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 2) +")").show()
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 3) +")").show()
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 4) +")").show()
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 4) +")").removeClass("pagination__page--nextdot")
              jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 4) +")").addClass("pagination__page--prevdot")
              jQuery(".pagination__dots").hide();

              offsetNum = jQuery(".pagination").attr("offset-count") * jQuery(this).index() - 1;
            } else {
              offsetNum = jQuery(".pagination").attr("offset-count") * jQuery(this).index();
            }
            filterFunc();
          })
        }
      }
    });
  }

  jQuery(".pagination__page").click(function() {
    jQuery(".pagination__page").removeClass("pagination__page--active")
    jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").addClass("pagination__page--active")
    if (jQuery(this).hasClass("pagination__page--prevdot") && jQuery(this).index() != 0) {
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index()) +")").show()
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 4) +")").hide();
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 3) +")").addClass("pagination__page--nextdot");
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").removeClass("pagination__page--prevdot");
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").prev().addClass("pagination__page--prevdot");
      console.log(jQuery(this).index() + "==" + Math.ceil((jQuery(".pagination__page").length - 3)));
      if (jQuery(this).index() == Math.ceil((jQuery(".pagination__page").length - 3)))
        jQuery(".pagination__dots").hide();
      else
        jQuery(".pagination__dots").show();
    }
    if (jQuery(this).hasClass("pagination__page--nextdot") && (jQuery(this).index() != jQuery(".pagination__page").length - 1 && jQuery(this).index() != jQuery(".pagination__page").length - 2)) {

      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 2) +")").hide();
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 2) +")").removeClass("pagination__page--prevdot")
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 1) +")").addClass("pagination__page--prevdot");
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").removeClass("pagination__page--nextdot");
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").next().show();
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() + 1) +")").next().addClass("pagination__page--nextdot");
      console.log(jQuery(this).index() + ">=" + Math.ceil((jQuery(".pagination__page").length - 3)));

      if (jQuery(this).index() >= Math.ceil((jQuery(".pagination__page").length - 3))) {
          jQuery(".pagination__dots").hide();
      }
      else {
        jQuery(".pagination__dots").show();
      }
    }

    if (jQuery(this).index() >= jQuery(".pagination__page").length) {
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 7) +")").hide()
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 6) +")").hide()
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 5) +")").hide()

      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 1) +")").show()
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 2) +")").show()
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 3) +")").show()
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 4) +")").show()
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 4) +")").removeClass("pagination__page--nextdot")
      jQuery(".pagination__page:nth-child("+ (jQuery(this).index() - 4) +")").addClass("pagination__page--prevdot")
      jQuery(".pagination__dots").hide();

      offsetNum = jQuery(".pagination").attr("offset-count") * jQuery(this).index() - 1;
    } else {
      offsetNum = jQuery(".pagination").attr("offset-count") * jQuery(this).index();
    }
    filterFunc();
  })
//Start Диапозон цены
if (jQuery(".products__range-wrap").length != 0) {
jQuery(".products__range-trigger").click(function() {
  jQuery(this).toggleClass('products__range-trigger--active')
  jQuery('.products__range-popup').toggleClass('products__range-popup--show')
});

jQuery(".product__inputs-label input").keydown(function() {
  if (jQuery(this).val().length > 2)
  jQuery(this).attr('size', jQuery(this).val().length)
  jQuery(this).val(jQuery(this).val().replace(/[^\d\.,]/g,'').replace(/,/g,'.').toLocaleString('ru-RU'));
});

jQuery(".product__inputs-label input").keyup(function() {
  if (jQuery(this).val().length > 2)
  jQuery(this).attr('size', jQuery(this).val().length)
  jQuery(this).val(jQuery(this).val().replace(/[^\d\.,]/g,'').replace(/,/g,'.').toLocaleString('ru-RU'));
});

jQuery(".range").slider({
    min: Number(jQuery(".range-input").attr("min")),
    max: Number(jQuery(".range-input").attr("max")),
    step: 0.1,
    values: [Number(jQuery(".range-input").attr("min")), Number(jQuery(".range-input").attr("max"))],
    range: true,
    animate: "fast",
    slide : function(event, ui) {
        jQuery(".range-input--left").val(ui.values[ 0 ]);
        jQuery(".range-input--right").val(ui.values[ 1 ]);
        jQuery(".product__inputs-label--left input").val((ui.values[ 0 ] * 1).toLocaleString('ru-RU'));
        jQuery(".product__inputs-label--right input").val((ui.values[ 1 ] * 1).toLocaleString('ru-RU'));
    },
    change : function(event, ui) {
      jQuery(".range-input--left").val(ui.values[ 0 ]);
      jQuery(".range-input--right").val(ui.values[ 1 ]);
    }
});

jQuery(".range-input--left").val(jQuery(".range").slider("values", 0));
jQuery(".range-input--right").val(jQuery(".range").slider("values", 1));
jQuery(".range .ui-slider-handle").mouseup(function() {
    var input_left = jQuery(".range-input--left").val(),
    opt_left = jQuery(".range").slider("option", "min"),
    where_right = jQuery(".range").slider("values", 1),
    input_right = jQuery(".range-input--right").val(),
    opt_right = jQuery(".range").slider("option", "max"),
    where_left = jQuery(".range").slider("values", 0);
    if (input_left > where_right) {
        input_left = where_right;
    }
    if (input_left < opt_left) {
        input_left = opt_left;
    }
    if (input_left == "") {
    input_left = 0;
    }
    if (input_right < where_left) {
        input_right = where_left;
    }
    if (input_right > opt_right) {
        input_right = opt_right;
    }
    if (input_right == "") {
    input_right = 0;
    }
    jQuery(".range-input--left").val(input_left);
    jQuery(".range-input--right").val(input_right);
    jQuery(".range").slider( "values", [ input_left, input_right ] );
    minPrice = Number(input_left)
    maxPrice = Number(input_right)
    offsetNum = 0;
    filterFunc(false);
    navigationFunc(true)
});

jQuery(".product__inputs-label--right input").change(function() {
  jQuery( ".range" ).slider( "option", "values", [ jQuery(".range-input--left").val(), jQuery(this).val() ] );
  jQuery(".range .ui-slider-handle").mouseup();
})

jQuery(".product__inputs-label--left input").change(function() {
  jQuery( ".range" ).slider( "option", "values", [ jQuery(this).val(), jQuery(".range-input--right").val() ] );
  jQuery(".range .ui-slider-handle").mouseup();
})

}

jQuery( ".range" ).slider({
  stop: function( event, ui ) {
    var input_left = jQuery(".range-input--left").val(),
    opt_left = jQuery(".range").slider("option", "min"),
    where_right = jQuery(".range").slider("values", 1),
    input_right = jQuery(".range-input--right").val(),
    opt_right = jQuery(".range").slider("option", "max"),
    where_left = jQuery(".range").slider("values", 0);
    if (input_left > where_right) {
        input_left = where_right;
    }
    if (input_left < opt_left) {
        input_left = opt_left;
    }
    if (input_left == "") {
    input_left = 0;
    }
    if (input_right < where_left) {
        input_right = where_left;
    }
    if (input_right > opt_right) {
        input_right = opt_right;
    }
    if (input_right == "") {
    input_right = 0;
    }
    jQuery(".range-input--left").val(input_left);
    jQuery(".range-input--right").val(input_right);
    jQuery(".range").slider( "values", [ input_left, input_right ] );
    minPrice = Number(input_left)
    maxPrice = Number(input_right)
    offsetNum = 0;
    filterFunc(false);
    navigationFunc(true)
  },
  step : 0.1
});
//End Диапозон цены
var widgetArr = [];
var attrMap = new Map()
var paCheck = ""
jQuery(".katalog__widget-checkbox").change(function() {
  var attrArr = []
  jQuery(".katalog__widget-checkbox[name=" + jQuery(this).attr("name") + "]:checked").each(function() {
    attrArr.push(jQuery(this).val());
  })
  widgetArr["pa_" + jQuery(this).attr("name")] = attrArr
  if (attrArr.length == 0)
    delete widgetArr["pa_" + jQuery(this).attr("name")]
  // if (paCheck == "")
  //   paCheck = "pa_" + jQuery(this).attr("name");
  //
  // thisVal = jQuery(this).val()
  // var index = attrArr.indexOf(thisVal)
  // var attrName = "pa_" + jQuery(this).attr("name")
  // if (this.checked) {
  //   if (paCheck == attrName)
  //     attrArr.push(thisVal)
  //   else {
  //     attrArr = []
  //     attrArr.push(thisVal)
  //   }
  //
  // } else {
  //   widgetArr[attrName].splice(index, 1)
  // }
  // if (attrArr.length != 0) {
  //   widgetArr[attrName] = attrArr
  // }
  // console.log(widgetArr);
  widgetKeys = Object.keys(widgetArr)
  widgetValues = Object.values(widgetArr)
    offsetNum = 0;
  // console.log(Object.keys(widgetArr));
  // console.log(Object.values(widgetArr));
  filterFunc()
  navigationFunc(true)
})

jQuery('.mobileMenu').on('click', function() {
    this.classList.toggle("change");
    jQuery(".menu__list--mobile").css("max-height", jQuery(window).height());
    jQuery('.menu__list--mobile').slideToggle(300, function() {
        if (jQuery(this).css('display') === "none") {
            jQuery(this).removeAttr('style')
        }
    })
});

jQuery('.header__search-trigger--mobile').on('click', function() {
    this.classList.toggle("change");
    jQuery(".header__search--mobile").css("max-height", jQuery(window).height());
    jQuery('.header__search--mobile').slideToggle(300, function() {
        if (jQuery(this).css('display') === "none") {
            jQuery(this).removeAttr('style')
        }
    })
});

jQuery(".katalog__widget-list .katalog__widget-title").each(function() {
  jQuery(this).click(function(){
    jQuery(this).toggleClass("sub-active")
    var panel = jQuery(this).next();
    panel.slideToggle();
  })
})

jQuery(".katalog__mobile-filters").click(function() {
  jQuery(".katalog__widget-list").show();
})

jQuery(".menu__list--mobile .menu-item--accardeon > a").each(function() {
      jQuery(this).click(function(e) {
        console.log("click");
          e.preventDefault();
          jQuery(this).toggleClass("sub-active")
          var panel = jQuery(this).next();
          panel.slideToggle()
      })
  })

  setTimeout(() => {

              var roistat = `<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init?referrer="+encodeURIComponent(d.location.href);
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', 'ac17c4321418232c08fe545bf4ee0917');
</script>`;

var whatsappScript = `<!-- BEGIN WHATSAPP INTEGRATION WITH ROISTAT -->
<script type="bogus" class="js-whatsapp-message-container">` + location.href.split('?')[0] + `?roistat_visit={roistat_visit}  | Здравствуйте,</script>
<script>
    (function() {
        if (window.roistat !== undefined) {
            handler();
        } else {
            var pastCallback = typeof window.onRoistatAllModulesLoaded === "function" ? window.onRoistatAllModulesLoaded : null;
            window.onRoistatAllModulesLoaded = function () {
                if (pastCallback !== null) {
                    pastCallback();
                }
                handler();
            };
        }

        function handler() {
            function init() {
                appendMessageToLinks();

                var delays = [1000, 5000, 15000];
                setTimeout(function func(i) {
                    if (i === undefined) {
                        i = 0;
                    }
                    appendMessageToLinks();
                    i++;
                    if (typeof delays[i] !== 'undefined') {
                        setTimeout(func, delays[i], i);
                    }
                }, delays[0]);
            }

            function replaceQueryParam(url, param, value) {
                var explodedUrl = url.split('?');
                var baseUrl = explodedUrl[0] || '';
                var query = '?' + (explodedUrl[1] || '');
                var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
                var queryWithoutParameter = query.replace(regex, "$1").replace(/&$/, '');
                return baseUrl + (queryWithoutParameter.length > 2 ? queryWithoutParameter  + '&' : '?') + (value ? param + "=" + value : '');
            }

            function appendMessageToLinks() {
                var message = document.querySelector('.js-whatsapp-message-container').text;
                var text = message.replace(/{roistat_visit}/g, window.roistatGetCookie('roistat_visit'));
                text = encodeURI(text);
                var linkElements = document.querySelectorAll('[href*="//wa.me"], [href*="//api.whatsapp.com/send"], [href*="//web.whatsapp.com/send"], [href^="whatsapp://send"]');
                for (var elementKey in linkElements) {
                    if (linkElements.hasOwnProperty(elementKey)) {
                        var element = linkElements[elementKey];
                        element.href = replaceQueryParam(element.href, 'text', text);
                    }
                }
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', init);
            } else {
                init();
            }
        };
    })();
</script>
<!-- END WHATSAPP INTEGRATION WITH ROISTAT -->`;
              jQuery("footer").append(roistat);
              jQuery("footer").append(whatsappScript);
          }, 1000)


jQuery('.katalog__more-btn').click(function(){
  jQuery(this).after(`<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>`);
  jQuery('.katalog__more-btn').remove();
  var data = {
    'action': 'moreattr',
    'termId': jQuery(".katalog").attr("data-term-id")
  };
  jQuery.ajax({
    url:"/wp-admin/admin-ajax.php", // обработчик
    data:data, // данные
    type:'POST', // тип запроса
    success:function(data){
      if( data ) {
        jQuery('.katalog__more-wrap').append(data);
        jQuery('.lds-ellipsis').remove();
        jQuery(".katalog__widget-checkbox").change(function() {
          var attrArr = []
          jQuery(".katalog__widget-checkbox[name=" + jQuery(this).attr("name") + "]:checked").each(function() {
            attrArr.push(jQuery(this).val());
          })
          widgetArr["pa_" + jQuery(this).attr("name")] = attrArr
          if (attrArr.length == 0)
            delete widgetArr["pa_" + jQuery(this).attr("name")]
          // if (paCheck == "")
          //   paCheck = "pa_" + jQuery(this).attr("name");
          //
          // thisVal = jQuery(this).val()
          // var index = attrArr.indexOf(thisVal)
          // var attrName = "pa_" + jQuery(this).attr("name")
          // if (this.checked) {
          //   if (paCheck == attrName)
          //     attrArr.push(thisVal)
          //   else {
          //     attrArr = []
          //     attrArr.push(thisVal)
          //   }
          //
          // } else {
          //   widgetArr[attrName].splice(index, 1)
          // }
          // if (attrArr.length != 0) {
          //   widgetArr[attrName] = attrArr
          // }
          // console.log(widgetArr);
          widgetKeys = Object.keys(widgetArr)
          widgetValues = Object.values(widgetArr)
            offsetNum = 0;
          // console.log(Object.keys(widgetArr));
          // console.log(Object.values(widgetArr));
          filterFunc()
          navigationFunc(true)
        })
        jQuery(".katalog__widget-list .katalog__more-wrap .katalog__widget-title").each(function() {
          jQuery(this).click(function(){
            jQuery(this).toggleClass("sub-active")
            var panel = jQuery(this).next();
            panel.slideToggle();
          })
        })
        //current_page++; // увеличиваем номер страницы на единицу
        //jQuery(window).scrollTop(pos - jQuery(window).height()/2)
        //if (current_page == max_pages) jQuery(".catalog__button-more--type").remove(); // если последняя страница, удаляем кнопку
      } else {
        jQuery('.lds-ellipsis').remove(); // если мы дошли до последней страницы постов, скроем кнопку
      }
    }
  });
});

jQuery(".zapros-scheta__form--obratnaya").submit(function(e) {
  e.preventDefault();
  var form_data  = new FormData();
  var file_data = jQuery('#zapros-scheta__requisites-file').prop('files');
  for (var i = 0; i < file_data.length; i++) {
    form_data.append('file' + (i + 1), file_data[i]);
  }
  form_data.append('name', jQuery("#zapros-scheta__name").val());
  form_data.append('phone', jQuery("#zapros-scheta__phone").val());
  var radioVal = jQuery(".zapros-scheta__nds-wrap input[name=ocenka]:checked");
    if (radioVal.prop("checked"))
     form_data.append('ocenka', radioVal.val());
  form_data.append('requisites', jQuery("#zapros-scheta__requisites").val());
  var $_GET = {};
    document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
        function decode(s) {
            return decodeURIComponent(s.split("+").join(" "));
        }
    
        $_GET[decode(arguments[1])] = decode(arguments[2]);
    });
  form_data.append('utm_source', $_GET["utm_source"]);
  form_data.append('file', file_data);
  jQuery.ajax({
        url:     '/wp-content/themes/rgtheme/obratnaya-mail.php', //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        processData: false,
        contentType: false,
        data: form_data, // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
           if (response) {
                location.href = '/thank-you/';
              }
      },
      error: function(response) { // Данные не отправлены

      }
   });
})

});

function road_to_anchor(className) {
    var top = jQuery(className).offset().top - 100;
    jQuery('body,html').animate({
        scrollTop: top
    }, 1000);
};
