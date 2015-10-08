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
                    // (string | optional) the url link
                    url: data.href,
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
            var number = data.length < 99 ? data.length : 99 ;
            if (number == 0) {
                $('#notice_title').text('You have no notification');
                return;
            } else {
                $('#header_notification_bar .badge').text(number);
                $('#notice_title').text('You have '+ number +' new notifications');
                //页面插入消息
                $.each(data, function(i, n){
                    $('#header_notification_bar li')
                        .first().after(
                                    '<li><a href="' +
                                    data[i].href +
                                    '"><span class = "label label-' +
                                    data[i].type +
                                    '"><i class="' +
                                    data[i].icon + 
                                    '"></i></span> ' +
                                    data[i].content +
                                    ' <span class="time">' +
                                    data[i].time + //asx:time处理下
                                    '</span></a></li>');
                });
            }
        },
        showMsgInfo: function (data) {
            var number = data.length < 99 ? data.length : 99 ;
            if (number == 0) {
                $('#message_title').text('You have no message');
                return;
            } else {
                $('#header_inbox_bar .badge').text(number);
		        $('#message_box').append(' ('+ number +')');
                $('#message_title').text('You have '+ number +' new messages');
                //页面插入消息
                $.each(data, function(i, n){
                    $('#header_inbox_bar li')
                        .first().after(
                                    '<li><a href="' +
                                    data[i].href +
                                    '"><span class = "photo"><img src="' +
                                    data[i].photo +
                                    '"/></span><span class="subject"><span class="from">' +
                                    data[i].from + 
                                    '</span><span class="time">' +
                                    data[i].time +
                                    '</span></span><span class="message">' +
                                    data[i].content + 
                                    '</span></a></li>');
                });
            }
        },
        showTask: function (data) {
            var number = data.length < 99 ? data.length : 99 ;
            if (number == 0) {
                $('#task_title').text('You have no pending task');
                return;
            } else {
                $('#header_task_bar .badge').text(number);
                $('#task_title').text('You have '+ number +' pending tasks');
                //页面插入消息
                $.each(data, function(i, n){
                    var color;
                    if (parseInt(data[i].percent) < 30) {
                        color = "progress-danger";
                    } else if(parseInt(data[i].percent) < 70) {
                        color = "progress-warning";
                    } else {
                        color = "progress-success";
                    }
                    $('#header_task_bar li')
                        .first().after(
                                    '<li><a href="' +
                                    data[i].href +
                                    '"><span class="task"><span class="desc">' +
                                    data[i].content +
                                    '</span><span class="percent">' +
                                    data[i].percent + 
                                    '%</span></span><span class="progress progress-striped active ' +
                                    color +
                                    '"><span style="width: ' + 
                                    data[i].percent +
                                    '%;" class="bar"></span></span></a></li>');
                });
            }
        },

        //asx:need change 弹窗通知
        //asx:考虑增加chrome通知
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
                Glo.showMsgInfo(result.message);
                Glo.showTask(result.task);
            });
            
        }

    };

}();