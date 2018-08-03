$(document).ready(function(){$('form').submit(function(e){e.stopPropagation();e.preventDefault();});function isEmail(mail){var regex=/\S+@\S+/igm;return regex.test(mail);}function clearFields(selector){$(selector).each(function(){if($(this).attr('name')!='form'){$(this).val('');$(this).parent().removeClass('valid');}});}function fieldValid(input){if(input.val()!=''){if(input.attr('type')=='email'){return isEmail(input.val());}else{return true;}}else{return false;}}function fieldCheck(input){var parent=input.parent();if(fieldValid(input)){if(parent.hasClass('error')){parent.removeClass('error')}parent.addClass('valid');return true;}else{if(parent.hasClass('valid')){parent.removeClass('valid')}parent.addClass('error');return false;}}$('.form-input').on('change',function(){return fieldCheck($(this));});$('.form-input').on('focusout',function(){$(this).parent().removeClass('filling');});$('.form-input').on('input',function(){$(this).parent().addClass('filling');});function fieldsCheck(selector){var checked=true;var focus=true;$(selector).each(function(){checked=fieldCheck($(this))&&checked;if(focus&&!checked){$(this).focus();focus=false;}});return checked;}function addFields(selector,object){$(selector).each(function(){var $this=$(this);object[$this.attr('name')]=$this.val();});}function ajaxDataSend(type,url,data){return $.ajax({type:type,url:url,dataType:'json',data:data,headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});}var unical,sendButton,selector;var active=true;function finalValidation(){if(active){sendButton=$(this);unical=sendButton.closest('.form-id').attr('id');selector='#'+unical+' .form-input';var validForm=fieldsCheck(selector);if(validForm){active=false;sendButton.addClass('load');sendForm();}}}$('.send-form').on('click',finalValidation);function sendForm(){var dataobj={};addFields(selector,dataobj);var response=ajaxDataSend('POST','/feedback/mail',dataobj);response.success(function(data){if(!data.error){document.location.href="/thanks";clearFields(selector);}sendButton.removeClass('load');active=true;});response.error(function(data){console.log(data);sendButton.removeClass('load');active=true;});}});