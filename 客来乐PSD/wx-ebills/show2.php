<style type="text/css">
    .ebill_box{
        max-width:500px;
        margin:0 auto 20px;
        background: #fff;
        color:#737070;
        -webkit-font-smoothing: antialiased;
    }
    .ebill_shopid{
        font-size:18px ;
        text-align: center;
        padding:6px;
    }
    .ebill_title{
        background: #EAEAEA;
        font-size:14px;
        font-weight: normal;
        line-height: 26px;
        padding-left:10px;
        color:#222;
    }
    .ebill_info{
        overflow: hidden;
        height: auto;
        padding:0 10px;
    }
    .ebill_info li{
        line-height: 24px;
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
    .ebill_box .line {
        height: 12px;
        background-size: 10px 12px;
        position: relative;
        top: 12px;
        background-image: -webkit-linear-gradient(-45deg, #FFF 25%, transparent 25%), -webkit-linear-gradient(45deg, transparent 75%, #FFF 75%);
    }
    .ebill_detil{
        padding-left:10px;
    }
    .ebill_detil li{
        border-bottom: 1px dashed #CAC8C8;
        padding:5px 0;
        list-style:none;
    }
    .ebill_detil span{
        display: inline-block;
        min-width:31%;
        max-width:31%;
        word-wrap:break-word;
        vertical-align: middle;
    }
    .gruy_line{
        border-bottom:1px solid #ebebeb;
        padding: 5px 10px;
    }
</style>
<div class='ebill_box'>
<img src="/wx-ebills/show-pic?id=<?=$model->id?>">
</div>