/**
 * Created by Lei on 2015/4/23.
 * 定时获取通知
 */
var Notify = {
    config : {
        interval : 60*1000,
        notifyUrl : '/notify/recent'
    },
    init : function(){
        //注册请求
        Notify.lastUpdate = $.cookie('Notify.lastUpdate');
        //$('<audio id="chatAudio"><source src="/media/notify.ogg" type="audio/ogg"> <source src="/media/notify.mp3" type="audio/mpeg"><source src="/media/notify.wav" type="audio/wav"> </audio>').appendTo('body');
        $('<audio id="chatAudio"><source src="/media/notify.mp3" type="audio/mpeg"></audio>').appendTo('body');
        Notify.update();
        setInterval(Notify.update, Notify.config.interval);
    },
    update : function(){
        var lastUpdate = !Notify.lastUpdate ? 0 : Notify.lastUpdate;
        Notify.lastUpdate = parseInt(Date.now()/1000);
        $.cookie('Notify.lastUpdate', Notify.lastUpdate , {path:'/'})
        //alert(lastUpdate);
        $.get('/notify/status', { time : lastUpdate }, function(res){
            if(res.status ==1){
                Notify.updateBadge(res.data.msg);
                Notify.notify(res.data.notification,true);
            }else{
                console.log(res.msg);
            }
        },'json');
    },
    updateBadge : function(msg){
        if(!msg) return;
        var total = 0;
        $.each(msg,function(k,v){
            //console.log(this);
            $("#notify-"+k).text(v);
            total += parseInt(v);
        });
        $("#notify-all").text(total);
    },
    notify : function(data,voice){
        if(!data) return;
        var type=null,title=null,content=null;
        if(typeof(data) == "object"){
            type = data.type;
            title = data.title;
            content = data.content;
        }else{
            type = data.msg;
            title = data.data;
        }
        console.log(type);
        toastr.options = {"closeButton":true,"debug":false,"positionClass":"toast-top-right","onclick":null,"showDuration":"1000","hideDuration":"1000","timeOut":"5000","extendedTimeOut":"1000","showEasing":"swing","hideEasing":"linear","showMethod":"fadeIn","hideMethod":"fadeOut"};
        toastr[type](content,title);
        if(voice == true){
            $('#chatAudio')[0].play();
        }
    }
}