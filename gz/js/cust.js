jQuery(document).ready(function() {

    jQuery("input[type=tel]:not(#cbkPhoneInput):not(.ws-preform-input)").inputmask({
        "mask": "+7 (999)999-99-99"
    });

    jQuery(document).on("DOMNodeInserted", function (event) {
      if (event.target.classList.contains('modal')) {
        jQuery("input[type=tel]:not(#cbkPhoneInput):not(.ws-preform-input)").inputmask({
            "mask": "+7 (999)999-99-99"
        });
      }
    })

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



    jQuery(".tabs-btn").click(function() {
        var thisBtn = jQuery(this);
        thisBtn.parents(".tabs-buttons").find(".tabs-btn").removeClass("tabs-btn--active")
        thisBtn.addClass("tabs-btn--active")
        jQuery(".comfort__item").css("opacity", "0")
        jQuery(".comfort__item").eq(jQuery(this).index()).css("opacity", "1")
        jQuery(".contacts__item").css("display", "none")
        jQuery(".contacts__item").eq(jQuery(this).index()).css("display", "grid")
    })

    function caseSwitcher(obj) {
      obj.parent().find(".cases__switcher-indicate").attr("data-pos", obj.val())
    }

    jQuery(".cases__switcher-radio").click(function() {
      caseSwitcher(jQuery(this));
    })

    jQuery(".otzyvy__video-play").click(function() {
      jQuery(this).next().css("height",jQuery(this).parent().height())
      jQuery(this).next().css("width",jQuery(this).parent().width())
      jQuery(this).parent().html('<iframe width="363" height="220" src="' + jQuery(this).next().data("video-link") + '?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
    })

    jQuery(".main-screen__video-wrap").html(`
      <video class="main-screen__video" autoplay muted loop>
        <source src="/wp-content/uploads/2021/07/autoplus_bg_video.mp4" type="video/mp4">
      </video>
    `);

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
  					// selectGap.text(jQuery(this).find('span').text());

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

    //Попап на уход

    // function leaveFunc() {
    //   jQuery.ajax({
    //     url: "/wp-content/themes/rgtheme/popups/leave-pu.php",
    //     success:function(data){
    //       if( data ) {
    //         jQuery("body").append(data);
    //         sendForm(jQuery(".send-form"));
    //         jQuery('body').css({'overflow': 'hidden', 'height': '100vh'});
    //         jQuery(".modal__close").click(function() {
    //             jQuery(this).parents(".modal").remove();
    //             jQuery('body').removeAttr('style');
    //         })
    //         jQuery(".modal__overlay").click(function() {
    //             jQuery(this).parents(".modal").remove();
    //             jQuery('body').removeAttr('style');
    //         })
    //         jQuery(document).keydown(function(e) {
    //             if (e.which == 27) {
    //                 jQuery(".modal").remove();
    //                 jQuery('body').removeAttr('style');
    //             }
    //         });
    //       }
    //     }
    //   });
    // }
    // if (location.pathname != '/thank-you/' || location.pathname != '/thank-you') {
    //   setTimeout(function() {
    //     // localStorage.removeItem('leave');
    //     jQuery(document).mouseleave(function(e) {
    //         if (!localStorage.getItem('leave')) {
    //           localStorage.setItem('leave', true);
    //           leaveFunc()
    //         }
    //     });
    //   }, 6000)
    // }

    jQuery("a[href='#calc']").each(function() {
      jQuery(this).click(function(e) {
        e.preventDefault();
        var top = jQuery('.calc').offset().top - 100;
        jQuery('body,html').animate({
            scrollTop: top
        }, 1000);
      })
    })

    jQuery(".accardeon__zag").each(function() {
      jQuery(this).click(function(){
        jQuery(this).toggleClass("sub-active")
        var panel = jQuery(this).next();
        panel.slideToggle();
      })
    })

    if (jQuery("#shops-slider").length != 0) {
      jQuery('#shops-slider').owlCarousel({
        items: 3,
        slideSpeed: 500,
        loop: true,
        nav: false,
        stagePadding: 520,
        dots: true,
        margin: 17,
        navText: [
          '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>',
          '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>'
        ],
        autoplay: false,
        autoplayTimeout: 6000,
        paginationSpeed : 6000,
        rewindSpeed : 6000,
        stopOnHover : true,
        responsive: {
         1024: {
           items: 2
         },
         800: {
            items: 2
          },
         100: {
           items: 1
         }
        }
      });
    }

    if (jQuery("#advantages-slider").length != 0) {
      jQuery('#advantages-slider').owlCarousel({
        items: 3,
        slideSpeed: 500,
        loop: true,
        nav: true,
        dots: false,
        margin: 17,
        navText: [
          '',
          ''
        ],
        autoplay: false,
        autoplayTimeout: 6000,
        paginationSpeed : 6000,
        rewindSpeed : 6000,
        stopOnHover : true,
        responsive: {
         1024: {
           items: 3
         },
         768: {
            items: 1
          },
         100: {
           autoHeight: true,
           items: 1
         }
        }
      });
    }

    if (jQuery("#partners__list").length != 0) {
      jQuery('#partners__list').owlCarousel({
        items: 3,
        slideSpeed: 500,
        loop: true,
        nav: true,
        dots: false,
        margin: 17,
        navText: [
          '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>',
          '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>'
        ],
        autoplay: false,
        autoplayTimeout: 6000,
        paginationSpeed : 6000,
        rewindSpeed : 6000,
        stopOnHover : true,
        responsive: {
         1024: {
           items: 3
         },
         768: {
            items: 1
          },
         100: {
           autoHeight: true,
           items: 1
         }
        }
      });
    }

    if (jQuery("#otzyvy-text__slider").length != 0) {
      jQuery('#otzyvy-text__slider').owlCarousel({
          items: 1,
          slideSpeed: 500,
          loop: true,
          nav: true,
          dots: false,
          margin: 17,
          navText: [
            '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>',
            '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>'
          ],
          autoplay: false,
          autoHeight: true,
          autoplayTimeout: 6000,
          paginationSpeed : 6000,
          rewindSpeed : 6000,
          stopOnHover : true,
          responsive: {
           1024: {
             items: 1
           },
           768: {
              items: 1
            },
           100: {
             items: 1
           }
          }
        });
    }

    if (jQuery("#otzyvy-video__slider").length != 0) {
      jQuery('#otzyvy-video__slider').owlCarousel({
          items: 1,
          slideSpeed: 500,
          loop: true,
          nav: true,
          dots: false,
          margin: 17,
          navText: [
            '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>',
            '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>'
          ],
          autoplay: false,
          autoHeight: true,
          autoplayTimeout: 6000,
          paginationSpeed : 6000,
          rewindSpeed : 6000,
          stopOnHover : true,
          responsive: {
           1024: {
             items: 1
           },
           768: {
              items: 1
            },
           100: {
             items: 1
           }
          }
        });
    }

    jQuery(".otzyvy-video__slider-play").click(function() {
      jQuery(this).next().css("height",jQuery(this).parent().height())
      jQuery(this).next().css("width",jQuery(this).parent().width())
      jQuery(this).parent().html('<iframe width="670" height="481" src="' + jQuery(this).next().data("video-link") + '?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
    })

function filterFunc(offset, postId, termId) {
    var data = {
      'action': 'worksdone',
      'offset': offset,
      'perPage': 8,
      'postId': postId,
      'termId': termId,
      'nav': true
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data){
        if (data.replace(/\s/g, '') != "") {
          jQuery(".cases__wrap").html(data)
          jQuery(".cases__switcher-radio").click(function() {
            caseSwitcher(jQuery(this));
          })
          jQuery(".nav-btn").click(function() {
            jQuery(".nav-btn").removeClass("nav-btn--active");
              jQuery(this).addClass("nav-btn--active");
              var offsetNum = jQuery(this).attr("offset");
              var postId = jQuery(".worksdone__filter-done").val()
              var termId = jQuery(".worksdone__filter-mark").val();
              filterFunc(offsetNum, postId, termId);
            })
        }
        else {
          jQuery(".cases__wrap").html("<div class='products__not-found'>Не найдено</div>")
        }
      }
    });
}

jQuery(".nav-btn").click(function() {
  jQuery(".nav-btn").removeClass("nav-btn--active");
  jQuery(this).addClass("nav-btn--active");
  var offsetNum = jQuery(this).attr("offset");
  var postId = jQuery(".worksdone__filter-done").val()
  var termId = jQuery(".worksdone__filter-mark").val();
  filterFunc(offsetNum, postId, termId);
})

function otzyvyFunc(offset) {
    var data = {
      'action': 'otzyvy',
      'offset': offset,
      'perPage': 12,
      'nav': true
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data){
        if (data.replace(/\s/g, '') != "") {
          jQuery(".otzyvy__wrap").html(data);
          jQuery(".otzyvy__nav-btn").click(function() {
            var offsetNum = jQuery(this).attr("offset");
            otzyvyFunc(offsetNum);
          })
        }
        else {
          jQuery(".otzyvy__wrap").html("<div class='products__not-found'>Не найдено</div>")
        }
      }
    });
}

jQuery(".otzyvy__nav-btn").click(function() {
  var offsetNum = jQuery(this).attr("offset");
  otzyvyFunc(offsetNum);
})


jQuery(".worksdone__filter-mark").change(function() {
  var offsetNum = jQuery(this).attr("offset");
  var postId = jQuery(".worksdone__filter-done").val();
  var termId = jQuery(".worksdone__filter-mark").val();
  filterFunc(offsetNum, postId, termId);
})

jQuery(".worksdone__filter-done").change(function() {
  var offsetNum = jQuery(this).attr("offset");
  var postId = jQuery(".worksdone__filter-done").val();
  var termId = jQuery(".worksdone__filter-mark").val();
  filterFunc(offsetNum, postId, termId);
})


    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    jQuery(".files-form").submit(function(e) {
      e.preventDefault();
      var form_data  = new FormData();
      var file_data = jQuery('#form__files').prop('files');
      for (var i = 0; i < file_data.length; i++) {
        form_data.append('file' + (i + 1), file_data[i]);
      }
      form_data.append('name', jQuery(this).parent().find("input[name=name]").val());
      form_data.append('phone', jQuery(this).parent().find("input[name=phone]").val());
      form_data.append('file', file_data);
      jQuery.ajax({
            url:     '/wp-content/themes/rgtheme/mail.php', //url страницы (action_ajax_form.php)
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

    jQuery(".tabs-btn").click(function() {
        var thisBtn = jQuery(this);
        thisBtn.parents(".tabs-buttons").find(".tabs-btn").removeClass("tabs-btn--active")
        thisBtn.addClass("tabs-btn--active")
    })

    jQuery(".projects__tabs-btn").click(function() {
      var postId = (jQuery(this).data('post-id')) ? jQuery(this).data('post-id') : "";
      jQuery.ajax({
          url: "/wp-admin/admin-ajax.php",
          data: {
            'action': 'projects_filter',
            'postId': postId
          },
          type:'POST',
          success: function(data) {
                jQuery(".projects__tabs-content").html(data);
          }
      });
    })

    jQuery(".prices__tabs-btn").click(function() {
      var termId = (jQuery(this).data('term-id')) ? jQuery(this).data('term-id') : "";
      jQuery.ajax({
          url: "/wp-admin/admin-ajax.php",
          data: {
            'action': 'price_filter',
            'termId': termId
          },
          type:'POST',
          success: function(data) {
                jQuery(".prices__tabs-content").html(data);
          }
      });
    })

    function sendMail(form) {
        jQuery.ajax({
            url: '/wp-content/themes/rgtheme/mail.php', //url страницы (action_ajax_form.php)
            type: "POST", //метод отправки
            dataType: "html", //формат данных
            data: form, // Сеарилизуем объект
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
                sendMail(jQuery(this).serialize());
            });
        })
    }


    sendForm(jQuery(".send-form"));

})

function road_to_anchor(className) {
    var top = jQuery(className).offset().top - 100;
    jQuery('body,html').animate({
        scrollTop: top
    }, 1000);
};

//Мобильное меню

jQuery('.mobileMenu').on('click', function() {
    this.classList.toggle("change");
    jQuery(".menu-menju-container").css("max-height", jQuery(window).height());
    jQuery('.menu-menju-container').slideToggle(300, function() {
        if (jQuery(this).css('display') === "none") {
            jQuery(this).removeAttr('style')
        }
    })
});

// jQuery(".top-menu--mobile .menu-item-has-children > a .top-menu__arrow").each(function() {
//       jQuery(this).click(function(e) {
//           e.preventDefault();
//           jQuery(this).parent().toggleClass("sub-active")
//           var panel = jQuery(this).parent().next();
//           panel.slideToggle()
//       })
//   })
