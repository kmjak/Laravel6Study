<style>
    .msg{
        border: double 4px #ccc;
        margin: 10px;
        padding: 10px;
        background-color: #fafafa;
    }
    .msg-title{
        margin: 10px 20px;
        color: #999;
        font-size: 16pt;
        font-weight: bold;
    }
    .msg-content{
        margin: 10px 20px;
        color: #aaa;
        font-size: 12pt;
    }
</style>
<div class="msg">
    <p class="msg-title">{{$msg_title}}</p>
    <p class="msg-content">{{$msg_content}}</p>
</div>