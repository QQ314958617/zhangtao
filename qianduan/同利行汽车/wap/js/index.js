
$(function() {
    $(".starbox").each(function() {
        var $this = $(this);
        var $num = $this.attr("num");
        var $html = "";

        var $on = Math.floor($num);
        var $half = Math.ceil($num) - Math.floor($num);
        var $off = 5 - Math.ceil($num);
        
        for(var i = $on;i--;) {
            $html += "<i class='m_ostar'></i>";
        }

        for(var i = $half;i--;) {
            $html += "<i class='m_hstar'></i>";
        }

        for(var i = $off;i--;) {
            $html += "<i class='m_nstar'></i>";
        }

        $html += "<span class='m_starnum'>" + $num + "星</span>";
        
        $this.html($html);
    })
})