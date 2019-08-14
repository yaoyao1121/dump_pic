<style type="text/css">
    .ebill_box{
        background: #fff;
        color:#737070;
        -webkit-font-smoothing: antialiased;
        padding:20px 8px;
        font-family: Consolas,Monaco,monospace;
        position: absolute;
        left: 50%;
        top: 10px;
        border-top:10px solid #10ad61;
        transform: translatex(-50%);
        -webkit-transform: translatex(-50%);
        -moz-transform: translatex(-50%);
        margin-bottom: 20px;
    }
    .ebill_box .line {
        height: 10px;
        background: url(/static/misc/line_icon.jpg) repeat-x left top;
        background-size: 18px auto;
        position: absolute;
        bottom: -4px;
        width: 100%;
        left: 0;
        }
</style>
 <div class='ebill_box'>
 <?php
     $str=str_replace(" ",'&nbsp;',$ossfile->getOssData());
     echo nl2br($str);
  ?>
  <div class="line"></div>
</div>
<!--<style type="text/css">
     .ebill_box{
        margin: 0 auto;
        max-width: 500px;
        color:#262626 !important;
        -webkit-font-smoothing: antialiased;
     }
     .ebill_box .info{
        padding: 10px 10px 0;
     }
     .ebill_box .c_detail_top{
        background: #fff;
        padding: 16px 0;
        border-bottom: 1px solid #f0f0f0;
        position: relative;
     }
     .ebill_box i.ico {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        display: block;
        background-color: #f0f0f2;
        position: absolute;
        z-index:10000;
    }
     .ebill_box i.ico_l {
        left: -9px;
        bottom: -9px;
    }
    .ebill_box i.ico_r {
        right: -9px;
        bottom: -9px;
    }
    .ebill_box .c_detail_top i.logo{
        width:55px;
        height: 55px;
        margin:0 auto 10px;
    }
    .ebill_box .c_detail_top h4{
        font-size:14px;
        color:#262626;
        text-align: center;
    }
    .ebill_box .c_detail_cont{
        background-color: #FFF;
        padding: 10px;
        position: relative;
        border-bottom: 1px solid #f0f0f0;
    }
    .ebill_box .c_detail_cont h1{
        font-size:14px;
        line-height: 24px;
        letter-spacing: 1px;
    }
    .ebill_box .c_detail_cont p{
        font-size:16px;
        line-height: 24px;
        letter-spacing: 1px;
    }
    .ebill_box .c_detail_cont table{
        width:100%;
    }
    .ebill_box .c_detail_cont table td{
        padding:7px 2px;
    }
    .ebill_box .c_detail_cont table td:nth-child(2){
        width:40px;
    }
    .ebill_box .c_detail_cont table td:nth-child(3){
        width:40px;
    }
    .ebill_box .c_detail_cont table td:nth-child(4){
        width:60px;
    }
    .ebill_box .c_detail_cont table  a{
        padding:5px 5px;
        border:1px solid #ff804c;
        color:#ff804c;
        border-radius: 4px;
        -webkit-border-radius:4px;
        font-size:12px;
    }
    .ebill_info{
        overflow: hidden;
        height: auto;
    }
    .ebill_info li{
        line-height: 28px;
        font-size:14px;
        list-style:none;
        overflow: hidden;
    }
    .ebill_info .l_con{
        float:left;
    }
    .ebill_info .r_con{
        float:right;
    }
</style>
<div class='ebill_box'>
    <div class='info'>
        <div class="c_detail_top">
            <i class="ico_l ico"></i>
            <i class="ico_r ico"></i>
            <i class="logo circle fa" style="background:url(/static/misc/icon_.png) ;background-size:cover;"></i>
            <h4>北京客来乐科技有限公司</h4>
        </div>
        <div class="c_detail_cont">
            <i class="ico_l ico"></i>
            <i class="ico_r ico"></i>
            <h1>订单信息</h1>
            <p>商家门店:北京客来乐科技有限公司</p>
            <p>订单编号:2006205468892011</p>
            <p>交易时间:2016-10-25</p>
            <p>交易金额:15464.00元</p>
        </div>
        <div class="c_detail_cont">
            <h1>商品信息</h1>
            <table>
                <thead>
                    <tr>
                        <td>商品</td>
                        <td>数量</td>
                        <td>金额</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Apple iPhone 6 16G</td>
                        <td>1</td>
                        <td>¥6088</td>
                        <td><a href='/wx-ebills/shows'>评价有礼</a></td>
                    </tr>
                    <tr>
                        <td>Apple iPad 3 16G</td>
                        <td>1</td>
                        <td>¥3288</td>
                        <td><a href='/wx-ebills/shows'>评价有礼</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="c_detail_cont">
            <ul class='ebill_info'>
                <li>
                    <span class='l_con'>合计金额</span>
                    <span class='r_con'>¥15464.00</span>
                </li>
                <li>
                    <span class='l_con'>折扣</span>
                    <span class='r_con'>¥0.00</span>
                </li>
                <li>
                    <span class='l_con'>实收金额</span>
                    <span class='r_con'>¥15464.00</span>
                </li>
            </ul>
        </div>
    </div>-->
</div>
