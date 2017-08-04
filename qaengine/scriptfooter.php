<script type="text/template" id="tag_item">

			<input type="hidden" name="tags[]" value="{{= stripHTML(name) }}" />
			{{= stripHTML(name) }} <a href="javascript:void(0)" class="delete"><i class="fa fa-times"></i></a>

		</script>
<script type="text/javascript">
			function stripHTML(html)
			{
			   var tmp = document.createElement("DIV");
			   tmp.innerHTML = html;
			   return tmp.textContent||tmp.innerText;
			}
		</script>
<script type="text/template" id="search_preview_template">
	<# _.each(questions, function(question){ #>
	<div class="i-preview">
		<a href="{{= question.permalink }}">
			<div class="i-preview-content">
				<span class="i-preview-title">
					{{= question.post_title.replace( search_term, '<strong>' + search_term + "</strong>" ) }}
				</span>
			</div>
		</a>
	</div>
	<# }); #>
	<div class="i-preview i-preview-showall">
		<# if ( total > 0 && pages > 1 ) { #>
		<a href="{{= search_link }}">View all {{= total }} results</a>
		<# } else if ( pages == 1) { #>
		<a href="{{= search_link }}">View all results</a>
		<# } else { #>
		<a> No results found </a>
		<# } #>
	</div>
</script>  
 
<style type="text/css"></style>
 
<script type="text/template" id="poll_tag_item">

            <input type="hidden" name="qa_tag[][name]" value="{{= stripHTML(name) }}" />
            {{= stripHTML(name) }} <a href="javascript:void(0)" class="delete"><i class="fa fa-times"></i></a>

        </script>
<script type="text/javascript">
            function stripHTML(html)
            {
                var tmp = document.createElement("DIV");
                tmp.innerHTML = html;
                return tmp.textContent||tmp.innerText;
            }
        </script>
<script type="text/template" id="edit_poll_answer_item">
            <input type="text" class="input-answer" placeholder="{{= placeholder }}" name="poll_answers[]" value="{{= post_title }}">
            <input type="hidden" class="answer-color-picker" value="#e6e6e6">
            <div class="function-right">
                <span class="color-box" style="background: {{= poll_answer_color }}"></span>
                <span class="remove-box"><i class="fa fa-trash"></i></span>
            </div>
        </script>
<script type='text/javascript' src='../files/wp-includes/js/underscore.minc74f.js?ver=1463369188'></script>
<script type='text/javascript' src='../files/wp-includes/js/backbone.minc74f.js?ver=1463369188'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/marionette8783.js?ver=1464677289'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ae_globals = {"ajaxURL":"","is_submit_project":"","is_single":"","max_images":"5","user_confirm":"0","max_cat":"3","confirm_message":"Are you sure to archive this?","map_zoom":"8","map_center":{"latitude":10,"longitude":106},"fitbounds":"","limit_free_msg":"You have reached the maximum number of Free posts. Please select another plan.","error":"Please fill all require fields.","geolocation":"0","date_format":"F j, Y","time_format":"g:i a","dates":{"days":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"daysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"],"daysMin":["Su","Mo","Tu","We","Th","Fr","Sa","Su"],"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},"global_map_style":null,"posts_per_page":"12","pending_questions":"0","pending_answers":"0","gplus_client_id":"","max_width_title":"150","user_id":"0","upload_images":"1","is_infinite":""};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/appengine8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/functions8783.js?ver=1464677289'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qa_front = {"form_auth":{"error_msg":"Please fill out all fields required.","error_user":"Please enter your user name.","error_email":"Please enter a valid email address.","error_username":"Please enter a valid username.","error_repass":"Please enter the same password as above.","error_url":"Please enter a valid URL.","error_cb":"You must accept the terms & privacy."},"texts":{"require_login":"You must be logged in to perform this action.","enought_points":"You don't have enought points to perform this action.","create_topic":"Create Topic","upload_images":"Upload Images","insert_codes":"Insert Code","no_file_choose":"No file chosen.","require_tags":"Please insert at least one tag.","add_comment":"Add comment","cancel":"Cancel","sign_up":"Sign Up","sign_in":"Sign In","accept_txt":"Accept","best_ans_txt":"Best answer","forgotpass":"Forgot Password","close_tab":"You have made some changes which you might want to save.","confirm_account":"You must activate your account first to create questions \/ answers!.","cancel_auth":"User cancelled login or did not fully authorize.","banned_account":"You account has been banned, you can't make this action!","buy_pump":"You must activate your account first to buy pump package.","uploading":"Uploading...","insert":"Insert"}};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/front8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/pumping8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/jquery-countdown/jquery.plugin.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/jquery-countdown/jquery.countdown.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/core.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/widget.mina083.js?ver=1452157707'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/mouse.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/draggable.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/slider.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/jquery.ui.touch-punch1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-admin/js/iris.min1be2.js?ver=1432020660'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var poll_settings = {"max_answer":"5","max_answer_error_text":"You can only create 5 answers.","answer_placeholder":"Your answer","poll_chart_type":"pie_chart","user_voted":""};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/poll8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/bootstrap.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/modernizr8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/jquery.simple-text-rotator.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/jquery.validate.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/position.mina083.js?ver=1452157707'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/menu.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/wp-a11y.mina083.js?ver=1452157707'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No search results.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate."};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/autocomplete.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/waypoints.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/waypoints-sticky8783.js?ver=1464677289'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var raty = {"hint":["bad","poor","nice","good","gorgeous"]};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/chosen8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/classie8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/scripts8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/moment.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/bootstrap-datetimepicker.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/colorpicker8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/plugins/et_demobar/js/jquery.mCustomScrollbar.concat.minb4a3.js?ver=1464666882'></script>

<script type='text/javascript' src='../files/wp-content/plugins/et_demobar/js/mainb4a3.js?ver=1464666882'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpColorPickerL10n = {"clear":"Clear","defaultString":"Default","pick":"Select Color"};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-admin/js/color-picker.minaf47.js?ver=1452157706'></script>
<script type='text/javascript' src='../files/wp-includes/js/wp-embed.minc63f.js?ver=1462563126'></script>
<script type="text/javascript">
		tinyMCEPreInit = {
			baseURL: "",
			suffix: ".min",
						mceInit: {},
			qtInit: {},
			ref: {plugins:"",theme:"modern",language:""},
			load_ext: function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
		</script>
<script type="text/javascript">
		var ajaxurl = "wp-admin/admin-ajax.php";
		( function() {
			var init, id, $wrap;

			if ( typeof tinymce !== 'undefined' ) {
				for ( id in tinyMCEPreInit.mceInit ) {
					init = tinyMCEPreInit.mceInit[id];
					$wrap = tinymce.$( '#wp-' + id + '-wrap' );

					if ( ( $wrap.hasClass( 'tmce-active' ) || ! tinyMCEPreInit.qtInit.hasOwnProperty( id ) ) && ! init.wp_skip_init ) {
						tinymce.init( init );

						if ( ! window.wpActiveEditor ) {
							window.wpActiveEditor = id;
						}
					}
				}
			}

			if ( typeof quicktags !== 'undefined' ) {
				for ( id in tinyMCEPreInit.qtInit ) {
					quicktags( tinyMCEPreInit.qtInit[id] );

					if ( ! window.wpActiveEditor ) {
						window.wpActiveEditor = id;
					}
				}
			}
		}());
		</script>
<style type="text/css">.post-a-job .step .toggle-title,.btn-background,.icon-border{box-sizing:content-box;}.et-plugin-demobar .icon:before{font-size:20px;}</style>
<script type="text/javascript">
			jQuery(document).ready(function($) {
									if( window.location.hash == '#register' ){
							setTimeout(function(){
								$('.login-url').trigger('click');
							},300);
						}
								});
		</script>
 

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'../www.googletagmanager.com/gtm5445.php?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','GTM-TS4RDD');</script>
<script type="text/javascript">
            _.templateSettings = {
                evaluate: /\<\#(.+?)\#\>/g,
                interpolate: /\{\{=(.+?)\}\}/g,
                escape: /\{\{-(.+?)\}\}/g
            };
        </script>
<script type="text/javascript" id="frontend_scripts">
			(function ($) {
				$(document).ready(function(){

					
					if(typeof QAEngine.Views.Front != 'undefined') {
						QAEngine.App = new QAEngine.Views.Front();
					}

					if(typeof QAEngine.Views.Intro != 'undefined') {
						QAEngine.Intro = new QAEngine.Views.Intro();
					}

					if(typeof QAEngine.Views.UserProfile != 'undefined') {
						QAEngine.UserProfile = new QAEngine.Views.UserProfile();
					}

					if(typeof QAEngine.Views.Single_Question != 'undefined') {
						QAEngine.Single_Question = new QAEngine.Views.Single_Question();
					}

					
					/*======= Open Reset Password Form ======= */
					
					/*======= Open Reset Password Form ======= */
					
					/*======= Open Confirmation Message Modal ======= */
					
									});
			})(jQuery);
		</script>
<script type="text/javascript" id="current_user">
					 	currentUser = {"id":0,"ID":0}		</script>
    
<script type="text/javascript">
            (function ($) {
                if(typeof $.validator !== 'undefined' ) {
                    $.extend($.validator.messages, {
                        required: "This field is required.",
                        email: "Please enter a valid email address.",
                        url: "Please enter a valid URL.",
                        number: "Please enter a valid number.",
                        digits: "Please enter only digits.",
                        equalTo: "Please enter the same value again.",
                        date: "Please enter a valid date.",
                        creditcard: "Please enter a valid credit card number.",
                        accept: "Please enter a value with a valid extension.",

                        maxlength: $.validator.format("Please enter no more than {0} characters."),
                        minlength: $.validator.format("Please enter at least {0} characters."),
                        rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
                        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
                        min : $.validator.format("Please enter a value greater than or equal to {0}."),
                        max : $.validator.format("Please enter a value less than or equal to {0}.")
                    });
                }


            })(jQuery);
        </script>