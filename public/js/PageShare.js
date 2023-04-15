/**
 * Created by Pinku Kesharwani on 29/03/2018.
 */
var social_date='<ul class="glo_share_ul">'
+'<li class="glo_share_libox" onclick=GlobalPageShare("facebook");><i class="mdi mdi-facebook facebook_clr"></i>'
+'<p class="share_txt">Facebook</p></li><li class="glo_share_libox" onclick=GlobalPageShare("twitter");>'
+'<i class="mdi mdi-twitter twitter_clr"></i><p class="share_txt">Twitter</p></li>'
+'<li class="glo_share_libox" onclick=GlobalPageShare("linkedin");><i class="mdi mdi-linkedin linkedin_clr"></i>'
+'<p class="share_txt">Linkedin</p></li>'
/*+'<li class="glo_share_libox" onclick=GlobalPageShare("google");><i class="mdi mdi-google google_clr"></i>'
+'<p class="share_txt">Google</p></li>'*/
+'<li class="glo_share_libox" onclick=GlobalPageShare("whatsapp");><i class="mdi mdi-whatsapp whatsup_clr"></i>'
+'<p class="share_txt">Whatsapp</p></li></ul>';

 $(document).ready(function () {
    // $('#add_social_link').append(social_date);
 });

function GlobalPageShare(socialshare_type) {
    var share_url = $.trim($('#glo_share_url').val());
    var share_image = $.trim($('#glo_share_image').val());
    var title = $.trim($('#glo_share_title').val());
    var description = $.trim($('#glo_share_detail').val());
    var twitterdesc = description;
    twitterdesc = twitterdesc.length > 75 ? twitterdesc.substring(0, 75) : twitterdesc;
    twitterdesc = (twitterdesc + "... ");
    var myTest = "";
    if (socialshare_type == "facebook") {
        var FB_url = "http://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(share_url);
        myTest = window.open(FB_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "twitter") {
        var TW_url = "https://twitter.com/intent/tweet?text=" + title + "&url=" + share_url;
        myTest = window.open(TW_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "linkedin") {
        var LK_url = "http://www.linkedin.com/shareArticle?mini=true&url=" + encodeURIComponent(share_url) + "&title=" + (title) + "&source=" + encodeURIComponent(share_url);
        myTest = window.open(LK_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "google") {
        var GP_url = "https://plus.google.com/share?url=" + encodeURIComponent(share_url);
        myTest = window.open(GP_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "whatsapp") {
        if (/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var sUrl = window.location.href;
            //var sMsg = encodeURIComponent(sText) + " - " + encodeURIComponent(sUrl);
            var whatsapp_url = "whatsapp://send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
        else {
            var sUrl = window.location.href;
            var whatsapp_url = "https://web.whatsapp.com/send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
    }else
    {
        //Initialize Js
    }
}