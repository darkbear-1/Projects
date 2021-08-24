jQuery( document ).ready(function() {

  var form_data  = new FormData();
  jQuery("input[name='phone']").blur(function() {
    jQuery("input[name='form_fields[another_phone]']").val(jQuery(this).val().replace(/[^\d]/g, '').substr(jQuery(this).val().replace(/[^\d]/g, '').length - 10));
  })

    jQuery(".callback-btn").click(function(e) {
        e.preventDefault();
        var data = {
    			'action': 'callback'
    		};
    		$.ajax({
    			url:"/wp-admin/admin-ajax.php", // обработчик
    			data:data, // данные
    			type:'POST', // тип запроса
    			success:function(data){
    				if( data ) {
                        jQuery("body").append(data);
                        jQuery(".callback__close").click(function() {
                            jQuery(".callback").remove();
                          })
                          jQuery(".callback__overlay").click(function() {
                            jQuery(".callback").remove();
                          })
                          jQuery(document).keydown(function(e) {
                              if (e.which == 27) {
                                jQuery(".callback").remove();
                              }
                          });
    				}
    			}
    		});
      })

     jQuery(document).on("DOMNodeInserted", function (event) {
        jQuery("input[type=tel]:not(.checki__form-phone)").inputmask({"mask": "+9999-999-99-99"});
      	if (event.target.classList.contains("callback") == true || event.target.classList.contains("leave-popup") == true) {
        var form_data  = new FormData();
        jQuery("input[name='phone']").on('input', function() {
          console.log('etest');
          jQuery("input[name='form_fields[another_phone]']").val(jQuery(this).val().replace(/[^\d]/g, '').substr(jQuery(this).val().replace(/[^\d]/g, '').length - 10));
        })
        jQuery(".stati__form form").unbind('submit').bind('submit',function(e) {
          e.preventDefault()
		  jQuery(this).find('input[type=submit]').attr('disabled', 'disabled');
          form_data.append('Телефон', jQuery(this).find("input[name='phone']").val());
          jQuery(this).find("input[name='form_fields[bitrix_id]']").val(jQuery.cookie('ASE_authUserId'));
          form_data.append('another_phone', jQuery(this).find("input[name='form_fields[another_phone]']").val());
          form_data.append('bitrix_id', jQuery(this).find("input[name='form_fields[bitrix_id]']").val());
          form_data.append('publication_code', jQuery(this).find("input[name='form_fields[publication_code]']").val());
          form_data.append('Время', jQuery(this).find("input[name='form_fields[time]']").val());
          form_data.append('Цель', jQuery(this).find("input[name='form_fields[target]']").val());
          form_data.append('Точка_входа', jQuery(this).find("input[name='form_fields[enter_dot]']").val());
          form_data.append('UTMS', jQuery(this).find("input[name='form_fields[utms]']").val());
          form_data.append('RoistatID', jQuery(this).find("input[name='form_fields[roi_id]']").val());
          form_data.append('Яндекс_Метрика', jQuery(this).find("input[name='form_fields[yandex_metr]']").val());
          form_data.append('Гугл_Метрика', jQuery(this).find("input[name='form_fields[google_metr]']").val());
          form_data.append('form_name', jQuery(this).find("input[name='form-name']").val());

          jQuery.ajax({
            url: "/wp-content/themes/rgtheme/webhook.php",
            type:     "POST", //метод отправки
            processData: false,
            contentType: false,
            data: form_data, // Сеарилизуем объект
            success: function(data){
				console.log(data);
            }
          });

          jQuery.ajax({
              url:     '/wp-content/themes/rgtheme/sendMail.php', //url страницы (action_ajax_form.php)
              type:     "POST", //метод отправки
              dataType: "html", //формат данных
              data: jQuery(this).serialize()+'&entry_url='+encodeURIComponent(JSON.parse(jQuery.cookie("businessurl")).url_first),  // Сеарилизуем объект
              success: function(response) { //Данные отправлены успешно
                location.href = '/thank-you';
              // 	result = jQuery.parseJSON(response);
              // 	console.log(result);
              	//jQuery('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
          	},
          	error: function(response) { // Данные не отправлены
                  //jQuery('#result_form').html('Ошибка. Данные не отправлены.');

          	}
        	});

        })
        jQuery(".form-questions__send").one("click", function() {
            if (location.href.indexOf('?') > -1) {
                if (jQuery.cookie('utm_visit') == null) {
                  jQuery.cookie('utm_visit', location.href.substr(location.href.indexOf("?") + 1));
                }
            }

            jQuery("input[name='form_fields[time]']").each(function() {
              jQuery(this).closest("form").find("input[name='form_fields[target]']").val(jQuery(this).closest(".form-questions").attr("name"));
            });

            jQuery("input[name='form_fields[enter_dot]']").val(location.href);
            jQuery("input[name='form_fields[utms]']").val(jQuery.cookie('utms'));
            jQuery("input[name='form_fields[roi_id]']").val(jQuery.cookie('roistat_visit'));
            jQuery("input[name='form_fields[yandex_metr]']").val(jQuery.cookie('_ym_uid'));
            jQuery("input[name='form_fields[google_metr]']").val(jQuery.cookie('_ga'));
        })

        }
      })


      if (location.href != "https://class365.ru/novosti_rubriki/blanki-dokumentov/") {
        function leaveFunc(imgSrc, imgAlt) {
          var data = {
      			'action': 'leavepopup',
            'imgSrc': imgSrc,
            'imgAlt': imgAlt
      		};
      		$.ajax({
      			url:"/wp-admin/admin-ajax.php", // обработчик
      			data:data, // данные
      			type:'POST', // тип запроса
      			success:function(data){
      				if( data ) {
                    jQuery("body").append(data);
                    // function getRandomInt(max) {
              			// 	return Math.floor(Math.random() * Math.floor(max));
              			// }
              			// if (getRandomInt(3) == 0) {
              			// 	jQuery(".banner_img1").css("display", "block")
              			// } else if (getRandomInt(3) == 1) {
              			// 	jQuery(".banner_img2").css("display", "block")
              			// } else {
              			// 	jQuery(".banner_img3").css("display", "block")
              			// }
                          jQuery(".leave-popup__close").click(function() {
                              jQuery(this).parent().parent().remove();
                          })
                          jQuery(".leave-popup__overlay").click(function() {
                              jQuery(this).parent().remove();
                          })
                          jQuery(document).keydown(function(e) {
                            if (e.which == 27) {
                              jQuery(".leave-popup").last().remove();
                            }
                          });
      				}
      			}
      		});
        }

        localStorage.removeItem('leave');
        var excludeWords = ['stati', 'blanki-dokumentov', 'novosti', 'novosti_rubriki', 'stati_rubriki'];
        if (!excludeWords.includes(location.pathname.split("/")[1])) {
          jQuery(document).mouseleave(function(e){
              if (!localStorage.getItem('leave')) {
                localStorage.setItem('leave', true);
//                 leaveFunc('/wp-content/uploads/2021/02/111-2.jpg', 'Специально для вас!')
                leaveFunc('/wp-content/uploads/2021/08/115.jpg', 'Специально для вас!')
              }
          });

//           setTimeout(function() {
//             leaveFunc('/wp-content/uploads/2020/12/new-1.jpg', 'У нас для вас выгодное предложение!')
//           }, 25000)

//           setTimeout(function() {
//             leaveFunc('/wp-content/uploads/2020/12/new-11.jpg', 'У нас есть для вас выгодное предложение!')
//           }, 60000)
        }
      }



    jQuery(".mlp-btn").click(function(e) {
        e.preventDefault()
        var data = {
			'action': 'mlppopup'
		};
        jQuery.ajax({
    			url:"/wp-admin/admin-ajax.php", // обработчик
    			data:data, // данные
    			type:'POST', // тип запроса
    			success:function(data){
    				if( data ) {
                        jQuery("body").append(data);
                        jQuery(".mlp-popup__overlay").click(function() {
                           jQuery(".mlp-popup").remove();
                        })
                        jQuery(".mlp-popup__close").click(function() {
                           jQuery(".mlp-popup").remove();
                        })
                        jQuery(document).keydown(function(e) {
                          if (e.which == 27) {
                            jQuery(".mlp-popup").remove();
                          }
                        });
    				}
    			}
    		});
    })

  // jQuery(function($){
  // 	$('.more__btn').click(function(){
  //     $(this).text('Загружаю...');
  //     var offset = Number($(this).attr("data-offset"));
  //     var len = Number($(this).attr("data-len"));
  // 		var data = {
  // 			'action': 'loadmore',
  //       'offset': offset
  // 		};
  // 		$.ajax({
  // 			url:"/wp-admin/admin-ajax.php", // обработчик
  // 			data:data, // данные
  // 			type:'POST', // тип запроса
  //       dataType : 'html',
  // 			success:function(data){
  // 				if( data != 0) {
  // 					$('.more__btn').text('Показать ещё').before(data); // вставляем новые посты
  //           if ((offset+12) > len)
  //             $('.more__btn').remove();
  //           offset = offset + 13
  //           jQuery('.more__btn').attr("data-offset", offset)
  // 				} else {
  // 					$('.more__btn').remove(); // если мы дошли до последней страницы постов, скроем кнопку
  // 				}
  // 			}
  // 		});
  // 	});
  // });

  jQuery("input[type=tel]:not(.checki__form-phone)").inputmask({"mask": "+9999-999-99-99"});

  jQuery(".checki__form-phone").inputmask({"mask": "+7 (999) 999-99-99"});

  jQuery(function($){
    if ($("#true_loadmore").length != 0) {
      $('#true_loadmore').click(function(){
        var pos = $('#true_loadmore').offset().top;
        var text = $('#true_loadmore').text();
    		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
    		var data = {
    			'action': 'loadmore',
    			'query': true_posts,
    			'page' : current_page
    		};
    		$.ajax({
    			url:ajaxurl, // обработчик
    			data:data, // данные
    			type:'POST', // тип запроса
    			success:function(data){
    				if( data ) {
    					$('#true_loadmore').text(text).before(data);
    					current_page++; // увеличиваем номер страницы на единицу
              $(window).scrollTop(pos - jQuery(window).height()/2)
    					if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
    				} else {
    					$('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
    				}
    			}
    		});
    	});
    }

    function scrolUrl(page) {
      $(window).scroll(function(){
        var bottomOffset = 1500; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
        //var pos = $('#load-post').offset().top;
        //$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
        var data = {
          'action': 'loadpost',
          'query': true_posts,
          'page' : current_page
        };
        if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('.more--'+page+'-page').hasClass('load-post')) {

          $.ajax({
            url:ajaxurl, // обработчик
            data:data, // данные
            type:'POST', // тип запроса
            beforeSend: function( xhr){
              $('.more--'+page+'-page').addClass('load-post');
            },
            success:function(data){
              if( data ) {
                $('.more--'+page+'-page').append(data);
                $('.more--'+page+'-page').removeClass('load-post');
                 current_page++; // увеличиваем номер страницы на единицу
                // $(window).scrollTop(pos - jQuery(window).height()/2)
                 if (current_page == max_pages) $("#load-post").remove(); // если последняя страница, удаляем кнопку
              }
            }
          });
        }

      var st = $(this).scrollTop();
       if (st > lastScrollTop){
         if ($(".more--"+page+"-page .stati--page").length != 0 && $(".more--"+page+"-page .stati--page:nth-child("+itemNum+")").length != 0) {
           if ($(document).scrollTop() > $(".more--"+page+"-page .stati--page:nth-child("+itemNum+")").offset().top - $(window).height()) {
            window.history.pushState("object or string", "Title", "/"+page+"/"+$(".more--"+page+"-page .stati--page:nth-child("+itemNum+") .stati__item").attr("data-slug"));
            itemNum++;
           }
         }
       } else {
         if ($(".more--"+page+"-page .stati--page").length != 0 && $(".more--"+page+"-page .stati--page:nth-child("+itemNum+")").length != 0) {
           if ($(document).scrollTop() < $(".more--"+page+"-page .stati--page:nth-child("+itemNum+")").offset().top) {
             if (itemNum != 1) {
               itemNum--;
               window.history.pushState("object or string", "Title", "/"+page+"/"+$(".more--"+page+"-page .stati--page:nth-child("+itemNum+") .stati__item").attr("data-slug"));
             } else if (itemNum == 1) {
               window.history.pushState("object or string", "Title", "/"+page+"/"+$(".stati--page .stati__item").attr("data-slug"));
             }

           }
         } else {
           itemNum--;
         }
       }
       lastScrollTop = st;
      });
    }

	if ($(".more--stati-page").length != 0) {
    var lastScrollTop = 0;
    var itemNum = 1;
    scrolUrl('stati');
  }

  if ($(".more--novosti-page").length != 0) {
    var lastScrollTop = 0;
    var itemNum = 1;
    scrolUrl('novosti');
  }



  	$('.rotate-left').click(function() {
      $('.stati__rubriki--mobile-wrap').animate({
        	scrollLeft: '-='+ document.querySelector('.stati__rubriki--mobile-wrap').scrollWidth,
    		}, 500, function() {
    			//код по завершении анимации
    		});
      // $(".stati__rubriki--mobile-wrap").scrollLeft(500);
    })
    $('.rotate-right').click(function() {
      $('.stati__rubriki--mobile-wrap').animate({
    			scrollLeft: '+='+ document.querySelector('.stati__rubriki--mobile-wrap').scrollWidth,
    		}, 500, function() {
    			//код по завершении анимации
    		});
      // $(".stati__rubriki--mobile-wrap").scrollLeft(500);
    })
});

jQuery('.bottom__menu-trigger').on('click', function() {
    this.classList.toggle("change");
    jQuery('.bottom-menu__menu').slideToggle(300, function(){
         if( jQuery(this).css('display') === "none"){
             jQuery(this).removeAttr('style');
         }
    });
 });

 jQuery('.top__menu-trigger').on('click', function() {
     this.classList.toggle("change");
     jQuery('.top-menu__menu').slideToggle(300, function(){
          if( jQuery(this).css('display') === "none"){
              jQuery(this).removeAttr('style');
          }
     });
  });




    jQuery(".stati__form form").unbind('submit').bind('submit',function(e) {
      e.preventDefault()
      form_data.append('Телефон', jQuery(this).find("input[name='phone']").val());
      jQuery(this).find("input[name='form_fields[bitrix_id]']").val(jQuery.cookie('ASE_authUserId'));
      form_data.append('another_phone', jQuery(this).find("input[name='form_fields[another_phone]']").val());
      form_data.append('bitrix_id', jQuery(this).find("input[name='form_fields[bitrix_id]']").val());
      form_data.append('publication_code', jQuery(this).find("input[name='form_fields[publication_code]']").val());
      form_data.append('Время', jQuery(this).find("input[name='form_fields[time]']").val());
      form_data.append('Цель', jQuery(this).find("input[name='form_fields[target]']").val());
      form_data.append('Точка_входа', jQuery(this).find("input[name='form_fields[enter_dot]']").val());
      form_data.append('UTMS', jQuery(this).find("input[name='form_fields[utms]']").val());
      form_data.append('RoistatID', jQuery(this).find("input[name='form_fields[roi_id]']").val());
      form_data.append('Яндекс_Метрика', jQuery(this).find("input[name='form_fields[yandex_metr]']").val());
      form_data.append('Гугл_Метрика', jQuery(this).find("input[name='form_fields[google_metr]']").val());
      form_data.append('form_name', jQuery(this).find("input[name='form-name']").val());

      jQuery.ajax({
        url: "/wp-content/themes/rgtheme/webhook.php",
        type:     "POST", //метод отправки
        processData: false,
        contentType: false,
        data: form_data, // Сеарилизуем объект
        success: function(data){

        }
      });

      jQuery.ajax({
          url:     '/wp-content/themes/rgtheme/sendMail.php', //url страницы (action_ajax_form.php)
          type:     "POST", //метод отправки
          dataType: "html", //формат данных
          data: jQuery(this).serialize()+'&entry_url='+encodeURIComponent(JSON.parse(jQuery.cookie("businessurl")).url_first),  // Сеарилизуем объект
          success: function(response) { //Данные отправлены успешно
            location.href = '/thank-you';
          // 	result = jQuery.parseJSON(response);
          // 	console.log(result);
          	//jQuery('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
      	},
      	error: function(response) { // Данные не отправлены
              //jQuery('#result_form').html('Ошибка. Данные не отправлены.');

      	}
    	});
    })

    jQuery(".checki__form form").unbind('submit').bind('submit',function(e) {
      e.preventDefault()
      form_data.append('Телефон', jQuery(this).find("input[name='phone']").val());
      jQuery(this).find("input[name='form_fields[bitrix_id]']").val(jQuery.cookie('ASE_authUserId'));
      form_data.append('another_phone', jQuery(this).find("input[name='form_fields[another_phone]']").val());
      form_data.append('bitrix_id', jQuery(this).find("input[name='form_fields[bitrix_id]']").val());
      form_data.append('publication_code', jQuery(this).find("input[name='form_fields[publication_code]']").val());
      form_data.append('Время', jQuery(this).find("input[name='form_fields[time]']").val());
      form_data.append('Цель', jQuery(this).find("input[name='form_fields[target]']").val());
      form_data.append('Точка_входа', jQuery(this).find("input[name='form_fields[enter_dot]']").val());
      form_data.append('UTMS', jQuery(this).find("input[name='form_fields[utms]']").val());
      form_data.append('RoistatID', jQuery(this).find("input[name='form_fields[roi_id]']").val());
      form_data.append('Яндекс_Метрика', jQuery(this).find("input[name='form_fields[yandex_metr]']").val());
      form_data.append('Гугл_Метрика', jQuery(this).find("input[name='form_fields[google_metr]']").val());
      form_data.append('form_name', jQuery(this).find("input[name='form-name']").val());

      jQuery.ajax({
        url: "/wp-content/themes/rgtheme/webhook.php",
        type:     "POST", //метод отправки
        processData: false,
        contentType: false,
        data: form_data, // Сеарилизуем объект
        success: function(data){

        }
      });

      jQuery.ajax({
          url:     '/wp-content/themes/rgtheme/checkiMail.php', //url страницы (action_ajax_form.php)
          type:     "POST", //метод отправки
          dataType: "html", //формат данных
          data: jQuery(this).serialize()+'&entry_url='+encodeURIComponent(JSON.parse(jQuery.cookie("businessurl")).url_first),  // Сеарилизуем объект
          success: function(response) { //Данные отправлены успешно
             location.href = '/thank-you';
          // 	result = jQuery.parseJSON(response);
          // 	console.log(result);
          	//jQuery('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
      	},
      	error: function(response) { // Данные не отправлены
              //jQuery('#result_form').html('Ошибка. Данные не отправлены.');

      	}
    	});
    })

    jQuery('.h2Anchor').on( 'click', function(e){
      e.preventDefault()
      var el = jQuery(this);
      var dest = jQuery(".resheniya__content-wrap:nth-child("+el.attr('data-h2id')+")"); // получаем направление
      if(dest !== undefined && dest !== '') { // проверяем существование
          $('html').animate({
              scrollTop: $(dest).offset().top - 60 // прокручиваем страницу к требуемому элементу
          }, 500 // скорость прокрутки
          );
      }
      return false;
  });

  if (jQuery(".bottom-menu--resheniya").length != 0) {
    jQuery(window).scroll(function(){
      if (jQuery(document).scrollTop() > jQuery(".resheniya__content-wrap:nth-child(1)").offset().top - 100)
        jQuery(".bottom-menu").removeClass("bottom-menu--resheniya");
      else if (jQuery(document).scrollTop() < jQuery(".resheniya__content-wrap:nth-child(1)").offset().top)
        jQuery(".bottom-menu").addClass("bottom-menu--resheniya");
    });
  } else if (jQuery(".bottom-menu--mainpage").length != 0) {
    jQuery(window).scroll(function(){
      if (jQuery(document).scrollTop() > jQuery(".main-page__content").offset().top - 100)
        jQuery(".bottom-menu").removeClass("bottom-menu--mainpage");
      else if (jQuery(document).scrollTop() < jQuery(".main-page__content").offset().top)
        jQuery(".bottom-menu").addClass("bottom-menu--mainpage");
    });
  }


    if ($(".resheniya__btn-main .more__btn").length != 0) {
      document.querySelector(".resheniya__btn-main .more__btn").addEventListener("click", function(e) {
          e.preventDefault();
          this.classList.toggle("fold-active");
          document.querySelector(".resheniya__list--unfold").classList.toggle("resheniya__list--overlay");
          if (document.querySelector(".resheniya__list--unfold").style.maxHeight) {
            document.querySelector(".resheniya__list--unfold").style.maxHeight = null;
            document.querySelector(".more__btn-text").innerText = "Все решения";
          } else {
            document.querySelector(".resheniya__list--unfold").style.maxHeight = document.querySelector(".resheniya__list--unfold").scrollHeight + "px";
            document.querySelector(".more__btn-text").innerText = "Скрыть";
          }
        });
    }

    if ($(".eqvairing__btn").length != 0) {
      document.querySelector(".eqvairing__btn").addEventListener("click", function(e) {
          e.preventDefault();
          this.classList.toggle("fold-active");
          if (document.querySelector(".eqvairing_list--unfold").style.maxHeight) {
            document.querySelector(".eqvairing_list--unfold").style.maxHeight = null;
          } else {
            document.querySelector(".eqvairing_list--unfold").style.maxHeight = document.querySelector(".eqvairing_list--unfold").scrollHeight + "px";
          }
        });
    }

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		var acc = document.getElementsByClassName("footer__column-link--sub");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function(e) {

			e.preventDefault();
			this.classList.toggle("sub-active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
			  panel.style.maxHeight = null;
			} else {
			  panel.style.maxHeight = panel.scrollHeight + "px";
			}
		  });
		}
	}
    jQuery(".form-questions__send").one("click", function() {
        if (location.href.indexOf('?') > -1) {
            if (jQuery.cookie('utm_visit') == null) {
              jQuery.cookie('utm_visit', location.href.substr(location.href.indexOf("?") + 1));
            }
        }

        jQuery("input[name='form_fields[time]']").each(function() {
          jQuery(this).closest("form").find("input[name='form_fields[target]']").val(jQuery(this).closest(".form-questions").attr("name"));
        });

        jQuery("input[name='form_fields[enter_dot]']").val(location.href);
        jQuery("input[name='form_fields[utms]']").val(jQuery.cookie('utms'));
        jQuery("input[name='form_fields[roi_id]']").val(jQuery.cookie('roistat_visit'));
        jQuery("input[name='form_fields[yandex_metr]']").val(jQuery.cookie('_ym_uid'));
        jQuery("input[name='form_fields[google_metr]']").val(jQuery.cookie('_ga'));
    })

jQuery(".stati__description ul li a").click(function(e) {
    var thisId = jQuery(this).attr("href");
    if (thisId.indexOf('#') > -1) {
      e.preventDefault()
      jQuery('html, body').animate({
              scrollTop: jQuery(thisId).offset().top - 200
          }, 1000);
    }
})

if (jQuery("#widget-slider").length != 0) {
      jQuery('#widget-slider').owlCarousel({
        items: 1,
        slideSpeed: 500,
        loop: true,
        nav: true,
        dots: false,
        margin: 60,
        autoHeight:true,
        navText: [
          '<div class="wg-slider__arrows wg-slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.292969 16.293L1.70718 17.7072L10.4143 9.00007L1.70718 0.292969L0.292969 1.70718L7.58586 9.00008L0.292969 16.293Z" fill="#54BCE3"/></svg></div>',
          '<div class="wg-slider__arrows wg-slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.292969 16.293L1.70718 17.7072L10.4143 9.00007L1.70718 0.292969L0.292969 1.70718L7.58586 9.00008L0.292969 16.293Z" fill="#54BCE3"/></svg></div>'
        ],
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
            items: 2,
            margin: 20
          },
         // Ширина от 800 пикселей
         100: {
           // Количество элементов 3
           items: 1
         }
        }
      });
    }


jQuery(".preview_img img").click(function() {
    licIndex = jQuery(this).parent().parent().index()
    var data = {
      'action': 'blanki',
      'id': jQuery(this).attr('data-post-id')
    };
    jQuery.ajax({
      url:"/wp-admin/admin-ajax.php", // обработчик
      data:data, // данные
      type:'POST', // тип запроса
      success: function(data){
        jQuery("body").append(data);
        jQuery("#blanki__images").attr("data-index", licIndex);
        jQuery('#blanki__images').owlCarousel({
          items: 1,
          slideSpeed: 500,
          loop: true,
          nav: true,
          margin: 10,
          navText: [
            '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="36" viewBox="0 0 25 46" fill="none"><path d="M24 1L2 23L24 45" stroke="#fff" stroke-width="2"/></svg></div>',
            '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="36" viewBox="0 0 25 46" fill="none"><path d="M24 1L2 23L24 45" stroke="#fff" stroke-width="2"/></svg></div>'
          ],
          paginationSpeed : 6000,
          rewindSpeed : 6000,
          stopOnHover : true,
          startPosition: jQuery("#licenzii__lightbox-slider").attr("data-index")
        });
        jQuery(".blanki__lightbox-close").click(function() {
          jQuery(".blanki__lightbox").remove();
        })
        jQuery(".blanki__lightbox-overlay").click(function() {
          jQuery(".blanki__lightbox").remove();
        })
        jQuery(document).keydown(function(e) {
            if (e.which == 27) {
              jQuery(".blanki__lightbox").remove();
            }
        });
      }
    });
  })

  jQuery("a[href=#reg]").click(function(e) {
    var nowPosition = jQuery(window).scrollTop();
    e.preventDefault()
    jQuery.ajax({
      url: "/wp-content/themes/rgtheme/popups/registerPu.php",
      success: function(data){
        jQuery("body").css("overflow", "hidden").append(data);
        jQuery(window).scrollTop(nowPosition);

        jQuery("input[name='phone']").on('input', function() {
          jQuery("input[name='form_fields[another_phone]']").val(jQuery(this).val().replace(/[^\d]/g, '').substr(jQuery(this).val().replace(/[^\d]/g, '').length - 10));
        })
        if (location.href.indexOf('?') > -1) {
            if (jQuery.cookie('utm_visit') == null) {
              jQuery.cookie('utm_visit', location.href.substr(location.href.indexOf("?") + 1));
            }
        }

        // jQuery("input[name='form_fields[time]']").each(function() {
        //   jQuery(this).closest("form").find("input[name='form_fields[target]']").val(jQuery(this).closest(".form-questions").attr("name"));
        // });

        jQuery("input[name='form_fields[enter_dot]']").val(location.href);
        jQuery("input[name='form_fields[utms]']").val(jQuery.cookie('utms'));
        jQuery("input[name='form_fields[roi_id]']").val(jQuery.cookie('roistat_visit'));
        jQuery("input[name='form_fields[yandex_metr]']").val(jQuery.cookie('_ym_uid'));
        jQuery("input[name='form_fields[google_metr]']").val(jQuery.cookie('_ga'));

        jQuery(".reg-form").unbind('submit').bind('submit',function(e) {
          e.preventDefault()
          var form_data  = new FormData();


          form_data.append('Телефон', jQuery(this).find("input[name='phone']").val());
          jQuery(this).find("input[name='form_fields[bitrix_id]']").val(jQuery.cookie('ASE_authUserId'));
          form_data.append('another_phone', jQuery(this).find("input[name='form_fields[another_phone]']").val());
          form_data.append('bitrix_id', jQuery(this).find("input[name='form_fields[bitrix_id]']").val());
          form_data.append('publication_code', jQuery(this).find("input[name='form_fields[publication_code]']").val());
          form_data.append('Время', jQuery(this).find("input[name='form_fields[time]']").val());
          form_data.append('Цель', jQuery(this).find("input[name='form_fields[target]']").val());
          form_data.append('Точка_входа', jQuery(this).find("input[name='form_fields[enter_dot]']").val());
          form_data.append('UTMS', jQuery(this).find("input[name='form_fields[utms]']").val());
          form_data.append('RoistatID', jQuery(this).find("input[name='form_fields[roi_id]']").val());
          form_data.append('Яндекс_Метрика', jQuery(this).find("input[name='form_fields[yandex_metr]']").val());
          form_data.append('Гугл_Метрика', jQuery(this).find("input[name='form_fields[google_metr]']").val());
          form_data.append('form_name', jQuery(this).attr("name"));

          var roistat_visit = jQuery(this).find("input[name='form_fields[roi_id]']").val();
          var url_first = encodeURIComponent(JSON.parse(jQuery.cookie("businessurl")).url_first);
          var userphone = jQuery(this).find("input[name='phone']").val().replace(/[^\d]/g, '');

          jQuery.ajax({
            url: "/wp-content/themes/rgtheme/webhook.php",
            type:     "POST", //метод отправки
            processData: false,
            contentType: false,
            data: form_data, // Сеарилизуем объект
            success: function(data){

            }
          });

          jQuery.ajax({
              url:     '/wp-content/themes/rgtheme/sendMail.php', //url страницы (action_ajax_form.php)
              type:     "POST", //метод отправки
              dataType: "html", //формат данных
              data: jQuery(this).serialize()+'&entry_url='+encodeURIComponent(JSON.parse(jQuery.cookie("businessurl")).url_first),  // Сеарилизуем объект
              success: function(response) { //Данные отправлены успешно
                location.href = 'https://enter.business.ru/?roistat_visit='+ roistat_visit +'&url_first='+ url_first +'&userphone=' + userphone;
              // 	result = jQuery.parseJSON(response);
              // 	console.log(result);
              	//jQuery('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
          	},
          	error: function(response) { // Данные не отправлены
                  //jQuery('#result_form').html('Ошибка. Данные не отправлены.');

          	}
        	});
			ym(16081030,'reachGoal','nezaregclass365');
        })

        jQuery(".modal__close").click(function() {
            jQuery("body").removeAttr("style");
            jQuery(this).parents(".modal").remove();
        })
        jQuery(".modal__overlay").click(function() {
            jQuery("body").removeAttr("style");
            jQuery(this).parents(".modal").remove();
        })
        jQuery(document).keydown(function(e) {
            if (e.which == 27) {
                jQuery("body").removeAttr("style");
                jQuery(".modal").remove();
            }
        });
      }
    });
  })
});
