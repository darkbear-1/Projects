
var dm_banner_2_step = false;
jQuery(document).ready( function() {
var width = jQuery(window).width();
var dt = new Date();
var time_now = dt.getHours() + ":" + (dt.getMinutes()<10?'0':'') + dt.getMinutes();
function dmbanner_first(){
	if( width < 501 ) {
		jQuery("body").css({'overflow' : 'hidden'});
	}
	jQuery(".cat_wt").show();
	jQuery(".cat_wt").animate({marginBottom: '0px'}, 1500);
	setTimeout(function(){
		//dmbanner_first_body();
		jQuery(".cat_wt .cat_wt_body").show();
    var qstMessages = jQuery(".cat_wt_body_qst");
    var qst_message_time = 500;
    var incr = 0;
    qstMessages.each(function() {
      var thisObj = jQuery(this);
      // jQuery(this).css("display", "block");
    // jQuery(this).animate({marginLeft: '0px'}, 500);
      setTimeout(function(){
        thisObj.append('<span class="cat_wt_body_time">' + time_now + '</span>');
        thisObj.css("display", "block");
				thisObj.addClass("show-msg");
        // thisObj.animate({marginLeft: '0px'}, 500);
      }, qst_message_time)
      if (incr == qstMessages.length - 1) {
        setTimeout(function(){
          jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask_pre").show().animate({opacity: 1}, 2000);
        }, qst_message_time + 2700);
      }
      qst_message_time += 1700;
      incr++;
    })
		// setTimeout(function(){
    //   jQuery(".cat_wt_body_qst.message1").css("display", "block");
		// 	// jQuery(".cat_wt .cat_wt_body .cat_wt_body_div").prepend('<div class="cat_wt_body_qst message1">Здравствуйте! <span class="cat_wt_body_time">' + time_now + '</span></div>');
		// 	jQuery(".cat_wt .cat_wt_body .cat_wt_body_qst.message1").animate({marginLeft: '0px'}, 500);
		// 	setTimeout(function(){
    //     jQuery(".cat_wt_body_qst.message2").css("display", "block");
		// 		// jQuery(".cat_wt .cat_wt_body .cat_wt_body_qst.message1").after('<div class="cat_wt_body_qst big message2">А вы знаете, что контролировать продажи - выручку, закупки и остатки товаров - легко с программой <span style="text-decoration: underline">«Класс365»?</span> Это удобный сервис для розничной и оптовой и онлайн-торговли. <span class="cat_wt_body_time">' + time_now + '</span></div>');
		// 		jQuery(".cat_wt .cat_wt_body .cat_wt_body_qst.message2").animate({marginLeft: '0px'}, 500);
    //
		// 		setTimeout(function(){
    //       jQuery(".cat_wt_body_qst.message3").css("display", "block");
		// 			// jQuery(".cat_wt .cat_wt_body .cat_wt_body_qst.message2").after('<div class="cat_wt_body_qst big message3">Просто попробуйте, это бесплатно!<span class="cat_wt_body_time">' + time_now + '</span></div>');
		// 			jQuery(".cat_wt .cat_wt_body .cat_wt_body_qst.message3").animate({marginLeft: '0px'}, 500);
    //
		// 			setTimeout(function(){
		// 				jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask_pre").show().animate({opacity: 1}, 2000);
		// 			}, 3000);
    //
		// 		}, 3500);
		// 	}, 1500);
		// }, 500);
	}, 500);
}
jQuery(document).on('click', '.cat_wt .cat_wt_hide', function(){
	jQuery(".cat_wt").animate({marginBottom: '-1000px'}, 1500);
	setTimeout(function(){
		jQuery(".cat_wt").hide();
	}, 2000);
	if( width < 501 ) {
		jQuery("body").css({'overflow' : 'auto'});
	}
	jQuery(".cat_wt_mini").css("display", "flex");
	jQuery(".cat_wt_mini").animate({marginBottom: '0px'}, 1500);
	jQuery.cookie(jQuery(this).attr("data-widget-id"), 'yes', {expires: 1, path: '/'});
});
jQuery(document).on('click', '.cat_wt_mini', function(){
	window.open(jQuery(".cat_wt").attr("data-link"), '_blank');
});
jQuery(document).on('click', '.cat_wt .cat_wt_body .cat_wt_body_ask_pre.first', function(){
  var dtNew = new Date();
	var time = dtNew.getHours() + ":" + (dtNew.getMinutes()<10?'0':'') + dtNew.getMinutes();
	jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask_pre").hide();
	jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask_pre.last").after('<div class="cat_wt_body_ask message4">Хочу узнать подробности. <span class="cat_wt_body_time">' + time + '</span></div>');
	jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask.message4").animate({marginRight: '0px'}, 500);
	setTimeout(function(){
		jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask.message4 .cat_wt_body_time").addClass("check");
	}, 1000);
	setTimeout(function(){
		jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask").after('<div class="cat_wt_body_qst message5">Ок! Перенаправляю на сайт сервиса «<a class="hand_cursor">Class365</a>». <span class="cat_wt_body_time">' + time + '</span></div>');
    jQuery(".cat_wt_body_qst.message5").css("display", "block");
    jQuery(".cat_wt .cat_wt_body .cat_wt_body_qst.message5").animate({marginLeft: '0px'}, 500);
		setTimeout(function(){
			window.location.href = jQuery(".cat_wt").attr("data-link");
		}, 2000);
		setTimeout(function(){
			jQuery(".cat_wt").animate({marginBottom: '-1000px'}, 1500);
			setTimeout(function(){
				jQuery(".cat_wt").hide();
			}, 2000);
			if( width < 501 ) {
				jQuery("body").css({'overflow' : 'auto'});
			}
			jQuery(".cat_wt_mini").css("display", "flex");
			jQuery(".cat_wt_mini").animate({marginBottom: '0px'}, 1500);
		}, 2500);
	}, 1500);
	jQuery.cookie(jQuery(this).attr("data-widget-id"), 'yes', {expires: 1, path: '/'});
});
jQuery(document).on('click', '.cat_wt .cat_wt_body .cat_wt_body_ask_pre.last', function(){
  var dtNew = new Date();
	var time = dtNew.getHours() + ":" + (dtNew.getMinutes()<10?'0':'') + dtNew.getMinutes();
	jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask_pre").hide();
	jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask_pre.last").after('<div class="cat_wt_body_ask message6">Нет, спасибо! <span class="cat_wt_body_time">' + time + '</span></div>');
	jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask.message6").animate({marginRight: '0px'}, 500);
	setTimeout(function(){
		jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask.message6 .cat_wt_body_time").addClass("check");
	}, 1000);
	setTimeout(function(){
		jQuery(".cat_wt .cat_wt_body .cat_wt_body_ask").after('<div class="cat_wt_body_qst message7">Хорошо, закрываюсь. Если передумаете, то я рядом! <span class="cat_wt_body_time">' + time + '</span></div>');
    jQuery(".cat_wt_body_qst.message7").css("display", "block");
    jQuery(".cat_wt .cat_wt_body .cat_wt_body_qst.message7").animate({marginLeft: '0px'}, 500);
		setTimeout(function(){
			jQuery(".cat_wt").animate({marginBottom: '-1000px'}, 1500);
			setTimeout(function(){
				jQuery(".cat_wt").hide();
			}, 2000);
			if( width < 501 ) {
				jQuery("body").css({'overflow' : 'auto'});
			}
			jQuery(".cat_wt_mini").css("display", "flex");
			jQuery(".cat_wt_mini").animate({marginBottom: '0px'}, 1500);
		}, 2500);
	}, 1500);
	jQuery.cookie(jQuery(this).attr("data-widget-id"), 'yes', {expires: 1, path: '/'});
});
jQuery(document).on('click', '.cat_wt .cat_wt_body .cat_wt_body_qst.message2_1 a', function(){
	window.open(jQuery(".cat_wt").attr("data-link"), '_blank');
});
jQuery(document).on('click', '.cat_wt .cat_wt_body .cat_wt_body_qst.message5 a', function(){
	window.open(jQuery(".cat_wt").attr("data-link"), '_blank');
});
var ck_dm_bnr2 = jQuery.cookie(jQuery(".cat_wt_hide").attr("data-widget-id"));
if (( ck_dm_bnr2 === null || typeof ck_dm_bnr2 == "undefined")) {
	setTimeout(dmbanner_first, jQuery(".cat_wt").attr('data-run-time') * 1000);
} else if( ck_dm_bnr2 == "yes") {
	jQuery(".cat_wt_mini").css("display", "flex");
	jQuery(".cat_wt_mini").animate({marginBottom: '0px'}, 1500);
}
});
