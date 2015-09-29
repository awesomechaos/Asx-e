/**
 * Created by ke.zhang on 2015/9/28.
 * work for whole admin system
 */

var Glo = function () {

    return {
        
        //消息窗
        showMessage: function (data) {
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: data.title,
                    // (string | mandatory) the text inside the notification
                    text: data.text,
                    // (string | optional) the image to display on the left
                    image: data.image,
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: Boolean(data.sticky),
                    // (int | optional) the time you want it to be alive for before fading out
                    time: data.time,
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });
        },
        
        //右上角消息提示
        showNotice: function (data) {
            var number = data.length;
            if (number == 0) {
                $('#notice_title').text('You have no notification');
                return;
            } else {
                $('#header_notification_bar .badge').text(number);
                $('#notice_title').text('You have '+ number +' new notifications');
            setTimeout(function () {
                $('#header_notification_bar').pulsate({
                    color: "#66bce6",
                    repeat: 3
                });
            }, 10000);
            }
        },
        showMessage: function (data) {
            var number = data.length;
            if (number == 0) {
                $('#message_title').text('You have no notification');
                return;
            } else {
                $('#header_notification_bar .badge').text(number);
                $('#message_title').text('You have '+ number +' new notifications');
            setTimeout(function () {
                $('#header_notification_bar').pulsate({
                    color: "#66bce6",
                    repeat: 3
                });
            }, 10000);
            }
        },

        //asx:need change 弹窗通知
        initIntro: function () {
            if ($.cookie('intro_show')) {
                return;
            }

            //asx:考虑如何处理
            // $.cookie('intro_show', 1);
            
            //右边显示通知
            $.extend($.gritter.options, {
                    position: 'bottom-right'
            });
            
            $.getJSON('/admin/message', function(result) {
                $.each(result, function(i,data){
                    // 等第一条消息消失后出现第三条
                    setTimeout(Glo.showMessage, 1.5*i*1000, data);
                });
            })
            
            //上方消息通知
            $.getJSON('/admin/notification', function(result) {
                Glo.showNotice(result.notice);
                console.log(result.notice);
                console.log(result.message);
                console.log(result.task);
            });
            
            
            setTimeout(function () {
                var number = $('#header_inbox_bar .badge').text();
                number = parseInt(number);
                number = number + 2;
                $('#header_inbox_bar .badge').text(number);
                $('#header_inbox_bar').pulsate({
                    color: "#dd5131",
                    repeat: 5
                });

            }, 6000);
            
        }

    };

}();