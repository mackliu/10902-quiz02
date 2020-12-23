<style>
.nav{
    cursor:pointer;
    color:blue;
    margin:10px 0;
}
.nav:hover{
    text-decoration:underline;
}
</style>
<div>目前位置：首頁 > 分類網誌 > <span id='nav'></span></div>
<fieldset style="display:inline-block;vertical-align:top">
    <legend>分類網誌</legend>
<div id="t1" onclick="nav(this)" class="nav">健康新知</div>
<div id="t2" onclick="nav(this)" class="nav">菸害防治</div>
<div id="t3" onclick="nav(this)" class="nav">癌症防治</div>
<div id="t4" onclick="nav(this)" class="nav">慢性病防治</div>

</fieldset>
<fieldset style="display:inline-block">
    <legend>文章列表</legend>
    <div class="titles"></div>
</fieldset>

<script>

$("#nav").text($("#t1").text());


function nav(type){
    let str=$(type).text()
    //console.log(str)
    $("#nav").text(str);
    let t=$(type).attr('id').replace("t","");
    getTitle(t)

}

function getTitle(type){
    $.get("api/get_title.php",{type},function(titles){
        $(".titles").html(titles)

    })
}

</script>