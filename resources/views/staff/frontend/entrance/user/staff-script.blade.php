<script>
    $(function() {

        // 【搜索】
        $(".item-main-body").on('click', ".filter-submit", function() {
            $('#datatable_ajax').DataTable().ajax.reload();
        });
        // 【重置】
        $(".item-main-body").on('click', ".filter-cancel", function() {
            $('textarea.form-filter, input.form-filter, select.form-filter').each(function () {
                $(this).val("");
            });

//            $('select.form-filter').selectpicker('refresh');
            $('select.form-filter option').attr("selected",false);
            $('select.form-filter').find('option:eq(0)').attr('selected', true);

            $('#datatable_ajax').DataTable().ajax.reload();
        });
        // 【查询】回车
        $(".item-main-body").on('keyup', ".item-search-keyup", function(event) {
            if(event.keyCode ==13)
            {
                $("#filter-submit").click();
            }
        });




        // 【下载二维码】
        $("#item-main-body").on('click', ".item-download-qr-code-submit", function() {
            var that = $(this);
            window.open("/download/qr-code?type=item&id="+that.attr('data-id'));
        });

        // 【数据分析】
        $("#item-main-body").on('click', ".item-statistic-submit", function() {
            var that = $(this);
            window.open("/admin/statistic/statistic-item?id="+that.attr('data-id'));
//            window.location.href = "/admin/statistic/statistic-item?id="+that.attr('data-id');
        });

        // 【编辑】
        $(".user-option").on('click', ".staff-edit-this", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');
            window.location.href = "/item/staff-edit?item-id="+$user_option.attr('data-user-id');
        });

        // 【删除】
        $(".main-content-container").off("click",".staff-delete-this").on('click', ".staff-delete-this", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');

            layer.msg('确定要"删除"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/user/staff-delete') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "user-delete",
                            user_id: $user_option.attr('data-user-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $user_option.replaceWith(data.data.user_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【恢复】
        $(".main-content-container").off("click",".staff-restore-this").on('click', ".staff-restore-this", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');

            layer.msg('确定要"恢复"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/user/staff-restore') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "user-restore",
                            user_id: $user_option.attr('data-user-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $user_option.replaceWith(data.data.user_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【永久删除】
        $(".main-content-container").off("click",".staff-delete-permanently-this").on('click', ".staff-delete-permanently-this", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');

            layer.msg('确定要"永久删除"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/user/staff-delete-permanently') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "user-delete-permanently",
                            user_id: $user_option.attr('data-user-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                $user_option.remove();
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【发布】
        $(".main-content-container").off("click",".staff-publish-this").on('click', ".staff-publish-this", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');

            layer.msg('确定要"发布"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/user/staff-publish') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "user-publish",
                            user_id: $user_option.attr('data-user-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $user_option.replaceWith(data.data.user_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【完成】
        $(".main-content-container").off("click",".staff-complete-this").on('click', ".staff-complete-this", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');

            layer.msg('确认"完成"？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){

                    $.post(
                        "/user/staff-complete",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: 'user-complete',
                            user_id: $user_option.attr('data-user-id'),
                            type: 1
                        },
                        function(data){
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $user_option.replaceWith(data.data.user_html);
                            }
                        },
                        'json'
                    );

                }
            });


        });

        // 【启用】
        $(".main-content-container").on('click', ".item-enable-submit", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');

            layer.msg('确定"启用"？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/admin/item/item-admin-enable') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "user-enable",
                            user_id: $user_option.attr('data-user-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $user_option.replaceWith(data.data.user_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });
        // 【禁用】
        $(".main-content-container").on('click', ".item-disable-submit", function() {
            var $this = $(this);
            var $user_option = $this.parents('.user-option');

            layer.msg('确定"禁用"？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/admin/item/item-admin-disable') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "user-disable",
                            user_id: $user_option.attr('data-user-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $user_option.replaceWith(data.data.user_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });




        /*
         * 批量操作
         */
        // 【批量操作】全选or反选
        $(".main-list-body").on('click', '#check-review-all', function () {
            $('input[name="bulk-id"]').prop('checked',this.checked);//checked为true时为默认显示的状态
        });

        // 【批量操作】
        $(".main-list-body").on('click', '#operate-bulk-submit', function() {
            var $checked = [];
            $('input[name="bulk-id"]:checked').each(function() {
                $checked.push($(this).val());
            });

            layer.msg('确定"批量审核"么', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){

                    $.post(
                        "{{ url('/admin/item/item-operate-bulk') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "operate-bulk",
                            bulk_keyword_id: $checked,
                            bulk_keyword_status:$('select[name="bulk-operate-status"]').val()
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                $('#datatable_ajax').DataTable().ajax.reload(null,false);
                            }
                        },
                        'json'
                    );

                }
            });

        });

        // 【批量删除】
        $(".main-list-body").on('click', '#delete-bulk-submit', function() {
            var $checked = [];
            $('input[name="bulk-id"]:checked').each(function() {
                $checked.push($(this).val());
            });

            layer.msg('确定"批量删除"么', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){

                    $.post(
                        "{{ url('/admin/item/item-delete-bulk') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "user-delete-bulk",
                            bulk_keyword_id: $checked
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                $('#datatable_ajax').DataTable().ajax.reload(null,false);
                            }
                        },
                        'json'
                    );

                }
            });

        });




        // 内容【获取详情】
        $("#item-main-body").on('click', ".item-detail-show", function() {
            var that = $(this);
            var $data = new Object();
            $.ajax({
                type:"post",
                dataType:'json',
                async:false,
                url: "{{ url('/admin/item/item-get') }}",
                data: {
                    _token: $('meta[name="_token"]').attr('content'),
                    operate:"user-get",
                    id:that.attr('data-id')
                },
                success:function(data){
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        $data = data.data;
                    }
                }
            });
            $('input[name=id]').val(that.attr('data-id'));
            $('.item-user-id').html(that.attr('data-user-id'));
            $('.item-username').html(that.attr('data-username'));
            $('.item-title').html($data.title);
            $('.item-content').html($data.content);
            if($data.attachment_name)
            {
                var $attachment_html = $data.attachment_name+'&nbsp&nbsp&nbsp&nbsp'+'<a href="/all/download-item-attachment?item-id='+$data.id+'">下载</a>';
                $('.item-attachment').html($attachment_html);
            }
            $('#modal-body').modal('show');

        });






    });
</script>