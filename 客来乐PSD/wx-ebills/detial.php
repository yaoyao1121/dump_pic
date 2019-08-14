<style type="text/css">
   .ebill_detial{
       padding:10px;
   }
   .ebill_detial .info{
        background-color: #fff;
        padding: 16px 0;
        position: relative;
        box-shadow: 0 1px 1px #CCC;
        border-radius: 4px;
        -webkit-border-radius:4px;
        position: relative;
        height: auto;
        display: block;
        color:#262626;
        margin-bottom: 10px;
        overflow: hidden;
   }
   .ebill_detial .info_left{
        position: absolute;
        width:55px;
        height: 55px;
        border-radius: 50%;
        box-shadow: 0 0 1px #666;
        top:50%;
        left:16px;
        transform: translateY(-50%);
        -weblit-transform: translateY(-50%);
        background:url(/static/misc/icon_.png) ;background-size:cover;
   }
   .ebill_detial .info_right{
        float:left;
        padding-left:85px;
   }
   .ebill_detial .info_right_cont{
        border-left:1px solid #dcdcde;
        padding-left:10px;
        position: relative;

   }
   .ebill_detial .info_right p{
        line-height: 22px;
        font-size:13px;
   }
   .ebill_detial i.ico {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        display: block;
        background-color: #f0f0f2;
        position: absolute;
        z-index:10000;
    }
     .ebill_detial i.ico_l {
        left: -9px;
        top:-25px;
    }
    .ebill_detial i.ico_r {
        left: -9px;
        bottom: -26px;
    }
</style>
<div class='ebill_detial'>
    <a class='info' href='/wx-ebills/show?id=1'>
        <div class='info_left'></div>
        <div class='info_right'>
            <div class='info_right_cont'>
                <i class="ico_l ico"></i>
                <i class="ico_r ico"></i>
                <p>商家门店:北京客来乐科技有限公司</p>
                <p>订单编号:2006205468892014</p>
                <p>交易时间:2016-10-25</p>
                <p>交易金额:9999.00元</p>
            </div>
        </div>
    </a>
    
</div>