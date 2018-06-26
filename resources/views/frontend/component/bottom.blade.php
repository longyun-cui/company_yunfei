
<script type="text/javascript" src="{{ asset('/templates/moban2030/assets/js/base.js') }}"></script>
<script type="text/javascript">
    $(function () {
        //初始化发表评论表单
        AjaxInitForm('feedback_form', 'btnSubmit', 1);
    });
</script>
<script type="text/javascript">
    $(function () {
        //初始化发表评论表单
        AjaxInitForm('feedback_form2', 'btnSubmit2', 1);
    });
</script>

<div class="act_nav">
    <div class="s_w">
        <div class="s_w_left">
            <span class="bm_icon"></span>
            <span class="tel_icon"></span>
            <span class="div_tel" style="font-size:19px">400-699-6769</span>
            <div style="clear:both"></div>
            <div>
                <script charset="utf-8"></script>
                <style type="text/css">
                    <!--
                    .unnamed1 {
                        font-family:Microsoft yahei,"宋体";
                        font-size: 12px;
                        line-height: 22px;
                    }
                    .submit
                    {
                        background-color:#ff312e;
                        FONT-SIZE: 14px;
                        color:#fff !important;
                        width:90px;
                        height:30px;
                        border:none;
                        cursor:pointer;
                    }
                    .submit_quxiao
                    {
                        background-color:#31a8fc;
                        FONT-SIZE: 14px;
                        color:#fff !important;
                        width:90px;
                        height:30px;
                        border:none;
                    }
                    .input {
                        font-size: 12px;
                        color: #000099;
                        background-color: #FFFFFF;
                        border: 1px groove #CCCCCC;
                        height:22px;
                    }
                    .menu4 {
                        FONT-SIZE: 14px; COLOR: #fff; FONT-FAMILY: Microsoft yahei,"宋体"; TEXT-DECORATION: none;LINE-HEIGHT: 21px;
                    }

                    .bm_icon { background:url(/templates/moban2030/assets/images/bm.png) 0 0 no-repeat; width:417px; height:42px; display:block; float:left; margin-top:10px; }

                    .tel_icon { background:url(/templates/moban2030/assets/images/tel.png) 0 0 no-repeat; width:59px; height:53px; display:block; float:left; margin-left:15px; }

                    .div_tel { color:#fff; font-size:22px; float:left; margin-left:15px; margin-top:10px;}

                    .breakNewsblock {
                        position: relative; margin: 0px auto; width: 310px; overflow: hidden
                    }

                    #breakNews .list6 {
                        margin-top: 5px; padding-left: 10px; width: 310px; float: left; height: 90px; color: #fff; font-size: 14px; overflow: hidden
                    }
                    #breakNews .list6 LI {
                        padding-bottom: 3px; padding-left: 0px; padding-right: 0px; padding-top: 3px
                    }
                    #breakNews .hit {
                        margin-top: 5px; width: 17px; float: right; height: 18px
                    }
                    #breakNews .hit SPAN {
                        width: 13px; display: block; margin-bottom: 6px; float: left; height: 10px
                    }

                    .act_nav { left:0px; width:100%;height:115px;bottom:0; position:fixed;z-index:10000; background:url("/templates/moban2030/assets/images/bottom.png") repeat; }
                    .act_nav .s_w { width:1000px; margin:10px auto;}
                    .act_nav .s_w .s_w_left { float:left; width:670px;}
                    .act_nav .s_w .s_w_right { float:left; width:310px; margin-left:20px;}
                    -->
                </style>
                <script language="javascript" type="text/javascript">

                    function ScrollText(content,btnPrevious,btnNext,autoStart,timeout,isSmoothScroll)
                    {
                        this.Speed = 1;
                        this.Timeout = timeout;
                        this.stopscroll =false;//是否停止滚动的标志位
                        this.isSmoothScroll= isSmoothScroll;//是否平滑连续滚动
                        this.LineHeight = 10;//默认高度。可以在外部根据需要设置
                        this.NextButton = this.$(btnNext);
                        this.PreviousButton = this.$(btnPrevious);
                        this.ScrollContent = this.$(content);
                        this.ScrollContent.innerHTML += this.ScrollContent.innerHTML;//为了平滑滚动再加一遍
                        if(this.PreviousButton)
                        {
                            this.PreviousButton.onclick = this.GetFunction(this,"Previous");
                            this.PreviousButton.onmouseover = this.GetFunction(this,"MouseOver");
                            this.PreviousButton.onmouseout = this.GetFunction(this,"MouseOut");
                        }
                        if(this.NextButton){
                            this.NextButton.onclick = this.GetFunction(this,"Next");
                            this.NextButton.onmouseover = this.GetFunction(this,"MouseOver");
                            this.NextButton.onmouseout = this.GetFunction(this,"MouseOut");
                        }
                        this.ScrollContent.onmouseover = this.GetFunction(this,"MouseOver");
                        this.ScrollContent.onmouseout = this.GetFunction(this,"MouseOut");
                        if(autoStart)
                        {
                            this.Start();
                        }
                    }
                    ScrollText.prototype = {
                        $:function(element)
                        {
                            return document.getElementById(element);
                        },
                        Previous:function()
                        {
                            this.stopscroll = true;
                            this.Scroll("up");
                        },
                        Next:function()
                        {
                            this.stopscroll = true;
                            this.Scroll("down");
                        },
                        Start:function()
                        {
                            if(this.isSmoothScroll)
                            {
                                this.AutoScrollTimer = setInterval(this.GetFunction(this,"SmoothScroll"), this.Timeout);
                            }
                            else
                            {
                                this.AutoScrollTimer = setInterval(this.GetFunction(this,"AutoScroll"), this.Timeout);
                            }
                        },
                        Stop:function()
                        {
                            clearTimeout(this.AutoScrollTimer);
                            this.DelayTimerStop = 0;
                        },
                        MouseOver:function()
                        {
                            this.stopscroll = false;
                        },
                        MouseOut:function()
                        {
                            this.stopscroll = false;
                        },
                        AutoScroll:function()
                        {
                            if(this.stopscroll)
                            {
                                return;
                            }
                            this.ScrollContent.scrollTop++;
                            if(parseInt(this.ScrollContent.scrollTop) % this.LineHeight != 0)
                            {
                                this.ScrollTimer = setTimeout(this.GetFunction(this,"AutoScroll"), this.Speed);
                            }
                            else
                            {
                                if(parseInt(this.ScrollContent.scrollTop) >= parseInt(this.ScrollContent.scrollHeight) / 2)
                                {
                                    this.ScrollContent.scrollTop = 0;
                                }
                                clearTimeout(this.ScrollTimer);
//this.AutoScrollTimer = setTimeout(this.GetFunction(this,"AutoScroll"), this.Timeout);
                            }
                        },
                        SmoothScroll:function()
                        {
                            if(this.stopscroll)
                            {
                                return;
                            }
                            this.ScrollContent.scrollTop++;
                            if(parseInt(this.ScrollContent.scrollTop) >= parseInt(this.ScrollContent.scrollHeight) / 2)
                            {
                                this.ScrollContent.scrollTop = 0;
                            }
                        },
                        Scroll:function(direction)
                        {
                            if(direction=="up")
                            {
                                this.ScrollContent.scrollTop--;
                            }
                            else
                            {
                                this.ScrollContent.scrollTop++;
                            }
                            if(parseInt(this.ScrollContent.scrollTop) >= parseInt(this.ScrollContent.scrollHeight) / 2)
                            {
                                this.ScrollContent.scrollTop = 0;
                            }
                            else if(parseInt(this.ScrollContent.scrollTop)<=0)
                            {
                                this.ScrollContent.scrollTop = parseInt(this.ScrollContent.scrollHeight) / 2;
                            }
                            if(parseInt(this.ScrollContent.scrollTop) % this.LineHeight != 0)
                            {
                                this.ScrollTimer = setTimeout(this.GetFunction(this,"Scroll",direction), this.Speed);
                            }
                        },
                        GetFunction:function(variable,method,param)
                        {
                            return function()
                            {
                                variable[method](param);
                            }
                        }
                    }
                    function ignoreError() {
                        return true;
                    }
                    window.onerror = ignoreError;
                </script>

                <script language="javascript">


                    function checkform1(){
                        if(form1.names.value=="")
                        {
                            alert("名字不能为空");
                            form1.name.focus();
                            return false;
                        }
                        var filter=/^1[3|4|5|8][0-9]\d{ 4,8}$/;
                        if(!filter.test(document.form1.tels.value))
                        {
                            alert("请输入正确的手机号!");
                            document.form1.tels.focus();
                            form1.dianhua.value="";
                            return false;
                        }
                        form1.submit();
                        return true;
                    }
                </script>
                <style type="text/css">
                    <!--
                    .style1 {color: #FF0000}
                    -->
                </style>
                <table class="txt_12_black" width="700" border="0" align="left" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>

                            <form id="feedback_form" id="form-book-appointment">

                                <input type="hidden" value="南浔孔雀城预约报名" name="txtTitle" id="txtTitle">

                                <td class="menu4" width="43" valign="middle" height="35" align="center">姓名：</td>

                                <td class="menu4" width="s145" valign="middle">
                                    <div align="left">
                                        <input name="name" class="input" size="18" maxlength="18" type="text">
                                    </div>
                                </td>

                                <td class="menu4" width="43">手机：</td>

                                <td class="menu4" width="210" valign="middle">
                                    <div align="left">
                                        <input name="mobile" class="input" size="28" maxlength="28" type="text">
                                    </div>
                                </td>

                            </form>

                            <td colspan="2" width="223" valign="middle" height="40" align="left">
                                <input name="btnSubmit" class="submit" id="btnSubmit" value="立即预约" type="submit"> &nbsp;
                                <input name="Submit2" value="清空" class="submit_quxiao" type="reset"> &nbsp;
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{--<!-- 滚动文字 -->--}}
        <div class="s_w_right">
            <div class="breakNewsblock">
                <div id="breakNews">
                    <ul id="breakNewsList" class="list6">
                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓慧敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>
                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>

                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓慧敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>
                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓慧敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>

                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓慧敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>
                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓慧敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>

                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓慧敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>
                        <li>黄丽燕	成功报名看房	139****3077</li>
                        <li>吴兴良	成功报名看房	139****1638</li>
                        <li>张军	成功报名看房	138****9689</li>
                        <li>翟敦超	成功报名看房	135****8928</li>
                        <li>李晓通	成功报名看房	137****0150</li>
                        <li>邓慧敏	成功报名看房	139****6384</li>
                        <li>姚贤荣	成功报名看房	133****6012</li>
                    </ul>
                </div>
            </div>
            <script language="javascript" type="text/javascript">
                var scroll2 = new ScrollText("breakNewsList","pre2","next2",true,50,true);
                scroll2.LineHeight = 22;
            </script><!-- 滚动文字结束--></div>

    </div>
</div>


<script>
    $(function() {

        // 添加or编辑
        $("#btnSubmit").on('click', function() {

            var form = $("#form-book-appointment");
            var name = form.find('input[name=name]');
            var name_val = name.val();
            var mobile = form.find('input[name=mobile]');
            var mobile_val = mobile.val();

            console.log(name);
            console.log(mobile_val);


            if(name_val == "")
            {
                layer.msg("名字不能为空");
                name.focus();
                return false;
            }

            var filter=/^1[3|4|5|7|8][0-9]\d{4,8}$/;
            if(!filter.test(mobile.val()))
            {
//                layer.msg("请输入正确的手机号!");
                mobile.focus();
                mobile.value="";
                return false;
            }

            var options = {
                url: "{{url('/book/appointment')}}",
                type: "post",
                dataType: "json",
                // target: "#div2",
                success: function (data) {
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        layer.msg(data.msg);
                        {{--location.href = "{{url('/admin/item/list')}}";--}}
                        return true;
                    }
                }
            };
            $("#form-book-appointment").ajaxSubmit(options);
        });

    });
</script>