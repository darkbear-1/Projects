jQuery(document).ready(function(){
  jQuery.ajax({
    url: "/wp-content/uploads/images/slides/slides.json",
    success: function(data){
      var i = 1;
      var imgChecker = true
      var loop = true
      jQuery(".main-screen__slides").append('<img class="main-screen__slides-item main-screen__slides-item--hide" src="'+data[i].url+'" alt="">')
      setInterval(function() {
        if (i < data.length && imgChecker) {
          i++
          if (i < data.length) {
            jQuery(".main-screen__slides").append('<img class="main-screen__slides-item main-screen__slides-item--hide" src="'+data[i].url+'" alt="">')
          }
          jQuery(".main-screen__slides-item").eq(i - 2).addClass("main-screen__slides-item--hide")
          jQuery(".main-screen__slides-item").eq(i - 1).removeClass("main-screen__slides-item--hide")
        }
        else if (imgChecker && loop) {
          i = 0
          imgChecker = false
          loop = false
          jQuery(".main-screen__slides-item").eq(data.length - 1).addClass("main-screen__slides-item--hide")
          jQuery(".main-screen__slides-item").eq(0).removeClass("main-screen__slides-item--hide")
        }

        if (!imgChecker && !loop) {
          i++
          if (i != 1) {
            jQuery(".main-screen__slides-item").eq(i - 2).addClass("main-screen__slides-item--hide")
            jQuery(".main-screen__slides-item").eq(i - 1).removeClass("main-screen__slides-item--hide")
          }
          else {
            jQuery(".main-screen__slides-item").eq(0).removeClass("main-screen__slides-item--hide")
          }
          if (i == data.length) {
            loop = true
            imgChecker = true
          }
        }
      }, 5000)
    }
  });

  jQuery(".to-top").click(function() {
    jQuery("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    var lastScrollTop = 0;
    jQuery(window).scroll(function(event){
    var st = jQuery(this).scrollTop();
    if (!jQuery(".header__list-link--search .dgwt-wcas-search-wrapp").hasClass("search-active")) {
      if (st > lastScrollTop){
         jQuery("header").slideUp();
      } else {
         jQuery("header").slideDown();
      }
      if (st > 100) {
        jQuery(".to-top").addClass("to-top--active")
      } else {
         jQuery(".to-top").removeClass("to-top--active")
      }
    }
    lastScrollTop = st;
    });
  }

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

        if (jQuery(".instagram").length != 0) {
          jQuery.ajax({
            url: "/wp-content/themes/rgtheme/instagram.php",
            success: function(data){
              jQuery(".instagram .container").append(data);
            }
          });
        }


    }
  });

  jQuery(".anchor").click(function(event) { // класс откуда кликаем
    event.preventDefault();
    var anchor = jQuery(this).attr("href");
    jQuery('html, body').animate({
        scrollTop: jQuery(anchor).offset().top - 200  // класс объекта к которому приезжаем
    }, 500); // Скорость прокрутки
  });

  jQuery(".single-product__liked .tinvwl_add_to_wishlist_button").attr("data-tinv-wl-productvariation", jQuery(".tinvwl-loop-button-wrapper .tinvwl_add_to_wishlist_button").attr("data-tinv-wl-productvariation"))
  jQuery(".single-product__liked .tinvwl_add_to_wishlist_button").attr("data-tinv-wl-productvariations", jQuery(".tinvwl-loop-button-wrapper .tinvwl_add_to_wishlist_button").attr("data-tinv-wl-productvariations"))
  jQuery(".variation_id").change(function() {
    jQuery(".single-product__liked .tinvwl_add_to_wishlist_button").attr("data-tinv-wl-productvariation", jQuery(this).val())
    jQuery(".single-product__liked .tinvwl_add_to_wishlist_button").attr("data-tinv-wl-productvariations", jQuery(".tinvwl-loop-button-wrapper .tinvwl_add_to_wishlist_button").attr("data-tinv-wl-productvariations"))
  })



  jQuery('#new-items__slider').owlCarousel({
  items: 4,
  slideSpeed: 500,
  loop: true,
  nav: true,
  dots: false,
  margin: 20,
  navText: [
    '<div class="new-items__slider-arrows new-items__slider-arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M106 10.5H1M1 10.5L11 0.5M1 10.5L11 20.5" stroke="#3881AE"/></svg></div>',
    '<div class="new-items__slider-arrows new-items__slider-arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M0 10.5H105M105 10.5L95 0.5M105 10.5L95 20.5" stroke="#3881AE"/></svg></div>'
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
     items: 4
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

jQuery('#dopolnite').owlCarousel({
items: 4,
slideSpeed: 500,
loop: true,
nav: true,
dots: false,
margin: 20,
navText: [
  '<div class="new-items__slider-arrows new-items__slider-arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M106 10.5H1M1 10.5L11 0.5M1 10.5L11 20.5" stroke="#3881AE"/></svg></div>',
  '<div class="new-items__slider-arrows new-items__slider-arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M0 10.5H105M105 10.5L95 0.5M105 10.5L95 20.5" stroke="#3881AE"/></svg></div>'
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
   items: 2
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

jQuery('#zainteresovat').owlCarousel({
items: 4,
slideSpeed: 500,
loop: true,
nav: true,
dots: false,
margin: 20,
navText: [
  '<div class="new-items__slider-arrows new-items__slider-arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M106 10.5H1M1 10.5L11 0.5M1 10.5L11 20.5" stroke="#3881AE"/></svg></div>',
  '<div class="new-items__slider-arrows new-items__slider-arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M0 10.5H105M105 10.5L95 0.5M105 10.5L95 20.5" stroke="#3881AE"/></svg></div>'
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
   items: 4
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

jQuery('#recently__list').owlCarousel({
items: 4,
slideSpeed: 500,
loop: true,
nav: true,
dots: false,
margin: 20,
navText: [
  '<div class="new-items__slider-arrows new-items__slider-arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M106 10.5H1M1 10.5L11 0.5M1 10.5L11 20.5" stroke="#3881AE"/></svg></div>',
  '<div class="new-items__slider-arrows new-items__slider-arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="106" height="21" viewBox="0 0 106 21" fill="none"><path d="M0 10.5H105M105 10.5L95 0.5M105 10.5L95 20.5" stroke="#3881AE"/></svg></div>'
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
   items: 2
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

jQuery('#brands__list').owlCarousel({
  items: 1,
  slideSpeed: 500,
  loop: true,
  nav: true,
  dots: false,
  margin: 20,
  navText: [
    '<div class="brands-arrows brands-arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none"><path d="M33.5 18L1 18M1 18L18 35.0005M1 18L18 0.999999" stroke="#3881AE"/></svg></div>',
    '<div class="brands-arrows brands-arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none"><path d="M0.5 18.0005H33M33 18.0005L16 1M33 18.0005L16 35.0005" stroke="#3881AE"/></svg></div>'
  ],
  autoplay: true,
  touchDrag: true,
  autoplayTimeout: 6000,
  paginationSpeed : 6000,
  rewindSpeed : 6000,
  stopOnHover : true
  // responsive: {
  //  // Ширина от 500 пикселей
  //  1024: {
  //    // Количество элементов 2
  //    items: 2
  //  },
  //  768: {
  //     // Количество элементов 2
  //     items: 3
  //   },
  //  // Ширина от 800 пикселей
  //  100: {
  //    // Количество элементов 3
  //    items: 1
  //  }
  // }
  });

  var owl = jQuery('#brands__list');
  owl.owlCarousel();
  // Listen to owl events:
  owl.on('changed.owl.carousel', function(event) {
      jQuery(".brands__link").attr("href", jQuery(this).find(".owl-item").eq(event.item.index).find("a").attr("href"));

  })

  jQuery(".quantity__minus").click(function(e) {
      e.preventDefault();
      var old = jQuery(this).parent().find(".qty").val();
      if (old > 1)
          old--
      jQuery(this).parent().find(".qty").val(old);
      jQuery(this).parent().find(".qty").trigger("change")
  })
  jQuery(".quantity__plus").click(function(e) {
      e.preventDefault();
      var old = jQuery(this).parent().find(".qty").val();
      old++
      jQuery(this).parent().find(".qty").val(old);
      jQuery(this).parent().find(".qty").trigger("change")
  })

  jQuery(".single-product__add-try").click(function(e) {
    e.preventDefault()
    jQuery.ajax({
      url: "/wp-content/themes/rgtheme/popups/tryPu.php",
      success: function(data){
        jQuery("body").append(data);
        jQuery(".try-pu__close").click(function() {
            jQuery(".try-pu").remove();
        })
        jQuery(".try-pu__overlay").click(function() {
            jQuery(".try-pu").remove();
        })
        jQuery(document).keydown(function(e) {
          if (e.which == 27) {
            jQuery(".try-pu").remove();
          }
        });
      }
    });
  })

  jQuery(".single-product__one-click").click(function(e) {
    e.preventDefault()
    jQuery.ajax({
      url: "/wp-content/themes/rgtheme/popups/one-click.php",
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

  jQuery(".header__list:not(.header__list--mobile) .header__list-link--search").click(function(e) {
    e.preventDefault()
    jQuery(".header__list-link--search .header__list-icon").hide()
    jQuery(".header__list-link--search .dgwt-wcas-search-wrapp").show().addClass("search-active");
    if (!jQuery(e.target).closest('.dgwt-wcas-close').length) {
      jQuery(".header__list-link--search .dgwt-wcas-search-input").focus();
    }

    jQuery(document).mouseup(function (e){
  		var div =jQuery(this);
  		if (jQuery(e.target).closest('.header__list-link--search').length) {
        jQuery(".header__list-link--search .header__list-icon").hide()
        jQuery(".header__list-link--search .dgwt-wcas-search-wrapp").show();
        jQuery(".header__list-link--search .dgwt-wcas-search-wrapp").show().addClass("search-active");
  		} else {
        jQuery(".header__list-link--search .header__list-icon").show()
        jQuery('.header__list-link--search .dgwt-wcas-search-wrapp').hide().removeClass("search-active");
      }
	   });
  })

  jQuery('.header__list--mobile .header__list-link--search').on('click', function() {
    this.classList.toggle("change");
    jQuery(".header__search-mobile").css("max-height", jQuery(window).height());
    jQuery('.header__search-mobile').slideToggle(300, function() {
        if (jQuery(this).css('display') === "none") {
            jQuery(this).removeAttr('style')
        }
    })
});


  jQuery(".single_add_to_cart_button").click(function(e) {
    //e.preventDefault()
    var data = {
      'action': 'productadded',
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data){
        jQuery("body").append(data);

        jQuery(".product-added__close").click(function() {
            jQuery(".product-added").remove();
        })
        jQuery(".product-added__contine").click(function() {
            jQuery(".product-added").remove();
        })
        jQuery(".product-added__overlay").click(function() {
            jQuery(".product-added").remove();
        })
        jQuery(document).keydown(function(e) {
          if (e.which == 27) {
            jQuery(".product-added").remove();
          }
        });
      }
    });
  })

  jQuery('.filter').each(function(){
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
  		selectGap.on('click', function(e){
        jQuery(".select__list").slideUp(dur);
        jQuery(".select__gap").removeClass('on');
        jQuery(".select__gap").removeClass("select__gap--active")

        jQuery(this).removeClass("select__gap--active")

        var thisObj = jQuery(this)

        jQuery(document).mouseup(function (e){
      		if (!jQuery(e.target).closest('.select__gap').length) {
            thisObj.removeClass('on');
    				selectList.slideUp(dur);
            thisObj.removeClass("select__gap--active")
      		}
    	   });
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

  			} else {
  				jQuery(this).removeClass('on');
  				selectList.slideUp(dur);
  			}
  		});

  	});

  var minPrice = null
  var maxPrice = null
  var materialId = ''
  var brandId = ''
  var vstavkaId = ''
  var priceAsc = true
  var newsAsc = true
  var perPage = 20
  var offsetNum = null
  var termId = jQuery(".products__wrap").attr("data-term-id");
  var termSlug = jQuery(".products__wrap").attr("data-taxonomy");

  function filterFunc(filterObj) {
    if (filterObj) {
      if (filterObj.hasClass("filter--material"))
        materialId = filterObj.val()
      else if (filterObj.hasClass("filter--brands"))
        brandId = filterObj.val()
      else if (filterObj.hasClass("filter--vstavka"))
        vstavkaId = filterObj.val()
    }

    var data = {
      'action': 'products_brand_filter',
      'brandId': brandId,
      'materialId': materialId,
      'vstavkaId': vstavkaId,
      'minPrice': minPrice,
      'maxPrice': maxPrice,
      'newsAsc': newsAsc,
      'priceAsc': priceAsc,
      'perPage': perPage,
      'offsetNum': offsetNum,
      'termId': termId,
      'termSlug': termSlug
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data) {
        if (data) {
          jQuery(".products .products__wrap").html(data)
          jQuery(".pagination").attr("offset-count", perPage)
        }
        else {
          jQuery(".products .products__wrap").html("<div class='products__not-found'>Не найдено</div>")
        }
      }
    });
  }


  function navigationFunc(filterObj, filterCheck) {
    if (filterObj) {
      if (filterObj.hasClass("filter--material"))
        materialId = filterObj.val()
      else if (filterObj.hasClass("filter--brands"))
        brandId = filterObj.val()
      else if (filterObj.hasClass("filter--vstavka"))
        vstavkaId = filterObj.val()
    }
    if (jQuery(".pagination__page--active").index() != -1 && !filterCheck)
      activeIndex = jQuery(".pagination__page--active").index()
    else
      activeIndex = offsetNum
    var data = {
      'action': 'productnav',
      'perPage': perPage,
      'minPrice': minPrice,
      'maxPrice': maxPrice,
      'offsetNum': offsetNum,
      'activeIndex': activeIndex,
      'brandId': brandId,
      'materialId': materialId,
      'vstavkaId': vstavkaId,
      'termId': termId,
      'termSlug': termSlug
    };
    jQuery.ajax({
      url: "/wp-admin/admin-ajax.php",
      data:data,
      type:'POST',
      success: function(data){
        if (data) {
          jQuery(".navigation__wrap").html(data)
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
        else {
          jQuery(".products .products__wrap").html("<div class='products__not-found'>Не найдено</div>")
        }
      }
    });
  }


jQuery(document).mousedown(function (e){
		var el1 = jQuery(".products__range-popup")
    var el2 = jQuery(".products__range-trigger")
		if (!el1.is(e.target) && el1.has(e.target).length === 0 && !el2.is(e.target) && el2.has(e.target).length === 0) {
      el1.removeClass('products__range-popup--show')
      jQuery(".products__range-trigger").removeClass("products__range-trigger--active")
		}
	});

  //Start Диапозон цены
if (jQuery(".products__range-wrap").length != 0) {
  jQuery(".products__range-trigger").click(function() {
    jQuery(this).toggleClass('products__range-trigger--active')
    jQuery('.products__range-popup').toggleClass('products__range-popup--show')
  });

  jQuery(".range").slider({
      min: Number(jQuery(".range-input").attr("min")),
      max: Number(jQuery(".range-input").attr("max")),
      values: [Number(jQuery(".range-input").attr("min")), Number(jQuery(".range-input").attr("max"))],
      range: true,
      animate: "fast",
      slide : function(event, ui) {
          jQuery(".range-input--left").val(ui.values[ 0 ]);
          jQuery(".range-input--right").val(ui.values[ 1 ]);
      }
  });
  jQuery(".range-input--left").val(jQuery(".range").slider("values", 0));
  jQuery(".range-input--right").val(jQuery(".range").slider("values", 1));
  jQuery(".range .ui-slider-handle").mouseup(function() {
      var input_left = jQuery(".range-input--left").val().replace(/[^0-9]/g, ''),
      opt_left = jQuery(".range").slider("option", "min"),
      where_right = jQuery(".range").slider("values", 1),
      input_right = jQuery(".range-input--right").val().replace(/[^0-9]/g, ''),
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
      filterFunc();
      navigationFunc('', true)
  });
}

jQuery( ".range" ).slider({
    stop: function( event, ui ) {
      var input_left = jQuery(".range-input--left").val().replace(/[^0-9]/g, ''),
      opt_left = jQuery(".range").slider("option", "min"),
      where_right = jQuery(".range").slider("values", 1),
      input_right = jQuery(".range-input--right").val().replace(/[^0-9]/g, ''),
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
      filterFunc();
      navigationFunc('', true)
    }
});
//End Диапозон цены

  jQuery(".range-input").change(function() {
    minPrice = jQuery(".range-input--left").val()
    maxPrice = jQuery(".range-input--right").val()
    offsetNum = 0;
    filterFunc();
    navigationFunc('', true)
  })

  jQuery(".filter").change(function(e) {
    e.preventDefault()
    if (jQuery(this).val() != null)
      jQuery(this).parent().addClass("filter__wrap--width")
    jQuery(jQuery(this).parent().next()).show();
    offsetNum = 0;
    filterFunc(jQuery(this));
    navigationFunc(jQuery(this), true);
  });

  jQuery(".filter__clear").click(function(e) {
    e.preventDefault();
    jQuery(this).parent().removeClass("filter__wrap--width")
    jQuery(jQuery(this).prev().find(".select__gap").text(jQuery(this).prev().find(".filter option").eq(0).text()))
    jQuery(jQuery(this).prev().find(".filter").val("all"))
    jQuery(jQuery(this).prev().find(".filter").change())
    jQuery(this).removeClass("select__gap--active")
    jQuery(jQuery(this)).hide();
  });

  jQuery(".product__price-sort").click(function(e) {
    e.preventDefault()
    newsAsc = true;
    priceAsc = !priceAsc
    jQuery(this).toggleClass("product__price-sort--desc");
    if (priceAsc)
      jQuery(this).text("По убыванию цены")
    else
      jQuery(this).text("По возрастанию цены")
    filterFunc();
  })

  jQuery(".product__new-sort").click(function(e) {
    e.preventDefault()
    priceAsc = true;
    newsAsc = !newsAsc
    jQuery(this).toggleClass("product__new-sort--desc");
    if (newsAsc)
      jQuery(this).text("Сначало новые")
    else
      jQuery(this).text("Сначало старые")
    filterFunc();
    console.log("click");
  })


  jQuery(".product-filter__view-radio").change(function(e) {
    console.log(jQuery(this).parent().index());
    jQuery(".navigation--top .product-filter__view label:nth-child("+ (jQuery(this).parent().index() + 1)+") .product-filter__view-radio").prop("checked", true)
    jQuery(".navigation--bottom .product-filter__view label:nth-child("+ (jQuery(this).parent().index() + 1)+") .product-filter__view-radio").prop("checked", true)
    perPage = jQuery(this).val()
    if (perPage != -1 && jQuery(".pagination__page--active").index() != -1)
      offsetNum = jQuery(".pagination__page--active").index() * perPage
    else
      offsetNum = 0;
    navigationFunc()
    filterFunc();
  })

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
        console.log("yep");
          jQuery(".pagination__dots").hide();
      }
      else {
        console.log("no");
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

  jQuery(".login-page__title").click(function(e) {
    jQuery(".login-page__title").removeClass("active");
    jQuery(this).addClass("active");
    if (jQuery(this).attr("data-type-login") == 'login') {
      jQuery(".register-column").removeClass("show");
      jQuery(".login-column").addClass("show");
    }
    else {
      jQuery(".register-column").addClass("show");
      jQuery(".login-column").removeClass("show");
    }
  })

  jQuery('.mobileMenu').on('click', function() {
      this.classList.toggle("change");
      jQuery(".header__menu--mobile").css("max-height", jQuery(window).height());
      jQuery('.header__menu--mobile').slideToggle(300, function() {
          if (jQuery(this).css('display') === "none") {
              jQuery(this).removeAttr('style')
          }
      })
  });

  jQuery(".header__menu-item--accardeon").each(function() {
      jQuery(this).click(function(e) {
        console.log("click");
          e.preventDefault();
          jQuery(this).toggleClass("sub-active")
          var panel = jQuery(this).next();
          panel.slideToggle()
      })
  })

  jQuery(".cat-menu__title-link--accordion").each(function() {
      jQuery(this).click(function(e) {
          e.preventDefault();
          jQuery(this).toggleClass("sub-active")
          var panel = jQuery(this).parent().next();
          panel.slideToggle()
      })
  })

  jQuery('.rotate-left').click(function() {
      jQuery('.product-category--wrap').animate({
        	scrollLeft: '-='+ document.querySelector('.product-category--wrap').scrollWidth,
    		}, 500, function() {
    			//код по завершении анимации
    		});
    })
    jQuery('.rotate-right').click(function() {
      jQuery('.product-category--wrap').animate({
    			scrollLeft: '+='+ document.querySelector('.product-category--wrap').scrollWidth,
    		}, 500, function() {
    			//код по завершении анимации
    		});
    })
});
