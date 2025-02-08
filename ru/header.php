	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16458617391">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'AW-16458617391');
	</script>


<link href="index.html" rel="alternate" hreflang="ru-RU" />
<link href="de/index.html" rel="alternate" hreflang="de-DE" />
<link href="../images/LOGO2.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="../templates/shaper_helix3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../templates/shaper_helix3/css/joomla-fontawesome.min.css" rel="stylesheet" type="text/css" />
<link href="../templates/shaper_helix3/css/font-awesome-v4-shims.min.css" rel="stylesheet" type="text/css" />
<link href="../templates/shaper_helix3/css/template.css" rel="stylesheet" type="text/css" />
<link href="../templates/shaper_helix3/css/presets/preset3.css" rel="stylesheet" class="preset" type="text/css" />
<link href="../templates/shaper_helix3/css/frontend-edit.css" rel="stylesheet" type="text/css" />
<link
    href="https://polischuk-bestattungen.de/plugins/system/lab5_cookie_commander/cookie_commander/assets/jquery.cookiebar.css"
    rel="stylesheet" type="text/css" />
<link href="media/jui/css/bootstrap-tooltip-extended.css@9bedf092946dd5dad411441e62a9e7c0.css" rel="stylesheet"
    type="text/css" />
<link href="media/mod_languages/css/template.css@9bedf092946dd5dad411441e62a9e7c0.css" rel="stylesheet"
    type="text/css" />
<link href="media/jui/css/chosen.css@9bedf092946dd5dad411441e62a9e7c0.css" rel="stylesheet" type="text/css" />
<link href="https://polischuk-bestattungen.de/modules/mod_reslider/assets/css/flexslider.css" rel="stylesheet"
    type="text/css" />
<style type="text/css">
    #sp-top1 {
        display: flex !important;
        justify-content: flex-end;
    }

    #sp-user2 {
        display: none !important;
    }

    @media (min-width: 1400px) {
        .container {
            max-width: 1140px;
        }
    }

    #sp-header {
        background-color: #f5f5f5;
    }

    #sp-page-title {
        padding: 5px;
        margin: 5px;
    }

    #sp-top-bar {
        background-color: #ffffff;
        color: #999999;
        padding: 5px;
        margin: 5px;
    }

    #sp-top-bar a {
        color: #006652;
    }

    #sp-top-bar a:hover {
        color: #000000;
    }

    #sp-bottom {
        background-color: #f5f5f5;
        color: #000000;
    }

    #sp-bottom a {
        color: #006652;
    }

    #sp-bottom a:hover {
        color: #000000;
    }

    #sp-footer {
        background-color: #ffffff;
        color: #006652;
    }

    #cookie-bar.fixed {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
    }

    #cookie-bar.fixed.bottom {
        bottom: 0;
        top: auto;
    }

    #cc_popup {
        background: #ffffff;
    }

    #cc_popup {
        padding: 10px;
    }

    #cc_popup.popup_content,
    #cc_popup.modal {

        z-index: 987654321;
        background: #ffffff66;
    }

    #cc_popup.modal>div,
    #cc_popup.popup_content>form>div {

        background: #ffffff;
        padding: 10px;
        box-sizing: border-box;
        width: 100%;
        margin: 0 auto;
    }
</style>
<script src="media/jui/js/jquery.min.js@9bedf092946dd5dad411441e62a9e7c0" type="text/javascript"></script>
<script src="media/jui/js/jquery-noconflict.js@9bedf092946dd5dad411441e62a9e7c0" type="text/javascript"></script>
<script src="media/jui/js/jquery-migrate.min.js@9bedf092946dd5dad411441e62a9e7c0" type="text/javascript"></script>
<script src="https://polischuk-bestattungen.de/plugins/system/helix3/assets/js/bootstrap.legacy.js"
    type="text/javascript"></script>
<script src="../templates/shaper_helix3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../templates/shaper_helix3/js/jquery.sticky.js" type="text/javascript"></script>
<script src="../templates/shaper_helix3/js/main.js" type="text/javascript"></script>
<script src="../templates/shaper_helix3/js/frontend-edit.js" type="text/javascript"></script>
<script
    src="https://polischuk-bestattungen.de/plugins/system/lab5_cookie_commander/cookie_commander/assets/jquery.cookiebar.js"
    type="text/javascript"></script>
<script src="media/jui/js/bootstrap-tooltip-extended.min.js@9bedf092946dd5dad411441e62a9e7c0"
    type="text/javascript"></script>
<script src="media/jui/js/chosen.jquery.min.js@9bedf092946dd5dad411441e62a9e7c0" type="text/javascript"></script>
<script src="https://polischuk-bestattungen.de/modules/mod_reslider/assets/js/jquery.flexslider-min.js"
    type="text/javascript"></script>
<script type="text/javascript">

    var sp_preloader = '0';

    var sp_gotop = '0';

    var sp_offanimation = 'default';

    var $ = jQuery;
    jQuery(document).ready(function ($) {
        $('#cc_popup').on('show.bs.modal', function () {
            $('body').addClass('modal-open');
            $('.modalTooltip').each(function () {
                ;
                var attr = $(this).attr('data-placement');
                if (attr === undefined || attr === false) $(this).attr('data-placement', 'auto-dir top-left')
            });
            $('.modalTooltip').tooltip({ 'html': true, 'container': '#cc_popup' });
        }).on('shown.bs.modal', function () {
            var modalHeight = $('div.modal:visible').outerHeight(true),
                modalHeaderHeight = $('div.modal-header:visible').outerHeight(true),
                modalBodyHeightOuter = $('div.modal-body:visible').outerHeight(true),
                modalBodyHeight = $('div.modal-body:visible').height(),
                modalFooterHeight = $('div.modal-footer:visible').outerHeight(true),
                padding = document.getElementById('cc_popup').offsetTop,
                maxModalHeight = ($(window).height() - (padding * 2)),
                modalBodyPadding = (modalBodyHeightOuter - modalBodyHeight),
                maxModalBodyHeight = maxModalHeight - (modalHeaderHeight + modalFooterHeight + modalBodyPadding);
            if (modalHeight > maxModalHeight) {
                ;
                $('.modal-body').css({ 'max-height': maxModalBodyHeight, 'overflow-y': 'auto' });
            }
        }).on('hide.bs.modal', function () {
            $('body').removeClass('modal-open');
            $('.modal-body').css({ 'max-height': 'initial', 'overflow-y': 'initial' });
            $('.modalTooltip').tooltip('destroy');
        });
    });
    $(document).ready(function () {

        jQuery.cookieBar({

            storageMode: 'session',
            consentCookieName: 'cookie-consent-status',
            cookienames: ['1_analytics', '2_language', 'x_others'],
            expireDays: '0',
            popupVariant: 1,

            autoEnable: 1,
            acceptOnContinue: 1,
            acceptOnScroll: 1,
            acceptAnyClick: 1,
            renewOnVisit: 1,

            idCookieBar: 'cookie-bar',
            idPopup: 'cc_popup',

            controlsButton: 1,
            controlsText: 'Cookie Controls',
            btnClassControls: 'btn',
            classBTNControls: 'cb-controls',

            acceptButton: 1,
            acceptText: 'I understand and <b>accept</b>',
            btnClassAccept: 'btn',
            classBTNAccept: 'cb-enable',

            declineButton: 1,
            declineText: 'No, I Decline',
            btnClassDecline: 'btn',
            classBTNDecline: 'cb-disable',

            policyButton: 1,
            policyText: 'Privacy Policy',
            btnClassPolicy: 'btn',
            classBTNPolicy: 'cb-policy',
            policyURL: '/ru/?Itemid=104',

            showMode: 'normal',
            zindex: 987654321,
            append: 1,


            acceptFunction: function (cookieValue) {

                /* dynamically set Analytics tracking if accepted  */




                if (cookieValue != 'undecided' && cookieValue != 'accepted') {


                }
            },
            declineFunction: function (cookieValue) {

            }

        });

    });

    jQuery(function ($) {
        initChosen();
        $("body").on("subform-row-add", initChosen);

        function initChosen(event, container) {
            container = container || document;
            $(container).find(".advancedSelect").chosen({ "disable_search_threshold": 10, "search_contains": true, "allow_single_deselect": true, "placeholder_text_multiple": "\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043b\u0438 \u0432\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u043d\u0435\u0441\u043a\u043e\u043b\u044c\u043a\u043e \u044d\u043b\u0435\u043c\u0435\u043d\u0442\u043e\u0432", "placeholder_text_single": "\u0412\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u0437\u043d\u0430\u0447\u0435\u043d\u0438\u0435", "no_results_text": "\u041d\u0438\u0447\u0435\u0433\u043e \u043d\u0435 \u043d\u0430\u0439\u0434\u0435\u043d\u043e." });
        }
    });

</script>