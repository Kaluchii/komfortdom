$(document).ready(function(){$(".js_call_popup_open").magnificPopup({type:"inline",removalDelay:500,callbacks:{beforeOpen:function(){this.st.mainClass="mfp-zoom-in"}},midClick:!0});var a,t=$(".header__nav-item--fixed .header__nav-link"),e=$(window),s=e.height()/2.5;if(e.on("scroll",function(){var a,i=e.scrollTop(),o="";t.each(function(){var a=$(this).attr("href");$(a).offset().top-s<i&&($(".header__nav-item--fixed").removeClass("is-active"),$(this).closest(".header__nav-item--fixed").addClass("is-active"),o=a)}),a=o.slice(1),window.location.hash="/"+a,e.scrollTop()>=$("#title").outerHeight()?($(".fixed-header").fadeIn(500),e.width()<=1024&&"flats"!=a?$(".js-top-btn").fadeIn():"flats"==a&&$(".js-top-btn").fadeOut()):($(".fixed-header").fadeOut(),$(".js-top-btn").fadeOut(),e.width()<=940&&($(".js_fixed_menu").removeClass("is-open"),$(".js_fixed_nav_wrap").removeClass("is-open").hide()))}),e.on("load resize",function(){e.width()>940?($(".js_nav_wrap").attr("style",""),$(".js_fixed_nav_wrap").attr("style","")):$(".js_nav_wrap").removeClass("show-imp")}),$(".js_menu").on("click",function(){$(this).toggleClass("is-open"),$(".js_nav_wrap").toggleClass("is-open").slideToggle()}),$(".js_fixed_menu").on("click",function(){$(this).toggleClass("is-open"),$(".js_fixed_nav_wrap").toggleClass("is-open").slideToggle()}),$(".js_popup_close").on("click",function(){$(".title-popup").fadeOut()}),window.location.href.indexOf("/#/")>=0){var i=window.location.href.split("/")[4];setTimeout(function(){$("html, body").stop().animate({scrollTop:$("#"+i).offset().top-120},1e3)},500)}$(".js_goto_anchor").bind("click",function(a){$("html, body").stop().animate({scrollTop:$($(this).attr("href")).offset().top-120},1e3),a.preventDefault(),e.width()<=940&&($(".js_fixed_menu").removeClass("is-open"),$(".js_menu").removeClass("is-open"),$(".js_nav_wrap").removeClass("is-open").slideUp(),$(".js_fixed_nav_wrap").removeClass("is-open").slideUp())}),$(".js_rooms_btn").on("click",function(){a=$(this).data("id"),$(".js_area_btn").closest(".layout-choice__btns-item").hide().removeClass("visible"),$(".js_area_btn.flat"+a).closest(".layout-choice__btns-item").show().addClass("visible"),$(".layout-choice__btns-item.visible:first .js_area_btn").click(),$(".js_rooms_btn").removeClass("is-active").closest(".layout-choice__btns-item").removeClass("is-active"),$(this).addClass("is-active").closest(".layout-choice__btns-item").addClass("is-active")});var o=!1;$(".js_area_btn").on("click",function(){var t=flatsObj[a].layouts[$(this).data("id")];e.width()<=820&&o&&setTimeout(function(){$("body,html").animate({scrollTop:$(".layout__img-wrapper").offset().top-70},500)},200),$(".js_give_src").animate({opacity:"toggle"},200),setTimeout(function(){$(".js_give_src").attr("src",t.src)},200),$(".js_give_src").animate({opacity:"toggle"},200),$(".js_give_area").text(t.area.replace(".",",")),$(".js_give_floor").text(t.floor);var s=function(a,t,e,s,i){a=(a+"").replace(/[^0-9+\-Ee.]/g,"");var o=isFinite(+a)?+a:0,r=isFinite(+t)?Math.abs(t):0,n=void 0===s?",":s,l=void 0===e?".":e,_=void 0!==i&&i,c="";return(c=(r?function(a,t){var e=Math.pow(10,t);return""+(Math.round(a*e)/e).toFixed(t)}(o,r):""+Math.round(o)).split("."))[0].length>3&&(c[0]=c[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,n)),_&&o-Math.round(o)==0?o:((c[1]||"").length<r&&(c[1]=c[1]||"",c[1]+=new Array(r-c[1].length+1).join("0")),c.join(l))}(Math.round(t.meter_cost*t.area*EXCHANGE_COST),0,","," ");$(".js_give_price").text(s),$(".js_area_btn").removeClass("is-active").closest(".layout-choice__btns-item").removeClass("is-active"),$(this).addClass("is-active").closest(".layout-choice__btns-item").addClass("is-active"),o=!0}),$(".layout-choice__btns-item:first-child .js_rooms_btn").click();var r=$(".js_gallery__fotorama").fotorama({navwidth:"90%"}),n=r.data("fotorama");r.on("fotorama:show",function(){var a=n.activeIndex;0==a?($(".js_img_prev").fadeOut(0).attr("src",n.data[n.size-1].img).fadeIn(300),$(".js_img_next").fadeOut(0).attr("src",n.data[a+1].img).fadeIn(300)):a==n.size-1?($(".js_img_prev").fadeOut(0).attr("src",n.data[a-1].img).fadeIn(300),$(".js_img_next").fadeOut(0).attr("src",n.data[0].img).fadeIn(200)):($(".js_img_prev").fadeOut(0).attr("src",n.data[a-1].img).fadeIn(300),$(".js_img_next").fadeOut(0).attr("src",n.data[a+1].img).fadeIn(300))}),r.on("fotorama:load",function(){var a=n.activeIndex;0==a?($(".js_img_prev").attr("src",n.data[n.size-1].img),$(".js_img_next").attr("src",n.data[a+1].img)):a==n.size-1?($(".js_img_prev").attr("src",n.data[a-1].img),$(".js_img_next").attr("src",n.data[0].img)):($(".js_img_prev").attr("src",n.data[a-1].img),$(".js_img_next").attr("src",n.data[a+1].img))}),$("<div class='nav-scroll-btn nav-scroll-btn--prev'></div>").insertBefore(".gallery__fotorama .fotorama__nav.fotorama__nav--thumbs"),$("<div class='nav-scroll-btn nav-scroll-btn--next'></div>").insertAfter(".gallery__fotorama .fotorama__nav.fotorama__nav--thumbs"),$("<div class='gallery__bg-image-block gallery__bg-image-block--prev'><div class='gallery__bg-image-wrap'><img class='gallery__bg-image js_img_prev'></div></div>").insertAfter(".gallery__fotorama .fotorama__arr.fotorama__arr--next"),$("<div class='gallery__bg-image-block gallery__bg-image-block--next'><div class='gallery__bg-image-wrap'><img class='gallery__bg-image js_img_next'></div></div>").insertAfter(".gallery__fotorama .fotorama__arr.fotorama__arr--next"),$(".nav-scroll-btn--prev").click(function(){n.show("<")}),$(".nav-scroll-btn--next").click(function(){n.show(">")}),$(".js_open_fotorama").on("click",function(){n.show($(this).data("img")),n.requestFullScreen()})});