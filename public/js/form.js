$(document).ready(function(){function t(t){var a=t.parent();return function(t){return""!=t.val()&&("email"!=t.attr("type")||(a=t.val(),/\S+@\S+/gim.test(a)));var a}(t)?(a.hasClass("error")&&a.removeClass("error"),a.addClass("valid"),!0):(a.hasClass("valid")&&a.removeClass("valid"),a.addClass("error"),!1)}var a,n,r;$("form").submit(function(t){t.stopPropagation(),t.preventDefault()}),$(".form-input").on("change",function(){return t($(this))}),$(".form-input").on("focusout",function(){$(this).parent().removeClass("filling")}),$(".form-input").on("input",function(){$(this).parent().addClass("filling")});var o=!0;$(".send-form").on("click",function(){o&&(n=$(this),a=n.closest(".form-id").attr("id"),function(a){var n=!0,r=!0;return $(a).each(function(){n=t($(this))&&n,r&&!n&&($(this).focus(),r=!1)}),n}(r="#"+a+" .form-input")&&(o=!1,n.addClass("load"),function(){var t={};!function(t,a){$(t).each(function(){var t=$(this);a[t.attr("name")]=t.val()})}(r,t);var a,e,s,i=(a="POST",e="/feedback/mail",s=t,$.ajax({type:a,url:e,dataType:"json",data:s,headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}));i.success(function(t){t.error||(document.location.href="/thanks",function(t){$(t).each(function(){"form"!=$(this).attr("name")&&($(this).val(""),$(this).parent().removeClass("valid"))})}(r)),n.removeClass("load"),o=!0}),i.error(function(t){console.log(t),n.removeClass("load"),o=!0})}()))})});