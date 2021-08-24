jQuery(document).ready(function() {
    jQuery(".animate-bg__image").addClass("animate-bg__image--show");
    if (jQuery("#robot").length != 0) {
      const robot = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/robot.riv',
          canvas: document.getElementById('robot'),
          autoplay: true,
      });
    }
    if (jQuery("#dino").length != 0) {
      const dino = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/dino.riv',
          canvas: document.getElementById('dino'),
          autoplay: true,
      });
    }
    if (jQuery("#obelisk").length != 0) {
      const obelisk = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/obelisk.riv',
          canvas: document.getElementById('obelisk'),
          autoplay: true,
      });
    }
    if (jQuery("#ship").length != 0) {
      const ship = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/ship.riv',
          canvas: document.getElementById('ship'),
          autoplay: true,
      });
    }
    if (jQuery("#flower").length != 0) {
      const ship = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/flower.riv',
          canvas: document.getElementById('flower'),
          autoplay: true,
      });
    }
    if (jQuery("#ctuhl").length != 0) {
      const ship = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/ctuhl.riv',
          canvas: document.getElementById('ctuhl'),
          autoplay: true,
      });
    }
    if (jQuery("#robo").length != 0) {
      const ship = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/robo.riv',
          canvas: document.getElementById('robo'),
          autoplay: true,
      });
    }
    if (jQuery("#ship2").length != 0) {
      const ship = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/ship2.riv',
          canvas: document.getElementById('ship2'),
          autoplay: true,
      });
    }
    if (jQuery("#cult").length != 0) {
      const ship = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/cult.riv',
          canvas: document.getElementById('cult'),
          autoplay: true,
      });
    }
    if (jQuery("#heart").length != 0) {
      const ship = rive.Rive.new({
          src: '/wp-content/themes/rgtheme/images/heart.riv',
          canvas: document.getElementById('heart'),
          autoplay: true,
      });
    }



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

    jQuery(".accardeon__zag").each(function() {
      jQuery(this).click(function(){
        jQuery(this).toggleClass("sub-active")
        var panel = jQuery(this).next();
        panel.slideToggle();
      })
    })

    if (jQuery("#family__slider").length != 0) {
      jQuery('#family__slider').owlCarousel({
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
         800: {
            items: 2
          },
         100: {
           items: 1
         }
        }
      });
    }

    if (jQuery(".project__etaps-gallery").length != 0) {
      jQuery('.project__etaps-gallery').each(function() {
        jQuery(this).owlCarousel({
          items: 1,
          slideSpeed: 500,
          loop: true,
          nav: false,
          dots: false,
          margin: 17,
          // navText: [
          //   '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>',
          //   '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#E50303"/></svg></div>'
          // ],
          autoplay: true,
          autoplayTimeout: 6000,
          paginationSpeed : 6000,
          rewindSpeed : 6000,
          stopOnHover : true,
          responsive: {
           1024: {
             items: 1
           },
           800: {
              items: 1
            },
           100: {
             items: 1
           }
          }
        });
      })
    }

    if (jQuery("#projects__slider").length != 0) {
      jQuery('#projects__slider').owlCarousel({
        items: 1,
        slideSpeed: 500,
        loop: true,
        nav: true,
        dots: false,
        margin: 17,
        autoHeight: true,
        navText: [
          '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#fff"/></svg></div>',
          '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#fff"/></svg></div>'
        ],
        autoplay: false,
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

    if (jQuery("#otzyvy-video__slider-arc").length != 0) {
      var owl_slider = jQuery('#otzyvy-video__slider-arc');
      var item_amount = parseInt( owl_slider.find('.otzyvy-video__slider-item').length );
      var true_false = 0;
      if ( item_amount <=1 )
        true_false = false;
      else
        true_false = true;

      jQuery('#otzyvy-video__slider-arc').owlCarousel({
          items: 3,
          slideSpeed: 500,
          loop: true_false,
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
             items: 3
           },
           768: {
              items: 2
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


    // function getCookie(name) {
    //     let matches = document.cookie.match(new RegExp(
    //         "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    //     ));
    //     return matches ? decodeURIComponent(matches[1]) : undefined;
    // }
    //
    // jQuery(".files-form").submit(function(e) {
    //   e.preventDefault();
    //   var form_data  = new FormData();
    //   var file_data = jQuery('#form__files').prop('files');
    //   for (var i = 0; i < file_data.length; i++) {
    //     form_data.append('file' + (i + 1), file_data[i]);
    //   }
    //   form_data.append('name', jQuery(this).parent().find("input[name=name]").val());
    //   form_data.append('phone', jQuery(this).parent().find("input[name=phone]").val());
    //   form_data.append('file', file_data);
    //   jQuery.ajax({
    //         url:     '/wp-content/themes/rgtheme/mail.php', //url страницы (action_ajax_form.php)
    //         type:     "POST", //метод отправки
    //         processData: false,
    //         contentType: false,
    //         data: form_data, // Сеарилизуем объект
    //         success: function(response) { //Данные отправлены успешно
    //            if (response) {
    //                 location.href = '/thank-you/';
    //               }
    //       },
    //       error: function(response) { // Данные не отправлены
    //
    //       }
    //    });
    // })

    jQuery(".tabs-btn").click(function() {
        var thisBtn = jQuery(this);
        thisBtn.parents(".tabs-buttons").find(".tabs-btn").removeClass("tabs-btn--active")
        thisBtn.addClass("tabs-btn--active")
    })

    jQuery(".projects__tabs-btn").click(function() {
      var postId = (jQuery(this).data('post-id')) ? jQuery(this).data('post-id') : "";
      var termId = (jQuery(this).data('term-id')) ? jQuery(this).data('term-id') : "";
      var postsType = (jQuery(this).data('type')) ? jQuery(this).data('type') : "";
      jQuery.ajax({
          url: "/wp-admin/admin-ajax.php",
          data: {
            'action': 'projects_filter',
            'postId': postId,
            'termId': termId,
            'postsType': postsType
          },
          type:'POST',
          success: function(data) {
            console.log(postsType == 'usl');
            if (postsType == 'usl') {
                jQuery(".projects__tabs-content--tasks").html(data);
            } else {
                jQuery(".projects__tabs-content").html(data);
            }
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


    sendForm(jQuery(".send-from"));

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

if (jQuery("#four").length != 0) {
  const TWO_PI = Math.PI * 2;

  // canvas settings
  var viewWidth = 512,
      viewHeight = 512,
      glitchCanvas = document.getElementById("four"),
      ctx;

  var image,
      glitchImageData,
      originalImageData,
      pixels;

  // these control glitching, and are in turn controlled by TweenMax
  var gvars = {
      waveAmp0:0,
      waveFrq0:1,
      waveOfs0:0,
      waveAmp1:0,
      waveFrq1:1,
      waveOfs1:0,
      pos0:0,
      pos1:0,
      pos2:0
  };

  var cosCache0 = [];
  var cosCache1 = [];

  window.onload = function() {
      image = new Image();
      image.crossOrigin = 'Anonymous';
      image.onload = imageLoaded;
      image.src = '/wp-content/uploads/2021/05/Group-97.svg';

      function imageLoaded() {
          initCanvas();
          createImageData();
          processImageData();
          setupTweens();

          requestAnimationFrame(loop);
      }
  };

  function initCanvas() {
      glitchCanvas.width = viewWidth;
      glitchCanvas.height = viewHeight;
      ctx = glitchCanvas.getContext('2d');
  }
  // draw the image into the canvas and grab the pixel data
  // the image is drawn with an offset, because the white border looks kinda nice
  function createImageData() {
      ctx.fillStyle = '#f7f7f7';
      ctx.fillRect(0, 0, viewWidth, viewHeight);
      ctx.drawImage(image, 0, 0, viewWidth, viewHeight);

      originalImageData = ctx.getImageData(0, 0, viewWidth, viewHeight);
      glitchImageData = ctx.getImageData(0, 0, viewWidth, viewHeight);

      ctx.clearRect(0, 0, viewWidth, viewHeight);
  }
  // split pixel data (red, green, blue, alpha) into pixels and make a grid
  // alpha is ignored because it is always 255
  function processImageData() {
      var data = originalImageData.data,
          pixelCount = data.length / 4,
          pixelIndex = 0,
          x, y;

      pixels = [];

      for (var i = 0; i < pixelCount; i++) {
          pixelIndex = i * 4;
          x = i % viewWidth;
          y = Math.floor(i / viewHeight);

          if (!pixels[y]) pixels[y] = [];

          pixels[y][x] = [
              data[pixelIndex + 0], // red
              data[pixelIndex + 1], // green
              data[pixelIndex + 2]  // blue
          ];
      }
  }

  function setupTweens() {
      var tl0 = new TimelineMax({repeat:-1, yoyo:true});
      tl0.to(gvars, 0.8, {waveAmp0:64, waveFrq0:16, waveOfs0:16, ease:Back.easeOut, delay:0.5});

      var tl1 = new TimelineMax({repeat:-1, yoyo:true});
      tl1.to(gvars, 2, {waveAmp1:128, waveFrq1:8, waveOfs1:64, ease:Elastic.easeIn, delay:0.25});

      var tl2 = new TimelineMax({repeat:-1, yoyo:true});
      tl2.to(gvars, 1, {pos0:256, ease:Bounce.easeInOut, delay:4});

      var tl3 = new TimelineMax({repeat:-1, yoyo:true});
      tl3.to(gvars, 5, {pos1:128, pos2:512, ease:Cubic.easeInOut, delay:2});
  }

  function update() {
      var data = glitchImageData.data,
          row,
          pixelIndex = 0;
      // fraction of x and y of width and height
      var fx, fy;
      // red, green and blue channel pixel coordinates
      var rx, ry,
          gx, gy,
          bx, by;

      var wave0Sin,
          wave1Sin,
          wave0Cos,
          wave1Cos,
          pos0,
          pos1,
          pos2;

      cosCache0.length = 0;
      cosCache1.length = 0;

      for (var y = 0; y < viewHeight; y++) {
          row = pixels[y];
          fy = y / viewHeight;

          wave0Sin = Math.sin(gvars.waveOfs0 + gvars.waveFrq0 * fy) * gvars.waveAmp0;
          wave1Sin = Math.sin(gvars.waveOfs1 + gvars.waveFrq1 * fy) * gvars.waveAmp1;
          pos1 = gvars.pos1 * fy;

          for (var x = 0; x < viewWidth; x++) {
              pixelIndex = (y * viewWidth + x) * 4;
              fx = x / viewWidth;

              if (cosCache0[x] !== undefined) {
                wave0Cos = cosCache0[x];
              }
              else {
                wave0Cos = Math.cos(gvars.waveOfs0 + gvars.waveFrq0 * fx) * gvars.waveAmp0;
                cosCache0[x] = wave0Cos;
              }

              if (cosCache1[x] !== undefined) {
                wave1Cos = cosCache1[x];
              }
              else {
                wave1Cos = Math.cos(gvars.waveOfs1 + gvars.waveFrq1 * fx) * gvars.waveAmp1;
                cosCache1[x] = wave1Cos;
              }

              pos0 = gvars.pos0 * fx;
              pos2 = gvars.pos2 * fx;

              // it really does not matter what you do here, it all looks glitchy :)
              // really, just put the operators and vars in any random combination (but be careful you don't divide by 0)
              // AND A WHOLE NEW GLITCHY MESS WILL EMERGE!
              rx = x + wave1Sin + pos0;
              ry = y + wave1Cos - pos2;
              gx = x - wave1Cos * pos1;
              gy = y - wave0Sin + pos1;
              bx = x + wave0Sin + pos0;
              by = y - wave0Sin * pos2;

              data[pixelIndex + 0] = getChannel(rx, ry, 0);
              data[pixelIndex + 1] = getChannel(gx, gy, 1);
              data[pixelIndex + 2] = getChannel(bx, by, 2);
          }
      }
  }

  function draw() {
      ctx.putImageData(glitchImageData, 0, 0);
  }

  function loop() {
      update();
      draw();
      requestAnimationFrame(loop);
  }

  function getChannel(x, y, c) {
      x = x | 0;
      y = y | 0;
      x = wrap(x, 0, viewWidth - 1);
      y = wrap(y, 0, viewHeight - 1);

      return pixels[y][x][c];
  }

  function wrap(v, min, max) {
      return (((v - min) % (max - min)) + (max - min)) % (max - min) + min;
  }
}
