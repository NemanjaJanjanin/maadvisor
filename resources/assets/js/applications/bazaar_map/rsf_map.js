var container = $('#rsf-map');
var map = $('img', container);

var map_real_width, map_real_height = 0;
var map_rendered_width, map_rendered_height = 0;

var marker_size = {w:30, h:34};

$("<img/>") // Make in memory copy of image to avoid css issues
.attr("src", $(map).attr("src"))
.load(function() {
    map_real_width = this.width;   // Note: $(this).width() will not
    map_real_height = this.height; // work for in memory images.
});

map_rendered_width = 1500;

container.click(function(e){
    var diff = map_real_width / map_rendered_width;

    var parentOffset = $(this).offset();
    var relX = e.pageX - parentOffset.left;
    var relY = e.pageY - parentOffset.top;

    createMarker({x: relX, y: relY});
    console.log(markers);
});


function createMarker(marker){
    var nx = marker.x;
    var ny = marker.y;

    var w = marker_size.w;
    var h = marker_size.h;
    var x = marker.x - Math.round(w / 2);
    var y = marker.y - Math.round(h / 2);
    var w2 = marker_size.w * 1.2;
    var h2 = marker_size.h * 1.2;
    var x2 = marker.x - Math.round(w2 / 2);
    var y2 = marker.y - Math.round(h2 / 2);

    var img = $('<img title="Unavailable" class="marker" src="' + marker_image + '" width="' + w + '" height="' + h + '" alt="" />').data('marker', marker);

    img.appendTo(container).css({display: 'block'});
    img.data('marker_number', $.isArray(markers) ? markers.length : 0);

    img.css({left: x, top: y});
    markers.push({x: nx, y: ny});
    img.hover(
        function(){
            $(this).animate({
                width: w2,
                height: h2,
                left: x2,
                top: y2
            }, 100);
        },
        function() {
            $(this).animate({
                width: w,
                height: h,
                left: x,
                top: y
            }, 100);
        }
    );
    img.click(function(e) {
        e.stopPropagation();
        var number = parseInt(img.data('marker_number'));
        delete markers[number];
        img.remove();
    });
}

function clearMarkers(){
    markers = [];
    $('.marker', container).remove();
}

function submitMap(){
    var form = $('#form-map');
    var input = $("<input>").attr("type", "hidden").attr("name", "markers").val(JSON.stringify(markers));
    form.append(input);
    form.submit();
}
