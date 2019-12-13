$(document).ready(function() {

    $(function() {
        $('.draggable').draggable();
    });

    $(".reservation").click(function() {
        alert("!!!");
    });

    $.datepicker.regional['ru'] = {clearText: 'Очистить', clearStatus: '',
        minDate: "0",
        closeText: 'Закрыть', closeStatus: '',
        prevText: '<Пред',  prevStatus: '',
        nextText: 'След>', nextStatus: '',
        currentText: 'Сегодня', currentStatus: '',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
            'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
            'Июл','Авг','Сен','Окт','Ноя','Дек'],
        monthStatus: '', yearStatus: '',
        weekHeader: 'Не', weekStatus: '',
        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        dayStatus: 'DD', dateStatus: 'D, M d',
        dateFormat: 'dd/mm/yy', firstDay: 1,
        initStatus: '', isRTL: false};

    $.datepicker.setDefaults($.datepicker.regional['ru']);

    //Hotel weight up
    function hotelWeightUp(id) {
        alert(id);
    }

    $('#hotelreserve-guestid').click(function(){
        toggle();
    });

    $('#palomnik-grid table tbody tr').click(function(){
        var guestid = $(this).children(':nth-child(1)').text();
        $('#HotelReserve_palomnikid').val(guestid);
        var palomnikfam = $(this).children(':nth-child(2)').text();
        var palomnikname = $(this).children(':nth-child(3)').text();
        var palomnikotch = $(this).children(':nth-child(4)').text();
        $('#hotelreserve-guestid').val(palomnikfam + ' ' + palomnikname + ' ' + palomnikotch);
        //$('#hotelreserve-guestid').css('border', '1px solid #e5e5e5');
        toggle();
    });

    $(".data_line_day").mouseover(function() {
        var current = $(this).attr('id');
        $('#top_' + current).attr('class', 'data_line_day_top_selected');
    });

    $(".data_line_day").mouseleave(function() {
        var current = $(this).attr('id');
        $('#top_' + current).attr('class', 'data_line_day_top');
    });

    $(".palomnik-status").click(function(){
        var data = Array();
        var palomnikid = $(this).parent().parent().children(':nth-child(1)').text();
        data.width = 250;
        data.height = 100;
        data.url = '/admin/palomnik/changestate/palomnikid/'+palomnikid+'/';
        wrapper(data);
    });

    $(".room-type").click(function(){
        var data = Array();
        var palomnikid = $(this).parent().parent().children(':nth-child(1)').text();
        data.width = 250;
        data.height = 100;
        data.url = '/admin/palomnik/changeroomtype/palomnikid/'+palomnikid+'/';
        wrapper(data);
    });

    $(".palomnik-quality").click(function(){
        var data = Array();
        var palomnikid = $(this).parent().parent().children(':nth-child(1)').text();
        data.width = 250;
        data.height = 100;
        data.url = '/admin/palomnik/changequality/palomnikid/'+palomnikid+'/';
        wrapper(data);
    });

    $(".palomnik-card").click(function(){
        var data = Array();
        var palomnikid = $(this).parent().parent().children(':nth-child(1)').text();
        data.width = 250;
        data.height = 100;
        data.url = '/admin/palomnik/palomnikcard/palomnikid/'+palomnikid+'/';
        wrapper(data);
    });

    $(".add_dates").click(function() {
        var time = new Date().getTime();
        $(".append_point").append('<div id="'+time+'"><div class="row"><label for="HotelReserve_checkin" class="required">Дата заселения <span class="required">*</span></label><input class="datepicker_recurring_start" name="HotelReserve[checkin_' + time + ']" id="HotelReserve_checkin_' + time + '" type="text" class="hasDatepicker"><label for="HotelReserve_checkout" class="required">Дата выселения <span class="required">*</span></label><input  class="datepicker_recurring_start" name="HotelReserve[checkout_' + time + ']" id="HotelReserve_checkout_' + time + '" type="text"> <a href="#" class="delete_button" onclick="del('+time+');"><img src="/images/delete.png"></a> </div></div>');
        $('body').on('focus',".datepicker_recurring_start", function(){
            $(this).datepicker();
        });
    });

    $("#hotelreserve-hotelid").change(function(){
        $('#hotelreserve-floorid').text('');
        $('#hotelreserve-roomid').text('');
        $('#hotelreserve-bedid').text('');
        floorProcessing($(this).find(":selected").val());
    });

    $("#hotelreserve-floorid").change(function(){
        $('#hotelreserve-roomid').text('');
        $('#hotelreserve-bedidid').text('');
        roomProcessing($(this).find(":selected").val());
    });

    $("#hotelreserve-roomid").change(function(){
        $('#hotelreserve-bedid').text('');
        var roomid = $(this).find(":selected").val();
        bedProcessing( roomid );
    });


    $("#pgroup").change(function(){
        if ($("#pgroup option:selected").val()==1){
            $(".trispgroupcode, .pgroupcode").css('display', 'block');
            $("#isgroupcode").change(function(){
                if ($("#isgroupcode option:selected").val()==0){
                    $(".trpgroupcode").css('display', 'block');
                }
                else{
                    $(".trpgroupcode").css('display', 'none');
                }
            })
        }
        else{
            $(".trispgroupcode, .pgroupcode, .trpgroupcode").css('display', 'none');
        };
    });

    $("#shengen").change(function(){
        if ($("#shengen option:selected").val()==0){
            $(".trshengen").css('display', 'block');
        }
        else if ($("#shengen option:selected").val()==1){
            $(".trshengen").css('display', 'none');
        }
    })

    $(".pcalendar").change(function(){
        var myDate=$(".pcalendar").val();
        myDate=myDate.split("/");
        var newDate=myDate[0]+"-"+myDate[1]+"-"+myDate[2];
        document.location = '/admin/places/index/cdate/'+newDate+'/';
    });

    $(".calendar").change(function(){
        var myDate=$(".calendar").val();
        myDate=myDate.split("/");
        var newDate=myDate[0]+"-"+myDate[1]+"-"+myDate[2];
        //var nd = new Date(newDate).getTime();             
        document.location = '/admin/hotel/index/cdate/'+newDate+'/';
    });

    $(".draggable").mouseover(function(){
        $(this).css('z-index', 1);
    });

    $(".draggable").mouseleave(function(){
        $(".draggable").css('z-index', 0);
    });

    $(".makereserve").click(function(){
        makeReserve(null, null, null);
    });

    $(".dd-options").change(function(){
        alert("!!!");
        $('form').submit();
    })

    $("#Palomnik_checkoutdate").change(function(){
        if ($("#Palomnik_checkindate").val().length>1){
            var checkindate = '';
            var checkoutdate = '';
            $.getJSON('/ajax/freeplace/checkin/'+checkindate+'/checkoutdate/'+checkoutdate, function(data){

            });
        }
    })

    function floorProcessing(hotelid){
        $.getJSON('/admin/ajax/getfloor?hotelid='+hotelid, function(data) {
            var line = '';
            line+='<option selected value="0">Выберите этаж</option>';
            $.each(data, function(key, val) {
                line+='<option value="' + key + '">' + val + '</option>';
            });
            $('#hotelreserve-floorid').css('display', 'block');
            $('#hotelreserve-floorid').append(line);
        });
    }

    function roomProcessing(floorid){
        $.getJSON('/admin/ajax/getroom?floorid='+floorid, function(data) {
            var line = '';

            line+='<option selected value="0">Выберите номер</option>';

            $.each(data, function(key, val)
            {
                line+='<option value="' + key + '">' + val + '</option>';
            });

            $('#hotelreserve-roomid').css('display', 'block');
            $('#hotelreserve-roomid').append(line);
        });
    }

    function bedProcessing(roomid){
        $.getJSON('/admin/ajax/getbed?roomid='+roomid, function(data) {
            var line = '';

            line+='<option selected value="0">Выберите кровать</option>';

            $.each(data, function(key, val)
            {
                line+='<option value="' + key + '">' + val + '</option>';
            });

            $('#hotelreserve-bedid').css('display', 'block');
            $('#hotelreserve-bedid').append(line);

        });
    }

});

$(".ahide").click(function() {
    alert('test');
    hide();
});

function makeOpen(what, id){
    $.ajax({
        url: '/admin/hotel/makeopen',             // указываем URL и
        data: {"id":id, "what":what},
        dataType : "json",                     // тип загружаемых данных
        success: function (data, textStatus) { // вешаем свой обработчик на функцию success
            $.each(data, function(i, val) {    // обрабатываем полученные данные
                alert(val);
            });
        }
    });
}

function makeClose(what, id){
    $.ajax({
        url: '/admin/hotel/makeclose',             // указываем URL и
        data: {"id":id, "what":what},
        dataType : "json",                     // тип загружаемых данных
        success: function (data, textStatus) { // вешаем свой обработчик на функцию success
            $.each(data, function(i, val) {    // обрабатываем полученные данные
                alert(val);
            });
        }
    });
}

function showFloors(id){
    if ($(".ph_"+id).css('display')=='table-row'){
        makeClose('hotel', id);
        $(".ph_"+id).css('display', 'none');
    }
    else{
        if ($(".f_"+id).css('display')=='none'){
            makeOpen('hotel', id);
            $(".f_"+id).css('display', 'table-row');
        }
        else if ($(".f_"+id).css('display')=='table-row'){
            $(".f_"+id).css('display', 'none');
        }
    }
}

function showRooms(id){
    if ($(".pf_"+id).css('display')=='table-row'){
        makeClose('floor', id);
        $(".pf_"+id).css('display', 'none');
    }
    else{
        if ($(".r_"+id).css('display')=='none'){
            makeOpen('floor', id);
            $(".r_"+id).css('display', 'table-row');
        }
        else if ($(".r_"+id).css('display')=='table-row'){
            makeClose('floor', id);
            $(".r_"+id).css('display', 'none');
        }
    }
}

function showBeds(id){
    $(".pr"+id).each(function(){
        if ($(this).css('display')=='table-row'){
            $(this).css('display', 'none');
        }
    });
    if ($(".b_"+id).css('display')=='none'){
        makeOpen('room', id);
        $(".b_"+id).css('display', 'table-row');
    }
    else if ($(".b_"+id).css('display')=='table-row'){
        makeClose('room', id);
        $(".b_"+id).css('display', 'none');
    }
}

function makeReserve(bedid, reservefrom, palomnikid) {
    var data = Array();
    data.width = 800;
    data.height = 400;
    data.url = '/admin/hotels/reserve?bedid='+bedid+'&reservefrom='+reservefrom+'&palomnikid='+palomnikid;
    wrapper(data);
}

function editReserve(reserveid){
    var data = Array();
    data.width = 800;
    data.height = 400;
    data.url = '/admin/hotels/editreserve?reserveid='+reserveid;
    wrapper(data);
}

function wrapper(data) {
    var win = $(window);
    // The center of the window
    var windowCenter = {
        x: win.width() / 2,
        y: win.height() / 2
    };

    popupBG = $('<div>', {'class': 'popupBG'}).prependTo($('body'));
    popupBG.click(function() {
        hide();
    }).animate({// jQuery++ CSS3 animation
        'opacity': 1
    }, 0);
    popup = $('<div>').addClass('popup').css({
        width: data.width,
        height: data.height,
        top: windowCenter.y - data.height / 2,
        left: windowCenter.x - data.width / 2
    });
    topline = $('<div>').addClass('topline').appendTo(popup);
    topline.append('<a onclick="hide();" href="#">Закрыть</a>');
    popup.appendTo($('body'));

    var iframe;

    iframe = $('<iframe>', {
        'src': data.url,
        'css': {
            'width': data.width,
            'height': data.height
        }
    });

    popup.append(iframe);

    iframe.ready(function() {
        popup.append(iframe);
    })

}

function hide() {
    popupBG.remove();
    popup.remove();
}

function toggle(){
    //alert($('.palomniks_list').css('display'));    
    if ($('.palomniks_list').css('display') == 'block') {
        $('.palomniks_list').css('display', 'none');
        $('.reserve_data').css('display', 'block');
        $('.a_palomniks_list').text('Выбрать паломника');
    }
    else if ($('.palomniks_list').css('display') == 'none') {
        $('.palomniks_list').css('display', 'block');
        $('.reserve_data').css('display', 'none');
        $('.a_palomniks_list').text('Свернуть список');
    }
}

function del(divid){
    $("#"+divid).remove();
}

function ChangeRoomState(roomid){
    var data = Array();
    data.width = 250;
    data.height = 100;
    data.url = '/admin/hotels/changeroomstate/roomid/'+roomid;
    wrapper(data);
}

function GetPalomnikCurrentCountByDate(){
    var sdate = $(".scalendar").val();
    var Re = new RegExp("\/","g");
    sdate = sdate.replace(Re,"-");
    if (sdate==''){
        $(".search_result span").html('<span style="color:red">вы не выбрали дату</span>');
    }
    else{
        $.getJSON( "/admin/ajax/GetPalomnikCurrentCountByDate/sdate/"+sdate, function( data ) {
            $(".search_result span").text(data.count);
        });
    }
}

function GetPalomnikCheckInStatByDate(){
    var sdate = $(".pcheckincalendar").val();
    var Re = new RegExp("\/","g");
    sdate = sdate.replace(Re,"-");
    if (sdate==''){
        $(".pcheckinresult span").html('<span style="color:red">вы не выбрали дату</span>');
    }
    else{
        $.getJSON( "/admin/ajax/GetPalomnikCheckInStatByDate/sdate/"+sdate, function( data ) {
            $(".pcheckinresult span").text(data.count);
        });
    }
}

function GetPalomnikCheckOutStatByDate(){
    var sdate = $(".pcheckoutcalendar").val();
    var Re = new RegExp("\/","g");
    sdate = sdate.replace(Re,"-");
    if (sdate==''){
        $(".pcheckoutresult span").html('<span style="color:red">вы не выбрали дату</span>');
    }
    else{
        $.getJSON( "/admin/ajax/GetPalomnikCheckOutStatByDate/sdate/"+sdate, function( data ){
            $(".pcheckoutresult span").text(data.count);
        });
    }
}

function BuildHotelLoadingDiagramDataByDate(){
    //очищаем от наслоения графика на график
    $("#chart").html('');
    var dcalendarfrom = $(".dcalendarfrom").val();
    var dcalendarto = $(".dcalendarto").val();
    var Re = new RegExp("\/","g");
    dcalendarfrom = dcalendarfrom.replace(Re, "-");
    dcalendarto = dcalendarto.replace(Re, "-");
    line = [];

    $.getJSON( "/admin/ajax/BuildHotelLoadingDiagramDataByDate/dcalendarfrom/"+dcalendarfrom+"/dcalendarto/"+dcalendarto, function( data ){
        line = data;
        DrowHotelLoadingDiagramDataByDate(line);
    });
}

function DrowHotelLoadingDiagramDataByDate(line){
    $.jsDate.regional['en'] = {
        monthNames      : 'Январь Февраль Март Апрель Май Июнь Июль Август Сентябрь Октябрь Ноябрь Декабрь'.split(' '),
        monthNamesShort : 'Янв Фев Мар Апр Май Июнь Июль Авг Сент Окт Нояб Дек'.split(' '),
        dayNames        : 'Sunday Monday Tuesday Wednesday Thursday Friday Saturday'.split(' '),
        dayNamesShort   : 'Вос Пон Вт Ср Чет Пят Суб'.split(' ')
    };
    console.log(line);
    $.jsDate.regional.getLocale();
    $.jqplot.config.enablePlugins = true;
    var plot2 = $.jqplot('chart', [line], {
        title:'График загрузки отелей за период (дни)',
        axes:{
            xaxis:{
                renderer:$.jqplot.DateAxisRenderer,
                rendererOptions:{
                    tickRenderer:$.jqplot.CanvasAxisTickRenderer
                },
                tickOptions:{
                    fontSize:'10pt',
                    fontFamily:'Tahoma',
                    angle:-40
                }
            },
            yaxis:{
                rendererOptions:{
                    tickRenderer:$.jqplot.CanvasAxisTickRenderer,
                    tickOptions:{
                        fontSize:'10pt',
                        fontFamily:'Tahoma',
                        angle:30
                    }
                }
            },
        },
        series:[{ lineWidth:4, markerOptions:{ style:'square' } }],
        cursor:{
            zoom:true,
            looseZoom: true
        }
    });
}

var Notification = {
    // Add column
    add: function(type, header, message, code, options)
    {
        var icon = type == "ajaxerror" ? "error" : type;

        var div = $('<div class="notification" style="display: none">' +
        '<div class="notification-body">' +
        '<div class="notification-header">' +
        '<span class="icon">' +
        '<img class="icon" src="' + iconPath + '/16/' + icon + '.png" />' +
        '<span>' + header + '</span>' +
        '</span>' +
        '</div>' +
        '<div>' +
        (message ? message : '') +
        (code ?
        '<textarea style="display: none" onfocus="this.select()" wrap="off">' + code + '</textarea>' : '') +
        '</div>' +
        '</div>' +
        '<div class="notification-bottom"></div>' +
        (code ? '<a class="code" href="#code" onclick="$(this).parent().find(\'textarea\').toggle(500); return false;" />' : '') +
        '</div>');

        div.mouseover(function() {
            clearTimeout($(this).data('timeout'));
            clearInterval($(this).data('interval'));
        })
            .mouseout(function() {
                var obj = $(this);
                if(obj.hasClass('not-sticky'))
                {
                    var topSpotInt = setInterval( function ()
                    {
                        // Check to see if our notice is the first non-sticky notice in the list
                        if ( obj.prevAll( '.not-sticky' ).length == 0 )
                        {
                            // Stop checking once the condition is met
                            clearInterval( topSpotInt );
                            clearTimeout(obj.data('timeout'));

                            // Call the close action after the timeout set in options
                            obj.data('timeout', setTimeout( function ()
                                {
                                    if($.isFunction(obj.data('fn.removeNotice')))
                                    {
                                        obj.data('fn.removeNotice')();
                                    }
                                }, 2000
                            ));
                        }
                    }, 200 );
                    obj.data('interval', topSpotInt);
                }
            })
            .purr(options)
            .children('a.sticky')
            .click(function() {
                clearTimeout($(this).data('timeout'));
                clearInterval($(this).data('interval'));
                $(this).removeClass('not-sticky');
            });

        if(type == "ajaxerror")
        {
            div.find("textarea").toggle(500);
        }
    }
};