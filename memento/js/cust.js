jQuery(document).ready(function(){
  jQuery("input[type=tel]:not(#cbkPhoneInput):not(.ws-preform-input)").inputmask({
        "mask": "+7 (999)999-99-99"
    });

  jQuery(document).on("DOMNodeInserted", function (event) {
    jQuery("input[type=tel]").inputmask({"mask": "+7999-999-99-99"});
  })




      var fired = false;
     window.addEventListener('scroll', () => {
         if (fired === false) {
           fired = true;
           if (jQuery("#map").length != 0) {
            jQuery.ajax({
              url: "/wp-content/themes/rgtheme/google-map.php",
              success: function(data){
                jQuery("footer").append(data);
              }
            });
          }
         }
     });



  function sendMail(form) {
      // var form_data = form_data;
      //console.log(form);
      jQuery.ajax({
            url:     '/wp-content/themes/rgtheme/mail.php', //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            processData: false,
              contentType: false,
            data: form, // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
              //console.log(response);
				   console.log(response);
               if (response) {
                    location.href = '/thank-you/';
                  }
          },
          error: function(response) { // Данные не отправлены
          }
       });
    }

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

    function sendForm(formClass) {
      formClass.each(function() {
        jQuery(this).submit(function(e) {
            e.preventDefault();
            var form_data  = new FormData();
            var formObj = jQuery(this).serializeArray();
            formObj.forEach((item, i) => {
              form_data.append(item.name, item.value);
            });
            if(jQuery(this).find('.file_popup').length != 0){
              var file_data = jQuery(this).find('.file_popup').prop('files')[0];
            }
            form_data.append('file', file_data);
            sendMail(form_data);
          });
      })
    }

    sendForm(jQuery(".send-form"));

    jQuery(".hide-modal").click(function() {
      if (jQuery(this).hasClass("pu-close")) {
        jQuery(this).parent().hide();
      } else {
        jQuery(this).parent().parent().hide();
      }
    })

    function monumentsCalc() {
      jQuery("#monuments .monuments__item").click(function() {
        var data = {
          'action': 'calc',
          'postId': jQuery(this).attr('data-post-id')
        };
        jQuery.ajax({
            url: "/wp-admin/admin-ajax.php",
            data:data,
            type:'POST',
            success: function(data){
              jQuery("body").append(data);
              jQuery(".calc__variant").change(function() {
                jQuery(".calc__price-val").text((Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value"))).toLocaleString('ru-RU'))
                jQuery("#calc__price-input").val(Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value") ))
              })
              jQuery(".calc__box-wrap .filter-select").change(function() {
                jQuery(".calc__price-val").text((Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value"))).toLocaleString('ru-RU'))
                jQuery("#calc__price-input").val(Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value") ))
              })
              jQuery(".calc__form-wrap .send-form").submit(function(e) {
                e.preventDefault();
                var form_data  = new FormData();
                var formObj = jQuery(this).serializeArray();
                formObj.forEach((item, i) => {
                  form_data.append(item.name, item.value);
                });
                if(jQuery(this).find('.file_popup').length != 0){
                  var file_data = jQuery(this).find('.file_popup').prop('files')[0];
                }
                form_data.append('file', file_data);
                sendMail(form_data);
              });
              jQuery(".modal__close").click(function() {
                  jQuery(this).parents(".modal").remove();
              })
              jQuery(".modal__overlay").click(function() {
                  jQuery(this).parents(".modal").remove();
              })
              jQuery(document).keydown(function(e) {
                  if (e.which == 27) {
                      jQuery(".modal").remove();
                  }
              });
            },
          	error: function(response) { // Данные не отправлены
                  //jQuery('#result_form').html('Ошибка. Данные не отправлены.');

          	}
        	});
      })
    }
    monumentsCalc();

    function complexsCalc() {
      jQuery("#complexs .monuments__item").click(function() {
        var data = {
          'action': 'calc',
          'postId': jQuery(this).attr('data-post-id'),
          'type': 'complexs'
        };
        jQuery.ajax({
            url: "/wp-admin/admin-ajax.php",
            data:data,
            type:'POST',
            success: function(data){
              jQuery("body").append(data);
              jQuery(".calc__variant").change(function() {
                jQuery(".calc__price-val").text((Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant--cvet:checked").data("value")) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value"))).toLocaleString('ru-RU'))
                jQuery("#calc__price-input").val(Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant--cvet:checked").data("value")) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value") ))
              })
              jQuery(".calc__box-wrap .filter-select").change(function() {
                jQuery(".calc__price-val").text((Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant--cvet:checked").data("value")) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value"))).toLocaleString('ru-RU'))
                jQuery("#calc__price-input").val(Number(jQuery("#calc__price-basic").val()) + Number(jQuery(".calc__variant--cvet:checked").data("value")) + Number(jQuery(".calc__variant:checked").data("value")) + Number(jQuery(".calc__box-wrap #portret option:selected").data("value")) + Number(jQuery(".calc__box-wrap #symbol option:selected").data("value")) + Number(jQuery(".calc__box-wrap #fio-date option:selected").data("value") ))
              })
              jQuery(".calc__form-wrap .send-form").submit(function(e) {
                e.preventDefault();
                var form_data  = new FormData();
                var formObj = jQuery(this).serializeArray();
                formObj.forEach((item, i) => {
                  form_data.append(item.name, item.value);
                });
                if(jQuery(this).find('.file_popup').length != 0){
                  var file_data = jQuery(this).find('.file_popup').prop('files')[0];
                }
                form_data.append('file', file_data);
                sendMail(form_data);
              });
              jQuery(".modal__close").click(function() {
                  jQuery(this).parents(".modal").remove();
              })
              jQuery(".modal__overlay").click(function() {
                  jQuery(this).parents(".modal").remove();
              })
              jQuery(document).keydown(function(e) {
                  if (e.which == 27) {
                      jQuery(".modal").remove();
                  }
              });
            },
            error: function(response) { // Данные не отправлены
                  //jQuery('#result_form').html('Ошибка. Данные не отправлены.');

            }
          });
      })
    }
    complexsCalc();

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
    });

  jQuery('.mobileMenu').on('click', function() {
         this.classList.toggle("change");
         jQuery(".top-menju-container").css("max-height", jQuery(window).height());
         jQuery('.top-menju-container').slideToggle(300, function() {
             if (jQuery(this).css('display') === "none") {
                 jQuery(this).removeAttr('style')
             }
         })
     });

    jQuery('.top-menu--mobile li a').click(function() {
     jQuery(this).parents(".top-menju-container").prev().toggleClass("change");
     jQuery(".top-menju-container").css("max-height", jQuery(window).height());
     jQuery('.top-menju-container').slideToggle(300, function() {
         if (jQuery(this).css('display') === "none") {
             jQuery(this).removeAttr('style')
         }
     })
    })

    jQuery(".map__place-select").change(function() {
      jQuery(".map__adress-text span:not(.map__adress-city)").text(jQuery(this).val() )
    })

  jQuery(".road_to_anchor a").click(function(e) {
    e.preventDefault();
    var top = jQuery(jQuery(this).attr('href')).offset().top - 100;
    jQuery('body,html').animate({
        scrollTop: top
    }, 1000);
  })

  function filterFunc(materialId, religiaId, priceOrder, oreientationId, colorId, containerName, actionName, perPage) {
    var data = {
      'action': actionName,
      'materialId': materialId,
      'religiaId': religiaId,
      'priceOrder': priceOrder,
      'oreientationId': oreientationId,
      'colorId': colorId,
      'perPage': perPage
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data){
        if (data.replace(/\s/g, '') != "") {
          jQuery("."+containerName).html(data);
          monumentsCalc();
          complexsCalc();
        }
        else {
          jQuery(".cases__wrap").html("<div class='products__not-found'>Не найдено</div>")
        }
      }
    });
}



jQuery(".filter-wrap--monuments .filter-select").change(function() {
  var materialId = jQuery(".filter-wrap--monuments #material").val();
  var religiaId = jQuery(".filter-wrap--monuments #religia").val();
  var priceOrder = jQuery(".filter-wrap--monuments #price").val();
  var oreientationId = jQuery(".filter-wrap--monuments #oreientation").val();
  var colorId = jQuery(".filter-wrap--monuments #color").val();
  filterFunc(materialId, religiaId, priceOrder, oreientationId, colorId, 'monuments__container', 'monuments');
})

jQuery(".filter-wrap--complexs .filter-select").change(function() {
  var materialId = jQuery(".filter-wrap--complexs #material").val();
  var religiaId = jQuery(".filter-wrap--complexs #religia").val();
  var priceOrder = jQuery(".filter-wrap--complexs #price").val();
  var oreientationId = jQuery(".filter-wrap--complexs #oreientation").val();
  var colorId = jQuery(".filter-wrap--complexs #color").val();
  filterFunc(materialId, religiaId, priceOrder, oreientationId, colorId, 'kompleksy__container', 'kompleksy');
})

jQuery(".monuments__see-all").click(function() {
  var perPage = -1;
  filterFunc('', '', '', '', '', 'monuments__container', 'monuments', perPage);
})

jQuery(".kompleksy__see-all").click(function() {
  var perPage = -1;
  filterFunc('', '', '', '', '', 'kompleksy__container', 'kompleksy', perPage);
})


});



// //localStorage.removeItem('leave');
setTimeout(function(){
jQuery(document).mouseleave(function(e){
    // if (!localStorage.getItem('leave')) {
    //   localStorage.setItem('leave', true);
    //leaveFunc();
    //}
    jQuery(".leave-popup").css("display","block");
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

});
}, 10000);
