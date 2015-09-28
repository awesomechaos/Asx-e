/**
 * Created by ke.zhang on 2015/9/28.
 * work for whole admin system
 */

var Glo = function () {

    return {
    
        showNotification: function (data) {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: data.title,
                // (string | mandatory) the text inside the notification
                text: data.text,
                // (string | optional) the image to display on the left
                image: data.image,
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: data.sticky,
                // (int | optional) the time you want it to be alive for before fading out
                time: data.time,
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });
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
                    position: 'top-right'
            });
            $.getJSON('/admin/notification', function(result) {
                $.each(result, function(i,data){
                    //等第一条消息消失后出现第二条
                    setTimeout(
                        Glo.showNotification(data),
                        3000
                    );
                })
                
            })

            setTimeout(function () {

                $.extend($.gritter.options, {
                    position: 'top-left'
                });

                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Notification',
                    // (string | mandatory) the text inside the notification
                    text: 'You have 3 new notifications.',
                    // (string | optional) the image to display on the left
                    image1: './assets/admin/image/image1.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: false,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '0.5',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                // setTimeout(function () {
                    // $.gritter.remove(unique_id, {
                        // fade: true,
                        // speed: 'slow'
                    // });
                // }, 4000);

                $.extend($.gritter.options, {
                    position: 'top-right'
                });

                var number = $('#header_notification_bar .badge').text();
                number = parseInt(number);
                number = number + 3;
                $('#header_notification_bar .badge').text(number);
                $('#header_notification_bar').pulsate({
                    color: "#66bce6",
                    repeat: 5
                });

            }, 30000);

            setTimeout(function () {

                $.extend($.gritter.options, {
                    position: 'top-left'
                });

                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Inbox',
                    // (string | mandatory) the text inside the notification
                    text: 'You have 2 new messages in your inbox.',
                    // (string | optional) the image to display on the left
                    image1: './assets/admin/image/avatar1.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                $.extend($.gritter.options, {
                    position: 'top-right'
                });

                setTimeout(function () {
                    $.gritter.remove(unique_id, {
                        fade: true,
                        speed: 'slow'
                    });
                }, 4000);

                var number = $('#header_inbox_bar .badge').text();
                number = parseInt(number);
                number = number + 2;
                $('#header_inbox_bar .badge').text(number);
                $('#header_inbox_bar').pulsate({
                    color: "#dd5131",
                    repeat: 5
                });

            }, 60000);
        }

    };

}();