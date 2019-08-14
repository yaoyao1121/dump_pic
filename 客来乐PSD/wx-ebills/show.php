<style type="text/css">
     body{font-family:"Helvetica Neue",Helvetica,Arial,"Microsoft Yahei",sans-serif;}
    a, abbr, address, article, aside, audio, b, blockquote, body, caption, cite, code, dd, del, dfn, dialog, div, dl, dt, em, fieldset, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, hr, html, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, p, pre, q, samp, section, small, span, strong, sub, sup, tfoot, th, thead, time, tr, ul, var, video {
        border: 0;
        outline: 0;
        font-size: 100%;
    }
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        -webkit-touch-callout: none;
        -webkit-text-size-adjust:none;
        font-family:Helvetica,Arial;
        font-weight: bold;
        font-size:12px;
    }
    ol, ul {
        list-style: none;
    }
    html{
        -webkit-text-size-adjust: none;width:100%;
    }
    body * {
        margin: 0;
        padding: 0;
        font-weight:normal;
        box-sizing: border-box;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-font-smoothing: antialiased;
    }
    a {
        text-decoration: none;
        color: #fff;
    }
    img {
        -ms-interpolation-mode: bicubic;
        vertical-align: middle;
        font-size: 0;
    }
    h1,h2,h3,h4,h5,h6,b{font-size:100%;font-weight:normal;}
    select,input{vertical-align:middle}
    .clear { display:block !important; clear:both !important; float:none !important; margin:0 !important; padding:0 !important; height:0; line-height:0; font-size:0; overflow:hidden;}
    .clearfix { zoom:1;}
    .clearfix:after { content:""; display:block; clear:both; height:0; }
    .hide{display: none;}
    .hidden{
        visibility: hidden;
    }
    .fl{
        float:left;
    }
    .fr{
        float:right;
    }

    .bg{
        background-color: #EAEAEA;
    }
    .box{
        max-width:500px;
        margin:0 auto;
        background: #fff;
    }
    .piket_table{
        width: 100%;
        border-bottom: 2px solid #ebebeb;
        padding: 10px 0;
    }
    .piket_table{
        color: #737070;
        font-weight: 200;
        font-size: 14px;
        line-height: 26px;
        border-collapse: collapse;
    }
    .piket_table tbody th{
        text-align: left;
        font-weight: normal;
        padding-left: 10px;
    }
    .piket_table tbody td{
        text-align: right;
        padding-right: 10px;
    }
    .tr_bor{
        border-bottom: 2px solid #ebebeb;
    }
    .link{
        padding:0px 18px;
        color: #04BE02;
        border: 1px solid #04BE02;;
    }
    .piket_table .title{
        font-size:20px ;
        text-align: center;
        padding:10px;
    }
    .info{
        background: #EAEAEA;
    }
    .info h2{
        line-height: 26px;
        color:#222;
    }
    .line{
        height: 12px;
        background-size: 10px 12px;
        position: relative;
        top: 12px;
        background-image: -webkit-linear-gradient(-45deg, #FFF 25%, transparent 25%), -webkit-linear-gradient(45deg, transparent 75%, #FFF 75%);
    }
    .wrap{
        background: #fff;
        border-bottom: 1px solid #eee;
    }
    .c-f-textarea{
        height: 62px;
        width:100%;
        resize: none;
        padding:5px 5px;
        border:1px solid #EAEAEA;
        margin:5px auto 10px;
        display: block;
    }
    .upload{
        width:77px;
        height: 77px;
        border:2px solid #e6e6e6;
        background: url(/static/misc/ph.jpg) no-repeat center center;
        background-size: 24px auto;
        position: relative;
    }
    .upload input{
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }
    .upload span{
        position: absolute;
        right:-50px;
        top:18px;
    }
    .send{
        height: 45px;
        line-height: 45px;
        background:#fff;
        padding-left:10px;
        position: fixed;
        bottom:0;
        width:100%;
        font-size: 14px;
    }
    .send img{
        width:20px;
        padding-right: 4px;

    }
    .send button{
        position: absolute;
        right:0;
        top:0;
        height: 45px;
        background: #ff5101;
        color:#fff;
        width:100px;
        border:none;
        font-size: 14px;
    }
    .send button:focus{
        outline: none;
    }
</style>
<link rel="stylesheet" type="text/css" href="/static/company_css_js/ebill/jquery.raty.css">
<div class='wrap'>
    <table class='piket_table' style='border-bottom: none;'>
        <tr>
            <th>2006205468892011</th>
            <td>15464.00</td>
        </tr>
        <tr>
            <th colspan='2'>Apple iPhone 6 16G</th>
        </tr>
        <tr>
            <th colspan='2' style='padding-right: 10px;'>
                <textarea class='c-f-textarea'>亲，评价可以用语音了，我们帮你码字！
                </textarea>
            </th>
        </tr>
        <tr style='border-bottom: 1px solid #eee;'>
            <th colspan='2' style='padding-bottom: 10px;'>
                <div class='upload' >
                    <input class="weui_uploader_input" type="file" accept="image/*" multiple="">
                    <span>发照片</span>
                </div>
            </th>
        </tr>
        <tr>
            <th>整体评价</th>
            <td>
                <div id="default"></div>
            </td>
        </tr>
    </table>
</div>
<div class='wrap' style='margin-top:10px;'>
    <table class='piket_table'>
        <tr>
            <th>尺码满意</th>
            <td><div id="size"></div></td>
        </tr>
        <tr>
            <th>颜色满意</th>
            <td><div id="color"></div></td>
        </tr>
        <tr>
            <th>款式满意</th>
            <td><div id="style"></div></td>
        </tr>
        <tr>
            <th>店员评价</th>
            <td><div id="server"></div></td>
        </tr>
    </table>
</div>
<div class='send'>
    <!-- <img src="image/ok.jpg">匿名评价 -->
    <button>发表评价</button>
</div>
<script src="/static/company_css_js/ebill/jquery.raty.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.send button').on('click',function(){
                alert('点评成功')
        });
        /* 星级评价 */
        $('#default').raty();
        $('#size').raty();
        $('#color').raty();
        $('#style').raty();
        $('#server').raty();
    });
</script>